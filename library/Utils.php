<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/3/27
 * Time: 17:09
 */
namespace library;

use library\EncryptLib\Aes;

class Utils
{

    /**
     * AES加密
     * @param $str 待加密的串
     * @return string
     */
    public static function aesEncode($str)
    {
        $aes = Aes::create(C('AES_KEY'));
        return $aes->AESEncryptCtr($str);
    }

    /**
     * AES解密
     * @param $str 待解密的串
     * @return string
     */
    public static function aesDecode($str)
    {
        $aes = Aes::create(C('AES_KEY'));
        return $aes->AESDecryptCtr($str);
    }

    /**
     * （但店铺）生成静态唯一订单号(必须为16位)
     * 格式:
     *    2015032776489872
     * @return string
     */
    public static function createOrderNo()
    {
        $date = date('Ymd', time());
        $ary = str_split(substr(uniqid(), 7, 13), 1);
        $ascii = array_map('ord', $ary);
        $str = substr(implode(null, $ascii), 0, 8);
        return $date.$str;
    }

    /**
     * （多店铺）生成静态唯一总单号(必须为19位)
     * 格式:
     *    20150327112321 76489872
     * @return string
     */
    public static function createOrderMergeNo()
    {
        $date = date('YmdHis', time());
        $ary = str_split(uniqid(), 1);//substr(uniqid(),5,13),1);
        $ascii = array_map('ord', $ary);
        $sign = implode(null, $ascii);
        $str = substr($sign, -5);
        return $date.$str;
    }

    /**
     * 响应包
     *
     * @param int $code 提示码
     * @param string $errmsg 提示信息
     * @param mixed $data 响应数据
     * @param string $type 响应数据格式类型
     */
    public static function response($code = 0, $errmsg = 'ok', $data = null, $type = 'json')
    {
        $base = array('errno' => $code, 'errmsg' => $errmsg);
        $data = array_merge($base, array("data" => $data));
        switch ($type) {
            case 'xml':
                echo xml_encode($data, 'root');
                break;
            case 'json':
            default:
                echo json_encode($data);
        }
    }

    /**
     * 记录日志文件
     *
     * @param $logPath 日志文件
     * @param $massage 日志内容
     * @return int
     */
    public static function log($logPath, $massage)
    {
        $log = "执行日期：".date('Y-m-d H:i:s', time()).PHP_EOL.$massage.PHP_EOL.PHP_EOL;
        return file_put_contents(sprintf($logPath, date('Y-m-d', time())), $log, FILE_APPEND);
    }

    /**
     * 文本入库前的过滤工作
     *
     * @param $textString
     * @param bool $htmlspecialchars
     * @return string
     */
    public static function getSafeText($textString, $htmlspecialchars = true)
    {
        return $htmlspecialchars
            ? htmlspecialchars(trim(strip_tags(self::qj2bj($textString))))
            : trim(strip_tags(self::qj2bj($textString)))
            ;
    }

    /**
     * 全角 => 半角
     *
     * @param string $string
     * @return string
     */
    public static function qj2bj($string)
    {
        $convert_table = array (
            '０' => '0','１' => '1','２' => '2','３' => '3','４' => '4',
            '５' => '5','６' => '6','７' => '7','８' => '8','９' => '9',
            'Ａ' => 'A','Ｂ' => 'B','Ｃ' => 'C','Ｄ' => 'D','Ｅ' => 'E',
            'Ｆ' => 'F','Ｇ' => 'G','Ｈ' => 'H','Ｉ' => 'I','Ｊ' => 'J',
            'Ｋ' => 'K','Ｌ' => 'L','Ｍ' => 'M','Ｎ' => 'N','Ｏ' => 'O',
            'Ｐ' => 'P','Ｑ' => 'Q','Ｒ' => 'R','Ｓ' => 'S','Ｔ' => 'T',
            'Ｕ' => 'U','Ｖ' => 'V','Ｗ' => 'W','Ｘ' => 'X','Ｙ' => 'Y',
            'Ｚ' => 'Z','ａ' => 'a','ｂ' => 'b','ｃ' => 'c','ｄ' => 'd',
            'ｅ' => 'e','ｆ' => 'f','ｇ' => 'g','ｈ' => 'h','ｉ' => 'i',
            'ｊ' => 'j','ｋ' => 'k','ｌ' => 'l','ｍ' => 'm','ｎ' => 'n',
            'ｏ' => 'o','ｐ' => 'p','ｑ' => 'q','ｒ' => 'r','ｓ' => 's',
            'ｔ' => 't','ｕ' => 'u','ｖ' => 'v','ｗ' => 'w','ｘ' => 'x',
            'ｙ' => 'y','ｚ' => 'z','　' => ' ','：' => ':','。' => '.',
            '？' => '?','，' => ',','／' => '/','；' => ';','［' => '[',
            '］' => ']','｜' => '|','＃' => '#',
        );
        return strtr($string, $convert_table);
    }

