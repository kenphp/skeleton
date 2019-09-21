<?php
use Psr\Container\ContainerInterface;
use app\controllers\UserController;
use Ken\View\Engine\PlatesEngine;

$container = $app->getContainer();

$container->set('view', function($c) {
    $config = $c->get('configuration');
    $viewPath = $config->get('view.viewPath');
    $viewFunction = $config->get('view.viewFunction', []);

    return new PlatesEngine($viewPath, $viewFunction);
});

$container->set(UserController::class, function (ContainerInterface $c) {
    return new UserController();
});
