document.writeln("<hr>");
document.writeln("<h2>Manipulación de Cadenas en JavaScript</h2>");

let cadenaEjemplo = "El arte de la fotografía sigue la armoniosa secuencia de Fibonacci - Descubre cómo esta serie matemática aporta equilibrio y belleza a tus composiciones visuales. ";

// ******************
// Ejercicio 1
// Calcular la longitud de la cadena y mostrarla en el documento.
document.writeln("La longitud de la cadena es " + cadenaEjemplo.length);

// ******************
// Ejercicio 2
// Extraer y mostrar el primer carácter de la cadena.
document.writeln("<br> Extraer y mostrar el primer carácter de la cadena es " + cadenaEjemplo.charAt(0));

// ******************
// Ejercicio 3
// Encontrar y mostrar la posición del guión ("-") en la cadena.
document.writeln("<br> Encontrar y mostrar la posición del guión ('-') en la cadena " + cadenaEjemplo.indexOf("-"));

// ******************
// Ejercicio 4
// Encontrar y mostrar la última posición de la palabra ("de") en la cadena.
document.writeln("<br> Encontrar y mostrar la última posición de la palabra ('de') en la cadena " + cadenaEjemplo.lastIndexOf("de"));

// ******************
// Ejercicio 5
// Extraer la descripción (después del guión) y mostrarla.
var posicionGuion = cadenaEjemplo.indexOf("-")+1;
document.writeln("<br> Extraer la descripción (después del guión) y mostrarla: " + cadenaEjemplo.substring(posicionGuion));

// ******************
// Ejercicio 6
// Dividir la descripción en palabras y mostrar el resultado.
var descripcion= cadenaEjemplo.substring(posicionGuion+1);
descripcion=descripcion.trim();
var arrayDescripcion = descripcion.split(" ");
document.writeln("<p><u>Ejercicio 6:</u> " + arrayDescripcion + "</p>");

// ******************
// Ejercicio 7
// Eliminar espacios en blanco al principio y al final de la cadena.


// ******************
// Ejercicio 8
// Reemplazar la palabra "Fibonacci" con "JavaScript" en la descripción y mostrar el resultado.


// ******************
// Ejercicio 9
// Devolver la cantidad de palabras que tiene la cadena de texto.
