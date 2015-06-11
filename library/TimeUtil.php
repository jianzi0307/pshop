<?php
/**
 * 时间工具类
 * ----------------------
 * TimeUtil.php
 * 
 * User: jian0307@icloud.com
 * Date: 2015/6/11
 * Time: 9:30
 * ----------------------
 */

namespace library;

class TimeUtil {
    /**
     * 获取当前时间
     * @param $format 格式化字符串
     * @return int|string
     */
    static public function now( $format ) {
        if( !empty($format) ) {
            return self::datetime($format);
        }
        return self::time();
    }
    /**
     * 返回当前时间戳
     * @param string $timestr 格式化字符串 ，例如：'Y-m-d H:i:s'
     * @return int 时间戳
     */
    static public function time( $timestr = '' ) {
        if( !empty($timestr) ) {
            return strtotime($timestr);
        }
        return time();
    }
    /**
     * 两个时间间隔，单位秒
     * @param $from 开始时间，格式：'2019-12-12 12:22:22'
     * @param string $to 结束时间，格式：'2020-12-12 12:22:22'
     * @return int
     */
    static public function diffSeconds($from,$to = '') {
        $to = empty($to) ? $to : self::datetime();
        $seconds = strtotime($to) - strtotime($from);
        return $seconds;
    }
    /**
     * 获取未来或者过去的时间
     * @param int $seconds 间隔秒数
     * @param string $format 时间格式，'Y-m-d H:i:s'
     * @param int $time 时间戳
     * @return 未来或者过去的时间
     */
    static public function passSeconds($seconds,$format='Y-m-d H:i:s',$time = 0) {
        $datetime = self::datetime($format,$time);
        $date = new \DateTime($datetime);
        if( $seconds > 0 ) {
            $date->add(new \DateInterval('PT'.$seconds.'S'));
        } else {
            $date->sub(new \DateInterval('PT'.abs($seconds).'S'));
        }
        return $date->format($format);
    }
    /**
     * 按照指定格式输出时间字符串
     * @param string $format 指定的格式 ，例如：'Y-m-d H:i:s'
     * @param int $time 时间戳
     * @return bool|string 格式化后的时间
     */
    static public function datetime( $format='',$time = 0 ) {
        $time   = $time   ? $time   : time();
        $format = $format ? $format : 'Y-m-d H:i:s';
        return date($format,$time);
    }
}