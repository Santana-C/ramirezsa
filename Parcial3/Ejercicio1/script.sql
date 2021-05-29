CREATE DATABASE ramirezsa;
USE ramirezsa;
CREATE TABLE Usuario
(
    id_usuario SMALLINT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellido_paterno VARCHAR(35),
    apellido_materno VARCHAR(35),
    email VARCHAR(40) NOT NULL,
    imagen VARCHAR(255),
    contrasena VARCHAR(255) NOT NULL,
    fecha_ingreso DATE NOT NULL
);
INSERT INTO Usuario(nombre, apellido_paterno,apellido_materno,email,imagen,contrasena,fecha_ingreso)
VALUES
    ('Carlos Antonio','Ramirez','Santana','L18100220@nlaredo.tecnm.mx',null,SHA1('123'),CURDATE()),
    ('José Arcadio','Rodríguez','Matta','L18100227@nlaredo.tecnm.mx',null,SHA1('456'),CURDATE()),
    ('Valeria Margarita','Espinoza','Sánchez','l18100168@nlaredo.tecnm.mx',null,SHA1('789'),CURDATE()),
    ('Fausto Fernando','Yepez','Felix','l18100247@nlaredo.tecnm.mx',null,SHA1('012'),CURDATE()),
    ('Ivan','Ramos','Medina','l18100219@nlaredo.tecnm.mx',null,SHA1('345'),CURDATE())