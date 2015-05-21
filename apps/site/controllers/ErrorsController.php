<?php
/**
 * ----------------------
 * ErrorController.php
 * 
 * User: jian0307@icloud.com
 * Date: 2015/5/21
 * Time: 10:50
 * ----------------------
 */
namespace apps\site\controllers;

use Phalcon\Mvc\Controller;

class ErrorsController extends Controller {
    /**
     * 服务器错误
     */
    public function show500Action( $error ) {
        $this->view->setVar("error", $error);
        $this->view->render('errors','show500');
    }
}