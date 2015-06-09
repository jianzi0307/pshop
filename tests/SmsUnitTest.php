<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 15/6/8
 * Time: 下午11:28
 */

namespace tests;

use library\SmsProxy;

class SmsUnitTest extends \AbsUnitTestCase {
    public function testTestCase() {
        $smsproxy = SmsProxy::createInstance();
        //$sms = new EntinfoSms();
        $smsproxy->setConf(array(
            'smsType' => 'smsentinfo',
            'sn' => 'SDK-BBX-010-22217',
            'password' => '13022',
            'ext' => '',
            'rrid' => '',
            'stime' => '',
            'appName' => '多美淘'
        ));
        /*$sms->setConf( array(
            'sn' => 'SDK-BBX-010-22217',
            'password' => '13022',
            'ext' => '',
            'rrid' => '',
            'stime' => '',
            'appName' => '多美淘'
        ));*/
        $response = $smsproxy->send('18853002966','你好好好啊好');
        $this->assertEquals($response->code,
            0,
            'This is OK'
        );

        $this->assertEquals($response->code,
            1,
            'This will fail'
        );
    }
} 