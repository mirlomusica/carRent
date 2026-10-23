<?php

function dd() {
    foreach(func_get_args() as $arg) {
        echo "<pre>";
        var_dump($arg);
        echo "</pre>";
    }
    die;
}

function view(string $view, array $data = []) {
    if ($data && is_array($data)) {
        extract($data);
    }
    require_once __DIR__ . "/Views/" . $view . ".view.php";

}

function env(string $var){
    return $_ENV[$var];
}

function redirect(string $url){
    header("location:$url");
}
