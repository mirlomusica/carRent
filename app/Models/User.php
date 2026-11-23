<?php


namespace App\Models;


use App\Models\Model;
use App\Core\DB;


class User extends Model{

    public int $id;
    public string $name;
    public string $email;
    public bool $admin;
    public string $encryptedPassword;


    public function newUser(int $id,string $name, string $email, bool $admin, string $encryptedPassword){


        $user = new User();

        $user->id = $id;
        $user->name = $name;
        $user->email = $email;
        $user->admin = $admin;
        $user->encryptedPassword = $encryptedPassword;
        return $user;

    }

    public function getByName(string $name):?User{

        $stmt = $this->db->prepare("Select * FROM {$this->table} WHERE name=:name");
        $stmt->execute([":name"=>$name]);
        $dbUser = $stmt->fetch()? :null;
        return $this->newUser($dbUser["id"], $dbUser["name"], $dbUser["email"], True, $dbUser["password"]);
    }

    protected string $table = "users";


}
