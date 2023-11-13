-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 11:45:16
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE imaginealltech;
USE imaginealltech;
ALTER DATABASE imaginealltech CHARACTER SET utf8 COLLATE utf8_general_ci; 

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
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID` int(8) NOT NULL,
  `IDT` int(11) NOT NULL,
  `nombreCat` varchar(30) NOT NULL,
  `cantCompetidores` int(1) NOT NULL,
  `grupos` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID`, `IDT`, `nombreCat`, `cantCompetidores`, `grupos`) VALUES
(6, 11, '12-13', 2, 0),
(7, 11, '14-15', 4, 0),
(8, 11, '16-17', 3, 0),
(9, 11, '+18', 5, 0),
(10, 12, '12-13', 0, 0),
(11, 12, '14-15', 0, 0),
(12, 12, '16-17', 0, 0),
(13, 12, '+18', 0, 0);

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
  `Dojo` varchar(50) NOT NULL,
  `IDT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `competidor`
--

INSERT INTO `competidor` (`ID`, `CI`, `Nombre`, `Apellido`, `Fnac`, `Sexo`, `Escuela`, `Dojo`, `IDT`) VALUES
(43, 12345678, 'Alter', 'Olsztyn', '2004-05-01', 'Masculino', 'LaFederacion', 'LaFederacion', NULL),
(44, 12343214, 'Holaaa', 'ComoEstas', '2004-05-01', 'Masculino', 'hskdhadahd', 'hskdhadahd', NULL),
(45, 53234343, 'LOas', 'Man', '1999-02-03', 'Femenino', 'ASf', 'wdqd', NULL),
(48, 87654321, 'asdsadasd', 'asdasdasd', '2004-05-10', 'Masculino', 'asdasda', 'asdasda', NULL),
(49, 54077285, 'matias', 'moreira', '2004-05-01', 'Masculino', 'asdadasdl', 'dlajdlkajsd', NULL),
(50, 32323232, 'Maxxx', 'Stellll', '2004-05-01', 'Masculino', 'asdsadsa', 'asdasdas', NULL),
(51, 42225305, 'Fabiana', 'Quintana', '1982-04-04', 'Masculino', 'Federacion', 'Fedrativa', NULL),
(52, 60022080, 'Sofia', 'Panasco', '2012-12-28', 'Masculino', 'Fed', 'Minitruco', NULL),
(53, 54077295, 'Ezequiel', 'Quintana', '2004-10-31', 'Masculino', 'Fed', 'Federation', NULL),
(54, 9876543, 'Joaquin', 'Leal', '2006-11-07', 'Masculino', 'LaPlaza', 'PlazaDoce', NULL),
(55, 33333331, 'aasdadad', 'asdadsad', '2004-11-10', 'Masculino', 'asdsadasd', 'adasdasd', NULL),
(56, 33333332, 'asdsadasd', 'asdadad', '2004-05-01', 'Masculino', 'adasdad', 'asdadad', NULL),
(57, 33333333, 'asdadsad', 'asdsadasd', '2004-05-01', 'Masculino', 'aldsjaldj', 'jdsaldjad', NULL),
(58, 33333334, 'asdadsad', 'sadasdasdad', '2004-05-01', 'Masculino', 'adlksajdaj', 'djalsdad', NULL),
(59, 11111111, 'adasdad', 'adasdad', '2004-05-01', 'Masculino', 'adadasd', 'adssad', NULL),
(60, 11111112, 'asdkajdkj', 'dajskdjadjk', '2004-05-01', 'Masculino', 'adasdad', 'asdasdasd', NULL),
(61, 11111113, 'asdsada', 'asdada', '2004-05-01', 'Masculino', 'akjdskajdk', 'djaskdjsakd', NULL),
(62, 11111114, 'askdjakdj', 'jasdkajdkaj', '2004-05-01', 'Masculino', 'ajidjaijd', 'iajsdiajd', NULL),
(63, 11111115, 'okasdko', 'askdoakdsoadk', '2004-05-01', 'Masculino', 'jaksdjkajd', 'kajsdkdj', NULL),
(64, 66666666, 'asdada', 'adada', '2004-05-01', 'Masculino', 'asdad', 'dasdasd', NULL),
(65, 77777777, 'asdasdh', 'dashdjahdk', '2004-05-01', 'Masculino', 'jadkjad', 'jkdad', NULL);

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
  `IDT` int(11) NOT NULL,
  `IDCat` int(8) NOT NULL,
  `IDG` int(11) NOT NULL,
  `CI` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `forma`
--

INSERT INTO `forma` (`IDT`, `IDCat`, `IDG`, `CI`) VALUES
(11, 9, 22, 11111115),
(11, 9, 23, 11111111),
(11, 9, 22, 11111112),
(11, 9, 23, 11111113),
(11, 9, 22, 11111114),
(11, 6, 11, 12345678),
(11, 6, 19, 12343214),
(11, 7, 16, 53234343),
(11, 7, 24, 87654321),
(11, 7, 16, 54077285),
(11, 7, 24, 32323232),
(11, 8, 20, 42225305),
(11, 8, 21, 60022080),
(11, 8, 20, 54077295);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `IDCat` int(8) NOT NULL,
  `IDG` int(11) NOT NULL,
  `IDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`IDCat`, `IDG`, `IDT`) VALUES
