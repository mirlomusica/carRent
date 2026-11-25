<?php
// NAMESPACE IS ALWAYS FRIST //
namespace App\Controllers;


require_once __DIR__ . "/../helper.php";
use App\Core\DB;
use App\Models\Car;
use Exception;

class CarController {

    function createCar() {
        $name = filter_input(INPUT_POST,"name");
        $description = filter_input(INPUT_POST,"description");
        if(isset($_FILES['imgBlob']['tmp_name']) && $_FILES['imgBlob']['tmp_name']!= ""){
            $imgBlob = file_get_contents($_FILES['imgBlob']['tmp_name']);
        }

        if(!$name || !$imgBlob){
            echo view("error", [ "title" => "error" , "message"=>"Por favor rellena todos los campos necesarios"]);
            return;
        }

        try{
            $db=new DB();

            $car = new Car();
            $user = $_SESSION["user"];
            $car->createCar($name, $description, $imgBlob, $user);
            redirect("/cars");
        }catch(Exception  $e){
            echo view("error", [ "title" => "error" , "message"=>$e->getMessage()]);
        }
    }

    function createCarView(){
        echo view("createCar");
    }

    function carsView(){
        $car = new Car();
        $cars = $car->getAll();
        echo view("cars", [ "title" => "cars" , "cars"=>$cars] );

         
    }
}
