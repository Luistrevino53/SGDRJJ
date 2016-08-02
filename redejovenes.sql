-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2016 a las 06:26:13
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `redejovenes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `idarea` int(1) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idarea`, `nombre`, `descripcion`) VALUES
(1, 'Servicio', 'Actividades relacionadas con el servicio a la comunidad y/o algún grupo scout');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `idciudad` int(2) NOT NULL,
  `ciudad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`idciudad`, `ciudad`) VALUES
(1, 'Ameca'),
(2, 'Cd. Guzmán'),
(3, 'Guadalajara'),
(4, 'Ocotlán'),
(5, 'Zapopan'),
(6, 'Tapalpa'),
(7, 'Etzatlán');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clan`
--

CREATE TABLE `clan` (
  `id` int(3) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `grupo` int(3) NOT NULL,
  `promotor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clan`
--

INSERT INTO `clan` (`id`, `nombre`, `grupo`, `promotor`) VALUES
(1, 'Hallstatt', 21, 'MIC1234567');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clanero`
--

CREATE TABLE `clanero` (
  `cum` varchar(10) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellidop` varchar(15) NOT NULL,
  `apellidom` varchar(15) NOT NULL,
  `clan` int(3) NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `pass` varchar(20) NOT NULL,
  `imagen` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clanero`
--

INSERT INTO `clanero` (`cum`, `nombre`, `apellidop`, `apellidom`, `clan`, `telefono`, `correo`, `fechanacimiento`, `pass`, `imagen`) VALUES
('CUM1234567', 'algo', 'algo', 'algo', 1, 1234567890, 'algoa@algo.com', '2015-12-09', 'algo', ''),
('CUM2345678', 'MAGGIE', 'MONICO', 'SANTA CRUZ', 1, 2147483647, 'ALGO', '2016-02-15', 'PASS', ''),
('CUM2345679', 'Olga Margarita', 'Monico', 'dfsdfs', 1, 0, '0', '2016-02-16', 'holo', ''),
('JAL1234567', 'Jesus', 'Estrella', 'Mora', 1, 0, '0', '2014-03-24', 'estrella', ''),
('MIC1234567', 'Luis Manuel', 'Torres', 'Treviño', 1, 39211261, 'algo@algo.com', '1994-09-15', 'loco53', ''),
('MIC2345678', 'Luis', 'Cardenas', 'algo', 1, 0, '0', '2016-02-16', 'algo', ''),
('PEP1234567', 'Pepe', 'Chavez', 'Rosales', 1, 0, '0', '0000-00-00', 'pep', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ec`
--

CREATE TABLE `ec` (
  `evento` int(5) NOT NULL,
  `clanero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `errores`
--

CREATE TABLE `errores` (
  `id` int(4) NOT NULL,
  `ubicacion` varchar(120) NOT NULL,
  `cont` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `idevento` int(5) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` varchar(120) DEFAULT NULL,
  `encargado` varchar(10) DEFAULT NULL,
  `area` int(1) DEFAULT NULL,
  `fecharegistro` date DEFAULT NULL,
  `fechaevento` date DEFAULT NULL,
  `proyecto` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`idevento`, `nombre`, `descripcion`, `encargado`, `area`, `fecharegistro`, `fechaevento`, `proyecto`) VALUES
(1, 'prueb', 'Evento de Prueba', 'MIC1234567', 1, '2016-01-20', '2016-01-21', NULL),
(5, 'Prueba 2', 'Jalatas 2016', 'CUM1234567', 1, '2016-01-20', '2016-02-21', 2),
(6, 'huaro', 'Torneo de Huaro 2016', 'CUM1234567', 1, '2016-01-20', '2016-10-18', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `idgrupo` int(3) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `ciudad` int(2) NOT NULL,
  `numero` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`idgrupo`, `nombre`, `ciudad`, `numero`) VALUES
(1, 'Ameca', 1, 1),
(2, 'Cd. Guzmán', 2, 1),
(3, 'Tlaloc', 3, 1),
(4, 'Taznahui', 4, 1),
(5, 'Santiago de Ocotlan', 4, 2),
(6, 'Cd. Guzmán', 2, 3),
(7, 'Paxtu', 3, 4),
(8, 'Zapopan', 5, 5),
(9, 'Citllalco', 3, 7),
(10, 'Zapopan', 5, 8),
(11, 'Guadalajara', 3, 9),
(12, 'Palomar', 3, 11),
(13, 'Sol Naciente', 3, 13),
(14, 'Iztepete', 5, 13),
(15, 'Guadalajara', 3, 14),
(16, 'Zapopan', 5, 15),
(17, 'Clan de lobos', 3, 16),
(18, 'José Clemente Orozco', 3, 18),
(19, 'Agua Azul', 3, 20),
(20, 'Canek', 3, 21),
(21, 'Cristobal de Oñate', 3, 24),
(22, 'Tenamaxtle', 3, 26),
(23, 'Guadalajara', 3, 28),
(24, 'Tellocayani Montenegro', 3, 31),
(25, 'Guadalajara', 3, 32),
(26, 'Ave Fenix', 3, 35),
(27, 'Alea Jacta Est', 3, 36),
(28, 'Quadliparmiut', 3, 38),
(29, 'Nyrei', 3, 37);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc`
--

CREATE TABLE `pc` (
  `proyecto` int(4) NOT NULL,
  `clanero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pc`
--

INSERT INTO `pc` (`proyecto`, `clanero`) VALUES
(1, 'CUM1234567'),
(1, 'MIC1234567'),
(3, 'MIC1234567'),
(4, 'MIC1234567'),
(6, 'PEP1234567');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `idproyecto` int(4) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `objetivo` varchar(120) NOT NULL,
  `lider` varchar(10) NOT NULL,
  `area` int(1) NOT NULL,
  `fecharegistro` date NOT NULL,
  `fechaproyecto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`idproyecto`, `nombre`, `objetivo`, `lider`, `area`, `fecharegistro`, `fechaproyecto`) VALUES
