<?php

namespace  Jose\Notas\lib;
use PDO;
use PDOException;
use Dotenv\Dotenv;

class Database{
    private string $host;
    private string $db;
    private string $user;
    private string $password;
    private string $charset;
    public function __construct(){
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../..');
        $dotenv->load();

       $this->host = $_ENV['DB_HOST'];
        $this->db = $_ENV['DB_NAME'];
        $this->user = $_ENV['DB_USER'];
        $this->password = $_ENV['DB_PASSWORD'];
        $this->charset = $_ENV['DB_CHARSET'];
    }

    public function connect(){
        try{
            $connection = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset};";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            $pdo = new PDO($connection,$this->user, $this->password, $options);
            return $pdo;
        }catch(\Throwable $th){
            throw $th;
        }
    }
}
