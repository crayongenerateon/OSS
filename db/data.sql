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
-- Dumping data for table `Itservice_category`
--

LOCK TABLES `Itservice_category` WRITE;
/*!40000 ALTER TABLE `Itservice_category` DISABLE KEYS */;
INSERT INTO `Itservice_category` VALUES (1,'SAP B1'),(2,'Jaringan & Internet'),(3,'Hardware'),(4,'HRIS'),(5,'OSS');
/*!40000 ALTER TABLE `Itservice_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` VALUES (1,1,'Sunting','Pengguna','ID:1;Title:adi','2017-09-05 02:49:34'),(2,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-05 21:23:17'),(3,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-05 21:23:56'),(4,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-05 21:27:02'),(5,1,'Sunting','Pengguna','ID:1;Title:adi','2017-09-05 21:27:16'),(6,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-05 23:44:41'),(7,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-05 23:45:05'),(8,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-05 23:58:45'),(9,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-05 23:58:56'),(10,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 00:05:13'),(11,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 00:06:09'),(12,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 00:06:29'),(13,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 00:16:51'),(14,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 00:18:35'),(15,1,'Sunting','Pengguna','ID:1;Title:adi','2017-09-06 00:25:40'),(16,1,'Sunting','Pengguna','ID:1;Title:adi','2017-09-06 00:28:38'),(17,1,'Sunting','Pengguna','ID:1;Title:adi','2017-09-06 00:29:29'),(18,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 00:37:34'),(19,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 00:40:37'),(20,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 00:41:25'),(21,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-06 00:50:36'),(22,1,'Tambah','Pengguna','ID:3;Title:joko','2017-09-08 23:11:22'),(23,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-08 23:22:42'),(24,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-08 23:22:58'),(25,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 00:17:12'),(26,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 00:29:44'),(27,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 00:30:00'),(28,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 00:31:18'),(29,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 00:33:55'),(30,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 00:34:57'),(31,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 00:35:50'),(32,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 00:37:17'),(33,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 00:44:57'),(34,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 02:14:42'),(35,1,'Sunting','Pengguna','ID:;Title:joko','2017-09-12 02:15:18'),(36,1,'Sunting','Pengguna','ID:3;Title:joko','2017-09-12 02:15:56'),(37,1,'Tambah','Pengguna','ID:4;Title:rahman','2017-09-12 02:25:24'),(38,1,'Sunting','Pengguna','ID:4;Title:rahman','2017-09-12 02:25:32'),(39,1,'Sunting','Pengguna','ID:2;Title:iyas','2017-09-12 02:26:53'),(40,1,'Tambah','Pengguna','ID:5;Title:dewo','2017-09-12 02:39:59'),(41,1,'Tambah','Pengguna','ID:6;Title:nazih','2017-09-12 02:40:45'),(42,1,'Tambah','Department','ID:5;Title:','2017-09-19 01:10:50'),(43,1,'Sunting','Pengguna','ID:3;Title:joko','2017-09-20 20:14:37'),(44,1,'Hapus','Departement','ID:5;Title:Marketing','2017-09-26 02:15:37'),(45,1,'Tambah','Religion','ID:1;Title:Islam','2017-10-04 02:21:54'),(46,1,'Tambah','Religion','ID:2;Title:Kristen Katolik','2017-10-04 02:22:12'),(47,1,'Tambah','Religion','ID:3;Title:Kristen Protestan','2017-10-04 02:22:23'),(48,1,'Tambah','Religion','ID:4;Title:Budha','2017-10-04 02:22:32'),(49,1,'Tambah','Religion','ID:5;Title:Hindu','2017-10-04 02:22:39'),(50,1,'Tambah','pendidikan','ID:;Title:SD','2017-10-05 19:54:07'),(51,1,'Tambah','pendidikan','ID:;Title:SD','2017-10-05 19:54:20'),(52,1,'Tambah','kelamin','ID:;Title:Laki-Laki','2017-10-05 19:57:13'),(53,NULL,'Tambah','kelamin','ID:;Title:Laki-Laki','2017-10-06 00:06:39'),(54,1,'Tambah','pendidikan','ID:;Title:SD','2017-10-06 00:07:00'),(55,1,'Tambah','Religion','ID:;Title:Konghuchu','2017-10-06 00:48:49'),(56,1,'Sunting','Religion','ID:5;Title:Hinduh','2017-10-06 01:03:15'),(57,1,'Tambah','Religion','ID:;Title:Konghuchu','2017-10-06 01:20:19'),(58,1,'Tambah','pendidikan','ID:;Title:SD','2017-10-06 01:21:22'),(59,1,'Tambah','pendidikan','ID:;Title:SD','2017-10-06 01:26:34'),(60,1,'Tambah','pendidikan','ID:;Title:SD','2017-10-06 01:27:03'),(61,1,'Tambah','pendidikan','ID:;Title:SD','2017-10-06 01:29:34'),(62,1,'Tambah','pendidikan','ID:;Title:SD','2017-10-06 01:31:37'),(63,1,'Tambah','Religion','ID:;Title:Konghuchu','2017-10-06 01:46:58'),(64,1,'Tambah','Religion','ID:;Title:Konghuchu','2017-10-06 01:55:20'),(65,1,'Tambah','Religion','ID:;Title:Konghuchu','2017-10-06 02:03:49'),(66,1,'Tambah','Religion','ID:;Title:Konghuchu','2017-10-06 02:05:01'),(67,1,'Sunting','Religion','ID:5;Title:Hindu','2017-10-06 02:06:39'),(68,1,'Tambah','Religion','ID:;Title:Konghuchu','2017-10-06 02:13:46'),(69,1,'Tambah','Religion','ID:;Title:Konghuchu','2017-10-09 19:38:31'),(70,1,'Tambah','kelamin','ID:;Title:Laki-Laki','2017-10-09 20:43:55'),(71,1,'Tambah','Religion','ID:6;Title:Konghuchu','2017-10-10 01:09:17'),(72,1,'Sunting','Religion','ID:1;Title:Islam','2017-10-10 01:09:28'),(73,1,'Sunting','Religion','ID:2;Title:Kristen Katolik','2017-10-10 01:09:34'),(74,1,'Sunting','Religion','ID:3;Title:Kristen Protestan','2017-10-10 01:09:39'),(75,1,'Sunting','Religion','ID:4;Title:Budha','2017-10-10 01:09:45'),(76,1,'Sunting','Religion','ID:5;Title:Hindu','2017-10-10 01:09:50'),(77,1,'Tambah','pendidikan','ID:1;Title:SD','2017-10-10 01:48:45'),(78,1,'Tambah','kelamin','ID:1;Title:Laki-Laki','2017-10-10 01:55:51'),(79,1,'Tambah','kelamin','ID:2;Title:Perempuan','2017-10-10 01:56:02'),(80,1,'Tambah','kawin','ID:1;Title:Menikah','2017-10-10 01:57:58'),(81,1,'Tambah','kawin','ID:2;Title:Single','2017-10-10 01:58:07'),(82,1,'Tambah','jabatan','ID:1;Title:Kontrak','2017-10-10 01:59:33'),(83,1,'Tambah','jabatan','ID:2;Title:Tetap','2017-10-10 01:59:45'),(84,1,'Sunting','jabatan','ID:1;Title:Pegawai','2017-10-10 02:02:09'),(85,1,'Sunting','jabatan','ID:2;Title:Supervisor','2017-10-10 02:02:28'),(86,1,'Tambah','division','ID:1;Title:FA-IT','2017-10-12 00:40:20'),(87,1,'Tambah','division','ID:2;Title:Operation','2017-10-12 00:40:43'),(88,1,'Tambah','division','ID:3;Title:Logistic','2017-10-12 00:41:23'),(89,1,'Tambah','status','ID:1;Title:Karyawan Kontrak','2017-10-12 00:48:05'),(90,1,'Tambah','status','ID:2;Title:Karyawan Tetap','2017-10-12 00:48:15'),(91,1,'Tambah','status','ID:3;Title:Karyawan Probation','2017-10-12 00:48:32'),(92,1,'Tambah','Pengguna','ID:3;Title:Supriadi','2017-10-16 02:31:50'),(93,1,'Sunting','Pengguna','ID:2;Title:Toto','2017-10-18 19:34:24'),(94,1,'Sunting','Pengguna','ID:2;Title:Toto','2017-10-18 19:58:31'),(95,1,'Sunting','Pengguna','ID:2;Title:Toto','2017-10-19 02:39:41'),(96,1,'Sunting','Pengguna','ID:3;Title:Dimas','2017-10-19 02:40:08'),(97,1,'Sunting','Pengguna','ID:3;Title:Dimas','2017-10-19 02:42:27'),(98,1,'Sunting','Pengguna','ID:3;Title:Dimas','2017-10-19 02:42:51'),(99,1,'Sunting','Pengguna','ID:3;Title:Dimas','2017-10-19 02:47:25'),(100,1,'Sunting','Pengguna','ID:2;Title:Toto','2017-10-19 19:18:01'),(101,1,'Sunting','Pengguna','ID:2;Title:Toto','2017-10-19 19:18:30'),(102,1,'Sunting','Pengguna','ID:3;Title:Dimas','2017-10-19 19:20:27'),(103,1,'Tambah','Pengguna','ID:4;Title:Donie','2017-10-19 19:23:02'),(104,1,'Tambah','Pengguna','ID:5;Title:Andre Silva','2017-10-19 19:25:53'),(105,1,'Tambah','pendidikan','ID:2;Title:SMP','2017-10-19 19:38:25'),(106,1,'Tambah','pendidikan','ID:3;Title:SMA','2017-10-19 19:38:43'),(107,1,'Tambah','pendidikan','ID:4;Title:Sarjana','2017-10-19 19:38:59'),(108,1,'Sunting','pendidikan','ID:;Title:Sarjana','2017-10-19 19:39:08'),(109,1,'Tambah','pendidikan','ID:5;Title:Maggister','2017-10-19 19:39:18'),(110,1,'Tambah','pendidikan','ID:6;Title:Doktor','2017-10-19 19:42:23'),(111,1,'Tambah','kawin','ID:3;Title:Duda','2017-10-19 19:42:48'),(112,1,'Sunting','kawin','ID:3;Title:Duda','2017-10-19 19:42:57'),(113,1,'Tambah','kawin','ID:4;Title:Janda','2017-10-19 19:43:03'),(114,1,'Tambah','jabatan','ID:3;Title:Manager','2017-10-19 19:43:28'),(115,1,'Tambah','jabatan','ID:4;Title:Division Manager','2017-10-19 19:43:40'),(116,1,'Tambah','jabatan','ID:5;Title:Presiden Direktur','2017-10-19 19:44:01'),(117,1,'Tambah','Pengguna','ID:6;Title:Sindy Fatma','2017-10-19 19:47:10'),(118,1,'Tambah','Pengguna','ID:7;Title:Fira Juwita','2017-10-19 19:50:21'),(119,1,'Tambah','Pengguna','ID:8;Title:Oki Setiawan','2017-10-19 19:52:38'),(120,1,'Tambah','Pengguna','ID:9;Title:Viva Nadia','2017-10-19 19:55:42'),(121,1,'Tambah','Pengguna','ID:10;Title:Anto Surboyono','2017-10-19 19:58:54'),(122,1,'Tambah','Pengguna','ID:11;Title:Arta Markadayana','2017-10-19 20:01:05'),(123,1,'Sunting','Pengguna','ID:4;Title:Donie','2017-10-19 21:05:28'),(124,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-10-19 21:05:52'),(125,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-10-19 21:07:48'),(126,1,'Sunting','Pengguna','ID:4;Title:Donie','2017-10-19 21:09:01'),(127,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-10-19 21:14:49'),(128,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-10-19 21:15:27'),(129,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-10-19 21:16:54'),(130,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-10-19 21:34:21'),(131,1,'Sunting','Pengguna','ID:7;Title:Fira Juwita','2017-10-19 21:36:50'),(132,1,'Sunting','Pengguna','ID:10;Title:Anto Surboyono','2017-10-19 21:37:13'),(133,1,'Sunting','Pengguna','ID:10;Title:Anto Surboyono','2017-10-19 23:36:53'),(134,1,'Sunting','Pengguna','ID:10;Title:Anto Surboyono','2017-10-19 23:45:42'),(135,1,'Sunting','Pengguna','ID:10;Title:Anto Surboyono','2017-10-19 23:58:37'),(136,1,'Sunting','Pengguna','ID:10;Title:Anto Surboyono','2017-10-20 00:01:58'),(137,1,'Sunting','Pengguna','ID:11;Title:Arta Markadayana','2017-10-20 00:04:02'),(138,1,'Sunting','Pengguna','ID:10;Title:Anto Surboyono','2017-10-20 00:11:18'),(139,1,'Sunting','Pengguna','ID:8;Title:Oki Setiawan','2017-10-20 00:34:50'),(140,1,'Sunting','Pengguna','ID:9;Title:Viva Nadia','2017-10-20 00:35:46'),(141,1,'Sunting','Pengguna','ID:3;Title:joko','2017-10-24 01:18:18'),(142,1,'Tambah','Pengguna','ID:7;Title:silva','2017-10-27 01:45:18'),(143,1,'Sunting','Pengguna','ID:7;Title:silva','2017-10-27 01:45:50'),(144,1,'Tambah','Pengguna','ID:8;Title:fira','2017-10-27 02:03:01'),(145,1,'Tambah','Pengguna','ID:9;Title:fatma','2017-10-27 02:11:12'),(146,1,'Tambah','Pengguna','ID:10;Title:arta','2017-10-27 02:13:42'),(147,1,'Tambah','Pengguna','ID:11;Title:oki','2017-10-27 02:15:49'),(148,1,'Tambah','Pengguna','ID:12;Title:dimas','2017-10-27 03:42:27'),(149,1,'Sunting','Pengguna','ID:12;Title:dimas','2017-10-27 04:25:08'),(150,1,'Sunting','Pengguna','ID:3;Title:Dimas Purba Wicaksana','2017-10-27 04:25:55'),(151,1,'Tambah','Pengguna','ID:12;Title:Dewo Sardju Saputro','2017-10-27 04:28:59'),(152,1,'Tambah','Pengguna','ID:13;Title:Rahman Ade Saputra','2017-10-27 04:30:57'),(153,1,'Tambah','Pengguna','ID:14;Title:Muhammad Nazi','2017-10-27 04:32:40'),(154,1,'Tambah','Pengguna','ID:15;Title:Isnur Tiyas','2017-10-27 04:34:14'),(155,1,'Tambah','Pengguna','ID:;Title:error  saat menambah employee','2017-11-02 00:25:52'),(156,1,'Tambah','Pengguna','ID:;Title:Internet Down, tdak bisa buka google','2017-11-03 00:37:32'),(157,1,'Tambah','Pengguna','ID:;Title:rtrrgrgggggggggggggggggggggggggggggggggggggg','2017-11-03 00:53:08'),(158,1,'Tambah','Pengguna','ID:;Title:Mouse rusak','2017-11-03 02:07:40'),(159,1,'Tambah','Pengguna','ID:;Title:test','2017-11-03 02:09:26'),(160,1,'Tambah','Pengguna','ID:;Title:grgegerg','2017-11-03 02:31:00'),(161,1,'Tambah','Pengguna','ID:;Title:keyborad rusak','2017-11-07 00:01:21'),(162,1,'Tambah','Pengguna','ID:;Title:internet g bs neh','2017-11-07 01:25:40'),(163,1,'Tambah','Pengguna','ID:;Title:hoooob','2017-11-07 01:35:51'),(164,1,'Tambah','Pengguna','ID:;Title:yyyyyyyyyyyyyyyyyyyooooooooooooooooooooooooo','2017-11-07 01:40:19'),(165,1,'Tambah','Pengguna','ID:;Title:jojojojojoj','2017-11-07 01:53:19'),(166,1,'Tambah','Pengguna','ID:;Title:vvvvvvvvvvvvvvv','2017-11-07 02:17:47'),(167,1,'Tambah','Pengguna','ID:;Title:<p>monitor blur</p>','2017-11-08 01:02:04'),(168,1,'Tambah','Pengguna','ID:;Title:<p>wowowowowowo</p>','2017-11-08 01:11:36'),(169,1,'Tambah','Pengguna','ID:;Title:<p>dododododd</p>','2017-11-08 01:13:52'),(170,1,'Tambah','Pengguna','ID:;Title:<p>nrp bentrok</p>','2017-11-08 01:20:26'),(171,1,'Tambah','Pengguna','ID:;Title:<p>error 404</p>','2017-11-08 20:54:43'),(172,1,'Tambah','Pengguna','ID:19;Title:<p>buka lapak down</p>','2017-11-09 00:47:35'),(173,1,'Tambah','Pengguna','ID:20;Title:<p>mouse rusak lagi lho</p>','2017-11-09 00:49:08'),(174,1,'Tambah','Pengguna','ID:21;Title:<p>och kkdghd ngbjefjyhwijrfihf&nbsp;</p>','2017-11-09 00:50:21'),(175,1,'Tambah','Pengguna','ID:22;Title:<p>Modul payroll tidak bisa&nbsp;</p>','2017-11-09 00:53:25'),(176,1,'Tambah','Pengguna','ID:23;Title:<p>modul user selslalu error,</p>\r\n<p>tolong sehgera diperbaiki</p>','2017-11-09 23:33:15'),(177,1,'Sunting','Pengguna','ID:22;Title:<p>Modul payroll tidak bisa&nbsp;</p>','2017-11-16 03:24:59'),(178,1,'Tambah','Pengguna','ID:1;Title:Laptop','2017-11-22 08:40:44'),(179,1,'Tambah','Pengguna','ID:2;Title:Printer','2017-11-22 08:42:12'),(180,1,'Tambah','Pengguna','ID:1;Title:Windows 7 Pro OEM','2017-11-22 08:57:44'),(181,1,'Tambah','Pengguna','ID:2;Title:Windows 7 Pro OLP','2017-11-22 08:57:56'),(182,1,'Tambah','Pengguna','ID:3;Title:Windows XP Pro OLP','2017-11-22 08:58:16'),(183,1,'Tambah','Pengguna','ID:1;Title:Microsoft Office 2010 Home & Busines OEM','2017-11-22 09:08:20'),(184,1,'Tambah','Pengguna','ID:2;Title:Ubuntu 16.04','2017-11-22 09:08:34'),(185,1,'Tambah','Pengguna','ID:1;Title:Sewa','2017-11-22 09:33:49'),(186,1,'Tambah','Pengguna','ID:2;Title:Rusak','2017-11-22 09:34:13'),(187,1,'Tambah','Pengguna','ID:3;Title:OK','2017-11-22 09:36:40'),(188,1,'Tambah','Pengguna','ID:3;Title:Desktop','2017-11-22 09:37:31'),(189,1,'Tambah','Pengguna','ID:4;Title:Ubuntu 16.04','2017-11-22 09:37:54'),(190,1,'Tambah','Pengguna','ID:5;Title:CentOS 5','2017-11-22 09:38:13'),(191,1,'Tambah','Pengguna','ID:6;Title:Ubuntu 16.04 Server','2017-11-22 09:38:27'),(192,1,'Tambah','Pengguna','ID:7;Title:Ubuntu 14.04 Server','2017-11-22 09:38:39'),(193,1,'Tambah','Pengguna','ID:1;Title:Pure254','2017-11-23 01:22:56'),(194,1,'Sunting','Pengguna','ID:1;Title:Pure254','2017-11-23 01:42:34'),(195,1,'Sunting','Pengguna','ID:1;Title:Pure254','2017-11-23 01:44:01'),(196,1,'Sunting','Pengguna','ID:1;Title:Pure254','2017-11-23 01:46:05'),(197,1,'Tambah','Pengguna','ID:2;Title:Pure54','2017-11-23 01:48:13'),(198,1,'Sunting','Pengguna','ID:2;Title:Pure54','2017-11-23 01:51:29'),(199,1,'Tambah','Pengguna','ID:3;Title:Pure216','2017-11-23 02:00:30'),(200,1,'Sunting','Pengguna','ID:2;Title:Pure54','2017-11-23 03:53:30'),(201,1,'Sunting','Pengguna','ID:2;Title:Pure54','2017-11-23 03:58:10'),(202,1,'Sunting','Pengguna','ID:2;Title:Pure54','2017-11-23 04:02:02'),(203,1,'Sunting','Pengguna','ID:2;Title:Pure54','2017-11-23 04:03:46'),(204,1,'Sunting','Pengguna','ID:2;Title:Pure54','2017-11-23 04:09:37'),(205,1,'Hapus','Pengguna','ID:2;Title:Pure54','2017-11-23 04:42:09'),(206,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-11-23 09:32:01'),(207,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-11-23 09:32:16'),(208,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-11-23 09:34:39'),(209,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-11-23 09:45:35'),(210,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-11-23 09:56:13'),(211,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-11-23 10:54:50'),(212,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-11-23 10:55:45'),(213,1,'Sunting','Pengguna','ID:1;Title:Supriadi','2017-11-24 01:04:39'),(214,1,'Sunting','Pengguna','ID:5;Title:Andre Silva','2017-11-24 01:47:59');
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `departement`
--

LOCK TABLES `departement` WRITE;
/*!40000 ALTER TABLE `departement` DISABLE KEYS */;
INSERT INTO `departement` VALUES (1,'Accounting'),(2,'Finance'),(3,'IT'),(4,'Marketing'),(5,'Sales'),(6,'PD'),(7,'QC'),(8,'Engineering'),(9,'Wharehouse'),(10,'Procurement'),(11,'HRD');
/*!40000 ALTER TABLE `departement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `division`
--

LOCK TABLES `division` WRITE;
/*!40000 ALTER TABLE `division` DISABLE KEYS */;
INSERT INTO `division` VALUES (1,'DF','FA-IT'),(2,'DP','Operation'),(3,'DL','Logistic');
/*!40000 ALTER TABLE `division` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `employe`
--

LOCK TABLES `employe` WRITE;
/*!40000 ALTER TABLE `employe` DISABLE KEYS */;
INSERT INTO `employe` VALUES (1,123456,'Supriadi','1990-09-28 17:00:00','Pringsewu','Indonesia','<p>CItayam</p>','<p>Citayam</p>','Depok',NULL,'NS6',0,'34174','adi@rumahcg.com','08371716371','2013-05-06 17:00:00','2013-12-17 17:00:00','2017-11-24 01:04:38',1,1,1,3,2,3,2,1,'http://192.168.100.254/osstest/uploads/employe/ubuntu_desktop_blue-wallpaper-1280x800.jpg'),(2,234567,'Joko Toto','1992-02-03 10:00:00','Jakarta','Indonesia','Jakarta timur','Jakarta timur','Jakarta',NULL,'NS6',0,'34174','toto@rumahcg.com','08371716371','2015-06-15 17:00:00','2013-12-17 17:00:00','2017-10-19 19:18:30',2,1,2,4,1,3,1,1,NULL),(3,345678,'Dimas Purba Wicaksana','1990-09-29 10:00:00','Bogor','Indonesia','Bogor kota','Bogor kota','Bogor',NULL,'NS5',1,'34174','diamas@rumahcg.com','08371716371','2009-10-26 17:00:00','2012-12-09 17:00:00','2017-10-27 04:25:55',2,5,1,2,2,3,2,1,NULL),(4,123442,'Donie','1990-07-06 10:00:00','Pamulang','Indonesia','jln  Rasun said','jln  Rasun said','Jakarta',NULL,'NS3',0,'46373','donie@rumahcg.com','0837173252','2017-06-06 17:00:00','2017-09-04 17:00:00','2017-10-19 21:09:01',2,1,1,1,1,3,1,1,NULL),(5,25311,'Andre Silva','1987-06-02 17:00:00','Frankfurt','Germany','<p>JLn Petogakan raya 34</p>','<p>JLn Petogakan raya 34</p>','Jakarta',NULL,'NS7',1,'21311','andre@rumahcg.com','0832634356','2016-05-31 17:00:00','2017-05-09 17:00:00','2017-11-24 01:47:59',2,1,1,1,1,4,1,1,'http://192.168.100.254/osstest/uploads/employe/andre-160x160.jpg'),(6,247211,'Sindy Fatma','1993-08-31 10:00:00','Pare-Pare','Indonesia','Cilodong','cilodong','Jakarta',NULL,'NS3',0,'37242','sindy@rumahcg.com','0837173233','2016-12-26 17:00:00','2017-07-24 17:00:00','2017-10-19 19:47:10',2,4,2,11,1,3,2,4,NULL),(7,124356,'Fira Juwita','1984-11-01 10:00:00','Bogor','Indonesia','simpangan','simpangan','Depok',NULL,'NS7',1,'26331','fira@rumahcg.com','083432522','2007-11-16 17:00:00','2008-02-18 17:00:00','2017-10-19 21:36:50',2,1,1,1,1,5,1,1,NULL),(8,133256,'Oki Setiawan','1990-05-04 10:00:00','Jongol','Indonesia','Cilengsi','Cilengsi','Bogor',NULL,'NS3',0,'46373','oki@rumahcg.com','0875729264','2017-10-19 17:00:00','2017-10-19 17:00:00','2017-10-20 00:34:50',1,6,1,2,1,4,3,3,NULL),(9,97556,'Viva Nadia','1994-02-02 10:00:00','Jedah','Saudi Arbia','Jln Cakrawala','Jln Cakrawala','Depok',NULL,'NS6',1,'34174','nadia@rumahcg.com','098442521256','2013-11-27 17:00:00','2015-07-20 17:00:00','2017-10-20 00:35:46',2,1,2,11,2,5,2,1,NULL),(10,761123,'Anto Surboyono','1980-02-12 10:00:00','makasar','Indonesia','jln Jambi jumbo jampo 3','jln Jambi jumbo jampo 3','Depok',NULL,'NS9',1,'46231','anto@rumahcg.com','083755371','2016-02-08 17:00:00','2017-10-19 17:00:00','2017-10-20 00:11:18',1,1,2,2,5,6,2,3,NULL),(11,562242,'Arta Markadayana','1991-10-31 10:00:00','Jakarta','Indonesia','Singaparna 3','Singaparna 3','Depok',NULL,'NS3',0,'545251','arta@rumahcg.com','0837666371','2017-10-19 17:00:00','2017-10-19 17:00:00','2017-10-20 00:04:02',1,4,1,1,1,4,1,1,NULL),(12,222222,'Dewo Sardju Saputro','1990-04-11 10:00:00','Jakarta','Indonesia','Cilengsi','Cilengsi','Bogor',NULL,'NS6',1,'46373','dewo@rumahcg.com','0837155652','2017-06-04 17:00:00','2017-10-26 17:00:00','2017-10-27 04:28:59',1,1,1,3,3,4,2,2,NULL),(13,111111,'Rahman Ade Saputra','1990-09-28 10:00:00','Bogor','Indonesia','Cilengsi','Cilengsi','Bogor',NULL,'NS6',1,'21311','Rahman@rumahcg.com','0837173252','2017-01-01 17:00:00','2017-10-26 17:00:00','2017-10-27 04:30:57',1,1,1,3,2,4,2,1,NULL),(14,444444,'Muhammad Nazi','2017-10-26 10:00:00','Jakarta','Indonesia','Cilengsi','Cilengsi','Jakarta',NULL,'NS5',1,'34174','nazi@rumahcg.com','0832634356','2016-11-23 17:00:00','2017-10-26 17:00:00','2017-10-27 04:32:40',1,1,1,3,2,5,2,2,NULL),(15,55555,'Isnur Tiyas','1992-09-02 10:00:00','Jakarta','Indonesia','depok','depok','Depok',NULL,'NS5',1,'26331','tiyas@rumahcg.com','0832634356','2017-10-26 17:00:00','2017-10-26 17:00:00','2017-10-27 04:34:14',2,1,1,7,2,4,2,1,NULL);
/*!40000 ALTER TABLE `employe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `employe_images`
--

LOCK TABLES `employe_images` WRITE;
/*!40000 ALTER TABLE `employe_images` DISABLE KEYS */;
INSERT INTO `employe_images` VALUES (9,5,'loginHP1.png'),(10,1,'ubuntu_desktop_blue-wallpaper-1280x800.jpg'),(11,5,'andre-160x160.jpg');
/*!40000 ALTER TABLE `employe_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `itservice`
--

LOCK TABLES `itservice` WRITE;
/*!40000 ALTER TABLE `itservice` DISABLE KEYS */;
INSERT INTO `itservice` VALUES (1,'2017-11-16 02:10:40',NULL,'error  saat menambah employee',NULL,NULL,1,5,1),(2,'2017-11-16 02:10:40',NULL,'Internet Down, tdak bisa buka google',NULL,NULL,1,2,1),(3,'2017-11-16 02:10:40',NULL,'rtrrgrgggggggggggggggggggggggggggggggggggggg',NULL,NULL,1,3,1),(4,'2017-11-16 02:10:40',NULL,'Mouse rusak',NULL,NULL,1,3,1),(5,'2017-11-16 02:10:40',NULL,'test',NULL,NULL,1,4,1),(6,'2017-11-16 02:10:40',NULL,'grgegerg',NULL,NULL,1,4,1),(7,'2017-11-16 02:10:40',NULL,'keyborad rusak',NULL,'',1,3,1),(8,'2017-11-16 02:10:40',NULL,'internet g bs neh',NULL,NULL,1,2,1),(9,'2017-11-16 02:10:40',NULL,'hoooob',NULL,NULL,1,1,1),(10,'2017-11-16 02:10:40',NULL,'yyyyyyyyyyyyyyyyyyyooooooooooooooooooooooooo',NULL,NULL,1,4,1),(11,'2017-11-16 02:10:40',NULL,'jojojojojoj',NULL,NULL,1,4,1),(12,'2017-11-16 02:10:40',NULL,'vvvvvvvvvvvvvvv',NULL,NULL,1,5,1),(13,'2017-11-16 02:10:40',NULL,'<p>monitor blur</p>',NULL,NULL,1,3,1),(14,'2017-11-16 02:10:40',NULL,'<p>wowowowowowo</p>',NULL,NULL,1,5,1),(15,'2017-11-16 02:10:40',NULL,'<p>dododododd</p>',NULL,NULL,1,4,1),(16,'2017-11-16 02:10:40',NULL,'<p>nrp bentrok</p>',NULL,NULL,1,4,1),(17,'2017-11-16 02:10:40',NULL,'<p>error 404</p>',NULL,NULL,1,5,1),(18,'2017-11-16 02:10:40',NULL,'<p>buka lapak down</p>',NULL,NULL,1,2,1),(19,'2017-11-16 02:10:40',NULL,'<p>buka lapak down</p>',NULL,'http://192.168.100.10/oss/uploads/',1,2,1),(20,'2017-11-16 02:10:40',NULL,'<p>mouse rusak lagi lho</p>',NULL,'http://192.168.100.10/oss/uploads/',1,3,1),(21,'2017-11-16 02:10:40',NULL,'<p>och kkdghd ngbjefjyhwijrfihf&nbsp;</p>',NULL,'http://192.168.100.10/oss/uploads/Screenshot_from_2016-06-01_13-22-21.png',1,3,1),(22,'2017-11-16 03:24:59',NULL,'<p>Modul payroll tidak bisa&nbsp;</p>',NULL,'http://localhost/oss/uploads/itservice/',1,4,1),(23,'2017-11-16 03:49:58',NULL,'<p>modul user selslalu error,</p>\r\n<p>tolong sehgera diperbaiki</p>',NULL,'http://192.168.100.254/oss/uploads/itservice/Screenshot_from_2016-10-21_17-23-18.png',1,1,1);
/*!40000 ALTER TABLE `itservice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `itservice_image`
--

LOCK TABLES `itservice_image` WRITE;
/*!40000 ALTER TABLE `itservice_image` DISABLE KEYS */;
INSERT INTO `itservice_image` VALUES (1,19,''),(2,20,''),(3,21,'Screenshot_from_2016-06-01_13-22-21.png'),(4,22,'Screenshot_from_2016-06-14_09-54-28.png'),(5,23,'Screenshot_from_2016-10-21_17-23-18.png'),(6,22,'');
/*!40000 ALTER TABLE `itservice_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `itservice_status`
--

LOCK TABLES `itservice_status` WRITE;
/*!40000 ALTER TABLE `itservice_status` DISABLE KEYS */;
INSERT INTO `itservice_status` VALUES (1,'Open'),(2,'On Going'),(3,'Pending'),(4,'Solved');
/*!40000 ALTER TABLE `itservice_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `iventoryit`
--

LOCK TABLES `iventoryit` WRITE;
/*!40000 ALTER TABLE `iventoryit` DISABLE KEYS */;
INSERT INTO `iventoryit` VALUES (1,'Pure254','192.168.100.254',3,1,3,2,2,'<p>COre i5 RAM 4 GB, HDD 500GB</p>','2017-11-23 01:46:05'),(3,'Pure216','192.168.100.216',1,7,1,1,1,'<p>Core i5 1,9 GHz, 4 GB RAM, 500 GB HDD</p>','2017-11-23 02:00:30');
/*!40000 ALTER TABLE `iventoryit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `iventoryit_officeapp`
--

LOCK TABLES `iventoryit_officeapp` WRITE;
/*!40000 ALTER TABLE `iventoryit_officeapp` DISABLE KEYS */;
INSERT INTO `iventoryit_officeapp` VALUES (1,'Microsoft Office 2010 Home & Busines OEM'),(2,'Open Office');
/*!40000 ALTER TABLE `iventoryit_officeapp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `iventoryit_os`
--

LOCK TABLES `iventoryit_os` WRITE;
/*!40000 ALTER TABLE `iventoryit_os` DISABLE KEYS */;
INSERT INTO `iventoryit_os` VALUES (1,'Windows 7 Pro OEM'),(2,'Windows 7 Pro OLP'),(3,'Windows XP Pro OLP'),(4,'Ubuntu 16.04'),(5,'CentOS 5'),(6,'Ubuntu 16.04 Server'),(7,'Ubuntu 14.04 Server');
/*!40000 ALTER TABLE `iventoryit_os` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `iventoryit_status`
--

LOCK TABLES `iventoryit_status` WRITE;
/*!40000 ALTER TABLE `iventoryit_status` DISABLE KEYS */;
INSERT INTO `iventoryit_status` VALUES (1,'Sewa'),(2,'Rusak'),(3,'OK');
/*!40000 ALTER TABLE `iventoryit_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `iventoryit_type`
--

LOCK TABLES `iventoryit_type` WRITE;
/*!40000 ALTER TABLE `iventoryit_type` DISABLE KEYS */;
INSERT INTO `iventoryit_type` VALUES (1,'Laptop'),(2,'Printer'),(3,'Desktop');
/*!40000 ALTER TABLE `iventoryit_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `jabatan`
--

LOCK TABLES `jabatan` WRITE;
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
INSERT INTO `jabatan` VALUES (1,'G1','Pegawai'),(2,'G2','Supervisor'),(3,'G3','Manager'),(4,'G4','Division Manager'),(5,'G5','Presiden Direktur');
/*!40000 ALTER TABLE `jabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `kawin`
--

LOCK TABLES `kawin` WRITE;
/*!40000 ALTER TABLE `kawin` DISABLE KEYS */;
INSERT INTO `kawin` VALUES (1,'M','Menikah'),(2,'S','Single'),(3,'D','Duda'),(4,'J','Janda');
/*!40000 ALTER TABLE `kawin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `kelamin`
--

LOCK TABLES `kelamin` WRITE;
/*!40000 ALTER TABLE `kelamin` DISABLE KEYS */;
INSERT INTO `kelamin` VALUES (1,'L','Laki-Laki'),(2,'P','Perempuan');
/*!40000 ALTER TABLE `kelamin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pendidikan`
--

LOCK TABLES `pendidikan` WRITE;
/*!40000 ALTER TABLE `pendidikan` DISABLE KEYS */;
INSERT INTO `pendidikan` VALUES (1,'01','SD'),(2,'02','SMP'),(3,'03','SMA'),(4,'04','Sarjana'),(5,'05','Maggister'),(6,'06','Doktor');
/*!40000 ALTER TABLE `pendidikan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `religion`
--

LOCK TABLES `religion` WRITE;
/*!40000 ALTER TABLE `religion` DISABLE KEYS */;
INSERT INTO `religion` VALUES (1,'01','Islam'),(2,'02','Kristen Katolik'),(3,'03','Kristen Protestan'),(4,'04','Budha'),(5,'05','Hindu'),(6,'06','Konghuchu');
/*!40000 ALTER TABLE `religion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'KK','Karyawan Kontrak'),(2,'KT','Karyawan Tetap'),(3,'KP','Karyawan Probation');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'adi','40bd001563085fc35165329ea1ff5c5ecbdbbeef','adi@rumahcg.com','2017-09-08 23:11:21','2017-09-06 00:29:29',0,1),(2,'iyas','40bd001563085fc35165329ea1ff5c5ecbdbbeef','isnurtiyas@gmail.com','2017-09-08 23:11:21','2017-09-12 02:26:53',0,15),(3,'joko','7c4a8d09ca3762af61e59520943dc26494f8941b','joko@rumahcg.com','2017-09-08 23:11:21','2017-10-24 01:18:18',0,2),(4,'rahman','7c4a8d09ca3762af61e59520943dc26494f8941b','rahman@rumahcg.com','2017-09-12 02:25:23','2017-09-12 02:25:32',0,13),(5,'dewo','7c4a8d09ca3762af61e59520943dc26494f8941b','dewo@rumahcg.com','2017-09-12 02:39:59','2017-09-12 02:39:59',0,12),(6,'nazih','7c4a8d09ca3762af61e59520943dc26494f8941b','nazi@rumahcg.com','2017-09-12 02:40:45','2017-09-12 02:40:45',0,14),(7,'silva','7c4a8d09ca3762af61e59520943dc26494f8941b','silva@gmail.com','2017-10-27 01:45:18','2017-10-27 01:45:50',0,5),(8,'fira','7c4a8d09ca3762af61e59520943dc26494f8941b','fira@yahoo.com','2017-10-27 02:03:01','2017-10-27 02:03:01',0,7),(9,'fatma','7c4a8d09ca3762af61e59520943dc26494f8941b','fatma@yahoo.com','2017-10-27 02:11:12','2017-10-27 02:11:12',0,6),(10,'arta','7c4a8d09ca3762af61e59520943dc26494f8941b','arta@gmail.com','2017-10-27 02:13:42','2017-10-27 02:13:42',0,11),(11,'oki','7c4a8d09ca3762af61e59520943dc26494f8941b','oki@ymail.com','2017-10-27 02:15:49','2017-10-27 02:15:49',0,8),(12,'dimas','7c4a8d09ca3762af61e59520943dc26494f8941b','dimas@yahoo.com','2017-10-27 03:42:27','2017-10-27 04:25:08',0,3);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` VALUES (1,1,1,1,1,1,1),(2,1,0,1,NULL,NULL,NULL),(3,1,1,0,NULL,NULL,NULL),(4,1,0,1,NULL,NULL,NULL),(5,1,1,0,NULL,NULL,NULL),(6,1,0,0,NULL,NULL,NULL),(7,1,1,0,NULL,NULL,NULL),(8,0,1,0,NULL,NULL,NULL),(9,1,0,1,NULL,NULL,NULL),(10,1,0,0,NULL,NULL,NULL),(11,1,0,0,NULL,NULL,NULL),(12,1,1,0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-24 10:25:24
