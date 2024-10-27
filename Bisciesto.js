/**
 * Esta función se encarga de ejecutar la lógica principal para determinar 
 * y mostrar los años bisiestos entre dos valores ingresados por el usuario.
 */
function ejecutar() {
    // Obtiene los valores de los años de los campos de entrada
    var valor1 = document.getElementById("valor1").value;
    var valor2 = document.getElementById("valor2").value;
    
    // Obtiene el elemento donde se mostrarán los resultados
    var div_elementos = document.getElementById("elementos");
    // Limpia el contenido previo
    div_elementos.innerHTML = '';

    // Verifica que el año final sea mayor que el año inicial
    if (valor2 < valor1) {
        alert("El año final debe ser mayor al año inicio");
    } else {
        // Itera a través de los años desde valor1 hasta valor2
        for (let i = valor1; i <= valor2; i++) {
            // Comprueba si el año es bisiesto
            if (i % 4 == 0) {
                // Si es bisiesto, lo muestra en rojo y negrita
                div_elementos.innerHTML += '<p style="color: red; font-weight: bold;">' + i + ' (Bisiesto)</p>';
            } else {
                // Si no es bisiesto, lo muestra normalmente
                div_elementos.innerHTML += '<p>' + i + '</p>';
            }
        }
    }
}

/**
 * Esta función calcula y muestra el total de años bisiestos 
 * entre dos valores ingresados por el usuario.
 */
function total() {
    // Obtiene los valores de los años y los convierte a enteros
    var valor1 = parseInt(document.getElementById("valor1").value);
    var valor2 = parseInt(document.getElementById("valor2").value);
    var totalf = 0; // Inicializa el contador de años bisiestos

    // Itera a través de los años desde valor1 hasta valor2
    for (let i = valor1; i <= valor2; i++) {
        // Comprueba si el año es bisiesto
        if (i % 4 == 0) {
            totalf += 1; // Incrementa el contador si es bisiesto
        }
    }

    // Muestra el total de años bisiestos encontrados
    alert("Hay " + totalf + " año/s bisiestos en la lista");
}

/**
 * Esta función busca si un año específico ingresado por el usuario
 * es bisiesto o no, y muestra el resultado.
 */
function busqueda() {
    // Obtiene el año a buscar desde un campo de entrada
    var busqueda = document.getElementById("busqueda").value;
    
    // Obtiene el elemento donde se mostrarán los resultados
    var div_elementos = document.getElementById("elementos");
    // Limpia el contenido previo
    div_elementos.innerHTML = '';

    // Comprueba si el año es bisiesto
    if (busqueda % 4 == 0) {
        // Si es bisiesto, lo muestra en rojo y negrita
        div_elementos.innerHTML += '<p style="color: red; font-weight: bold;">El año ' + busqueda + ' es/fue Bisiesto :D</p>';
    } else {
        // Si no es bisiesto, lo muestra en azul y negrita
        div_elementos.innerHTML += '<p style="color: blue; font-weight: bold;">El año ' + busqueda + ' no es/fue Bisiesto D:</p>';
    }
}

