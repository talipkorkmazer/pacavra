-- MySQL dump 10.13  Distrib 8.0.31, for macos13.0 (arm64)
--
-- Host: localhost    Database: pacavra
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_rows` (
  `id` int unsigned DEFAULT NULL,
  `data_type_id` int unsigned DEFAULT NULL,
  `field` tinytext,
  `type` tinytext,
  `display_name` tinytext,
  `required` tinyint DEFAULT NULL,
  `browse` tinyint DEFAULT NULL,
  `read` tinyint DEFAULT NULL,
  `edit` tinyint DEFAULT NULL,
  `add` tinyint DEFAULT NULL,
  `delete` tinyint DEFAULT NULL,
  `details` mediumtext,
  `order` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,NULL,1),(2,1,'name','text','Name',1,1,1,1,1,1,NULL,2),(3,1,'email','text','Email',1,1,1,1,1,1,NULL,3),(4,1,'password','password','Password',1,0,0,1,1,0,NULL,4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,NULL,5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,NULL,8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}',10),(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,NULL,12),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Name',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(17,3,'name','text','Name',1,1,1,1,1,1,NULL,2),(18,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(19,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(20,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),(21,1,'role_id','text','Role',1,1,1,1,1,1,NULL,9),(22,4,'id','number','Id',1,1,0,0,0,0,'{}',1),(23,4,'name','text','Name',1,1,1,1,1,1,'{}',2),(24,4,'slug','text','Slug',1,1,1,1,1,1,'{}',3),(25,4,'description','text','Description',0,1,1,1,1,1,'{}',4),(26,4,'image','image','Image',0,1,1,1,1,1,'{}',5),(27,4,'created_at','timestamp','Created At',0,1,0,0,0,0,'{}',6),(28,4,'updated_at','timestamp','Updated At',0,1,0,0,0,0,'{}',7),(29,4,'deleted_at','timestamp','Deleted At',0,0,0,0,0,0,'{}',8),(40,8,'id','number','Id',1,0,0,0,0,0,'{}',1),(41,8,'name','text','Name',1,1,1,1,1,1,'{}',2),(42,8,'slug','text','Slug',1,1,1,1,1,1,'{}',3),(43,8,'description','text','Description',0,1,1,1,1,1,'{}',4),(44,8,'image','image','Image',0,1,1,1,1,1,'{}',5),(45,8,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',6),(46,8,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',7),(47,8,'deleted_at','timestamp','Deleted At',0,0,0,0,0,0,'{}',8),(48,9,'id','number','Id',1,0,0,0,0,0,'{}',1),(49,9,'name','text','Name',1,1,1,1,1,1,'{}',3),(50,9,'slug','text','Slug',1,1,1,1,1,1,'{}',4),(51,9,'description','text','Description',0,1,1,1,1,1,'{}',5),(52,9,'images','multiple_images','Images',0,1,1,1,1,1,'{}',6),(53,9,'fabric_category_id','text','Fabric Category Id',1,1,1,1,1,1,'{}',2),(54,9,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',7),(55,9,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',8),(56,9,'deleted_at','timestamp','Deleted At',0,0,0,0,0,0,'{}',9),(58,9,'fabric_belongsto_fabric_category_relationship','relationship','fabric_categories',0,1,1,1,1,1,'{\"model\":\"App\\\\FabricCategory\",\"table\":\"fabric_categories\",\"type\":\"belongsTo\",\"column\":\"fabric_category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',11),(60,9,'fabric_belongstomany_fabric_collection_relationship','relationship','fabric_collections',0,1,1,1,1,1,'{\"model\":\"App\\\\FabricCollection\",\"table\":\"fabric_collections\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"fabrics_collections\",\"pivot\":\"1\",\"taggable\":\"0\"}',12),(61,8,'fabric_collection_belongstomany_fabric_relationship','relationship','fabrics',0,0,0,0,0,0,'{\"model\":\"App\\\\Fabric\",\"table\":\"fabrics\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"fabrics_collections\",\"pivot\":\"1\",\"taggable\":\"0\"}',9);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_types` (
  `id` int DEFAULT NULL,
  `name` tinytext,
  `slug` tinytext,
  `display_name_singular` tinytext,
  `display_name_plural` tinytext,
  `icon` tinytext,
  `model_name` tinytext,
  `policy_name` tinytext,
  `controller` tinytext,
  `description` tinytext,
  `generate_permissions` tinyint DEFAULT NULL,
  `server_side` tinyint DEFAULT NULL,
  `details` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController','',1,0,NULL,'2023-01-18 15:56:17','2023-01-18 15:56:17'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2023-01-18 15:56:17','2023-01-18 15:56:17'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController','',1,0,NULL,'2023-01-18 15:56:17','2023-01-18 15:56:17'),(4,'fabric_categories','fabric-categories','Kumaş Kategorisi','Kumaş Kategorileri','voyager-company','App\\FabricCategory',NULL,NULL,NULL,1,0,'{\"order_column\":\"id\",\"order_display_column\":\"name\",\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-01-18 16:06:43','2023-01-18 16:12:00'),(8,'fabric_collections','fabric-collections','Fabric Collection','Fabric Collections','voyager-receipt','App\\FabricCollection',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-01-18 17:52:20','2023-01-18 18:15:50'),(9,'fabrics','fabrics','Fabric','Fabrics','voyager-news','App\\Fabric',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-01-18 17:55:00','2023-01-18 18:16:01');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fabric_categories`
--

DROP TABLE IF EXISTS `fabric_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fabric_categories` (
  `id` bigint DEFAULT NULL,
  `name` tinytext,
  `slug` tinytext,
  `description` text,
  `image` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fabric_categories`
--

LOCK TABLES `fabric_categories` WRITE;
/*!40000 ALTER TABLE `fabric_categories` DISABLE KEYS */;
INSERT INTO `fabric_categories` VALUES (2,'Döşemelik Kumaş','dosemelik-kumas','Sit fugiat voluptat','fabric-categories/January2023/bdl7OLiKQKtYTiigtGeb.jpg','2023-01-19 15:26:06','2023-01-19 15:26:31',NULL);
/*!40000 ALTER TABLE `fabric_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fabric_collections`
--

DROP TABLE IF EXISTS `fabric_collections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fabric_collections` (
  `id` bigint DEFAULT NULL,
  `name` tinytext,
  `slug` tinytext,
  `description` text,
  `image` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fabric_collections`
--

LOCK TABLES `fabric_collections` WRITE;
/*!40000 ALTER TABLE `fabric_collections` DISABLE KEYS */;
INSERT INTO `fabric_collections` VALUES (6,'Lambre','lambre',NULL,'fabric-collections/January2023/pS47vQRreukVPe0clOCD.jpg','2023-01-23 08:42:49','2023-01-23 08:42:49',NULL),(7,'Paradiso','paradiso',NULL,'fabric-collections/January2023/SjJ1e6hvyRXMbDF1ahWK.jpg','2023-01-23 09:35:32','2023-01-23 09:35:32',NULL);
/*!40000 ALTER TABLE `fabric_collections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fabrics`
--

DROP TABLE IF EXISTS `fabrics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fabrics` (
  `id` bigint DEFAULT NULL,
  `name` tinytext,
  `slug` tinytext,
  `description` text,
  `images` longtext,
  `fabric_category_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fabrics`
--

LOCK TABLES `fabrics` WRITE;
/*!40000 ALTER TABLE `fabrics` DISABLE KEYS */;
INSERT INTO `fabrics` VALUES (7,'Verdi-246','verdi-246',NULL,'[\"fabrics\\/January2023\\/hkZTaSFLOChU4kKjSfWj.jpg\"]',2,'2023-01-23 08:43:44','2023-01-23 08:43:44',NULL),(8,'Verdi-229','verdi-229',NULL,'[\"fabrics\\/January2023\\/WtCFCCQrMSMdsyJbg6VJ.jpg\"]',2,'2023-01-23 08:44:46','2023-01-23 08:44:46',NULL),(9,'1','1',NULL,'[\"fabrics\\/January2023\\/Mw5YdCVsSnSTzFBAjRjN.jpg\"]',2,'2023-01-23 08:50:47','2023-01-23 08:50:47',NULL),(10,'2','2',NULL,'[\"fabrics\\/January2023\\/gIr7piqn9FnlRRHUoprE.jpg\"]',2,'2023-01-23 08:51:11','2023-01-23 08:51:11',NULL),(11,'3','3',NULL,'[\"fabrics\\/January2023\\/IOAUjOsMiklOTR1kUSDP.jpg\"]',2,'2023-01-23 08:51:43','2023-01-23 08:51:43',NULL),(12,'4','4',NULL,'[\"fabrics\\/January2023\\/n5oGgvlniSay8EXrD0s1.jpg\"]',2,'2023-01-23 09:14:27','2023-01-23 09:14:27',NULL),(13,'5','5',NULL,'[\"fabrics\\/January2023\\/evzZ6gBOjtCQsMFNuodA.jpg\"]',2,'2023-01-23 09:15:00','2023-01-23 09:15:00',NULL),(14,'6','6',NULL,'[\"fabrics\\/January2023\\/itXRQPfPEBSnRsvDaKSM.jpg\"]',2,'2023-01-23 09:15:43','2023-01-23 09:15:43',NULL),(15,'7','7',NULL,'[\"fabrics\\/January2023\\/4GZSSLxdwD2XpzJ4Kqze.jpg\"]',2,'2023-01-23 09:16:13','2023-01-23 09:16:13',NULL),(16,'8','8',NULL,'[\"fabrics\\/January2023\\/0WOlRdCNXNDMtIQnDlVo.jpg\"]',2,'2023-01-23 09:22:50','2023-01-23 09:22:50',NULL),(17,'9','9',NULL,'[\"fabrics\\/January2023\\/pkt88aJpRWCg1t7eRire.jpg\"]',2,'2023-01-23 09:23:24','2023-01-23 09:23:24',NULL),(18,'10','10',NULL,'[\"fabrics\\/January2023\\/xRYjtTvJthsQtQiHhWWJ.jpg\"]',2,'2023-01-23 09:24:04','2023-01-23 09:24:04',NULL),(19,'11','11',NULL,'[\"fabrics\\/January2023\\/Pgw7228BQGOx8OJ9aHOu.jpg\"]',2,'2023-01-23 09:24:38','2023-01-23 09:24:38',NULL),(20,'12','12',NULL,'[\"fabrics\\/January2023\\/lCd81PH0kuNvo7h7piTs.jpg\"]',2,'2023-01-23 09:25:12','2023-01-23 09:25:12',NULL),(21,'13','13',NULL,'[\"fabrics\\/January2023\\/olZWJlHP9kpeceFROXhc.jpg\"]',2,'2023-01-23 09:25:42','2023-01-23 09:25:42',NULL),(22,'14','14',NULL,'[\"fabrics\\/January2023\\/6jBJhc8pnqVbJACU0LT8.jpg\"]',2,'2023-01-23 09:26:12','2023-01-23 09:26:12',NULL),(23,'15','15',NULL,'[\"fabrics\\/January2023\\/aRNl5itKt73QCyIczcL2.jpg\"]',2,'2023-01-23 09:26:47','2023-01-23 09:26:47',NULL),(24,'9140 MURO','9140-muro',NULL,'[\"fabrics\\/January2023\\/Mo2ytK6WcpB1G8meBtQ8.jpg\"]',2,'2023-01-23 09:37:36','2023-01-23 09:37:36',NULL),(25,'96163 LUCAS','96163-lucas',NULL,'[\"fabrics\\/January2023\\/anK861VehSC0Zz8SUC9T.jpg\"]',2,'2023-01-23 09:38:33','2023-01-23 09:38:33',NULL),(26,'99127 AKAİ','99127-akai',NULL,'[\"fabrics\\/January2023\\/I6YGVvA7GT4BiPd6aCe5.jpg\"]',2,'2023-01-23 09:41:44','2023-01-23 09:41:44',NULL),(27,'99127 AKAİ02','99127-akai02',NULL,'[\"fabrics\\/January2023\\/3yLz9rDgF7C93ktGDcbE.jpg\"]',2,'2023-01-23 09:49:06','2023-01-23 09:49:06',NULL),(28,'99127 AKAİ03','99127-akai03',NULL,'[\"fabrics\\/January2023\\/oE4SvLQJzCdoZIx0L4d8.jpg\"]',2,'2023-01-23 09:54:26','2023-01-23 09:54:26',NULL),(29,'99127 AKAİ04','99127-akai04',NULL,'[\"fabrics\\/January2023\\/eYxifgPic2evFLVIvGKt.jpg\"]',2,'2023-01-23 09:55:30','2023-01-23 09:55:30',NULL),(30,'99127 AKAİ05','99127-akai05',NULL,'[\"fabrics\\/January2023\\/2BGa1S1zd0pqJ6SliNdK.jpg\"]',2,'2023-01-23 09:56:30','2023-01-23 09:56:30',NULL),(31,'99128 MURO','99128-muro',NULL,'[\"fabrics\\/January2023\\/kDXSRaRTndhbg6XXhXQH.jpg\"]',2,'2023-01-23 09:59:14','2023-01-23 09:59:14',NULL),(32,'99128 MURO02','99128-muro02',NULL,'[\"fabrics\\/January2023\\/sE0swfUcIdUmT7UxJAi0.jpg\"]',2,'2023-01-23 10:00:36','2023-01-23 10:00:36',NULL),(33,'99128 MURO3','99128-muro3',NULL,'[\"fabrics\\/January2023\\/2g57Tv1ILUnhcfnFkCJT.jpg\"]',2,'2023-01-23 10:04:02','2023-01-23 10:04:02',NULL),(34,'99130 KETO02','99130-keto02',NULL,'[\"fabrics\\/January2023\\/jqoe8oJovaXhNesYT5kX.jpg\"]',2,'2023-01-23 10:06:21','2023-01-23 10:06:21',NULL),(35,'99132 MEDUSA','99132-medusa',NULL,'[\"fabrics\\/January2023\\/7gTmT8IM3W6Oc3xizCRX.jpg\"]',2,'2023-01-23 10:07:24','2023-01-23 10:07:24',NULL),(36,'99135 KETO','99135-keto',NULL,'[\"fabrics\\/January2023\\/NY4Q6Bg0TUOHyUCsoteM.jpg\"]',2,'2023-01-23 10:08:32','2023-01-23 10:08:32',NULL),(37,'99135 KETO02','99135-keto02',NULL,'[\"fabrics\\/January2023\\/WSByXErIVYucHs41psNE.jpg\"]',2,'2023-01-23 10:10:07','2023-01-23 10:10:07',NULL),(38,'99135 KETO03','99135-keto03',NULL,'[\"fabrics\\/January2023\\/oNrHXqelhI6O8DHxRQfa.jpg\"]',2,'2023-01-23 10:25:27','2023-01-23 10:25:27',NULL),(39,'99135 LETO','99135-leto',NULL,'[\"fabrics\\/January2023\\/0mQq7bsCiDOfmrmzntDU.jpg\"]',2,'2023-01-23 10:30:02','2023-01-23 10:30:02',NULL),(40,'99140 LETO','99140-leto',NULL,'[\"fabrics\\/January2023\\/EhpSGCYZab0z18kdHsvp.jpg\"]',2,'2023-01-23 10:31:29','2023-01-23 10:31:29',NULL),(41,'99162 MEDUSA','99162-medusa',NULL,'[\"fabrics\\/January2023\\/jN71sbckaGTsxbkyeggh.jpg\"]',2,'2023-01-23 10:32:27','2023-01-23 10:32:27',NULL),(42,'99162 MEDUSA02','99162-medusa02',NULL,'[\"fabrics\\/January2023\\/eHRpaxzTShVM1edGa8H9.jpg\"]',2,'2023-01-23 10:33:34','2023-01-23 10:33:34',NULL),(43,'99162 MEDUSA03','99162-medusa03',NULL,'[\"fabrics\\/January2023\\/HpVIv80iLKFRH9jxTBiX.jpg\"]',2,'2023-01-23 10:43:03','2023-01-23 10:43:03',NULL),(44,'99162 MEDUSA04','99162-medusa04',NULL,'[\"fabrics\\/January2023\\/3puVr3dhZdfgd6441R4V.jpg\"]',2,'2023-01-23 10:47:06','2023-01-23 10:47:06',NULL),(45,'99163','99163',NULL,'[\"fabrics\\/January2023\\/sZkHyup1CsXLmy5msQwn.jpg\"]',2,'2023-01-23 10:47:51','2023-01-23 10:47:51',NULL),(46,'99163 LUCAS','99163-lucas',NULL,'[\"fabrics\\/January2023\\/gwnlMAG64vLQ0LQpcBFm.jpg\"]',2,'2023-01-23 10:49:53','2023-01-23 10:49:53',NULL),(47,'ACACIA01 TURUNCU','acacia01-turuncu',NULL,'[\"fabrics\\/January2023\\/pugJ7cKnh06KZQdUgEKr.jpg\"]',2,'2023-01-23 10:59:48','2023-01-23 10:59:48',NULL),(48,'KETO','keto',NULL,'[\"fabrics\\/January2023\\/zVfF6Qb3LE30zhqWfrfu.jpg\"]',2,'2023-01-23 11:03:08','2023-01-23 11:03:08',NULL),(49,'KETO 01','keto-01',NULL,'[\"fabrics\\/January2023\\/lskLujGANph7MEvfnQU6.jpg\"]',2,'2023-01-23 11:05:31','2023-01-23 11:05:31',NULL),(50,'LETO','leto',NULL,'[\"fabrics\\/January2023\\/GNF4QioE6sKPxNAQdXje.jpg\"]',2,'2023-01-23 11:07:28','2023-01-23 11:07:28',NULL),(51,'LETO 01','leto-01',NULL,'[\"fabrics\\/January2023\\/PwvPdUU1WJwECW5KuwiO.jpg\"]',2,'2023-01-23 11:08:23','2023-01-23 11:08:23',NULL),(52,'LUCAS','lucas',NULL,'[\"fabrics\\/January2023\\/TDJUyoQFHGyOQgD9BSVU.jpg\"]',2,'2023-01-23 11:11:56','2023-01-23 11:11:56',NULL),(53,'LUCAS 01','lucas-01',NULL,'[\"fabrics\\/January2023\\/Y6QqR53B6oRG5gevQFDB.jpg\"]',2,'2023-01-23 11:14:33','2023-01-23 11:14:33',NULL),(54,'LUKAS 02','lukas-02',NULL,'[\"fabrics\\/January2023\\/5weuQEvcVXpkNhzrjbj0.jpg\"]',2,'2023-01-23 11:16:53','2023-01-23 11:16:53',NULL),(55,'MEDUSA 01','medusa-01',NULL,'[\"fabrics\\/January2023\\/EuNJ4Xmpt3FngQzUHnaA.jpg\"]',2,'2023-01-23 11:19:47','2023-01-23 11:19:47',NULL),(56,'MURO','muro',NULL,'[\"fabrics\\/January2023\\/vZxmteDdOUZC40roON2I.jpg\"]',2,'2023-01-23 11:22:10','2023-01-23 11:22:10',NULL),(57,'MURO 01','muro-01',NULL,'[\"fabrics\\/January2023\\/NAJ3tvOnKCtKNg2vRmnV.jpg\"]',2,'2023-01-23 11:29:56','2023-01-23 11:29:56',NULL),(58,'MURO 02','muro-02',NULL,'[\"fabrics\\/January2023\\/H4hPL2qOOnxJraRx7fT1.jpg\"]',2,'2023-01-23 11:31:45','2023-01-23 11:31:45',NULL),(59,'9919 1SAFİR','9919-1safir',NULL,'[\"fabrics\\/January2023\\/1YZN9EKYpdhm1fxtJVAM.jpg\"]',2,'2023-01-23 12:02:51','2023-01-23 12:02:51',NULL),(60,'99191 SAFİR 02','99191-safir-02',NULL,'[\"fabrics\\/January2023\\/gNnLPHHPdz0kfmyjeEgh.jpg\"]',2,'2023-01-23 12:04:38','2023-01-23 12:04:38',NULL),(61,'99191 SAFİR 03','99191-safir-03',NULL,'[\"fabrics\\/January2023\\/h4GC74aqYkqZa1iGv2Ih.jpg\"]',2,'2023-01-23 12:06:26','2023-01-23 12:06:26',NULL),(62,'99191 SAFİR 04','99191-safir-04',NULL,'[\"fabrics\\/January2023\\/7XUyE03WKHxb4aEL5hgF.jpg\"]',2,'2023-01-23 12:08:52','2023-01-23 12:08:52',NULL),(63,'99191 SAFİR 05','99191-safir-05',NULL,'[\"fabrics\\/January2023\\/JmVt1LYgWX0t8T1nujt9.jpg\"]',2,'2023-01-23 12:11:50','2023-01-23 12:11:50',NULL),(64,'99191 SAFİR 06','99191-safir-06',NULL,'[\"fabrics\\/January2023\\/bVMtcR74zN8uwZo8NgOr.jpg\"]',2,'2023-01-23 12:15:40','2023-01-23 12:15:40',NULL),(65,'99193 TOPAZ','99193-topaz',NULL,'[\"fabrics\\/January2023\\/qDe3diGjXQYULuwFVFXR.jpg\"]',2,'2023-01-23 12:21:54','2023-01-23 12:21:54',NULL),(66,'99193 TOPAZ 02','99193-topaz-02',NULL,'[\"fabrics\\/January2023\\/yq7RdsMSJS6HVqih7uhU.jpg\"]',2,'2023-01-23 12:23:57','2023-01-23 12:23:57',NULL),(67,'99193 TOPAZ 03','99193-topaz-03',NULL,'[\"fabrics\\/January2023\\/OLuUxwyslWOVz39fCWtp.jpg\"]',2,'2023-01-23 12:25:47','2023-01-23 12:25:47',NULL);
/*!40000 ALTER TABLE `fabrics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fabrics_collections`
--

DROP TABLE IF EXISTS `fabrics_collections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fabrics_collections` (
  `fabric_id` int DEFAULT NULL,
  `fabric_collection_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fabrics_collections`
--

LOCK TABLES `fabrics_collections` WRITE;
/*!40000 ALTER TABLE `fabrics_collections` DISABLE KEYS */;
INSERT INTO `fabrics_collections` VALUES (5,1),(5,2),(6,4),(6,5),(7,6),(8,6),(9,6),(10,6),(11,6),(12,6),(13,6),(14,6),(15,6),(16,6),(17,6),(18,6),(19,6),(20,6),(21,6),(22,6),(23,6),(24,7),(25,7),(26,7),(27,7),(28,7),(29,7),(30,7),(31,7),(32,7),(33,7),(34,7),(35,7),(36,7),(37,7),(38,7),(39,7),(40,7),(41,7),(42,7),(43,7),(44,7),(45,7),(46,7),(47,7),(48,7),(49,7),(50,7),(51,7),(52,7),(53,7),(54,7),(55,7),(56,7),(57,7),(58,7),(59,7),(60,7),(61,7),(62,7),(63,7),(64,7),(65,7),(66,7),(67,7);
/*!40000 ALTER TABLE `fabrics_collections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_items` (
  `id` int DEFAULT NULL,
  `menu_id` int DEFAULT NULL,
  `title` tinytext,
  `url` tinytext,
  `target` tinytext,
  `icon_class` tinytext,
  `color` tinytext,
  `parent_id` int DEFAULT NULL,
  `order` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` tinytext,
  `parameters` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2023-01-18 15:56:17','2023-01-18 15:56:17','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,5,'2023-01-18 15:56:17','2023-01-18 15:56:17','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,3,'2023-01-18 15:56:17','2023-01-18 15:56:17','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,2,'2023-01-18 15:56:17','2023-01-18 15:56:17','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,9,'2023-01-18 15:56:17','2023-01-18 15:56:17',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,10,'2023-01-18 15:56:17','2023-01-18 15:56:17','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,11,'2023-01-18 15:56:17','2023-01-18 15:56:17','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,12,'2023-01-18 15:56:17','2023-01-18 15:56:17','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,13,'2023-01-18 15:56:17','2023-01-18 15:56:17','voyager.bread.index',NULL),(10,1,'Settings','','_self','voyager-settings',NULL,NULL,14,'2023-01-18 15:56:17','2023-01-18 15:56:17','voyager.settings.index',NULL),(11,1,'Hooks','','_self','voyager-hook',NULL,5,13,'2023-01-18 15:56:17','2023-01-18 15:56:17','voyager.hooks',NULL),(12,1,'Kumaş Kategorileri','','_self','voyager-company',NULL,NULL,15,'2023-01-18 16:06:43','2023-01-18 16:06:43','voyager.fabric-categories.index',NULL),(14,1,'Fabrics Collections','','_self','voyager-company',NULL,NULL,17,'2023-01-18 17:50:21','2023-01-18 17:50:21','voyager.fabrics-collections.index',NULL),(15,1,'Fabric Collections','','_self','voyager-receipt',NULL,NULL,18,'2023-01-18 17:52:20','2023-01-18 17:52:20','voyager.fabric-collections.index',NULL),(16,1,'Fabrics','','_self','voyager-news',NULL,NULL,19,'2023-01-18 17:55:00','2023-01-18 17:55:00','voyager.fabrics.index',NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` int DEFAULT NULL,
  `name` tinytext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2023-01-18 15:56:17','2023-01-18 15:56:17');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int DEFAULT NULL,
  `migration` tinytext,
  `batch` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2010_11_13_132345_create_fabric_categories_table',1),(2,'2014_10_12_000000_create_users_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2016_01_01_000000_add_voyager_user_fields',1),(5,'2016_01_01_000000_create_data_types_table',1),(6,'2016_05_19_173453_create_menu_table',1),(7,'2016_10_21_190000_create_roles_table',1),(8,'2016_10_21_190000_create_settings_table',1),(9,'2016_11_30_135954_create_permission_table',1),(10,'2016_11_30_141208_create_permission_role_table',1),(11,'2016_12_26_201236_data_types__add__server_side',1),(12,'2017_01_13_000000_add_route_to_menu_items_table',1),(13,'2017_01_14_005015_create_translations_table',1),(14,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(15,'2017_03_06_000000_add_controller_to_data_types_table',1),(16,'2017_04_21_000000_add_order_to_data_rows_table',1),(17,'2017_07_05_210000_add_policyname_to_data_types_table',1),(18,'2017_08_05_000000_add_group_to_settings_table',1),(19,'2017_11_26_013050_add_user_role_relationship',1),(20,'2017_11_26_015000_create_user_roles_table',1),(21,'2018_03_11_000000_add_user_settings',1),(22,'2018_03_14_000000_add_details_to_data_types_table',1),(23,'2018_03_16_000000_make_settings_value_nullable',1),(24,'2022_11_13_132544_create_fabrics_table',1),(25,'2023_01_18_203931_create_fabrics_collections_table',2),(26,'2023_01_18_203931_create_fabric_collections_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` tinytext,
  `token` tinytext,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint DEFAULT NULL,
  `role_id` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint DEFAULT NULL,
  `key` tinytext,
  `table_name` tinytext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2023-01-18 15:56:17','2023-01-18 15:56:17'),(2,'browse_bread',NULL,'2023-01-18 15:56:17','2023-01-18 15:56:17'),(3,'browse_database',NULL,'2023-01-18 15:56:17','2023-01-18 15:56:17'),(4,'browse_media',NULL,'2023-01-18 15:56:17','2023-01-18 15:56:17'),(5,'browse_compass',NULL,'2023-01-18 15:56:17','2023-01-18 15:56:17'),(6,'browse_menus','menus','2023-01-18 15:56:17','2023-01-18 15:56:17'),(7,'read_menus','menus','2023-01-18 15:56:17','2023-01-18 15:56:17'),(8,'edit_menus','menus','2023-01-18 15:56:17','2023-01-18 15:56:17'),(9,'add_menus','menus','2023-01-18 15:56:17','2023-01-18 15:56:17'),(10,'delete_menus','menus','2023-01-18 15:56:17','2023-01-18 15:56:17'),(11,'browse_roles','roles','2023-01-18 15:56:17','2023-01-18 15:56:17'),(12,'read_roles','roles','2023-01-18 15:56:17','2023-01-18 15:56:17'),(13,'edit_roles','roles','2023-01-18 15:56:17','2023-01-18 15:56:17'),(14,'add_roles','roles','2023-01-18 15:56:17','2023-01-18 15:56:17'),(15,'delete_roles','roles','2023-01-18 15:56:17','2023-01-18 15:56:17'),(16,'browse_users','users','2023-01-18 15:56:17','2023-01-18 15:56:17'),(17,'read_users','users','2023-01-18 15:56:17','2023-01-18 15:56:17'),(18,'edit_users','users','2023-01-18 15:56:17','2023-01-18 15:56:17'),(19,'add_users','users','2023-01-18 15:56:17','2023-01-18 15:56:17'),(20,'delete_users','users','2023-01-18 15:56:17','2023-01-18 15:56:17'),(21,'browse_settings','settings','2023-01-18 15:56:17','2023-01-18 15:56:17'),(22,'read_settings','settings','2023-01-18 15:56:17','2023-01-18 15:56:17'),(23,'edit_settings','settings','2023-01-18 15:56:17','2023-01-18 15:56:17'),(24,'add_settings','settings','2023-01-18 15:56:17','2023-01-18 15:56:17'),(25,'delete_settings','settings','2023-01-18 15:56:17','2023-01-18 15:56:17'),(26,'browse_hooks',NULL,'2023-01-18 15:56:17','2023-01-18 15:56:17'),(27,'browse_fabric_categories','fabric_categories','2023-01-18 16:06:43','2023-01-18 16:06:43'),(28,'read_fabric_categories','fabric_categories','2023-01-18 16:06:43','2023-01-18 16:06:43'),(29,'edit_fabric_categories','fabric_categories','2023-01-18 16:06:43','2023-01-18 16:06:43'),(30,'add_fabric_categories','fabric_categories','2023-01-18 16:06:43','2023-01-18 16:06:43'),(31,'delete_fabric_categories','fabric_categories','2023-01-18 16:06:43','2023-01-18 16:06:43'),(37,'browse_fabrics_collections','fabrics_collections','2023-01-18 17:50:21','2023-01-18 17:50:21'),(38,'read_fabrics_collections','fabrics_collections','2023-01-18 17:50:21','2023-01-18 17:50:21'),(39,'edit_fabrics_collections','fabrics_collections','2023-01-18 17:50:21','2023-01-18 17:50:21'),(40,'add_fabrics_collections','fabrics_collections','2023-01-18 17:50:21','2023-01-18 17:50:21'),(41,'delete_fabrics_collections','fabrics_collections','2023-01-18 17:50:21','2023-01-18 17:50:21'),(42,'browse_fabric_collections','fabric_collections','2023-01-18 17:52:20','2023-01-18 17:52:20'),(43,'read_fabric_collections','fabric_collections','2023-01-18 17:52:20','2023-01-18 17:52:20'),(44,'edit_fabric_collections','fabric_collections','2023-01-18 17:52:20','2023-01-18 17:52:20'),(45,'add_fabric_collections','fabric_collections','2023-01-18 17:52:20','2023-01-18 17:52:20'),(46,'delete_fabric_collections','fabric_collections','2023-01-18 17:52:20','2023-01-18 17:52:20'),(47,'browse_fabrics','fabrics','2023-01-18 17:55:00','2023-01-18 17:55:00'),(48,'read_fabrics','fabrics','2023-01-18 17:55:00','2023-01-18 17:55:00'),(49,'edit_fabrics','fabrics','2023-01-18 17:55:00','2023-01-18 17:55:00'),(50,'add_fabrics','fabrics','2023-01-18 17:55:00','2023-01-18 17:55:00'),(51,'delete_fabrics','fabrics','2023-01-18 17:55:00','2023-01-18 17:55:00');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint DEFAULT NULL,
  `name` tinytext,
  `display_name` tinytext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2023-01-18 15:56:17','2023-01-18 15:56:17'),(2,'user','Normal User','2023-01-18 15:56:17','2023-01-18 15:56:17');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int DEFAULT NULL,
  `key` tinytext,
  `display_name` tinytext,
  `value` text,
  `details` text,
  `type` tinytext,
  `order` int DEFAULT NULL,
  `group` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Site Title','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID','','','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','Voyager','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to Voyager. The Missing Admin for Laravel','','text',2,'Admin'),(8,'admin.loader','Admin Loader','','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)','','','text',1,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `translations` (
  `id` int DEFAULT NULL,
  `table_name` tinytext,
  `column_name` tinytext,
  `foreign_key` int DEFAULT NULL,
  `locale` tinytext,
  `value` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_roles` (
  `user_id` bigint DEFAULT NULL,
  `role_id` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
INSERT INTO `user_roles` VALUES (4,1);
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint DEFAULT NULL,
  `role_id` bigint DEFAULT NULL,
  `name` tinytext,
  `email` tinytext,
  `avatar` tinytext,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` tinytext,
  `remember_token` tinytext,
  `settings` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Talip','talp17@gmail.com','users/default.png',NULL,'$2y$10$BBtsYLdK7UAr.6xtHt31Q.3wAtaqh7vzDgqUFQX.ohPMz9Wcl.nQG',NULL,NULL,'2023-01-18 16:00:24','2023-01-18 16:00:24'),(2,1,'Yusuf Ceylan','yusufcanceylan15@gmail.com','users/default.png',NULL,'$2y$10$jWqPIveqWChYUPYvbk96pOrEyPAOvpo6tZnfbibJwfqm6PHwjaHEi','Nlv7HNfC9cna22JNTQEM5FZ5Ld6V7SQnSivKVi6aoslUVHln6iCPA9Bp7hrp',NULL,'2023-01-18 16:33:24','2023-01-18 16:33:24'),(4,1,'berk','berkyildiriim133@hotmail.com','users/default.png',NULL,'$2y$10$iyD.OktX1/nN6DBJ8uINI.C2yjulMGaVdwGZbleQuSb5oANcOUoQu',NULL,'{\"locale\":\"en\"}','2023-01-20 05:50:58','2023-01-20 05:50:58');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-23 20:42:17
