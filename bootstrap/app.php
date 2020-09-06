<?php

use App\Controller\UserController;

session_start();

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);

$container = $app->getContainer();

$container['UserController'] = function ($container) {
    return new UserController();
};

require __DIR__ . '/../app/routes.php';