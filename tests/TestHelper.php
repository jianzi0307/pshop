<?php
use Phalcon\DI,
    Phalcon\DI\FactoryDefault;
ini_set('display_errors',1);
error_reporting(E_ALL);
define('ROOT_PATH', __DIR__);
//define('PATH_LIBRARY', __DIR__ . '/../library/');
//define('PATH_SERVICES', __DIR__ . '/../config/services/');
//define('PATH_RESOURCES', __DIR__ . '/../config/resources/');
//define('PATH_VIEWS', __DIR__ . '/../app/views/');
//define('PATH_CONTROLLERS', __DIR__ . '/../app/controllers/');
set_include_path(
    ROOT_PATH . PATH_SEPARATOR . get_include_path()
);
// use the application autoloader to autoload the classes
// autoload the dependencies found in composer
$loader = new \Phalcon\Loader();
$loader->registerNamespaces(array(
    'library' => __DIR__.'/../library/'
));
$loader->registerDirs(array(
    ROOT_PATH
));
$loader->register();
// required for phalcon/incubator
include __DIR__ . "/../vendor/autoload.php";
require_once __DIR__.'/AbsUnitTestCase.php';
//require_once __DIR__.'/AjaxUnitTest.php';
require_once __DIR__.'/PhalconUnitTest.php';