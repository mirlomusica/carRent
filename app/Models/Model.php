<?php

namespace App\Models;
use App\Core\DB;
use PDO;


abstract class Model{
    protected PDO $db;
    /* private string $table; */
    public function __construct(){
        try{
            $this->db = DB::getConnection();
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function getById(int $id):?array{
        $stmt = $this->db->prepare("Select * FROM {$this->table} WHERE id=:id");
        $stmt->execute([":id"=>$id]);
        return $stmt->fetch()? :null;
    }

    public function getAll():?array{
        $stmt = $this->db->prepare("Select * FROM {$this->table}");

        $stmt->execute([]);
        $cars = $stmt->fetchAll()? :null;
        if($cars){
            foreach ($cars as $key => $car) {
                $stmt = $this->db->prepare("SELECT * FROM users WHERE id=:id");
                $stmt->execute([":id" => $car["user_id"]]);

                $user = $stmt->fetch() ?: null;

                if($user == null){
                    $cars[$key]["user_name"] = "unknown";
                }else{
                    $cars[$key]["user_name"] = $user["name"];
                }
            }
        }
        return $cars;
    }

    public function create(array $data):?array{
        echo $this->table;
        $values = array_map(fn($item)=> is_string($item)? "'$item'": $item ,array_values($data));
        $fields = implode(",",array_keys($data));
        $values = implode(",",$values);
        $sql = "INSERT INTO {$this->table} ($fields) VALUES($values)";
        echo $sql;
        $stmt = $this->db->prepare($sql);
        if($stmt->execute()){
            return $data;
        }else{
            return null;
        }

    }
}
