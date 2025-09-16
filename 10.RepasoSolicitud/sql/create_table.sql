CREATE DATABASE repaso_solicitud_empleo;
USE repaso_solicitud_empleo;
CREATE TABLE solicitud(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR (200),
    tipo_contrato VARCHAR (200),
    area_interes VARCHAR (200)
);