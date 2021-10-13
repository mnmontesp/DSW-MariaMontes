-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2021 a las 08:21:32
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `registrarProducto` (IN `_nombre` VARCHAR(20), IN `_referencia` VARCHAR(30), IN `_precio` INT, IN `_peso` INT, IN `_categoria` VARCHAR(30), IN `_stock` INT, IN `_fechacre` DATE, IN `_fechaven` DATETIME)  BEGIN

SET @id = (SELECT MAX(id_producto)+1 FROM productos);

INSERT INTO productos VALUES(@id,_nombre,_referencia,_precio,_peso,_categoria,_stock,_fechacre,_fechaven);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `NombreProducto` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Referencia` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Precio` int(10) NOT NULL,
  `Peso` int(10) NOT NULL,
  `Categoria` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Stock` int(10) NOT NULL,
  `FechaCreacion` date NOT NULL,
  `FechaVenta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `NombreProducto`, `Referencia`, `Precio`, `Peso`, `Categoria`, `Stock`, `FechaCreacion`, `FechaVenta`) VALUES
(21, 'prueba', 'EA', 15000, 12, 'PRUEBA', 3, '2021-12-10', '2021-12-10 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
