
DROP TABLE IF EXISTS `autor`;

CREATE TABLE `autor` (
  `id_autor` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` CHAR(100) DEFAULT NULL,
  `apellido` CHAR(100) DEFAULT NULL,
  `foto` TEXT DEFAULT NULL,
  `pais` CHAR(100) DEFAULT NULL,
  `ciudad_nat` CHAR(100) DEFAULT NULL,
  `fecha_nacimi` DATE DEFAULT NULL,
  `fecha_regis` DATE DEFAULT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `autor` */

/*Table structure for table `autoxr_x_libro` */

DROP TABLE IF EXISTS `autoxr_x_libro`;

CREATE TABLE `autoxr_x_libro` (
  `lista` INT(11) NOT NULL AUTO_INCREMENT,
  `id_autor` INT(11) DEFAULT NULL,
  `id_libro` CHAR(100) DEFAULT NULL,
  PRIMARY KEY (`lista`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `autoxr_x_libro` */

/*Table structure for table `categoria` */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `lista` INT(11) NOT NULL AUTO_INCREMENT,
  `cod_cat` CHAR(100) DEFAULT NULL,
  `nombre` CHAR(100) DEFAULT NULL,
  KEY `lista` (`lista`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `categoria` */

/*Table structure for table `conexion_usuario` */

DROP TABLE IF EXISTS `conexion_usuario`;

CREATE TABLE `conexion_usuario` (
  `lista` INT(11) NOT NULL AUTO_INCREMENT,
  `id_empleado` INT(11) DEFAULT NULL,
  `id_usuario` INT(11) DEFAULT NULL,
  `correo` TEXT DEFAULT NULL,
  KEY `lista` (`lista`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `conexion_usuario` */

/*Table structure for table `configuracion` */

DROP TABLE IF EXISTS `configuracion`;

CREATE TABLE `configuracion` (
  `id_configu` INT(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_configu`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `configuracion` */

/*Table structure for table `cubo` */

DROP TABLE IF EXISTS `cubo`;

CREATE TABLE `cubo` (
  `lista` INT(11) NOT NULL AUTO_INCREMENT,
  `id_empleado` INT(11) DEFAULT NULL,
  `id_config` INT(11) DEFAULT NULL,
  `departamento` CHAR(100) DEFAULT NULL,
  KEY `lista` (`lista`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `cubo` */

/*Table structure for table `datos_empleado` */

DROP TABLE IF EXISTS `datos_empleado`;

CREATE TABLE `datos_empleado` (
  `lista` INT(11) NOT NULL AUTO_INCREMENT,
  `direccion` TEXT DEFAULT NULL,
  `id_empleado` INT(11) DEFAULT NULL,
  `fecha_contrato` DATE DEFAULT NULL,
  `cargo` CHAR(100) DEFAULT NULL,
  `telefono` CHAR(50) DEFAULT NULL,
  `fecha_nacimiento` DATE DEFAULT NULL,
  `municipio` CHAR(100) DEFAULT NULL,
  `departamento` CHAR(100) DEFAULT NULL,
  KEY `lista` (`lista`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `datos_empleado` */

/*Table structure for table `datos_usuario` */

DROP TABLE IF EXISTS `datos_usuario`;

CREATE TABLE `datos_usuario` (
  `lista` INT(11) NOT NULL AUTO_INCREMENT,
  `telefono` CHAR(10) DEFAULT NULL,
  `fecha_regist` DATE DEFAULT NULL,
  `direccion` TEXT DEFAULT NULL,
  `foto_usu` TEXT DEFAULT NULL,
  `departamento` CHAR(50) DEFAULT NULL,
  `municipio` CHAR(50) DEFAULT NULL,
  KEY `lista` (`lista`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `datos_usuario` */

/*Table structure for table `detalles_prestamo` */

DROP TABLE IF EXISTS `detalles_prestamo`;

CREATE TABLE `detalles_prestamo` (
  `id_detalle` INT(11) NOT NULL AUTO_INCREMENT,
  `id_pres` INT(11) DEFAULT NULL,
  `fecha_ini` DATE DEFAULT NULL,
  `fecha_fin` DATE DEFAULT NULL,
  `estado` CHAR(50) DEFAULT NULL,
  `descripcion` TEXT DEFAULT NULL,
  `horadeta` TIME DEFAULT NULL,
  PRIMARY KEY (`id_detalle`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `detalles_prestamo` */

/*Table structure for table `editorial` */

DROP TABLE IF EXISTS `editorial`;

CREATE TABLE `editorial` (
  `lista` INT(11) NOT NULL AUTO_INCREMENT,
  `cod_edi` CHAR(100) NOT NULL,
  `nombre` CHAR(100) DEFAULT NULL,
  `direccion` TEXT DEFAULT NULL,
  `telefono` CHAR(100) DEFAULT NULL,
  `correo` TEXT DEFAULT NULL,
  `id_libro` CHAR(100) DEFAULT NULL,
  PRIMARY KEY (`cod_edi`),
  KEY `lista` (`lista`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `editorial` */

/*Table structure for table `ejemplar` */

DROP TABLE IF EXISTS `ejemplar`;

CREATE TABLE `ejemplar` (
  `id_ejemplar` INT(11) NOT NULL AUTO_INCREMENT,
  `id_libro` CHAR(100) DEFAULT NULL,
  `imagen` TEXT DEFAULT NULL,
  `estado` CHAR(50) DEFAULT NULL,
  `fecha_regis` DATE DEFAULT NULL,
  PRIMARY KEY (`id_ejemplar`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ejemplar` */

/*Table structure for table `empleado` */

DROP TABLE IF EXISTS `empleado`;

CREATE TABLE `empleado` (
  `id_empleado` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` CHAR(100) DEFAULT NULL,
  `apellido` CHAR(100) DEFAULT NULL,
  `estado` CHAR(50) DEFAULT NULL,
  `fecha_registro` DATE DEFAULT NULL,
  `foto` TEXT DEFAULT NULL,
  `nivel` INT(11) DEFAULT NULL,
  PRIMARY KEY (`id_empleado`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `empleado` */

/*Table structure for table `libro` */

DROP TABLE IF EXISTS `libro`;

CREATE TABLE `libro` (
  `lista` INT(11) NOT NULL AUTO_INCREMENT,
  `id_isbn` CHAR(100) NOT NULL,
  `titulo` CHAR(200) DEFAULT NULL,
  `portada` TEXT DEFAULT NULL COMMENT 'img',
  `descripcion` TEXT DEFAULT NULL COMMENT 'Introduccion del libro',
  `fecha_regis` DATE DEFAULT NULL,
  `hora_regis` DATE DEFAULT NULL,
  `estado` CHAR(50) DEFAULT NULL COMMENT 'I de inabilitado',
  `num_dewey` FLOAT DEFAULT NULL,
  `id_usuario` INT(11) DEFAULT NULL,
  `id_empleado` INT(11) DEFAULT NULL,
  PRIMARY KEY (`id_isbn`),
  KEY `lista` (`lista`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `libro` */

/*Table structure for table `notificacion` */

DROP TABLE IF EXISTS `notificacion`;

CREATE TABLE `notificacion` (
  `id_notifi` INT(11) NOT NULL AUTO_INCREMENT,
  `msj` TEXT DEFAULT NULL,
  `id_usuario` INT(11) DEFAULT NULL,
  `horam` TIME DEFAULT NULL,
  `fecha` DATE DEFAULT NULL,
  PRIMARY KEY (`id_notifi`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `notificacion` */

/*Table structure for table `prestamo` */

DROP TABLE IF EXISTS `prestamo`;

CREATE TABLE `prestamo` (
  `id_prestamo` INT(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` INT(11) DEFAULT NULL,
  `id_empleado` INT(11) DEFAULT NULL,
  `estado` CHAR(50) DEFAULT NULL,
  `descripcion` TEXT DEFAULT NULL,
  `fecha` DATE DEFAULT NULL,
  `nivel` INT(11) DEFAULT NULL COMMENT '1 admin 2 bibliotecario',
  `horapres` TIME DEFAULT NULL,
  PRIMARY KEY (`id_prestamo`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `prestamo` */

/*Table structure for table `reparacion` */

DROP TABLE IF EXISTS `reparacion`;

CREATE TABLE `reparacion` (
  `lista` INT(11) NOT NULL AUTO_INCREMENT,
  `id_libro` CHAR(100) DEFAULT NULL,
  `descripcion` TEXT DEFAULT NULL,
  `estado` CHAR(50) DEFAULT NULL,
  `fecha` DATE DEFAULT NULL,
  `hora_repa` TIME DEFAULT NULL,
  KEY `lista` (`lista`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `reparacion` */

/*Table structure for table `subcategoria` */

DROP TABLE IF EXISTS `subcategoria`;

CREATE TABLE `subcategoria` (
  `id_subcat` CHAR(100) NOT NULL,
  `nombre` CHAR(100) DEFAULT NULL,
  `id_cat` CHAR(100) DEFAULT NULL,
  PRIMARY KEY (`id_subcat`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `subcategoria` */

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id_usu` INT(11) NOT NULL AUTO_INCREMENT,
  `clave` CHAR(100) DEFAULT NULL,
  `correo` TEXT DEFAULT NULL,
  `estado` CHAR(100) DEFAULT NULL,
  `fecha_regist` DATE DEFAULT NULL,
  `foto` TEXT DEFAULT NULL,
  `genero` CHAR(20) DEFAULT NULL,
  `nombre` CHAR(100) DEFAULT NULL,
  `apellido` CHAR(100) DEFAULT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuario` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
