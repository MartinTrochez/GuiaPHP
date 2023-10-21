-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-10-2023 a las 22:07:39
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `menu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios`
--

DROP TABLE IF EXISTS `ejercicios`;
CREATE TABLE IF NOT EXISTS `ejercicios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_item` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `archivo_item` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `ejercicios`
--

INSERT INTO `ejercicios` (`id`, `nombre_item`, `archivo_item`) VALUES
(1, 'Ejercicio 4', '4'),
(2, 'Ejercicio 5', '5'),
(3, 'Ejercicio 6', '6'),
(4, 'Ejercicio 7', '7'),
(13, 'Ejercicio 8', '8');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
