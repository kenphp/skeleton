<?php

error_reporting(E_ALL);

ini_set('display_errors', 1);

date_default_timezone_set('Asia/Jakarta');

$basePath = dirname(__DIR__);

require_once $basePath . '/vendor/autoload.php';
$config = require_once $basePath . '/config/config.php';
$app = new Ken\Application($config);

require_once $basePath.'/config/routes.php';
require_once $basePath.'/config/dependencies.php';

$app->run();
