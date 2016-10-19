<?php

error_reporting(E_ALL);

ini_set('display_errors', 1);

require_once __DIR__.DIRECTORY_SEPARATOR.'../vendor/autoload.php';

$whoops = new \Whoops\Run();

$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());

$whoops->register();

$config = require_once __DIR__.DIRECTORY_SEPARATOR.'../config/config.php';

$app = new Ken\Application($config);
$app->run();
