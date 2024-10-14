<?php
class planeta{
    public $id;
    public $nombre;
    public $imagen;

    
}
function get_All(){
    $listaPlanetas = [];
    $path = $_SERVER['DOCUMETN_ROOT'];
    include($path."/Planetas_webb/php/coneccion/db.php");
    $query = "SELECT id, nombre, imagen from Planetas";
    $result = $connection->query($sql);
    if($result->num_rows >0){
        while($rows = $result->fetch_assoc()){
            $object = new Animal();
            $object->id = $rows["id"];
            $object->Nombre = $rows["nombre"];
            

            
            $listaPlanetas[]= $object;

        }
    }
    return (array)$listaPlanetas;
    
}

?>