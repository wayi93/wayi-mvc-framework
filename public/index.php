<?php
/**
 * Created by WaYi
 * Author: Ying Wang
 * Date: 2019-05-21
 * Time: 11:15
 */

define('PROJECT_ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP_ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR);
define('PUBLIC_ROOT', __DIR__ . DIRECTORY_SEPARATOR);
define('CONTROLLERS_ROOT', APP_ROOT . 'controllers' . DIRECTORY_SEPARATOR);
define('MODELS_ROOT', APP_ROOT . 'models' . DIRECTORY_SEPARATOR);
define('VIEWS_ROOT', APP_ROOT . 'views' . DIRECTORY_SEPARATOR);

require_once '../app/init.php';

$app = new App;