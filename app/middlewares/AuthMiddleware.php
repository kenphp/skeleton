<?php

namespace app\middlewares;

use Ken\Exception\HttpException;

use Ken\Http\BaseMiddleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

use Psr\Http\Server\RequestHandlerInterface;

class AuthMiddleware extends BaseMiddleware {

    /**
     * @inheritDoc
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface {
        $queryParams = $request->getQueryParams();
        if (isset($queryParams['username']) && $queryParams['username'] == 'admin') {
            return $this->next($request, $handler);
        }

        $requestHeaders = $request->getHeader('Accept');

        if (in_array('application/json', $requestHeaders)) {
            return renderJson($this->response, [
                'code' => 501,
                'message' => 'Unauthorized',
            ]);
        } else {
            throw new HttpException(501, 'Unauthorized');
        }
    }
}
