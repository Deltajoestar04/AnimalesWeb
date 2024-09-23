<?php
class animal{
    public $id;
    public $apodo;
    public $especie;
    public $color;
    
}
function get_All(){
    $listaAnimales = [];
    $path = $_SERVER['DOCUMETN_ROOT'];
    include($path."/animales_web/php/connection/db.php");
    $query = "SELECT id, nombre, especie, color from animales";
    $result = $connection->query($sql);
    if($result->num_rows >0){
        while($rows = $result->fetch_assoc()){
            $object = new Animal();
            $object->id = $rows["id"];
            $object->apodo = $rows["nombre"];
            $object->especie = $rows["especie"];
            $object->color = $rows["color"];
            $listaAnimales[]= $object;

        }
    }
    return (array)$listaAnimales;
    
}

?>