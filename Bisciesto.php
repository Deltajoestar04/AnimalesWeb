<?php include ("header.php")?>
<script src="Bisciesto.js"></script>
<link rel="stylesheet" href="css/styles.css" type="text/css">

        <div class="conteiner">
        <h1>Años Bisiestos</h1>
        <h2>Año de inicio / Año final</h2>     
           <input type="number" id="valor1"></input> 
            <input type="number" id="valor2"></input>
            <button onclick="ejecutar()">ejecutar</button>
            <button onclick="total()">Total</button>
            <button onclick="busqueda()">Busqueda</button>
            
            <input type="number" id="busqueda"></input>

             
            
            <div id="elementos"></div>

        </div>
    <?php include("footer.php")?>
