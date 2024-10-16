<?php include ("header.php")?>
        <div class="conteiner">
        <h1>Registro de animales</h1>
            <h2>Consulta e ingrese los registros de animales existentes</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>nombre</th>
                        <th>Especie</th>
                        <th>Color</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    include("PHP/Intitis/Animales.php");
                    $registro = get_All();
                    if (count($registro)>0){
                        foreach($registro as $row){
                            echo "<tr>". "<td> ". $row->nombre . "</td>" . 
                            "<td> " . $row->especie . "</td>" .
                             "<td> " . $row->Color . "</td>".
                             "</tr>";
                        }

                    }
                    ?>

                </tbody>

            </table>

        </div>
    <?php include("footer.php")?>

