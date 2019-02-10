<?php

use Ken\Helpers\Log;
use Ken\Helpers\Route;

Route::get('/', function ($req, $res, $args = []) {
    $time = date('Y-m-d H:i:s');

    Log::info('Ken Application loaded');

    return render($res, 'home/index', compact('time'));
});

Route::group('/api', function () {
    Route::get('/users', 'UserController:list');
    Route::get('/users/{id}', 'UserController:get');
}, ['middleware' => ['auth']]);
