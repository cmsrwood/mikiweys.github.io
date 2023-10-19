-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2023 a las 04:04:45
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mikiweys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_cat` int(11) NOT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_cat`, `categoria`, `imagen`) VALUES
(1, 'Bebidas', ''),
(2, 'Pan', 'pan.jpg\r\n'),
(3, 'Otros', ''),
(4, 'Desayunos', ''),
(5, 'Almuerzos', ''),
(6, 'Bebidas calientes', ''),
(7, 'Bebidas frias', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_detalle_venta` int(11) NOT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `productos` varchar(255) DEFAULT NULL,
  `pago` int(11) DEFAULT NULL,
  `total` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id_doc` int(11) NOT NULL,
  `documento` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id_doc`, `documento`) VALUES
(1, 'Cedula de ciudadania'),
(2, 'Cedula de Extrenjeria'),
(3, 'Tarjeta de Identidad'),
(4, 'Pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_emp` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `apel` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fecing` date NOT NULL,
  `cont` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `sal` varchar(50) NOT NULL,
  `hor` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_emp`, `nom`, `apel`, `email`, `fecing`, `cont`, `tel`, `sal`, `hor`) VALUES
(4, 'Jesucristo', 'De Nazareth', 'dilanfantas@gmail.com', '0011-11-11', 'Jerusalen', '3138975212', '1200000', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_inv` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `descrip` varchar(50) NOT NULL,
  `preuni` varchar(50) NOT NULL,
  `cat` varchar(60) NOT NULL,
  `cantidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_inv`, `imagen`, `producto`, `descrip`, `preuni`, `cat`, `cantidad`) VALUES
(1, 'bebida.jpg', 'Bebida', 'jugo natural', '4000', 'Pan', '4'),
(2, 'pan.jpg', 'Pan', 'pan bueno', '1200', 'Pan', '24'),
(3, 'jugo.jpg', 'Jugo', 'Jugo casero', '15000', 'Bebidas', '2'),
(4, 'baguete.jpg', 'Baguette', 'Pan largo', '1200', 'Pan', '15'),
(5, 'cafe.jpg', 'Café', 'Café con mucho café', '1200', 'Bebidas calientes', '1'),
(6, 'desayuno2.jpg', 'Desayuno', 'Café con pan', '3000', 'Desayunos', '3'),
(7, 'desayuno.jpg', 'Huevos con pan', 'Huevos exquisitos con una deliciosa bebida', '6000', 'Pan', '2'),
(8, 'sandwich.jpg', 'Sandwich', 'Sanfwich', '3000', 'Bebidas', '4'),
(14, 'desayuno.jpg', 'otro desayuno', 'pan pan pan', '2550', 'Pan', '32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` varchar(1) NOT NULL,
  `rol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
('1', 'Administrador'),
('2', 'Empleado'),
('3', 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(50) NOT NULL,
  `apel_user` varchar(50) NOT NULL,
  `pass_user` varchar(255) NOT NULL,
  `tel_user` int(13) NOT NULL,
  `id_doc` int(50) NOT NULL,
  `num_documento_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `dir_user` varchar(50) NOT NULL,
  `rol_user` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `name_user`, `apel_user`, `pass_user`, `tel_user`, `id_doc`, `num_documento_user`, `email_user`, `dir_user`, `rol_user`) VALUES
(3, 'Dilan Santiago', 'Lopez Romero', '$2y$10$iGwhG7tnjU5DbG3dwk70c.zuZjaVBF2CdspZnfUqhjiFfe4ZlDFCu', 2147483647, 1, '1028663948', 'dilanfantas@gmail.com', 'calle43b sur', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `id_emp` int(11) DEFAULT NULL,
  `id_detalle_venta` int(11) DEFAULT NULL,
  `total` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id_detalle_venta`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_doc`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_emp`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_inv`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `documento` (`id_doc`),
  ADD KEY `rol` (`rol_user`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id_detalle_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_inv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `documento` FOREIGN KEY (`id_doc`) REFERENCES `documento` (`id_doc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rol` FOREIGN KEY (`rol_user`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
