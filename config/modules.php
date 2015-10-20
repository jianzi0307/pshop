<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 15/5/26
 * Time: 下午9:11
 */

/**
 * 注册模块
 */
$application->registerModules(
    array(
        'admin' => array(
            'className' => 'apps\admin\Module',
            'path' => __DIR__ . '/../apps/admin/Module.php'
        ),
        'api' => array(
            'className' => 'apps\api\Module',
            'path' => __DIR__ . '/../apps/api/Module.php'
        ),
        'site' => array(
            'className' => 'apps\site\Module',
            'path' => __DIR__ . '/../apps/site/Module.php'
        )
    )
);