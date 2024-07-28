 INSERT INTO `usuario` (`id`, `nombre`, `correo`, `contrasena`) VALUES
(1, 'Juan Pérez', 'juan.perez@example.com', 'contraseña123'),
(2, 'María Gómez', 'maria.gomez@example.com', 'segura456'),
(3, 'Carlos López', 'carlos.lopez@example.com', 'clave789'),
(4, 'Ana Torres', 'ana.torres@example.com', 'password1234'),
(5, 'Luis Rodríguez', 'luis.rodriguez@example.com', 'pass5678');

 INSERT INTO caracteristica (id, nombre, descripcion) VALUES
(1, 'Piscina', 'Piscina de con sistema de calefacción.'),
(2, 'Gimnasio', 'Gimnasio equipado con máquinas de última generación.'),
(3, 'Jardín', 'Amplio jardín con zonas verdes y área de juegos.'),
(4, 'Garaje', 'Garaje con capacidad para dos vehículos.'),
(5, 'Terraza', 'Terraza con vista panorámica a la ciudad.');

 INSERT INTO tipo (id, nombre, descripcion) VALUES
(1, 'Casa', 'Propiedad residencial individual.'),
(2, 'Departamento', 'Unidad residencial en un edificio.'),
(3, 'Casa adosada', 'Propiedad residencial unida a otras.'),
(4, 'Mansión', 'Residencia lujosa de gran tamaño.'),
(5, 'Apartamento', 'Unidad residencial más pequeña y económica.');

 INSERT INTO ubicacion (id, ciudad, departamento, pais, latitud, longitud) VALUES
(1, 'Ciudad A', 'Departamento X', 'País Z', -34.603722, -58.381592),
(2, 'Ciudad B', 'Departamento Y', 'País W', 40.712776, -74.005974),
(3, 'Ciudad C', 'Departamento Z', 'País V', 51.507351, -0.127758),
(4, 'Ciudad D', 'Departamento W', 'País U', 35.689487, 139.691711),
(5, 'Ciudad E', 'Departamento V', 'País T', 48.856613, 2.352222);

 INSERT INTO propiedad (id, id_tipo, id_ubicacion, direccion, precio, superficie_total, superficie_construida, num_habitaciones, num_baños, año_construccion, estado, descripcion, id_usuario) VALUES
(1, 1, 1, 'Calle Falsa 123', 100000, 200, 180, 3, 2, '2005-06-15', 'Bueno', 'Casa con amplio jardín y piscina.', 1),
(2, 2, 2, 'Avenida Siempre Viva 742', 150000, 250, 220, 4, 3, '2010-08-20', 'Excelente', 'Departamento con vista al mar.', 2),
(3, 3, 3, 'Boulevard de los Sueños 456', 90000, 150, 130, 2, 1, '2000-03-10', 'Regular', 'Casa céntrica cerca de todos los servicios.', 3),
(4, 4, 4, 'Plaza Principal 789', 200000, 300, 270, 5, 4, '2015-12-25', 'Nuevo', 'Mansión de lujo con todas las comodidades.', 4),
(5, 5, 5, 'Calle Peatonal 321', 80000, 120, 100, 1, 1, '1995-05-05', 'Necesita reformas', 'Apartamento pequeño pero bien ubicado.', 5);

 INSERT INTO consulta (id, id_propiedad, nombre, correo, telefono, mensaje) VALUES
(1, 1, 'Laura Martinez', 'laura.martinez@example.com', '555-1234', 'Estoy interesada en la propiedad. ¿Podemos agendar una visita?'),
(2, 2, 'José Fernández', 'jose.fernandez@example.com', '555-5678', '¿La propiedad aún está disponible? Me gustaría obtener más información.'),
(3, 3, 'Sofía Ruiz', 'sofia.ruiz@example.com', '555-9876', '¿Podrían enviarme más fotos de la propiedad?'),
(4, 4, 'Miguel Castillo', 'miguel.castillo@example.com', '555-5432', 'Estoy interesado en el precio final. ¿Es negociable?'),
(5, 5, 'Ana López', 'ana.lopez@example.com', '555-6789', 'Me gustaría saber más sobre las características de la propiedad.');

 INSERT INTO propiedad_caracteristica (id, id_caracteristica, valor, id_propiedad) VALUES
(1, 1, 'Si', 1),
(2, 2, 'Si', 2),
(3, 3, 'Si', 3),
(4, 4, 'Si', 4),
(5, 5, 'No', 5);


