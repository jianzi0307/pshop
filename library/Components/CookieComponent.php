<?php
/**
 * ----------------------
 * CookieComponent.php
 * 
 * User: jian0307@icloud.com
 * Date: 2015/6/1
 * Time: 17:39
 * ----------------------
 */

namespace library\Components;


use Phalcon\Mvc\User\Component;

class CookieComponent extends Component{
    //cookie前缀
    private $pre        = 'shop_';

    //默认cookie密钥
    private $defaultKey = 'app';

    //安全级别
    private $level      = 'normal';

    /**
     * 设置前缀
     * @param $pre
     */
    public function setPre($pre) {
        $this->pre = $pre;
    }

    /**
     * 设置cookie的方法
     * @param $name
     * @param string $value
     * @param int $time
     * @param string $path
     * @param null $domain
     */
    public function set($name,$value='',$time=7,$path='/',$domain=null) {
        if($time <= 0) {
            $expire = -100;
        } else {
            $expire = time() + 60 * 60 * 24 * $time;
        }
        $this->cookies->set($this->pre.'safecode',ICrypt::encode($this->cookieId(),$this->getKey()),time() + 60 * 60 * 12 * 24 * 7,$path,null,$domain);
        if(is_array($value) || is_object($value)) {
            $value = serialize($value);
        }
        $value = ICrypt::encode($value , $this->getKey() );
        $this->cookies->set($this->pre.$name,$value,$expire,$path,null,$domain);
    }

    /**
     * @brief 取得cookie字段值的方法
     * @param string $name 字段名
     * @return mixed 对应的值
     */
    public function get($name) {
        $is_checked = $this->checkSafe();
        if($is_checked == 1) {
            if( $this->cookies->has($this->pre.$name)) {
                $cookie= ICrypt::decode($this->cookies->get($this->pre.$name),$this->getKey());
                $tem = substr($cookie,0,10);
                if(preg_match('/^[Oa]:\d+:.*/',$tem)) {
                    return unserialize($cookie);
                } else {
                    return $cookie;
                }
            }
            return null;
        } else if($is_checked == 0) {
            $this->clear($this->pre.'safecode');
        }
        return null;
    }

    /**
     * @brief 清除cookie值的方法
     * @param string $name 字段名
     */
    public function clear($name) {
        $this->set($name,'',0);
    }

    /**
     * @brief 清除所有的cookie数据
     */
    public function clearAll() {
        $preLen = strlen($this->pre);
        foreach($_COOKIE as $name => $val) {
            if(strpos($name,$this->pre) === 0) {
                $this->clear(substr($name,$preLen));
            }
        }
    }

    /**
     * @brief 安全检测函数
     * @return int 1:表示通过，0：表示未通过
     */
    private function checkSafe() {
        if(isset($_COOKIE[$this->pre.'safecode'])) {
            if( $this->cookieId() == ICrypt::decode($_COOKIE[$this->pre.'safecode'],$this->getKey())) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return -1;
        }
    }

    /**
     * @brief 取得密钥
     * @return string 返回密钥值
     */
    private function getKey() {
        $encryptKey = isset(IWeb::$app->config['encryptKey']) ? IWeb::$app->config['encryptKey'] : $this->defaultKey;
        $encryptKey .= $this->cookieId();
        return $encryptKey;
    }

    /**
     * @brief 取得cookie的安全码
     * @return String cookie的安全码
     */
    private function cookieId() {
        $level = $this->getLevel();
        if($level == 'none') {
            return '';
        } else if($level == 'normal') {
            return md5($this->request->getClientAddress());
        }
        return md5($this->request->getClientAddress().$_SERVER["HTTP_USER_AGENT"]);
    }

    //获取配置的前缀
    private function getPre() {
        return $this->pre;
    }

    //获取当前的安全级别
    private function getLevel() {
        return $this->level;
    }
}