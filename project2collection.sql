# ************************************************************
# Sequel Ace SQL dump
# Version 20048
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 11.0.2-MariaDB-1:11.0.2+maria~ubu2204)
# Database: project2collector
# Generation Time: 2023-07-31 11:05:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table collection
# ------------------------------------------------------------

DROP TABLE IF EXISTS `collection`;

CREATE TABLE `collection` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `definition` varchar(3000) DEFAULT NULL,
  `synonyms` varchar(500) DEFAULT NULL,
  `example_sentence` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `collection` WRITE;
/*!40000 ALTER TABLE `collection` DISABLE KEYS */;

INSERT INTO `collection` (`id`, `name`, `definition`, `synonyms`, `example_sentence`)
VALUES
	(1,'duplicitous','Deceitful in speech or conduct, acting in duplicity','fraudulent, two-faced, dishonest','She had a duplicitous personality, acting nice and polite while around her classmates but then insulting them behind their backs.'),
	(2,'astute','Having the ability to accurately asses situations and turn them into one\'s favor','shrewd, clever, sharp-witted','The astute chess player always knew his opponent\'s next move.'),
	(3,'doohickey','A small object or gadget, usually used when speaker cannot recall precise name','thing, doodad, thingamabob','\"How do you turn on this TV?\" \"Oh, use the small doohickey that\'s resting on the couch.\"'),
	(4,'flabbergasted','Greatly surprised or astonished','taken aback, shocked, startled','I was flabbergasted to hear the Barbie movie was actually a quality film.');

/*!40000 ALTER TABLE `collection` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
