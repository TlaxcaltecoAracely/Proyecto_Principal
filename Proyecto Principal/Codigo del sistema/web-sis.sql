-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 27-04-2015 a las 12:55:33
-- Versión del servidor: 5.1.72
-- Versión de PHP: 6.0.0-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `web-sis`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cliente`
-- 

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `Nombre` varchar(60) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `cliente`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `empleado`
-- 

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `Nombre` varchar(60) DEFAULT NULL,
  `Domicilio` varchar(60) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `Tipo-Empleado` varchar(45) DEFAULT NULL,
  `Turno` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `empleado`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `gastos`
-- 

CREATE TABLE `gastos` (
  `idGastos` int(11) NOT NULL,
  `Fecha_Gasto` date DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Total` decimal(5,0) DEFAULT NULL,
  PRIMARY KEY (`idGastos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `gastos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `materia_prima`
-- 

CREATE TABLE `materia_prima` (
  `idMateria_Prima` int(11) NOT NULL,
  `Nombre_Material` varchar(45) DEFAULT NULL,
  `Unidades_Disponibles` int(11) DEFAULT NULL,
  `Tipo_material` varchar(30) DEFAULT NULL,
  `Talla` varchar(20) DEFAULT NULL,
  `Color` varchar(15) DEFAULT NULL,
  `Precio_unidad` decimal(5,0) DEFAULT NULL,
  PRIMARY KEY (`idMateria_Prima`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `materia_prima`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pagos`
-- 

CREATE TABLE `pagos` (
  `idPagos` int(11) NOT NULL,
  `Numero de pago` int(11) DEFAULT NULL,
  `Forma de pago` varchar(45) DEFAULT NULL,
  `Importe` decimal(5,0) DEFAULT NULL,
  `Fecha_pago` date DEFAULT NULL,
  `Cliente_idCliente` int(11) NOT NULL,
  `Pedidos_idPedidos` int(11) NOT NULL,
  PRIMARY KEY (`idPagos`),
  KEY `fk_Pagos_Cliente1_idx` (`Cliente_idCliente`),
  KEY `fk_Pagos_Pedidos1_idx` (`Pedidos_idPedidos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `pagos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pedidos`
-- 

CREATE TABLE `pedidos` (
  `idPedidos` int(11) NOT NULL,
  `Nombre_Pedido` varchar(45) DEFAULT NULL,
  `Numero_pedido` int(11) DEFAULT NULL,
  `Unidades_Requeridas` int(11) DEFAULT NULL,
  `Costo_unidad` decimal(5,0) DEFAULT NULL,
  `Importe_pedido` decimal(5,0) DEFAULT NULL,
  `Fecha_pedido` date DEFAULT NULL,
  `Fecha_entrega` date DEFAULT NULL,
  `Cliente_idCliente` int(11) NOT NULL,
  PRIMARY KEY (`idPedidos`),
  KEY `fk_Pedidos_Cliente1_idx` (`Cliente_idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `pedidos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `relacion_pedidos`
-- 

CREATE TABLE `relacion_pedidos` (
  `Id` int(10) NOT NULL,
  `Pedidos_idPedidos` int(11) NOT NULL,
  `Cliente_idCliente` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Pedidos_has_Cliente_Cliente1_idx` (`Cliente_idCliente`),
  KEY `fk_Pedidos_has_Cliente_Pedidos1_idx` (`Pedidos_idPedidos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `relacion_pedidos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `email` varchar(45) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `A.paterno` varchar(45) DEFAULT NULL,
  `A. materno` varchar(45) DEFAULT NULL,
  `Usuario` varchar(45) DEFAULT NULL,
  `contrasenia` varchar(45) DEFAULT NULL,
  `rol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES ('araceli2401-@hotmail.com', 'Araceli', 'Tlaxcalteco', 'Ruíz', 'Admi1', '123456', 'Administrador');
INSERT INTO `usuarios` VALUES ('francis28@hotmail.com', 'Antonio', 'Guevara', 'Llera', 'mostrador1', '123mos1', 'Mostrador');
