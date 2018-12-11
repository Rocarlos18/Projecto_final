-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-12-2018 a las 02:28:30
-- Versión del servidor: 10.2.12-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id8155045_contacto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `idasunto` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `asunto` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`idasunto`, `nombre`, `correo`, `telefono`, `asunto`) VALUES
(1, 'Eric', 'travelboost1@gmail.com', '6564182716', 'Solo es una prueba'),
(3, 'Eric', 'travelboost1@hotmail.com', '1234567', 'Esta es solo una prueba'),
(4, 'Roberto', 'correo@prueba.com', '1234567', 'Esta es solo una prueba'),
(5, 'Roberto', 'correo@prueba.com', '1234567', 'Esta es solo una prueba'),
(6, 'Roberto', 'robertomartinez@designthecnology.com', '1234567', 'Cableado'),
(8, 'Alejandra', 'solo@prueba', '123456789', 'Solo para probar'),
(9, 'Eric Marquez', 'travelboost1@hotmail.com', '6564182716', 'Cableado Estructurado'),
(10, 'Eric Marquez', 'travelboost1@hotmail.com', '6564182716', 'Cableado Estructurado'),
(11, 'Eric Marquez', 'travelboost1@hotmail.com', '6564182716', 'Esta es solo una prueba'),
(12, 'Eric Marquez', 'travelboost1@hotmail.com', '6564182716', 'Cableado'),
(15, 'Roberto', 'Roberto@prueba.com', '6561234567', 'Cotizacion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`idasunto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `idasunto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
