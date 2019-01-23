<?php

namespace app\controllers;

use Ken\Helpers\Log;

use Psr\Http\Message\ResponseInterface;

/**
 *
 */
class HomeController
{
    public function index($request, $response, $args = [])
    {
        $time = date('Y-m-d H:i:s');

        Log::info('Ken Application loaded');

        return render($response, 'home/index', compact('time'));
    }

    public function json($request, ResponseInterface $response, $args = []) {
        return renderJson($response, ['status' => true]);
    }
}
