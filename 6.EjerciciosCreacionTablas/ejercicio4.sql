CREATE DATABASE cupon;

CREATE TABLE cliente (
    dni VARCHAR (20) PRIMARY KEY,
    nombre VARCHAR (200),
    email VARCHAR (200),
    telefono INT
);
CREATE TABLE proveedor (
    dni VARCHAR (20) PRIMARY KEY,
    razon_social VARCHAR (300),
    telefono INT
);
CREATE TABLE producto (
    codigo VARCHAR (20) PRIMARY KEY,
    precio INT,
    ancho INT,
    alto INT,
    profundidad INT,
    peso INT
);
CREATE TABLE proveedor_producto (
    dni_proveedor VARCHAR (20),
    codigo_producto VARCHAR (20),
    PRIMARY KEY (dni_proveedor, codigo_producto),
    FOREIGN KEY (dni_proveedor) REFERENCES proveedor(dni),
    FOREIGN KEY (codigo_producto) REFERENCES producto(codigo)
);
CREATE TABLE cupon (
    numero VARCHAR(20) PRIMARY KEY,
    fecha_hora_vencimiento DATETIME,
    descuento INT,
    numero_cupon_asociado VARCHAR(20),
    FOREIGN KEY (numero_cupon_asociado) REFERENCES cupon(numero),
    codigo_producto VARCHAR(20),
    FOREIGN KEY (codigo_producto) REFERENCES producto(codigo)
);
CREATE TABLE cliente_cupon (
    dni_cliente VARCHAR(20),
    numero_cupon VARCHAR(20),
    FOREIGN KEY (dni_cliente) REFERENCES cliente(dni),
    FOREIGN KEY (numero_cupon) REFERENCES cupon(numero),
    PRIMARY KEY (dni_cliente, numero_cupon)
);