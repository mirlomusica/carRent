<?php

use App\Controllers\HomeController;
use App\Controllers\UsersController;

return [
    [
        'path' => '/',
        'method' => 'GET',
        'handler' => [HomeController::class, 'index']
    ],
    [
        'path' => '/contact',
        'method' => 'GET',
        'handler' => [HomeController::class, 'contact']
    ],
    [
        'path' => '/about',
        'method' => 'GET',
        'handler' => [HomeController::class, 'about']
    ],
    [
        'path' => '/users',
        'method' => 'GET',
        'handler' => [HomeController::class, 'users']
    ],
    [
        'path' => '/createUser',
        'method' => 'POST',
        'handler' => [UsersController::class, 'createUser']
    ],
    [
        'path' => '/createUser',
        'method' => 'GET',
        'handler' => [UsersController::class, 'createUserView']
    ],
    [
        'path' => '/login',
        'method' => 'GET',
        'handler' => [UsersController::class, 'loginView']
    ],

    [
        'path' => '/login',
        'method' => 'POST',
        'handler' => [UsersController::class, 'login']
    ],
];
