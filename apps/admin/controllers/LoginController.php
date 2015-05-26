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


class LoginController extends ControllerBase {

    public function indexAction() {}

    public function authAction() {
        print_r($_POST);exit;
    }
}