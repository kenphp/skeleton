<?php

use Ken\Helpers\Route;

Route::group(['namespace' => '\app\controllers'], function () {
    Route::get('/', 'HomeController:index');
});
