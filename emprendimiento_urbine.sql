-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2022 a las 20:01:06
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `emprendimiento_urbine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_administrador` int(11) NOT NULL,
  `nombre` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contraseña` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `super_administrador` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `nombre`, `apellido`, `correo`, `contraseña`, `fecha_reg`, `super_administrador`) VALUES
(1, 'Valentin', 'Urbine', 'valentin.urbine967@gmail.com', '43056621', '2022-11-11 00:26:34', 0),
(2, 'valentin', 'urbine', 'valentin.urbine@hotmail.com', '2001', '2022-11-13 18:33:46', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `zona` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido`, `direccion`, `zona`) VALUES
(1, 'Antonella', 'Yocu', 'Teheran 754', 'Sur'),
(2, 'Ana', 'Soberano', 'Martinez 1216', 'Norte'),
(3, 'Ivan', 'Arburua', 'Einstein x-x-x-x', 'Norte'),
(4, 'Matyas', 'Garcia', '', 'Oeste'),
(5, 'Alejandra', 'Navarre', 'Chacabuco xxxx', 'Norte'),
(6, 'Carolina', 'Schefer', '', ''),
(7, 'Carina', 'Pedredos', '', 'Norte'),
(8, 'Ariana', 'Sanchez', '', 'Norte'),
(9, 'Magui', 'Lara', 'Juncal 255', 'Oeste'),
(10, 'Lujan', 'Arballo', 'Marconi 30 bis', 'Norte'),
(11, 'Celeste', 'Sanchez', 'Entre Rios 465', ''),
(12, 'Joaquin', 'Urbine', 'Gutemberg 7 Bis', 'Norte'),
(13, 'Jose Maria', 'Urbine', 'Gutemberg', 'Norte'),
(14, 'Mariana Lujan', 'Ramos', 'Gutemberg 7 bis', 'Norte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargues`
--

CREATE TABLE `encargues` (
  `id_encargue` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `id_cliente` int(11) NOT NULL,
  `conicas` int(11) NOT NULL,
  `cuadrada_grandes` int(11) NOT NULL,
  `rectangulares` int(11) NOT NULL,
  `redondas` int(11) NOT NULL,
  `cuadrada_chicas` int(11) NOT NULL,
  `entregado` tinyint(1) NOT NULL,
  `medio_entregado` tinyint(1) NOT NULL,
  `rechazado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `encargues`
--

INSERT INTO `encargues` (`id_encargue`, `fecha`, `id_cliente`, `conicas`, `cuadrada_grandes`, `rectangulares`, `redondas`, `cuadrada_chicas`, `entregado`, `medio_entregado`, `rechazado`) VALUES
(1, '2022-11-24 02:55:23', 4, 0, 0, 0, 0, 0, 1, 0, 0),
(2, '2022-11-24 02:59:40', 8, 3, 0, 0, 0, 0, 0, 0, 1),
(3, '2022-11-24 03:26:09', 3, 2, 0, 0, 0, 0, 0, 0, 1),
(4, '2022-11-24 12:07:52', 9, 3, 2, 0, 0, 0, 1, 0, 0),
(5, '2022-11-24 12:08:03', 5, 1, 2, 0, 0, 0, 0, 0, 1),
(6, '2022-11-24 12:10:45', 3, 4, 0, 0, 0, 0, 1, 0, 0),
(7, '2022-11-24 12:13:46', 3, 4, 0, 0, 0, 0, 1, 0, 0),
(8, '2022-11-24 12:14:03', 3, 3, 0, 0, 0, 0, 1, 0, 0),
(9, '2022-11-24 12:14:37', 7, 5, 0, 0, 0, 0, 0, 0, 1),
(10, '2022-11-24 12:21:48', 4, 0, 4, 0, 0, 0, 0, 0, 1),
(11, '2022-11-24 12:27:21', 14, 2, 0, 0, 1, 2, 0, 1, 0),
(12, '2022-11-24 12:47:18', 4, 4, 0, 3, 0, 0, 0, 0, 1),
(13, '2022-11-24 12:48:29', 9, 2, 0, 0, 4, 0, 1, 0, 0),
(14, '2022-11-26 15:25:59', 13, 3, 2, 0, 0, 1, 0, 1, 0),
(15, '2022-11-26 23:58:04', 12, 3, 0, 0, 0, 0, 1, 0, 0),
(17, '2022-11-27 00:01:03', 7, 3, 0, 0, 0, 0, 0, 0, 1),
(18, '2022-11-27 00:01:11', 8, 0, 0, 5, 0, 0, 1, 0, 0),
(19, '2022-11-27 00:09:25', 3, 2, 0, 0, 0, 0, 1, 0, 0),
(20, '2022-11-28 23:38:27', 13, 5, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `macetas`
--

CREATE TABLE `macetas` (
  `id_maceta` int(11) NOT NULL,
  `maceta` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `base` int(11) NOT NULL,
  `altura` int(11) NOT NULL,
  `anchura` int(11) NOT NULL,
  `diametro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `macetas`
--

INSERT INTO `macetas` (`id_maceta`, `maceta`, `precio`, `base`, `altura`, `anchura`, `diametro`) VALUES
(1, 'Conica ', 1400, 30, 40, 30, 0),
(2, 'Cuadrada grande', 1200, 30, 30, 30, 0),
(3, 'Rectangular', 1000, 40, 20, 20, 0),
(4, 'Redonda', 900, 0, 30, 0, 22),
(5, 'Cuadrada chica', 600, 15, 15, 15, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_maceta` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `observacion` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `id_maceta`, `id_cliente`, `cantidad`, `fecha`, `observacion`) VALUES
(1, 2, 12, 0, '2022-11-21', ''),
(2, 1, 14, 0, '2022-11-24', ''),
(3, 4, 14, 0, '2022-11-24', 'Es mi vieaj'),
(4, 1, 4, 0, '2022-11-24', '');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vistas_encargue`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vistas_encargue` (
`id_encargue` int(11)
,`fecha_encargue` datetime
,`cliente` varchar(401)
,`macetas_encargadas` bigint(15)
,`entregado` tinyint(1)
,`medio_entregado` tinyint(1)
,`rechazado` tinyint(1)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vistas_ventas`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vistas_ventas` (
`id_venta` int(11)
,`fecha` date
,`cliente` varchar(401)
,`maceta` varchar(80)
,`cantidad` int(11)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vistas_encargue`
--
DROP TABLE IF EXISTS `vistas_encargue`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vistas_encargue`  AS SELECT `encargues`.`id_encargue` AS `id_encargue`, `encargues`.`fecha` AS `fecha_encargue`, concat(`clientes`.`nombre`,' ',`clientes`.`apellido`) AS `cliente`, `encargues`.`conicas`+ `encargues`.`cuadrada_grandes` + `encargues`.`cuadrada_chicas` + `encargues`.`redondas` + `encargues`.`rectangulares` AS `macetas_encargadas`, `encargues`.`entregado` AS `entregado`, `encargues`.`medio_entregado` AS `medio_entregado`, `encargues`.`rechazado` AS `rechazado` FROM (`encargues` join `clientes` on(`encargues`.`id_cliente` = `clientes`.`id_cliente`))  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vistas_ventas`
--
DROP TABLE IF EXISTS `vistas_ventas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vistas_ventas`  AS SELECT `ventas`.`id_venta` AS `id_venta`, `ventas`.`fecha` AS `fecha`, concat(`clientes`.`nombre`,' ',`clientes`.`apellido`) AS `cliente`, `macetas`.`maceta` AS `maceta`, `ventas`.`cantidad` AS `cantidad` FROM ((`ventas` join `clientes` on(`ventas`.`id_cliente` = `clientes`.`id_cliente`)) join `macetas` on(`ventas`.`id_maceta` = `macetas`.`id_maceta`))  ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `encargues`
--
ALTER TABLE `encargues`
  ADD PRIMARY KEY (`id_encargue`),
  ADD KEY `fk_id_cliente` (`id_cliente`);

--
-- Indices de la tabla `macetas`
--
ALTER TABLE `macetas`
  ADD PRIMARY KEY (`id_maceta`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_maceta` (`id_maceta`),
  ADD KEY `id_cliente` (`id_cliente`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `encargues`
--
ALTER TABLE `encargues`
  MODIFY `id_encargue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `macetas`
--
ALTER TABLE `macetas`
  MODIFY `id_maceta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `encargues`
--
ALTER TABLE `encargues`
  ADD CONSTRAINT `fk_id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `id_maceta` FOREIGN KEY (`id_maceta`) REFERENCES `macetas` (`id_maceta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
