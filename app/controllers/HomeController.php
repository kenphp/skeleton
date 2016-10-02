<?php

namespace app\controllers;

/**
 *
 */
class HomeController
{
    public function index()
    {
        $time = date('Y-m-d H:i:s');

        return render('home/index', compact('time'));
    }
}
