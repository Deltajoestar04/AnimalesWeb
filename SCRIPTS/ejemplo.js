//console.log("hello world")

function sumar(){
    //declaracion de variables
    var valor1 =document.getElementById("valor1").value;
    var valor2 =document.getElementById("valor2").value;
    var result = parseFloat(valor1)+parseFloat(valor2);
    //colocar un valor interno dentro de p
    document.getElementById("resultado").innerText = "el resultado es " + result;

    
} 