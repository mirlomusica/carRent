<?php

use App\Controllers\HomeController;

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
];
