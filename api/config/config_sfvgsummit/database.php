<?php
class Database{
 
    // specify your own database credentials
    public $host = "localhost";
    public $db_name = "id12465449_summit";
    public $username = "id12465449_frontendeveloper1";
    public $password = "developer19";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>