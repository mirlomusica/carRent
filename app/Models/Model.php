<?php

namespace App\Models;
use App\Core\DB;
use PDO;


abstract class Model{
    private PDO $db;
    /* private string $table; */
    public function __construct(){
        $this->db = DB::getConnection();
    }

    public function getById(int $id):?array{
        $stmt = $this->db->prepare("Select * FROM {$this->table} WHERE id=:id");
        var_dump($stmt);
        $stmt->execute([":id"=>$id]);
        return $stmt->fetch()? :null;
    }

    public function create(array $data):?array{
        $values = array_map(fn($item)=> is_string($item)? "'$item'": $item ,array_values($data));
        $fields = implode(",",array_keys($data));
        $values = implode(",",$values);
        $sql = "INSERT INTO {$this->table} ($fields) VALUES($values)";
        $stmt = $this->db->prepare($sql);
        if($stmt->execute()){
            return $data;
        }else{
            return null;
        }

    }

}
