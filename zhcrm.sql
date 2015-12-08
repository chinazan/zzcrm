-- MySQL dump 10.13  Distrib 5.1.73, for unknown-linux-gnu (x86_64)
--
-- Host: localhost    Database: zhcrm
-- ------------------------------------------------------
-- Server version	5.1.73-log

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
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `industry` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `sic_code` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address_street` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address_postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address_street` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address_postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `campaign_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `test` longtext COLLATE utf8_unicode_ci,
  `address_street` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7D3656A4F639F774` (`campaign_id`),
  KEY `IDX_7D3656A4B03A8386` (`created_by_id`),
  KEY `IDX_7D3656A499049ECE` (`modified_by_id`),
  KEY `IDX_7D3656A4ADF66B1A` (`assigned_user_id`),
  KEY `IDX_ACCOUNT_NAME` (`name`,`deleted`),
  KEY `IDX_ACCOUNT_ASSIGNED_USER` (`assigned_user_id`,`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES ('561e57eaad4707547','test',0,'','','','','','','','','','','','','','','','2015-10-14 13:26:02','2015-10-14 13:26:02',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('5645904f9ff92317d','1111111111111',1,'','','','','','','','','','','','','','','','2015-11-13 15:25:03','2015-11-30 10:55:36',NULL,'1','1','564d9455bf3e94471',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('564ebb8710264c056','33333',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:19:51','2015-11-20 14:19:51',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebb8c164a941dc','32323',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:19:56','2015-11-20 14:19:56',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebb938549eaca1','232323',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:20:03','2015-11-20 14:20:03',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebc7d87fea60eb','23232323232',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:23:57','2015-11-20 14:23:57',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebc835472c845c','232311fsdsaf',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:24:03','2015-11-20 14:24:03',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebc87a4729b4a7','wafwe',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:24:07','2015-11-20 14:24:07',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebc8da064c1513','qfqefq',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:24:13','2015-11-20 14:24:13',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebc9435e37456a','weqfaaa',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:24:20','2015-11-20 14:24:20',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebc9b2dfd840da','121sdfsafefew',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:24:27','2015-11-30 10:55:59',NULL,'1','1','1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebca141867cefe','adcvsacvbbwew',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:24:33','2015-11-20 14:24:33',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebca6901bd6cb0','wqfaz',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:24:38','2015-11-20 14:24:38',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebcad406b88921','qewfadjj',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:24:45','2015-11-20 14:24:45',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebcb27e3da2764','232adfdsfads',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:24:50','2015-11-20 14:24:50',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebcb682dcadff2','weqfa',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:24:54','2015-11-20 14:24:54',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebcbbc2a51d013','wezazczc',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:24:59','2015-11-20 14:24:59',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebcc223971199a','wezdvcadvsav',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:25:06','2015-11-20 14:25:06',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebcca205c90981','wwwwwwwwww',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:25:14','2015-11-20 14:25:14',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebcce4e9838636','w2',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:25:18','2015-11-20 14:25:18',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebcd38ce0c096f','weaw23',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:25:23','2015-11-20 14:25:23',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,''),('564ebcdbc88a6054b','fyu7777',0,'','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-11-20 14:25:31','2015-11-20 14:25:31',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,'');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `account_cdr`
--

DROP TABLE IF EXISTS `account_cdr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account_cdr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cdr_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_4AB14B869B6B5FBAB2679EF` (`account_id`,`cdr_id`),
  KEY `IDX_4AB14B869B6B5FBA` (`account_id`),
  KEY `IDX_4AB14B86B2679EF` (`cdr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account_cdr`
--

LOCK TABLES `account_cdr` WRITE;
/*!40000 ALTER TABLE `account_cdr` DISABLE KEYS */;
/*!40000 ALTER TABLE `account_cdr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `account_contact`
--

DROP TABLE IF EXISTS `account_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8549F2709B6B5FBAE7A1254A` (`account_id`,`contact_id`),
  KEY `IDX_8549F2709B6B5FBA` (`account_id`),
  KEY `IDX_8549F270E7A1254A` (`contact_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account_contact`
--

LOCK TABLES `account_contact` WRITE;
/*!40000 ALTER TABLE `account_contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `account_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `account_document`
--

DROP TABLE IF EXISTS `account_document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account_document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `document_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A0A768C09B6B5FBAC33F7837` (`account_id`,`document_id`),
  KEY `IDX_A0A768C09B6B5FBA` (`account_id`),
  KEY `IDX_A0A768C0C33F7837` (`document_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account_document`
--

LOCK TABLES `account_document` WRITE;
/*!40000 ALTER TABLE `account_document` DISABLE KEYS */;
/*!40000 ALTER TABLE `account_document` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `account_target_list`
--

DROP TABLE IF EXISTS `account_target_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account_target_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `target_list_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opted_out` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_589712AA9B6B5FBAF6C6AFE0` (`account_id`,`target_list_id`),
  KEY `IDX_589712AA9B6B5FBA` (`account_id`),
  KEY `IDX_589712AAF6C6AFE0` (`target_list_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account_target_list`
--

LOCK TABLES `account_target_list` WRITE;
/*!40000 ALTER TABLE `account_target_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `account_target_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `account_ticket`
--

DROP TABLE IF EXISTS `account_ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account_ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticket_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B09463D09B6B5FBA700047D2` (`account_id`,`ticket_id`),
  KEY `IDX_B09463D09B6B5FBA` (`account_id`),
  KEY `IDX_B09463D0700047D2` (`ticket_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account_ticket`
--

LOCK TABLES `account_ticket` WRITE;
/*!40000 ALTER TABLE `account_ticket` DISABLE KEYS */;
/*!40000 ALTER TABLE `account_ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `account_track`
--

DROP TABLE IF EXISTS `account_track`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account_track` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `track_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E06C21D79B6B5FBA5ED23C43` (`account_id`,`track_id`),
  KEY `IDX_E06C21D79B6B5FBA` (`account_id`),
  KEY `IDX_E06C21D75ED23C43` (`track_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account_track`
--

LOCK TABLES `account_track` WRITE;
/*!40000 ALTER TABLE `account_track` DISABLE KEYS */;
INSERT INTO `account_track` VALUES (1,'5645904f9ff92317d','564996783498bb778',0),(2,'561e57eaad4707547','564996783498bb778',0);
/*!40000 ALTER TABLE `account_track` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agent`
--

DROP TABLE IF EXISTS `agent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agent` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_login` tinyint(1) DEFAULT '0',
  `is_assigned` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_268B9C9DB03A8386` (`created_by_id`),
  KEY `IDX_268B9C9D99049ECE` (`modified_by_id`),
  KEY `IDX_268B9C9DADF66B1A` (`assigned_user_id`),
  KEY `IDX_AGENT_NAME` (`name`,`deleted`),
  KEY `IDX_AGENT_ASSIGNED_USER` (`assigned_user_id`,`deleted`),
  KEY `IDX_268B9C9DA76ED395` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agent`
--

LOCK TABLES `agent` WRITE;
/*!40000 ALTER TABLE `agent` DISABLE KEYS */;
INSERT INTO `agent` VALUES ('5656b94c259d2cdb8','10001',0,NULL,'2015-11-26 15:48:28','2015-11-26 15:48:28','1',NULL,'1',NULL,NULL,0,0),('5656c18f6fb04b6d4','10002',0,NULL,'2015-11-26 16:23:43','2015-11-30 12:43:05','1','1','1','ringing',NULL,0,0),('5656ce69428dbcb20','10003',0,NULL,'2015-11-26 17:18:33','2015-11-26 17:18:33','1',NULL,'1',NULL,NULL,0,0),('565bb235e625700fb','1001',0,NULL,'2015-11-30 10:19:33','2015-11-30 10:19:33','1',NULL,'1',NULL,NULL,0,0),('565bb23d01c7dd7ba','1001',0,NULL,'2015-11-30 10:19:41','2015-11-30 10:19:41','1',NULL,'1',NULL,NULL,0,0),('565bb2cd1bf2bb4d3','10001',0,NULL,'2015-11-30 10:22:05','2015-11-30 10:22:05','1',NULL,'1',NULL,NULL,0,0);
/*!40000 ALTER TABLE `agent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attachment`
--

DROP TABLE IF EXISTS `attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attachment` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `type` varchar(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `role` varchar(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `global` tinyint(1) DEFAULT '0',
  `parent_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent_id`,`parent_type`),
  KEY `IDX_795FD9BBB03A8386` (`created_by_id`),
  KEY `IDX_ATTACHMENT_PARENT` (`parent_type`,`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachment`
--

LOCK TABLES `attachment` WRITE;
/*!40000 ALTER TABLE `attachment` DISABLE KEYS */;
INSERT INTO `attachment` VALUES ('561e572237e717685','index.js',0,'application/javascript',5806,'2015-10-14 13:22:42','Attachment',0,NULL,'Document','1'),('561e699fb008a5da6','logo.jpg',0,'image/jpeg',16626,'2015-10-14 14:41:35','Attachment',0,'1','Settings','1');
/*!40000 ALTER TABLE `attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_token`
--

DROP TABLE IF EXISTS `auth_token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_token` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `token` varchar(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hash` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip_address` varchar(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_access` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9315F04E5F37A13B` (`token`),
  KEY `IDX_9315F04ED1B862B8` (`hash`),
  KEY `IDX_9315F04EA76ED395` (`user_id`),
  KEY `IDX_AUTH_TOKEN_TOKEN` (`token`,`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_token`
--

LOCK TABLES `auth_token` WRITE;
/*!40000 ALTER TABLE `auth_token` DISABLE KEYS */;
INSERT INTO `auth_token` VALUES ('561dba90119574483',1,'4297aff6db5b9e050917a1e986d1d23c','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','192.168.33.1','2015-10-14 05:46:21','2015-10-14 02:14:40','2015-10-14 12:34:34'),('561e5332a3a14a629',1,'0732845d4d6cfd40db7ac56ef1242b48','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','192.168.33.1','2015-10-14 14:43:23','2015-10-14 13:05:54','2015-10-14 14:43:23'),('561e6a1056dc085fe',1,'cc9916d1bb338da6caa63224d312206e','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','192.168.33.1','2015-10-14 14:45:09','2015-10-14 14:43:28','2015-10-14 14:45:10'),('561e6a79180840b58',1,'a703f468839a9570809137f34f2265c6','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','192.168.33.1','2015-10-14 15:06:54','2015-10-14 14:45:13','2015-10-14 15:06:54'),('561e6f950deffca45',0,'b60527276f2dda156b3820da4a915468','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','192.168.33.1','2015-10-27 04:59:39','2015-10-14 15:07:01','2015-10-27 04:59:39'),('563c0da106af89147',0,'db87a0afef07703c71affe82c5a0d3b2','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','127.0.0.1','2015-11-13 11:48:58','2015-11-06 10:17:05','2015-11-13 11:48:58'),('56455f523db9496b4',0,'fef6422c984c55d9e092014ff65ed69a','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','127.0.0.1','2015-11-16 11:14:07','2015-11-13 11:56:02','2015-11-16 11:14:07'),('56494a1bbe11653c1',1,'6b02d45f490c232112cef9b8b61629af','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','127.0.0.1','2015-11-18 16:25:04','2015-11-16 11:14:35','2015-11-18 16:25:04'),('564c35e3dac933e9b',1,'d287ea777ef387d4ad27cd40cb42641d','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','127.0.0.1','2015-11-19 17:20:35','2015-11-18 16:25:07','2015-11-19 17:20:35'),('564d946911351ae3b',1,'3a3a5a7e06b49e3a7978df455aa93ffd','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','127.0.0.1','2015-11-19 17:20:49','2015-11-19 17:20:41','2015-11-19 17:20:49'),('564d9476b191ba1a2',1,'91d36c02ad242a2dc0481e90f67dd3a3','Lzf1m4VATIKGRbPheBdlHGaNcb1vJeQx/TXl6mVf06RQlG4rBz7qXFXULXw/wbOrLDrVP/R2NZRdfwM4EGdJA1','564d9455bf3e94471','127.0.0.1','2015-11-19 17:22:26','2015-11-19 17:20:54','2015-11-19 17:22:26'),('564d94d639571ebb0',1,'5d52deff86137abc27f2f147d534f77a','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','127.0.0.1','2015-11-20 10:56:32','2015-11-19 17:22:30','2015-11-20 10:56:32'),('564e8be516b978b03',1,'95c5371d8e882247194ea1d9322b926e','Lzf1m4VATIKGRbPheBdlHGaNcb1vJeQx/TXl6mVf06RQlG4rBz7qXFXULXw/wbOrLDrVP/R2NZRdfwM4EGdJA1','564d9455bf3e94471','127.0.0.1','2015-11-20 10:57:20','2015-11-20 10:56:37','2015-11-20 10:57:20'),('564e8c14bd30d7c2a',0,'1f55ad44b7f62b106467ac4de13fdc3b','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','127.0.0.1','2015-11-23 18:02:34','2015-11-20 10:57:24','2015-11-23 18:02:34'),('565567a0031fb50d0',0,'33edb00414ddb2e4ff32bc6f1d52a776','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','192.168.33.1','2015-11-26 14:28:37','2015-11-25 15:47:44','2015-11-26 14:28:37'),('5656ac38afbdd764b',1,'fd254dbdff4b77a02df2d04477428f04','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','192.168.33.1','2015-11-27 10:40:26','2015-11-26 14:52:40','2015-11-27 10:40:26'),('5656cec45b5120f29',1,'acedf46d3eb23c2880b96242bf608cdd','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','192.168.33.1','2015-11-26 17:21:15','2015-11-26 17:20:04','2015-11-26 17:21:15'),('5656cf0fcf7d8aa3b',1,'0c9090b30a043b1807ffc7befea792c1','Lzf1m4VATIKGRbPheBdlHGaNcb1vJeQx/TXl6mVf06RQlG4rBz7qXFXULXw/wbOrLDrVP/R2NZRdfwM4EGdJA1','564d9455bf3e94471','192.168.33.1','2015-11-30 18:30:59','2015-11-26 17:21:19','2015-11-30 18:30:59'),('5657ccba88b414b77',1,'6b55437ef0d77633531f6751e9c189b7','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','192.168.33.1','2015-11-30 14:48:38','2015-11-27 11:23:38','2015-11-30 14:48:38'),('565bf14cd5fe03124',1,'7a70d1b3f9cf5620a377646a995d0be3','Lzf1m4VATIKGRbPheBdlHGaNcb1vJeQx/TXl6mVf06RQlG4rBz7qXFXULXw/wbOrLDrVP/R2NZRdfwM4EGdJA1','564d9455bf3e94471','192.168.33.1','2015-11-30 14:50:38','2015-11-30 14:48:44','2015-11-30 14:50:38'),('565bf1c86cce122e3',1,'8217c6291e42346e540f1e2cf8aad439','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','192.168.33.1','2015-11-30 14:51:17','2015-11-30 14:50:48','2015-11-30 14:51:17'),('565bf1ee7770055ec',1,'463568cec6a6c6dc551aca572afd858f','Lzf1m4VATIKGRbPheBdlHGaNcb1vJeQx/TXl6mVf06RQlG4rBz7qXFXULXw/wbOrLDrVP/R2NZRdfwM4EGdJA1','564d9455bf3e94471','192.168.33.1','2015-11-30 14:53:20','2015-11-30 14:51:26','2015-11-30 14:53:20'),('565bf265cf604ea39',0,'1926e98e23cd722914b1b22c1349a519','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','1','192.168.33.1','2015-12-01 15:38:20','2015-11-30 14:53:25','2015-12-01 15:38:20'),('565c256d5da600722',1,'81a9975e6db92288cd9556c442770696','Lzf1m4VATIKGRbPheBdlHGaNcb1vJeQx/TXl6mVf06RQlG4rBz7qXFXULXw/wbOrLDrVP/R2NZRdfwM4EGdJA1','565bf10099ee6fd0d','192.168.33.1','2015-11-30 18:32:27','2015-11-30 18:31:09','2015-11-30 18:32:27');
/*!40000 ALTER TABLE `auth_token` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autofollow`
--

DROP TABLE IF EXISTS `autofollow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autofollow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `entityType` (`entity_type`),
  KEY `IDX_EB89C717A76ED395` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autofollow`
--

LOCK TABLES `autofollow` WRITE;
/*!40000 ALTER TABLE `autofollow` DISABLE KEYS */;
/*!40000 ALTER TABLE `autofollow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `call`
--

DROP TABLE IF EXISTS `call`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `call` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Planned',
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `duration` int(11) DEFAULT '300',
  `direction` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Outbound',
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `parent_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent_id`,`parent_type`),
  KEY `IDX_CC8E2F3E9B6B5FBA` (`account_id`),
  KEY `IDX_CC8E2F3EB03A8386` (`created_by_id`),
  KEY `IDX_CC8E2F3E99049ECE` (`modified_by_id`),
  KEY `IDX_CC8E2F3EADF66B1A` (`assigned_user_id`),
  KEY `IDX_CALL_DATE_START_STATUS` (`date_start`,`status`),
  KEY `IDX_CALL_DATE_START` (`date_start`,`deleted`),
  KEY `IDX_CALL_STATUS` (`status`,`deleted`),
  KEY `IDX_CALL_ASSIGNED_USER` (`assigned_user_id`,`deleted`),
  KEY `IDX_CALL_ASSIGNED_USER_STATUS` (`assigned_user_id`,`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `call`
--

LOCK TABLES `call` WRITE;
/*!40000 ALTER TABLE `call` DISABLE KEYS */;
/*!40000 ALTER TABLE `call` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `call_contact`
--

DROP TABLE IF EXISTS `call_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `call_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `call_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(36) COLLATE utf8_unicode_ci DEFAULT 'None',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_99C77F0D50A89B2CE7A1254A` (`call_id`,`contact_id`),
  KEY `IDX_99C77F0D50A89B2C` (`call_id`),
  KEY `IDX_99C77F0DE7A1254A` (`contact_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `call_contact`
--

LOCK TABLES `call_contact` WRITE;
/*!40000 ALTER TABLE `call_contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `call_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `call_lead`
--

DROP TABLE IF EXISTS `call_lead`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `call_lead` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `call_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lead_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(36) COLLATE utf8_unicode_ci DEFAULT 'None',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1F10069750A89B2C55458D` (`call_id`,`lead_id`),
  KEY `IDX_1F10069750A89B2C` (`call_id`),
  KEY `IDX_1F10069755458D` (`lead_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `call_lead`
--

LOCK TABLES `call_lead` WRITE;
/*!40000 ALTER TABLE `call_lead` DISABLE KEYS */;
/*!40000 ALTER TABLE `call_lead` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `call_user`
--

DROP TABLE IF EXISTS `call_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `call_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `call_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(36) COLLATE utf8_unicode_ci DEFAULT 'None',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_BA12B115A76ED39550A89B2C` (`user_id`,`call_id`),
  KEY `IDX_BA12B115A76ED395` (`user_id`),
  KEY `IDX_BA12B11550A89B2C` (`call_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `call_user`
--

LOCK TABLES `call_user` WRITE;
/*!40000 ALTER TABLE `call_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `call_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campaign`
--

DROP TABLE IF EXISTS `campaign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campaign` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Planning',
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `budget` double DEFAULT NULL,
  `budget_currency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1F1512DDB03A8386` (`created_by_id`),
  KEY `IDX_1F1512DD99049ECE` (`modified_by_id`),
  KEY `IDX_1F1512DDADF66B1A` (`assigned_user_id`),
  KEY `IDX_CAMPAIGN_CREATED_AT` (`created_at`,`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaign`
--

LOCK TABLES `campaign` WRITE;
/*!40000 ALTER TABLE `campaign` DISABLE KEYS */;
/*!40000 ALTER TABLE `campaign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campaign_log_record`
--

DROP TABLE IF EXISTS `campaign_log_record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campaign_log_record` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `action` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action_date` datetime DEFAULT NULL,
  `data` longtext COLLATE utf8_unicode_ci,
  `string_data` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `string_additional_data` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `application` varchar(36) COLLATE utf8_unicode_ci DEFAULT 'Fox',
  `created_at` datetime DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `campaign_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `object_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `object_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `queue_item_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_49D9EC9BB03A8386` (`created_by_id`),
  KEY `IDX_49D9EC9BF639F774` (`campaign_id`),
  KEY `parent` (`parent_id`,`parent_type`),
  KEY `object` (`object_id`,`object_type`),
  KEY `IDX_49D9EC9BF0EDC960` (`queue_item_id`),
  KEY `IDX_CAMPAIGN_LOG_RECORD_ACTION_DATE` (`action_date`,`deleted`),
  KEY `IDX_CAMPAIGN_LOG_RECORD_ACTION` (`action`,`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaign_log_record`
--

LOCK TABLES `campaign_log_record` WRITE;
/*!40000 ALTER TABLE `campaign_log_record` DISABLE KEYS */;
/*!40000 ALTER TABLE `campaign_log_record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campaign_target_list`
--

DROP TABLE IF EXISTS `campaign_target_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campaign_target_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campaign_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `target_list_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_511AD253F639F774F6C6AFE0` (`campaign_id`,`target_list_id`),
  KEY `IDX_511AD253F639F774` (`campaign_id`),
  KEY `IDX_511AD253F6C6AFE0` (`target_list_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaign_target_list`
--

LOCK TABLES `campaign_target_list` WRITE;
/*!40000 ALTER TABLE `campaign_target_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `campaign_target_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campaign_tracking_url`
--

DROP TABLE IF EXISTS `campaign_tracking_url`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campaign_tracking_url` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `campaign_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EEB66723F639F774` (`campaign_id`),
  KEY `IDX_EEB6672399049ECE` (`modified_by_id`),
  KEY `IDX_EEB66723B03A8386` (`created_by_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaign_tracking_url`
--

LOCK TABLES `campaign_tracking_url` WRITE;
/*!40000 ALTER TABLE `campaign_tracking_url` DISABLE KEYS */;
/*!40000 ALTER TABLE `campaign_tracking_url` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `case`
--

DROP TABLE IF EXISTS `case`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `case` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'New',
  `priority` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Normal',
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `account_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inbound_email_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number` (`number`),
  UNIQUE KEY `UNIQ_7808990496901F54` (`number`),
  KEY `IDX_780899049B6B5FBA` (`account_id`),
  KEY `IDX_78089904E7A1254A` (`contact_id`),
  KEY `IDX_78089904E540AEA2` (`inbound_email_id`),
  KEY `IDX_78089904B03A8386` (`created_by_id`),
  KEY `IDX_7808990499049ECE` (`modified_by_id`),
  KEY `IDX_78089904ADF66B1A` (`assigned_user_id`),
  KEY `IDX_CASE_STATUS` (`status`,`deleted`),
  KEY `IDX_CASE_ASSIGNED_USER` (`assigned_user_id`,`deleted`),
  KEY `IDX_CASE_ASSIGNED_USER_STATUS` (`assigned_user_id`,`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `case`
--

LOCK TABLES `case` WRITE;
/*!40000 ALTER TABLE `case` DISABLE KEYS */;
/*!40000 ALTER TABLE `case` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `case_contact`
--

DROP TABLE IF EXISTS `case_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `case_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `case_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E3C11333CF10D4F5E7A1254A` (`case_id`,`contact_id`),
  KEY `IDX_E3C11333CF10D4F5` (`case_id`),
  KEY `IDX_E3C11333E7A1254A` (`contact_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `case_contact`
--

LOCK TABLES `case_contact` WRITE;
/*!40000 ALTER TABLE `case_contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `case_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cdr`
--

DROP TABLE IF EXISTS `cdr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cdr` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `src` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `call_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ring_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uniqueid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `listid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `campaignid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drop_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `group` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answeredtime` int(11) DEFAULT NULL,
  `dialtime` int(11) DEFAULT NULL,
  `starttime` datetime DEFAULT NULL,
  `endtime` datetime DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A4A12D8B03A8386` (`created_by_id`),
  KEY `IDX_A4A12D899049ECE` (`modified_by_id`),
  KEY `IDX_A4A12D8ADF66B1A` (`assigned_user_id`),
  KEY `IDX_CDR_NAME` (`name`,`deleted`),
  KEY `IDX_CDR_ASSIGNED_USER` (`assigned_user_id`,`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cdr`
--

LOCK TABLES `cdr` WRITE;
/*!40000 ALTER TABLE `cdr` DISABLE KEYS */;
INSERT INTO `cdr` VALUES ('565babe3d7b15319c',NULL,0,NULL,'2015-11-30 09:52:35','2015-11-30 09:52:35','1',NULL,NULL,'10001',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565babe5119d2ee1f',NULL,0,NULL,'2015-11-30 09:52:37','2015-11-30 09:52:37','1',NULL,NULL,'10001',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565babe551316cb74',NULL,0,NULL,'2015-11-30 09:52:37','2015-11-30 09:52:37','1',NULL,NULL,'10001',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565babe584639bfa3',NULL,0,NULL,'2015-11-30 09:52:37','2015-11-30 09:52:37','1',NULL,NULL,'10001',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565babe5b83d7741c',NULL,0,NULL,'2015-11-30 09:52:37','2015-11-30 09:52:37','1',NULL,NULL,'10001',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565babe5e9f2eab18',NULL,0,NULL,'2015-11-30 09:52:37','2015-11-30 09:52:37','1',NULL,NULL,'10001',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565babe62490d737e',NULL,0,NULL,'2015-11-30 09:52:38','2015-11-30 09:52:38','1',NULL,NULL,'10001',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565babe65965ee092',NULL,0,NULL,'2015-11-30 09:52:38','2015-11-30 09:52:38','1',NULL,NULL,'10001',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565babe69820d6da3',NULL,0,NULL,'2015-11-30 09:52:38','2015-11-30 09:52:38','1',NULL,NULL,'10001',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565babe6c6578cbc9',NULL,0,NULL,'2015-11-30 09:52:38','2015-11-30 09:52:38','1',NULL,NULL,'10001',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bac0fb03420c3e',NULL,0,NULL,'2015-11-30 09:53:19','2015-11-30 09:53:19','1',NULL,NULL,'13800138000',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bac2be541e4665',NULL,0,NULL,'2015-11-30 09:53:47','2015-11-30 09:53:47','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bad7d66b272d66',NULL,0,NULL,'2015-11-30 09:59:25','2015-11-30 09:59:25','1',NULL,NULL,'13800138000',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565badd79cf5df67c',NULL,0,NULL,'2015-11-30 10:00:55','2015-11-30 10:00:55','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565baddc8a26f40b7',NULL,0,NULL,'2015-11-30 10:01:00','2015-11-30 10:01:00','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565baddd8301c3e12',NULL,0,NULL,'2015-11-30 10:01:01','2015-11-30 10:01:01','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565badde2fb676306',NULL,0,NULL,'2015-11-30 10:01:02','2015-11-30 10:01:02','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565baddead9140570',NULL,0,NULL,'2015-11-30 10:01:02','2015-11-30 10:01:02','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565baddf19289eeb8',NULL,0,NULL,'2015-11-30 10:01:03','2015-11-30 10:01:03','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565baddf4d9d144d2',NULL,0,NULL,'2015-11-30 10:01:03','2015-11-30 10:01:03','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565baddf839af127b',NULL,0,NULL,'2015-11-30 10:01:03','2015-11-30 10:01:03','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565baddfae302c3ca',NULL,0,NULL,'2015-11-30 10:01:03','2015-11-30 10:01:03','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565baddfd7d3dc030',NULL,0,NULL,'2015-11-30 10:01:03','2015-11-30 10:01:03','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade046962453c',NULL,0,NULL,'2015-11-30 10:01:04','2015-11-30 10:01:04','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade0805b5107e',NULL,0,NULL,'2015-11-30 10:01:04','2015-11-30 10:01:04','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade0a3832409f',NULL,0,NULL,'2015-11-30 10:01:04','2015-11-30 10:01:04','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade0e31440bd0',NULL,0,NULL,'2015-11-30 10:01:04','2015-11-30 10:01:04','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade10dbe27c41',NULL,0,NULL,'2015-11-30 10:01:05','2015-11-30 10:01:05','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade1465909ecf',NULL,0,NULL,'2015-11-30 10:01:05','2015-11-30 10:01:05','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade17112fcbd4',NULL,0,NULL,'2015-11-30 10:01:05','2015-11-30 10:01:05','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade1a2c42d348',NULL,0,NULL,'2015-11-30 10:01:05','2015-11-30 10:01:05','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade1c3c860d34',NULL,0,NULL,'2015-11-30 10:01:05','2015-11-30 10:01:05','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade1f2b6652af',NULL,0,NULL,'2015-11-30 10:01:05','2015-11-30 10:01:05','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade22f5015e0f',NULL,0,NULL,'2015-11-30 10:01:06','2015-11-30 10:01:06','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade259d4ed42b',NULL,0,NULL,'2015-11-30 10:01:06','2015-11-30 10:01:06','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade28500d140c',NULL,0,NULL,'2015-11-30 10:01:06','2015-11-30 10:01:06','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade2e0cd49fb3',NULL,0,NULL,'2015-11-30 10:01:06','2015-11-30 10:01:06','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade31d7a0a1c0',NULL,0,NULL,'2015-11-30 10:01:07','2015-11-30 10:01:07','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade34a4c85506',NULL,0,NULL,'2015-11-30 10:01:07','2015-11-30 10:01:07','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade370cb2046c',NULL,0,NULL,'2015-11-30 10:01:07','2015-11-30 10:01:07','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade3a628632c0',NULL,0,NULL,'2015-11-30 10:01:07','2015-11-30 10:01:07','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade3d29fdc27c',NULL,0,NULL,'2015-11-30 10:01:07','2015-11-30 10:01:07','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade40ce088f67',NULL,0,NULL,'2015-11-30 10:01:08','2015-11-30 10:01:08','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade43426dfed1',NULL,0,NULL,'2015-11-30 10:01:08','2015-11-30 10:01:08','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade4644ba5e05',NULL,0,NULL,'2015-11-30 10:01:08','2015-11-30 10:01:08','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade4905afac0b',NULL,0,NULL,'2015-11-30 10:01:08','2015-11-30 10:01:08','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade4be3149f68',NULL,0,NULL,'2015-11-30 10:01:08','2015-11-30 10:01:08','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade4eabc72d59',NULL,0,NULL,'2015-11-30 10:01:08','2015-11-30 10:01:08','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade523fda3f59',NULL,0,NULL,'2015-11-30 10:01:09','2015-11-30 10:01:09','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565bade54ddf83852',NULL,0,NULL,'2015-11-30 10:01:09','2015-11-30 10:01:09','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565c139335674e727',NULL,0,NULL,'2015-11-30 17:14:59','2015-11-30 17:14:59','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('565d45d063a580bd4',NULL,0,NULL,'2015-12-01 15:01:36','2015-12-01 15:01:36','1',NULL,NULL,'232323',NULL,NULL,NULL,'123456132323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `cdr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `salutation_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `account_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `do_not_call` tinyint(1) DEFAULT '0',
  `address_street` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `campaign_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4C62E6389B6B5FBA` (`account_id`),
  KEY `IDX_4C62E638F639F774` (`campaign_id`),
  KEY `IDX_4C62E638B03A8386` (`created_by_id`),
  KEY `IDX_4C62E63899049ECE` (`modified_by_id`),
  KEY `IDX_4C62E638ADF66B1A` (`assigned_user_id`),
  KEY `IDX_CONTACT_FIRST_NAME` (`first_name`,`deleted`),
  KEY `IDX_CONTACT_NAME` (`first_name`,`last_name`),
  KEY `IDX_CONTACT_ASSIGNED_USER` (`assigned_user_id`,`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_meeting`
--

DROP TABLE IF EXISTS `contact_meeting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_meeting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meeting_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(36) COLLATE utf8_unicode_ci DEFAULT 'None',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6F3AC0B8E7A1254A67433D9C` (`contact_id`,`meeting_id`),
  KEY `IDX_6F3AC0B8E7A1254A` (`contact_id`),
  KEY `IDX_6F3AC0B867433D9C` (`meeting_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_meeting`
--

LOCK TABLES `contact_meeting` WRITE;
/*!40000 ALTER TABLE `contact_meeting` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_meeting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_opportunity`
--

DROP TABLE IF EXISTS `contact_opportunity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_opportunity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opportunity_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_ED257C69E7A1254A9A34590F` (`contact_id`,`opportunity_id`),
  KEY `IDX_ED257C69E7A1254A` (`contact_id`),
  KEY `IDX_ED257C699A34590F` (`opportunity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_opportunity`
--

LOCK TABLES `contact_opportunity` WRITE;
/*!40000 ALTER TABLE `contact_opportunity` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_opportunity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_target_list`
--

DROP TABLE IF EXISTS `contact_target_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_target_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `target_list_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opted_out` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E77C5117E7A1254AF6C6AFE0` (`contact_id`,`target_list_id`),
  KEY `IDX_E77C5117E7A1254A` (`contact_id`),
  KEY `IDX_E77C5117F6C6AFE0` (`target_list_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_target_list`
--

LOCK TABLES `contact_target_list` WRITE;
/*!40000 ALTER TABLE `contact_target_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_target_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `currency`
--

DROP TABLE IF EXISTS `currency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `currency` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `rate` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currency`
--

LOCK TABLES `currency` WRITE;
/*!40000 ALTER TABLE `currency` DISABLE KEYS */;
INSERT INTO `currency` VALUES ('USD',0,1);
/*!40000 ALTER TABLE `currency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document`
--

DROP TABLE IF EXISTS `document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `document` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `source` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Fox',
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `expiration_date` date DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `folder_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D8698A76B03A8386` (`created_by_id`),
  KEY `IDX_D8698A7699049ECE` (`modified_by_id`),
  KEY `IDX_D8698A76ADF66B1A` (`assigned_user_id`),
  KEY `IDX_D8698A76162CB942` (`folder_id`),
  KEY `IDX_D8698A7693CB796C` (`file_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document`
--

LOCK TABLES `document` WRITE;
/*!40000 ALTER TABLE `document` DISABLE KEYS */;
INSERT INTO `document` VALUES ('561e5723b2724acf1','index.js',0,'Active','Fox',NULL,'2015-10-14',NULL,NULL,'2015-10-14 13:22:43','2015-10-14 13:22:43','1',NULL,'1','561e56f861940ebb7','561e572237e717685');
/*!40000 ALTER TABLE `document` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document_folder`
--

DROP TABLE IF EXISTS `document_folder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `document_folder` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_52C0B8ABB03A8386` (`created_by_id`),
  KEY `IDX_52C0B8AB99049ECE` (`modified_by_id`),
  KEY `IDX_52C0B8AB727ACA70` (`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document_folder`
--

LOCK TABLES `document_folder` WRITE;
/*!40000 ALTER TABLE `document_folder` DISABLE KEYS */;
INSERT INTO `document_folder` VALUES ('561e56ee66b5fe729','目录1',0,NULL,'2015-10-14 13:21:50','2015-10-14 13:21:50','1',NULL,NULL),('561e56f861940ebb7','目录11',0,NULL,'2015-10-14 13:22:00','2015-10-14 13:22:00','1',NULL,'561e56ee66b5fe729');
/*!40000 ALTER TABLE `document_folder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document_folder_path`
--

DROP TABLE IF EXISTS `document_folder_path`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `document_folder_path` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ascendor_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descendor_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_90629A7011FE3B6C` (`ascendor_id`),
  KEY `IDX_90629A709A21681A` (`descendor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document_folder_path`
--

LOCK TABLES `document_folder_path` WRITE;
/*!40000 ALTER TABLE `document_folder_path` DISABLE KEYS */;
INSERT INTO `document_folder_path` VALUES (1,'561e56ee66b5fe729','561e56ee66b5fe729'),(2,'561e56ee66b5fe729','561e56f861940ebb7'),(3,'561e56f861940ebb7','561e56f861940ebb7');
/*!40000 ALTER TABLE `document_folder_path` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document_opportunity`
--

DROP TABLE IF EXISTS `document_opportunity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `document_opportunity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opportunity_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_120F4BDC33F78379A34590F` (`document_id`,`opportunity_id`),
  KEY `IDX_120F4BDC33F7837` (`document_id`),
  KEY `IDX_120F4BD9A34590F` (`opportunity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document_opportunity`
--

LOCK TABLES `document_opportunity` WRITE;
/*!40000 ALTER TABLE `document_opportunity` DISABLE KEYS */;
/*!40000 ALTER TABLE `document_opportunity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email`
--

DROP TABLE IF EXISTS `email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `from_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `from_string` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reply_to_string` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message_id_internal` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body_plain` longtext COLLATE utf8_unicode_ci,
  `body` longtext COLLATE utf8_unicode_ci,
  `is_html` tinyint(1) DEFAULT '1',
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Archived',
  `has_attachment` tinyint(1) DEFAULT '0',
  `date_sent` datetime DEFAULT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `is_system` tinyint(1) DEFAULT '0',
  `from_email_address_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `replied_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E7927C743B57AF6F` (`message_id_internal`),
  KEY `IDX_E7927C74D445573A` (`from_email_address_id`),
  KEY `parent` (`parent_id`,`parent_type`),
  KEY `IDX_E7927C74B03A8386` (`created_by_id`),
  KEY `IDX_E7927C7499049ECE` (`modified_by_id`),
  KEY `IDX_E7927C74ADF66B1A` (`assigned_user_id`),
  KEY `IDX_E7927C74B4E994E0` (`replied_id`),
  KEY `IDX_E7927C749B6B5FBA` (`account_id`),
  KEY `IDX_EMAIL_DATE_SENT_ASSIGNED_USER` (`date_sent`,`assigned_user_id`),
  KEY `IDX_EMAIL_DATE_SENT` (`date_sent`,`deleted`),
  KEY `IDX_EMAIL_DATE_SENT_STATUS` (`date_sent`,`status`,`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email`
--

LOCK TABLES `email` WRITE;
/*!40000 ALTER TABLE `email` DISABLE KEYS */;
INSERT INTO `email` VALUES ('56499f6207c428e65','Case has been created',0,NULL,NULL,NULL,NULL,NULL,'{Person.name},Case \'{Case.name}\' has been created with number {Case.number} and assigned to Admin.\n','<p>{Person.name},</p><p>Case \'{Case.name}\' has been created with number {Case.number} and assigned to Admin.</p><p><br></p>',1,'Sending',0,NULL,NULL,'2015-11-16 17:18:26','2015-11-16 17:18:26',0,NULL,NULL,'Account','1',NULL,'1',NULL,NULL),('56499f758931712f1','Case has been created',0,NULL,NULL,NULL,NULL,NULL,'{Person.name},Case \'{Case.name}\' has been created with number {Case.number} and assigned to Admin.\n','<p>{Person.name},</p><p>Case \'{Case.name}\' has been created with number {Case.number} and assigned to Admin.</p><p><br></p>',1,'Draft',0,NULL,NULL,'2015-11-16 17:18:45','2015-11-16 17:18:45',0,NULL,NULL,'Account','1',NULL,'1',NULL,NULL);
/*!40000 ALTER TABLE `email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_account`
--

DROP TABLE IF EXISTS `email_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_account` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `email_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `host` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `port` varchar(255) COLLATE utf8_unicode_ci DEFAULT '143',
  `ssl` tinyint(1) DEFAULT '0',
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `monitored_folders` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'INBOX',
  `sent_folder` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `store_sent_emails` tinyint(1) DEFAULT '0',
  `keep_fetched_emails_unread` tinyint(1) DEFAULT '0',
  `fetch_since` date DEFAULT NULL,
  `fetch_data` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C0F63E6BADF66B1A` (`assigned_user_id`),
  KEY `IDX_C0F63E6BB03A8386` (`created_by_id`),
  KEY `IDX_C0F63E6B99049ECE` (`modified_by_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_account`
--

LOCK TABLES `email_account` WRITE;
/*!40000 ALTER TABLE `email_account` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_address`
--

DROP TABLE IF EXISTS `email_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_address` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `lower` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `invalid` tinyint(1) DEFAULT '0',
  `opt_out` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_B08E074EE9A7B23` (`lower`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_address`
--

LOCK TABLES `email_address` WRITE;
/*!40000 ALTER TABLE `email_address` DISABLE KEYS */;
INSERT INTO `email_address` VALUES ('56499f620b4b34b0e','6132265@qq.com',0,'6132265@qq.com',0,0);
/*!40000 ALTER TABLE `email_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_email_address`
--

DROP TABLE IF EXISTS `email_email_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_email_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_address_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_type` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_42B914E6A832C1C959045DAAF19287C2` (`email_id`,`email_address_id`,`address_type`),
  KEY `IDX_42B914E6A832C1C9` (`email_id`),
  KEY `IDX_42B914E659045DAA` (`email_address_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_email_address`
--

LOCK TABLES `email_email_address` WRITE;
/*!40000 ALTER TABLE `email_email_address` DISABLE KEYS */;
INSERT INTO `email_email_address` VALUES (1,'56499f6207c428e65','56499f620b4b34b0e','to',0),(2,'56499f758931712f1','56499f620b4b34b0e','to',0);
/*!40000 ALTER TABLE `email_email_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_filter`
--

DROP TABLE IF EXISTS `email_filter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_filter` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `from` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body_contains` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `parent_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent_id`,`parent_type`),
  KEY `IDX_25E8CEDB03A8386` (`created_by_id`),
  KEY `IDX_25E8CED99049ECE` (`modified_by_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_filter`
--

LOCK TABLES `email_filter` WRITE;
/*!40000 ALTER TABLE `email_filter` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_filter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_queue_item`
--

DROP TABLE IF EXISTS `email_queue_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_queue_item` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempt_count` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `sent_at` datetime DEFAULT NULL,
  `email_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_test` tinyint(1) DEFAULT '0',
  `mass_email_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `target_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `target_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_16F89F37EF1946AB` (`mass_email_id`),
  KEY `target` (`target_id`,`target_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_queue_item`
--

LOCK TABLES `email_queue_item` WRITE;
/*!40000 ALTER TABLE `email_queue_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_queue_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_template`
--

DROP TABLE IF EXISTS `email_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_template` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8_unicode_ci,
  `is_html` tinyint(1) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9C0600CAADF66B1A` (`assigned_user_id`),
  KEY `IDX_9C0600CAB03A8386` (`created_by_id`),
  KEY `IDX_9C0600CA99049ECE` (`modified_by_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_template`
--

LOCK TABLES `email_template` WRITE;
/*!40000 ALTER TABLE `email_template` DISABLE KEYS */;
INSERT INTO `email_template` VALUES ('561dba84f0cfd1167','Case-to-Email auto-reply',0,'Case has been created','<p>{Person.name},</p><p>Case \'{Case.name}\' has been created with number {Case.number} and assigned to {User.name}.</p>',1,'2015-10-14 02:14:28','2015-10-14 02:14:28',NULL,'system',NULL);
/*!40000 ALTER TABLE `email_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_user`
--

DROP TABLE IF EXISTS `email_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT '0',
  `is_important` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_12A5F6CCA832C1C9A76ED395` (`email_id`,`user_id`),
  KEY `IDX_12A5F6CCA832C1C9` (`email_id`),
  KEY `IDX_12A5F6CCA76ED395` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_user`
--

LOCK TABLES `email_user` WRITE;
/*!40000 ALTER TABLE `email_user` DISABLE KEYS */;
INSERT INTO `email_user` VALUES (1,'56499f6207c428e65','1',0,0,0),(2,'56499f758931712f1','1',0,0,0);
/*!40000 ALTER TABLE `email_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_email_address`
--

DROP TABLE IF EXISTS `entity_email_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_email_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_address_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entity_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `primary` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9125AB4281257D5D59045DAAC412EE02` (`entity_id`,`email_address_id`,`entity_type`),
  KEY `IDX_9125AB4281257D5D` (`entity_id`),
  KEY `IDX_9125AB4259045DAA` (`email_address_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_email_address`
--

LOCK TABLES `entity_email_address` WRITE;
/*!40000 ALTER TABLE `entity_email_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `entity_email_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_phone_number`
--

DROP TABLE IF EXISTS `entity_phone_number`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_phone_number` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entity_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `primary` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_7459056F81257D5D39DFD528C412EE02` (`entity_id`,`phone_number_id`,`entity_type`),
  KEY `IDX_7459056F81257D5D` (`entity_id`),
  KEY `IDX_7459056F39DFD528` (`phone_number_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_phone_number`
--

LOCK TABLES `entity_phone_number` WRITE;
/*!40000 ALTER TABLE `entity_phone_number` DISABLE KEYS */;
INSERT INTO `entity_phone_number` VALUES (1,'5645904f9ff92317d','56499009d62dcf105','Account',1,0);
/*!40000 ALTER TABLE `entity_phone_number` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_team`
--

DROP TABLE IF EXISTS `entity_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `team_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entity_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8C2C1F3481257D5D296CD8AEC412EE02` (`entity_id`,`team_id`,`entity_type`),
  KEY `IDX_8C2C1F3481257D5D` (`entity_id`),
  KEY `IDX_8C2C1F34296CD8AE` (`team_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_team`
--

LOCK TABLES `entity_team` WRITE;
/*!40000 ALTER TABLE `entity_team` DISABLE KEYS */;
/*!40000 ALTER TABLE `entity_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `extension`
--

DROP TABLE IF EXISTS `extension`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `extension` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `version` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_list` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `is_installed` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9FB73D77B03A8386` (`created_by_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `extension`
--

LOCK TABLES `extension` WRITE;
/*!40000 ALTER TABLE `extension` DISABLE KEYS */;
/*!40000 ALTER TABLE `extension` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `external_account`
--

DROP TABLE IF EXISTS `external_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `external_account` (
  `id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `data` longtext COLLATE utf8_unicode_ci,
  `enabled` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `external_account`
--

LOCK TABLES `external_account` WRITE;
/*!40000 ALTER TABLE `external_account` DISABLE KEYS */;
/*!40000 ALTER TABLE `external_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `import`
--

DROP TABLE IF EXISTS `import`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `import` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `entity_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9D4ECE1DB03A8386` (`created_by_id`),
  KEY `IDX_9D4ECE1D93CB796C` (`file_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `import`
--

LOCK TABLES `import` WRITE;
/*!40000 ALTER TABLE `import` DISABLE KEYS */;
/*!40000 ALTER TABLE `import` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `import_entity`
--

DROP TABLE IF EXISTS `import_entity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `import_entity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entity_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `import_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_imported` tinyint(1) DEFAULT '0',
  `is_updated` tinyint(1) DEFAULT '0',
  `is_duplicate` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `entity` (`entity_id`,`entity_type`),
  KEY `IDX_7219FE70B6A263D9` (`import_id`),
  KEY `IDX_IMPORT_ENTITY_ENTITY_IMPORT` (`import_id`,`entity_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `import_entity`
--

LOCK TABLES `import_entity` WRITE;
/*!40000 ALTER TABLE `import_entity` DISABLE KEYS */;
/*!40000 ALTER TABLE `import_entity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inbound_email`
--

DROP TABLE IF EXISTS `inbound_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inbound_email` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `email_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `host` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `port` varchar(255) COLLATE utf8_unicode_ci DEFAULT '143',
  `ssl` tinyint(1) DEFAULT '0',
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `monitored_folders` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'INBOX',
  `fetch_data` longtext COLLATE utf8_unicode_ci,
  `create_case` tinyint(1) DEFAULT '0',
  `case_distribution` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Direct-Assignment',
  `target_user_position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reply` tinyint(1) DEFAULT '0',
  `reply_from_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reply_to_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reply_from_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `assign_to_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `team_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reply_email_template_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B3E134886D716643` (`assign_to_user_id`),
  KEY `IDX_B3E13488296CD8AE` (`team_id`),
  KEY `IDX_B3E134885AE5A3F7` (`reply_email_template_id`),
  KEY `IDX_B3E13488B03A8386` (`created_by_id`),
  KEY `IDX_B3E1348899049ECE` (`modified_by_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inbound_email`
--

LOCK TABLES `inbound_email` WRITE;
/*!40000 ALTER TABLE `inbound_email` DISABLE KEYS */;
/*!40000 ALTER TABLE `inbound_email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `integration`
--

DROP TABLE IF EXISTS `integration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `integration` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `data` longtext COLLATE utf8_unicode_ci,
  `enabled` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `integration`
--

LOCK TABLES `integration` WRITE;
/*!40000 ALTER TABLE `integration` DISABLE KEYS */;
/*!40000 ALTER TABLE `integration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Pending',
  `execute_time` datetime DEFAULT NULL,
  `service_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `method` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` longtext COLLATE utf8_unicode_ci,
  `attempts` int(11) DEFAULT NULL,
  `failed_attempts` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `scheduled_job_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FBD8E0F8A71ECAB0` (`scheduled_job_id`),
  KEY `IDX_JOB_EXECUTE_TIME` (`status`,`execute_time`),
  KEY `IDX_JOB_STATUS` (`status`,`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job`
--

LOCK TABLES `job` WRITE;
/*!40000 ALTER TABLE `job` DISABLE KEYS */;
/*!40000 ALTER TABLE `job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lead`
--

DROP TABLE IF EXISTS `lead`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lead` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `salutation_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'New',
  `source` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `opportunity_amount` double DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_street` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `do_not_call` tinyint(1) DEFAULT '0',
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opportunity_amount_currency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `campaign_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_account_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_contact_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_opportunity_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_289161CBB03A8386` (`created_by_id`),
  KEY `IDX_289161CB99049ECE` (`modified_by_id`),
  KEY `IDX_289161CBADF66B1A` (`assigned_user_id`),
  KEY `IDX_289161CBF639F774` (`campaign_id`),
  KEY `IDX_289161CB3AEF561B` (`created_account_id`),
  KEY `IDX_289161CB46252CEB` (`created_contact_id`),
  KEY `IDX_289161CB9E0CD2D1` (`created_opportunity_id`),
  KEY `IDX_LEAD_FIRST_NAME` (`first_name`,`deleted`),
  KEY `IDX_LEAD_NAME` (`first_name`,`last_name`),
  KEY `IDX_LEAD_STATUS` (`status`,`deleted`),
  KEY `IDX_LEAD_CREATED_AT` (`created_at`,`deleted`),
  KEY `IDX_LEAD_CREATED_AT_STATUS` (`created_at`,`status`),
  KEY `IDX_LEAD_ASSIGNED_USER` (`assigned_user_id`,`deleted`),
  KEY `IDX_LEAD_ASSIGNED_USER_STATUS` (`assigned_user_id`,`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lead`
--

LOCK TABLES `lead` WRITE;
/*!40000 ALTER TABLE `lead` DISABLE KEYS */;
INSERT INTO `lead` VALUES ('5649294799d9040a8',0,'','2','3','','New','',NULL,'','','','','','',0,'','2015-11-16 08:54:31','2015-11-16 08:54:31','',NULL,'1',NULL,'1',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `lead` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lead_meeting`
--

DROP TABLE IF EXISTS `lead_meeting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lead_meeting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lead_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meeting_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(36) COLLATE utf8_unicode_ci DEFAULT 'None',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_ACDBBD5755458D67433D9C` (`lead_id`,`meeting_id`),
  KEY `IDX_ACDBBD5755458D` (`lead_id`),
  KEY `IDX_ACDBBD5767433D9C` (`meeting_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lead_meeting`
--

LOCK TABLES `lead_meeting` WRITE;
/*!40000 ALTER TABLE `lead_meeting` DISABLE KEYS */;
/*!40000 ALTER TABLE `lead_meeting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lead_target_list`
--

DROP TABLE IF EXISTS `lead_target_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lead_target_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lead_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `target_list_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opted_out` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_7041AADD55458DF6C6AFE0` (`lead_id`,`target_list_id`),
  KEY `IDX_7041AADD55458D` (`lead_id`),
  KEY `IDX_7041AADDF6C6AFE0` (`target_list_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lead_target_list`
--

LOCK TABLES `lead_target_list` WRITE;
/*!40000 ALTER TABLE `lead_target_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `lead_target_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mass_email`
--

DROP TABLE IF EXISTS `mass_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mass_email` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Pending',
  `store_sent_emails` tinyint(1) DEFAULT '0',
  `from_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `from_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reply_to_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reply_to_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `email_template_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `campaign_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inbound_email_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AFBC1FDF131A730F` (`email_template_id`),
  KEY `IDX_AFBC1FDFF639F774` (`campaign_id`),
  KEY `IDX_AFBC1FDFE540AEA2` (`inbound_email_id`),
  KEY `IDX_AFBC1FDFB03A8386` (`created_by_id`),
  KEY `IDX_AFBC1FDF99049ECE` (`modified_by_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mass_email`
--

LOCK TABLES `mass_email` WRITE;
/*!40000 ALTER TABLE `mass_email` DISABLE KEYS */;
/*!40000 ALTER TABLE `mass_email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mass_email_target_list`
--

DROP TABLE IF EXISTS `mass_email_target_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mass_email_target_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mass_email_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `target_list_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6B9CE04DEF1946ABF6C6AFE0` (`mass_email_id`,`target_list_id`),
  KEY `IDX_6B9CE04DEF1946AB` (`mass_email_id`),
  KEY `IDX_6B9CE04DF6C6AFE0` (`target_list_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mass_email_target_list`
--

LOCK TABLES `mass_email_target_list` WRITE;
/*!40000 ALTER TABLE `mass_email_target_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `mass_email_target_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meeting`
--

DROP TABLE IF EXISTS `meeting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meeting` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Planned',
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `duration` int(11) DEFAULT '3600',
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `parent_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent_id`,`parent_type`),
  KEY `IDX_F515E1399B6B5FBA` (`account_id`),
  KEY `IDX_F515E139B03A8386` (`created_by_id`),
  KEY `IDX_F515E13999049ECE` (`modified_by_id`),
  KEY `IDX_F515E139ADF66B1A` (`assigned_user_id`),
  KEY `IDX_MEETING_DATE_START_STATUS` (`date_start`,`status`),
  KEY `IDX_MEETING_DATE_START` (`date_start`,`deleted`),
  KEY `IDX_MEETING_STATUS` (`status`,`deleted`),
  KEY `IDX_MEETING_ASSIGNED_USER` (`assigned_user_id`,`deleted`),
  KEY `IDX_MEETING_ASSIGNED_USER_STATUS` (`assigned_user_id`,`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meeting`
--

LOCK TABLES `meeting` WRITE;
/*!40000 ALTER TABLE `meeting` DISABLE KEYS */;
/*!40000 ALTER TABLE `meeting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meeting_user`
--

DROP TABLE IF EXISTS `meeting_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meeting_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meeting_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(36) COLLATE utf8_unicode_ci DEFAULT 'None',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_61622E9BA76ED39567433D9C` (`user_id`,`meeting_id`),
  KEY `IDX_61622E9BA76ED395` (`user_id`),
  KEY `IDX_61622E9B67433D9C` (`meeting_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meeting_user`
--

LOCK TABLES `meeting_user` WRITE;
/*!40000 ALTER TABLE `meeting_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `meeting_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `note`
--

DROP TABLE IF EXISTS `note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `note` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `post` longtext COLLATE utf8_unicode_ci,
  `data` longtext COLLATE utf8_unicode_ci,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `parent_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `related_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `related_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `super_parent_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `super_parent_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number` (`number`),
  UNIQUE KEY `UNIQ_CFBDFA1496901F54` (`number`),
  KEY `parent` (`parent_id`,`parent_type`),
  KEY `related` (`related_id`,`related_type`),
  KEY `IDX_CFBDFA14B03A8386` (`created_by_id`),
  KEY `IDX_CFBDFA1499049ECE` (`modified_by_id`),
  KEY `superParent` (`super_parent_id`,`super_parent_type`),
  KEY `IDX_NOTE_CREATED_AT` (`created_at`),
  KEY `IDX_NOTE_PARENT_AND_SUPER_PARENT` (`parent_id`,`parent_type`,`super_parent_id`,`super_parent_type`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `note`
--

LOCK TABLES `note` WRITE;
/*!40000 ALTER TABLE `note` DISABLE KEYS */;
INSERT INTO `note` VALUES ('561e57eaafc80e908',0,NULL,'[]','Create',1,'2015-10-14 13:26:02','2015-10-14 13:26:02','561e57eaad4707547','Account',NULL,NULL,'1',NULL,NULL,NULL),('5645904fb7f14ea1e',0,NULL,'[]','Create',2,'2015-11-13 15:25:03','2015-11-13 15:25:03','5645904f9ff92317d','Account',NULL,NULL,'1',NULL,NULL,NULL),('564929479a585da74',0,NULL,'{\"statusValue\":\"New\",\"statusField\":\"status\",\"statusStyle\":\"primary\"}','Create',3,'2015-11-16 08:54:31','2015-11-16 08:54:31','5649294799d9040a8','Lead',NULL,NULL,'1',NULL,NULL,NULL),('5649307ebb701c344',0,NULL,'{\"statusValue\":\"Prospecting\",\"statusField\":\"stage\",\"statusStyle\":\"primary\"}','Create',4,'2015-11-16 09:25:18','2015-11-16 09:25:18','5649307ebb29df279','Opportunity',NULL,NULL,'1',NULL,NULL,NULL),('564eaf938d1dc0c1f',0,NULL,'{\"assignedUserId\":\"564d9455bf3e94471\",\"assignedUserName\":\"fox ye\"}','Assign',5,'2015-11-20 13:28:51','2015-11-20 13:28:51','5645904f9ff92317d','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebb87146b83312',0,NULL,'[]','Create',6,'2015-11-20 14:19:51','2015-11-20 14:19:51','564ebb8710264c056','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebb8c1697591cc',0,NULL,'[]','Create',7,'2015-11-20 14:19:56','2015-11-20 14:19:56','564ebb8c164a941dc','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebb9385b73e03c',0,NULL,'[]','Create',8,'2015-11-20 14:20:03','2015-11-20 14:20:03','564ebb938549eaca1','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebc7d88782170e',0,NULL,'[]','Create',9,'2015-11-20 14:23:57','2015-11-20 14:23:57','564ebc7d87fea60eb','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebc8354efc646c',0,NULL,'[]','Create',10,'2015-11-20 14:24:03','2015-11-20 14:24:03','564ebc835472c845c','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebc87a4bbcb5fc',0,NULL,'[]','Create',11,'2015-11-20 14:24:07','2015-11-20 14:24:07','564ebc87a4729b4a7','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebc8da47b6948a',0,NULL,'[]','Create',12,'2015-11-20 14:24:13','2015-11-20 14:24:13','564ebc8da064c1513','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebc94367feec9e',0,NULL,'[]','Create',13,'2015-11-20 14:24:20','2015-11-20 14:24:20','564ebc9435e37456a','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebc9b2e7fe369b',0,NULL,'[]','Create',14,'2015-11-20 14:24:27','2015-11-20 14:24:27','564ebc9b2dfd840da','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebca1422a49463',0,NULL,'[]','Create',15,'2015-11-20 14:24:33','2015-11-20 14:24:33','564ebca141867cefe','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebca6906c1754b',0,NULL,'[]','Create',16,'2015-11-20 14:24:38','2015-11-20 14:24:38','564ebca6901bd6cb0','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebcad40cb5246d',0,NULL,'[]','Create',17,'2015-11-20 14:24:45','2015-11-20 14:24:45','564ebcad406b88921','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebcb27e85b74a8',0,NULL,'[]','Create',18,'2015-11-20 14:24:50','2015-11-20 14:24:50','564ebcb27e3da2764','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebcb68324f6ac8',0,NULL,'[]','Create',19,'2015-11-20 14:24:54','2015-11-20 14:24:54','564ebcb682dcadff2','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebcbbc2ef096e5',0,NULL,'[]','Create',20,'2015-11-20 14:24:59','2015-11-20 14:24:59','564ebcbbc2a51d013','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebcc223dc7a9a0',0,NULL,'[]','Create',21,'2015-11-20 14:25:06','2015-11-20 14:25:06','564ebcc223971199a','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebcca20b57b13d',0,NULL,'[]','Create',22,'2015-11-20 14:25:14','2015-11-20 14:25:14','564ebcca205c90981','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebcce4eefd8446',0,NULL,'[]','Create',23,'2015-11-20 14:25:18','2015-11-20 14:25:18','564ebcce4e9838636','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebcd38d2a64a92',0,NULL,'[]','Create',24,'2015-11-20 14:25:23','2015-11-20 14:25:23','564ebcd38ce0c096f','Account',NULL,NULL,'1',NULL,NULL,NULL),('564ebcdbc8e687692',0,NULL,'[]','Create',25,'2015-11-20 14:25:31','2015-11-20 14:25:31','564ebcdbc88a6054b','Account',NULL,NULL,'1',NULL,NULL,NULL);
/*!40000 ALTER TABLE `note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `data` longtext COLLATE utf8_unicode_ci,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `read` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci,
  `user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number` (`number`),
  UNIQUE KEY `UNIQ_BF5476CA96901F54` (`number`),
  KEY `IDX_BF5476CAA76ED395` (`user_id`),
  KEY `IDX_NOTIFICATION_CREATED_AT` (`created_at`),
  KEY `IDX_NOTIFICATION_USER` (`user_id`,`created_at`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification`
--

LOCK TABLES `notification` WRITE;
/*!40000 ALTER TABLE `notification` DISABLE KEYS */;
INSERT INTO `notification` VALUES ('564eaf938eea6',0,1,'{\"noteId\":\"564eaf938d1dc0c1f\"}','Note',1,'2015-11-20 13:28:51',NULL,'564d9455bf3e94471'),('565bbaa8bfbfabc72',0,2,'{\"entityType\":\"Account\",\"entityId\":\"5645904f9ff92317d\",\"entityName\":\"1111111111111\",\"userId\":\"1\",\"userName\":\"Admin\"}','EntityRemoved',1,'2015-11-30 10:55:36',NULL,'564d9455bf3e94471');
/*!40000 ALTER TABLE `notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opportunity`
--

DROP TABLE IF EXISTS `opportunity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opportunity` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `amount` double DEFAULT NULL,
  `stage` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Prospecting',
  `probability` int(11) DEFAULT NULL,
  `lead_source` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `close_date` date DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `amount_currency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `campaign_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_template` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_8389C3D79B6B5FBA` (`account_id`),
  KEY `IDX_8389C3D7F639F774` (`campaign_id`),
  KEY `IDX_8389C3D7B03A8386` (`created_by_id`),
  KEY `IDX_8389C3D799049ECE` (`modified_by_id`),
  KEY `IDX_8389C3D7ADF66B1A` (`assigned_user_id`),
  KEY `IDX_OPPORTUNITY_STAGE` (`stage`,`deleted`),
  KEY `IDX_OPPORTUNITY_ASSIGNED_USER` (`assigned_user_id`,`deleted`),
  KEY `IDX_OPPORTUNITY_CREATED_AT` (`created_at`,`deleted`),
  KEY `IDX_OPPORTUNITY_CREATED_AT_STAGE` (`created_at`,`stage`),
  KEY `IDX_OPPORTUNITY_ASSIGNED_USER_STAGE` (`assigned_user_id`,`stage`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opportunity`
--

LOCK TABLES `opportunity` WRITE;
/*!40000 ALTER TABLE `opportunity` DISABLE KEYS */;
INSERT INTO `opportunity` VALUES ('5649307ebb29df279','111111111',0,NULL,'Prospecting',NULL,'',NULL,NULL,'2015-11-16 09:25:18','2015-11-18 16:27:32',NULL,'5645904f9ff92317d',NULL,'1','1','1',1),('56498353317047393','33333333',0,NULL,'Prospecting',NULL,'',NULL,NULL,'2015-11-16 15:18:43','2015-11-18 16:27:44',NULL,'564ebc9b2dfd840da',NULL,'1','1','1',0),('565567f2dae4d47d6','111111',0,NULL,'Prospecting',NULL,'',NULL,'','2015-11-25 15:49:06','2015-11-25 15:49:06',NULL,'564ebcb27e3da2764',NULL,'1',NULL,'1',0);
/*!40000 ALTER TABLE `opportunity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_change_request`
--

DROP TABLE IF EXISTS `password_change_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_change_request` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `request_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AC3A261F427EB8A5` (`request_id`),
  KEY `IDX_AC3A261FA76ED395` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_change_request`
--

LOCK TABLES `password_change_request` WRITE;
/*!40000 ALTER TABLE `password_change_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_change_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phone_number`
--

DROP TABLE IF EXISTS `phone_number`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phone_number` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6B01BC5B5E237E06` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phone_number`
--

LOCK TABLES `phone_number` WRITE;
/*!40000 ALTER TABLE `phone_number` DISABLE KEYS */;
INSERT INTO `phone_number` VALUES ('56499009d62dcf105','18011996617',0,'Office'),('5656a2b2c23ce8b89','1288282',0,'Office');
/*!40000 ALTER TABLE `phone_number` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preferences`
--

DROP TABLE IF EXISTS `preferences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preferences` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `time_zone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_format` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'MM/DD/YYYY',
  `time_format` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'HH:mm',
  `week_start` int(11) DEFAULT '0',
  `thousand_separator` varchar(1) COLLATE utf8_unicode_ci DEFAULT ',',
  `decimal_mark` varchar(1) COLLATE utf8_unicode_ci DEFAULT '.',
  `default_currency` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'USD',
  `dashboard_layout` longtext COLLATE utf8_unicode_ci,
  `dashlet_options` longtext COLLATE utf8_unicode_ci,
  `preset_filters` longtext COLLATE utf8_unicode_ci,
  `smtp_server` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_port` int(11) DEFAULT '25',
  `smtp_auth` tinyint(1) DEFAULT '0',
  `smtp_security` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'en_US',
  `export_delimiter` varchar(1) COLLATE utf8_unicode_ci DEFAULT ',',
  `receive_assignment_email_notifications` tinyint(1) DEFAULT '1',
  `signature` longtext COLLATE utf8_unicode_ci,
  `default_reminders` longtext COLLATE utf8_unicode_ci,
  `theme` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `use_custom_tab_list` tinyint(1) DEFAULT '0',
  `tab_list` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preferences`
--

LOCK TABLES `preferences` WRITE;
/*!40000 ALTER TABLE `preferences` DISABLE KEYS */;
/*!40000 ALTER TABLE `preferences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reminder`
--

DROP TABLE IF EXISTS `reminder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reminder` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `remind_at` datetime DEFAULT NULL,
  `start_at` datetime DEFAULT NULL,
  `type` varchar(36) COLLATE utf8_unicode_ci DEFAULT 'Popup',
  `seconds` int(11) DEFAULT '0',
  `entity_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entity_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_40374F40BBE50DA3` (`remind_at`),
  KEY `IDX_40374F40B75363F7` (`start_at`),
  KEY `IDX_40374F408CDE5729` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reminder`
--

LOCK TABLES `reminder` WRITE;
/*!40000 ALTER TABLE `reminder` DISABLE KEYS */;
/*!40000 ALTER TABLE `reminder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `assignment_permission` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'not-set',
  `user_permission` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'not-set',
  `data` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES ('5656c6ea352feace6','1223',1,'not-set','not-set','{}'),('565befbe2819904b0','坐席角色',0,'no','team','{\"Ticket\":{\"read\":\"own\",\"edit\":\"own\",\"delete\":\"own\"},\"Account\":{\"read\":\"own\",\"edit\":\"own\",\"delete\":\"own\"},\"Opportunity\":{\"read\":\"own\",\"edit\":\"own\",\"delete\":\"own\"},\"Track\":{\"read\":\"all\",\"edit\":\"no\",\"delete\":\"no\"},\"Cdr\":{\"read\":\"own\",\"edit\":\"no\",\"delete\":\"no\"}}'),('565bf02fad6e6fc4c','经理角色',0,'team','team','{\"Agent\":{\"read\":\"team\",\"edit\":\"team\",\"delete\":\"team\"},\"Ticket\":{\"read\":\"team\",\"edit\":\"team\",\"delete\":\"team\"},\"Campaign\":{\"read\":\"team\",\"edit\":\"team\",\"delete\":\"team\"},\"Account\":{\"read\":\"team\",\"edit\":\"team\",\"delete\":\"team\"},\"Opportunity\":{\"read\":\"team\",\"edit\":\"team\",\"delete\":\"team\"},\"Track\":{\"read\":\"all\",\"edit\":\"no\",\"delete\":\"no\"},\"Cdr\":{\"read\":\"team\",\"edit\":\"team\",\"delete\":\"team\"}}');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_team`
--

DROP TABLE IF EXISTS `role_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `team_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_7A5FD48BD60322AC296CD8AE` (`role_id`,`team_id`),
  KEY `IDX_7A5FD48BD60322AC` (`role_id`),
  KEY `IDX_7A5FD48B296CD8AE` (`team_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_team`
--

LOCK TABLES `role_team` WRITE;
/*!40000 ALTER TABLE `role_team` DISABLE KEYS */;
INSERT INTO `role_team` VALUES (1,'565bf02fad6e6fc4c','565bf0650f1a73340',0),(2,'565befbe2819904b0','565bf0650f1a73340',0);
/*!40000 ALTER TABLE `role_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_332CA4DDD60322ACA76ED395` (`role_id`,`user_id`),
  KEY `IDX_332CA4DDD60322AC` (`role_id`),
  KEY `IDX_332CA4DDA76ED395` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (1,'565bf02fad6e6fc4c','564d9455bf3e94471',0),(2,'565befbe2819904b0','565bf10099ee6fd0d',0);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scheduled_job`
--

DROP TABLE IF EXISTS `scheduled_job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scheduled_job` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `job` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scheduling` varchar(255) COLLATE utf8_unicode_ci DEFAULT '*/10 * * * *',
  `last_run` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_800A50CEB03A8386` (`created_by_id`),
  KEY `IDX_800A50CE99049ECE` (`modified_by_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scheduled_job`
--

LOCK TABLES `scheduled_job` WRITE;
/*!40000 ALTER TABLE `scheduled_job` DISABLE KEYS */;
INSERT INTO `scheduled_job` VALUES ('561dba84f273b0f53','Check Group Email Accounts',0,'CheckInboundEmails','Active','*/4 * * * *',NULL,'2015-10-14 02:14:28','2015-10-14 02:14:28','system',NULL),('561dba84f2d412923','Check Personal Email Accounts',0,'CheckEmailAccounts','Active','*/5 * * * *',NULL,'2015-10-14 02:14:28','2015-10-14 02:14:28','system',NULL),('561dba84f30e97456','Send Email Reminders',0,'SendEmailReminders','Active','*/2 * * * *',NULL,'2015-10-14 02:14:28','2015-10-14 02:14:28','system',NULL),('561dba84f357b705a','Clean-up',0,'Cleanup','Active','1 1 * * 0',NULL,'2015-10-14 02:14:28','2015-10-14 02:14:28','system',NULL),('561dba84f3a8b125e','Send Mass Emails',0,'ProcessMassEmail','Active','0 1-5 * * *',NULL,'2015-10-14 02:14:28','2015-10-14 02:14:28','system',NULL);
/*!40000 ALTER TABLE `scheduled_job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scheduled_job_log_record`
--

DROP TABLE IF EXISTS `scheduled_job_log_record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scheduled_job_log_record` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `execution_time` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `scheduled_job_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_615BB231A71ECAB0` (`scheduled_job_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scheduled_job_log_record`
--

LOCK TABLES `scheduled_job_log_record` WRITE;
/*!40000 ALTER TABLE `scheduled_job_log_record` DISABLE KEYS */;
/*!40000 ALTER TABLE `scheduled_job_log_record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscription`
--

DROP TABLE IF EXISTS `subscription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entity_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `entity` (`entity_id`,`entity_type`),
  KEY `IDX_A3C664D3A76ED395` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscription`
--

LOCK TABLES `subscription` WRITE;
/*!40000 ALTER TABLE `subscription` DISABLE KEYS */;
INSERT INTO `subscription` VALUES (3,'5649294799d9040a8','Lead','1'),(4,'5649307ebb29df279','Opportunity','1'),(10,'564ebb8710264c056','Account','1'),(12,'564ebb938549eaca1','Account','1'),(13,'564ebc7d87fea60eb','Account','1'),(14,'564ebc835472c845c','Account','1'),(15,'564ebc87a4729b4a7','Account','1'),(16,'564ebc8da064c1513','Account','1'),(17,'564ebc9435e37456a','Account','1'),(18,'564ebc9b2dfd840da','Account','1'),(19,'564ebca141867cefe','Account','1'),(20,'564ebca6901bd6cb0','Account','1'),(21,'564ebcad406b88921','Account','1'),(22,'564ebcb27e3da2764','Account','1'),(23,'564ebcb682dcadff2','Account','1'),(24,'564ebcbbc2a51d013','Account','1'),(25,'564ebcc223971199a','Account','1'),(26,'564ebcca205c90981','Account','1'),(27,'564ebcce4e9838636','Account','1'),(28,'564ebcd38ce0c096f','Account','1'),(29,'564ebcdbc88a6054b','Account','1');
/*!40000 ALTER TABLE `subscription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `target`
--

DROP TABLE IF EXISTS `target`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `target` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `salutation_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_street` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `do_not_call` tinyint(1) DEFAULT '0',
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_466F2FFCB03A8386` (`created_by_id`),
  KEY `IDX_466F2FFC99049ECE` (`modified_by_id`),
  KEY `IDX_466F2FFCADF66B1A` (`assigned_user_id`),
  KEY `IDX_TARGET_FIRST_NAME` (`first_name`,`deleted`),
  KEY `IDX_TARGET_NAME` (`first_name`,`last_name`),
  KEY `IDX_TARGET_ASSIGNED_USER` (`assigned_user_id`,`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `target`
--

LOCK TABLES `target` WRITE;
/*!40000 ALTER TABLE `target` DISABLE KEYS */;
/*!40000 ALTER TABLE `target` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `target_list`
--

DROP TABLE IF EXISTS `target_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `target_list` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `campaigns_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_89D0EEA9B03A8386` (`created_by_id`),
  KEY `IDX_89D0EEA999049ECE` (`modified_by_id`),
  KEY `IDX_89D0EEA9ADF66B1A` (`assigned_user_id`),
  KEY `campaigns` (`campaigns_id`),
  KEY `IDX_TARGET_LIST_CREATED_AT` (`created_at`,`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `target_list`
--

LOCK TABLES `target_list` WRITE;
/*!40000 ALTER TABLE `target_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `target_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `target_list_user`
--

DROP TABLE IF EXISTS `target_list_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `target_list_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `target_list_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opted_out` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FCE97B8CA76ED395F6C6AFE0` (`user_id`,`target_list_id`),
  KEY `IDX_FCE97B8CA76ED395` (`user_id`),
  KEY `IDX_FCE97B8CF6C6AFE0` (`target_list_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `target_list_user`
--

LOCK TABLES `target_list_user` WRITE;
/*!40000 ALTER TABLE `target_list_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `target_list_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Not Started',
  `priority` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Normal',
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `date_start_date` date DEFAULT NULL,
  `date_end_date` date DEFAULT NULL,
  `date_completed` datetime DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `parent_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent_id`,`parent_type`),
  KEY `IDX_527EDB259B6B5FBA` (`account_id`),
  KEY `IDX_527EDB25B03A8386` (`created_by_id`),
  KEY `IDX_527EDB2599049ECE` (`modified_by_id`),
  KEY `IDX_527EDB25ADF66B1A` (`assigned_user_id`),
  KEY `IDX_TASK_DATE_START_STATUS` (`date_start`,`status`),
  KEY `IDX_TASK_DATE_END_STATUS` (`date_end`,`status`),
  KEY `IDX_TASK_DATE_START` (`date_start`,`deleted`),
  KEY `IDX_TASK_STATUS` (`status`,`deleted`),
  KEY `IDX_TASK_ASSIGNED_USER` (`assigned_user_id`,`deleted`),
  KEY `IDX_TASK_ASSIGNED_USER_STATUS` (`assigned_user_id`,`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `position_list` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES ('565bf0650f1a73340','电销组',0,'[\"经理\",\"坐席\"]','2015-11-30 14:44:53');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_user`
--

DROP TABLE IF EXISTS `team_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5C722232296CD8AEA76ED395` (`team_id`,`user_id`),
  KEY `IDX_5C722232296CD8AE` (`team_id`),
  KEY `IDX_5C722232A76ED395` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_user`
--

LOCK TABLES `team_user` WRITE;
/*!40000 ALTER TABLE `team_user` DISABLE KEYS */;
INSERT INTO `team_user` VALUES (1,'565bf0650f1a73340','564d9455bf3e94471','经理',0),(2,'565bf0650f1a73340','565bf10099ee6fd0d','坐席',0);
/*!40000 ALTER TABLE `team_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `template`
--

DROP TABLE IF EXISTS `template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `template` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `body` longtext COLLATE utf8_unicode_ci,
  `header` longtext COLLATE utf8_unicode_ci,
  `footer` longtext COLLATE utf8_unicode_ci,
  `entity_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `left_margin` double DEFAULT '10',
  `right_margin` double DEFAULT '10',
  `top_margin` double DEFAULT '10',
  `bottom_margin` double DEFAULT '25',
  `print_footer` tinyint(1) DEFAULT '0',
  `footer_position` double DEFAULT '15',
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_97601F83B03A8386` (`created_by_id`),
  KEY `IDX_97601F8399049ECE` (`modified_by_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `template`
--

LOCK TABLES `template` WRITE;
/*!40000 ALTER TABLE `template` DISABLE KEYS */;
/*!40000 ALTER TABLE `template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_97A0ADA3B03A8386` (`created_by_id`),
  KEY `IDX_97A0ADA399049ECE` (`modified_by_id`),
  KEY `IDX_97A0ADA3ADF66B1A` (`assigned_user_id`),
  KEY `IDX_TICKET_NAME` (`name`,`deleted`),
  KEY `IDX_TICKET_ASSIGNED_USER` (`assigned_user_id`,`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `track`
--

DROP TABLE IF EXISTS `track`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `track` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_template` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_D6E3F8A6B03A8386` (`created_by_id`),
  KEY `IDX_D6E3F8A699049ECE` (`modified_by_id`),
  KEY `IDX_D6E3F8A6ADF66B1A` (`assigned_user_id`),
  KEY `IDX_TRACK_NAME` (`name`,`deleted`),
  KEY `IDX_TRACK_ASSIGNED_USER` (`assigned_user_id`,`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `track`
--

LOCK TABLES `track` WRITE;
/*!40000 ALTER TABLE `track` DISABLE KEYS */;
INSERT INTO `track` VALUES ('564996783498bb778','111111111',0,NULL,'2015-11-16 16:40:24','2015-11-16 16:40:24','1',NULL,'1',0),('564c151aef0c86789','33333333',0,NULL,'2015-11-18 14:05:14','2015-11-18 14:05:14','1',NULL,'1',0);
/*!40000 ALTER TABLE `track` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unique_id`
--

DROP TABLE IF EXISTS `unique_id`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unique_id` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `data` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `created_by_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E3C683435E237E06` (`name`),
  KEY `IDX_E3C68343B03A8386` (`created_by_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unique_id`
--

LOCK TABLES `unique_id` WRITE;
/*!40000 ALTER TABLE `unique_id` DISABLE KEYS */;
/*!40000 ALTER TABLE `unique_id` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `is_admin` tinyint(1) DEFAULT '0',
  `user_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salutation_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `is_active` tinyint(1) DEFAULT '1',
  `is_super_admin` tinyint(1) DEFAULT '0',
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `default_team_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8D93D649DBE989EB` (`default_team_id`),
  KEY `IDX_8D93D64986383B10` (`avatar_id`),
  KEY `IDX_8D93D6493414710B` (`agent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('system',0,0,'system',NULL,NULL,'','System',1,0,NULL,'2015-10-14 02:13:54',NULL,NULL,NULL),('1',0,1,'admin','XHSMDlNBADgWuxBKQSQDrAv1wMUCHoEu0oWMZxzzCzje/7CHa9fZ8F9l.yRNvq4jRVqrOe99DG5wGbre.xCuw/','','','Admin',1,0,'','2015-10-14 02:14:00',NULL,NULL,'5656c18f6fb04b6d4'),('564d9455bf3e94471',0,0,'foxye','Lzf1m4VATIKGRbPheBdlHGaNcb1vJeQx/TXl6mVf06RQlG4rBz7qXFXULXw/wbOrLDrVP/R2NZRdfwM4EGdJA1','','fox','ye',1,0,'','2015-11-19 17:20:21',NULL,NULL,'5656c18f6fb04b6d4'),('565bf10099ee6fd0d',0,0,'agent1','Lzf1m4VATIKGRbPheBdlHGaNcb1vJeQx/TXl6mVf06RQlG4rBz7qXFXULXw/wbOrLDrVP/R2NZRdfwM4EGdJA1','Mr.','马','云',1,0,'','2015-11-30 14:47:28',NULL,NULL,'5656ce69428dbcb20');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-01 15:38:22
