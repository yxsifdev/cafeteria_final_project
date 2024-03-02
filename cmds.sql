CREATE TABLE IF NOT EXISTS `usuarios` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nombre` VARCHAR(50) NOT NULL,
    `apellido` VARCHAR(50) NOT NULL,
    `dni` CHAR(8) NOT NULL,
    `fechaNa` DATE NOT NULL,
    `telefono` CHAR(9) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `perfil` varchar(255) NOT NULL
) ENGINE=InnoDB;

create table if not exists `menu` (
	`idM` int auto_increment primary key,
	`nombre` varchar(100) not null,
	`dsc` varchar(250) not null,
	`precio` decimal(10,2) not null,
	`categoria` varchar(100),
	`tipo` varchar(100),
	`imagen` varchar(200)
) engine=InnoDB;

#-------------------
-- bebidas
INSERT INTO `menu` (`nombre`, `dsc`, `precio`, `categoria`, `tipo`, `imagen`) VALUES
('Café Americano', 'Delicioso café americano recién hecho.', 2.50, 'Café', 'bebidas', 'https://imgur.com/g6tsdZZ.png'),
('Café Latte', 'Café suave con leche caliente.', 3.00, 'Café', 'bebidas', 'https://imgur.com/g6tsdZZ.png'),
('Sandwich de Pollo', 'Sabroso sándwich de pollo con lechuga y tomate.', 5.00, 'Sandwiches', 'bebidas', 'https://imgur.com/g6tsdZZ.png'),
('Té Verde', 'Té verde caliente y refrescante.', 2.00, 'Té', 'bebidas', 'https://imgur.com/g6tsdZZ.png');
-- comidas
INSERT INTO `menu` (`nombre`, `dsc`, `precio`, `categoria`, `tipo`, `imagen`) VALUES
('Sandwich de Pollo', 'Sabroso sándwich de pollo con lechuga y tomate.', 5.00, 'Sandwiches', 'comida', 'https://imgur.com/awBuuLk.png'),
('Ensalada de Pollo', 'Ensalada fresca con trozos de pollo a la parrilla.', 6.50, 'Ensaladas', 'comida', 'https://imgur.com/awBuuLk.png'),
('Wrap de Vegetales', 'Wrap de vegetales frescos y sabrosos.', 4.50, 'Wraps', 'comida', 'https://imgur.com/awBuuLk.png'),
('Bowl de Avena', 'Bowl de avena con frutas frescas y miel.', 4.00, 'Desayuno', 'comida', 'https://imgur.com/awBuuLk.png');
#-------------------

select * from usuarios;
select * from menu;

UPDATE usuarios
SET perfil = 'https://imgur.com/9TLPvBy.png'
WHERE id = 5;