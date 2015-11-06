<?php
error_reporting(E_ALL);
// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
defined('BASE_PATH') || define('BASE_PATH', dirname(__FILE__));
defined('IMAGE_PATH') || define('IMAGE_PATH', BASE_PATH .'/img');
defined('UPLOAD_PATH') || define('UPLOAD_PATH', BASE_PATH .'/upload');
require_once($yii);
Yii::createWebApplication($config)->run();