(6, 11, 11),
(7, 16, 11),
(6, 19, 11),
(8, 20, 11),
(8, 21, 11),
(9, 22, 11),
(9, 23, 11),
(7, 24, 11);

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
-- Estructura de tabla para la tabla `llaves`
--

CREATE TABLE `llaves` (
  `ID` int(11) NOT NULL,
  `IDCat` int(8) NOT NULL,
  `IDT` int(11) NOT NULL,
  `IDG` int(11) NOT NULL,
  `CI` int(8) NOT NULL,
  `Color` set('AKA','AO') NOT NULL
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
-- Estructura de tabla para la tabla `peticioncompetidor`
--

CREATE TABLE `peticioncompetidor` (
  `IDComp` int(5) NOT NULL,
  `CIEnc` int(8) NOT NULL,
  `nameEnc` varchar(30) NOT NULL,
  `apellEnc` varchar(30) NOT NULL,
  `Fed` varchar(50) NOT NULL,
  `CI` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `apell` varchar(30) NOT NULL,
  `sexo` set('Masculino','Femenino','Otro','') NOT NULL,
  `fnac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peticioncompetidor`
--

INSERT INTO `peticioncompetidor` (`IDComp`, `CIEnc`, `nameEnc`, `apellEnc`, `Fed`, `CI`, `name`, `apell`, `sexo`, `fnac`) VALUES
(136, 12345678, 'asdasdad', 'asdasdasd', 'asdasdasd', 12345671, 'asdasd', 'asdad', 'Masculino', '2004-05-01');

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
-- Estructura de tabla para la tabla `torneo`
--

CREATE TABLE `torneo` (
  `IDT` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `cantJueces` int(1) NOT NULL,
  `genero` set('Masculino','Femenino','Otro','') NOT NULL,
  `fecha` date NOT NULL,
  `estado` set('En curso','Pendiente') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `torneo`
--

INSERT INTO `torneo` (`IDT`, `nombre`, `cantJueces`, `genero`, `fecha`, `estado`) VALUES
(11, 'Testeando', 7, 'Masculino', '2004-05-01', 'Pendiente'),
(12, 'Maquina de casino', 1, 'Masculino', '2001-01-01', 'En curso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(8) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Contrasena` varchar(50) DEFAULT NULL,
  `Rol` set('Juez','Administrador') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `Nombre`, `Contrasena`, `Rol`) VALUES
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
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `torneo_fk` (`IDT`);

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
  ADD UNIQUE KEY `CI` (`CI`),
  ADD KEY `fk_competidor_torneo` (`IDT`);

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
  ADD KEY `fk_forma_grup` (`IDG`),
  ADD KEY `fk_forma_torneo` (`IDT`),
  ADD KEY `fk_forma_competidor` (`CI`),
  ADD KEY `fk_categoria_forma` (`IDCat`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`IDG`),
  ADD KEY `fk_grupo_torne` (`IDT`),
  ADD KEY `fk_grupo_categoria` (`IDCat`);

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
-- Indices de la tabla `llaves`
--
ALTER TABLE `llaves`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_llaves_torneo` (`IDT`),
  ADD KEY `fk_llaves_grupo` (`IDG`),
  ADD KEY `fk_llaves_competidor` (`CI`),
  ADD KEY `fk_llaves_categoria` (`IDCat`);

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
-- Indices de la tabla `peticioncompetidor`
--
ALTER TABLE `peticioncompetidor`
  ADD PRIMARY KEY (`IDComp`),
  ADD UNIQUE KEY `CI` (`CI`);

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
-- Indices de la tabla `torneo`
--
ALTER TABLE `torneo`
  ADD PRIMARY KEY (`IDT`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `competencia`
--
ALTER TABLE `competencia`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `competidor`
--
ALTER TABLE `competidor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `IDG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `llaves`
--
ALTER TABLE `llaves`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT de la tabla `peticioncompetidor`
--
ALTER TABLE `peticioncompetidor`
  MODIFY `IDComp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT de la tabla `torneo`
--
ALTER TABLE `torneo`
  MODIFY `IDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`CI`) REFERENCES `persona` (`CI`);

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `torneo_fk` FOREIGN KEY (`IDT`) REFERENCES `torneo` (`IDT`);

--
-- Filtros para la tabla `competidor`
--
ALTER TABLE `competidor`
  ADD CONSTRAINT `fk_competidor_torneo` FOREIGN KEY (`IDT`) REFERENCES `torneo` (`IDT`);

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
  ADD CONSTRAINT `fk_categoria_forma` FOREIGN KEY (`IDCat`) REFERENCES `categoria` (`ID`),
  ADD CONSTRAINT `fk_forma_competidor` FOREIGN KEY (`CI`) REFERENCES `competidor` (`CI`),
  ADD CONSTRAINT `fk_forma_grup` FOREIGN KEY (`IDG`) REFERENCES `grupo` (`IDG`),
  ADD CONSTRAINT `fk_forma_torneo` FOREIGN KEY (`IDT`) REFERENCES `torneo` (`IDT`),
  ADD CONSTRAINT `fk_grupo_cat` FOREIGN KEY (`IDCat`) REFERENCES `categoria` (`ID`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `fk_grupo_categoria` FOREIGN KEY (`IDCat`) REFERENCES `categoria` (`ID`),
  ADD CONSTRAINT `fk_grupo_torne` FOREIGN KEY (`IDT`) REFERENCES `torneo` (`IDT`),
  ADD CONSTRAINT `fk_grupo_torneo` FOREIGN KEY (`IDT`) REFERENCES `torneo` (`IDT`);

--
-- Filtros para la tabla `juez`
--
ALTER TABLE `juez`
  ADD CONSTRAINT `juez_ibfk_1` FOREIGN KEY (`CI`) REFERENCES `persona` (`CI`);

--
-- Filtros para la tabla `llaves`
--
ALTER TABLE `llaves`
  ADD CONSTRAINT `fk_llaves_categoria` FOREIGN KEY (`IDCat`) REFERENCES `categoria` (`ID`),
  ADD CONSTRAINT `fk_llaves_competidor` FOREIGN KEY (`CI`) REFERENCES `competidor` (`CI`),
  ADD CONSTRAINT `fk_llaves_grupo` FOREIGN KEY (`IDG`) REFERENCES `grupo` (`IDG`),
  ADD CONSTRAINT `fk_llaves_torneo` FOREIGN KEY (`IDT`) REFERENCES `torneo` (`IDT`);

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
