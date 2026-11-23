<?php


namespace App\Models;


use App\Models\Model;
use App\Core\DB;


class Car extends Model{

    public int $id;
    public string $name;
    public string $description;
    public bool $image;
    public int $user;

    public function createCar($name, $description, $image,$user){
        $stmt = $this->db->prepare("Insert into {$this->table} (name,description,image, user_id) Values (:name,:description,:image,:user)");
        $stmt->execute([":name"=>$name, ":description"=>$description, ":image"=>$image, "user"=>$user]);

    }

    public function getByName(string $name):?User{

        $stmt = $this->db->prepare("Select * FROM {$this->table} WHERE name=:name");
        $stmt->execute([":name"=>$name]);
        $dbCar = $stmt->fetch()? :null;
        return $dbCar;

    }


    protected string $table = "cars";


}
