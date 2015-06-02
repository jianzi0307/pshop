<?php
/**
 * ----------------------
 * MobileDetect.php
 * 
 * User: jian0307@icloud.com
 * Date: 2015/6/1
 * Time: 12:50
 * ----------------------
 */

namespace library;

require_once dirname(__FILE__) . '/Mobile_Detect.php';

/**
 * 设备检测类
 * Class MobileDetect
 * @package library
 */
class MobileDetect extends \Mobile_Detect {

    /**
     * 是否微信
     * @return bool
     */
    public function isWechat() {
        if( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
            return true;
        }
        return false;
    }
}