<?php


namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class UserController
{
    public function getUserInfo(Request $request, Response $response)
    {
        //$username = 'test user';

        //$result = $username;

        //return $response->withStatus(200)->withJson($result);
        return 'test';
    }
}