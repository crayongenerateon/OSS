CREATE DATABASE  IF NOT EXISTS `osstest` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `osstest`;
-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: osstest
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `log_action` varchar(255) DEFAULT NULL,
  `log_module` varchar(100) DEFAULT NULL,
  `log_info` text,
  `log_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` VALUES (1,1,'Sunting','Pengguna','ID:1;Title:adi','2017-09-05 09:49:34'),(2,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 04:23:17'),(3,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 04:23:56'),(4,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 04:27:02'),(5,1,'Sunting','Pengguna','ID:1;Title:adi','2017-09-06 04:27:16'),(6,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 06:44:41'),(7,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 06:45:05'),(8,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 06:58:45'),(9,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 06:58:56'),(10,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 07:05:13'),(11,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 07:06:09'),(12,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 07:06:29'),(13,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 07:16:51'),(14,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 07:18:35'),(15,1,'Sunting','Pengguna','ID:1;Title:adi','2017-09-06 07:25:40'),(16,1,'Sunting','Pengguna','ID:1;Title:adi','2017-09-06 07:28:38'),(17,1,'Sunting','Pengguna','ID:1;Title:adi','2017-09-06 07:29:29'),(18,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 07:37:34'),(19,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 07:40:37'),(20,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 07:41:25'),(21,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 07:50:36'),(22,1,'Tambah','Pengguna','ID:3;Title:joko','2017-09-09 06:11:22'),(23,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-09 06:22:42'),(24,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-09 06:22:58'),(25,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 07:17:12'),(26,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 07:29:44'),(27,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 07:30:00'),(28,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 07:31:18'),(29,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 07:33:55'),(30,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 07:34:57'),(31,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 07:35:50'),(32,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 07:37:17'),(33,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 07:44:57'),(34,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 09:14:42'),(35,1,'Sunting','Pengguna','ID:;Title:joko','2017-09-12 09:15:18'),(36,1,'Sunting','Pengguna','ID:3;Title:joko','2017-09-12 09:15:56'),(37,1,'Tambah','Pengguna','ID:4;Title:rahman','2017-09-12 09:25:24'),(38,1,'Sunting','Pengguna','ID:4;Title:rahman','2017-09-12 09:25:32'),(39,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 09:26:53'),(40,1,'Tambah','Pengguna','ID:5;Title:dewo','2017-09-12 09:39:59'),(41,1,'Tambah','Pengguna','ID:6;Title:nazih','2017-09-12 09:40:45'),(42,1,'Tambah','Department','ID:5;Title:','2017-09-19 08:10:50'),(43,1,'Sunting','Pengguna','ID:3;Title:joko','2017-09-21 03:14:37'),(44,1,'Hapus','Departement','ID:5;Title:Marketing','2017-09-26 09:15:37'),(45,1,'Tambah','Religion','ID:1;Title:Islam','2017-10-04 09:21:54'),(46,1,'Tambah','Religion','ID:2;Title:Kristen Katolik','2017-10-04 09:22:12'),(47,1,'Tambah','Religion','ID:3;Title:Kristen Protestan','2017-10-04 09:22:23'),(48,1,'Tambah','Religion','ID:4;Title:Budha','2017-10-04 09:22:32'),(49,1,'Tambah','Religion','ID:5;Title:Hindu','2017-10-04 09:22:39'),(50,1,'Tambah','pendidikan','ID:;Title:SD','2017-10-06 02:54:07'),(51,1,'Tambah','pendidikan','ID:;Title:SD','2017-10-06 02:54:20'),(52,1,'Tambah','kelamin','ID:;Title:Laki-Laki','2017-10-06 02:57:13'),(53,NULL,'Tambah','kelamin','ID:;Title:Laki-Laki','2017-10-06 07:06:39'),(54,1,'Tambah','pendidikan','ID:;Title:SD','2017-10-06 07:07:00'),(55,1,'Tambah','Religion','ID:;Title:Konghuchu','2017-10-06 07:48:49'),(56,1,'Sunting','Religion','ID:5;Title:Hinduh','2017-10-06 08:03:15'),(57,1,'Tambah','Religion','ID:;Title:Konghuchu','2017-10-06 08:20:19'),(58,1,'Tambah','pendidikan','ID:;Title:SD','2017-10-06 08:21:22'),(59,1,'Tambah','pendidikan','ID:;Title:SD','2017-10-06 08:26:34'),(60,1,'Tambah','pendidikan','ID:;Title:SD','2017-10-06 08:27:03'),(61,1,'Tambah','pendidikan','ID:;Title:SD','2017-10-06 08:29:34'),(62,1,'Tambah','pendidikan','ID:;Title:SD','2017-10-06 08:31:37'),(63,1,'Tambah','Religion','ID:;Title:Konghuchu','2017-10-06 08:46:58'),(64,1,'Tambah','Religion','ID:;Title:Konghuchu','2017-10-06 08:55:20'),(65,1,'Tambah','Religion','ID:;Title:Konghuchu','2017-10-06 09:03:49'),(66,1,'Tambah','Religion','ID:;Title:Konghuchu','2017-10-06 09:05:01'),(67,1,'Sunting','Religion','ID:5;Title:Hindu','2017-10-06 09:06:39'),(68,1,'Tambah','Religion','ID:;Title:Konghuchu','2017-10-06 09:13:46'),(69,1,'Tambah','Religion','ID:;Title:Konghuchu','2017-10-10 02:38:31'),(70,1,'Tambah','kelamin','ID:;Title:Laki-Laki','2017-10-10 03:43:55'),(71,1,'Tambah','Religion','ID:6;Title:Konghuchu','2017-10-10 08:09:17'),(72,1,'Sunting','Religion','ID:1;Title:Islam','2017-10-10 08:09:28'),(73,1,'Sunting','Religion','ID:2;Title:Kristen Katolik','2017-10-10 08:09:34'),(74,1,'Sunting','Religion','ID:3;Title:Kristen Protestan','2017-10-10 08:09:39'),(75,1,'Sunting','Religion','ID:4;Title:Budha','2017-10-10 08:09:45'),(76,1,'Sunting','Religion','ID:5;Title:Hindu','2017-10-10 08:09:50'),(77,1,'Tambah','pendidikan','ID:1;Title:SD','2017-10-10 08:48:45'),(78,1,'Tambah','kelamin','ID:1;Title:Laki-Laki','2017-10-10 08:55:51'),(79,1,'Tambah','kelamin','ID:2;Title:Perempuan','2017-10-10 08:56:02'),(80,1,'Tambah','kawin','ID:1;Title:Menikah','2017-10-10 08:57:58'),(81,1,'Tambah','kawin','ID:2;Title:Single','2017-10-10 08:58:07'),(82,1,'Tambah','jabatan','ID:1;Title:Kontrak','2017-10-10 08:59:33'),(83,1,'Tambah','jabatan','ID:2;Title:Tetap','2017-10-10 08:59:45'),(84,1,'Sunting','jabatan','ID:1;Title:Pegawai','2017-10-10 09:02:09'),(85,1,'Sunting','jabatan','ID:2;Title:Supervisor','2017-10-10 09:02:28'),(86,1,'Tambah','division','ID:1;Title:FA-IT','2017-10-12 07:40:20'),(87,1,'Tambah','division','ID:2;Title:Operation','2017-10-12 07:40:43'),(88,1,'Tambah','division','ID:3;Title:Logistic','2017-10-12 07:41:23'),(89,1,'Tambah','status','ID:1;Title:Karyawan Kontrak','2017-10-12 07:48:05'),(90,1,'Tambah','status','ID:2;Title:Karyawan Tetap','2017-10-12 07:48:15'),(91,1,'Tambah','status','ID:3;Title:Karyawan Probation','2017-10-12 07:48:32'),(92,1,'Tambah','Pengguna','ID:3;Title:Supriadi','2017-10-16 09:31:50'),(93,1,'Sunting','Pengguna','ID:2;Title:Toto','2017-10-19 02:34:24'),(94,1,'Sunting','Pengguna','ID:2;Title:Toto','2017-10-19 02:58:31'),(95,1,'Sunting','Pengguna','ID:2;Title:Toto','2017-10-19 09:39:41'),(96,1,'Sunting','Pengguna','ID:3;Title:Dimas','2017-10-19 09:40:08'),(97,1,'Sunting','Pengguna','ID:3;Title:Dimas','2017-10-19 09:42:27'),(98,1,'Sunting','Pengguna','ID:3;Title:Dimas','2017-10-19 09:42:51'),(99,1,'Sunting','Pengguna','ID:3;Title:Dimas','2017-10-19 09:47:25'),(100,1,'Sunting','Pengguna','ID:2;Title:Toto','2017-10-20 02:18:01'),(101,1,'Sunting','Pengguna','ID:2;Title:Toto','2017-10-20 02:18:30'),(102,1,'Sunting','Pengguna','ID:3;Title:Dimas','2017-10-20 02:20:27'),(103,1,'Tambah','Pengguna','ID:4;Title:Donie','2017-10-20 02:23:02'),(104,1,'Tambah','Pengguna','ID:5;Title:Andre Silva','2017-10-20 02:25:53'),(105,1,'Tambah','pendidikan','ID:2;Title:SMP','2017-10-20 02:38:25'),(106,1,'Tambah','pendidikan','ID:3;Title:SMA','2017-10-20 02:38:43'),(107,1,'Tambah','pendidikan','ID:4;Title:Sarjana','2017-10-20 02:38:59'),(108,1,'Sunting','pendidikan','ID:;Title:Sarjana','2017-10-20 02:39:08'),(109,1,'Tambah','pendidikan','ID:5;Title:Maggister','2017-10-20 02:39:18'),(110,1,'Tambah','pendidikan','ID:6;Title:Doktor','2017-10-20 02:42:23'),(111,1,'Tambah','kawin','ID:3;Title:Duda','2017-10-20 02:42:48'),(112,1,'Sunting','kawin','ID:3;Title:Duda','2017-10-20 02:42:57'),(113,1,'Tambah','kawin','ID:4;Title:Janda','2017-10-20 02:43:03'),(114,1,'Tambah','jabatan','ID:3;Title:Manager','2017-10-20 02:43:28'),(115,1,'Tambah','jabatan','ID:4;Title:Division Manager','2017-10-20 02:43:40'),(116,1,'Tambah','jabatan','ID:5;Title:Presiden Direktur','2017-10-20 02:44:01'),(117,1,'Tambah','Pengguna','ID:6;Title:Sindy Fatma','2017-10-20 02:47:10'),(118,1,'Tambah','Pengguna','ID:7;Title:Fira Juwita','2017-10-20 02:50:21'),(119,1,'Tambah','Pengguna','ID:8;Title:Oki Setiawan','2017-10-20 02:52:38'),(120,1,'Tambah','Pengguna','ID:9;Title:Viva Nadia','2017-10-20 02:55:42'),(121,1,'Tambah','Pengguna','ID:10;Title:Anto Surboyono','2017-10-20 02:58:54'),(122,1,'Tambah','Pengguna','ID:11;Title:Arta Markadayana','2017-10-20 03:01:05'),(123,1,'Sunting','Pengguna','ID:4;Title:Donie','2017-10-20 04:05:28'),(124,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-10-20 04:05:52'),(125,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-10-20 04:07:48'),(126,1,'Sunting','Pengguna','ID:4;Title:Donie','2017-10-20 04:09:01'),(127,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-10-20 04:14:49'),(128,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-10-20 04:15:27'),(129,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-10-20 04:16:54'),(130,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-10-20 04:34:21'),(131,1,'Sunting','Pengguna','ID:7;Title:Fira Juwita','2017-10-20 04:36:50'),(132,1,'Sunting','Pengguna','ID:10;Title:Anto Surboyono','2017-10-20 04:37:13'),(133,1,'Sunting','Pengguna','ID:10;Title:Anto Surboyono','2017-10-20 06:36:53'),(134,1,'Sunting','Pengguna','ID:10;Title:Anto Surboyono','2017-10-20 06:45:42'),(135,1,'Sunting','Pengguna','ID:10;Title:Anto Surboyono','2017-10-20 06:58:37'),(136,1,'Sunting','Pengguna','ID:10;Title:Anto Surboyono','2017-10-20 07:01:58'),(137,1,'Sunting','Pengguna','ID:11;Title:Arta Markadayana','2017-10-20 07:04:02'),(138,1,'Sunting','Pengguna','ID:10;Title:Anto Surboyono','2017-10-20 07:11:18'),(139,1,'Sunting','Pengguna','ID:8;Title:Oki Setiawan','2017-10-20 07:34:50'),(140,1,'Sunting','Pengguna','ID:9;Title:Viva Nadia','2017-10-20 07:35:46'),(141,1,'Sunting','Pengguna','ID:3;Title:joko','2017-10-24 08:18:18'),(142,1,'Tambah','Pengguna','ID:7;Title:silva','2017-10-27 08:45:18'),(143,1,'Sunting','Pengguna','ID:7;Title:silva','2017-10-27 08:45:50'),(144,1,'Tambah','Pengguna','ID:8;Title:fira','2017-10-27 09:03:01'),(145,1,'Tambah','Pengguna','ID:9;Title:fatma','2017-10-27 09:11:12'),(146,1,'Tambah','Pengguna','ID:10;Title:arta','2017-10-27 09:13:42'),(147,1,'Tambah','Pengguna','ID:11;Title:oki','2017-10-27 09:15:49'),(148,1,'Tambah','Pengguna','ID:12;Title:dimas','2017-10-27 10:42:27'),(149,1,'Sunting','Pengguna','ID:12;Title:dimas','2017-10-27 11:25:08'),(150,1,'Sunting','Pengguna','ID:3;Title:Dimas Purba Wicaksana','2017-10-27 11:25:55'),(151,1,'Tambah','Pengguna','ID:12;Title:Dewo Sardju Saputro','2017-10-27 11:28:59'),(152,1,'Tambah','Pengguna','ID:13;Title:Rahman Ade Saputra','2017-10-27 11:30:57'),(153,1,'Tambah','Pengguna','ID:14;Title:Muhammad Nazi','2017-10-27 11:32:40'),(154,1,'Tambah','Pengguna','ID:15;Title:Isnur Tiyas','2017-10-27 11:34:14'),(155,1,'Tambah','Pengguna','ID:;Title:error  saat menambah employee','2017-11-02 07:25:52'),(156,1,'Tambah','Pengguna','ID:;Title:Internet Down, tdak bisa buka google','2017-11-03 07:37:32'),(157,1,'Tambah','Pengguna','ID:;Title:rtrrgrgggggggggggggggggggggggggggggggggggggg','2017-11-03 07:53:08'),(158,1,'Tambah','Pengguna','ID:;Title:Mouse rusak','2017-11-03 09:07:40'),(159,1,'Tambah','Pengguna','ID:;Title:test','2017-11-03 09:09:26'),(160,1,'Tambah','Pengguna','ID:;Title:grgegerg','2017-11-03 09:31:00'),(161,1,'Tambah','Pengguna','ID:;Title:keyborad rusak','2017-11-07 07:01:21'),(162,1,'Tambah','Pengguna','ID:;Title:internet g bs neh','2017-11-07 08:25:40'),(163,1,'Tambah','Pengguna','ID:;Title:hoooob','2017-11-07 08:35:51'),(164,1,'Tambah','Pengguna','ID:;Title:yyyyyyyyyyyyyyyyyyyooooooooooooooooooooooooo','2017-11-07 08:40:19'),(165,1,'Tambah','Pengguna','ID:;Title:jojojojojoj','2017-11-07 08:53:19'),(166,1,'Tambah','Pengguna','ID:;Title:vvvvvvvvvvvvvvv','2017-11-07 09:17:47'),(167,1,'Tambah','Pengguna','ID:;Title:<p>monitor blur</p>','2017-11-08 08:02:04'),(168,1,'Tambah','Pengguna','ID:;Title:<p>wowowowowowo</p>','2017-11-08 08:11:36'),(169,1,'Tambah','Pengguna','ID:;Title:<p>dododododd</p>','2017-11-08 08:13:52'),(170,1,'Tambah','Pengguna','ID:;Title:<p>nrp bentrok</p>','2017-11-08 08:20:26'),(171,1,'Tambah','Pengguna','ID:;Title:<p>error 404</p>','2017-11-09 03:54:43'),(172,1,'Tambah','Pengguna','ID:19;Title:<p>buka lapak down</p>','2017-11-09 07:47:35'),(173,1,'Tambah','Pengguna','ID:20;Title:<p>mouse rusak lagi lho</p>','2017-11-09 07:49:08'),(174,1,'Tambah','Pengguna','ID:21;Title:<p>och kkdghd ngbjefjyhwijrfihf&nbsp;</p>','2017-11-09 07:50:21'),(175,1,'Tambah','Pengguna','ID:22;Title:<p>Modul payroll tidak bisa&nbsp;</p>','2017-11-09 07:53:25'),(176,1,'Tambah','Pengguna','ID:23;Title:<p>modul user selslalu error,</p>\r\n<p>tolong sehgera diperbaiki</p>','2017-11-10 06:33:15');
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departement`
--

DROP TABLE IF EXISTS `departement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departement` (
  `departement_id` int(11) NOT NULL,
  `departement_name` varchar(50) NOT NULL,
  PRIMARY KEY (`departement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departement`
--

LOCK TABLES
`departement` WRITE;
/*!40000 ALTER TABLE `departement` DISABLE KEYS */;
INSERT INTO `
departement`
VALUES
  (1, 'Accounting'),
  (2, 'Finance'),
  (3, 'IT'),
  (4, 'Marketing'),
  (5, 'Sales'),
  (6, 'PD'),
  (7, 'QC'),
  (8, 'Engineering'),
  (9, 'Wharehouse'),
  (10, 'Procurement'),
  (11, 'HRD');
/*!40000 ALTER TABLE `departement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `division`
--

DROP TABLE IF EXISTS `division`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `division` (
  `division_id` int(11) NOT NULL AUTO_INCREMENT,
  `division_code` varchar(10) NOT NULL,
  `division_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`division_id`,`division_code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `division`
--

LOCK TABLES
`division` WRITE;
/*!40000 ALTER TABLE `division` DISABLE KEYS */;
INSERT INTO `
division`
VALUES
  (1, 'DF', 'FA-IT'),
  (2, 'DP', 'Operation'),
  (3, 'DL', 'Logistic');
/*!40000 ALTER TABLE `division` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `jabatan`
--

DROP TABLE IF EXISTS `jabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jabatan`
(
  `jabatan_id` int
(11) NOT NULL AUTO_INCREMENT,
  `jabatan_code` varchar
(10) NOT NULL,
  `jabatan_name` varchar
(150) DEFAULT NULL,
  PRIMARY KEY
(`jabatan_id`,`jabatan_code`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jabatan`
--

LOCK TABLES `jabatan` WRITE;
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
INSERT INTO `
jabatan`
VALUES
  (1, 'G1', 'Pegawai'),
  (2, 'G2', 'Supervisor'),
  (3, 'G3', 'Manager'),
  (4, 'G4', 'Division Manager'),
  (5, 'G5', 'Presiden Direktur');
/*!40000 ALTER TABLE `jabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kawin`
--

DROP TABLE IF EXISTS `kawin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kawin`
(
  `kawin_id` int
(11) NOT NULL AUTO_INCREMENT,
  `kawin_code` varchar
(10) NOT NULL,
  `kawin_name` varchar
(100) DEFAULT NULL,
  PRIMARY KEY
(`kawin_id`,`kawin_code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kawin`
--

LOCK TABLES `kawin` WRITE;
/*!40000 ALTER TABLE `kawin` DISABLE KEYS */;
INSERT INTO `
kawin`
VALUES
  (1, 'M', 'Menikah'),
  (2, 'S', 'Single'),
  (3, 'D', 'Duda'),
  (4, 'J', 'Janda');
/*!40000 ALTER TABLE `kawin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelamin`
--

DROP TABLE IF EXISTS `kelamin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelamin`
(
  `kelamin_id` int
(11) NOT NULL AUTO_INCREMENT,
  `kelamin_code` varchar
(45) NOT NULL,
  `kelamin_name` varchar
(45) DEFAULT NULL,
  PRIMARY KEY
(`kelamin_id`,`kelamin_code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelamin`
--

LOCK TABLES `kelamin` WRITE;
/*!40000 ALTER TABLE `kelamin` DISABLE KEYS */;
INSERT INTO `
kelamin`
VALUES
  (1, 'L', 'Laki-Laki'),
  (2, 'P', 'Perempuan');
/*!40000 ALTER TABLE `kelamin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pendidikan`
--

DROP TABLE IF EXISTS `pendidikan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pendidikan`
(
  `pendidikan_id` int
(11) NOT NULL AUTO_INCREMENT,
  `pendidikan_code` varchar
(10) NOT NULL,
  `pendidikan_name` varchar
(100) NOT NULL,
  PRIMARY KEY
(`pendidikan_id`,`pendidikan_code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pendidikan`
--

LOCK TABLES `pendidikan` WRITE;
/*!40000 ALTER TABLE `pendidikan` DISABLE KEYS */;
INSERT INTO `
pendidikan`
VALUES
  (1, '01', 'SD'),
  (2, '02', 'SMP'),
  (3, '03', 'SMA'),
  (4, '04', 'Sarjana'),
  (5, '05', 'Maggister'),
  (6, '06', 'Doktor');
/*!40000 ALTER TABLE `pendidikan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `religion`
--

DROP TABLE IF EXISTS `religion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `religion`
(
  `religion_id` int
(11) NOT NULL AUTO_INCREMENT,
  `religion_code` varchar
(10) NOT NULL,
  `religion_name` varchar
(100) DEFAULT NULL,
  PRIMARY KEY
(`religion_id`,`religion_code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `religion`
--

LOCK TABLES `religion` WRITE;
/*!40000 ALTER TABLE `religion` DISABLE KEYS */;
INSERT INTO `
religion`
VALUES
  (1, '01', 'Islam'),
  (2, '02', 'Kristen Katolik'),
  (3, '03', 'Kristen Protestan'),
  (4, '04', 'Budha'),
  (5, '05', 'Hindu'),
  (6, '06', 'Konghuchu');
/*!40000 ALTER TABLE `religion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status`
(
  `status_id` int
(11) NOT NULL AUTO_INCREMENT,
  `status_code` varchar
(10) NOT NULL,
  `status_name` varchar
(150) DEFAULT NULL,
  PRIMARY KEY
(`status_id`,`status_code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `
status`
VALUES
  (1, 'KK', 'Karyawan Kontrak'),
  (2, 'KT', 'Karyawan Tetap'),
  (3, 'KP', 'Karyawan Probation');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employe`
--

DROP TABLE IF EXISTS `employe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employe` (
  `employe_id` int(11) NOT NULL AUTO_INCREMENT,
  `employe_nrp` int(11) NOT NULL,
  `employe_name` varchar(255) DEFAULT NULL,
  `employe_born_date` timestamp NULL DEFAULT NULL,
  `employe_born_place` varchar(100) DEFAULT NULL,
  `employe_citizen` varchar(100) DEFAULT NULL,
  `employe_address` text,
  `employe_address2` text,
  `employe_city` varchar(100) DEFAULT NULL,
  `employe_golongan` varchar(100) DEFAULT NULL,
  `employe_ns` varchar(100) DEFAULT NULL,
  `employe_superior` int(11) DEFAULT '0',
  `employe_postal_code` varchar(10) DEFAULT NULL,
  `employe_email` varchar(255) DEFAULT NULL,
  `employe_phone` varchar(100) DEFAULT NULL,
  `employe_start_work_date` datetime DEFAULT NULL,
  `employe_permanent_date` datetime DEFAULT NULL,
  `employe_update` timestamp NULL DEFAULT NULL,
  `kelamin_kelamin_id` int(11) DEFAULT NULL,
  `religion_religion_id` int(11) DEFAULT NULL,
  `division_division_id` int(11) DEFAULT NULL,
  `departement_departement_id` int(11) DEFAULT NULL,
  `jabatan_jabatan_id` int(11) DEFAULT NULL,
  `pendidikan_pendidikan_id` int(11) DEFAULT NULL,
  `status_status_id` int(11) DEFAULT NULL,
  `kawin_kawin_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`employe_id`,`employe_nrp`),
  KEY `fk_employe_kelamin1_idx` (`kelamin_kelamin_id`),
  KEY `fk_employe_religion1_idx` (`religion_religion_id`),
  KEY `fk_employe_division1_idx` (`division_division_id`),
  KEY `fk_employe_departement1_idx` (`departement_departement_id`),
  KEY `fk_employe_jabatan1_idx` (`jabatan_jabatan_id`),
  KEY `fk_employe_pendidikan1_idx` (`pendidikan_pendidikan_id`),
  KEY `fk_employe_status1_idx` (`status_status_id`),
  KEY `fk_employe_kawin1_idx` (`kawin_kawin_id`),
  CONSTRAINT `fk_employe_departement1` FOREIGN KEY (`departement_departement_id`) REFERENCES `departement` (`departement_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_employe_division1` FOREIGN KEY (`division_division_id`) REFERENCES `division` (`division_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_employe_jabatan1` FOREIGN KEY (`jabatan_jabatan_id`) REFERENCES `jabatan` (`jabatan_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_employe_kawin1` FOREIGN KEY (`kawin_kawin_id`) REFERENCES `kawin` (`kawin_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_employe_kelamin1` FOREIGN KEY (`kelamin_kelamin_id`) REFERENCES `kelamin` (`kelamin_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_employe_pendidikan1` FOREIGN KEY (`pendidikan_pendidikan_id`) REFERENCES `pendidikan` (`pendidikan_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_employe_religion1` FOREIGN KEY (`religion_religion_id`) REFERENCES `religion` (`religion_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_employe_status1` FOREIGN KEY (`status_status_id`) REFERENCES `status` (`status_id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employe`
--

LOCK TABLES
`employe` WRITE;
/*!40000 ALTER TABLE `employe` DISABLE KEYS */;
INSERT INTO `
employe`
VALUES
  (1, 123456, 'Supriadi', '1990-09-29 17:00:00', 'Pringsewu', 'Indonesia', 'CItayam', 'Citayam', 'Depok', NULL, 'NS6', 0, '34174', 'adi@rumahcg.com', '08371716371', '2013-05-07 00:00:00', '2013-12-18 00:00:00', '2017-10-16 09:30:44', 1, 1, 1, 3, 2, 3, 2, 1),
  (2, 234567, 'Joko Toto', '1992-02-03 17:00:00', 'Jakarta', 'Indonesia', 'Jakarta timur', 'Jakarta timur', 'Jakarta', NULL, 'NS6', 0, '34174', 'toto@rumahcg.com', '08371716371', '2015-06-16 00:00:00', '2013-12-18 00:00:00', '2017-10-20 02:18:30', 2, 1, 2, 4, 1, 3, 1, 1),
  (3, 345678, 'Dimas Purba Wicaksana', '1990-09-29 17:00:00', 'Bogor', 'Indonesia', 'Bogor kota', 'Bogor kota', 'Bogor', NULL, 'NS5', 1, '34174', 'diamas@rumahcg.com', '08371716371', '2009-10-27 00:00:00', '2012-12-10 00:00:00', '2017-10-27 11:25:55', 2, 5, 1, 2, 2, 3, 2, 1),
  (4, 123442, 'Donie', '1990-07-06 17:00:00', 'Pamulang', 'Indonesia', 'jln  Rasun said', 'jln  Rasun said', 'Jakarta', NULL, 'NS3', 0, '46373', 'donie@rumahcg.com', '0837173252', '2017-06-07 00:00:00', '2017-09-05 00:00:00', '2017-10-20 04:09:01', 2, 1, 1, 1, 1, 3, 1, 1),
  (5, 25311, 'Andre Silva', '1987-06-03 17:00:00', 'Frankfurt', 'Germany', 'JLn Petogakan raya 34', 'JLn Petogakan raya 34', 'Jakarta', NULL, 'NS7', 1, '21311', 'andre@rumahcg.com', '0832634356', '2016-06-01 00:00:00', '2017-05-10 00:00:00', '2017-10-20 04:34:21', 2, 1, 1, 1, 1, 4, 1, 1),
  (6, 247211, 'Sindy Fatma', '1993-08-31 17:00:00', 'Pare-Pare', 'Indonesia', 'Cilodong', 'cilodong', 'Jakarta', NULL, 'NS3', 0, '37242', 'sindy@rumahcg.com', '0837173233', '2016-12-27 00:00:00', '2017-07-25 00:00:00', '2017-10-20 02:47:10', 2, 4, 2, 11, 1, 3, 2, 4),
  (7, 124356, 'Fira Juwita', '1984-11-01 17:00:00', 'Bogor', 'Indonesia', 'simpangan', 'simpangan', 'Depok', NULL, 'NS7', 1, '26331', 'fira@rumahcg.com', '083432522', '2007-11-17 00:00:00', '2008-02-19 00:00:00', '2017-10-20 04:36:50', 2, 1, 1, 1, 1, 5, 1, 1),
  (8, 133256, 'Oki Setiawan', '1990-05-04 17:00:00', 'Jongol', 'Indonesia', 'Cilengsi', 'Cilengsi', 'Bogor', NULL, 'NS3', 0, '46373', 'oki@rumahcg.com', '0875729264', '2017-10-20 00:00:00', '2017-10-20 00:00:00', '2017-10-20 07:34:50', 1, 6, 1, 2, 1, 4, 3, 3),
  (9, 97556, 'Viva Nadia', '1994-02-02 17:00:00', 'Jedah', 'Saudi Arbia', 'Jln Cakrawala', 'Jln Cakrawala', 'Depok', NULL, 'NS6', 1, '34174', 'nadia@rumahcg.com', '098442521256', '2013-11-28 00:00:00', '2015-07-21 00:00:00', '2017-10-20 07:35:46', 2, 1, 2, 11, 2, 5, 2, 1),
  (10, 761123, 'Anto Surboyono', '1980-02-12 17:00:00', 'makasar', 'Indonesia', 'jln Jambi jumbo jampo 3', 'jln Jambi jumbo jampo 3', 'Depok', NULL, 'NS9', 1, '46231', 'anto@rumahcg.com', '083755371', '2016-02-09 00:00:00', '2017-10-20 00:00:00', '2017-10-20 07:11:18', 1, 1, 2, 2, 5, 6, 2, 3),
  (11, 562242, 'Arta Markadayana', '1991-10-31 17:00:00', 'Jakarta', 'Indonesia', 'Singaparna 3', 'Singaparna 3', 'Depok', NULL, 'NS3', 0, '545251', 'arta@rumahcg.com', '0837666371', '2017-10-20 00:00:00', '2017-10-20 00:00:00', '2017-10-20 07:04:02', 1, 4, 1, 1, 1, 4, 1, 1),
  (12, 222222, 'Dewo Sardju Saputro', '1990-04-11 17:00:00', 'Jakarta', 'Indonesia', 'Cilengsi', 'Cilengsi', 'Bogor', NULL, 'NS6', 1, '46373', 'dewo@rumahcg.com', '0837155652', '2017-06-05 00:00:00', '2017-10-27 00:00:00', '2017-10-27 11:28:59', 1, 1, 1, 3, 3, 4, 2, 2),
  (13, 111111, 'Rahman Ade Saputra', '1990-09-28 17:00:00', 'Bogor', 'Indonesia', 'Cilengsi', 'Cilengsi', 'Bogor', NULL, 'NS6', 1, '21311', 'Rahman@rumahcg.com', '0837173252', '2017-01-02 00:00:00', '2017-10-27 00:00:00', '2017-10-27 11:30:57', 1, 1, 1, 3, 2, 4, 2, 1),
  (14, 444444, 'Muhammad Nazi', '2017-10-26 17:00:00', 'Jakarta', 'Indonesia', 'Cilengsi', 'Cilengsi', 'Jakarta', NULL, 'NS5', 1, '34174', 'nazi@rumahcg.com', '0832634356', '2016-11-24 00:00:00', '2017-10-27 00:00:00', '2017-10-27 11:32:40', 1, 1, 1, 3, 2, 5, 2, 2),
  (15, 55555, 'Isnur Tiyas', '1992-09-02 17:00:00', 'Jakarta', 'Indonesia', 'depok', 'depok', 'Depok', NULL, 'NS5', 1, '26331', 'tiyas@rumahcg.com', '0832634356', '2017-10-27 00:00:00', '2017-10-27 00:00:00', '2017-10-27 11:34:14', 2, 1, 1, 7, 2, 4, 2, 1);
/*!40000 ALTER TABLE `employe` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user`
(
  `user_id` int
(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar
(100) DEFAULT NULL,
  `user_password` varchar
(255) DEFAULT NULL,
  `user_email` varchar
(100) DEFAULT NULL,
  `user_created_date` timestamp NULL DEFAULT NULL,
  `user_last_update` timestamp NULL DEFAULT NULL,
  `user_deleted` tinyint
(1) DEFAULT NULL,
  `employe_id` int
(11) DEFAULT NULL,
  PRIMARY KEY
(`user_id`) USING BTREE,
  KEY `FK_employe_id_idx`
(`employe_id`),
  CONSTRAINT `FK_employe_id` FOREIGN KEY
(`employe_id`) REFERENCES `employe`
(`employe_id`) ON
DELETE NO ACTION ON
UPDATE NO ACTION
) ENGINE=InnoDB
AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user`
VALUES
  (1, 'adi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'adi@rumahcg.com', '2017-09-09 06:11:21', '2017-09-06 07:29:29', 0, 1),
  (2, 'iyas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'isnurtiyas@gmail.com', '2017-09-09 06:11:21', '2017-09-12 09:26:53', 0, 15),
  (3, 'joko', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'joko@rumahcg.com', '2017-09-09 06:11:21', '2017-10-24 08:18:18', 0, 2),
  (4, 'rahman', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'rahman@rumahcg.com', '2017-09-12 09:25:23', '2017-09-12 09:25:32', 0, 13),
  (5, 'dewo', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'dewo@rumahcg.com', '2017-09-12 09:39:59', '2017-09-12 09:39:59', 0, 12),
  (6, 'nazih', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'nazi@rumahcg.com', '2017-09-12 09:40:45', '2017-09-12 09:40:45', 0, 14),
  (7, 'silva', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'silva@gmail.com', '2017-10-27 08:45:18', '2017-10-27 08:45:50', 0, 5),
  (8, 'fira', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'fira@yahoo.com', '2017-10-27 09:03:01', '2017-10-27 09:03:01', 0, 7),
  (9, 'fatma', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'fatma@yahoo.com', '2017-10-27 09:11:12', '2017-10-27 09:11:12', 0, 6),
  (10, 'arta', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'arta@gmail.com', '2017-10-27 09:13:42', '2017-10-27 09:13:42', 0, 11),
  (11, 'oki', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'oki@ymail.com', '2017-10-27 09:15:49', '2017-10-27 09:15:49', 0, 8),
  (12, 'dimas', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'dimas@yahoo.com', '2017-10-27 10:42:27', '2017-10-27 11:25:08', 0, 3);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_role`
(
  `user_id` int
(11) NOT NULL AUTO_INCREMENT,
  `role_itservice` tinyint
(1) DEFAULT NULL,
  `role_master` tinyint
(1) DEFAULT NULL,
  `role_log` tinyint
(1) DEFAULT NULL,
  PRIMARY KEY
(`user_id`) USING BTREE,
  CONSTRAINT `FK_user_id` FOREIGN KEY
(`user_id`) REFERENCES `user`
(`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `
user_role`
VALUES
  (1, 1, 1, 1),
  (2, 1, 0, 1),
  (3, 1, 1, 0),
  (4, 1, 0, 1),
  (5, 1, 1, 0),
  (6, 1, 0, 0),
  (7, 1, 1, 0),
  (8, 0, 1, 0),
  (9, 1, 0, 1),
  (10, 1, 0, 0),
  (11, 1, 0, 0),
  (12, 1, 1, 0);
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Itservice_category`
--

DROP TABLE IF EXISTS `Itservice_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Itservice_category`
(
  `Itservice_category_id` int
(11) NOT NULL AUTO_INCREMENT,
  `Itservice_category_name` varchar
(200) DEFAULT NULL,
  PRIMARY KEY
(`Itservice_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Itservice_category`
--

LOCK TABLES `Itservice_category` WRITE;
/*!40000 ALTER TABLE `Itservice_category` DISABLE KEYS */;
INSERT INTO `
Itservice_category`
VALUES
  (1, 'SAP B1'),
  (2, 'Jaringan & Internet'),
  (3, 'Hardware'),
  (4, 'HRIS'),
  (5, 'OSS');
/*!40000 ALTER TABLE `Itservice_category` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `itservice`
--

DROP TABLE IF EXISTS `itservice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itservice`
(
  `itservice_id` int
(11) NOT NULL AUTO_INCREMENT,
  `itservice_date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON
UPDATE CURRENT_TIMESTAMP,
  `itservice_date_end
` timestamp NULL DEFAULT NULL,
  `itservice_status` varchar
(50) NOT NULL,
  `itservice_issue` text NOT NULL,
  `itservice_solution` text,
  `itservice_image` varchar
(255) DEFAULT NULL,
  `itservice_categories_id` int
(11) DEFAULT NULL,
  `employe_employe_id` int
(11) DEFAULT NULL,
  PRIMARY KEY
(`itservice_id`),
  KEY `fk_itservice_employe1_idx`
(`employe_employe_id`),
  KEY `fk_itservice_category1_idx`
(`itservice_categories_id`),
  CONSTRAINT `fk_itservice_category1` FOREIGN KEY
(`itservice_categories_id`) REFERENCES `Itservice_category`
(`Itservice_category_id`) ON
DELETE NO ACTION ON
UPDATE NO ACTION,
  CONSTRAINT `fk_itservice_employe1` FOREIGN KEY
(`employe_employe_id`) REFERENCES `employe`
(`employe_id`) ON
DELETE NO ACTION ON
UPDATE NO ACTION
) ENGINE=InnoDB
AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itservice`
--

LOCK TABLES
`itservice` WRITE;
/*!40000 ALTER TABLE `itservice` DISABLE KEYS */;
INSERT INTO `
itservice`
VALUES
  (1, '2017-11-01 17:00:00', NULL, 'Open', 'error  saat menambah employee', NULL, NULL, 5, 1),
  (2, '2017-11-02 17:00:00', NULL, 'Open', 'Internet Down, tdak bisa buka google', NULL, NULL, 2, 1),
  (3, '2017-11-02 17:00:00', NULL, 'Open', 'rtrrgrgggggggggggggggggggggggggggggggggggggg', NULL, NULL, 3, 1),
  (4, '2017-11-02 17:00:00', NULL, 'Open', 'Mouse rusak', NULL, NULL, 3, 1),
  (5, '2017-11-02 17:00:00', NULL, 'Open', 'test', NULL, NULL, 4, 1),
  (6, '2017-11-02 17:00:00', NULL, 'Open', 'grgegerg', NULL, NULL, 4, 1),
  (7, '2017-11-06 17:00:00', NULL, 'Open', 'keyborad rusak', NULL, '', 3, 1),
  (8, '2017-11-06 17:00:00', NULL, 'Open', 'internet g bs neh', NULL, NULL, 2, 1),
  (9, '2017-11-06 17:00:00', NULL, 'Open', 'hoooob', NULL, NULL, 1, 1),
  (10, '2017-11-06 17:00:00', NULL, 'Open', 'yyyyyyyyyyyyyyyyyyyooooooooooooooooooooooooo', NULL, NULL, 4, 1),
  (11, '2017-11-06 17:00:00', NULL, 'Open', 'jojojojojoj', NULL, NULL, 4, 1),
  (12, '2017-11-06 17:00:00', NULL, 'Open', 'vvvvvvvvvvvvvvv', NULL, NULL, 5, 1),
  (13, '2017-11-07 17:00:00', NULL, 'Open', '<p>monitor blur</p>', NULL, NULL, 3, 1),
  (14, '2017-11-07 17:00:00', NULL, 'Open', '<p>wowowowowowo</p>', NULL, NULL, 5, 1),
  (15, '2017-11-07 17:00:00', NULL, 'Open', '<p>dododododd</p>', NULL, NULL, 4, 1),
  (16, '2017-11-07 17:00:00', NULL, 'Open', '<p>nrp bentrok</p>', NULL, NULL, 4, 1),
  (17, '2017-11-08 17:00:00', NULL, 'Open', '<p>error 404</p>', NULL, NULL, 5, 1),
  (18, '2017-11-08 17:00:00', NULL, 'Open', '<p>buka lapak down</p>', NULL, NULL, 2, 1),
  (19, '2017-11-08 17:00:00', NULL, 'Open', '<p>buka lapak down</p>', NULL, 'http://192.168.100.10/oss/uploads/', 2, 1),
  (20, '2017-11-08 17:00:00', NULL, 'Open', '<p>mouse rusak lagi lho</p>', NULL, 'http://192.168.100.10/oss/uploads/', 3, 1),
  (21, '2017-11-08 17:00:00', NULL, 'Open', '<p>och kkdghd ngbjefjyhwijrfihf&nbsp;</p>', NULL, 'http://192.168.100.10/oss/uploads/Screenshot_from_2016-06-01_13-22-21.png', 3, 1),
  (22, '2017-11-08 17:00:00', NULL, 'Open', '<p>Modul payroll tidak bisa&nbsp;</p>', NULL, 'http://192.168.100.10/oss/uploads/itservice/Screenshot_from_2016-06-14_09-54-28.png', 4, 1),
  (23, '2017-11-10 06:33:14', NULL, 'Open', '<p>modul user selslalu error,</p>\r\n<p>tolong sehgera diperbaiki</p>', NULL, 'http://192.168.100.10/oss/uploads/itservice/Screenshot_from_2016-10-21_17-23-18.png', 1, 1);
/*!40000 ALTER TABLE `itservice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itservice_image`
--

DROP TABLE IF EXISTS `itservice_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itservice_image` (
  `itservice_image_id` int(11) NOT NULL AUTO_INCREMENT,
  `itservice_itservice_id` int(11) DEFAULT NULL,
  `itservice_image_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`itservice_image_id`),
  KEY `fk_itservice_image_itservice1_idx` (`itservice_itservice_id`),
  CONSTRAINT `fk_itservice_image_itservice1` FOREIGN KEY (`itservice_itservice_id`) REFERENCES `itservice` (`itservice_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itservice_image`
--

LOCK TABLES
`itservice_image` WRITE;
/*!40000 ALTER TABLE `itservice_image` DISABLE KEYS */;
INSERT INTO `
itservice_image`
VALUES
  (1, 19, ''),
  (2, 20, ''),
  (3, 21, 'Screenshot_from_2016-06-01_13-22-21.png'),
  (4, 22, 'Screenshot_from_2016-06-14_09-54-28.png'),
  (5, 23, 'Screenshot_from_2016-10-21_17-23-18.png');
/*!40000 ALTER TABLE `itservice_image` ENABLE KEYS */;
UNLOCK TABLES;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-15 11:01:08
