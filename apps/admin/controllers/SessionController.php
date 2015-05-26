<?php
/**
 * ----------------------
 * SessionController.php
 * 
 * User: jian0307@icloud.com
 * Date: 2015/5/25
 * Time: 15:13
 * ----------------------
 */

namespace apps\admin\controllers;

use apps\admin\models\Users;

class SessionController extends ControllerBase{

    public function indexAction() {
//        if(!$this->request->isPost()) {x
//            $this->tag->setDefault('email', 'demo@phalconphp.com');
//            $this->tag->setDefault('password', 'phalcon');
//        }
        $this->view->postId = "ssssssssssssssssssssssss";
    }

    public function startAction() {
//        if($this->request->isPost()) {
//            $email = $this->request->getPost('email');
//            $password = $this->request->getPost('password');
//            $user = Users::findFirst(array(
//                "(email = :email: OR username = :email:) AND password = :password: AND active = 'Y'",
//                'bind' => array('email' => $email, 'password' => sha1($password))
//            ));
//            if ($user != false) {
//                $this->_registerSession($user);
//                $this->flash->success('Welcome ' . $user->name);
//                return $this->forward('invoices/index');
//            }
//            $this->flash->error('Wrong email/password');
//        }
        return $this->forward('session/index');
    }

    public function endAction() {
        $this->session->remove('auth');
        $this->flash->success('Goodbye!');
        return $this->forward('index/index');
    }

    private function _registerSession(Users $user) {
        $this->session->set('auth', array(
            'id' => $user->id,
            'name' => $user->name
        ));
    }
}