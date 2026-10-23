<?php
    // NAMESPACE IS ALWAYS FRIST //
    namespace App\Controllers;


    require_once __DIR__ . "/../helper.php";
    use App\Core\DB;
    use App\Models\User;

    class HomeController {

        function __construct() {
        }

        function index() {
            $db=new DB();

            $user = new User();
            $user->create([
                "name"=>"Juan",
                "email"=>"Jaume@pepe.com",
                "password"=>"pepe"
            ]);
            echo "hola";
            echo view("home", [ "title" => "Home", "menu"=>["1","2"] ]);
        }

        function contact() {
            echo view("contact", [ "title" => "Contact" ]);
        }
        function about() {
            echo view("about", [ "title" => "about" ]);
        }

        function users() {
            $db=new DB();
            $userRepo = new User();
            $users = [];
            for($i=0;$i<10;$i++){
                $user=$userRepo->getById($i);
                var_dump($user);
                if($user){
                    $users[]=$user;
                }else{
                    break;
                }
            }
            echo view("users", [ "title" => "users" , "users"=>$users]);
        }
    }
