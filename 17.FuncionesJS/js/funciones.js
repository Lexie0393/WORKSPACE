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

    for (var i = 0; i <= elemento.length - 1; i++) {
        elemento[i].style.background = input;
    }
    // elemento.innerHTML= input
}

// Ejercicio 2 de la Fase 3

function mostrarProduct() {
    var producto = prompt("¿Cuál es el nombre del producto? ");
    var precio = prompt("¿Cuál es el precio del producto?");
    var parraforesultado = document.querySelector("#parraforesultado");

    parraforesultado.innerHTML = "El nombre del producto es " + producto + " su precio es " + precio + " €";

}

// Ejercicio 3 de la Fase 3

var nombreProducto = [];
var precioProducto = [];

function agregarProducto() {
    var producto = prompt("¿Cuál es el nobre del producto?");
    var precio = prompt("El precio de este producto es ");

    nombreProducto.push(producto);
    precioProducto.push(precio);
}

function mostrarProducto() {

    var texto = " ";
    for (var i = 0; i <= nombreProducto.length - 1; i++) {
        texto = texto + nombreProducto[i] + " - " + precioProducto[i] + " € " + "<br>";
        var parrafoResultado = document.querySelector("#resultadopropre");
        parrafoResultado.innerHTML = texto;
    }
}

// Ejercicio 4 de la Fase 3

function calcularLetraDNI() {
    var numeroDNI = document.querySelector("#dni").value;
    var resto = numeroDNI % 23;
    var letrasDNI = ["T", "R", "W", "A", "G", "M", "Y"];

    document.querySelector("#resultadosEj4Fase3").innerHTML= numeroDNI + letrasDNI.charArt(resto);
}

// Ejercicio 5 de la Fase 3

// *************************
// ******** FASE 4 *********
// *************************

// Ejercicio 1 de la Fase 4
var arrayVacio = [];
var textoResult = " "
function agregarArray() {

    var texto = prompt("Escribe un texto");
    arrayVacio.push(texto);
    textoResult = arrayVacio;
    var agregarResultado = document.querySelector("#arrayResultado");
    agregarResultado.innerHTML = textoResult;
}

function borraUltimo() {
    arrayVacio.pop(textoResult);
    var elimiResultado = document.querySelector("#arrayResultado");
    elimiResultado.innerHTML = textoResult;

}

function añadirPrincipio() {
    var texto = prompt("Introduce un texto ");
    arrayVacio.unshift(texto);
    textoResult = arrayVacio;
    var añadirResultado = document.querySelector("#arrayResultado");
    añadirResultado.innerHTML = textoResult;
}

function eliminarPrimero() {
    arrayVacio.shift(textoResult);
    var elimiResult = document.querySelector("#arrayResultado");
    elimiResult.innerHTML = textoResult;
}

// Ejercicio 2 de la Fase 4

function cambiaDiv() {

    var elemento = document.querySelectorAll(".cuadrado.verde");
    elemento[1].style.backgroundColor = "red";
}

// Ejercicio 3 de la Fase 4

function cambiarColor() {
    // var input = document.querySelector("#colordiv").value;
    var elemento = document.querySelectorAll(".cuadrado.verde.div");

    for (var i = 0; i <= elemento.length - 1; i++) {
        elemento[i].style.background = "red";
    }

//  es lo mismo pero mas rapido
    // elemento.forEach(element => {
    //     element.style.background= "red";
        
    // });
}


// Ejercicio 4 de la Fase 4

function colorpar() {
    var input = document.querySelector("#colordiv1").value;
    var elemento = document.querySelectorAll(".cuadrado.verde.div1");

    for (var i = 0; i <= elemento.length - 1; i++) {
        if (i % 2 == 0) {
            elemento[i].style.background = input;
        }
    }

}

function colorQuiero() {
    var elemento = document.querySelectorAll(".div1");
    for (var i = 0; i <= elemento.length - 1; i++) {
        elemento[i].style.backgroundColor = "green";
    }

    var input = document.querySelector("#colordiv1").value;
    var input1 = document.querySelector("#cuadradoPint").value;
    var elemento = document.querySelectorAll(".div1");

    elemento[input1].style.backgroundColor = input;

}