    /**
     * 过滤字符串中的html
     * @param $str
     * @return mixed
     */
    public static function clearHtml($str)
    {
        $preg = "/<\/?[^>]+>/i";
        $str = preg_replace($preg, '', $str);
        return $str;
    }

    /**
     * 模拟POST
     * @param $url
     * @param $params
     * @return bool|mixed
     */
    public static function getCurl($url, $params = null)
    {
        return HttpClient::post($url, $params);
    }

    /**
     * @param $rootPath 图片保存目录
     * @param array $thumb 生成缩略图的尺寸
     * @param bool $multiple  是否上传多张图片
     * @return array  返回缩略图路径名数组
     */
    public static function uploadImage($files, $rootPath, $thumb = array(), $multiple = false)
    {
        $muf = 1.5;  //图片最大尺寸
        $auf = array('jpg', 'gif', 'png', 'jpeg');
        // 图片最大的尺寸不能大于php.ini中设置的尺寸
        $phpiniMUF = (int) ini_get('upload_max_filesize');
        // 计算比较小的值做为最终的限制
        $muf = min($muf, $phpiniMUF);
        $upload = new \Think\Upload(array(
            'maxSize' => $muf * 1024 * 1024,
            'exts' => $auf,
            'rootPath' => $rootPath,
            'autoSub' => true,
            'subName' => array('date','Ymd')
        ));
        // 上传文件
        $info = $upload->upload($files);

        // 上传成功
        if ($info) {
            $thumb_images = array();
            $old_images = array();
            if ($multiple) {
                $image = new \Think\Image();
                // 循环每图片
                foreach ($info as $k => $v) {
                    $singleImage = array();
                    // 取出这个图片的原图
                    if ($thumb) {
                        // 循环生成缩略图
                        foreach ($thumb as $k1 => $size) {
                            // 打开原图
                            $old = $rootPath . $v['savepath'] . $v['savename'];

                            $image->open($old);
                            // 拼出缩略图的名称
                            $thumbName = $v['savepath'] . 'thumb_' . $k1 . '_' . $v['savename'];
                            $image->thumb($size[0], $size[1])->save($rootPath . $thumbName);
                            // 把生成的缩略图的路径放到数组中
                            $singleImage[] = $thumbName;
                            $old_images[] = '/upload/' . $v['savepath'] . $v['savename'];
                        }
                    }
                    // 把这一个图片的数组放到总的数组中
                    $thumb_images[] = $singleImage;
                }
                return array(
                    'images' => $thumb_images,
                    'old_images' => $old_images
                );
            } else {
                // 上传之后原图片的路径
                $images[0] = $info[0]['savepath'] . $info[0]['savename'];
                // 如果传了第三个参数就生成缩略图
                if ($thumb) {
                    $image = new \Think\Image();

                    // 循环生成缩略图
                    foreach ($thumb as $k => $v) {
                        $image->open($rootPath . $images[0]);
                        // 循环图片的名称
                        $thumbName = $info[0]['savepath'] . 'thumb_' . $k . '_' . $info[0]['savename'];
                        $image->thumb($v[0], $v[1])->save($rootPath . $thumbName);
                        // 把生成的缩略图的路径放到数组中
                        $images[] = $thumbName;
                    }
                }
                return array(
                    'images' => $images,
                    'old_images' => array($rootPath . $images[0])
                );
            }
        } else {
            $error = $upload->getError();
            return array(
                'error' => $error,
            );
        }
    }

    /**
     * 图片上传张数和尺寸控制
     */
    public static function imgNumAndSizeControl()
    {

        if (count($_FILES['goods_img']['name']) > 5) {
            $result = array('result'=>false,'data'=>'','message'=> '最多上传五张图！');
            echo json_encode($result);
            exit();
        }
        foreach ($_FILES['goods_img']['size'] as $size) {
            if ($size >= 1.5 * 1024 *1024) {
                $result = array('result'=>false,'data'=>'','message'=> '图片最大不能超过1.5M！');
                echo json_encode($result);
                exit();
            }
        }
    }
}
