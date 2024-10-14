
<?php include ("header.php")?>
        <div class="conteiner">

        <h1>Lista de planetas </h1>
        <h2>por nombre y imagen </h2>

    
        <?php
                    
                    include("Php/entidades/entidades.php");
                    $registro = get_All();
                    if (count($registro)>0){
                        foreach($registro as $row){
                            echo "<p> ". $row->nombre . "</p>".
                            echo "<p> ". "<imag src='"$row->imagen ."alt='". "</p>"
                             ;
                        }

                    }
                    ?>

            
                  
        <?php include("footer.php")?>
