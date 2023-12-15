<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
        /* inhoud van de navbar */
        ul {
            list-style-type: none; 
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: lightblue;
        }
        /* zorgt ervoor dat tekst inhoud links staat */
        li {
            float: left;
        }
        /* inhoud van de navbar  */
        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        /*  */
        li a:hover:not(.active){
            background-color: #04AA6D;
        }
        /* */
        .active {
            background-color: #04AA6D ;
        }
    </style>

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="klachtenFormulier.php">KlachtenFormulier</a></li>
  <li><a href="klachtenKaart.php">KlachtenKaart</a></li>
  <li><a href="overzicht.php">Overzicht</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>





<?php
class Klacht{
    public $naam;
    public $email;
    public $beschrijving;
    public $foto;
    public $titel;
    public $status;


function __construct($naam, $email, $beschrijving, $foto, $titel, $status ){
    $this->naam = $naam;
    $this->email = $email;
    $this->beschrijving = $beschrijving;
    $this->foto = $foto;
    $this->titel = $titel;
    $this->status = $status;
}
function get_naam(){
    return $this->naam;
}
function get_email(){
    return $this->email;
}
function get_beschrijving(){
    return $this->beschrijving;
}
function get_foto(){
    return $this->foto;
}
function get_titel(){
    return $this->titel;
}
function get_status(){
    return $this->status;
}
}

$klacht = new Klacht("Woor", "345@45qw", "container stinkt", "container", "container", "actief");
echo $klacht->get_naam();
echo "</br>";
echo $klacht->get_email();
echo "</br>";
echo $klacht->get_beschrijving();
echo "</br>";
echo $klacht->get_foto();
echo "</br>";
echo $klacht->get_titel();
echo "</br>";
echo $klacht->get_status();


?>