
// EJECICIOA BUCLES

// ACTIVIDAD 1

// for (var contador=1;contador<51; contador++) {
//     document.writeln("Numero " + contador);
// }

// ACTIVIDAD 2

//  var palabra= prompt("Escribe una palabra ");
// for (var contador=1; contador<11; contador++) {
//     document.writeln("<br>" + palabra + contador);
// }

// ACTIVIDAD 3

// var numero = (contador%2 ==0)

// for (var contador = 0; contador < 101; contador++) {
//     if(contador%2 ==0){
//         document.writeln("<br>" + contador);
//     }  
// }

// ACTIVIDAD 4

// var numero= Number(prompt("Escribe un número: "));

// for(var contador = 1; contador<=numero; contador++) {
//     if(contador%2 == 1){
//         document.writeln("<br>" + contador);
//     }
// }

// ACTIVIDAD 5

// var numero= Number(prompt("Escribe un numero entero positivo: "));

// for( var contador = numero; contador>=0; contador--) {
//     if (contador==0){
//         document.writeln(contador + ".");
//     } else {
//         document.writeln(contador + ", ");
//     }
// }

// ACTIVIDAD 6

// var ahorro = 200;
// var ahorroAnho= ahorro*12;
// var totalAhorrado=0;
// var ahorroAnho =0;

// for (var contador=1; contador<=10; contador++) {
//     for(var cont=1; cont<=12; cont++) {
//         ahorroAnho = ahorroAnho + ahorro;
//     }
//     document.writeln("<br>Ahorro al año "+contador+": " + ahorroAnho);
// }

// for (var contador=1; contador<=10; contador++) {
//     totalAhorrado = totalAhorrado + (ahorroAnho);
//     document.writeln("<br>Año: " + contador + " Total ahorrado " + totalAhorrado)
// } 

// ACTIVIDAD 7

// var ahorro = 350;
// var ahorroAnho= ahorro*12;
// var totalAhorrado= 0;

// var contador=1;
// while (totalAhorrado<=50000) {
//     totalAhorrado= totalAhorrado + (ahorroAnho);
//     document.writeln("<br>Año: " + contador + " Total ahorrado." + totalAhorrado);
//     contador++;
// }

// otra opcion de la actividad 7

var ahorroMes= Number(prompt("¿Cuánto ahorras al mes?"));
var objetivo= Number(prompt("¿Cuánto quieres ahorrar?"));
var ahorroAnho= ahorroMes*12;
var totalAhorrado= 0;
var contador=1;
while (totalAhorrado<=objetivo) {
    totalAhorrado= totalAhorrado + (ahorroAnho);
    document.writeln("<br>Año: " + contador + "Total ahorrado " + totalAhorrado);
    contador++;
}