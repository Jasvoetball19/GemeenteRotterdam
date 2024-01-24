<?php

class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = 'password';
    private $database = 'gemeenterotterdam';
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function connect() {
        return $this->conn;
    }
}
?>