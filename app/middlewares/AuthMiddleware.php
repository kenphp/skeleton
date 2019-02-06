<?php

namespace app\middlewares;

use Ken\Exception\HttpException;
use Ken\Helpers\Input;
use Ken\Http\BaseMiddleware;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * This is only an example of authorization middleware
 */
class AuthMiddleware extends BaseMiddleware {

    /**
     * @inheritDoc
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface {
        $username = Input::get('username');
        $password = Input::get('password');

        if ($username == 'admin' && $password == 'pwd') {
            return $this->next($request, $handler);
        }

        throw new HttpException(401, 'Unauthorized');
    }
}
