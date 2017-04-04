<?php

$basePath = __DIR__.DIRECTORY_SEPARATOR.'../';

return [
    'name' => 'Ken Application',
    'basePath' => $basePath,
    'timeZone' => 'Asia/Jakarta',
    'components' => [
        'view' => [
            'engine' => 'Ken\\View\\TwigEngine\\TwigEngine',
            'path' => $basePath.'views/',
            // 'cache' => $basePath.'runtime/views/',
        ],
        'logger' => [
            'enabledLevels' => ['info', 'warning', 'error'],
            'targets' => [
                'file' => [
                    'class' => 'Ken\Log\Targets\FileTarget',
                    'filepath' => $basePath.'runtime/application.log',
                ],
            ],
        ],
    ],
];
