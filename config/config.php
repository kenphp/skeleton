<?php

// this configuration can be accessed from $container->get('configuration')
// it will be a \Ken\Utils\ArrayDot instance,
// which mean you can access it like an array,
// or you can access the value like this
// $config->get('view.viewPath')
return [
    'name' => 'Ken Application',
    'basePath' => $basePath,
    'controllersNamespace' => 'app\\controllers\\',
    'debug' => true,
    'logger' => [
        'enabledLevels' => ['info', 'warning', 'error'],
        'targets' => [
            'file' => [
                'class' => 'Ken\Log\Targets\FileTarget',
                'filepath' => $basePath.'/runtime/application.log',
            ],
        ],
    ],
    'view' => [
        'viewPath' => $basePath . '/views',
    ],
    'middlewares' => include_once $basePath . '/config/middlewares.php',
];
