<?php
/**
 * ----------------------
 * ControllerBase.php
 * 
 * User: jian0307@icloud.com
 * Date: 2015/5/25
 * Time: 15:13
 * ----------------------
 */

namespace apps\admin\controllers;


use Phalcon\Mvc\Controller;

class ControllerBase extends Controller{
    protected function initialize() {
        //$this->tag->prependTitle('INVO | ');
//        $this->view->setTemplateBefore('main');
        //$this->view->setTemplateAfter('main');
    }

    protected function forward( $uri ) {
        $uriParts = explode('/', $uri);
        $params = array_slice($uriParts, 2);
        return $this->dispatcher->forward(
            array(
                'controller' => $uriParts[0],
                'action' => $uriParts[1],
                'params' => $params
            )
        );
    }
}