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
use Phalcon\Loader;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\Router;
use Phalcon\Exception;
use Phalcon\Session\Adapter\Files;

/**
 * Class App
 */
class App extends Application {

    protected $config;

    /**
     * 配置
     * @param Ini $config
     */
    public function setConfig($config) {
        $this->config = $config;
    }

    /**
     * 启动应用
     */
    public function startup() {
        $this->_setLoader();
        $this->_setRouter();
        $this->_regModules();
    }
    
    /**
     * 设置加载器
     */
    protected function _setLoader() {
        $commonLoader = new Loader();
        $commonLoader->registerNamespaces(array(
                'library' => __DIR__.'/../library/'
            )
        );
        $commonLoader->register();
    }

    /**
     * 设置路由
     */
    protected function _setRouter() {
        $di = new FactoryDefault();
        //设置路由
        $di->set('router',function(){
            $router = new Router();
            $router->setDefaultModule('site');

            $router->add('/',array(
                'module' => 'site',
                'controller' => 'index',
                'action' => 'index'
            ));

            $router->add('/admin',array(
                'module' => 'admin',
                'controller' => 'index',
                'action' => 'index'
            ));

            $router->add('/admin/login',array(
                'module' => 'admin',
                'controller' => 'login',
                'action' => 'index'
            ));

            $router->add('/admin/:controller/:action/:params',array(
                'module' => 'admin',
                'controller' => 1,
                'action' => 2,
                'params' => 3,
            ));

            $router->notFound(array(
                "controller" => "errors",
                "action"     => "show404"
            ));

            return $router;
        });

        $di->setShared('session', function() {
            $session = new Files();
            $session->start();
            return $session;
        });

        // MySQL master
        $config = $this->config;
        $di->set('dbMaster', function () use ($config) {
            return new DbAdapter(array(
                'host' => $config->mysql_master->host,
                'username' => $config->mysql_master->username,
                'password' => $config->mysql_master->password,
                'dbname' => $config->mysql_master->dbname
            ));
        });
        // MySQL slave
        $di->set('dbSlave', function () use ($config) {
            $slaveName = 'mysql_slave' . (String)rand(1, $config->mysql_slave_count);
            return new DbAdapter(array(
                'host' => $config[$slaveName]['host'],
                'username' => $config[$slaveName]['username'],
                'password' => $config[$slaveName]['password'],
                'dbname' => $config[$slaveName]['dbname']
            ));
        });


        $this->setDI($di);
    }

    /**
     * 注册模块
     */
    protected function _regModules() {
        try {
            $this->registerModules(
                array(
                    'admin' => array(
                        'className' => 'apps\admin\Module',
                        'path' => __DIR__ . '/../apps/admin/Module.php'
                    ),
                    'api' => array(
                        'className' => 'apps\api\Module',
                        'path' => __DIR__ . '/../apps/api/Module.php'
                    ),
                    'selleradmin' => array(
                        'className' => 'apps\selleradmin\Module',
                        'path' => __DIR__ . '/../apps/selleradmin/Module.php'
                    ),
                    'site' => array(
                        'className' => 'apps\site\Module',
                        'path' => __DIR__ . '/../apps/site/Module.php'
                    )
                )
            );
            echo $this->handle()->getContent();
        } catch ( Exception $e ) {
            echo $e->getMessage();
            /*$di = $this->getDI();
            $dispatcher = $di['dispatcher'];
            $dispatcher->setModuleName('site');
            $dispatcher->setControllerName('errors');
            $dispatcher->setActionName('show500');
            $dispatcher->setParam('error','Code:'.$e->getCode().':'.$e->getFile().':'.$e->getLine().'<br/>'.$e->getMessage());
            $dispatcher->dispatch();*/
        }
    }
}
/*
$settings = require_once('../config/config.php');
$config = new \Phalcon\Config($settings);
$application = new App();
$application->setConfig($config);
$application->startup();*/






error_reporting(E_ALL);

try {

    /**
     * 配置
     */
    $config = require __DIR__.'/../config/config.php';

    /**
     * 注册加载器
     */
    $loader = new Loader();
    $loader->registerNamespaces(array(
            'library' => __DIR__.'/../library/'
        )
    );
    $loader->register();

    /**
     * Include services
     */
    require __DIR__ . '/../config/services.php';

    /**
     * Handle the request
     */
    $application = new Application($di);

    /**
     * Include modules
     */
    require __DIR__ . '/../config/modules.php';

    /**
     * Include routes
     */
    require __DIR__ . '/../config/routes.php';

    echo $application->handle()->getContent();

} catch (Exception $e) {
    echo $e->getMessage();
}

