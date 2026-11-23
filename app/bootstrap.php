<?php

require_once __DIR__."/../vendor/autoload.php";

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();
session_start();
error_log("BOOTSTRAP ID: " . session_id());
error_log("BOOTSTRAP USER: " . print_r($_SESSION["user"] ?? null, true));

if(!isset($_SESSION["user"])){
    $_SESSION["user"]="guest";

}


