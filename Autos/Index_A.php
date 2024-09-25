<div class="conteiner">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="Formulario.html">Agregar</a></li>
                </ul>

            </div>

        </div>
        <div class="conteiner">
        <h1>Registro de Automoviles</h1>
            <h2>Consulta e ingrese los registros de Automoviles existentes</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>nombre</th>
                        <th>marca</th>
                        <th>Color</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    include("PHP/entidades/Autos.php");
                    $registro = get_All();
                    if (count($registro)>0){
                        foreach($registro as $row){
                            echo "<tr>". "<td> ". $row->nombre . "</td>" . 
                            "<td> " . $row->marca . "</td>" .
                             "<td> " . $row->Color . "</td>".
                             "</tr>";
                        }

                    }
                    ?>

                </tbody>

            </table>

        </div>
    </body>
</html>

