<?php

use Ken\Helper\Route;

Route::group(['namespace' => '\app\controllers'], function () {
    Route::get('/', 'HomeController:index');
});
