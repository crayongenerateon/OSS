CREATE DATABASE
IF NOT EXISTS `osstest` /*!40100 DEFAULT CHARACTER SET latin1 */;
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
CREATE TABLE `activity_log`
(
  `log_id` int
(11) NOT NULL AUTO_INCREMENT,
  `user_id` int
(11) DEFAULT NULL,
  `log_action` varchar
(255) DEFAULT NULL,
  `log_module` varchar
(100) DEFAULT NULL,
  `log_info` text,
  `log_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY
(`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

DROP TABLE IF EXISTS `departement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departement`
(
  `departement_id` int
(11) NOT NULL,
  `departement_name` varchar
(50) NOT NULL,
  PRIMARY KEY
(`departement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `division`
--

DROP TABLE IF EXISTS `division`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `division`
(
  `division_id` int
(11) NOT NULL AUTO_INCREMENT,
  `division_code` varchar
(10) NOT NULL,
  `division_name` varchar
(45) DEFAULT NULL,
  PRIMARY KEY
(`division_id`,`division_code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
  `employe_start_work_date` timestamp NULL DEFAULT NULL,
  `employe_permanent_date` timestamp NULL DEFAULT NULL,
  `employe_update` timestamp NULL DEFAULT NULL,
  `kelamin_kelamin_id` int(11) DEFAULT NULL,
  `religion_religion_id` int(11) DEFAULT NULL,
  `division_division_id` int(11) DEFAULT NULL,
  `departement_departement_id` int(11) DEFAULT NULL,
  `jabatan_jabatan_id` int(11) DEFAULT NULL,
  `pendidikan_pendidikan_id` int(11) DEFAULT NULL,
  `status_status_id` int(11) DEFAULT NULL,
  `kawin_kawin_id` int(11) DEFAULT NULL,
  `employe_images` varchar(255) DEFAULT NULL,
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `employe_images`
--

DROP TABLE IF EXISTS `employe_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employe_images` (
  `employe_images_id` int(11) NOT NULL AUTO_INCREMENT,
  `employe_employe_id` int(11) DEFAULT NULL,
  `employe_images_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`employe_images_id`),
  KEY `fk_employe_images_employe1_idx` (`employe_employe_id`),
  CONSTRAINT `fk_employe_images_employe1` FOREIGN KEY (`employe_employe_id`) REFERENCES `employe` (`employe_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
-- Table structure for table `itservice_image`
--

DROP TABLE IF EXISTS `itservice_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itservice_image`
(
  `itservice_image_id` int
(11) NOT NULL AUTO_INCREMENT,
  `itservice_itservice_id` int
(11) DEFAULT NULL,
  `itservice_image_path` varchar
(255) DEFAULT NULL,
  PRIMARY KEY
(`itservice_image_id`),
  KEY `fk_itservice_image_itservice1_idx`
(`itservice_itservice_id`),
  CONSTRAINT `fk_itservice_image_itservice1` FOREIGN KEY
(`itservice_itservice_id`) REFERENCES `itservice`
(`itservice_id`) ON
DELETE NO ACTION ON
UPDATE NO ACTION
) ENGINE=InnoDB
AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


DROP TABLE IF EXISTS `iventoryit_offifeapp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iventoryit_offifeapp`
(
  `iventoryit_offifeapp_id` int
(11) NOT NULL AUTO_INCREMENT,
  `iventoryit_offifeapp_name` varchar
(255) DEFAULT NULL,
  PRIMARY KEY
(`iventoryit_offifeapp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `iventoryit_os`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iventoryit_os`
(
  `iventoryit_os_id` int
(11) NOT NULL AUTO_INCREMENT,
  `iventoryit_os_name` varchar
(255) DEFAULT NULL,
  PRIMARY KEY
(`iventoryit_os_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `iventoryit_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iventoryit_status`
(
  `iventoryit_status_id` int
(11) NOT NULL AUTO_INCREMENT,
  `iventoryit_status_name` varchar
(255) DEFAULT NULL,
  PRIMARY KEY
(`iventoryit_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `iventoryit_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iventoryit_type`
(
  `iventoryit_type_id` int
(11) NOT NULL AUTO_INCREMENT,
  `iventoryit_type_name` varchar
(255) DEFAULT NULL,
  PRIMARY KEY
(`iventoryit_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `iventoryit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iventoryit`
(
  `iventoryit_id` int
(11) NOT NULL AUTO_INCREMENT,
  `iventoryit_hostname` varchar
(100) DEFAULT NULL,
  `iventoryit_IP` varchar
(100) DEFAULT NULL,
  `iventoryit_types_id` int
(11) DEFAULT NULL,
  `employe_employes_id` int
(11) DEFAULT NULL,
  `iventoryit_statuss_id` int
(11) DEFAULT NULL,
  `iventoryit_oss_id` int
(11) DEFAULT NULL,
  `iventoryit_offifeapps_id` int
(11) DEFAULT NULL,
  `iventoryit_ket` text,
  `iventoryit_last_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY
(`iventoryit_id`),
  KEY `fk_iventoryit_type1_idx`
(`iventoryit_types_id`),
  KEY `fk_employe_employe1_idx`
(`employe_employes_id`),
  KEY `fk_eiventoryit_status1_idx`
(`iventoryit_statuss_id`),
  KEY `fk_iventoryit_os1_idx`
(`iventoryit_oss_id`),
  KEY `fk_iventoryit_offifeapp1_idx`
(`iventoryit_offifeapps_id`),
  CONSTRAINT `fk_iventoryit_type1` FOREIGN KEY
(`iventoryit_types_id`) REFERENCES `iventoryit_type`
(`iventoryit_type_id`) ON
DELETE
SET NULL
ON
UPDATE SET NULL,
  CONSTRAINT `fk_employe_employe1` FOREIGN KEY
(`employe_employes_id`) REFERENCES `employe`
(`employe_id`) ON
DELETE
SET NULL
ON
UPDATE SET NULL,
  CONSTRAINT `fk_iventoryit_os1` FOREIGN KEY
(`iventoryit_oss_id`) REFERENCES `iventoryit_os`
(`iventoryit_os_id`) ON
DELETE
SET NULL
ON
UPDATE SET NULL,
  CONSTRAINT `fk_iventoryit_offifeapp1` FOREIGN KEY
(`iventoryit_offifeapps_id`) REFERENCES `iventoryit_offifeapp`
(`iventoryit_offifeapp_id`) ON
DELETE
SET NULL
ON
UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
