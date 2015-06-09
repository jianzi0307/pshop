<?php
namespace library\SmsLib\SmsCloopen;

/**
 * ----------------------
 * TemplateSms.php
 * 
 * User: jian0307@icloud.com
 * Date: 2015/6/9
 * Time: 15:27
 * ----------------------
 */
use library\SmsLib\BaseSms;

/**
 * 容联*云通讯模板短信
 * http://www.yuntongxun.com
 * @see http://docs.yuntongxun.com/index.php/%E5%BC%80%E5%8F%91%E6%8C%87%E5%8D%97:%E7%9F%AD%E4%BF%A1%E9%AA%8C%E8%AF%81%E7%A0%81/%E9%80%9A%E7%9F%A5
 * @see http://docs.yuntongxun.com/index.php/%E6%A8%A1%E6%9D%BF%E7%9F%AD%E4%BF%A1
 * Class TemplateSms
 */
class CloopenSms extends BaseSms {
    //主账户Id,登陆云通讯网站后，可在“控制台-应用”中看到开发者主账号ACCOUNT SID。
    private $account_sid;
    //主账号Token，登陆云通讯网站后，可在控制台-应用中看到开发者主账号AUTH TOKEN
    private $account_token;
    //服务网关ip或url
    private $server_ip;
    //服务网关端口
    private $server_port;
    //应用Id，如果是在沙盒环境开发，请配置“控制台-应用-测试DEMO”中的APPID。如切换到生产环境，请使用自己创建应用的APPID。
    private $app_id;
    //版本
    private $soft_version = '2013-12-26';
    //时间戳
    private $timestamp_;
    //包体格式，可填值：json 、xml
    private $body_type = "json";
    //短信模板ID，到短信模板申请页面查看
    private $template_id;
    //是否是沙盒模式
    private $is_sandbox = false;
    //沙盒环境（用于应用开发调试）
    private $sandbox_url = 'sandboxapp.cloopen.com';
    //生产环境（用户应用上线使用）
    private $product_url = 'app.cloopen.com';

    /**
     * 配置
     *
     * @param $config
     * array(
     *      'account_sid' => '8a48b5514dd25566014dd776124a0429',
     *      'account_token' => '4eb09d93e6a346128dfb59670cae009c',
     *      'app_id' => '8a48b5514dd25566014dd7765524042b',
     *      'is_sandbox' => true,
     *      'template_id' => 1
     *   )
     * @throws \Phalcon\Exception
     */
    public function setConf( $config ) {
        parent::setConf( $config );

        //设置主帐号
        $this->account_sid = $config['account_sid'];
        $this->account_token = $config['account_token'];
        $this->app_id = $config['app_id'];

        $this->timestamp_ = date("YmdHis");
        $this->is_sandbox = $config['is_sandbox'];
        $this->template_id = $config['template_id'];
        $this->server_ip = $this->is_sandbox ? $this->sandbox_url : $this->product_url;
        $this->server_port = isset($config['server_port']) ? $config['server_port'] : '8883';
        $this->soft_version = isset($config['soft_version']) ? $config['soft_version'] : '2013-12-26';
        $this->body_type = isset($config['body_type']) ? $config['body_type'] : 'json';
    }

