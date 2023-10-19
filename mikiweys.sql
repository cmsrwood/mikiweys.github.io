-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2023 a las 07:01:30
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_inv`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_inv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
