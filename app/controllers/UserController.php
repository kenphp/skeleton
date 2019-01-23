<?php

namespace app\controllers;

class UserController {

    private $userList = [
        [
            'id' => 1,
            'username' => 'admin',
            'password' => 'admin',
            'email' => 'admin@admin.com',
        ],
        [
            'id' => 2,
            'username' => 'demo',
            'password' => 'demo',
            'email' => 'demo@demo.com',
        ],
        [
            'id' => 3,
            'username' => 'john',
            'password' => 'doe',
            'email' => 'john@doe.com',
        ],
    ];

    public function list($request, $response) {
        return renderJson($response, $this->userList);
    }

    public function get($request, $response, $args = []) {
        $id = $args['id'];

        foreach ($this->userList as $userData) {
            if ($userData['id'] == $id) {
                return renderJson($response, $userData);
            }
        }

        $response = $response->withStatus(404);

        return renderJson($response, [
            'code' => 404,
            'message' => $response->getReasonPhrase(),
        ]);
    }
}
