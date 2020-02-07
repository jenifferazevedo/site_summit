<?php
class Database{
 
    // specify your own database credentials
    public $host = "localhost";
    public $db_name = "summit";
    // public $username = "id11905308_test";
    // public $password = "testiefp";
    public $username = "root";
    public $password = "";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8_bin");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>