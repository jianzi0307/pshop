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
use Phalcon\Mvc\View;

class ControllerBase extends Controller
{
    protected function initialize()
    {
        //$this->tag->prependTitle('INVO | ');
        //$this->view->setTemplateBefore('main');
        //$this->view->setTemplateAfter('main');
    }

    /**
     * @param $uri
     */
    protected function forward($uri)
    {
        $uriParts = explode('/', $uri);
        $params = array_slice($uriParts, 2);
        return $this->dispatcher->forward(array(
            'controller' => $uriParts[0],
            'action' => $uriParts[1],
            'params' => $params
        ));
    }

    /**
     * 渲染视图
     * @param $view
     */
    public function render($view)
    {
        $config = $this->di->get('config');
        $this->view->pick($config->setting->admin_theme.'/'.$view);
    }

    /**
     * 成功响应
     * @param array $data
     * @return \Phalcon\Http\Response|\Phalcon\Http\ResponseInterface
     */
    protected function outputSuccess(array $data = null)
    {
        return $this->response->setJsonContent(array('errno'=>0,'errmsg'=>'success','data'=>$data));
    }

    /**
     * 响应失败
     * @param $errno
     * @param $errmsg
     * @return \Phalcon\Http\Response|\Phalcon\Http\ResponseInterface
     */
    protected function outputError($errno, $errmsg)
    {
        return $this->response->setJsonContent(array("errno"=>$errno,"errmsg"=>$errmsg));
    }

    /**
     * 非法请求
     * @return \Phalcon\Http\Response|\Phalcon\Http\ResponseInterface
     */
    protected function illegal()
    {
        return $this->response->setJsonContent(array("errno"=>-1,"errmsg"=>"illegal request!"));
    }
}
