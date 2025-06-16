
// ACTIVIDAD 1

// var edad = prompt("¿Cuál es tu edad?");

// if (edad<45) {
//     document.writeln(edad + " sigues siendo joven ;)");
// }

// ACTIVIDAD 2

// var escribe = prompt("¿Eres un robot? \n Escribe el siguiente código: c14ve");
// // console.log(escribe)

// if (escribe=="c14ve") {
//     document.writeln(" No es un robot");
// } else {
//     document.writeln(" Código incorrecto");
// }

//ACTIVIDAD 3

// var escribe = Number(prompt("Escribe un número y te digo si es par:"));

// if (escribe%2==0) {  // También podria hacer (escribe%2==1) o (escribe%2!=0) esto seria para decir que el resto de la divison es 1 "ambos son para impar"
//     document.writeln("El número" + numero + "es par");
// } else {
//     document.writeln( "El número" + numero + "es impar");
// }

// ACTIVIDAD 4

// var edad = Number(prompt("¿Cuántos años tienes?"));
// var altura = Number(prompt("¿Cuánto mides?"));

// if ((edad>=14) && ((altura>=1.40) && (altura<=1.95))) {
//     document.writeln("Puedes montar en la atracción de caída libre.");
// } else {
//     document.writeln("No puedes montar en la atracción de caída libre");
// }

//  ACTIVIDAD 5

// var edad= Number(prompt("¿Cuántos años tienes?"));

// if (edad<12) {
//     document.writeln("El precio de la entrada es de 4 euros");
// } else if ((edad>=12) && (edad<65)) {  //Puedo quitar lo de >=12 porque arriba es menor a 12.
//     document.writeln("El precio de la entrada es 8 euros");
// } else  {
//     document.writeln("El precio de la entrada es de 6 euros");
// }

//  ACTIVIDAD 6

// var respuesta = Number(prompt("¿Cuál es el número del mes de su nacimiento?"));

// if (respuesta == 1) {
//     document.writeln("El mes de tu nacimiento es Enero");
// } else if (respuesta == 2) {
//     document.writeln("El mes de tu nacimiento es Febrero");
// } else if (respuesta == 3) {
//     document.writeln("El mes de tu nacimiento es Marzo");
// } else if (respuesta == 4) {
//     document.writeln("El mes de tu nacimiento es Abril");
// } else if (respuesta == 5) {
//     document.writeln("El mes de tu nacimiento es Mayo");
// } else if (respuesta == 6) {
//     document.writeln("El mes de tu nacimiento es Junio");
// } else if (respuesta == 7) {
//     document.writeln("El mes de tu nacimiento es Julio");
// } else if (respuesta == 8) {
//     document.writeln("El mes de tu nacimiento es Agosto");
// } else if (respuesta == 9) {
//     document.writeln("El mes de tu nacimiento es Septiembre");
// } else if (respuesta == 10) {
//     document.writeln("El mes de tu nacimiento es Abril");
// } else if (respuesta == 11) {
//     document.writeln("El mes de tu nacimiento es Abril");
// } else if (respuesta == 12) {
//     document.writeln("El mes de tu nacimiento es Diciembre");
// } else {
//     alert("No has introducido un mes válido");
// }

// TAMBIEN SE PUEDE HACER DE ESTA OTRA MANERA EL EJERCICIO 6

// var mes= Number(prompt("¿Cuál es el número del mes de su nacimiento?"));
// switch (mes) {
//     case 1: document.writeln("Enero");
//     break;
//     case 2: document.writeln("Febrero");
//     break;
//     case 3: document.writeln("Marzo");
//     break;
//     case 4: document.writeln("Abril");
//     break;
//     case 5: document.writeln("Mayo");
//     break;
//     case 6: document.writeln("Junio");
//     break;
//     case 7: document.writeln("Julio");
//     break;
//     case 8: document.writeln("Agosto");
//     break;
//     case 9: document.writeln("Septiembre");
//     break;
//     case 10: document.writeln("Octubre");
//     break;
//     case 11: document.writeln("Noviembre");
//     break;
//     case 12: document.writeln("Diciembre");
//     break;
//     default: alert("No has introducido un mes válido");

// }

//ACTIVIDAD 7

// var respuesta= prompt("¿Qué fruta quieres comprar?").toLowerCase();  //.toLowercas() se utiliza para que lo que escriban en el prompt lo pase la maquina en minuscula.

// if (respuesta=="naranjas") {
//     document.writeln("Valen 0.60 euros kilo");
// } else if (respuesta=="manzanas") {
//     document.writeln("Valen 0.36 euros kilo");
// } else if (respuesta=="cerezas") {
//     document.writeln("Valen 3.10 euros kilo");
// } else if (respuesta=="platanos") {
//     document.writeln("Valen 0.46 euros kilo");
// } else if (respuesta=="fresas") {
//     document.writeln("Valen 2.40 euros kilo");
// } else {
//     alert("Esta fruta no está disponible. Prueba con otra.");
// }

// ACTIVIDAD 8

// var candidato= prompt("¿Qué candidato desea votar?").toLowerCase();

