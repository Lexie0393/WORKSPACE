Lista el nombre de todas las gallinas que están vivas por orden alfabético.
SELECT nombre FROM gallina WHERE fecha_defuncion IS NULL ORDER BY nombre ASC;
Lista las fechas (sin repetir) en las que hay datos registrados de la producción de las gallinas ordenado por la propia fecha de más reciente a más antigua.
SELECT DISTINCT fecha FROM huevo WHERE cantidad IS NOT NULL ORDER BY fecha DESC;
Muestra el nombre de las gallinas que son de la raza de Villalba y tienen una fecha de nacimiento.
SELECT nombre FROM gallina WHERE nombre_raza='villalba' AND fecha_nacimiento IS NOT NULL;
Muestra el nombre de las gallinas que nacieron en el 2022 y son de la raza de Mos.
SELECT nombre FROM gallina WHERE nombre_raza='Mos' AND  fecha_nacimiento BETWEEN '2022-01-01' AND '2022-12-31';
Lista el nombre de cada gallina y el tamaño que tiene cada una. Ten en cuenta que el tamaño depende de la raza de cada gallina.
SELECT ga.nombre AS nombre, ra.tamano FROM gallina ga JOIN raza ra ON ga.nombre_raza=ra.nombre;
Muestra la cantidad de días distintos donde hay registrados datos de la producción de las gallinas. Haz que el nombre de la columna sea num_dias.
SELECT COUNT(DISTINCT fecha) AS num_dias FROM huevo WHERE cantidad IS NOT NULL;
Lista nombre y fecha de nacimiento de las gallinas que nacieron después del 2020.
SELECT nombre, fecha_nacimiento FROM gallina WHERE fecha_nacimiento >'2020-01-01';
Lista el nombre y el color que tienen las gallinas que no tienen fecha de nacimiento. Ten en cuenta que el color depende de la raza de la gallina.
SELECT ga.nombre,ra.color FROM raza ra JOIN gallina ga ON ga.nombre_raza=ra.nombre WHERE fecha_nacimiento IS NULL;
Muestra la cantidad de gallinas que nacieron en el 2020.
SELECT COUNT(nombre) AS cantidad FROM gallina WHERE fecha_nacimiento BETWEEN '2020-01-01' AND '2020-12-31'; 
Lista el nombre de la gallina y cantidad de huevos que puso el 20 de Abril de 2023.
SELECT ga.nombre, hu.cantidad FROM huevo hu JOIN gallina ga ON hu.id_gallina=ga.id WHERE fecha='2023-04-20'; 
Muestra el nombre de las gallinas que son de la raza Mos o Villalba.
SELECT ga.nombre FROM gallina ga JOIN raza ra ON ga.nombre_raza=ra.nombre WHERE ra.nombre IN ('mos', 'villalba');
Lista la cantidad de huevos que se pusieron en total cada día.
SELECT  SUM(cantidad) AS cantidad, fecha FROM huevo GROUP BY fecha ORDER BY fecha ASC;
Muestra los tres días que se pusieron más huevos. Muestra también la cantidad de huevos que se pusieron.
SELECT fecha, SUM(cantidad) AS cantidad FROM huevo GROUP BY fecha ORDER BY cantidad DESC LIMIT 3;
Muestra la cantidad de huevos que puso cada gallina. El resultado de la tabla va a ser el nombre de la gallina y la cantidad de huevos que puso.
SELECT ga.nombre, SUM(hu.cantidad) AS cantidad FROM huevo hu JOIN gallina ga ON hu.id_gallina=ga.id
GROUP BY nombre ORDER BY nombre ASC;
Muestra la cantidad de huevos que puso cada raza de gallina. El resultado debe mostrar el nombre de la raza y la cantidad de huevos que puso.
SELECT ga.nombre_raza, SUM(hu.cantidad) AS cantidad FROM huevo hu JOIN gallina ga ON hu.id_gallina=ga.id GROUP BY nombre_raza ORDER BY nombre_raza ASC;
Muestra el nombre de las cuatro gallinas que más huevos pusieron. En el resultado también aparece la cantidad de huevos que pusieron.
SELECT ga.nombre, SUM(hu.cantidad) AS cantidad FROM huevo hu JOIN gallina ga ON hu.id_gallina=ga.id GROUP BY nombre ORDER BY cantidad DESC LIMIT 4;
Muestra el nombre de las gallinas que pusieron más de 6 huevos.
SELECT ga.nombre FROM huevo hu JOIN gallina ga ON hu.id_gallina=ga.id GROUP BY nombre HAVING SUM(hu.cantidad)>6 ORDER BY nombre ASC;
Muestra la media de huevos que se ponen al día.
SELECT AVG(cantidad) FROM huevo;
Muestra la cantidad de huevos que se pusieron en total cada día ordenados por esa cantidad de mayor a menor.
SELECT fecha, SUM(cantidad) AS cantidad FROM huevo GROUP BY fecha ORDER BY cantidad DESC;
Muestra el nombre y la media de huevos que pone cada gallina. 
SELECT ga.nombre, AVG(hu.cantidad) FROM gallina ga JOIN huevo hu ON hu.id_gallina=ga.id GROUP BY nombre ORDER BY nombre ASC;
Muestra los días dónde alguna gallina puso 2 huevos.
SELECT DISTINCT hu.fecha FROM huevo hu JOIN gallina ga ON hu.id_gallina=ga.id WHERE cantidad=2;
Muestra la cantidad de días que cada gallina no puso ningún huevo.
SELECT ga.nombre, COUNT(hu.fecha) AS cantidad FROM huevo hu JOIN gallina ga ON hu.id_gallina=ga.id WHERE cantidad=0 GROUP BY nombre;
Muestra los nombres, la media de huevos y la cantidad que puso cada gallina de las que son de la raza de Peneda.
SELECT ga.nombre, AVG(hu.cantidad) AS media, SUM(hu.cantidad) AS cantidad FROM huevo hu JOIN gallina ga ON hu.id_gallina=ga.id WHERE nombre_raza='peneda' GROUP BY nombre;
Muestra la cantidad de veces que se pusieron dos huevos.
SELECT COUNT(cantidad) AS cantidad FROM huevo WHERE cantidad=2;
Muestra el nombre de las gallinas de la raza de Mos que pusieron más de 0,5 huevos de media.
SELECT ga.nombre FROM huevo hu JOIN gallina ga ON hu.id_gallina=ga.id WHERE nombre_raza='mos' GROUP BY nombre HAVING AVG(cantidad)>0.5;
