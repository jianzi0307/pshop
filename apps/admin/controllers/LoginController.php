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


use apps\admin\models\AppUser;

class LoginController extends ControllerBase {

    public function indexAction() {}

    /**
     * 登录认证
     * @return \Phalcon\Http\Response|\Phalcon\Http\ResponseInterface
     */
    public function authAction() {
        if($this->request->isAjax() && $this->request->isPost()) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $user = new AppUser();
            $user->setId(1000);
            var_dump($user->save());
            $this->view->disable();
        } else {
            return $this->illegal();
        }
    }
}