<?php



namespace App\Core;
use PDO;
use PDOException;

class DB{
    protected PDO $pdo;

    private static ?PDO $instance = null;


    function __construct(){
        $config = require __DIR__."/../Config/config.php";
        $this->pdo = new PDO($config["dsn"],$config["user"],$config["password"]);
    }

    public static function getConnection(): PDO{
        if(self::$instance === null){
            $config = require __DIR__."/../Config/config.php";
            try{
                self::$instance = new PDO(
                    $config["dsn"],
                    $config["user"],
                    $config["password"],
                    []);

            }catch(PDOException $e){
                echo "pdo error";
                echo $e->getMessage();

            }

        }
        return self::$instance;
    }

}
