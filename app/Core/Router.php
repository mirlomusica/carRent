<?php

    namespace App\Core;

    use App\Core\Request;
    use App\Controllers\HomeController;
    use Exception;

    class Router{
        private array $routes = [];
        protected Request $req;

        function __construct() {
            //$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $this->routes = require(__DIR__."/../Config/routes.php");
            $this->req = new Request();
            try{
                $this->dispatch();
            }catch(\Exception $e){
                echo $e->getMessage();
            }
        }

        function getUri() {
            return $this->req->getUri();
        }

        function getMethod() {
            return $this->req->getMethod();
        }

        function dispatch() {
            $uri = $this->req->getUri();
            $method = $this->req->getMethod();

            //$c = new HomeController();
            //$c->index();
            foreach($this->routes as $route) {
                if ($uri !== $route["path"] || $method !== $route["method"]) {
                    continue;
                }
                $this->execute($route);
                return;
            }
            throw new \RuntimeException("No Route");
            // comprobar si la uri y metodo estan en ruta
            //$this->execute($routes["handler"]);
        }

        private function execute(Array $route): void {
            $array_handler = $route["handler"];
            //dd($array_handler);
            $controller = new $array_handler[0];
            $method = $array_handler[1];

            if (!method_exists($controller, $method)) {
                throw new \RuntimeException("Function $method does not exist.");
            }

            call_user_func_array([$controller, $method], $this->getRequest()->get());
        }

        function getRequest(): Request {
            return $this->req;
        }

    }