    /**
     * 发送模板短信
     * @param string $mobile 单个手机号或者多个手机号以逗号分割
     * @param null $message 数组，一条信息或者多条信息,约束一下格式：[‘验证码’，‘超时时间’]
     * @param int $sceneType 场景ID
     * @return stdClass|mixed|\SimpleXMLElement
     */
    public function send($mobile,$message = null,$sceneType = 1) {
        parent::send($mobile,$message,$sceneType);

        //主帐号鉴权信息验证，对必选参数进行判空。
        $response = $this->accAuth();
        if( !empty($response) ){
            return $response;
        }
        // 拼接请求包体
        if( $this->body_type == "json" ){
            $data="";
            for($i=0;$i<count($message);$i++){
                $data = $data. "'".$message[$i]."',";
            }
            $body= "{'to':'$mobile','templateId':'$this->template_id','appId':'$this->app_id','datas':[".$data."]}";
        } else {
            $data="";
            for($i=0;$i<count($message);$i++){
                $data = $data. "<data>".$message[$i]."</data>";
            }
            $body="<TemplateSMS>
                    <to>$mobile</to>
                    <appId>$this->app_id</appId>
                    <templateId>$this->template_id</templateId>
                    <datas>".$data."</datas>
                  </TemplateSMS>";
        }
        //$this->showlog("request body = ".$body);
        // 大写的sig参数
        $sig =  strtoupper(md5($this->account_sid . $this->account_token . $this->timestamp_));
        // 生成请求URL
        $url="https://$this->server_ip:$this->server_port/$this->soft_version/Accounts/$this->account_sid/SMS/TemplateSMS?sig=$sig";
        //$this->showlog("request url = ".$url);
        // 生成授权：主帐户Id + 英文冒号 + 时间戳。
        $authen = base64_encode($this->account_sid . ":" . $this->timestamp_);
        // 生成包头
        $header = array("Accept:application/$this->body_type","Content-Type:application/$this->body_type;charset=utf-8","Authorization:$authen");
        // 发送请求
        $result = $this->curl_post($url,$body,$header);
        //$this->showlog("response body = ".$result);
        if( $this->body_type == "json" ){//JSON格式
            $datas = json_decode($result);
        } else { //xml格式
            $datas = simplexml_load_string(trim($result," \t\n\r"));
        }
        //重新装填数据
        if( $datas->statusCode == '000000' ) {
            $this->response->code = 0;
            $this->response->message = ErrorCode::$_ERROR_NO_[(string)$datas->statusCode];
            $this->response->data = $datas->templateSMS;
        } else {
            $this->response->code = (string) $datas->statusCode;
            $this->response->message = isset(ErrorCode::$_ERROR_NO_[$this->response->code]) ? ErrorCode::$_ERROR_NO_[$this->response->code] : '未知错误';
            $this->response->data = $datas->templateSMS;
        }
        return $this->response;
    }

    /**
     * 获取验证码内容
     * @return mixed
     */
    public function getSmsCode() {
        return $this->message[0];
    }

    /**
     * 主帐号鉴权
     */
    public function accAuth() {
        if( empty( $this->server_ip ) ){
            $this->response->code = 172004;
            $this->response->message = ErrorCode::$_ERROR_NO_['172004'];
            $this->response->data = null;
            return $this->response;
        }
        if( empty($this->server_port) ){
            $this->response->code = 172005;
            $this->response->message = ErrorCode::$_ERROR_NO_['172005'];
            $this->response->data = null;
            return $this->response;
        }
        if( empty($this->soft_version) ){
            $this->response->code = 172013;
            $this->response->message = ErrorCode::$_ERROR_NO_['172013'];
            $this->response->data = null;
            return $this->response;
        }
        if( empty($this->account_sid) ){
            $this->response->code = 172006;
            $this->response->message = ErrorCode::$_ERROR_NO_['172006'];
            $this->response->data = null;
            return $this->response;
        }
        if( empty($this->account_token) ){
            $this->response->code = 172007;
            $this->response->message = ErrorCode::$_ERROR_NO_['172007'];
            $this->response->data = null;
            return $this->response;
        }
        if( empty($this->app_id) ){
            $this->response->code = 172012;
            $this->response->message = ErrorCode::$_ERROR_NO_['172012'];
            $this->response->data = null;
            return $this->response;
        }
    }

    /**
     * 发起HTTPS请求
     */
    public function curl_post($url,$data,$header,$post=1) {
        //初始化curl
        $ch = curl_init();
        //参数设置
        $res= curl_setopt ($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt ($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, $post);
        if($post)
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
        $result = curl_exec ($ch);
        //连接失败
        if($result == FALSE){
            if($this->body_type=='json'){
                $result = "{\"statusCode\":\"172001\",\"statusMsg\":\"网络错误\"}";
            } else {
                $result = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?><Response><statusCode>172001</statusCode><statusMsg>网络错误</statusMsg></Response>";
            }
        }
        curl_close($ch);
        return $result;
    }
}