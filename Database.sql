-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.11-beta-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema project
--

CREATE DATABASE IF NOT EXISTS project;
USE project;

--
-- Definition of table `reciver`
--

DROP TABLE IF EXISTS `reciver`;
CREATE TABLE `reciver` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `contcactno` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `bloodgroup` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reciver`
--

/*!40000 ALTER TABLE `reciver` DISABLE KEYS */;
INSERT INTO `reciver` (`id`,`firstname`,`lastname`,`contcactno`,`email`,`bloodgroup`) VALUES 
 (1,'Ram','Charan','3214569870','ram@gmail.com','B+');
/*!40000 ALTER TABLE `reciver` ENABLE KEYS */;


--
-- Definition of table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `firstname` varchar(20) default NULL,
  `lastname` varchar(20) default NULL,
  `contactno` varchar(12) default NULL,
  `email` varchar(20) default NULL,
  `bloodgroup` varchar(10) default NULL,
  `passward` varchar(10) default NULL,
  `recoveryque` varchar(20) default NULL,
  `answer` varchar(20) default NULL,
  `lasttime` varchar(20) default NULL,
  `id` int(10) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` (`firstname`,`lastname`,`contactno`,`email`,`bloodgroup`,`passward`,`recoveryque`,`answer`,`lasttime`,`id`) VALUES 
 ('amit','khomane','9876541230','amit@gmail.com','O+','123456789','Your Birth Place','pune','2024-02-26',1),
 ('rahul','kadam','9876541239','rahul@gmail.com','A+','123456789','Your favourite movie','ved','2023-12-06',2);
/*!40000 ALTER TABLE `register` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
