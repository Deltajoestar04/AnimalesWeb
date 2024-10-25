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