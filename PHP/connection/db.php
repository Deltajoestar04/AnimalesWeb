<?php
$server= "localhost";
$username= "root";
$password= "Carlos04";
$dbname= "animales_web";

$connection = new mysqli ($server, $username, $password, $dbname);
$connection ->set_charset("utf8")
if($connection->connection_error){
    die("fallo la coneccion: ",$connection->connection_error);
}

?>