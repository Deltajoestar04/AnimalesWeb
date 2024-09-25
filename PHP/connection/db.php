<?php
$server= "localhost";
$username= "root@127.0.0.1:3306";
$password= "carlos04";
$dbname= "animales_web";

$connection = new mysqli ($server, $username, $password, $dbname);
$connection ->set_charset("utf8");
if($connection->connect_error){
    die("fallo la coneccion: ".$connection->connect_error);
}

?>