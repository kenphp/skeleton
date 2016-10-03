<?php

use app\controllers\HomeController;

/*
 * @var Ken\Routing\Router
 */
// $router->get('/', function () {
//     include_once __DIR__.DIRECTORY_SEPARATOR.'views/welcome.php';
// });

$homeController = new HomeController();

$router->get('/', [$homeController, 'index']);
