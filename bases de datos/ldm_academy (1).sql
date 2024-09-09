-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2024 a las 20:42:23
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
-- Base de datos: `ldm_academy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(10) NOT NULL,
  `id_campaña` int(10) DEFAULT NULL,
  `id_usuario` int(10) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `horas` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `id_campaña`, `id_usuario`, `fecha`, `horas`) VALUES
(101, 41, 2, '2010-02-24', 5),
(102, 22, 3, '2010-02-24', 3),
(103, 41, 5, '2023-05-18', 45),
(104, 33, 4, '2023-01-19', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campañas`
--

CREATE TABLE `campañas` (
  `id_campaña` int(10) NOT NULL,
  `nom_campaña` varchar(20) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `cupos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `campañas`
--

INSERT INTO `campañas` (`id_campaña`, `nom_campaña`, `descripcion`, `fecha`, `cupos`) VALUES
(1, 'acompañamiento salon', 'debera realizar su acompañamie', '2012-02-24', 1),
(2, 'acompañamiento salon', 'debera realizar su acompañamie', '2012-02-24', 1),
(11, 'acompañamiento salon', 'debera realizar su acompañamie', '2012-03-13', 9),
(22, 'acompañamiento salon', 'debera realizar su acompañamie', '2012-02-24', 1),
(33, 'orientacion', 'debera realizar su acompañamie', '2011-02-24', 5),
(41, 'coordinacion', 'acompanamientoen coordinacion', '2012-06-11', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificacion`
--

CREATE TABLE `certificacion` (
  `id_certificacion` int(10) NOT NULL,
  `id_asistencia` int(10) DEFAULT NULL,
  `observaciones` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `certificacion`
--

INSERT INTO `certificacion` (`id_certificacion`, `id_asistencia`, `observaciones`) VALUES
(21, 101, 'aprobado'),
(22, 102, 'no aprobado'),
(23, 103, 'aprobado'),
(24, 104, 'no aprobado ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(10) NOT NULL,
  `curso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `curso`) VALUES
(0, 0),
(1, 901),
(2, 902),
(3, 1001),
(4, 1002),
(5, 1101),
(6, 1102);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulacion`
--

CREATE TABLE `postulacion` (
  `id_postulacion` int(10) NOT NULL,
  `id_usuario` int(10) DEFAULT NULL,
  `id_campaña` int(10) DEFAULT NULL,
  `aceptacion` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `postulacion`
--

INSERT INTO `postulacion` (`id_postulacion`, `id_usuario`, `id_campaña`, `aceptacion`) VALUES
(3, 5, 41, 0),
(4, 4, 33, 1),
(31, 2, 11, 0),
(32, 3, 22, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(10) NOT NULL,
  `nombre_rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
(1, 'adminiostrador'),
(2, 'estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(10) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `contraseña` varchar(20) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `id_rol` int(10) DEFAULT NULL,
  `id_curso` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `correo`, `contraseña`, `telefono`, `id_rol`, `id_curso`) VALUES
(1, 'luna', 'ramirez', 'lu@gmail.com', '123', '2147483647', 1, 0),
(2, 'maicol', 'ramirez', 'ma@gmail.com', '456', '2147483647', 2, 1),
(3, 'loren', 'triana', 'lo@gmail.com', '789', '2147483647', 2, 2),
(4, 'juan', 'castano', 'juan@gmail.com', '12345', '34658', 2, 1),
(5, 'kimberly', 'perez', 'kim.02@gmail.com', '987', '32567', 2, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `asistencia_campaña` (`id_campaña`),
  ADD KEY `asistencia_usuario` (`id_usuario`);

--
-- Indices de la tabla `campañas`
--
ALTER TABLE `campañas`
  ADD PRIMARY KEY (`id_campaña`);

--
-- Indices de la tabla `certificacion`
--
ALTER TABLE `certificacion`
  ADD PRIMARY KEY (`id_certificacion`),
  ADD KEY `certificado_asistencia` (`id_asistencia`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `postulacion`
--
ALTER TABLE `postulacion`
  ADD PRIMARY KEY (`id_postulacion`),
  ADD KEY `campaña_postulacion` (`id_campaña`) USING BTREE,
  ADD KEY `usuarios-postulacion` (`id_usuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `rol_usuario` (`id_rol`) USING BTREE,
  ADD KEY `curso_usuario` (`id_curso`) USING BTREE;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_campaña` FOREIGN KEY (`id_campaña`) REFERENCES `campañas` (`id_campaña`),
  ADD CONSTRAINT `asistencia_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `certificacion`
--
ALTER TABLE `certificacion`
  ADD CONSTRAINT `certificado_asistencia` FOREIGN KEY (`id_asistencia`) REFERENCES `asistencia` (`id_asistencia`);

--
-- Filtros para la tabla `postulacion`
--
ALTER TABLE `postulacion`
  ADD CONSTRAINT `postulacion` FOREIGN KEY (`id_campaña`) REFERENCES `campañas` (`id_campaña`),
  ADD CONSTRAINT `usuarios-postulacion` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`),
  ADD CONSTRAINT `usuarioss` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
