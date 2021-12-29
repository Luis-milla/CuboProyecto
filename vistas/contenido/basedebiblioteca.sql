/*
SQLyog Community v13.1.1 (64 bit)
MySQL - 10.4.18-MariaDB : Database - biblioteca
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bibliotecanueva` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

/*Table structure for table `autor` */

DROP TABLE IF EXISTS `autor`;

CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(100) DEFAULT NULL,
  `apellido` char(100) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `pais` char(100) DEFAULT NULL,
  `ciudad_nat` char(100) DEFAULT NULL,
  `fecha_nacimi` date DEFAULT NULL,
  `fecha_regis` date DEFAULT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `autor` */

/*Table structure for table `autoxr_x_libro` */

DROP TABLE IF EXISTS `autoxr_x_libro`;

CREATE TABLE `autoxr_x_libro` (
  `lista` int(11) NOT NULL AUTO_INCREMENT,
  `id_autor` int(11) DEFAULT NULL,
  `id_libro` char(100) DEFAULT NULL,
  PRIMARY KEY (`lista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `autoxr_x_libro` */

/*Table structure for table `categoria` */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `lista` int(11) NOT NULL AUTO_INCREMENT,
  `cod_cat` char(100) DEFAULT NULL,
  `nombre` char(100) DEFAULT NULL,
  KEY `lista` (`lista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `categoria` */

/*Table structure for table `conexion_usuario` */

DROP TABLE IF EXISTS `conexion_usuario`;

CREATE TABLE `conexion_usuario` (
  `lista` int(11) NOT NULL AUTO_INCREMENT,
  `id_empleado` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `correo` text DEFAULT NULL,
  KEY `lista` (`lista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `conexion_usuario` */

/*Table structure for table `configuracion` */

DROP TABLE IF EXISTS `configuracion`;

CREATE TABLE `configuracion` (
  `id_configu` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_configu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `configuracion` */

/*Table structure for table `cubo` */

DROP TABLE IF EXISTS `cubo`;

CREATE TABLE `cubo` (
  `lista` int(11) NOT NULL AUTO_INCREMENT,
  `id_empleado` int(11) DEFAULT NULL,
  `id_config` int(11) DEFAULT NULL,
  `departamento` char(100) DEFAULT NULL,
  KEY `lista` (`lista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `cubo` */

/*Table structure for table `datos_empleado` */

DROP TABLE IF EXISTS `datos_empleado`;

CREATE TABLE `datos_empleado` (
  `lista` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` text DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  `fecha_contrato` date DEFAULT NULL,
  `cargo` char(100) DEFAULT NULL,
  `telefono` char(50) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `municipio` char(100) DEFAULT NULL,
  `departamento` char(100) DEFAULT NULL,
  KEY `lista` (`lista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `datos_empleado` */

/*Table structure for table `datos_usuario` */

DROP TABLE IF EXISTS `datos_usuario`;

CREATE TABLE `datos_usuario` (
  `lista` int(11) NOT NULL AUTO_INCREMENT,
  `telefono` char(10) DEFAULT NULL,
  `fecha_regist` date DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `foto_usu` text DEFAULT NULL,
  `departamento` char(50) DEFAULT NULL,
  `municipio` char(50) DEFAULT NULL,
  KEY `lista` (`lista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `datos_usuario` */

/*Table structure for table `detalles_prestamo` */

DROP TABLE IF EXISTS `detalles_prestamo`;

CREATE TABLE `detalles_prestamo` (
  `id_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `id_pres` int(11) DEFAULT NULL,
  `fecha_ini` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estado` char(50) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `horadeta` time DEFAULT NULL,
  PRIMARY KEY (`id_detalle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `detalles_prestamo` */

/*Table structure for table `editorial` */

DROP TABLE IF EXISTS `editorial`;

CREATE TABLE `editorial` (
  `lista` int(11) NOT NULL AUTO_INCREMENT,
  `cod_edi` char(100) NOT NULL,
  `nombre` char(100) DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `telefono` char(100) DEFAULT NULL,
  `correo` text DEFAULT NULL,
  `id_libro` char(100) DEFAULT NULL,
  PRIMARY KEY (`cod_edi`),
  KEY `lista` (`lista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `editorial` */

/*Table structure for table `ejemplar` */

DROP TABLE IF EXISTS `ejemplar`;

CREATE TABLE `ejemplar` (
  `id_ejemplar` int(11) NOT NULL AUTO_INCREMENT,
  `id_libro` char(100) DEFAULT NULL,
  `imagen` text DEFAULT NULL,
  `estado` char(50) DEFAULT NULL,
  `fecha_regis` date DEFAULT NULL,
  PRIMARY KEY (`id_ejemplar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ejemplar` */

/*Table structure for table `empleado` */

DROP TABLE IF EXISTS `empleado`;

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(100) DEFAULT NULL,
  `apellido` char(100) DEFAULT NULL,
  `estado` char(50) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `claveem` text DEFAULT NULL,
  `correo` text DEFAULT NULL,
  PRIMARY KEY (`id_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `empleado` */

/*Table structure for table `libro` */

DROP TABLE IF EXISTS `libro`;

CREATE TABLE `libro` (
  `lista` int(11) NOT NULL AUTO_INCREMENT,
  `id_isbn` char(100) NOT NULL,
  `titulo` char(200) DEFAULT NULL,
  `portada` text DEFAULT NULL COMMENT 'img',
  `descripcion` text DEFAULT NULL COMMENT 'Introduccion del libro',
  `fecha_regis` date DEFAULT NULL,
  `hora_regis` date DEFAULT NULL,
  `estado` char(50) DEFAULT NULL COMMENT 'I de inabilitado',
  `num_dewey` float DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_isbn`),
  KEY `lista` (`lista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `libro` */

/*Table structure for table `notificacion` */

DROP TABLE IF EXISTS `notificacion`;

CREATE TABLE `notificacion` (
  `id_notifi` int(11) NOT NULL AUTO_INCREMENT,
  `msj` text DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `horam` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_notifi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `notificacion` */

/*Table structure for table `prestamo` */

DROP TABLE IF EXISTS `prestamo`;

CREATE TABLE `prestamo` (
  `id_prestamo` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  `estado` char(50) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL COMMENT '1 admin 2 bibliotecario',
  `horapres` time DEFAULT NULL,
  PRIMARY KEY (`id_prestamo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `prestamo` */

/*Table structure for table `reparacion` */

DROP TABLE IF EXISTS `reparacion`;

CREATE TABLE `reparacion` (
  `lista` int(11) NOT NULL AUTO_INCREMENT,
  `id_libro` char(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `estado` char(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora_repa` time DEFAULT NULL,
  KEY `lista` (`lista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `reparacion` */

/*Table structure for table `subcategoria` */

DROP TABLE IF EXISTS `subcategoria`;

CREATE TABLE `subcategoria` (
  `id_subcat` char(100) NOT NULL,
  `nombre` char(100) DEFAULT NULL,
  `id_cat` char(100) DEFAULT NULL,
  PRIMARY KEY (`id_subcat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `subcategoria` */

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT,
  `clave` char(100) DEFAULT NULL,
  `correo` text DEFAULT NULL,
  `estado` char(100) DEFAULT NULL,
  `fecha_regist` date DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `genero` char(20) DEFAULT NULL,
  `nombre` char(100) DEFAULT NULL,
  `apellido` char(100) DEFAULT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuario` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
