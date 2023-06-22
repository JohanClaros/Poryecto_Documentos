/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.4.24-MariaDB : Database - proy
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`proy` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `proy`;

/*Table structure for table `doc_documento` */

DROP TABLE IF EXISTS `doc_documento`;

CREATE TABLE `doc_documento` (
  `DOC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DOC_NOMBRE` varchar(60) NOT NULL,
  `DOC_CODIGO` varchar(25) NOT NULL,
  `DOC_ID_TIPO` int(11) NOT NULL,
  `DOC_ID_PROCESO` int(11) NOT NULL,
  `DOC_CONTENIDO` varchar(4000) NOT NULL,
  `DOC_ESTADO` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`DOC_ID`),
  UNIQUE KEY `DOC_CODIGO` (`DOC_CODIGO`)
) ;

/*Data for the table `doc_documento` */

insert  into `doc_documento`(`DOC_ID`,`DOC_NOMBRE`,`DOC_CODIGO`,`DOC_ID_TIPO`,`DOC_ID_PROCESO`,`DOC_CONTENIDO`,`DOC_ESTADO`) values 
(2,'CUALQUIER COSA','ING-INS-2',1,1,'SANFAPS',1),
(3,'CAS','ING-INS-3',1,1,'HHYTB',1),
(5,'nuevo 2.0','ING-CONT-1',4,1,'success',0),
(7,'AFASD','ING-INS-4',1,1,'FFFF',1);

/*Table structure for table `pro_proceso` */

DROP TABLE IF EXISTS `pro_proceso`;

CREATE TABLE `pro_proceso` (
  `PRO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRO_PREFIJO` varchar(20) NOT NULL,
  `PRO_NOMBRE` varchar(60) NOT NULL,
  PRIMARY KEY (`PRO_ID`)
);

/*Data for the table `pro_proceso` */

insert  into `pro_proceso`(`PRO_ID`,`PRO_PREFIJO`,`PRO_NOMBRE`) values 
(1,'ING','INGENIERIA'),
(2,'PRO','PROFESOR'),
(3,'EST','ESTUDIANTE'),
(4,'CONT','CONTABILIDAD'),
(5,'ARQ','ARQUITECTO');

/*Table structure for table `rol` */

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;

/*Data for the table `rol` */

insert  into `rol`(`id`,`nombre`) values 
(1,'admin'),
(2,'cliente');

/*Table structure for table `tid_tipo_doc` */

DROP TABLE IF EXISTS `tid_tipo_doc`;

CREATE TABLE `tid_tipo_doc` (
  `TIP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TIP_NOMBRE` varchar(60) NOT NULL,
  `TIP_PREFIJO` varchar(20) NOT NULL,
  PRIMARY KEY (`TIP_ID`)
);

/*Data for the table `tid_tipo_doc` */

insert  into `tid_tipo_doc`(`TIP_ID`,`TIP_NOMBRE`,`TIP_PREFIJO`) values 
(1,'INSTRUCTIVO','INS'),
(2,'PRIORIDAD','PRIO'),
(3,'REGLAS','REG'),
(4,'CONTRATO','CONT'),
(5,'INFORMATIVO','INF');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(155) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `user` varchar(55) DEFAULT NULL,
  `pass` varchar(25) DEFAULT NULL,
  `rol_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_rol1_idx` (`rol_id`),
  CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`)
);

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`nombre`,`email`,`user`,`pass`,`rol_id`) values 
(1,'admin admin','administrador@admin.com','admin','admin',1),
(2,'Sebas','sebas@gmail.com','root','1998',2),
(3,'Robin','r@gmail.com','robin','123',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
