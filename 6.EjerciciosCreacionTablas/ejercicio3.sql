--Ejercicio 11--

CREATE DATABASE blog;

CREATE TABLE usuario (
    correo VARCHAR (200) PRIMARY KEY,
    nombre VARCHAR (100) NOT NULL,
    apellidos VARCHAR (200),
    clave VARCHAR (100)
);

CREATE TABLE entrada (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR (200) NOT NULL,
    contenido MEDIUMTEXT NOT NULL,
    fecha DATE NOT NULL,
    correo_usuario VARCHAR (200) NOT NULL,
    FOREIGN KEY (correo_usuario) REFERENCES usuario(correo)
);

CREATE TABLE comentario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fecha DATE NOT NULL,
    texto TEXT NOT NULL,
    correo_usuario VARCHAR (200) NOT NULL,
    FOREIGN KEY (correo_usuario) REFERENCES usuario(correo),
    id_entrada INT NOT NULL,
    FOREIGN KEY (id_entrada) REFERENCES entrada(id)
);

CREATE TABLE categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR (100) NOT NULL,
    id_categoria INT,
    FOREIGN KEY (id_categoria) REFERENCES categoria(id)
);

--para modificar un nombre de la entidad, primero escribe lo incorrecto y luego lo correcto--
ALTER TABLE categoria CHANGE id_categoria id_categoria_padre INT;

CREATE TABLE entrada_categoria (
    id_entrada INT,
    FOREIGN KEY (id_entrada) REFERENCES entrada(id),
    id_categoria INT,
    FOREIGN KEY (id_categoria) REFERENCES categoria(id)
);

ALTER TABLE entrada_categoria ADD PRIMARY KEY (id_entrada, id_categoria);

--Ejercicio 12--
INSERT INTO usuario(correo, nombre, apellidos, clave) VALUES ('evasan@gmail.com', 'Eva', 'Sanagustín', '1234EVA'), ('anasainz@gmail.com', 'Ana', 'Sainz', 'ANITA96'), ('davidsoto@gmail.com', 'David', 'Soto', 'COMO33'),('tarrero@gmail.com', 'Arantxa', 'Tarrero', '9876@R');

--Ejercicio 13--

INSERT INTO categoria (id, nombre, id_categoria_padre) VALUES (1, 'Tecnología', null), (2, 'Web', 1), (3, 'IA', 1);

--Ejercicio 14--
INSERT INTO entrada (titulo, contenido, fecha, correo_usuario) VALUES ('¿Qué es FAQ?', 'Esto se conoce como página FAQ o Preguntas Frecuentes', '2024-01-20', 'anasainz@gmail.com');

INSERT INTO entrada_categoria (id_entrada, id_categoria) VALUES (1, 2);

--Ejercicio 15--
INSERT INTO entrada (titulo, contenido, fecha, correo_usuario) VALUES ('¿Qué es?', 'ChatGPT debe su nombre a que es un chatbot impulsado por un Transformador Preentrenado Generativo (GPT por sus siglas en inglés)', '2024-03-12', 'tarrero@gmail.com');

INSERT INTO entrada_categoria (id_entrada, id_categoria) VALUES (2, 2), (2, 3);

--Ejercicio 16--
INSERT INTO comentario (fecha, texto, correo_usuario, id_entrada) VALUES ('2024-03-15', 'Esto es demasiada comodidad. Era mejor antes cuando se buscaba la información en las enciclopedias, por lo menos te lo tenías que currar', 'davidsoto@gmail.com', 2);

--Ejercicio 17--
INSERT INTO comentario (fecha, texto, correo_usuario, id_entrada) VALUES ('2024-03-16', 'Es emocionante ver cómo la IA puede mejorar nuestra eficiencia en el trabajo', 'evasan@gmail.com', 2);
