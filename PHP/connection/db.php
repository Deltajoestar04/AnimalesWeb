<?php
$server= "localhost";
$username= "root";
$password= "carlos04";
$dbname= "animales_web";

$connection = new mysqli ($server, $username, $password, $dbname);
$connection ->set_charset("utf8");
if($connection->connect_error){
    die("fallo la coneccion: ".$connection->connect_error);
}

?>