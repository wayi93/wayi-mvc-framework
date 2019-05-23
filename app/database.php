<?php
/**
 * Created by WaYi
 * Author: Ying Wang
 * Date: 2019-05-22
 * Time: 10:19
 */

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => $configs['host'],
    'username' => $configs['username'],
    'password' => $configs['password'],
    'database' => $configs['database'],
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->bootEloquent();
