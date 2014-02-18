<?php

#phpinfo();
#die();
error_reporting(E_ALL);
ini_set('display_errors', 2);
//date_default_timezone_set('Asia/Irkustk');
require('protected/functions/globals.php');

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
$app = Yii::createWebApplication($config);


Yii::app()->getModule('gii')->password = Yii::app()->getModule('configpage')->config->get('giiPassword');
Yii::app()->name = Yii::app()->getModule('configpage')->config->get('applicationName');
Yii::app()->params['adminEmail'] = Yii::app()->getModule('configpage')->config->get('adminEmail');
Yii::app()->params['fromEmail'] = Yii::app()->getModule('configpage')->config->get('fromEmail');


$app->run();
$app->setTimeZone("Asia/Irkutsk");
