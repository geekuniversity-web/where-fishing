<?php
$config = parse_ini_file('app-config.ini', true);

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=mysql;dbname=' . $config['mysql-db'],
    'username' => $config['mysql-user'],
    'password' => $config['mysql-pwd'],
    'charset' => 'utf8',
];
