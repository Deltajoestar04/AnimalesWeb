<?php
class animal{
    public $id;
    public $Nombre;
    public $Marca;
    public $color;
    
}
function get_All(){
    $listaAutos = [];
    $path = $_SERVER['DOCUMETN_ROOT'];
    include($path."/autos_web/php/coneccion/dsb.php");
    $query = "SELECT id, nombre, Marca, color from Autos";
    $result = $connection->query($sql);
    if($result->num_rows >0){
        while($rows = $result->fetch_assoc()){
            $object = new Animal();
            $object->id = $rows["id"];
            $object->apodo = $rows["nombre"];
            $object->especie = $rows["marca"];
            $object->color = $rows["color"];
            $listaAutos[]= $object;

        }
    }
    return (array)$listaAutos;
    
}

?>