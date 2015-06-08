<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 15/5/26
 * Time: 下午9:11
 */

/**
 * 注册服务
 */

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\DI\FactoryDefault;
use Phalcon\Session\Adapter\Files as SessionAdapter;

$di = new FactoryDefault();

/**
 * 注册路由器组件
 */
$di['router'] = function () {

    $router = new Router();

    $router->setDefaultModule('site');
    $router->setDefaultNamespace('apps\site\controllers');

    return $router;
};

/**
 * 组册URL组件
 */
$di['url'] = function () {
    $url = new UrlResolver();
    $url->setBaseUri('/');

    return $url;
};

/**
 * 注册session服务
 */
$di['session'] = function () {
    $session = new SessionAdapter();
    $session->start();

    return $session;
};


/**
$di->setShared('session', function() {
    $session = new Files();
    $session->start();
    return $session;
});*/

/**
 * 注册dispatcher服务
 */
$di->set('dispatcher', function() use ($di) {
    $dispatcher = new Phalcon\Mvc\Dispatcher();
    $dispatcher->setDefaultNamespace('apps\site\controllers');
    return $dispatcher;
},true);


/**
 * 数据库配置
 */
$di->set('db',function() use ($config){
    return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
        "host" => $config->database->host,
        "username" => $config->database->username,
        "password" => $config->database->password,
        "dbname" => $config->database->dbname
    ));
});


/*
//写库
$di->set('dbMaster', function () use ($config) {
    return new DbAdapter(array(
        'host' => $config->mysql_master->host,
        'username' => $config->mysql_master->username,
        'password' => $config->mysql_master->password,
        'dbname' => $config->mysql_master->dbname
    ));
});

//读库
$di->set('dbSlave', function () use ($config) {
    $slaveName = 'mysql_slave' . (String)rand(1, $config->mysql_slave_count);
    return new DbAdapter(array(
        'host' => $config[$slaveName]['host'],
        'username' => $config[$slaveName]['username'],
        'password' => $config[$slaveName]['password'],
        'dbname' => $config[$slaveName]['dbname']
    ));
});
*/

$di->set('session_component', function(){
    return new \library\Components\SessionComponent();
});

$di->set('cookie_component',function(){
    return new \library\Components\CookieComponent();
});

