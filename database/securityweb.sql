# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.3.11-MariaDB)
# Base de datos: securityweb
# Tiempo de Generación: 2019-01-06 17:32:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla routers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `routers`;

CREATE TABLE `routers` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `brand` varchar(32) NOT NULL DEFAULT '',
  `model` varchar(64) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `numAntennas` int(11) DEFAULT NULL,
  `numLANPorts` int(11) DEFAULT NULL,
  `MAC_ACL` tinyint(1) DEFAULT NULL,
  `MU_MIMO` tinyint(1) DEFAULT NULL,
  `radius` tinyint(1) DEFAULT NULL,
  `band` enum('single','dual','tri') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `routers` WRITE;
/*!40000 ALTER TABLE `routers` DISABLE KEYS */;

INSERT INTO `routers` (`id`, `brand`, `model`, `price`, `numAntennas`, `numLANPorts`, `MAC_ACL`, `MU_MIMO`, `radius`, `band`)
VALUES
	(1,'Asus','ROG Rapture GT-AC5300',380,8,8,1,1,1,'tri'),
	(2,'Asus','RT-AC66U B1 Dual-Band Gigabit Wi-Fi Router',110,3,4,1,0,1,'dual'),
	(3,'Asus','RT-AC86U AC2900 Router',170,3,4,0,1,1,'dual'),
	(4,'Asus','Blue Cave AC2600 Dual-Band Wireless Router for Smart Homes',130,4,4,1,0,1,'dual'),
	(5,'Netgear','Nighthawk X10 AD7200 Smart WiFi Router (R9000)',380,4,7,1,1,0,'dual'),
	(6,'Netgear','NightHawk Pro Gaming XR700',500,4,6,0,1,0,'tri'),
	(7,'Netgear','Orbi Mesh Wi-Fi System With Orbi Voice Smart Speaker (RBK50V)',395,6,3,0,1,0,'tri'),
	(8,'Netgear','Nighthawk AC2300 Smart WiFi Router (R7000P)',170,3,4,0,1,0,'dual'),
	(9,'D-Link','AC1200 Wi-Fi Router (DIR-842)',60,4,4,1,0,0,'dual'),
	(10,'D-Link','EXO AC2600 MU-MIMO Wi-Fi Router (DIR-822)',135,4,4,1,1,0,'dual'),
	(11,'D-Link','AC1750 MU-MIMO Wi-Fi Router (DIR-867)',90,4,4,1,1,0,'dual'),
	(12,'D-Link','AC1750 Wi-Fi Router DIR-859',80,3,4,0,0,0,'dual'),
	(13,'TP-Link','Archer C7 AC1750 Wireless Dual Band Gigabit Router (V2)',70,3,4,1,0,0,'dual'),
	(14,'TP-Link','AC1750 Wireless Dual-Band Gigabit Router Archer A7',60,3,4,0,0,0,'dual'),
	(15,'TP-Link','Archer C5400X AC5400 MU-MIMO Tri-Band Gaming Router',360,8,8,1,1,0,'tri'),
	(16,'TP-Link','AC2300 Wireless MU-MIMO Gigabit Router (Archer C2300)',120,3,4,1,1,0,'dual'),
	(17,'Linksys','EA6350 AC1200+ Dual-Band Smart Wi-Fi Wireless Router',80,2,4,1,0,0,'dual'),
	(18,'Linksys','WRT32X Wi-Fi Gaming Router',145,4,4,0,1,0,'dual'),
	(19,'Linksys','EA8300 Max-Stream AC2200 Tri-Band Wi-Fi Router',200,4,4,0,1,0,'tri'),
	(20,'Trendnet','AC2600 StreamBoost MU-MIMO WiFi Router (TEW-827DRU)',80,4,4,1,1,0,'dual'),
	(21,'Jetstream','AC3000 Tri-Band Wi-Fi Gaming Router',110,8,4,0,1,0,'tri'),
	(22,'Phicomm','K3C AC1900 Dual-Band MU-MIMO Gigabit Router',68,6,3,0,1,0,'dual'),
	(23,'Razer','Sila',250,9,3,0,1,0,'tri');

/*!40000 ALTER TABLE `routers` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
