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

    /*function define for insert records*/
    public function insertRecord($post){
        $naam = $post['naam'];
        $email = $post['email'];
        $beschrijving = $post['beschrijving'];
        $lengtegraad = $post['lengtegraad'];
        $breedtegraad = $post['breedtegraad'];
        $titel = $post['titel'];
        $sql = "INSERT INTO klachten(naam,email,beschrijving,lengtegraad,breedtegraad,titel)VALUES('$naam', '$email', '$beschrijving', '$lengtegraad', '$breedtegraad', '$titel')";
        $result = $this->conn->query($sql);
        if($result){
            header('location.index.php?msg=ins');
        }else{
            echo "Error".$sql."<br>".$this->conn->error;
        }
    }//InsertRecord function close

    public function updateRecord($post){
        $naam = $post['naam'];
        $email = $post['email'];
        $beschrijving = $post['beschrijving'];
        $lengtegraad = $post['lengtegraad'];
        $breedtegraad = $post['breedtegraad'];
        $titel = $post['titel'];
        $editid = $post['hid'];
        $sql = "UPDATE klachten SET naam = '$naam', email = '$email', beschrijving = '$beschrijving', lengtegraad = '$lengtegraad', breedtegraad = '$breedtegraad', titel = '$titel' WHERE id='$editid'";
        $result = $this->conn->query($sql);
        if($result){
            header('location.index.php?msg=ups');
        }else{
            echo "Error".$sql."<br>".$this->conn->error;
        }
    }//InsertRecord function close

    public function deleteRecord($delid){
        $sql = "DELETE FROM klachten WHERE id='$delid'";
        $result = $this->conn->query($sql);
        if($result){
        header('location:index.php?msg=del');
    }else{
        echo "Error " .$sql."<br>".$this->conn->error;
    }
    

    }//deleteRecord

    public function displayRecord(){
        $sql = "SELECT * FROM klachten";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
        }//while close
        return $data;
        }//if close
    }//displayRecord close

    public function displayRecordById($editid){
        $sql = "SELECT * FROM klachten WHERE id = '$editid'";
        $result = $this->conn->query($sql);
        if($result->num_rows==1){
            $row = $result->fetch_assoc();
            return $row;
        }//if close
    }//function displayRecordById
    

}//class close

?>