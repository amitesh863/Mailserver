-- MySQL dump 10.13  Distrib 5.6.31, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: 10am
-- ------------------------------------------------------
-- Server version	5.6.31-0ubuntu0.15.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `draft`
--

DROP TABLE IF EXISTS `draft`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `draft` (
  `draft_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `attach` varchar(200) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`draft_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `draft`
--

LOCK TABLES `draft` WRITE;
/*!40000 ALTER TABLE `draft` DISABLE KEYS */;
INSERT INTO `draft` VALUES (1,'hema','hiiiiiii','Winter.jpg','hiiiiiiiiiiii','0000-00-00'),(2,'hema','my pics','Sunset.jpg','this is my pics','0000-00-00'),(3,'hema','my pics','Sunset.jpg','this is my pics','0000-00-00'),(4,'hema','abhi','Water lilies.jpg','hhhhhhhhhhhhh','2013-06-09'),(5,'abhishek','my resume ','','this is my resume format..........','2013-06-13'),(6,'amitesh','TCS mail','','http://localhost/mailsrver/','2016-09-18');
/*!40000 ALTER TABLE `draft` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `imagepath` varchar(200) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'Winter.jpg'),(2,'Winter.jpg'),(3,'Blue hills.jpg'),(4,'Winter.jpg'),(5,''),(6,'Winter.jpg'),(7,'Winter.jpg'),(8,'Winter.jpg'),(9,'Winter.jpg'),(10,'Sunset.jpg'),(11,'Water lilies.jpg'),(12,'Sunset.jpg'),(13,'Sunset.jpg');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `latestupd`
--

DROP TABLE IF EXISTS `latestupd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `latestupd` (
  `upd_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`upd_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `latestupd`
--

LOCK TABLES `latestupd` WRITE;
/*!40000 ALTER TABLE `latestupd` DISABLE KEYS */;
INSERT INTO `latestupd` VALUES (1,'resul','mca result is declared.....','AboutPlugin.dll','2013-06-13'),(2,'resul','mca result is declared.....','AboutPlugin.dll','2013-06-13'),(3,'resue','resume......','Winter.jpg','2013-06-13'),(4,'lkjlj','khkjhkh','','2013-06-13'),(5,'jjjjjjjjj','kkkkkkkkkkk','Water lilies.jpg','2013-06-13');
/*!40000 ALTER TABLE `latestupd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mails`
--

DROP TABLE IF EXISTS `mails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mails` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_id` varchar(50) NOT NULL,
  `sen_id` varchar(50) NOT NULL,
  `sub` char(50) NOT NULL,
  `msg` text NOT NULL,
  `draft` text NOT NULL,
  `trash` text NOT NULL,
  `attachement` varchar(200) NOT NULL,
  `msgdate` varchar(50) NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mails`
--

LOCK TABLES `mails` WRITE;
/*!40000 ALTER TABLE `mails` DISABLE KEYS */;
INSERT INTO `mails` VALUES (1,'deepika','prabhat','hello','hello deepika','','','',''),(2,'prabhat','prabhat','hiiiiiiiii--msg failed','hiiiiiiiiiii','','','',''),(3,'prabhat','prabhat','hiiiiiiiii--msg failed','hiiiiiiiiiii','','','',''),(4,'deepika','prabhat','welcome','welcom........','','','',''),(5,'deepika','prabhat','welcome','welcom........','','','',''),(6,'deepika','prabhat','welcome','welcom........','','','',''),(7,'prabhat','','my resume','','dkljfldjlf','','',''),(8,'deepika','prabhat','ldfjld','dkfjldj','','','','2013-03-03 10:57:47'),(9,'deepika','prabhat','ldfjld','dkfjldj','','','','2013-03-03 11:00:13'),(10,'rexx','prabhat','hello','hello','','','','2013-03-03 11:01:22'),(11,'rexx','prabhat','welll','welcome.rexx........','','','','2013-03-03 11:01:34');
/*!40000 ALTER TABLE `mails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp2`
--

DROP TABLE IF EXISTS `temp2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp2` (
  `fsds` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp2`
--

LOCK TABLES `temp2` WRITE;
/*!40000 ALTER TABLE `temp2` DISABLE KEYS */;
/*!40000 ALTER TABLE `temp2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trash`
--

DROP TABLE IF EXISTS `trash`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trash` (
  `trash_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_id` varchar(50) NOT NULL,
  `sen_id` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`trash_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trash`
--

LOCK TABLES `trash` WRITE;
/*!40000 ALTER TABLE `trash` DISABLE KEYS */;
/*!40000 ALTER TABLE `trash` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userinfo` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` char(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `squestion` varchar(100) NOT NULL,
  `sanswer` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(100) DEFAULT 'default2',
  `count` int(1) NOT NULL DEFAULT '0',
  `scount` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`,`mobile`,`email`),
  KEY `gender` (`gender`,`dob`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userinfo`
--

LOCK TABLES `userinfo` WRITE;
/*!40000 ALTER TABLE `userinfo` DISABLE KEYS */;
INSERT INTO `userinfo` VALUES (1,'hema','hema123',222222,'','f','ls','singh','1902-03-04','Blue hills.jpg',0,0),(2,'mehak','mehak',11111,'mehak@gmail.com','f','fs','fix you','1917-11-16','default2.jpg',0,0),(3,'sanjeev','sanjeev',55578857878,'sanjeev@yahoo.com','m','nsl','kolhapur','0000-00-00','default2.jpg',0,0),(4,'harshil','fdf',0,'','m','ls','sawaji','0000-00-00','default2.jpg',0,0),(5,'satish96','satish',45444,'sanjeev@yahoo.com','m','nsl','surat','1996-04-04','Winter.jpg',0,0),(6,'xyz','xyz111',444444,'xyz@gmail.com','m','ls','mehta','1901-04-04','Blue hills.jpg',0,0),(7,'ravi','ravi111',44444444,'ravi@gmail.com','m','fs','highway to hell','1901-03-03','Winter.jpg',0,0),(8,'abhishek','abhi',888888888,'abhishek@gmail.com','m','nsl','dadar','1915-10-16','Sunset.jpg',0,0),(9,'amitesh','12345',0,'','m','fs','demons','0000-00-00','default2.jpg',0,0),(10,'tanmaysawaji44','12345',0,'','','fs','wake me up','0000-00-00','6.jpg',0,0),(11,'tejit','12345',0,'','m','fs','royals','0000-00-00','default2.jpg',0,0),(12,'omkar','omkar',0,'','','fs','knock you out','0000-00-00','default2.jpg',0,0),(14,'amit7','aascc',12345,'abc@g.c','m','nsl','four bungalows','0000-00-00','12.jpg',0,0),(15,'abc74','5454',54654,'45465454@fg','m','ls','shah','0000-00-00','default2.jpg',0,0),(16,'sai','56789',5454,'tyftft@wae','','nsl','mira road','0000-00-00','default2.jpg',0,0),(17,'aaaaaa','cddff',12487897,'','m','fs','animals','0000-00-00','default2.jpg',0,0),(18,'karnav','12345',12487897,'amit@g1.com','m','nsl','andheri','1920-04-21','default2.jpg',0,0),(19,'saahil','hithere',0,'','','nsl','MALAD','0000-00-00','default2.jpg',0,0),(20,'abcd','1478',12345,'','','ls','sharma','0000-00-00','default2.jpg',0,0),(21,'yaksh','14789',14789656,'','m','nsl','lower parel','0000-00-00','default2.jpg',0,0),(22,'vishal','qwert',0,'','m','ls','singh','0000-00-00','default2.jpg',0,0),(23,'siddhesh','12345',0,'','','ls','rane','0000-00-00','default2.jpg',0,0),(13,'pranav','123456',0,'','m','ls','pawar','0000-00-00','default2.jpg',0,0),(24,'kanchan','kancha',0,'','f','nsl','dnyanesh','0000-00-00','default2.jpg',0,0),(25,'rohit','abcd',0,'rohitshinde@gmail.com','m','nsl','mumbai','1995-09-05','default2.jpg',0,0),(26,'karon','12345',0,'','m','fs','closer','0000-00-00','default2.jpg',0,0),(27,'percy','56789',0,'','m','ls','shah','0000-00-00','default2.jpg',0,0),(28,'thalia','77777',0,'','f','nsl','washington','0000-00-00','default2.jpg',0,0),(29,'grover','78945',0,'','m','nsl','new york','0000-00-00','default2.jpg',0,0);
/*!40000 ALTER TABLE `userinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usermail`
--

DROP TABLE IF EXISTS `usermail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usermail` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_id` varchar(30) NOT NULL,
  `sen_id` varchar(30) NOT NULL,
  `sub` char(30) NOT NULL,
  `msg` text NOT NULL,
  `attachement` text NOT NULL,
  `recDT` date NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usermail`
--

LOCK TABLES `usermail` WRITE;
/*!40000 ALTER TABLE `usermail` DISABLE KEYS */;
INSERT INTO `usermail` VALUES (1,'sai','amitesh','images','khb','Pictures.zip','2016-11-02'),(2,'sai','amitesh','hey','pdlovhuyu.frp','','2016-11-02'),(3,'sai','amitesh','hey','khb','','2016-11-02'),(4,'sai','amitesh','hello','khb wkhuh','','2016-11-03'),(5,'sai','amitesh','project1','khoor','IMG-20161101-WA0005.jpg','2016-11-03'),(6,'amitesh','abhishek','test','L p wdqpdb vdzdml','','2016-11-03'),(7,'amitesh','abhishek','test1','L p vwloo Wdqpdb Vdzdml','','2016-11-03'),(8,'amitesh','abhishek','test1','L p vwloo Wdqpdb Vdzdml','','2016-11-03'),(9,'amitesh','abhishek','Amitesh Sh','whvwlqj phvvdjh','','2016-11-03'),(10,'abhishek','amitesh','hello','khoor','1.png','2016-11-03'),(11,'amitesh','amitesh','hey','khoor','IMG-20161124-WA0000.jpg','2016-11-25'),(13,'abhishek','amitesh','apk','khb','Thumbnail file deleter.apk','2016-12-07');
/*!40000 ALTER TABLE `usermail` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-21 14:34:43
