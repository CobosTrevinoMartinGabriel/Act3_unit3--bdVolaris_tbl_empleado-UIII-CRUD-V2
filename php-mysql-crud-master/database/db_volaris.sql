-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 21:24:43
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_volaris`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empleado`
--

CREATE TABLE `tbl_empleado` (
  `idEmpleado` int(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `aPaterno` varchar(50) NOT NULL,
  `aMaterno` varchar(50) NOT NULL,
  `Sueldo` int(50) NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  `Aeropuerto` varchar(100) NOT NULL,
  `Cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_empleado`
--

INSERT INTO `tbl_empleado` (`idEmpleado`, `Nombre`, `aPaterno`, `aMaterno`, `Sueldo`, `Telefono`, `Aeropuerto`, `Cargo`) VALUES
(1, 'Mario Alvarado', 'CastaÃ±eda', 'Fernandez', 16000, '6565327279', 'Aeropuerto Internacional de la Ciudad de MÃ©xico.', 'Tecnico administrativo'),
(3, 'Martin Estoka', 'Romero', 'Lozano', 40000, '6566382598', 'Aeropuerto de Monterrey General Mariano Escobedo.', 'Piloto'),
(4, 'Miranda Rudia', 'TreviÃ±o', 'Sifuentes', 10000, '6566324592', 'Aeropuerto Internacional de la Ciudad de MÃ©xico.', 'Despachador de vuelos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_empleado`
--
ALTER TABLE `tbl_empleado`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_empleado`
--
ALTER TABLE `tbl_empleado`
  MODIFY `idEmpleado` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
