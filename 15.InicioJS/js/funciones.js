// +++++++++ACTIVIDAD 1 ++++++++++

function miNombre() {
    document.writeln("Lexie Gómez Martínez");
}

// llamamos a la función

// miNombre();

// +++++++++ACTIVIDAD 2 ++++++++++

function nombreCompleto(nombre, apellidos) {
    // var nombre = ("Lexie");
    // var apellidos = (" Gómez Martínez");
    document.writeln(nombre + apellidos);
}

// nombreCompleto("Lexie", " Gomez Martinez");

// +++++++++ ACTIVIDAD 3 ++++++++++

// var numero1 = Number(prompt("Escribe un número"));
// var numero2 = Number(prompt("Escribe otro número"));

function sumaNum(numero1, numero2) {

    var resultado = numero1 + numero2;
    document.writeln(resultado);

    return resultado;


}
// var numero1 = Number(prompt("Escribe un número"));
// var numero2 = Number(prompt("Escribe otro número"));

// sumaNum();

// +++++++++ ACTIVIDAD 4 ++++++++++

function areaRectangulo(base, altura) {

    var area = base * altura;
   

    return area;
}

// document.writeln("El resultado del rectángulo es: " + areaRectangulo(5, 10));


// +++++++++ ACTIVIDAD 5 ++++++++++

function perimetroRectangulo(base, altura) {

    var perimetro = 2 * (base + altura);
    document.writeln(perimetro);

    return perimetro;
}

// perimetroRectangulo(7,10);

// +++++++++ ACTIVIDAD 6 ++++++++++

function opcionesRectangulo(base, altura) {
    var opcion = prompt("¿Qué quieres calcular el area o el perimetro del rectangulo?").toLowerCase();
    

    if (opcion=="area") {
       var area = base * altura;
       return "El area del rectángulo es " + area;
    } else if (opcion =="perimetro") {
         var perimetro = 2 * (base + altura);
         return "El perimetro del rectángulo es " + perimetro;
    }

}
// document.writeln(opcionesRectangulo(7,10));


// +++++++++ ACTIVIDAD 7 ++++++++++

function verEstacion (mes) {
    var mes;

    if ((mes=="septiembre") || (mes=="octubre") || (mes=="noviembre")) {
        return "La temporada es otoño";
    } else if ((mes=="diciembre") || (mes=="enero") || (mes=="febrero")) {
        return "Latemporada es invierno";
    } else if ((mes=="marzo") || (mes=="abril") || (mes=="mayo")) {
        return "La temporada es primavera";
    } else if ((mes=="junio") || (mes=="julio") || (mes=="agosto")) {
        return "La temporada es verano";
    }

}
// document.writeln(verEstacion("marzo"));


// +++++++++ ACTIVIDAD 8 ++++++++++

function calcularFibonacci (n) {

    if (n == 1) {
        document.writeln(0);
    }else if (n>1) {
        document.writeln(0);
        document.writeln(1);
    }

    var numero1= 0;
    var numero2= 1;
    for (var i=3; i<=n; i++) {
        var siguienteNumero=numero1 + numero2;
        document.writeln(siguienteNumero);
        numero1=numero2;
        numero2=siguienteNumero;
    }    
}
// calcularFibonacci (10);


// +++++++++ ACTIVIDAD 9 ++++++++++ 

function calcularPVP (costo, porcentajeIVA) {
    var precioFinal=costo + (costo*porcentajeIVA/100);
    return precioFinal;
}

// document.writeln(calcularPVP(85, 21));


// +++++++++ ACTIVIDAD 10 ++++++++++ 

function carlcularPrecioFinal (precioBase, tipoOperacion, porcentaje) {

    var precioFinal = 0;

    if (tipoOperacion == "IVA") {
        precioFinal=precioBase + precioBase * porcentaje / 100;
    } else if (tipoOperacion=="descuento") {
        precioFinal= precioBase - precioBase * porcentaje / 100;
    }

    return precioFinal;
}
// document.writeln(carlcularPrecioFinal(80, "descuento", 21));


function carlcularPrecioFinal (precioBase, descuento, IVA) {
    var precioIVA=precioBase+ precioBase*iva/100;
    var precioFinal = precioIVA-precioIVA*descuento/100;
    return precioFinal
}

var precio= Number(prompt("Dime el precio: "));
var descuento= Number(prompt("Dime el descuento: "));
var iva= Number(prompt("Dime el iva: "));

// document.writeln(carlcularPrecioFinal(precio, descuento, iva));



