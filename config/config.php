<?php

$basePath = __DIR__.DIRECTORY_SEPARATOR.'../';

return [
    'name' => 'Ken Application',
    'basePath' => $basePath,
    'routeFile' => $basePath.'app/route.php',
    'timeZone' => 'UTC',
    'view' => [
        'class' => 'Ken\\View\\TwigEngine',
        'path' => $basePath.'views/',
        'cache' => $basePath.'runtime/views/',
    ],
    'log' => [
        'handler' => 'Ken\\Log\\FileLogger',
        'config' => [
            'filepath' => $basePath.'runtime/application.log',
            'enabledLevels' => ['info', 'warning', 'error'],
        ],
    ],
];
