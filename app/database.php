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
    'host' => '127.0.0.1',
    'username' => 'root',
    'password' => 'wy123456',
    'database' => 'wayi_mvc_framework_db',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->bootEloquent();
