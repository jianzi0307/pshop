<?php
/**
 * ----------------------
 * ErrorCode.php
 * 
 * User: jian0307@icloud.com
 * Date: 2015/6/9
 * Time: 16:11
 * ----------------------
 */

namespace library\SmsLib\SmsCloopen;


/**
 * 云通讯，模板短信错误码
 * Class ErrorCode
 * @package library\SmsLib\SmsCloopen
 */
class ErrorCode {
    /**
     * 错误码定义
     * @var array
     */
    static $_ERROR_NO_ = array(
        '000000'        => '发送成功',
        '172001'        => '网络错误',
        '172004'        =>	'IP为空',
        '172005'        =>	'端口错误（小于等于0）',
        '172013'	    =>  '版本号为空',
        '172006'	    =>  '主帐号为空',
        '172007'	    =>  '主帐号令牌为空',
        '172012'	    =>  '应用ID为空',
    );
}