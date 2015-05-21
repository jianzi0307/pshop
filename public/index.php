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
use Phalcon\Config\Adapter\Ini;

/**
 * Class App
 */
class App extends Application {

    protected $config;

    /**
     * 配置
     * @param Ini $config
     */
    public function setConfig(Ini $config) {
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
        $commonLoader->registerNamespaces(
            array(
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

            $router->add('/admin/login',array(
                'module' => 'admin',
                'controller' => 'login',
                'action' => 'index'
            ));

            return $router;
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

$config = new Ini('../config/config.ini');
$application = new App();
$application->setConfig($config);
$application->startup();