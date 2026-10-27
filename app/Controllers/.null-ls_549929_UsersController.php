<?php
// NAMESPACE IS ALWAYS FRIST //
namespace App\Controllers;


require_once __DIR__ . "/../helper.php";
use App\Core\DB;
use App\Models\User;
use Exception;

class UsersController {

    function __construct() {
    }

    function createUser() {
        $name = filter_input(INPUT_POST,"name");
        $email = filter_input(INPUT_POST,"email");
        $password = filter_input(INPUT_POST,"password");

        try{
            $db=new DB();

            $user = new User();
            $user->create([
                "name"=>$name,
                "email"=>$email,
                "password"=>password_hash($password,PASSWORD_DEFAULT)
            ]);
            redirect("/users");
        }catch(Exception  $e){
            echo view("error", [ "title" => "error" , "message"=>$e->getMessage()]);
        }
    }

    function createUserView(){
            echo view("createUser", [ "title" => "User Creation" ]);
    }

    function login(){
        $name = filter_input(INPUT_POST,"name");
        $email = filter_input(INPUT_POST,"email");
        $password = filter_input(INPUT_POST,"password");
            echo view("login", [ "title" => "Login" ]);
    }

    function loginView(){
            echo view("login", [ "title" => "Login" ]);
    }
}
