--ejercicio 1
SELECT r.nombre, r.descripcion 
FROM receta r 
JOIN cultura c ON r.id_cultura=c.id 
WHERE c.nombre='Italiana';
-- ejercici0 2
SELECT pa.orden, pa.descripcion AS paso_descripcion 
FROM paso_receta pa 
JOIN receta re ON pa.id_receta=re.id 
WHERE re.nombre='Tiramisu al Limone';
--ejercicio 3
SELECT ing.nombre, rein.cantidad, rein.unidad_medida 
FROM receta_ingrediente rein 
JOIN ingrediente ing ON rein.id_ingrediente=ing.id 
JOIN receta re ON rein.id_receta=re.id 
WHERE re.nombre='Tiramisu al Limone';
-- ejercicio4
SELECT re.nombre, re.duracion, re.comensales 
FROM receta_ingrediente rein 
JOIN ingrediente ing ON rein.id_ingrediente=ing.id 
JOIN receta re ON rein.id_receta=re.id 
WHERE ing.nombre='Ajo';
-- ejercicio 5
SELECT re.nombre AS receta, AVG(valo.puntuacion) AS puntuacion_media 
FROM receta re 
JOIN valoracion_receta valo ON valo.id_receta=re.id
GROUP BY re.nombre 
ORDER BY puntuacion_media ASC 
LIMIT 1;
--ejercicio 6
SELECT usu.nombre, com.texto 
FROM comentario com 
JOIN receta re ON com.id_receta=re.id 
JOIN usuario_recetas usu ON com.id_usuario_recetas=usu.id 
WHERE re.nombre='Ramen de Miso';
--ejercicio 7
SELECT re.nombre, COUNT(DISTINCT paso.orden) AS pasos, re.duracion, COUNT(DISTINCT ing.nombre) AS ingredientes 
FROM receta re 
JOIN paso_receta paso ON re.id=paso.id_receta 
JOIN receta_etiqueta reti ON re.id=reti.id_receta 
JOIN etiqueta eti ON reti.id_etiqueta=eti.id 
JOIN receta_ingrediente reing ON reing.id_receta=re.id 
JOIN ingrediente ing ON reing.id_ingrediente=ing.id 
WHERE eti.nombre='Tradicional' 
GROUP BY re.nombre;
-- ejercicio 8
SELECT usu.nombre, com.texto AS comentario 
FROM usuario_recetas usu 
JOIN comentario com ON com.id_usuario_recetas=usu.id 
WHERE com.id_comentario_padre IS NOT NULL;
--ejercicio 9
SELECT DISTINCT re.nombre AS receta, al.nombre AS alergeno 
FROM receta re 
JOIN receta_ingrediente rein ON rein.id_receta=re.id 
JOIN ingrediente ing ON rein.id_ingrediente=ing.id 
JOIN ingrediente_alergeno ingal ON ingal.id_ingrediente=ing.id 
JOIN alergeno al ON ingal.id_alergeno=al.id 
ORDER BY receta ASC, alergeno ASC;
--ejercicio 10
SELECT re.nombre AS receta, GROUP_CONCAT(DISTINCT al.nombre) AS alergeno 
FROM receta re 
JOIN receta_ingrediente rein ON rein.id_receta=re.id 
JOIN ingrediente ing ON rein.id_ingrediente=ing.id 
JOIN ingrediente_alergeno ingal ON ingal.id_ingrediente=ing.id 
JOIN alergeno al ON ingal.id_alergeno=al.id 
GROUP BY receta 
ORDER BY receta ASC;
--ejericio 11
SELECT re.nombre AS receta 
FROM receta re 
WHERE re.id NOT IN (
    SELECT rein.id_receta 
    FROM receta_ingrediente rein 
    JOIN ingrediente ing ON rein.id_ingrediente = ing.id 
    WHERE ing.nombre = 'Ajo');
--ejercicio 12 No está bien salió bien de suerte
SELECT usu.nombre AS nombre_usuario, com.texto AS comentario 
FROM comentario com 
JOIN usuario_recetas usu ON com.id_usuario_recetas=usu.id 
JOIN receta re ON com.id_receta=re.id 
WHERE com.id_receta = (
    SELECT re.id 
    FROM valoracion_receta valo 
    JOIN receta re ON valo.id_receta=re.id 
    JOIN usuario_recetas usu ON valo.id_usuario_recetas=usu.id 
    GROUP BY re.nombre LIMIT 1);

--ejercicio 12 forma correcta
SELECT u.nombre, c.texto AS comentario_texto
FROM comentario c JOIN usuario_recetas u
ON c.id_receta=c.id_usuario_recetas
WHERE c.id_recetas=(
    SELECT id_receta
    FROM valoracion_receta
    GROUP BY id_receta
    ORDER BY AVG(puntuacion) DESC
    LIMIT 1);
--ejercicio 13
SELECT re.nombre AS nombre_receta, re.descripcion, re.duracion, GROUP_CONCAT(DISTINCT al.nombre) 
FROM receta re 
LEFT JOIN valoracion_receta valo ON valo.id_receta=re.id 
LEFT JOIN cultura cul ON re.id_cultura=cul.id 
LEFT JOIN receta_ingrediente rein ON rein.id_receta=re.id 
LEFT JOIN ingrediente ing ON rein.id_ingrediente=ing.id 
LEFT JOIN ingrediente_alergeno inal ON inal.id_ingrediente=ing.id 
LEFT JOIN alergeno al ON inal.id_alergeno=al.id 
WHERE cul.nombre='Italiana' 
GROUP BY nombre_receta, re.descripcion, re.duracion 
HAVING AVG(valo.puntuacion) BETWEEN 4 AND 5; 


--ejercicio cluedo
SELECT pis.descripcion FROM pista_cluedo pis 
LEFT JOIN personaje_cluedo per ON pis.personaje_id=per.id 
LEFT JOIN arma_cluedo arm ON arm.id=pis.arma_id
LEFT JOIN lugar_cluedo lug ON lug.id=pis.lugar_id
WHERE per.nombre='' 
AND arm.nombre=''
AND lug.nombre=''