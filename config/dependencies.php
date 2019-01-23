<?php
use Psr\Container\ContainerInterface;
use app\controllers\HomeController;
use app\controllers\UserController;

$container = $app->getContainer();

$container->set(HomeController::class, function (ContainerInterface $c) {
    return new HomeController();
});

$container->set(UserController::class, function (ContainerInterface $c) {
    return new UserController();
});
