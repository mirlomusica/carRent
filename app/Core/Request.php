<?php

    namespace App\Core;

    class Request{

        protected string $uri;
        protected string $method;

        function __construct() {
            //$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $method = filter_var($_SERVER['REQUEST_METHOD']);
            $this->uri = $uri;
            $this->method = $method;
        }

        function getUri(): string|null {
            return $this->uri;
        }

        function getMethod(): string|null {
            return $this->method;
        }

        function query(string $key): string|null {
            return filter_input(INPUT_GET, $key);
        }

        function post(string $key): string|null {
            return filter_input(INPUT_POST, $key);
        }

        function get(){
            
            return $_GET;
        }
    }
