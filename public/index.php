<?php

error_reporting(E_ALL);

ini_set('display_errors', 1);

require_once __DIR__.DIRECTORY_SEPARATOR.'../vendor/autoload.php';

$config = require_once __DIR__.DIRECTORY_SEPARATOR.'../config/config.php';
$routeFile = $basePath.'app/routes.php';

$app = new Ken\Application($config);
$app->registerRoutes($routeFile);
$app->run();
