<?php

namespace app\controllers;

use Ken\Helper\Log;

/**
 *
 */
class HomeController
{
    public function index()
    {
        $time = date('Y-m-d H:i:s');

        Log::info('Ken Application loaded');

        return render('home/index', compact('time'));
    }
}
