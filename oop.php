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