<?php
/**
 * ----------------------
 * IndexController.php
 * 
 * User: jian0307@icloud.com
 * Date: 2015/5/21
 * Time: 18:13
 * ----------------------
 */
namespace apps\admin\controllers;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        //$this->view->render('index','index');
        //echo "index";
        //$this->view->disable();

        $this->respond('POST', '/endpoint', function () {
            echo "xxxxx";
        });
    }

    private function respond($method, $path = '*', $callback = null)
    {
        // Get the arguments in a very loose format
        extract(
            $this->parseLooseArgumentOrder(func_get_args()),
            EXTR_OVERWRITE
        );
        $route = $this->route_factory->build($callback, $path, $method);
        $this->routes->add($route);
        return $route;
    }
}
