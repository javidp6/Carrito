-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2020 a las 18:06:09
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedidos`
--

CREATE TABLE `detallepedidos` (
  `ID` int(11) NOT NULL,
  `IDVenta` int(11) NOT NULL,
  `IDProducto` int(11) NOT NULL,
  `PrecioSeleccionado` decimal(22,2) NOT NULL,
  `Cantidad` int(200) NOT NULL,
  `Descargado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallepedidos`
--

INSERT INTO `detallepedidos` (`ID`, `IDVenta`, `IDProducto`, `PrecioSeleccionado`, `Cantidad`, `Descargado`) VALUES
(18, 24, 1, '175.00', 175, 0),
(19, 36, 1, '175.00', 175, 0),
(20, 37, 1, '175.00', 175, 0),
(21, 38, 1, '175.00', 175, 0),
(22, 39, 1, '175.00', 175, 0),
(23, 40, 1, '175.00', 175, 0),
(24, 41, 1, '175.00', 175, 0),
(25, 42, 1, '175.00', 175, 0),
(26, 43, 1, '175.00', 175, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(22,2) NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Nombre`, `Precio`, `Imagen`) VALUES
(1, 'XFX AMD Radeon RX 580 GTS XXX Edition 8GB GDDR5', '175.00', 'https://thumb.pccomponentes.com/w-530-530/articles/24/244783/dsfdsf.jpg'),
(2, 'MSI GeForce RTX 2070 VENTUS GP 8GB GDDR6', '460.00', 'https://thumb.pccomponentes.com/w-530-530/articles/24/249222/76606251-2040308011.jpg'),
(3, 'Sapphire Pulse Radeon RX 550 4GB GDDR5', '86.00', 'https://thumb.pccomponentes.com/w-530-530/articles/24/244783/dsfdsf.jpg'),
(4, 'Gigabyte B450M DS3H', '72.00', 'https://thumb.pccomponentes.com/w-530-530/articles/16/168112/a1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contraseña`, `rol_id`) VALUES
(1, 'javiA', 'javiA', 1),
(2, 'javiU', 'javiU', 2),
(3, 'javi', 'javi', 1),
(4, 'diaz', 'diaz', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ID` int(11) NOT NULL,
  `ClaveTransaccion` varchar(255) NOT NULL,
  `PaypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `total`, `status`) VALUES
(24, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 01:45:16', 'fjdp6@hotmail.com', '175', 'pendiente'),
(25, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 04:55:04', 'fjdp6@hotmail.com', '0', 'pendiente'),
(26, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 04:55:43', 'fjdp6@hotmail.com', '0', 'pendiente'),
(27, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 04:57:17', 'fjdp6@hotmail.com', '0', 'pendiente'),
(28, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 05:02:07', 'fjdp6@hotmail.com', '0', 'pendiente'),
(29, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 05:02:40', 'fjdp6@hotmail.com', '0', 'pendiente'),
(30, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 05:05:30', 'fjdp6@hotmail.com', '0', 'pendiente'),
(31, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 05:08:07', 'fjdp6@hotmail.com', '0', 'pendiente'),
(32, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 05:09:25', 'fjdp6@hotmail.com', '0', 'pendiente'),
(33, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 05:09:44', 'fjdp6@hotmail.com', '0', 'pendiente'),
(34, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 05:10:19', 'fjdp6@hotmail.com', '0', 'pendiente'),
(35, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 05:18:26', 'fjdp6@hotmail.com', '0', 'pendiente'),
(36, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 06:01:57', 'fjdp6@hotmail.com', '247', 'pendiente'),
(37, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 06:03:35', 'fjdp6@hotmail.com', '247', 'pendiente'),
(38, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 06:03:59', 'fjdp6@hotmail.com', '247', 'pendiente'),
(39, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 06:05:38', 'fjdp6@hotmail.com', '247', 'pendiente'),
(40, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 06:08:09', 'fjdp6@hotmail.com', '247', 'pendiente'),
(41, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-13 06:54:37', 'fjdp6@hotmail.com', '247', 'pendiente'),
(42, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-14 10:38:46', 'fjdp6@hotmail.com', '247', 'pendiente'),
(43, '9um77e03bq2qvcg85ijs9139g9', '', '2020-05-14 11:54:25', 'fjdp6@hotmail.com', '247', 'pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detallepedidos`
--
ALTER TABLE `detallepedidos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDVenta` (`IDVenta`),
  ADD KEY `IDProducto` (`IDProducto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`rol_id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detallepedidos`
--
ALTER TABLE `detallepedidos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallepedidos`
--
ALTER TABLE `detallepedidos`
  ADD CONSTRAINT `detallepedidos_ibfk_1` FOREIGN KEY (`IDVenta`) REFERENCES `ventas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detallepedidos_ibfk_2` FOREIGN KEY (`IDProducto`) REFERENCES `productos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
