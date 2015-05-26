<?php
// master写库配置
$settings =  array(
    'mysql_master' => array(
        'adapter' => 'Mysql',
        'host' => 'localhost:3306', // ex localhost:3306
        'username' => 'root',
        'password' => '111',
        'dbname' => 'db_ishop',
    ),
);

// slave x3读库设置
//$slave1 = '[hostname(slave1)]:[port]'; // ex localhost:3316
//$slave2 = '[hostname(slave2)]:[port]'; // ex localhost:3326
//$slave3 = '[hostname(slave3)]:[port]'; // ex localhost:3336

$slave1 = 'localhost:3306'; // ex localhost:3316
$slave2 = 'localhost:3306'; // ex localhost:3326
$slave3 = 'localhost:3306'; // ex localhost:3336
$mysqlSlaves = array(
    'mysql_slave1' => array(
        'adapter' => 'Mysql',
        'host' => $slave1,
        'username' => 'root',
        'password' => '111',
        'dbname' => 'db_ishop',
    ),
    'mysql_slave2' => array(
        'adapter' => 'Mysql',
        'host' => $slave2,
        'username' => 'root',
        'password' => '111',
        'dbname' => 'db_ishop',
    ),
    'mysql_slave3' => array(
        'adapter' => 'Mysql',
        'host' => $slave3,
        'username' => 'root',
        'password' => '111',
        'dbname' => 'db_ishop',
    ),
);

$settings = array_merge(
    $settings,
    $mysqlSlaves,
    array('mysql_slave_count' => count($mysqlSlaves))
);

return $settings;