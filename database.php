<?php
/*Database connection*/
class Model{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "gemeenterotterdam";
    private $conn;

    function __construct(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if($this->conn->connect_error){
            echo 'connect failed';
        } else {
            return $this->conn;
        }
    }//constructor close
}