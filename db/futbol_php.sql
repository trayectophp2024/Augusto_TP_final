-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2024 a las 21:05:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `futbol_php`
--
CREATE DATABASE IF NOT EXISTS `futbol_php` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `futbol_php`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `club` varchar(100) NOT NULL,
  `pais` varchar(150) NOT NULL,
  `fundacion` date NOT NULL,
  `estadio` varchar(50) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `club`, `pais`, `fundacion`, `estadio`, `imagen`) VALUES
(1, 'Fc Barcelona', 'Espania', '1899-11-29', 'Camp nou', 'barce.png'),
(2, 'Real Madrid', 'Espania', '1902-03-06', 'Santiago Bernabeu', 'madrid.png'),
(3, 'River Plate', 'Argentina', '1901-05-25', 'El Monumental', 'river.png'),
(4, 'Boca Juniors', 'Argentina', '1905-04-03', 'La Bombonera', 'boca.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadio`
--

CREATE TABLE `estadio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `id_equipos` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estadio`
--

INSERT INTO `estadio` (`id`, `nombre`, `capacidad`, `pais`, `id_equipos`) VALUES
(1, 'El Monumental', 84567, 'Argentina', 3),
(2, 'Camp Nou', 99354, 'Espania', 1),
(3, 'Santiago Bernabeu', 78297, 'Espania', 2),
(4, 'La Bombonera', 57385, 'Argentina', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `situacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `situacion`) VALUES
(1, 'Activo'),
(2, 'Retirado'),
(3, 'Fallecido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `apodo` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fallecimiento` varchar(10) NOT NULL,
  `lugar_nacimiento` varchar(150) NOT NULL,
  `nacionalidad` varchar(150) NOT NULL,
  `altura` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `pie_habil` varchar(30) NOT NULL,
  `goles` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_posicion` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `nombres`, `apellidos`, `apodo`, `edad`, `fecha_nacimiento`, `fallecimiento`, `lugar_nacimiento`, `nacionalidad`, `altura`, `peso`, `pie_habil`, `goles`, `imagen`, `id_equipo`, `id_posicion`, `id_estado`) VALUES
(1, 'Lionel Andres', 'Messi Cuccitini', 'La pulga', 37, '1987-06-24', 'N/A', 'Rosario, Arg', 'Arg, Esp', 170, 72, 'zurdo', 848, 'messi.jpg', 1, 4, 1),
(2, 'Juan Roman', 'Riquelme', 'El Torero', 46, '1978-06-24', 'N/A', 'San Fernando, Arg', 'Argentina', 182, 75, 'derecho', 165, 'riquelme.jpg', 1, 6, 2),
(3, 'Diego Armando', 'Maradona Franco', 'Pelusa, D10s', 60, '1960-10-30', '2020', 'Lanus, Arg', 'Argentina', 165, 67, 'zurdo', 346, 'maradona.jpg', 1, 6, 3),
(6, 'Julian', 'Alvarez', 'Arania', 24, '2000-01-31', 'N/A', 'Calchin, Arg', 'Argentina', 170, 71, 'derecho', 107, 'julian.jpg', 3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posicion`
--

CREATE TABLE `posicion` (
  `id` int(11) NOT NULL,
  `lugar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `posicion`
--

INSERT INTO `posicion` (`id`, `lugar`) VALUES
(1, 'CD'),
(2, 'SD'),
(3, 'EXI'),
(4, 'EXD'),
(5, 'SD'),
(6, 'MO'),
(7, 'MC'),
(8, 'MDD'),
(9, 'MDI'),
(10, 'MCD'),
(11, 'LD'),
(12, 'LI'),
(13, 'DEF'),
(14, 'PT');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadio`
--
ALTER TABLE `estadio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_estadio` (`id_equipos`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_posicion` (`id_posicion`),
  ADD KEY `fk_equipos` (`id_equipo`),
  ADD KEY `fk_estado` (`id_estado`);

--
-- Indices de la tabla `posicion`
--
ALTER TABLE `posicion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estadio`
--
ALTER TABLE `estadio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `posicion`
--
ALTER TABLE `posicion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estadio`
--
ALTER TABLE `estadio`
  ADD CONSTRAINT `fk_estadio` FOREIGN KEY (`id_equipos`) REFERENCES `equipos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `fk_equipos` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_posicion` FOREIGN KEY (`id_posicion`) REFERENCES `posicion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
