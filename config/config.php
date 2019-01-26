<?php

return [
    'name' => 'Ken Application',
    'basePath' => $basePath,
    'controllersNamespace' => 'app\\controllers\\',
    'debug' => false,
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
