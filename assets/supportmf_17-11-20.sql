# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.6.38)
# Database: supportmf
# Generation Time: 2020-11-17 20:38:59 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cities
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;

INSERT INTO `cities` (`id`, `name`)
VALUES
	(1,'São Paulo'),
	(2,'São José dos Campos'),
	(3,'Florianópolis'),
	(4,'Rio de Janeiro'),
	(5,'Porto Alegre'),
	(6,'Belo Horizonte'),
	(7,'Presidente Prudente'),
	(8,'Campinas'),
	(9,'Natal'),
	(10,'Salvador'),
	(11,'Recife'),
	(12,'Brasilia'),
	(13,'SAO PAULO'),
	(14,'Gramados'),
	(15,'Foz de Iguaçu'),
	(16,'Sao Paulo');

/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table talents
# ------------------------------------------------------------

DROP TABLE IF EXISTS `talents`;

CREATE TABLE `talents` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `talents` WRITE;
/*!40000 ALTER TABLE `talents` DISABLE KEYS */;

INSERT INTO `talents` (`id`, `name`, `city`, `email`, `phone`)
VALUES
	(12,'Fernanda C',3,NULL,'+55 18 90233 9276'),
	(11,'Bruna Sant',4,'bruna.santos@checkmail.com',NULL),
	(10,'Joel Hedz',10,NULL,'+55 11 89233 9092'),
	(9,'Claudio Mi',3,'claudio@mailer.com',NULL),
	(13,'Camila Riv',13,NULL,NULL),
	(14,'Ricardo L.',14,'richard.gere@mymail.co.uk','+52 124583 3843'),
	(15,'Kim Su',8,NULL,NULL),
	(16,'Geraldine ',1,'gera.rosas@jmailer.com.it',NULL),
	(17,'Caio Reis',16,NULL,NULL),
	(18,'Bernardo P',5,NULL,NULL),
	(19,'Raul Gil',0,NULL,NULL);

/*!40000 ALTER TABLE `talents` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
