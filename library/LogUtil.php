<?php
/**
 * ----------------------
 * LogUtil.php
 *
 * User: jian0307@icloud.com
 * Date: 2015/5/21
 * Time: 16:51
 * ----------------------
 */
namespace library;

use Phalcon\Logger\Adapter\File as FileAdapter;

/**
 * Class LogUtil
 * 用法：LogUtil::ins()->info('info_pay_order.log','支付成功');
*       LogUtil::ins()->error('error_pay_order.log','支付失败');
*       $logs = array(
*           'test',
*           'aaaaaaaaaaaaa',
*           'bbbbbbbbbb',
*           'ccccccc',
*           'ddddddddd'
*       );
*       LogUtil::ins()->warn('warn_pay_order.log',$logs);
 * @package library
 */
class LogUtil {

    private static $_instance;

    private $log_path_tpl = "../backup/logs/%s/%s/%s";

    public static function ins() {
        if( !(self::$_instance instanceof self) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * 普通日志
     * @param string $filename 文件名
     * @param array|string $msgs 信息或信息列表
     */
    public function info( $filename,$msgs ) {
        $this->write($filename,'info',$msgs);
    }

    /**
     * 错误日志
     * @param string $filename 文件名
     * @param array|string $msgs 信息或信息列表
     */
    public function error( $filename,$msgs ) {
        $this->write($filename,'error',$msgs);
    }

    /**
     * 警告日志
     * @param string $filename 文件名
     * @param array|string $msgs 信息或信息列表
     */
    public function warn( $filename,$msgs ) {
        $this->write($filename,'warn',$msgs);
    }

    /**
     * 生成目录并写文件
     * @param $filename 文件名
     * @param $type 类型
     * @param $msgs 信息列表
     */
    private function write($filename,$type,$msgs) {
        $dir = sprintf($this->log_path_tpl,$type,date('Ymd'),date('H'));

        $dAry = explode('/',$dir);
        $d = '';
        for( $i = 0,$len = count($dAry);$i<$len;$i++ ) {
            $d .= $dAry[$i].'/';
            if(!file_exists($d)) {
                mkdir($d,0777);
            }
        }
        unset($d);
        $logger = new FileAdapter($dir.'/'.$filename);
        $logger->begin();
        if( is_array($msgs) ) {
            for($i = 0,$len=count($msgs);$i<$len;$i++) {
                if($type == 'error') {
                    $logger->error($msgs[$i]);
                } else if($type == 'warn') {
                    $logger->warning($msgs[$i]);
                } else {
                    $logger->info($msgs[$i]);
                }
            }
        } else {
            if($type == 'error') {
                $logger->error($msgs);
            } else if($type == 'warn') {
                $logger->warning($msgs);
            } else {
                $logger->info($msgs);
            }
        }
        $logger->commit();
    }

    private function __construct() {
        date_default_timezone_set('Asia/Shanghai');
    }

    private function __clone() {}
}