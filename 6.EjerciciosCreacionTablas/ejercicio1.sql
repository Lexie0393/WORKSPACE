--Ejercicio 2
CREATE DATABASE facebook;
USE facebook;
CREATE TABLE usuario(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR (100),
    apellidos VARCHAR (200),
    correo VARCHAR (200),
    clave VARCHAR (200)
);

CREATE TABLE cuenta_facebook (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR (100),
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id),
    fecha_sesion DATE
);

CREATE TABLE amigos (
    id_cuenta INT,
    id_cuenta_amiga INT,
    fecha DATE,
    FOREIGN KEY (id_cuenta) REFERENCES cuenta_facebook(id),
    FOREIGN KEY (id_cuenta_amiga) REFERENCES cuenta_facebook(id),
    PRIMARY KEY (id_cuenta, id_cuenta_amiga)
);

-- Ejercicio 3
ALTER TABLE usuario ADD telefono INT;

--Ejercicio 4
ALTER TABLE usuario CHANGE nombre nombre_completo VARCHAR (200);
ALTER TABLE usuario DROP apellidos;

-- Ejercicio 5
ALTER TABLE usuario MODIFY telefono VARCHAR(100);
-- Ejercicio 6
DROP TABLE IF EXISTS amigos;
-- Ejercicio 7
CREATE TABLE amigos (
    id_cuenta INT,
    id_cuenta_amiga INT,
    fecha DATE,
    FOREIGN KEY (id_cuenta) REFERENCES cuenta_facebook(id),
    FOREIGN KEY (id_cuenta_amiga) REFERENCES cuenta_facebook(id),
    PRIMARY KEY (id_cuenta, id_cuenta_amiga)
);
-- Ejercicio 8
INSERT INTO usuario (nombre_completo, correo, clave, telefono) 
VALUES ('Gilberto Dominguez Castro','gildc@gmail.com','GDC87','611222333');

INSERT INTO usuario (nombre_completo, correo, clave, telefono) 
VALUES ('Josefina López Díaz','soylamasfina@gmail.com','JOSEFIN80','+34611222333');

ALTER TABLE cuenta_facebook CHANGE fecha_sesion fecha_creacion VARCHAR (50);
ALTER TABLE amigos MODIFY fecha VARCHAR(50);
INSERT INTO cuenta_facebook (nombre,id_usuario, fecha_creacion) 
VALUES 
('Gilberto La Perla','1','2 de febrero de 2020'),
('Fina López','2','20 de marzo de 2021');

INSERT INTO amigos (id_cuenta,id_cuenta_amiga, fecha) 
VALUES 
('1','2','8 de agosto de 2021');

INSERT INTO usuario (nombre_completo, correo, clave) VALUES ('Jovita Soto García','jovitasoto@gmail.com','VITASOTO');
INSERT INTO cuenta_facebook (nombre,id_usuario, fecha_creacion) 
VALUES 
('Jovita Soto','3','12 de febrero de 2022');
INSERT INTO amigos (id_cuenta,id_cuenta_amiga, fecha) 
VALUES 
('1','3','15 de septiembre de 2022');

INSERT INTO usuario (nombre_completo, correo, clave, telefono) VALUES ('Pablo Martínez Alonso','pablomtnz.dev@gmail.com','MTNZ95','511562367'), ('César Fernández Fuentes','cesarff@gmail.com','CGALA96','645225633'), ('Diego Miguez Alvarez','dieguito95@gmail.com','RAFTIT95','634566793');
INSERT INTO cuenta_facebook (nombre,id_usuario, fecha_creacion) VALUES ('Pablo Dev','4','17 de febrero de 2022'), ('César La IA','5','30 de julio de 2022'), ('Diego Forastero','6','2 de mayo de 2022');
INSERT INTO amigos (id_cuenta,id_cuenta_amiga, fecha) VALUES ('4','5','8 de febrero de 2023'), ('4','6','18 de marzo de 2023'), ('5','6','28 de abril de 2021');

--poner en todas las foreign key ON DELETE CASCADE y luego ejecutar esto
DELETE FROM usuario WHERE id=2;  