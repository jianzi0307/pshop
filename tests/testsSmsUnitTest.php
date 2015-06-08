<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 15/6/8
 * Time: 下午11:28
 */

namespace Tests;


use library\SmsLib\SmsEntinfo\EntinfoSms;

class testsSmsUnitTest extends AbsUnitTestCase {
    public function testTestCase() {
        $sms = new EntinfoSms();
        $sms->setConf(array());
        $response = $sms->send('18853002966','test content');
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