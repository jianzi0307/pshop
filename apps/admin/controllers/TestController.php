<?php
/**
 * ----------------------
 * TestController.php
 * 
 * User: jian0307@icloud.com
 * Date: 2015/6/11
 * Time: 10:19
 * ----------------------
 */

namespace apps\admin\controllers;


use library\EncryptLib\Rsa;
use library\SmsLib\SmsCloopen\CloopenSms;
use library\SmsLib\SmsEntinfo\EntinfoSms;

class TestController extends ControllerBase {
    public function sms1Action() {
        $sms = new CloopenSms();
        $sms->setConf(
            array(
                'account_sid' => '8a48b5514dd25566014dd776124a0429',
                'account_token' => '4eb09d93e6a346128dfb59670cae009c',
                'app_id' => '8a48b5514dd25566014dd7765524042b',
                'is_sandbox' => true,
                'template_id' => 1,
                'body_type' => 'xml'
            )
        );
        $response = $sms->send(18853002966,array($sms->createSmsCode(),'2'));
        var_dump($response);
        $this->view->disable();
    }

    public function smsAction() {
        $sms = new EntinfoSms();
        $sms->setConf( array(
            'sn' => 'SDK-BBX-010-22217',
            'password' => '13022',
            'ext' => '',
            'rrid' => '',
            'stime' => '',
            'appName' => '多美淘'
        ));
        $res = $sms->send('18853002966','hello333w');
        print_r($res);exit;
        $this->view->disable();
    }

    public function testAction() {
        $rsa = new Rsa();
        $privateKey = '-----BEGIN RSA PRIVATE KEY-----
MIICXAIBAAKBgQC+WiouLXlITohBzGZSAR0vEZOzxg5PgvbX6/etLpP4hUAgIDtj
02VFmrU5VuG9+YDTgam5ahvjsZUAs3Uxmbl4tdw8IdqoTlHfbqoiHEwiKVQ8RmQE
DrEJHMRA9PLL4AFSt4WKnv63N9XnEw5SIHUaL1dVl8ywvRBr8WrymdD14wIDAQAB
AoGAI5GJjDNnFEHIaDMfc3dN0rvAE7mQdv8LzPEEyNGJSMjtYJNlRZP8unLcJii7
6dmzXtI9uq2/JF7MbuMZpPkKlNcWX8knE9UFJIu1J1hkXBDeVViYDstwDk0OT624
J8B2ualRsSHBppgdhXEnXjR0vm2MX0k0UFbCLVG+4wrc+zECQQDpZG/Vc+rlwx8M
3z3fx0IeFG7MSeBI90savdDOwvdHsaYST2sLNsPsd525hi5GzXlv9EZAMJ24pQgF
200XZDOdAkEA0Mpv83ROsdRU6eOUOO35kFzQYl3iTyLF+GVqAKUzcqwyRI+rhoLU
8g+Gy7JhkJf5AGJU7BV0/xlRBhsbVYVXfwJAQFKr97ogzP3/ur50AQ6bjEq5Vpgt
ti5hhpc1yyY0nI+7Y2R77fVD/hHhaFYwvta2V0KNcfd0IIVrNqIAFyhIiQJAVUj7
pcRyiK0k6kzttLtwX4mqDSQwVwbrOuWiARV6CHNSLTNKay1x8lZpRzdcJwYMzh1c
dvrkyXb747Sa27oV3QJBAOLQpiwWSpkEYH9oj4Qv3CmGiZGbypYQz0hXtbaLmpYR
br1KyfVS5IlJTlMashRuyhl5CW1wU8WiQnSVvXmFwPg=
-----END RSA PRIVATE KEY-----';
        $publicKey = '-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC+WiouLXlITohBzGZSAR0vEZOz
xg5PgvbX6/etLpP4hUAgIDtj02VFmrU5VuG9+YDTgam5ahvjsZUAs3Uxmbl4tdw8
IdqoTlHfbqoiHEwiKVQ8RmQEDrEJHMRA9PLL4AFSt4WKnv63N9XnEw5SIHUaL1dV
l8ywvRBr8WrymdD14wIDAQAB
-----END PUBLIC KEY-----';


        $rsa->setKeys($privateKey,$publicKey);
        $org_data = '原数据';
        $data = $rsa->publicKeyEncode($org_data);
        echo $data.PHP_EOL.PHP_EOL;
        $res= $rsa->decodePublicEncode($data);
        echo $res;exit;
        $this->view->disable();
    }
}