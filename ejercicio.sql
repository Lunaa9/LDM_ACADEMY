-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2024 a las 19:02:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejercicio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Cod_Cliente` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_empleado`
--

CREATE TABLE `cliente_empleado` (
  `id` int(11) NOT NULL,
  `Cod_Empleado` int(11) DEFAULT NULL,
  `Cod_Cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `Cod_Detalle` int(11) NOT NULL,
  `Cod_Factura` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `valor` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dtl_factura_producto`
--

CREATE TABLE `dtl_factura_producto` (
  `id` int(11) NOT NULL,
  `Cod_Detalle` int(11) DEFAULT NULL,
  `Cod_Referencia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Cod_Empleado` int(11) NOT NULL,
  `Salario` decimal(10,0) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_grupo`
--

CREATE TABLE `empleado_grupo` (
  `id` int(11) NOT NULL,
  `Cod_Empleado` int(11) DEFAULT NULL,
  `Cod_Grupo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `Cod_Factura` int(11) NOT NULL,
  `Tipo` varchar(50) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Valor` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_cliente`
--

CREATE TABLE `factura_cliente` (
  `id` int(11) NOT NULL,
  `Cod_Factura` int(11) DEFAULT NULL,
  `Cod_Cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `Cod_Grupo` int(11) NOT NULL,
  `Descripción` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `Cod_Material` int(11) NOT NULL,
  `Tipo_Material` varchar(30) DEFAULT NULL,
  `Descripción` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Cod_Referencia` int(11) NOT NULL,
  `Marca` varchar(50) DEFAULT NULL,
  `Descripción` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_material`
--

CREATE TABLE `producto_material` (
  `id` int(11) NOT NULL,
  `Cod_Referencia` int(11) DEFAULT NULL,
  `Cod_Material` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `Cod_Proveedor` int(11) NOT NULL,
  `Razon_Social` varchar(60) DEFAULT NULL,
  `Dirección` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor_productos`
--

CREATE TABLE `proveedor_productos` (
  `id` int(11) NOT NULL,
  `Cod_proveedor` int(11) DEFAULT NULL,
  `Cod_Referencia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Cod_Cliente`);

--
-- Indices de la tabla `cliente_empleado`
--
ALTER TABLE `cliente_empleado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Cod_Empleado` (`Cod_Empleado`),
  ADD KEY `Cod_Cliente` (`Cod_Cliente`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`Cod_Detalle`),
  ADD KEY `Cod_Factura` (`Cod_Factura`);

--
-- Indices de la tabla `dtl_factura_producto`
--
ALTER TABLE `dtl_factura_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Cod_Detalle` (`Cod_Detalle`),
  ADD KEY `Cod_Referencia` (`Cod_Referencia`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Cod_Empleado`);

--
-- Indices de la tabla `empleado_grupo`
--
ALTER TABLE `empleado_grupo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Cod_Empleado` (`Cod_Empleado`),
  ADD KEY `Cod_Grupo` (`Cod_Grupo`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`Cod_Factura`);

--
-- Indices de la tabla `factura_cliente`
--
ALTER TABLE `factura_cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Cod_Factura` (`Cod_Factura`),
  ADD KEY `Cod_Cliente` (`Cod_Cliente`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`Cod_Grupo`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`Cod_Material`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Cod_Referencia`);

--
-- Indices de la tabla `producto_material`
--
ALTER TABLE `producto_material`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Cod_Referencia` (`Cod_Referencia`),
  ADD KEY `Cod_Material` (`Cod_Material`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`Cod_Proveedor`);

--
-- Indices de la tabla `proveedor_productos`
--
ALTER TABLE `proveedor_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Cod_proveedor` (`Cod_proveedor`),
  ADD KEY `Cod_Referencia` (`Cod_Referencia`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente_empleado`
--
ALTER TABLE `cliente_empleado`
  ADD CONSTRAINT `cliente_empleado_ibfk_1` FOREIGN KEY (`Cod_Empleado`) REFERENCES `empleado` (`Cod_Empleado`),
  ADD CONSTRAINT `cliente_empleado_ibfk_2` FOREIGN KEY (`Cod_Cliente`) REFERENCES `cliente` (`Cod_Cliente`);

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`Cod_Factura`) REFERENCES `facturas` (`Cod_Factura`);

--
-- Filtros para la tabla `dtl_factura_producto`
--
ALTER TABLE `dtl_factura_producto`
  ADD CONSTRAINT `dtl_factura_producto_ibfk_1` FOREIGN KEY (`Cod_Detalle`) REFERENCES `detalle_factura` (`Cod_Detalle`),
  ADD CONSTRAINT `dtl_factura_producto_ibfk_2` FOREIGN KEY (`Cod_Referencia`) REFERENCES `productos` (`Cod_Referencia`);

--
-- Filtros para la tabla `empleado_grupo`
--
ALTER TABLE `empleado_grupo`
  ADD CONSTRAINT `empleado_grupo_ibfk_1` FOREIGN KEY (`Cod_Empleado`) REFERENCES `empleado` (`Cod_Empleado`),
  ADD CONSTRAINT `empleado_grupo_ibfk_2` FOREIGN KEY (`Cod_Grupo`) REFERENCES `grupo` (`Cod_Grupo`);

--
-- Filtros para la tabla `factura_cliente`
--
ALTER TABLE `factura_cliente`
  ADD CONSTRAINT `factura_cliente_ibfk_1` FOREIGN KEY (`Cod_Factura`) REFERENCES `facturas` (`Cod_Factura`),
  ADD CONSTRAINT `factura_cliente_ibfk_2` FOREIGN KEY (`Cod_Cliente`) REFERENCES `cliente` (`Cod_Cliente`);

--
-- Filtros para la tabla `producto_material`
--
ALTER TABLE `producto_material`
  ADD CONSTRAINT `producto_material_ibfk_1` FOREIGN KEY (`Cod_Referencia`) REFERENCES `productos` (`Cod_Referencia`),
  ADD CONSTRAINT `producto_material_ibfk_2` FOREIGN KEY (`Cod_Material`) REFERENCES `material` (`Cod_Material`);

--
-- Filtros para la tabla `proveedor_productos`
--
ALTER TABLE `proveedor_productos`
  ADD CONSTRAINT `proveedor_productos_ibfk_1` FOREIGN KEY (`Cod_proveedor`) REFERENCES `proveedor` (`Cod_Proveedor`),
  ADD CONSTRAINT `proveedor_productos_ibfk_2` FOREIGN KEY (`Cod_Referencia`) REFERENCES `productos` (`Cod_Referencia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
