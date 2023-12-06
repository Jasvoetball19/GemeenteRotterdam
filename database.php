<?php
$servername = "localhost";
$username = "root";
$passwoord = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $passwoord);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected successfully";
}catch(PDOException $e) {
    echo "connection failed: " . $e->getMessage();

}

?>