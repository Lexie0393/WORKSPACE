
// ACTIVIDAD 1
// var numero= Number(prompt("Introduzca su número de lotería"));

// if (numero==88008) {
//     alert("¡Su numero ha sido PREMIADO!");
// } else {
//     alert("Lo siento, su número NO ha sido premiado")
// }

// ACTIVIDAD 2

// var numero1=Number(prompt("Escriba un número:"));
// var numero2=Number(prompt("Escriba otro número:"));

// if (numero1<numero2) {
//     document.writeln("El número menor es: " + numero1 + " y el número mayor es " + numero2 );
// } else if (numero1>numero2) {
//     document.writeln("El número menor es: "+ numero2 + " y el número mayor es " + numero1);
// } else if (numero1==numero2) {
//     document.writeln("Los dos números son iguales.");
// }

//  ACTIVIDAD 3

// var numero=Number(prompt("Escriba un número entero:"));
// var absoluto;

// if (numero<0) {
//     (absoluto= numero *(-1));
//     document.writeln("Su número en valor absoluto es: " + absoluto);
// } else {
//     document.writeln("Su número en valor absoluto es: " + numero);
// }

//  ACTIVIDAD 4

// var letra = prompt("Escriba una letra: ".toLowerCase());
// var vocal;

// if (letra.length != 1) {
//     document.writeln("No se puede procesar este dato has escrito más de un carácter.");
// } else if ((letra.length == 1) && ((letra == "a" || letra == "e" || letra == "i" || letra == "o" || letra == "u"))) {
//     document.writeln("La letra es una vocal.");
// } else if (letra != vocal) {
//     document.writeln("Eso es la letra: ");
// }

//  ACTIVIDAD 5

// var altura1 = Number(prompt("Escribe la altura de una persona: "));
// var altura2 = Number(prompt("Escribe la altura de otra persona: "));
// var resultado = altura1 - altura2;
// if (resultado > 0) {
//     document.writeln("La diferencia es: " + resultado.toFixed(2));
// } else if (resultado < 0) {
//     (resultado = resultado * (-1));
//     document.writeln("La diferencia es: " + resultado.toFixed(2));
// }

// ACTIVIDAD 6 

// var num1 = Number(prompt("Escríbeme un número: "));
// var num2 = Number(prompt("Escríbeme otro número: "));
// var num3 = Number(prompt("Escríbeme otro número: "));

// if ((num1==num2) && (num2==num3)) {
//     document.writeln("Los tres números escritos son iguales");
// } else if ((num1!=num2) && (num2!=num3)) {
//     document.writeln("Los tres número son distintos");
// } else {
//     document.writeln("Hay dos número iguales");
// }

// ACTIVIDAD 7

// var pregunta1 = prompt("¿Que quieres calcular el área del triángulo o la del círculo?".toLowerCase());

// if (pregunta1 == "triangulo") {
//     var pregunta2 = Number(prompt("Escriba la base: "));
//     var pregunta3 = Number(prompt("Escriba la altura: "));
//     var triangulo = (pregunta2 * pregunta3);
//     document.writeln("El área del triángulo es " + triangulo.toFixed(2));
// } else if (pregunta1 == "circulo") {
//     var pregunta4 = Number(prompt("Escriba el radio: "));
//     var circulo = (pregunta4 * pregunta4);
//     document.writeln("El área del círculo es " + circulo.toFixed(2));
// }


// EJERCICIO EXTRA

// document.writeln("<table border='1'><tr><th> Nombre </th><th> Edad </th></tr>");
// var pregunta= prompt("¿Cuantos sois?");

// for(var contador=1; contador<=pregunta; contador++) {
// var pregunta1 =prompt("¿Como te llamas?");
// document.writeln("<tr><td>" + pregunta1 + "</td>");
// var pregunta2 = Number(prompt("¿Cuántos años tienes?"));
// document.writeln("<td>" + pregunta2 + "</td></tr>");
// }
// document.writeln("</table>");