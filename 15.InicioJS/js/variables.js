// // ACTIVIDAD 1
// var nombre = "Lexie";
// var apellido = 'Gómez Martínez';
// var edad = 32;
// var alumno = true;

// // console.log(nombre.apellido.edad.alumno); // Lo imprime en la consola de inspeccionar
// document.writeln(nombre.apellido.edad.alumno); // Aparece en el propio documento de la página web
// // alert(nombre); //aparece en un mensaje de alerta al abrir el navergador 
// // console.log(nombre + "" + apellido); // "" significa que ahí hay un espacio

// // ACTIVIDAD 2
// var base = 6;
// var altura = 3;
// var area = base * altura;

// console.log("El area del rectángulo es " + area); // si dejas un espacio después del "es" hace un espacio

// base = 10;  // Actualizo el valor de la variable
// altura = 5;  //Actualizo el valor de la variable
// area = base * altura;  //Actualizo el valor del area

// console.log("El area del rectángulo es " + area);

// // para el perimetro

// var perimetro=base*2+altura*2;

// console.log("El perímetro del rectángulo es "+ perimetro);


// //ACTIVIDAD 3

// var anhoActual=2025;
// var anhoNacimiento=1993;
// var edadEsteAnho= anhoActual-anhoNacimiento;

// console.log("La edad que tienes este año es "+ edadEsteAnho + " años");

// edadEsteAnho++; //lo puedo hacer así o edadEsteAnho++; incluso var anhosiguiente=edadEsteAnho+1; pero tengo que volver a colocar la consola

// console.log("La edad del próximo año es "+ edadEsteAnho + " años");

//ACTIVIDAD 4

// var numero1=Number(prompt("Escriba un numero:"));
// var numero2=Number(prompt("Escriba otro numero:"));

// var comparacion= (numero1>numero2);



// var palabra1=prompt("Escriba una palabra");
// var palabra2=prompt("Escriba otra palabra");


// console.log("¿Las palabras son iguales? "+ (palabra1 == palabra2));

//ACTIVIDAD 5

// var gradosAyer=2;
// var gradosHoy= -4;
// var llueveAyer=true;
// var llueveHoy=true;

// var nevarAyer=(gradosAyer<=0)&&(llueveAyer==true);

// console.log("¿Ayer nevó?" + nevarAyer); // sale false porque una de las dos condiciones es falsa.

// var nevarHoy=(gradosHoy<=0)&&(llueveHoy==true);

// console.log("¿Nevó hoy?" + nevarHoy);

//ACTIVIDAD 6

// var edadGenaro=67;
// var cotizadosGenaro=30;

// var edadEufemia=65;
// var cotizadosEufemia=38;

// var edadEulalia=65;
// var cotizadosEulalia=35;

// var edadPepe=63;
// var cotizadosPepe=40;


// var jubiladoGenaro=(edadGenaro>66.5) || ((edadGenaro>=65) && (cotizadosGenaro>37.5));
// var jubiladoEufemia=(edadEufemia>66.5) || ((edadEufemia>=65) && (cotizadosEufemia>37.5));
// var jubiladoEulalia=(edadEulalia>66.5) || ((edadEulalia>=65) && (cotizadosEulalia>37.5));
// var jubiladoPepe=(edadPepe>66.5) || ((edadPepe>=65) && (cotizadosPepe>37.5));

// console.log("Genaro se puede jubilar?" + jubiladoGenaro);
// console.log("Eufemia se puede jubilar?" + jubiladoEufemia);
// console.log("Eulalia se puede jubilar?" + jubiladoEulalia);
// console.log("Pepe se puede jubilar?" + jubiladoPepe);

// ACTIVIDAD 6 OTRA MANERA

// var nombre= prompt("¿Como te llamas?");
// var edad= Nummber(prompt("¿Que edad tienes?"));
// var cotizados= Number(prompt("¿Cuántos años tienes cotizados?"));

// var jubilado=((edad>66.5)||((edad>=65) && (cotizados>=37.5)));

// document.writeln("¿" + nombre + " puede estar jubilado" + jubilado);

