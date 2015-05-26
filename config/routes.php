<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 15/5/26
 * Time: 下午9:11
 */

/**
 * 设置路由
 */
$router = $di->get("router");
foreach ($application->getModules() as $key => $module) {
    $namespace = str_replace('Module','controllers', $module["className"]);

    $router->add('/'.$key.'/:params', array(
            'namespace' => $namespace,
            'module' => $key,
            'controller' => 'index',
            'action' => 'index',
            'params' => 1
        ))->setName($key);

    $router->add('/'.$key.'/:controller/:params', array(
            'namespace' => $namespace,
            'module' => $key,
            'controller' => 1,
            'action' => 'index',
            'params' => 2
        ));

    $router->add('/'.$key.'/:controller/:action/:params', array(
            'namespace' => $namespace,
            'module' => $key,
            'controller' => 1,
            'action' => 2,
            'params' => 3
        ));
    /*
    $router->add('/',array(
        'namespace' => $namespace,
        'module' => 'site',
        'controller' => 'index',
        'action' => 'index'
    ));

    $router->add('/admin',array(
        'namespace' => $namespace,
        'module' => 'admin',
        'controller' => 'index',
        'action' => 'index'
    ));

    $router->add('/admin/login',array(
        'namespace' => $namespace,
        'module' => 'admin',
        'controller' => 'login',
        'action' => 'index'
    ));

    $router->add('/admin/:controller/:action/:params',array(
        'namespace' => $namespace,
        'module' => 'admin',
        'controller' => 1,
        'action' => 2,
        'params' => 3,
    ));*/
}