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
use apps\admin\models\AppUser;
use library\TimeUtil;

class LoginController extends ControllerBase {

    public function indexAction() {}

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