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
namespace apps\admin;

use Phalcon\Loader;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;

class Module implements ModuleDefinitionInterface{
    /**
     * 为模块注册加载器
     * @param \Phalcon\DiInterface $di
     */
    public function registerAutoloaders(\Phalcon\DiInterface $di = null){
        $moduleLoader = new Loader();
        //注册命名空间
        $moduleLoader->registerNamespaces(
            array(
                //命名空间 => 目录名
                'apps\admin\controllers' => __DIR__.'/controllers/',
                'apps\admin\models' => __DIR__.'/models/'
            )
        );
        $moduleLoader->register();
    }

    /**
     * 为模块注册服务
     * @param \Phalcon\DiInterface $di
     */
    public function registerServices(\Phalcon\DiInterface $di){

        //Registering a dispatcher
        $di->set('dispatcher', function() {
            $dispatcher = new Dispatcher();
            $dispatcher->setDefaultNamespace('apps\admin\controllers');
            return $dispatcher;
        });

        //注册视图服务组件
        $di->set('view', function() {
            $view = new View();
            $view->setViewsDir(__DIR__ . '/views/default/');
            $view->setLayoutsDir('layouts/');
            $view->setTemplateAfter('main');
            $view->registerEngines(array(
                ".phtml" => 'volt'
            ));
            return $view;
        },false);

        /**
         * 安装volt模板引擎
         */
        $di->set('volt', function($view, $di) {
            $volt = new VoltEngine($view, $di);
            $volt->setOptions(array(
                "compiledPath" =>  __DIR__."/../../cache/volt/"
            ));
            $compiler = $volt->getCompiler();
            //$compiler->addFunction('is_a', 'is_a');
            return $volt;
        }, true);

    }
}