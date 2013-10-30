-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-10-2013 a las 04:41:55
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `marketbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `codigoCategoria` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`codigoCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriatemasayuda`
--

CREATE TABLE IF NOT EXISTS `categoriatemasayuda` (
  `codigoCategoriaTema` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombreCategoriaTema` varchar(100) DEFAULT NULL,
  `descripcionTema` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`codigoCategoriaTema`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `codigoEmpresa` bigint(20) NOT NULL AUTO_INCREMENT,
  `razonSocial` varchar(100) DEFAULT NULL,
  `direccionFiscal` varchar(200) DEFAULT NULL,
  `telefono` bigint(12) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `flagContactoCorreo` bit(1) DEFAULT NULL,
  `ruc` bigint(11) DEFAULT NULL,
  `contrasenia` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`codigoEmpresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`codigoEmpresa`, `razonSocial`, `direccionFiscal`, `telefono`, `correo`, `flagContactoCorreo`, `ruc`, `contrasenia`) VALUES
(1, 'tsv', 'ddd', 123, 'ffgdfg', b'0', 123, '123'),
(2, 'HPL Transport S.A.C.', 'Ubr. los sauces calle sta. Inés MZ L lote 10', 123456, 'dfsdf@fdsf.fsd', b'0', 121, 'admin'),
(3, 'GLORIA S.A.', 'calle 777', 1234, 'sdsasd@dfds.sfd', b'1', 1234, 'adminadmin'),
(4, 'razon', 'direccion', 2134453, 'correo@das.dsf', b'1', NULL, 'clave1'),
(5, 'sdfsd', 'sdf', 123342, 'dsfd@fdsf.sdf', b'1', 12334, ''),
(6, 'sdfsd', 'sdf', 123342, 'dsfd@fdsf.sdf', b'1', 12334, 'asd'),
(7, 'LA VACA LECHERA', 'fdsfdg', 111111, 'luis.palacinr@gmail.com', b'1', 2147483647, 'adminadmin'),
(8, '', '', 12433, '', b'1', 123456, ''),
(9, '', '', 12433, '', b'1', 123456, ''),
(10, 'KPOP SA', 'calle capÃ³n', 123456, 'kpop@kpopo.com', b'1', 2147483647, 'chacalaca'),
(11, 'Empresaaaa', 'av. Los Sauces', 222222277, 'luis.palacinr@gmail.com', b'1', 2147483647, 'administrador'),
(12, 'razonsoc', 'dsfsfdsf', 34534, 'df@gfh.h', b'1', 2147483647, 'claveacceso'),
(13, 'Transportes san valentin S.A.', 'urb. Los Sauces Calle Sta. InÃ©s Mz l lote 10 B', 985430144, 'administracion@tsvsac.com.pe', b'1', 20425407733, 'claveadmin'),
(14, 'Yo pe', 'dadsdsad', 12343243, 'dsfd@fdsf.sdf', b'1', 23450000000, 'ffffdf307d8b74de91fdcfca42836108');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidadpago`
--

CREATE TABLE IF NOT EXISTS `modalidadpago` (
  `codigoModalidadPago` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`codigoModalidadPago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE IF NOT EXISTS `oferta` (
  `codigoOferta` bigint(20) NOT NULL AUTO_INCREMENT,
  `precioOferta` decimal(5,2) DEFAULT NULL,
  `fechaInicioOferta` date DEFAULT NULL,
  `fechaFinOferta` date DEFAULT NULL,
  `codigoProducto` bigint(20) NOT NULL,
  `direccionImagenOferta` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`codigoOferta`),
  KEY `fk_producto_oferta` (`codigoProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntafrecuente`
--

CREATE TABLE IF NOT EXISTS `preguntafrecuente` (
  `codigoAyuda` bigint(20) NOT NULL AUTO_INCREMENT,
  `enunciadoPregunta` varchar(100) DEFAULT NULL,
  `respuestaPregunta` varchar(300) DEFAULT NULL,
  `codigoCategoriaTema` bigint(20) NOT NULL,
  PRIMARY KEY (`codigoAyuda`),
  KEY `fk_categoriaTemasAyuda_pregunta` (`codigoCategoriaTema`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `codigoProducto` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` decimal(5,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `codigoCategoria` bigint(20) NOT NULL,
  `direccionImagen` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`codigoProducto`),
  KEY `fk_categoria_producto` (`codigoCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablasistema`
--

CREATE TABLE IF NOT EXISTS `tablasistema` (
  `codigo` bigint(20) NOT NULL AUTO_INCREMENT,
  `item` varchar(100) DEFAULT NULL,
  `valor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `codigoVenta` bigint(20) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `codigoModalidadPago` bigint(20) NOT NULL,
  `codigoEmpresa` bigint(20) NOT NULL,
  PRIMARY KEY (`codigoVenta`),
  KEY `fk_modalidadPago_venta` (`codigoModalidadPago`),
  KEY `fk_empresa_venta` (`codigoEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventadetalle`
--

CREATE TABLE IF NOT EXISTS `ventadetalle` (
  `codigoVenta` bigint(20) NOT NULL,
  `codigoProducto` bigint(20) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigoVenta`),
  KEY `fk_producto_ventaDetalle` (`codigoProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `fk_producto_oferta` FOREIGN KEY (`codigoProducto`) REFERENCES `producto` (`codigoProducto`);

--
-- Filtros para la tabla `preguntafrecuente`
--
ALTER TABLE `preguntafrecuente`
  ADD CONSTRAINT `fk_categoriaTemasAyuda_pregunta` FOREIGN KEY (`codigoCategoriaTema`) REFERENCES `categoriatemasayuda` (`codigoCategoriaTema`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_categoria_producto` FOREIGN KEY (`codigoCategoria`) REFERENCES `categoria` (`codigoCategoria`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_empresa_venta` FOREIGN KEY (`codigoEmpresa`) REFERENCES `empresa` (`codigoEmpresa`),
  ADD CONSTRAINT `fk_modalidadPago_venta` FOREIGN KEY (`codigoModalidadPago`) REFERENCES `modalidadpago` (`codigoModalidadPago`);

--
-- Filtros para la tabla `ventadetalle`
--
ALTER TABLE `ventadetalle`
  ADD CONSTRAINT `fk_producto_ventaDetalle` FOREIGN KEY (`codigoProducto`) REFERENCES `producto` (`codigoProducto`),
  ADD CONSTRAINT `fk_venta_ventaDetalle` FOREIGN KEY (`codigoVenta`) REFERENCES `venta` (`codigoVenta`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