(1, 'Servicio', 'Dar Servicio', 'MIC1234567', 1, '2015-12-21', '2015-12-24'),
(2, 'JASBD', 'SDFA', 'CUM1234567', 1, '2016-01-19', '2016-01-19'),
(3, 'paosd', 'sdasd', 'CUM1234567', 1, '2016-01-19', '2016-01-19'),
(4, 'Jalatas 2016', 'Realizar la flor de liz mas grande de Jalisco con latas de aluminio', 'CUM1234567', 1, '2016-01-20', '2016-01-20'),
(5, 'ghckhgc', 'ghckxgcljhvc.hkcvljhgc', 'MIC1234567', 1, '2016-02-15', '2016-02-15'),
(6, 'Prueba movil', 'Proyecto subido desde el celular', 'MIC1234567', 1, '2016-04-18', '2016-04-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`idciudad`);

--
-- Indices de la tabla `clan`
--
ALTER TABLE `clan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promotor` (`promotor`),
  ADD KEY `grupo` (`grupo`);

--
-- Indices de la tabla `clanero`
--
ALTER TABLE `clanero`
  ADD PRIMARY KEY (`cum`),
  ADD KEY `clan` (`clan`);

--
-- Indices de la tabla `ec`
--
ALTER TABLE `ec`
  ADD PRIMARY KEY (`evento`,`clanero`),
  ADD KEY `clanero` (`clanero`);

--
-- Indices de la tabla `errores`
--
ALTER TABLE `errores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idevento`),
  ADD KEY `encargado` (`encargado`),
  ADD KEY `area` (`area`),
  ADD KEY `proyecto` (`proyecto`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`idgrupo`),
  ADD KEY `ciudad` (`ciudad`);

--
-- Indices de la tabla `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`proyecto`,`clanero`),
  ADD KEY `clanero` (`clanero`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`idproyecto`),
  ADD KEY `lider` (`lider`),
  ADD KEY `area` (`area`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `idciudad` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `clan`
--
ALTER TABLE `clan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `idevento` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `idgrupo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `idproyecto` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clan`
--
ALTER TABLE `clan`
  ADD CONSTRAINT `clan_ibfk_1` FOREIGN KEY (`grupo`) REFERENCES `grupo` (`idgrupo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clanero`
--
ALTER TABLE `clanero`
  ADD CONSTRAINT `clanero_ibfk_1` FOREIGN KEY (`clan`) REFERENCES `clan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ec`
--
ALTER TABLE `ec`
  ADD CONSTRAINT `ec_ibfk_1` FOREIGN KEY (`evento`) REFERENCES `evento` (`idevento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ec_ibfk_2` FOREIGN KEY (`clanero`) REFERENCES `clanero` (`cum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`encargado`) REFERENCES `clanero` (`cum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evento_ibfk_2` FOREIGN KEY (`area`) REFERENCES `area` (`idarea`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evento_ibfk_3` FOREIGN KEY (`proyecto`) REFERENCES `proyecto` (`idproyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`ciudad`) REFERENCES `ciudad` (`idciudad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pc`
--
ALTER TABLE `pc`
  ADD CONSTRAINT `pc_ibfk_1` FOREIGN KEY (`proyecto`) REFERENCES `proyecto` (`idproyecto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pc_ibfk_2` FOREIGN KEY (`clanero`) REFERENCES `clanero` (`cum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`lider`) REFERENCES `clanero` (`cum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proyecto_ibfk_2` FOREIGN KEY (`area`) REFERENCES `area` (`idarea`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
