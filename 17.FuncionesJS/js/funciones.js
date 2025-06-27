// *************************
// ******** FASE 1 *********
// *************************

// Ejercicio 1 Fase 1
function volumenCubo() {
    // var longitud=Number(prompt("Dime la longitud de cubo "));
    var longitud = document.querySelector("#volumen").value;
    // alert("El volumen del cubo es " + (longitud**3));
    var parrafoSolucion = document.querySelector("#solucionEj1F1");
    parrafoSolucion.innerHTML = "El volumen del cubo es: " + (longitud ** 3);
}
// Ejercicio 2 Fase 1

// Ejercicio 3 Fase 1

// Ejercicio 4 Fase 1



// *************************
// ******** FASE 2 *********
// *************************

// Ejercicio 1 de la Fase 2

function mostrarMensaje() {

    // var texto = prompt("Escribe lo que quieras ");
    var mensaje = document.querySelector("#textoEj1").value;
    var parrafo = document.querySelector("#ejercicio-1");
    parrafo.innerHTML = mensaje;
}

// Ejercicio 2 de la Fase 2

function cambiarColor() {
    // var color = prompt("Dime un color: ");
    var color = document.querySelector("#color").value;
    var elemento = document.querySelector("#ejercicio-2");
    elemento.style.backgroundColor = color;

}

// Ejercicio 3 de la Fase 2

function cambiarFondo() {
    var color = document.querySelector("#colorFondo").value;
    var elemento = document.querySelector("#fondoPag");
    elemento.style.background = color;
}

// Ejercicio 4 de la Fase 2

function textReves() {
    var input = document.querySelector("#reves");
    var texto = input.value;
    var arrayTexto = texto.split("").reverse().join("");
    // console.log(arrayTexto);
    elemento = document.querySelector("#ejercicio-4");
    elemento.innerHTML = arrayTexto;

    input.value = "";

}

// *************************
// ******** FASE 3 *********
// *************************

// Ejercicio 1 de la Fase 3
function colorCards() {
    var input = document.querySelector("#color1").value;
    var elemento = document.querySelectorAll(".fase-1");
    
    for (var i=0; i<=elemento.length-1; i++) {
        elemento[i].style.background=input;
    }
    // elemento.innerHTML= input
}

// Ejercicio 2 de la Fase 3

function mostrarProduct() {
    var input= document.querySelector().value;
}

// Ejercicio 3 de la Fase 3

// Ejercicio 4 de la Fase 3

// Ejercicio 5 de la Fase 3

// *************************
// ******** FASE 4 *********
// *************************

// Ejercicio 1 de la Fase 4

// Ejercicio 2 de la Fase 4

// Ejercicio 3 de la Fase 4

// Ejercicio 4 de la Fase 4