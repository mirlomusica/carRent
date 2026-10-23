<?php

include_once __DIR__."/../app/Core/Request.php";
include_once __DIR__."/../app/Core/Router.php";
use App\Core\Router;

$routes = require(__DIR__."/../app/Config/routes.php");

foreach ($routes as $route) {
    echo $route["path"];
    $router = new Router($route["path"], $route["method"], false);
    echo " ";
    echo $router->getUri();
    echo "\n\n";
}

/*

TO ADD:

.- ruta por defecto
- ruta no disponible
si necesario cambia codigo de otro para que pase

*/