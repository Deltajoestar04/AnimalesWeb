function ejecutar(){
  
    var valor1= document.getElementById("valor1").value;
    var valor2= document.getElementById("valor2").value;
    
    var div_elementos = document.getElementById("elementos");
    div_elementos.innerHTML = '';


    if(valor2<valor1){
        alert("el año final debe ser mayor al año inicio")
    }else for(let i = valor1; i<= valor2; i++){{
    
        if (i % 4 == 0) {
            div_elementos.innerHTML += '<p style="color: red; font-weight: bold;">' + i + ' (Bisiesto)</p>';
        } else {
            div_elementos.innerHTML += '<p>' + i + '</p>';
        }

        }

    }
}

function total() {
    var valor1 = parseInt(document.getElementById("valor1").value);
    var valor2 = parseInt(document.getElementById("valor2").value);
    var totalf = 0;

    for (let i = valor1; i <= valor2; i++) {
        if (i % 4 == 0) {
            totalf += 1;
        }
    }

    alert("Hay " + totalf + " año/s bisiestos en la lista");
}

function busqueda(){
    var busqueda= document.getElementById("busqueda").value;
    
    var div_elementos = document.getElementById("elementos");
    div_elementos.innerHTML = '';

    if (busqueda % 4 == 0) {
        div_elementos.innerHTML += '<p style="color: red; font-weight: bold;">El año ' + busqueda + ' es/fue Bisiesto :D</p>';
 
    }else{
        div_elementos.innerHTML += '<p style="color: blue;font-weight: bold;">El año ' + busqueda + ' no es/fue Bisiesto D:</p>';

    }


=======
function ejecutar(){
  
    var valor1= document.getElementById("valor1").value;
    var valor2= document.getElementById("valor2").value;
    
    var div_elementos = document.getElementById("elementos");

    for(let i = valor1; i<= valor2; i++){
        if (i % 4 == 0) {
            div_elementos.innerHTML += '<p style="color: red; font-weight: bold;">' + i + ' (Bisiesto)</p>';
        } else {
            div_elementos.innerHTML += '<p>' + i + '</p>';
        }

    }

}
