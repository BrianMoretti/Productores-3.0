-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-07-2021 a las 23:42:52
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emprendimiento`
--

DROP TABLE IF EXISTS `emprendimiento`;
CREATE TABLE IF NOT EXISTS `emprendimiento` (
  `idemprendimiento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_emp` varchar(45) DEFAULT NULL,
  `productos` varchar(100) DEFAULT NULL,
  `rubro` varchar(20) NOT NULL,
  `redsocial` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `celular` varchar(30) NOT NULL,
  `socio_1` varchar(40) NOT NULL,
  `socio_2` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL,
  PRIMARY KEY (`idemprendimiento`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `emprendimiento`
--

INSERT INTO `emprendimiento` (`idemprendimiento`, `nombre_emp`, `productos`, `rubro`, `redsocial`, `direccion`, `celular`, `socio_1`, `socio_2`, `mail`) VALUES
(100, 'Dulces Lorena', 'Alfajores, tartas , pastelitos , pasta frolas ', 'Artesanias', 'Facebook', 'Quines ', '2664164331', 'Tello mercedes lorena ', '', 'ludjanna@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
