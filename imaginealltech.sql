-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2023 a las 07:12:26
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `imaginealltech`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `CI` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencia`
--

CREATE TABLE `competencia` (
  `ID` int(4) NOT NULL,
  `Tipo` set('Individual','Equipos') DEFAULT NULL,
  `Categoría` set('12/13','14/15','16/17','Mayores') DEFAULT NULL,
  `CatSexo` set('Masculino','Femenino','Otro') DEFAULT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competidor`
--

CREATE TABLE `competidor` (
  `ID` int(5) NOT NULL,
  `CI` int(8) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido` varchar(20) DEFAULT NULL,
  `Fnac` date DEFAULT NULL,
  `Sexo` set('Masculino','Femenino','Otro') DEFAULT NULL,
  `Escuela` varchar(50) NOT NULL,
  `Dojo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `competidor`
--

INSERT INTO `competidor` (`ID`, `CI`, `Nombre`, `Apellido`, `Fnac`, `Sexo`, `Escuela`, `Dojo`) VALUES
(7, 54077285, 'Ezequiel', 'Quintana', '2004-05-01', 'Masculino', 'Escuelita', 'Escuelota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elige`
--

CREATE TABLE `elige` (
  `CI` int(8) DEFAULT NULL,
  `NumeroKata` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma`
--

CREATE TABLE `forma` (
  `ID` int(4) DEFAULT NULL,
  `CI` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `ID` int(4) DEFAULT NULL,
  `NumeroGrupo` int(3) DEFAULT NULL,
  `Color` set('Aka','Ao') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juez`
--

CREATE TABLE `juez` (
  `CI` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kata`
--

CREATE TABLE `kata` (
  `NumeroKata` int(3) NOT NULL,
  `NombreKata` enum('Anan','Anan Dai','Ananko','Aoyagi','Bassai','Bassai Dai','Bassai Sho','Chatanyara Kusanku','Chibana No Kushanku','Chinte','Chinto','Enpi','Fukyugata Ichi','Fukyugata Ni','Gankaku','Garyu','Gekisai (Geksai) 1','Gekisai (Geksai) 2','Gojushiho','Gojushiho Dai','Gojushiho Sho','Hakusho','Hangetsu','Haufa (Haffa)','Heian Shodan','Heian Nidan','Heian Sandan','Heian Yondan','Heian Godan','Heiku','Ishimine Bassai','Itosu Rohai Shodan','Itosu Rohai Nidan','Itosu Rohai Sandan','Jiin','Jion','Jitte','Juroku','Kanchin','Kanku Dai','Kanku Sho','Kanshu','Kishimono No Kushanku','Kousoukun','Kousoukun Dai','Kousoukun Sho','Kururunfa','Kusanku','Kyan No Chinto','Kyan No Wanshu','Matsukaze','Matsumura Bassai','Matsumura Rohai','Meikyo','Myojo','Naifanchin Shodan','Naifanchin Nidan','Naifanchin Sandan','Naihanchi','Nijushiho','Nipaipo','Niseishi','Ohan','Ohan Dai','Oyadomari No Passai','Pachu','Paiku','Papuren','Passai','Pinan Shodan','Pinan Nidan','Pinan Sandan','Pinan Yondan','Pinan Godan','Rohai','Saifa','Sanchin','Sansai','Sanseiru','Sanseru','Seichin','Seienchin (Seiyunchin)','Seipai','Seiryu','Seishan','Seisan (Sesan)','Shiho Kousoukun','Shinpa','Shinsei','Shisochin','Sochin','Suparinpei','Tekki Shodan','Tekki Nidan','Tekki Sandan','Tensho','Tomari Bassai','Unshu','Unsu','Useishi','Wankan','Wanshu') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `CI` int(8) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personatelefono`
--

CREATE TABLE `personatelefono` (
  `CI` int(8) DEFAULT NULL,
  `Telefono` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posee`
--

CREATE TABLE `posee` (
  `CI_juez` int(8) DEFAULT NULL,
  `ID` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiene`
--

CREATE TABLE `tiene` (
  `CI_adm` int(8) DEFAULT NULL,
  `ID` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(8) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Contraseña` varchar(50) DEFAULT NULL,
  `Rol` set('Juez','Administrador') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `Nombre`, `Contraseña`, `Rol`) VALUES
(1, 'Matias', 'matias', 'Administrador'),
(2, 'Fabri', 'fabri', 'Administrador'),
(3, 'Nico', 'nico', 'Administrador'),
(4, 'Lucas', 'lucas', 'Administrador'),
(5, 'Franco', 'franco', 'Administrador'),

(6, 'Juez1', 'juez1', 'Juez'),
(7, 'Juez2', 'juez2', 'Juez'),
(8, 'Juez3', 'juez3', 'Juez'),
(9, 'Juez4', 'juez4', 'Juez'),
(10, 'Juez5', 'juez5', 'Juez'),
(11, 'Juez6', 'juez6', 'Juez'),
(12, 'Juez7', 'juez7', 'Juez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD KEY `CI` (`CI`);

--
-- Indices de la tabla `competencia`
--
ALTER TABLE `competencia`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `competidor`
--
ALTER TABLE `competidor`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CI` (`CI`);

--
-- Indices de la tabla `elige`
--
ALTER TABLE `elige`
  ADD KEY `CI` (`CI`),
  ADD KEY `NumeroKata` (`NumeroKata`);

--
-- Indices de la tabla `forma`
--
ALTER TABLE `forma`
  ADD KEY `ID` (`ID`),
  ADD KEY `CI` (`CI`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD KEY `ID` (`ID`);

--
-- Indices de la tabla `juez`
--
ALTER TABLE `juez`
  ADD KEY `CI` (`CI`);

--
-- Indices de la tabla `kata`
--
ALTER TABLE `kata`
  ADD PRIMARY KEY (`NumeroKata`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`CI`);

--
-- Indices de la tabla `personatelefono`
--
ALTER TABLE `personatelefono`
  ADD KEY `CI` (`CI`);

--
-- Indices de la tabla `posee`
--
ALTER TABLE `posee`
  ADD KEY `CI_juez` (`CI_juez`);

--
-- Indices de la tabla `tiene`
--
ALTER TABLE `tiene`
  ADD KEY `CI_adm` (`CI_adm`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `competencia`
--
ALTER TABLE `competencia`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `competidor`
--
ALTER TABLE `competidor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`CI`) REFERENCES `persona` (`CI`);

--
-- Filtros para la tabla `elige`
--
ALTER TABLE `elige`
  ADD CONSTRAINT `elige_ibfk_1` FOREIGN KEY (`CI`) REFERENCES `competidor` (`CI`),
  ADD CONSTRAINT `elige_ibfk_2` FOREIGN KEY (`NumeroKata`) REFERENCES `kata` (`NumeroKata`);

--
-- Filtros para la tabla `forma`
--
ALTER TABLE `forma`
  ADD CONSTRAINT `forma_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `grupo` (`ID`),
  ADD CONSTRAINT `forma_ibfk_2` FOREIGN KEY (`CI`) REFERENCES `competidor` (`CI`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `competencia` (`ID`);

--
-- Filtros para la tabla `juez`
--
ALTER TABLE `juez`
  ADD CONSTRAINT `juez_ibfk_1` FOREIGN KEY (`CI`) REFERENCES `persona` (`CI`);

--
-- Filtros para la tabla `personatelefono`
--
ALTER TABLE `personatelefono`
  ADD CONSTRAINT `personatelefono_ibfk_1` FOREIGN KEY (`CI`) REFERENCES `persona` (`CI`);

--
-- Filtros para la tabla `posee`
--
ALTER TABLE `posee`
  ADD CONSTRAINT `posee_ibfk_1` FOREIGN KEY (`CI_juez`) REFERENCES `juez` (`CI`);

--
-- Filtros para la tabla `tiene`
--
ALTER TABLE `tiene`
  ADD CONSTRAINT `tiene_ibfk_1` FOREIGN KEY (`CI_adm`) REFERENCES `administrador` (`CI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
