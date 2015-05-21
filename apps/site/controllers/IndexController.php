<?php
/**
 * ----------------------
 * IndexController.php
 * 
 * User: jian0307@icloud.com
 * Date: 2015/5/21
 * Time: 10:39
 * ----------------------
 */
namespace apps\site\controllers;

use library\LogUtil;
use Phalcon\Logger;
use Phalcon\Mvc\Controller;

class IndexController extends Controller{
    public function indexAction() {

        //测试日志
        LogUtil::ins()->info('info_pay_order.log','支付成功');

        LogUtil::ins()->error('error_pay_order.log','支付失败');


        $logs = array(
            'test',
            'aaaaaaaaaaaaa',
            'bbbbbbbbbb',
            'ccccccc',
            'ddddddddd'
        );
        LogUtil::ins()->warn('warn_pay_order.log',$logs);

        $this->view->disable();
    }
}