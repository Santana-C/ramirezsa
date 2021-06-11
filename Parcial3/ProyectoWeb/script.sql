USE ramirezsa;
DROP TABLE usuario;
CREATE TABLE usuario (
  id_usuario int(10) NOT NULL,
  nombre varchar(255) NOT NULL,
  apellido_paterno varchar(255) NOT NULL,
  apellido_materno varchar(255) NOT NULL,
  edad tinyint NOT NULL,
  email varchar(255) NOT NULL,
  contrasena VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE usuario
  ADD PRIMARY KEY (id_usuario);
ALTER TABLE usuario
	MODIFY id_usuario int(10) NOT NULL AUTO_INCREMENT;
INSERT INTO usuario(nombre, apellido_paterno,apellido_materno,edad,email,contrasena)
VALUES
    ('Carlos Antonio','Ramirez','Santana',21,'L18100220@nlaredo.tecnm.mx',sha1('santana')),
    ('Jose Arcadio','Rofriguez','Matta',21,'L18100227@nlaredo.tecnm.mx',sha1('matta')),
    ('Valeria Margarita','Espinoza','Sanchez',21,'L18100168@nlaredo.tecnm.mx',sha1('sanchez')),
    ('Fausto Fernando','Yepez','Felix',20,'L18100247@nlaredo.tecnm.mx',sha1('yepez')),
    ('Ivan','Ramos','Medina',22,'L18100219@nlaredo.tecnm.mx',sha1('shupapi'))
--Se utilizó otra base de datos, porque me estaba causando conflictos el uso de acentos en los apellidos.