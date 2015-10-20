<?php
/**
 * ----------------------
 * Module.php
 *
 * User: jian0307@icloud.com
 * Date: 2015/5/21
 * Time: 9:16
 * ----------------------
 */
namespace apps\site;

use Phalcon\Loader;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Mvc\View;

class Module implements ModuleDefinitionInterface
{
    /**
     * 为模块注册加载器
     * @param \Phalcon\DiInterface $di
     */
    public function registerAutoloaders(\Phalcon\DiInterface $di = null)
    {
        $moduleLoader = new Loader();
        //注册命名空间
        $moduleLoader->registerNamespaces(
            array(
                //命名空间 => 目录名
                'apps\site\controllers' => __DIR__.'/controllers/',
                'apps\site\models' => __DIR__.'/models/',
            )
        );
        $moduleLoader->register();
    }

    /**
     * 为模块注册服务
     * @param \Phalcon\DiInterface $di
     */
    public function registerServices(\Phalcon\DiInterface $di)
    {
        //Registering a dispatcher
        $di->set('dispatcher', function () {
            $dispatcher = new Dispatcher();
            $dispatcher->setDefaultNamespace('apps\site\controllers');
            return $dispatcher;
        });

        //注册视图服务组件
        $di->set('view', function () {
            $view = new View();
            $view->setViewsDir(__DIR__.'/views/default/');
            return $view;
        });
    }
}
