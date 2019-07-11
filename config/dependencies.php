<?php
use Psr\Container\ContainerInterface;
use app\controllers\UserController;
use Ken\View\Engine\PlatesEngine;

$container = $app->getContainer();

$container->set('view', function($c) {
    $configuration = $c->get('configuration')['view'];
    $viewFunctions = isset($configuration['viewFunctions']) ? $configuration['viewFunctions'] : [];

    return new PlatesEngine($configuration['viewPath'], $viewFunctions);
});

$container->set(UserController::class, function (ContainerInterface $c) {
    return new UserController();
});
