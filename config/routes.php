<?php

use Ken\Helpers\Route;

Route::get('/', 'HomeController:index');
Route::get('/json', 'HomeController:json');

Route::group('/api', function () {
    Route::get('/users', 'UserController:list');
    Route::get('/users/{id}', 'UserController:get');
}, []);
