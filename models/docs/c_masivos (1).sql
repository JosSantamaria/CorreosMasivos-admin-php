-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-04-2022 a las 20:18:44
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `c_masivos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_usuario`
--

DROP TABLE IF EXISTS `tm_usuario`;
CREATE TABLE IF NOT EXISTS `tm_usuario` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_nom` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usr_ape_p` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usr_ape_m` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usr_correo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `fech_crea` datetime NOT NULL,
  `rol_id` int(5) NOT NULL,
  `usr_pass` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fech_mod` datetime DEFAULT NULL,
  `fech_elim` datetime DEFAULT NULL,
  `est` int(11) NOT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_usuario`
--

INSERT INTO `tm_usuario` (`usr_id`, `usr_nom`, `usr_ape_p`, `usr_ape_m`, `usr_correo`, `fech_crea`, `rol_id`, `usr_pass`, `fech_mod`, `fech_elim`, `est`) VALUES
(1, 'Joset Angel', 'Cervantes', 'Santamaria', 'josetsantamaria@gmail.com', '2022-04-02 12:16:42', 2, '123456', NULL, NULL, 1),
(2, 'Galo', 'Cervantes', 'Santamaria', 'galo_cs@gmail.com', '2022-04-02 12:15:40', 1, NULL, NULL, NULL, 1),
(5, NULL, NULL, NULL, 'admin2@correo.com', '2022-04-07 17:16:23', 1, NULL, NULL, NULL, 1),
(6, NULL, NULL, NULL, 'test@test.com', '2022-04-07 17:21:59', 1, NULL, NULL, NULL, 1),
(7, NULL, NULL, NULL, 'joset@joset.com', '2022-04-07 17:22:36', 1, NULL, NULL, NULL, 1),
(8, NULL, NULL, NULL, 'admin3@correo.com', '2022-04-07 17:25:29', 1, NULL, NULL, NULL, 1),
(15, NULL, NULL, NULL, 'joset_cliente@jos.com', '2022-04-09 22:55:38', 1, NULL, NULL, NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