// if (candidato=="candidato a") {
//     document.writeln("Usted ha votado al partido amarillo");
// } else if (candidato=="candidato b") {
//     document.writeln("Usted ha votado al partido rosa");
// } else if (candidato=="candidato c") {
//     document.writeln("Usted ha votado al partido negro");
// } else {
//     alert("Opción Erronea");
// }

// ACTIVIDAD 9 

// var nota= Number(prompt("¿Qué nota has sacado(sin decimales)?"));

// if (nota<=4) {
//     document.writeln("Ha suspendido el examen");
// } else if (nota==5) {
//     document.writeln("Ha sacado un suficiente");
// } else if (nota==6){
//     document.writeln("Ha sacado un bien");
// } else if ((nota==7) || (nota==8)) {
//     document.writeln("Ha sacado un notable");
// // } else if (nota==8){
// //     document.writeln("Ha sacado un notable");
// } else if ((nota==9) || (nota==10)){
//     document.writeln("Ha sacado un sobresaliente");
// // } else if (nota==10){
// //     document.writeln("Ha sacado un sobresaliente");
// } else {
//     document.writeln("Esta nota no es correcta");
// }

// ACTIVIDAD 10

// var mes= Number(prompt("Escriba un numero del mes para saber en que estación del año se sitúa."));

// if ((mes==9) || (mes==10) || (mes==11)) {
//     document.writeln("La temporada es Otoño");
// } else if ((mes==12) || (mes==1) || (mes==2)) {
//     document.writeln("La temporada es Invierno");
// } else if ((mes==3) || (mes==4) || (mes==5)) {
//     document.writeln("La temporada es Primavera");
// } else if ((mes==6) || (mes==7) || (mes==8)) {
//     document.writeln("La temporada es Verano");
// } else {
//     document.writeln("Este mes no existe");
// }

// Misma Actividad 10 pero con switch
// var mes= Number(prompt("Escriba un numero del mes para saber en que estación del año se sitúa."));

// switch (mes) {
//     case 1: document.writeln("Inverno");
//     break;
//     case 2: document.writeln("Inverno");
//     break;
//     case 3: document.writeln("Primavera");
//     break;
//     case 4: document.writeln("Primavera");
//     break;
//     case 5: document.writeln("Primavera");
//     break;
//     case 6: document.writeln("Verano");
//     break;
//     case 7: document.writeln("Veranoo");
//     break;
//     case 8: document.writeln("Verano");
//     break;
//     case 9: 
//     case 10: 
//     case 11: 
//     document.writeln("Otoño");
//     break;
//     case 12: document.writeln("Inverno");
//     break;
//     default: alert("Mes incorrecto");
// }


// ACTIVIDAD 11

// var semana= Number(prompt("Escribe el numero correspondiente a un día de la semana."));

// if ((semana>=1) && (semana<=5)) {
//     document.writeln("Es un dia laboral");
// } else if ((semana==6) || (semana==7)) {
//     document.writeln("Es un dia de finde semana");
// } else {
//     document.writeln("Este dia de la semana no existe");
// }

// ACTIVIDAD 12

// var mes= prompt("Escribe un mes del año").toLowerCase();

// if ((mes=="enero") || (mes=="marzo") || (mes=="julio")||(mes=="agosto") || (mes=="octubre")|| (mes=="diciembre"))  {
//     document.writeln("Este mes tiene 31 días");
// } else if (mes=="febrero") {
//     document.writeln("Este mes tiene 28 días");
// } else if ((mes=="abril") || (mes=="junio") || (mes=="septiembre")||(mes=="noviembre")) {
//     document.writeln("Este mes tiene 30 días");
// } else {
//     alert("No existe");
// }

//ACTIVIDAD EXTRA

var precioBase = Number(prompt("¿Cuánto tienes que pagar?"));

var socio = prompt("¿Eres socio de nuestro club?").toLowerCase();


// var limite=50;

if (precioBase < 50) {
    if (socio == "si") {
        precioFinal1 = (precioBase - (precioBase * 0.05))
    } else if (socio == "no") {
        precioFinal1 = precioBase
    }
    document.writeln("El precio final a pagar es " + precioFinal1 + " euros");
} else if (precioBase >= 200) {
    if (socio == "si") {
        precioFinal1 = (precioBase - (precioBase * 0.25))
        if ((precioBase * 0.25) > 50) {
            precioFinal1 = (precioBase - 50)
        }
    } else if (socio == "no") {
        precioFinal1 = (precioBase - (precioBase * 0.2))
        if ((precioBase * 0.2) > 50) {
            precioFinal1 = (precioBase - 50)
        }
    }
    document.writeln("El precio final a pagar es " + precioFinal1 + " euros");

} else if (precioBase >= 100) {
    if (socio == "si") {
        precioFinal1 = (precioBase - (precioBase * 0.2))
    } else if (socio == "no") {
        precioFinal1 = (precioBase - (precioBase * 0.1))
    }
    document.writeln("El precio final a pagar es " + precioFinal1 + " euros");
} else if (precioBase >= 50) {
    if (socio == "si") {
        precioFinal1 = (precioBase - (precioBase * 0.1))
    } else if (socio == "no") {
        precioFinal1 = (precioBase - (precioBase * 0.05))
    }
    document.writeln("El precio final a pagar es " + precioFinal1 + " euros");
}


