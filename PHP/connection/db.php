<?php
$server= "162.241.2.39";
$username= "itsonapp_244569";
$password= "244569db#780G";
$dbname= "itsonapp_244569";

$connection = new mysqli ($server, $username, $password, $dbname);
$connection ->set_charset("utf8");
if($connection->connect_error){
    die("fallo la coneccion: ".$connection->connect_error);
}

?>