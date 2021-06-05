USE ramirezsa;
CREATE TABLE `usuario_sample` (
  `id_usuario` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido_paterno` varchar(255) NOT NULL,
  `apellido_materno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `usuario_sample`
  ADD PRIMARY KEY (`id_usuario`);
ALTER TABLE `usuario_sample`
	MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT;
INSERT INTO usuario_sample(nombre, apellido_paterno,apellido_materno,email)
VALUES
    ('Carlos Antonio','Ramirez','Santana','L18100220@nlaredo.tecnm.mx'),
    ('Jose Arcadio','Rofriguez','Matta','L18100227@nlaredo.tecnm.mx'),
    ('Valeria Margarita','Espinoza','Sanchez','L18100168@nlaredo.tecnm.mx'),
    ('Fausto Fernando','Yepez','Felix','L18100247@nlaredo.tecnm.mx'),
    ('Ivan','Ramos','Medina','L18100219@nlaredo.tecnm.mx')
--Se utilizó otra base de datos, porque me estaba causando conflictos el uso de acentos en los apellidos.