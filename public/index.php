<?php
/**
 * ----------------------
 * index.php
 *
 * User: jian0307@icloud.com
 * Date: 2015/5/21
 * Time: 9:31
 * ----------------------
 */
use Phalcon\Di\FactoryDefault;
use Phalcon\Exception;
use Phalcon\Loader;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\Router;

error_reporting(E_ALL);

try {

    /**
     * 配置
     */
    //$config = require __DIR__.'/../config/config.php';
    $config = new \Phalcon\Config\Adapter\Ini(__DIR__.'/../config/config.ini');

    /**
     * Vendor
     */
    include __DIR__ . "/../vendor/autoload.php";

    /**
     * 注册加载器
     */
    $loader = new Loader();
    $loader->registerNamespaces(
        array('library' => __DIR__.'/../library/')
    );
    $loader->register();

    /**
     * Include services
     */
    include __DIR__ . '/../config/services.php';

    /**
     * Handle the request
     */
    $application = new Application($di);

    /**
     * Include modules
     */
    include __DIR__ . '/../config/modules.php';

    /**
     * Include routes
     */
    include __DIR__ . '/../config/routes.php';

    echo $application->handle()->getContent();

} catch (Exception $e) {
    echo $e->getMessage();
}
