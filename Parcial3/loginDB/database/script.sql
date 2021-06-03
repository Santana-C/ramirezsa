CREATE DATABASE IF NOT EXISTS ramirezsa;
USE ramirezsa;
CREATE TABLE usuario_login
(
    id_usuario SMALLINT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(20) NOT NULL,
    contrasena VARCHAR(255) NOT NULL
);
INSERT INTO usuario_login(usuario, contrasena)
VALUES ('Carlos',SHA1('Ramirez'))