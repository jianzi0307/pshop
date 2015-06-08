<?php
/**
 * ----------------------
 * LoginController.php
 * 
 * User: jian0307@icloud.com
 * Date: 2015/5/26
 * Time: 17:12
 * ----------------------
 */

namespace apps\admin\controllers;


use apps\admin\models\AppAdmin;
use library\EncryptLib\Rsa;
use library\SmsLib\SmsEntinfo\EntinfoSms;
use library\TimeUtil;

class LoginController extends ControllerBase {

    public function indexAction() {}

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
        $res = $sms->send('18853002966','hellow');
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

    /**
     * 登录认证
     * @return \Phalcon\Http\Response|\Phalcon\Http\ResponseInterface
     */
    public function authAction() {
        if($this->request->isAjax() && $this->request->isPost()) {
            //用户名
            $username = $this->request->getPost('username');
            //密码
            $password = $this->request->getPost('password');
            //验证码
            //$captcha = $this->request->getPost('captcha');
            if(empty($username)) {
                $message = '登录名不能为空';
            }
            else if(empty($password)) {
                $message = '密码不能为空';
            } else {
                $conditions = "admin_name = ?1";
                $parameters = array(1 => $username);
                $user = AppAdmin::findFirst(array($conditions, 'bind' => $parameters,'limit'=>1));
                if( count($user) > 0 && $user->password == md5($password) && $user->isDel == 0 ) {
                    //更新最后登录时间和最后登录IP
                    //$user->last_ip = $this->request->getClientAddress();
                    //$user->last_time = TimeUtil::datetime();
                    $user->setLastIp($this->request->getClientAddress());
                    $user->setLastTime(TimeUtil::datetime());
                    $saveRes = $user->save();
                    if(!$saveRes) {
                        foreach ($user->getMessages() as $message) {
                            echo $message, "\n";
                        }
                    }
                    //根据角色分配权限
                    if($user->roleId == 0) {
                        //ISession::set('admin_right','administrator');
                        //ISafe::set('admin_role_name','超级管理员');
                        $session_component = $this->di->get('session_component');
                        $session_component->setSess('admin_right','administrator');
                        print_r($_SESSION);exit;
                    } else {

                    }
                    $message = 'aaa';
                } else {
                    $message = '用户名与密码不匹配';
                }
            }
            if($message != '') {
                echo $message;exit;
            }
            $this->view->disable();
        } else {
            return $this->illegal();
        }
    }
}