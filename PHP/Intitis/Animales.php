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
    include($path."/animalesweb/php/connection/db.php");
    $query = "SELECT id, apodo, especie, color from animal";
    $result = $connection->query($sql);
    if($result->num_rows >0){
        while($rows = $result->fetch_assoc()){
            $object = new Animal();
            $object->id = $rows["id"];
            $object->apodo = $rows["apodo"];
            $object->especie = $rows["especie"];
            $object->color = $rows["color"];
            $listaAnimales[]= $object;

        }
    }
    return (array)$listaAnimales;
    
}

?>