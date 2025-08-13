CREATE DATABASE cines_galicia;

--ejercicio 9--

CREATE TABLE cine (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR (100) NOT NULL,
    direccion VARCHAR (200) NOT NULL,
    telefono VARCHAR (30) 
);

CREATE TABLE pelicula (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR (200) NOT NULL,
    director VARCHAR (100) NOT NULL,
    anio INT NOT NULL,
    genero VARCHAR (100) NOT NULL,
    duracion INT NOT NULL
);

CREATE TABLE sala_cine(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR (100) NOT NULL,
    capacidad INT NOT NULL,
    tipo VARCHAR (100) NOT NULL,
    id_cine INT NOT NULL,
    FOREIGN KEY (id_cine) REFERENCES cine(id)
);

CREATE TABLE proyeccion(
    id INT AUTO_INCREMENT PRIMARY KEY,
    fecha_hora DATETIME NOT NULL,
    id_sala_cine INT NOT NULL,
    FOREIGN KEY (id_sala_cine) REFERENCES sala_cine(id),
    id_pelicula INT NOT NULL,
    FOREIGN KEY (id_pelicula) REFERENCES pelicula(id)
);

--Ejercicio 10--

INSERT INTO cine (nombre, direccion, telefono) VALUES ('Cinema Yelmo Premium Vialia Vigo','CC. Vialia Estación de Vigo Local A-26 Praza Estación 1 36201','886203467'), ('Gran Via Cines','Rua miradoiro 2 Freixeiro 36204 vigo','986114609');

INSERT INTO pelicula (titulo, director, anio, genero, duracion) VALUES ('Los tipos malos 2', 'Pierre Perifel', 2025, 'animación', 110), ('Los 4 fantásticos: primeros pasos', 'Matt Shakman', 2025, 'acción', 130), ('Jurasic World: El renacer', 'Gareth Edwards', 2025, 'acción', 134);

INSERT INTO sala_cine (nombre, capacidad, tipo, id_cine) VALUES ('Sala Aurora', 25, 'sala de reuniones', 1), ('Sala Épsilon', 100, 'auditorio', 1), ('Sala Prisma', 15, 'sala de capacitación', 1), ('Sala Horizonte', 50, 'sala de conferencias', 2), ('Sala Nexo', 10, 'sala de videoconferencia', 2), ('Sala Vértice', 200, 'sala de eventos', 2);

INSERT INTO proyeccion (fecha_hora, id_sala_cine, id_pelicula) VALUES ('2025-04-13 22:00:00', 1, 1), ('2025-07-23 23:00:00', 2, 1), ('2025-10-03 21:00:00', 3, 1), ('2025-02-17 21:00:00', 4, 2), ('2025-11-10 22:00:00', 5, 2), ('2025-04-01 23:00:00', 6, 2);