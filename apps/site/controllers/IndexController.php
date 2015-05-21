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

use library\HttpClient;
use Phalcon\Mvc\Controller;

class IndexController extends Controller{
    public function indexAction() {
        echo HttpClient::get('http://www.baidu.com');
        $this->view->disable();
    }
}