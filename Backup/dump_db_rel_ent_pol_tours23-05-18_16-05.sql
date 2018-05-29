-- MySQL dump 10.13  Distrib 5.7.21, for osx10.13 (x86_64)
--
-- Host: 127.0.0.1    Database: db_rel_ent_pol_tours
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adresse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ville` int(11) DEFAULT NULL,
  `adresse` varchar(255) NOT NULL DEFAULT 'Inconnue',
  `code_postal` varchar(45) NOT NULL DEFAULT 'Inconnu',
  `complement_adresse` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Adresse_Ville1_idx` (`id_ville`),
  CONSTRAINT `FK_C35F0816AD4698F3` FOREIGN KEY (`id_ville`) REFERENCES `ville` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=360 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adresse`
--

LOCK TABLES `adresse` WRITE;
/*!40000 ALTER TABLE `adresse` DISABLE KEYS */;
INSERT INTO `adresse` VALUES (1,1,'1 Rue de la Gloriette','1250',NULL),(2,10,'2 Rue de la Gloriette','42200',NULL),(3,20,'3 Rue Germain','42300',NULL),(4,30,'4 Rue Leclerc','42400',NULL),(5,42,'5 Rue du Général Garrus','42500',NULL),(6,50,'6 Rue de la Mère Tatin','45600',NULL),(7,60,'7 Rue Lovelace','23569',NULL),(8,70,'8 Rue Rue','56963',NULL),(9,80,'9 Rue de la Réunion','10236',NULL),(10,90,'10 Rue Jean Pierre','45240',NULL),(11,100,'11 Rue Bernard','45412',NULL),(12,110,'12 Rue Bannier','37245',NULL),(13,120,'13 Rue Perlimpimpin','1234',NULL),(14,130,'14 Rue Virgule','3564','Escalier 3, porte 17'),(15,140,'15 Rue Père Dodu','8963',NULL),(16,150,'16 Rue Quarante Deux','36589','Studio 203'),(17,160,'17 Rue de la Qualitey','35789',NULL),(18,170,'18 Rue du Test','1255',NULL),(19,180,'19 Rue des Marcheurs','2586',NULL),(20,190,'20 Rue Turing','12345',NULL),(21,200,'21 Rue Yorke','36251',NULL),(22,210,'22 Rue du Fromage','23654',NULL),(23,220,'23 Rue Haute','3214',NULL),(24,230,'24 Rue Oscar','23654','Résidence du Portier'),(25,240,'25 Rue du Restaurant','1250',NULL),(26,250,'26 Rue Baguette','42369',NULL),(27,260,'27 Rue Lapin','9541',NULL),(28,270,'28 Rue du Captain','3214',NULL),(29,280,'29 Rue du Nexus','1111',NULL),(30,290,'30 Rue des Programmeurs','45310',NULL),(31,300,'31 Rue Verte','31200',NULL),(32,310,'32 Rue Blanche','32200',NULL),(33,320,'33 Rue Bleue','33200',NULL),(34,330,'34 Rue Grande','34200',NULL),(35,340,'35 Rue Dufour','35200','Porte 6'),(36,350,'36 Rue Rouge','36200',NULL),(37,360,'37 Rue Petite','37200',NULL),(38,370,'38 Rue Des Inspirés','38200',NULL),(39,380,'39 Rue Lambda','39200',NULL),(40,390,'40 Rue Perlimpimpin','40200',NULL),(41,400,'41 Rue Jeanne d\'Arc','41200',NULL),(42,410,'42 Rue Daniel','42200',NULL),(43,420,'43 Rue Bel Ami','43200',NULL),(44,430,'44 Rue Raisin','44200',NULL),(45,440,'45 Rue Jaune','45200',NULL),(46,450,'46 Rue du Grenier','46200',NULL),(47,460,'47 Rue du Cinéma','47200',NULL),(48,470,'48 Rue de l\'Hopital','48200',NULL),(49,480,'49 Rue Ruru','49200',NULL),(50,490,'50 Rue Trois','50200',NULL),(51,500,'51 Rue Froide','51200',NULL),(52,510,'52 Rue Laniv','52200',NULL),(53,520,'53 Rue du Sport','53200',NULL),(54,530,'54 Rue Laly','54200',NULL),(55,540,'55 Rue Pate','55200',NULL),(56,550,'56 Rue Kimonte','56200',NULL),(57,560,'57 Rue Kidécent','57200',NULL),(58,570,'58 Rue Kémoche','58200',NULL),(59,580,'59 Rue Poutre','59200','Loft 4'),(60,590,'60 Rue des Plantes','60200',NULL),(61,600,'61 Rue Soleil','61200',NULL),(62,610,'62 Rue Lune','62200',NULL),(63,620,'63 Rue Mars','63200',NULL),(64,630,'64 Rue Bretonne','64200',NULL),(65,640,'65 Rue Laule','65200',NULL),(66,650,'66 Rue Dulubu','66200',NULL),(67,660,'67 Rue Dorée','67200',NULL),(68,670,'68 Rue Forte','68200',NULL),(69,680,'69 Rue Faible','69200',NULL),(70,690,'70 Rue Fus','70200',NULL),(71,14148,'LE RIPAULT','37260',NULL),(72,31660,'1 Avenue de l\'Europe Citalium','77144',NULL),(73,35920,'1 Place Jean Millier','92400',NULL),(74,14139,'1 Rue des Chevallerais','37390','Chez mme françoise baraton'),(75,31912,'1 Rue des Hérons','78182',NULL),(76,14124,'10 boulevard Tonnellé','37032','Bât vialle'),(77,36019,'103 RUE JEAN JAURES','94700',NULL),(78,17162,'12 rue Alexandre Avisse, B.P. 1202','45000',NULL),(79,20554,'12 rue de la Monnaie, B.P. 60315','54006',NULL),(80,17162,'123-125 rue Faubourg Bannier','45000',NULL),(81,30293,'12A rue du Pré Faucon, C.S. 40435','74940',NULL),(82,6038,'13 Bis Rue de la Buffeterie','17000',NULL),(83,14124,'13 Mail Francis de Miomandre','37200',NULL),(84,11101,'13 Route de l\'Innovation','29000',NULL),(85,19139,'13 rue des Augustins, CS 60013','51005',NULL),(86,35781,'14 rue de La Pierre Follège','91660',NULL),(87,21468,'15 avenue de Kerzo','56290',NULL),(88,17162,'15 avenue des Droits de l\'Homme','45000',NULL),(89,21914,'15 rue au Bois','57000',NULL),(90,14505,'15 rue Pierre Dupont','38000',NULL),(91,11719,'16 AVENUE EDOUARD BELIN','31055',NULL),(92,30438,'16 Bld des Italiens','75009','09EME'),(93,28153,'170 avenue Thiers, C.S. 30127','69455','06EME'),(94,5022,'18 rue d\'Armor','14000',NULL),(95,15869,'19 rue Vallée MAILLARD','41013',NULL),(96,14124,'2 Boulevard Tonnellé','37044',NULL),(97,14058,'2 impasse de La Briaudière','37510',NULL),(98,28153,'2 rue Antoine Charial, C.S. 33927','69426','03EME'),(99,16629,'2 Rue du Charron','44806',NULL),(100,34080,'2 Rue Johannes Gutemberg','85503','Zi du bois joly sud'),(101,11705,'20 chemin de la Bécasse, \"Cantalause\"','31450',NULL),(102,14124,'20 place Jean Jaurès','37000',NULL),(103,14124,'23 RUE ETTORE BUGATTI','37204','CEDEX 03'),(104,28210,'23 Rue Henri Brosse','69310',NULL),(105,35938,'26 avenue de La Republique','93170',NULL),(106,35914,'27 rue de Vanves','92772',NULL),(107,31860,'283 rue de la Minière','78530',NULL),(108,35908,'3 Boulevard Gallieni','92445',NULL),(109,30438,'3 RUE MICHEL ANGE','75016','16EME'),(110,16629,'31 Rue Bobby Sands','44800',NULL),(111,14122,'32 Rue Augustin Fresnel','37170',NULL),(112,16756,'32 rue de Coulonge','44300','Parc tertiaire eraudière'),(113,14124,'4  bis rue Emile Zola','37000',NULL),(114,14092,'4 avenue Jean Monnet','37160',NULL),(115,17162,'4 passage de la Râpe','45000','Zac de l\'ilot imm val de loire ilot a'),(116,34243,'4 rue Caroline Aigle','86000',NULL),(117,11719,'4 Rue du Prof. Pierre Vellas','31300','Immeuble jupiter'),(118,25632,'4 rue René Panhard','63118','Zi ladoux'),(119,14122,'41 rue de l\'Hippodrome','37170',NULL),(120,20554,'44 boulevard de la Mothe, CS 50519','54008',NULL),(121,31719,'44 rue Jean Mermoz','78600',NULL),(122,33677,'45 RUE GIMELLI','83000',NULL),(123,35943,'46 rue de Lagny','93100',NULL),(124,35926,'5 RUE FREDERIC CLAVEL','92287',NULL),(125,36701,'5 Zhongguancun Nandajie, Haidian District,','Inconnu',NULL),(126,18722,'51 Rue de la Bretonnière','50105',NULL),(127,23606,'52 Avenue FELIX LOUAT','60300',NULL),(128,35914,'58 avenue du Général Leclerc','92514',NULL),(129,14057,'6 Boulevard Alfred Nobel','37540',NULL),(130,13468,'6 Cours des Alliés','35000',NULL),(131,33838,'6 passage de l\'Oratoire','84000',NULL),(132,13425,'6, PAE Domaine des trois fontaines','34230',NULL),(133,14124,'61 avenue de Grammont','37041',NULL),(134,36624,'6448 Bois du Parc','97212',NULL),(135,31660,'6-8 Rue de Rome','77144','Zac val d\'europe'),(136,35914,'7 Place René Clair','92653',NULL),(137,17162,'8 Avenue Buffon - CS 16319','45063',NULL),(138,14124,'8 Rue de Bouteville','37204','Bp 437'),(139,30438,'8 rue Martel','75010','10EME'),(140,13126,'82 rue Jean-Baptiste Calvignac','34670','Z.a. de la biste'),(141,17162,'9 Avenue Buffon','45063','Cs 36339'),(142,16628,'9 boulevard Ampère','44470','Bp 10727'),(143,28153,'93 rue André Bollier','69007','07EME'),(144,35921,'97 Avenue Pierre Brossolette','92120',NULL),(145,36703,'Allée Centrale 52','6040','Zone industrielle'),(146,13969,'Avenue Jean Monnet','36130','Zi la malterie'),(147,31750,'avenue Simon Vouet','78560','Vla marly 16 quintum rue jean jaurès'),(148,5022,'Bld Henri Becquerel','14076',NULL),(149,9335,'Bois Sur Près','25550',NULL),(150,36702,'Borselstrasse 18','22765',NULL),(151,14316,'BP 80','37420',NULL),(152,14199,'FAIVELEY TRANSPORT','37700','Z.i. du bois de plante - rue amélia earhart'),(153,14155,'Lieu-dit Bordebure','37250',NULL),(154,35810,'L\'Orme des Merisiers','91191',NULL),(155,18162,'Parc d\'activités Angers','49180','Bp 70030'),(156,6226,'Quai aux Vivres, cs 40 214','17304',NULL),(157,16647,'RD - Rond Point des Forges','44610',NULL),(158,14124,'RD 910','37076',NULL),(159,14059,'Route de Cormery','37320',NULL),(160,33973,'Route de la Chataigneraie','85120',NULL),(161,12605,'Route De Lalande','33450','Za de lalande'),(162,22852,'Route de Loon-Plage','59630',NULL),(163,31607,'rue des Saints-Pères','77000',NULL),(164,21474,'rue Dutenos Le Verger','56005','Zi du prat'),(165,15840,'rue Marc Seguin','41100','Zone industrielle sud'),(166,11114,'Terre Plein du Port','29100',NULL),(167,18932,'ZA La Fosse Yvon','50440','Parcelle n°4'),(168,9925,'ZAC des Champs Chouette 2','27600','1 rue des houssières'),(169,14124,'64 Avenue Jean Portalis','37200','Polytech Tours Informatique'),(170,35997,'191 avenue aristide briand','94230',NULL),(171,35997,'191 avenue aristide briand','94230',NULL),(172,30438,'62 rue la Boétie','75008',NULL),(173,16756,'19 rue Jeanne d\'Arc','44000',NULL),(174,16629,'275 Boulevard Marcel Paul','44821',NULL),(175,14129,'2 place de la gare','37700',NULL),(176,14227,'149 avenue du Général de Gaulle','37230',NULL),(177,13969,'ZI La Malterie - Avenue Jean Monnet','36130',NULL),(178,36109,'80 quai Voltaire','95870',NULL),(179,16756,'10 Boulevard Emlile Gabory','44200',NULL),(180,35926,'5/7 rue Frédéric Clavel','92287',NULL),(181,17162,'CGI 4 passage de la râpe.','45000',NULL),(182,36704,'BASE DE DEFENSE DE TOURS - CIRFA DE TOURS BUREAU AIR - RD 910','37076',NULL),(183,14124,'60 ter boulevard Jean Royer','37000',NULL),(184,36705,'Base de Défense de Tours-CIRFA Bureau marine-RD 910','36076',NULL),(185,14201,'3 bis rue de la Tuilerie','37550',NULL),(186,14124,'15 AVENUE LOUIS JOUHANNEAU','37100',NULL),(187,14124,'15 AVENUE LOUIS JOUHANNEAU','37100',NULL),(188,22729,'4 boulevard de mons','59650',NULL),(189,14124,'45 avenue Stendhal BP 436','37204',NULL),(190,6622,'ZAC de Beaulieu Rue Denys Dodart','18000',NULL),(191,14129,'16 RUE DES YVAUDIERES','37700',NULL),(192,14124,'27 rue de la Milletière','37100',NULL),(193,14124,'19 Rue Edouard Vaillant','37000',NULL),(194,14124,'10 avenue marcel mérieux','37000',NULL),(195,13468,'Le New WAY Mabilais - 2 rue de la Mabilais','35000',NULL),(196,34225,'Rue Evariste Galois','86130',NULL),(197,14201,'14 RUE DU PONT DE L\'ARCHE','37550',NULL),(198,14201,'14 RUE DU PONT DE L\'ARCHE','37550',NULL),(199,14134,'12 rue Gustave Eiffel','37304',NULL),(200,14124,'4 rue Gambetta','37000',NULL),(201,14124,'8 rue des Déportés','37000',NULL),(202,14124,'8 rue des Déportés','37000',NULL),(203,17162,'52 rue Eugène Turbat','45160',NULL),(204,14124,'8, rue Honoré de Balzac','37000',NULL),(205,14124,'60 rue du plat d\'étain','37000',NULL),(206,14201,'28 rue de la Tuilerie','37550',NULL),(207,16677,'1 rue charles lindbergh','44340',NULL),(208,36706,'8 cours du Triangle','92937',NULL),(209,36707,'61 rue E Vaillant','37042',NULL),(210,14124,'4 RUE GAMBETTA','37000',NULL),(211,36708,'10, rue Thales de Milet, CS 97155','37071',NULL),(212,36709,'9 Avenue Charles de gaulle','69370',NULL),(213,14134,'27 rue MANSART','37300',NULL),(214,17018,'29 rue de Montaran','45404',NULL),(215,14201,'18 rue du pont de l\'arche','37550',NULL),(216,36109,'80 quai Voltaire','95870',NULL),(217,14201,'27 RUE DES GRANGES GALAND','37550',NULL),(218,36710,'','',NULL),(219,36711,'','',NULL),(220,36712,'','',NULL),(221,36713,'','',NULL),(222,36714,'','',NULL),(223,36715,'','',NULL),(224,36716,'','',NULL),(225,36717,'','',NULL),(226,36718,'','',NULL),(227,36719,'','',NULL),(228,36720,'','',NULL),(229,36721,'','',NULL),(230,36722,'','',NULL),(231,36723,'','',NULL),(232,36724,'','',NULL),(233,36725,'','',NULL),(234,36726,'','',NULL),(235,36727,'','',NULL),(236,36728,'','',NULL),(237,36729,'','',NULL),(238,36730,'','',NULL),(239,36731,'','',NULL),(240,36732,'','',NULL),(241,36733,'','',NULL),(242,36734,'','',NULL),(243,36735,'','',NULL),(244,36736,'','',NULL),(245,36737,'','',NULL),(246,36738,'','',NULL),(247,36739,'','',NULL),(248,36740,'','',NULL),(249,36741,'','',NULL),(250,36742,'','',NULL),(251,36743,'','',NULL),(252,36744,'','',NULL),(253,36745,'','',NULL),(254,36746,'','',NULL),(255,36747,'','',NULL),(256,36748,'','',NULL),(257,36749,'','',NULL),(258,36750,'','',NULL),(259,36751,'','',NULL),(260,36752,'','',NULL),(261,36753,'','',NULL),(262,36754,'','',NULL),(263,36755,'','',NULL),(264,36756,'','',NULL),(265,36757,'','',NULL),(266,36758,'','',NULL),(267,36759,'','',NULL),(268,36760,'','',NULL),(269,36761,'','',NULL),(270,36762,'','',NULL),(271,36763,'','',NULL),(272,36764,'','',NULL),(273,36765,'','',NULL),(274,36766,'','',NULL),(275,36767,'','',NULL),(276,36768,'','',NULL),(277,36769,'','',NULL),(278,36770,'','',NULL),(279,36771,'','',NULL),(280,36772,'','',NULL),(281,36773,'','',NULL),(282,36774,'','',NULL),(283,36775,'','',NULL),(284,36776,'','',NULL),(285,36777,'','',NULL),(286,36778,'','',NULL),(287,36779,'','',NULL),(288,36780,'','',NULL),(289,36781,'','',NULL),(290,36782,'','',NULL),(291,36783,'','',NULL),(292,36784,'','',NULL),(293,36785,'','',NULL),(294,36786,'','',NULL),(295,36787,'','',NULL),(296,36788,'','',NULL),(297,36789,'','',NULL),(298,36790,'','',NULL),(299,36791,'','',NULL),(300,36792,'','',NULL),(301,36793,'','',NULL),(302,36794,'','',NULL),(303,36795,'','',NULL),(304,36796,'','',NULL),(305,36797,'','',NULL),(306,36798,'','',NULL),(307,36799,'','',NULL),(308,36800,'','',NULL),(309,36801,'','',NULL),(310,36802,'','',NULL),(311,36803,'','',NULL),(312,36804,'','',NULL),(313,36805,'','',NULL),(314,36806,'','',NULL),(315,36807,'','',NULL),(316,36808,'','',NULL),(317,36809,'','',NULL),(318,36810,'','',NULL),(319,36811,'','',NULL),(320,36812,'','',NULL),(321,36813,'','',NULL),(322,36814,'','',NULL),(323,36815,'','',NULL),(324,36816,'','',NULL),(325,36817,'','',NULL),(326,36818,'','',NULL),(327,36819,'','',NULL),(328,36820,'','',NULL),(329,36821,'','',NULL),(330,36822,'','',NULL),(331,36823,'','',NULL),(332,36824,'','',NULL),(333,36825,'','',NULL),(334,36826,'','',NULL),(335,36827,'','',NULL),(336,36828,'','',NULL),(337,36829,'','',NULL),(338,36830,'','',NULL),(339,36831,'','',NULL),(340,36832,'','',NULL),(341,36833,'','',NULL),(342,36834,'','',NULL),(343,36835,'','',NULL),(344,36836,'','',NULL),(345,36837,'','',NULL),(346,36838,'','',NULL),(347,36839,'','',NULL),(348,36840,'','',NULL),(349,36841,'','',NULL),(350,36842,'','',NULL),(351,36843,'','',NULL),(352,36844,'','',NULL),(353,36845,'','',NULL),(354,36846,'','',NULL),(355,36847,'','',NULL),(356,36848,'','',NULL),(357,36849,'','',NULL),(358,36850,'','',NULL),(359,36851,'','',NULL);
/*!40000 ALTER TABLE `adresse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `apprentissage`
--

DROP TABLE IF EXISTS `apprentissage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apprentissage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_etablissement` int(11) DEFAULT NULL,
  `id_specialite` int(11) DEFAULT NULL,
  `id_personne_etudiant` int(11) DEFAULT NULL,
  `id_etudiant` int(11) DEFAULT NULL,
  `id_gratification` int(11) DEFAULT NULL,
  `etranger` tinyint(1) NOT NULL,
  `duree_apprentissage_annees` int(11) NOT NULL DEFAULT '3' COMMENT '1 an, 3 ans, etc.',
  `date_debut_apprentissage` date NOT NULL DEFAULT '1900-01-01',
  `date_fin_apprentissage` date NOT NULL DEFAULT '1903-01-01',
  `details_apprentissage` text,
  PRIMARY KEY (`id`),
  KEY `fk_Apprentissage_Gratification1_idx` (`id_gratification`),
  KEY `fk_Apprentissage_Specialite1_idx` (`id_specialite`),
  KEY `fk_Apprentissage_Etudiant1_idx` (`id_personne_etudiant`,`id_etudiant`),
  KEY `fk_Apprentissage_Etablissement1_idx` (`id_etablissement`),
  CONSTRAINT `fk_Apprentissage_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Apprentissage_Etudiant1` FOREIGN KEY (`id_personne_etudiant`, `id_etudiant`) REFERENCES `etudiant` (`id_personne`, `id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Apprentissage_Gratification1` FOREIGN KEY (`id_gratification`) REFERENCES `gratification` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Apprentissage_Specialite1` FOREIGN KEY (`id_specialite`) REFERENCES `specialite` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apprentissage`
--

LOCK TABLES `apprentissage` WRITE;
/*!40000 ALTER TABLE `apprentissage` DISABLE KEYS */;
INSERT INTO `apprentissage` VALUES (1,6,1,11,11,1,0,1,'2017-09-15','2018-06-30',NULL),(2,98,3,13,13,2,1,2,'2017-09-15','2018-06-30','Cet apprentissage est en Allemagne'),(3,9,3,18,18,3,0,3,'2017-09-16','2020-06-30',NULL),(4,18,2,12,12,4,0,1,'2015-09-17','2018-07-03',NULL),(5,23,3,28,28,1,0,2,'2016-09-18','2019-06-30',NULL),(6,64,2,22,22,2,0,1,'2017-09-19','2018-07-05',NULL),(7,70,4,14,14,3,0,1,'2017-09-20','2018-07-06',NULL);
/*!40000 ALTER TABLE `apprentissage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `avenant`
--

DROP TABLE IF EXISTS `avenant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avenant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_convention_stage` int(11) NOT NULL,
  `date_creation_avenant` date NOT NULL DEFAULT '1900-01-01',
  `objet_avenant` varchar(45) NOT NULL DEFAULT 'Inconnu',
  `details_avenant` text,
  PRIMARY KEY (`id`),
  KEY `fk_Avenant_ConventionStage1_idx` (`id_convention_stage`),
  CONSTRAINT `fk_Avenant_ConventionStage1` FOREIGN KEY (`id_convention_stage`) REFERENCES `convention_stage` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avenant`
--

LOCK TABLES `avenant` WRITE;
/*!40000 ALTER TABLE `avenant` DISABLE KEYS */;
INSERT INTO `avenant` VALUES (1,1,'2017-06-05','Rallongement de date',NULL),(2,5,'2017-06-05','Gratification a augmenter','Prime de 5euros par jour'),(3,7,'2017-05-31','Rallongement de date',NULL);
/*!40000 ALTER TABLE `avenant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cifre`
--

DROP TABLE IF EXISTS `cifre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cifre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_etablissement` int(11) NOT NULL,
  `id_personne_etudiant` int(11) DEFAULT NULL,
  `id_etudiant` int(11) DEFAULT NULL,
  `id_personne_personnel_polytech` int(11) DEFAULT NULL,
  `id_personnel_polytech` int(11) DEFAULT NULL,
  `intitule_cifre` varchar(255) NOT NULL DEFAULT 'Inconnu',
  `soutenue` tinyint(4) NOT NULL DEFAULT '1',
  `date_debut_cifre` date NOT NULL DEFAULT '1900-01-01',
  `date_fin_cifre` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_CIFRE_Etudiant1_idx` (`id_personne_etudiant`,`id_etudiant`),
  KEY `fk_CIFRE_Etablissement1_idx` (`id_etablissement`),
  KEY `fk_CIFRE_PersonnelPolytech1_idx` (`id_personne_personnel_polytech`,`id_personnel_polytech`),
  CONSTRAINT `fk_CIFRE_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_CIFRE_Etudiant1` FOREIGN KEY (`id_personne_etudiant`, `id_etudiant`) REFERENCES `etudiant` (`id_personne`, `id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_CIFRE_PersonnelPolytech1` FOREIGN KEY (`id_personne_personnel_polytech`, `id_personnel_polytech`) REFERENCES `personnel_polytech` (`id_personne`, `id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cifre`
--

LOCK TABLES `cifre` WRITE;
/*!40000 ALTER TABLE `cifre` DISABLE KEYS */;
INSERT INTO `cifre` VALUES (1,1,27,27,37,7,'Etude de l\'évolution des dunes de la Loire',1,'2017-10-01',NULL),(2,20,28,28,40,10,'Recherche sur la reconaissance d\'images',0,'2017-10-01',NULL);
/*!40000 ALTER TABLE `cifre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conference`
--

DROP TABLE IF EXISTS `conference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_etablissement` int(11) NOT NULL,
  `sujet_conference` varchar(255) NOT NULL DEFAULT 'Inconnu',
  `annulee` tinyint(4) NOT NULL DEFAULT '0',
  `date_conference` date DEFAULT '1900-01-01',
  `heure_debut_conference` time DEFAULT NULL,
  `heure_fin_conference` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Conference_Etablissement1_idx` (`id_etablissement`),
  CONSTRAINT `fk_Conference_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=570 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conference`
--

LOCK TABLES `conference` WRITE;
/*!40000 ALTER TABLE `conference` DISABLE KEYS */;
INSERT INTO `conference` VALUES (1,80,'La sécurité des données bancaires',0,'2018-02-01','14:00:00','16:00:00'),(2,32,'Le développement des énergies biomasses',1,'2018-02-01','16:15:00','18:15:00'),(3,8,'Les nouvelles énergies hydroliques et leur impact',0,'2018-02-01','16:15:00','18:15:00');
/*!40000 ALTER TABLE `conference` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conseil_perfectionnement`
--

DROP TABLE IF EXISTS `conseil_perfectionnement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conseil_perfectionnement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_conseil_perfectionnement` date NOT NULL DEFAULT '1900-01-01',
  `id_departement` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ConseilPerfectionnement_Departement1_idx` (`id_departement`),
  CONSTRAINT `fk_ConseilPerfectionnement_Departement1` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conseil_perfectionnement`
--

LOCK TABLES `conseil_perfectionnement` WRITE;
/*!40000 ALTER TABLE `conseil_perfectionnement` DISABLE KEYS */;
INSERT INTO `conseil_perfectionnement` VALUES (1,'2017-07-01',1),(2,'2017-07-01',2),(3,'2017-07-01',3),(4,'2017-07-01',4),(5,'2017-07-01',5),(6,'2017-07-01',6),(7,'2017-07-01',7);
/*!40000 ALTER TABLE `conseil_perfectionnement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_etablissement`
--

DROP TABLE IF EXISTS `contact_etablissement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_etablissement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_personne` int(11) NOT NULL,
  `mail_professionnel` varchar(100) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`,`id_personne`),
  KEY `fk_ContactEtablissement_Personne1_idx` (`id_personne`),
  CONSTRAINT `fk_ContactEtablissement_Personne1` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_etablissement`
--

LOCK TABLES `contact_etablissement` WRITE;
/*!40000 ALTER TABLE `contact_etablissement` DISABLE KEYS */;
INSERT INTO `contact_etablissement` VALUES (1,51,'ibrahim.ali@pro-mail.com',NULL),(2,52,'emmanuelle.lesure@pro-mail.com',NULL),(2,158,NULL,NULL),(2,159,NULL,NULL),(2,160,NULL,NULL),(2,161,NULL,NULL),(2,162,NULL,NULL),(2,163,NULL,NULL),(2,164,NULL,NULL),(2,165,NULL,NULL),(2,166,NULL,NULL),(2,167,NULL,NULL),(2,168,NULL,NULL),(2,169,NULL,NULL),(2,170,NULL,NULL),(2,171,NULL,NULL),(2,172,NULL,NULL),(2,173,NULL,NULL),(2,174,NULL,NULL),(2,175,NULL,NULL),(2,176,NULL,NULL),(3,53,'thomas.voisclair@pro-mail.com','0234567891'),(4,54,'christine.dubois@pro-mail.com',NULL),(5,55,'christophe.poulou@pro-mail.com',NULL),(6,56,'flora.clavier@pro-mail.com',NULL),(7,57,'antoine.poignee@pro-mail.com',NULL),(8,58,'aurelie.decamp@pro-mail.com',NULL),(9,59,'maxence.duflow@pro-mail.com',NULL),(10,60,'sarah.sure@pro-mail.com',NULL),(11,61,'olivier.tomme@pro-mail.com',NULL),(12,62,'emmanuel.courage@pro-mail.com',NULL),(13,63,'laurene.deflux@pro-mail.com',NULL),(14,64,'gegoire.ralou@pro-mail.com',NULL),(15,65,'alexandra.alexandrie@pro-mail.com',NULL),(16,66,'kevin.jean@pro-mail.com',NULL),(17,67,'caroline.grant@pro-mail.com',NULL),(18,68,'alexath.iman@pro-mail.com',NULL),(19,69,'paul.pote@pro-mail.com',NULL),(20,70,'lucile.labatte@pro-mail.com',NULL),(21,71,'qi.li@pro-mail.com',NULL),(22,72,'ahmed.duro@pro-mail.com',NULL),(23,73,'madeleine.proust@pro-mail.com',NULL),(24,74,'charlotte.fraise@pro-mail.com',NULL),(25,75,'baptiste.frag@pro-mail.com',NULL),(26,76,'romane.lane@pro-mail.com',NULL),(27,77,'romain.reuloup@pro-mail.com','0219876543'),(28,78,'denise.rousso@pro-mail.com',NULL),(29,79,'samuel.gassur@pro-mail.com',NULL),(30,80,'gandalf.leblanc@pro-mail.com',NULL),(31,81,'bernard.nard@pro-mail.com',NULL),(32,82,'mei.si@pro-mail.com',NULL),(33,83,'william.lebo@pro-mail.com',NULL),(34,84,'jeanne.osscourt@pro-mail.com',NULL),(35,85,'bill.bao@pro-mail.com',NULL),(36,86,'annie.skaioualcoeur@pro-mail.com',NULL),(37,87,'christophe.heure@pro-mail.com',NULL),(38,88,'amelie.petit@pro-mail.com',NULL),(39,89,'herbert.dubeurre@pro-mail.com',NULL),(40,90,'justine.illusion@pro-mail.com',NULL),(41,91,'thierry.tiritiri@pro-mail.com',NULL),(42,92,'ambre.dineaudange@pro-mail.com',NULL),(43,93,'denis.ah@pro-mail.com',NULL),(44,94,'mathilde.dit@pro-mail.com',NULL),(45,95,'alexis.lent@pro-mail.com',NULL),(46,96,'judith.scieuse@pro-mail.com',NULL),(47,97,'obiwan.kenobi@pro-mail.com',NULL),(48,98,'elisabeth.deuuu@pro-mail.com',NULL),(49,99,'jean.nepudimagination@pro-mail.com',NULL),(50,100,'anna.pasfesonboulo@pro-mail.com',NULL),(51,101,'marion.ruciak@elsys-design.com',NULL),(52,102,'c.denis@aero-centre.fr',NULL),(53,103,'f.delgado@agh-consulting.com',NULL),(54,104,'sarah.malgogne@akka.eu',NULL),(55,105,'Maxime.PADIOLLEAU@alten.com',NULL),(56,106,'heritier@apside.fr',NULL),(57,107,'sropion@articque.com',NULL),(58,108,'christopher.dezecot@pga-avionics.com',NULL),(59,109,'imelda-carmen.santos@atos.net',NULL),(60,110,'imelda-carmen.santos@atos.net',NULL),(61,111,'mlachaud@ausy.fr',NULL),(62,112,'gaelle.michon@businessdecision.com',NULL),(63,113,'caroline.umbricht@capgemini.com',NULL),(64,114,'myriam.vaquier-de-la-baume@capgemini.com',NULL),(65,115,'chloe.rondeau@sogeti.com',NULL),(66,116,'Directeur  d\'Agence',NULL),(67,117,'marie-evelyne.jabbour@cgi.com',NULL),(68,118,'gregoire.binet@cgi.com',NULL),(69,119,'loick.heurtaux@intradef.gouv.fr',NULL),(70,120,'olivier.fremont@intradef.gouv.fr',NULL),(71,121,'jean-gilles.trinquart@intradef.gouv.fr',NULL),(72,122,'frederic@netixia.fr',NULL),(73,123,'marina.cuzon@cnav.fr',NULL),(74,124,'A.AUBERT@daher.com',NULL),(75,125,'c.benoist@daher.com',NULL),(76,126,'benjamin.allee@decathlon.com',NULL),(77,127,'karine.gouvaze@erdf.fr',NULL),(78,128,'amelie.lediouron@excent.fr',NULL),(79,129,'carole.berlizon@excent.fr',NULL),(80,130,'elambert@gaultetfremont.fr',NULL),(81,131,'stephanie.thomas@gfi.fr',NULL),(82,132,'ecloarec@cyres.fr',NULL),(83,133,'fabien.benoit@open-groupe.com',NULL),(84,134,'fanny.belchior@infotel.com',NULL),(85,135,'florence.grandry@irec.fr',NULL),(86,136,'j-papillon@logitud.fr',NULL),(87,137,'hirtz.christine@sfr.fr',NULL),(88,138,'julien.gallois@michelin.com',NULL),(89,139,'contact@my-serious-game.fr',NULL),(90,140,'charles.steltzlen@nereide.fr',NULL),(91,141,'Florence.PIERA-COLIN@numen.fr',NULL),(92,142,'xavier.gaborit@orange.com',NULL),(93,143,'longieras@peakexpert.com',NULL),(94,144,'caroline.renoux@univ-tours.fr',NULL),(95,145,'christophe.baudron@segula.fr',NULL),(96,146,'natacha.alix@sogeti.com',NULL),(97,147,'nadine.jennervein@soprasteria.com',NULL),(98,148,'laurent.moreto@sncf.fr',NULL),(99,149,'isabelle.moreira@springfrance.com',NULL),(100,150,'brigitte.francou@st.com',NULL),(101,151,'berthille.sellier@sword-group.com',NULL),(102,152,'r.autale@tekin.fr',NULL),(103,153,'sophie.fauconnet@thalesgroup.com',NULL),(104,154,'mbouttier@umanis.com',NULL),(105,155,'tlaudiere@umanis.com',NULL),(106,156,'cherifa.amri@worldline.com',NULL),(107,157,'info@neopol.fr',NULL);
/*!40000 ALTER TABLE `contact_etablissement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_participe_conseil`
--

DROP TABLE IF EXISTS `contact_participe_conseil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_participe_conseil` (
  `id_conseil_perfectionnement` int(11) NOT NULL,
  `id_personne_contact_etablissement` int(11) NOT NULL,
  `id_contact_etablissement` int(11) NOT NULL,
  PRIMARY KEY (`id_conseil_perfectionnement`,`id_personne_contact_etablissement`,`id_contact_etablissement`),
  KEY `fk_ContactParticipeConseil_ContactEtablissement1_idx` (`id_personne_contact_etablissement`,`id_contact_etablissement`),
  CONSTRAINT `fk_ContactParticipeConseil_ConseilPerfectionnement1` FOREIGN KEY (`id_conseil_perfectionnement`) REFERENCES `conseil_perfectionnement` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_ContactParticipeConseil_ContactEtablissement1` FOREIGN KEY (`id_personne_contact_etablissement`, `id_contact_etablissement`) REFERENCES `contact_etablissement` (`id_personne`, `id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_participe_conseil`
--

LOCK TABLES `contact_participe_conseil` WRITE;
/*!40000 ALTER TABLE `contact_participe_conseil` DISABLE KEYS */;
INSERT INTO `contact_participe_conseil` VALUES (1,51,1),(1,52,2),(2,53,3),(2,54,4),(3,55,5),(3,56,6),(4,57,7),(4,58,8),(5,59,9),(5,60,10),(6,61,11),(6,62,12),(7,63,13),(7,64,14);
/*!40000 ALTER TABLE `contact_participe_conseil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `convention_stage`
--

DROP TABLE IF EXISTS `convention_stage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `convention_stage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_convention` int(11) DEFAULT NULL,
  `id_stage` int(11) NOT NULL,
  `id_etablissement` int(11) NOT NULL,
  `id_specialite` int(11) NOT NULL,
  `id_etudiant` int(11) DEFAULT NULL,
  `id_personne_etudiant` int(11) DEFAULT NULL,
  `id_personnel_polytech_tuteur` int(11) DEFAULT NULL,
  `id_personne_personnel_polytech_tuteur` int(11) DEFAULT NULL,
  `id_personnel_polytech_charge_suivi` int(11) DEFAULT NULL,
  `id_personne_personnel_polytech_charge_suivi` int(11) DEFAULT NULL,
  `id_contact_etablissement_tuteur` int(11) DEFAULT NULL,
  `id_personne_contact_etablissement_tuteur` int(11) DEFAULT NULL,
  `id_contact_etablissement_signataire` int(11) DEFAULT NULL,
  `id_personne_contact_etablissement_signataire` int(11) DEFAULT NULL,
  `id_gratification` int(11) DEFAULT NULL,
  `id_service_accueil` int(11) DEFAULT NULL,
  `date_creation` date NOT NULL DEFAULT '1900-01-01',
  `date_derniere_modification` date NOT NULL DEFAULT '1900-01-01',
  `validee` tinyint(4) NOT NULL DEFAULT '1',
  `validee_pedagogiquement` tinyint(4) NOT NULL DEFAULT '1',
  `type_convention` varchar(45) DEFAULT NULL COMMENT 'Obligatoire, non obligatoire, ...',
  PRIMARY KEY (`id`),
  UNIQUE KEY `numero_convention_UNIQUE` (`numero_convention`),
  KEY `fk_ConventionStage_Stage1_idx` (`id_stage`),
  KEY `fk_ConventionStage_Gratification1_idx` (`id_gratification`),
  KEY `fk_ConventionStage_Etudiant1_idx` (`id_etudiant`,`id_personne_etudiant`),
  KEY `fk_ConventionStage_Specialite1_idx` (`id_specialite`),
  KEY `fk_ConventionStage_PersonnelPolytech1_idx` (`id_personnel_polytech_tuteur`,`id_personne_personnel_polytech_tuteur`),
  KEY `fk_ConventionStage_PersonnelPolytech2_idx` (`id_personnel_polytech_charge_suivi`,`id_personne_personnel_polytech_charge_suivi`),
  KEY `fk_ConventionStage_ContactEtablissement1_idx` (`id_contact_etablissement_tuteur`,`id_personne_contact_etablissement_tuteur`),
  KEY `fk_ConventionStage_ContactEtablissement2_idx` (`id_contact_etablissement_signataire`,`id_personne_contact_etablissement_signataire`),
  KEY `fk_ConventionStage_Etablissement1_idx` (`id_etablissement`),
  KEY `fk_ConventionStage_ServiceAccueil1_idx` (`id_service_accueil`),
  CONSTRAINT `fk_ConventionStage_ContactEtablissement1` FOREIGN KEY (`id_contact_etablissement_tuteur`, `id_personne_contact_etablissement_tuteur`) REFERENCES `contact_etablissement` (`id`, `id_personne`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_ContactEtablissement2` FOREIGN KEY (`id_contact_etablissement_signataire`, `id_personne_contact_etablissement_signataire`) REFERENCES `contact_etablissement` (`id`, `id_personne`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_Etudiant1` FOREIGN KEY (`id_etudiant`, `id_personne_etudiant`) REFERENCES `etudiant` (`id`, `id_personne`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_Gratification1` FOREIGN KEY (`id_gratification`) REFERENCES `gratification` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_PersonnelPolytech1` FOREIGN KEY (`id_personnel_polytech_tuteur`, `id_personne_personnel_polytech_tuteur`) REFERENCES `personnel_polytech` (`id`, `id_personne`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_PersonnelPolytech2` FOREIGN KEY (`id_personnel_polytech_charge_suivi`, `id_personne_personnel_polytech_charge_suivi`) REFERENCES `personnel_polytech` (`id`, `id_personne`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_ServiceAccueil1` FOREIGN KEY (`id_service_accueil`) REFERENCES `service_accueil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_Specialite1` FOREIGN KEY (`id_specialite`) REFERENCES `specialite` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_Stage1` FOREIGN KEY (`id_stage`) REFERENCES `stage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `convention_stage`
--

LOCK TABLES `convention_stage` WRITE;
/*!40000 ALTER TABLE `convention_stage` DISABLE KEYS */;
INSERT INTO `convention_stage` VALUES (1,1,1,1,1,11,11,1,31,10,40,1,51,1,51,1,1,'2017-04-09','2017-05-09',1,0,'OBLIGATOIRE'),(2,2,2,2,2,12,12,2,32,11,41,2,52,2,52,NULL,2,'2017-03-16','2017-03-16',0,0,'OBLIGATOIRE'),(3,3,3,3,3,13,13,3,33,12,42,3,53,3,53,3,3,'2017-03-02','2017-03-02',1,1,'OBLIGATOIRE'),(4,4,4,4,4,14,14,4,34,13,43,4,54,4,54,NULL,4,'2017-04-15','2017-04-15',0,0,NULL),(5,5,5,5,5,15,15,5,35,14,44,5,55,5,55,4,5,'2017-03-12','2017-05-12',1,1,'OBLIGATOIRE'),(6,6,6,6,1,16,16,6,36,15,45,6,56,6,56,2,6,'2017-04-11','2017-04-19',0,0,NULL),(7,7,7,7,2,17,17,7,37,16,46,7,57,7,57,NULL,7,'2017-02-28','2017-02-28',1,1,'OBLIGATOIRE'),(8,8,8,8,3,18,18,8,38,17,47,8,58,8,58,4,8,'2017-05-12','2017-05-26',1,0,'OBLIGATOIRE'),(9,9,9,9,4,19,19,9,39,18,48,9,59,9,59,2,9,'2017-03-02','2017-03-30',1,1,NULL),(10,10,10,96,1,16,16,13,43,14,44,NULL,NULL,NULL,NULL,NULL,NULL,'2017-03-01','2017-03-01',1,1,'OBLIGATOIRE');
/*!40000 ALTER TABLE `convention_stage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departement`
--

DROP TABLE IF EXISTS `departement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_departement` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `libelleDepartement_UNIQUE` (`libelle_departement`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departement`
--

LOCK TABLES `departement` WRITE;
/*!40000 ALTER TABLE `departement` DISABLE KEYS */;
INSERT INTO `departement` VALUES (1,'ACO'),(3,'DAE'),(6,'DEE'),(4,'DI'),(5,'DII'),(7,'DMS'),(2,'PeiP');
/*!40000 ALTER TABLE `departement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `effectue_vacation`
--

DROP TABLE IF EXISTS `effectue_vacation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `effectue_vacation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_etablissement` int(11) NOT NULL,
  `id_contact_etablissement` int(11) DEFAULT NULL,
  `id_personne_contact_etablissement` int(11) DEFAULT NULL,
  `date_debut_vacation` date NOT NULL DEFAULT '1900-01-01',
  `date_fin_vacation` date DEFAULT NULL,
  `volume_horaire` int(11) DEFAULT NULL,
  `commentaire_vacation` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_EffectueVacation_ContactEtablissement1_idx` (`id_contact_etablissement`,`id_personne_contact_etablissement`),
  KEY `fk_EffectueVacation_Etablissement1_idx` (`id_etablissement`),
  CONSTRAINT `fk_EffectueVacation_ContactEtablissement1` FOREIGN KEY (`id_contact_etablissement`, `id_personne_contact_etablissement`) REFERENCES `contact_etablissement` (`id`, `id_personne`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_EffectueVacation_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `effectue_vacation`
--

LOCK TABLES `effectue_vacation` WRITE;
/*!40000 ALTER TABLE `effectue_vacation` DISABLE KEYS */;
INSERT INTO `effectue_vacation` VALUES (1,12,12,62,'2018-01-22','2018-06-01',30,NULL),(2,22,22,72,'2017-09-01','2018-01-20',25,NULL),(3,30,30,80,'2017-01-22','2017-06-01',40,NULL),(4,32,32,82,'2016-09-01','2017-01-20',30,NULL),(5,42,42,92,'2017-09-01','2017-06-01',50,NULL);
/*!40000 ALTER TABLE `effectue_vacation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_entreprise` varchar(255) NOT NULL DEFAULT 'Inconnu',
  `statut_juridique` varchar(255) DEFAULT 'Inconnu',
  `num_siren` varchar(9) DEFAULT NULL,
  `site_web_entreprise` varchar(255) DEFAULT NULL,
  `commentaire_entreprise` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=278 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entreprise`
--

LOCK TABLES `entreprise` WRITE;
/*!40000 ALTER TABLE `entreprise` DISABLE KEYS */;
INSERT INTO `entreprise` VALUES (1,'COMMISSARIAT A L ENERGIE ATOMIQUE C','INCONNU','775685019',NULL,NULL),(2,'EDF','INCONNU','552081317',NULL,NULL),(3,'AREVA NP','SAS','428764500',NULL,NULL),(4,'FNAIR','INCONNU','483121653',NULL,NULL),(5,'CNRS','INCONNU','180089013',NULL,NULL),(6,'BIOSPRINGER','SA','542091996',NULL,NULL),(7,'AXIS CONSEILS','SARL','331747485',NULL,NULL),(8,'CAL','INCONNU','783345564',NULL,NULL),(9,'BIOTOPE','INCONNU','390613610',NULL,NULL),(10,'CAINET MONTMASSON INGENIEURS CONSEILS','SARL','391142403',NULL,NULL),(11,'BERGER WAGON I WAGON GHECO','INCONNU','318585650',NULL,NULL),(12,'CONSEILS ET REALISATIONS INFORMATIQUE','SAS','350848982',NULL,NULL),(13,'ENTECH SMART ENERGIES','SAS','818246316',NULL,NULL),(14,'AUDC','INCONNU','301792842',NULL,NULL),(15,'BAYER SAS','SAS','562038893',NULL,NULL),(16,'ATELIER D\'URBANISME PERSPECTIVE','SAS','804230936',NULL,NULL),(17,'ATOS INTEGRATION','SAS','408024719',NULL,NULL),(18,'DUBOST ENVIRONNEMENT','INCONNU','410621882',NULL,NULL),(19,'FONCTION SUPPORT','SAS','530841188',NULL,NULL),(20,'BNP PARIBAS','INCONNU','662042449',NULL,NULL),(21,'EGIS VILLES & TRANSPORTS','SAS','493334429',NULL,NULL),(22,'BIOMASSE NORMANDIE','INCONNU','383743317',NULL,NULL),(23,'EQUENSWORLDLINE','INCONNU','819173782',NULL,NULL),(24,'CHRU BRETONNEAU','INCONNU','263700189',NULL,NULL),(25,'EMI - SEPAME ELECTRONIQUE','SAS','349335380',NULL,NULL),(26,'CEREMA TERRITOIRS ET VILLE','INCONNU','130018310',NULL,NULL),(27,'EURO ENGINEERING','SA','330421462',NULL,NULL),(28,'FRANCE REDUCTEURS SAS','SAS','401297692',NULL,NULL),(29,'ECOTONE RECHERCHE ET ENVIRONNEMENT','SARL','415094200',NULL,NULL),(30,'CAISSE REG DU CREDIT AGRICOLE MUTUEL TOURAINE POITOU','SCP','399780097',NULL,NULL),(31,'COMPAGNIE DES AUTOCARS DE TOURAINE','INCONNU','315350165',NULL,NULL),(32,'ERIL','SARL','329166060',NULL,NULL),(33,'CABINET ECTAR ETUDE CONSEIL TRANS AERI','SAS','443700398',NULL,NULL),(34,'BURGEAP','SA','682008222',NULL,NULL),(35,'GE MEDICAL SYSTEMS','SCS','315013359',NULL,NULL),(36,'BOUYGUES IMMOBILIER','SAS','562091546',NULL,NULL),(37,'CAT-AMANIA','INCONNU','519685085',NULL,NULL),(38,'AVIDSEN SAS','SAS','420462533',NULL,NULL),(39,'DARTY GRAND OUEST','SNC','339403933',NULL,NULL),(40,'CAPGEMINI TECHNOLOGY SERVICES','SA','479766842',NULL,NULL),(41,'EAS MONECONCEPT','SARL','393426143',NULL,NULL),(42,'CGI FRANCE','SAS','702042755',NULL,NULL),(43,'FEDERATION DEPARTEMENTALE DE PECHE DE LA VIENNE','INCONNU','781565924',NULL,NULL),(44,'AUSY','SAS','352905707',NULL,NULL),(45,'CMF GROUPE','SAS','390871622',NULL,NULL),(46,'DECATHLON FRANCE','SAS','500569405',NULL,NULL),(47,'COLAS NORD-EST','SA','329198337',NULL,NULL),(48,'COLAS RAIL','SA','632049128',NULL,NULL),(49,'CITADIA CONSEIL','SARL','412124703',NULL,NULL),(50,'ENIA ARCHITECTES','SAS','328862214',NULL,NULL),(51,'BEIJING INSTITUTE OF TECHNONOGY','INCONNU',NULL,NULL,NULL),(52,'CMN','SA','562110965',NULL,NULL),(53,'CETIM','Autres','775629074',NULL,NULL),(54,'APSIDE','SA','309065084',NULL,NULL),(55,'EXAEGIS','SAS','538700980',NULL,NULL),(56,'BICEPHALE SAS','SAS','818211252',NULL,NULL),(57,'CITADIS','INCONNU','602620304',NULL,NULL),(58,'ETS TERRAL','SAS','399979806',NULL,NULL),(59,'DIRECTION DEPARTEMENTALE DES TERRITOIRES D\'INDRE-ET-LOIRE','INCONNU','130010275',NULL,NULL),(60,'CARBET DES SCIENCES','INCONNU','394418875',NULL,NULL),(61,'FIVES MAINTENANCE','SAS','380065672',NULL,NULL),(62,'COLAS','SAS','823299623',NULL,NULL),(63,'CILAS','SA','669802167',NULL,NULL),(64,'ENERGIES DEMAIN','SAS','480478502',NULL,NULL),(65,'EUROVIA LANGUEDOC-ROUSSILLON','SAS','428613525',NULL,NULL),(66,'AGENCE DE L\'EAU LOIRE BRETAGNE','INCONNU','184503019',NULL,NULL),(67,'BABOLAT VS','SA','552131401',NULL,NULL),(68,'CALYOS SA','INCONNU',NULL,NULL,NULL),(69,'ASTRONICS - PGA AVIONICS','SARL','350534939',NULL,NULL),(70,'ELECTRI CYCLE','SAS','504341009',NULL,NULL),(71,'FAURECIA SYSTEME D\'ECHAPPEMENT','SA','420797433',NULL,NULL),(72,'BRUUN & MOLLERS LANDSCHAFTSARCHITEKTEN','INCONNU',NULL,NULL,NULL),(73,'FAIVELEY TRANSPORT TOURS','SAS','489243881',NULL,NULL),(74,'ENTREPRISE CITEOS','SAS','440313765',NULL,NULL),(75,'FOUNDATION BRAKES FRANCE','SAS','529268393',NULL,NULL),(76,'FORUM DES MARAIS AQUATIQUES','INCONNU','251710398',NULL,NULL),(77,'ARCELORMITTAL - SITE DE BASSE INDRE','SAS','444718563',NULL,NULL),(78,'BASE AERIENNE 705 DE TOURS','INCONNU','130017213',NULL,NULL),(79,'ESVRES MATRICAGE','SAS','430032532',NULL,NULL),(80,'ETS JC BOUY SAS','SAS','310188834',NULL,NULL),(81,'CAZAUX ROTORFLEX SARL','SARL','504931254',NULL,NULL),(82,'CEMOI CHOCOLATIERS','SA','564202166',NULL,NULL),(83,'DEPARTEMENT DE SEINE ET MARNE','INCONNU','227700010',NULL,NULL),(84,'AVON POLYMERES FRANCE SAS','SAS','312786338',NULL,NULL),(85,'ECOFIT','SA','308172147',NULL,NULL),(86,'CHANTIER NAVAL GLEHEN','SAS','376980140',NULL,NULL),(87,'CEP INDUSTRIE','SAS','392031787',NULL,NULL),(88,'DEDIENNE MULTIPLASTURGY','SAS','775723083',NULL,NULL),(89,'ADVANS GROUP','Inconnu',NULL,NULL,NULL),(90,'AERO CENTRE','Inconnu',NULL,NULL,NULL),(91,'AGH Consulting','Inconnu',NULL,NULL,NULL),(92,'AKKA Technologies','Inconnu',NULL,NULL,NULL),(93,'ALTEN','Inconnu',NULL,NULL,NULL),(94,'APSIDE TOP','Inconnu',NULL,NULL,NULL),(95,'ARTICQUE','Inconnu',NULL,NULL,NULL),(96,'Astronics PGA Avionics (PGA Electronic)','Inconnu',NULL,NULL,NULL),(97,'ATOS','Inconnu',NULL,NULL,NULL),(98,'BUSINESS & DECISION','Inconnu',NULL,NULL,NULL),(99,'CAPGEMINI','Inconnu',NULL,NULL,NULL),(100,'CGI','Inconnu',NULL,NULL,NULL),(101,'CIRFA - ARMEE DE L\'AIR','Inconnu',NULL,NULL,NULL),(102,'CIRFA - ARMEE DE TERRE','Inconnu',NULL,NULL,NULL),(103,'CIRFA - MARINE NATIONALE','Inconnu',NULL,NULL,NULL),(104,'NETIXIA / Cloud Temple','Inconnu',NULL,NULL,NULL),(105,'CNAV','Inconnu',NULL,NULL,NULL),(106,'DAHER','Inconnu',NULL,NULL,NULL),(107,'DECATHLON - SERVICE INFORMATIQUE','Inconnu',NULL,NULL,NULL),(108,'ENEDIS (ERDF)','Inconnu',NULL,NULL,NULL),(109,'EXCENT','Inconnu',NULL,NULL,NULL),(110,'GAULT ET FREMONT','Inconnu',NULL,NULL,NULL),(111,'Gfi Informatique','Inconnu',NULL,NULL,NULL),(112,'Groupe Cyrès - Ingensi','Inconnu',NULL,NULL,NULL),(113,'Groupe OPEN','Inconnu',NULL,NULL,NULL),(114,'INFOTEL','Inconnu',NULL,NULL,NULL),(115,'IREC','Inconnu',NULL,NULL,NULL),(116,'LOGITUD Solutions','Inconnu',NULL,NULL,NULL),(117,'Made in Val de Loire','Inconnu',NULL,NULL,NULL),(118,'MICHELIN','Inconnu',NULL,NULL,NULL),(119,'MY SERIOUS GAME','Inconnu',NULL,NULL,NULL),(120,'NEREIDE / Apache OFBiz','Inconnu',NULL,NULL,NULL),(121,'NUMEN (SATI)','Inconnu',NULL,NULL,NULL),(122,'ORANGE','Inconnu',NULL,NULL,NULL),(123,'PeakExpert','Inconnu',NULL,NULL,NULL),(124,'PEPITE CENTRE','Inconnu',NULL,NULL,NULL),(125,'SEGULA Technologies','Inconnu',NULL,NULL,NULL),(126,'SOGETI','Inconnu',NULL,NULL,NULL),(127,'SOPRA STERIA','Inconnu',NULL,NULL,NULL),(128,'SNCF Réseau - Ingénierie et Projets au féminin !','Inconnu',NULL,NULL,NULL),(129,'SPRING','Inconnu',NULL,NULL,NULL),(130,'STMICROELECTRONICS TOURS','Inconnu',NULL,NULL,NULL),(131,'SWORD','Inconnu',NULL,NULL,NULL),(132,'TEKIN','Inconnu',NULL,NULL,NULL),(133,'THALES','Inconnu',NULL,NULL,NULL),(134,'UMANIS','Inconnu',NULL,NULL,NULL),(135,'WORLDLINE','Inconnu',NULL,NULL,NULL),(136,'NEOPOL','Inconnu',NULL,NULL,NULL),(137,'DL PAYSAGE','SARL Unipersonnelle',NULL,NULL,NULL),(138,'ESRI France SA','SA à Conseil d\'Administration',NULL,NULL,NULL),(139,'URB-AM CONSEIL','',NULL,NULL,NULL),(140,'CLEARNOX','SAS (Société par action simplifiée)',NULL,NULL,NULL),(141,'LESENS','SAS (Société par action simplifiée)',NULL,NULL,NULL),(142,'SUEZ RV CENTRE OUEST','SAS (Société par action simplifiée)',NULL,NULL,NULL),(143,'ERDF','SA à Directoire',NULL,NULL,NULL),(144,'SOCIETE D\'EQUIPEMENT DU DOUBS','',NULL,NULL,NULL),(145,'INFOVISTA','SA à Conseil d\'Administration',NULL,NULL,NULL),(146,'TESA','SAS (Société par action simplifiée)',NULL,NULL,NULL),(147,'INTERSECTION CONSULTING','SAS (Société par action simplifiée)',NULL,NULL,NULL),(148,'NEOLEASE','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(149,'ELSYS DESIGN','SA à Conseil d\'Administration',NULL,NULL,NULL),(150,'WESER','SA à Conseil d\'Administration',NULL,NULL,NULL),(151,'TERRE ARMEE','',NULL,NULL,NULL),(152,'CLF SATREM','SASU (Société par Action Simplifiée à associé Unique)',NULL,NULL,NULL),(153,'SNCF DRH-RHC','Entreprise Publique',NULL,NULL,NULL),(154,'ETABLISSEMENTS MICHEL','SAS (Société par Action Simplifiée)',NULL,NULL,NULL),(155,'LIGNE DAU','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(156,'EFFICO','SA à Conseil d\'Administration',NULL,NULL,NULL),(157,'CENTRECO','',NULL,NULL,NULL),(158,'ADEV ENVIRONNEMENT SARL','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(159,'ATELIER METHODE','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(160,'SORADIS','',NULL,NULL,NULL),(161,'SOCIETE D\'ELECTRONIQUE DE TELECOM','SA à Conseil d\'Administration',NULL,NULL,NULL),(162,'FRANS BONHOMME','SAS (Société par action simplifiée)',NULL,NULL,NULL),(163,'LA NOUVELLE REPUBLIQUE DU CENTRE OUEST','SA à participation ouvrière à directoire',NULL,NULL,NULL),(164,'MJ 80','SAS (Société par action simplifiée)',NULL,NULL,NULL),(165,'ALTERNATIVE COURTAGE','SAS (Société par action simplifiée)',NULL,NULL,NULL),(166,'SAS GROUPE AXXESS','SAS (Société par action simplifiée)',NULL,NULL,NULL),(167,'SOCIETE D\'EQUIPEMENT DE LA TOURAINE','Société d\'économie mixte',NULL,NULL,NULL),(168,'ONTOMATICS','SAS',NULL,NULL,NULL),(169,'ACKWA','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(170,'NEREIDE','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(171,'HCIS','SASU (Société par Action Simplifiée à associé Unique)',NULL,NULL,NULL),(172,'SILIMIXT','SAS (Société par Action Simplifiée)',NULL,NULL,NULL),(173,'SCIENCES SYSTEMES ENERGIE ELECTRIQUE','Groupe International',NULL,NULL,NULL),(174,'BARRAULT JEAN-LOUIS','Affaire personnelle commerçant',NULL,NULL,NULL),(175,'AMBIN INFORMATIQUE','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(176,'KEOLIS TOURS','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(177,'SARL OPTIMALOG','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(178,'MAISONING','SASU (Société par Action Simplifiée à associé Unique)',NULL,NULL,NULL),(179,'BUSINESS REPRO CENTRE','SA à Conseil d\'Administration',NULL,NULL,NULL),(180,'TUILERIE DE LA BRETECHE','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(181,'PRESSE PORTAGE','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(182,'SIAM CONSEILS','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(183,'SASU LA COMPAGNIE DES SAVEURS','SAS (Société par action simplifiée)',NULL,NULL,NULL),(184,'ARC INTERNATIONAL COOKWARE','SASU (Société par Action Simplifiée à associé Unique)',NULL,NULL,NULL),(185,'A.C.T. ENGINEERING','Groupe International',NULL,NULL,NULL),(186,'STE HEROUVILLE D\'ECONO MIXTE POUR LAM','',NULL,NULL,NULL),(187,'URBA-SERVICES','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(188,'ELAN CORPORATE','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(189,'LOIRE OCEAN','',NULL,NULL,NULL),(190,'APRITEC INGENIERIE','',NULL,NULL,NULL),(191,'PERTILIENCE','SAS (Société par action simplifiée)',NULL,NULL,NULL),(192,'ECONOMIE MIXTE IMMOBILIERE','SA à Conseil d\'Administration',NULL,NULL,NULL),(193,'SYNERGIE GIE','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(194,'ADEME','Etablissement public local à caractère industriel ou commercial',NULL,NULL,NULL),(195,'ARMONY SYSTEM','SARL Unipersonnelle',NULL,NULL,NULL),(196,'ANTEA','SAS (Société par action simplifiée)',NULL,NULL,NULL),(197,'SARL IPROCIA','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(198,'BIOTEC BIOLOGIE APPLIQUEE','',NULL,NULL,NULL),(199,'CERYX TRAFIC SYSTEM','SAS (Société par action simplifiée)',NULL,NULL,NULL),(200,'ICF ENVIRONNEMENT','SAS (Société par action simplifiée)',NULL,NULL,NULL),(201,'SMARTFI SERVICES','SAS (Société par action simplifiée)',NULL,NULL,NULL),(202,'ADOMIA','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(203,'NALDEO','SAS (Société par action simplifiée)',NULL,NULL,NULL),(204,'SOGETI France','SAS (Société par action simplifiée)',NULL,NULL,NULL),(205,'I\'CAR SYSTEMS','SASU (Société par Action Simplifiée à associé Unique)',NULL,NULL,NULL),(206,'ESKAPE','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(207,'GEO HYD','SAS (Société par action simplifiée)',NULL,NULL,NULL),(208,'DL INFRA','SARL Unipersonnelle',NULL,NULL,NULL),(209,'FASTBOIL','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(210,'SOM GROUPE ORTEC','',NULL,NULL,NULL),(211,'SOPRA BANKING SOFTWARE','SA à Conseil d\'Administration',NULL,NULL,NULL),(212,'CAT AMANIA','SAS (Société par action simplifiée)',NULL,NULL,NULL),(213,'SIVECO GROUP','Groupe International',NULL,NULL,NULL),(214,'URBANIS','SAS (Société par action simplifiée)',NULL,NULL,NULL),(215,'DL FINANCES','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(216,'CAPGEMINI France','',NULL,NULL,NULL),(217,'ASSYSTEM','SASU (Société par Action Simplifiée à associé Unique)',NULL,NULL,NULL),(218,'AVIDSEN','',NULL,NULL,NULL),(219,'SMART HOME INTERNATIONAL','',NULL,NULL,NULL),(220,'GPF','',NULL,NULL,NULL),(221,'LMN','',NULL,NULL,NULL),(222,'COULEURS DE TOLLENS - CROMOLOGY','SAS (Société par action simplifiée)',NULL,NULL,NULL),(223,'SEROP SA','SAS (Société par action simplifiée)',NULL,NULL,NULL),(224,'CM3 YNVESTISSEMENT','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(225,'ST MICROELECTRONICS','Groupe International',NULL,NULL,NULL),(226,'SKF France','Groupe International',NULL,NULL,NULL),(227,'NEURO France IMPLANTS','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(228,'ZODIAC SEATS France','SA à Conseil d\'Administration',NULL,NULL,NULL),(229,'LEPRON SA','',NULL,NULL,NULL),(230,'CELFI EURL','',NULL,NULL,NULL),(231,'LAY CONCEPT SEMICONDUCTEUR','',NULL,NULL,NULL),(232,'REVERDY','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(233,'INVACARE France OPERATIONS','Groupe Européen',NULL,NULL,NULL),(234,'TOSHIBA GLOBAL COMMERCE SOLUTIONS','SAS (Société par action simplifiée)',NULL,NULL,NULL),(235,'SECTRONIC','SAS (Société par action simplifiée)',NULL,NULL,NULL),(236,'JAYBEAM WIRELESS','SAS (Société par action simplifiée)',NULL,NULL,NULL),(237,'SAE-FAMATEC','',NULL,NULL,NULL),(238,'SOFRASER','SAS (Société par Action Simplifiée)',NULL,NULL,NULL),(239,'SAS OPCA SN','SAS (Société par action simplifiée)',NULL,NULL,NULL),(240,'BDM France','SAS (Société par Action Simplifiée)',NULL,NULL,NULL),(241,'STIC SA','PME/PMI',NULL,NULL,NULL),(242,'OPCAIM','',NULL,NULL,NULL),(243,'SMI IA INFORMATIQUE','',NULL,NULL,NULL),(244,'FRANCECOL TECHNOLOGY','SAS (Société par action simplifiée)',NULL,NULL,NULL),(245,'REOREV','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(246,'MECA 3 F','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(247,'SCANDIK COROMANT INSERTS France','SAS (Société par action simplifiée)',NULL,NULL,NULL),(248,'PANEM INTERNATIONAL','SAS (Société par action simplifiée)',NULL,NULL,NULL),(249,'SEF TOURAINE','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(250,'GABIALEX','SAS (Société par Action Simplifiée)',NULL,NULL,NULL),(251,'KOYO BEARINGS VIERZON MAROMME','SAS (Société par action simplifiée)',NULL,NULL,NULL),(252,'GROLLEAU','SAS',NULL,NULL,NULL),(253,'GROUPE NEXTER','',NULL,NULL,NULL),(254,'APSIDE SA','SA Directoire',NULL,NULL,NULL),(255,'HARINGTON TECHNOLOGIES','SAS (Société par action simplifiée)',NULL,NULL,NULL),(256,'UMANIS MANAGED SERVICES','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(257,'UMANIS INVESTISSEMENT','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(258,'AMBACIA CONSULTING','SARL Unipersonnelle',NULL,NULL,NULL),(259,'DAHER AEROSPACE','SAS (Société par action simplifiée)',NULL,NULL,NULL),(260,'EREP PROVENCE','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(261,'HOTEL JOSSE','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(262,'HUTCHINSON SNC','Groupe International',NULL,NULL,NULL),(263,'SOTRELI','SAS (Société par action simplifiée)',NULL,NULL,NULL),(264,'LE ROUX CHRISTOPHE','',NULL,NULL,NULL),(265,'COFIROUTE','SA à Conseil d\'Administration',NULL,NULL,NULL),(266,'SOLIHA MAYENNE','',NULL,NULL,NULL),(267,'URBAN ISM SARL','SARL (Société A Responsabilité Limitée)',NULL,NULL,NULL),(268,'SOCIETE THIAISIENNE DE CHAUFFAGE STC','PME/PMI',NULL,NULL,NULL),(269,'FAREVA AMBOISE','SAS (Société par action simplifiée)',NULL,NULL,NULL),(270,'FORMES ET SCULTURES INDUSTRIES','',NULL,NULL,NULL),(271,'CREALIS','SAS (Société par action simplifiée)',NULL,NULL,NULL),(272,'PLASTIQUES DU VAL DE LOIRE','Groupe Européen',NULL,NULL,NULL),(273,'ISS L&P SIEGE','',NULL,NULL,NULL),(274,'STOPFLAM','SAS (Société par action simplifiée)',NULL,NULL,NULL),(275,'HILL ROM SAS','SAS (Société par action simplifiée)',NULL,NULL,NULL),(276,'HARMONIE MUTUELLE-LAXOU NATIONAL','',NULL,NULL,NULL),(277,'MACIF MUTUALITE','',NULL,NULL,NULL);
/*!40000 ALTER TABLE `entreprise` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `est_contact_rh`
--

DROP TABLE IF EXISTS `est_contact_rh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `est_contact_rh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_contact_etablissement` int(11) NOT NULL,
  `id_personne_contact_etablissement` int(11) NOT NULL,
  `id_etablissement` int(11) NOT NULL,
  `date_debut_contact_rh` date NOT NULL DEFAULT '1900-01-01',
  `date_fin_contact_rh` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_EstContactRH_ContactEtablissement1_idx` (`id_contact_etablissement`,`id_personne_contact_etablissement`),
  KEY `fk_EstContactRH_Etablissement1_idx` (`id_etablissement`),
  CONSTRAINT `fk_EstContactRH_ContactEtablissement1` FOREIGN KEY (`id_contact_etablissement`, `id_personne_contact_etablissement`) REFERENCES `contact_etablissement` (`id`, `id_personne`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_EstContactRH_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `est_contact_rh`
--

LOCK TABLES `est_contact_rh` WRITE;
/*!40000 ALTER TABLE `est_contact_rh` DISABLE KEYS */;
INSERT INTO `est_contact_rh` VALUES (1,1,51,1,'1990-01-01','2010-12-31'),(2,3,53,3,'1992-01-03',NULL),(3,5,55,5,'1994-01-04',NULL),(4,7,57,7,'1996-01-06',NULL),(5,9,59,9,'1998-01-07',NULL),(6,11,61,11,'2000-01-09',NULL),(7,13,63,13,'2002-01-10',NULL),(8,15,65,15,'2004-01-12',NULL),(9,17,67,17,'2006-01-13',NULL),(10,19,69,19,'2008-01-15',NULL),(11,21,71,21,'2010-01-16',NULL),(12,23,73,23,'2012-01-18',NULL),(13,25,75,25,'2014-01-19',NULL),(14,27,77,27,'1990-01-21',NULL),(15,29,79,29,'1992-01-21',NULL),(16,31,81,31,'1994-01-21',NULL),(17,33,83,33,'1996-01-21',NULL),(18,35,85,35,'1998-01-21',NULL),(19,37,87,37,'2000-01-21',NULL),(20,39,89,39,'2002-01-21',NULL),(21,41,91,41,'2004-01-21',NULL),(22,43,93,43,'2006-01-21',NULL),(23,45,95,45,'2008-01-21',NULL),(24,47,97,47,'2010-01-21',NULL),(25,49,99,49,'2012-01-21',NULL);
/*!40000 ALTER TABLE `est_contact_rh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `est_contact_technique`
--

DROP TABLE IF EXISTS `est_contact_technique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `est_contact_technique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_contact_etablissement` int(11) NOT NULL,
  `id_personne_contact_etablissement` int(11) NOT NULL,
  `id_etablissement` int(11) NOT NULL,
  `date_debut_contact_technique` date NOT NULL DEFAULT '1900-01-01',
  `date_fin_contact_technique` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_EstContactTechnique_ContactEtablissement1_idx` (`id_contact_etablissement`,`id_personne_contact_etablissement`),
  KEY `fk_EstContactTechnique_Etablissement1_idx` (`id_etablissement`),
  CONSTRAINT `fk_EstContactTechnique_ContactEtablissement1` FOREIGN KEY (`id_contact_etablissement`, `id_personne_contact_etablissement`) REFERENCES `contact_etablissement` (`id`, `id_personne`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_EstContactTechnique_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `est_contact_technique`
--

LOCK TABLES `est_contact_technique` WRITE;
/*!40000 ALTER TABLE `est_contact_technique` DISABLE KEYS */;
INSERT INTO `est_contact_technique` VALUES (1,2,52,2,'1991-01-02','2000-12-31'),(2,2,52,51,'2001-01-01',NULL),(3,4,54,4,'1993-01-03',NULL),(4,6,56,6,'1995-01-05',NULL),(5,8,58,8,'1997-01-06',NULL),(6,10,60,10,'1999-01-08',NULL),(7,12,62,12,'2001-01-09',NULL),(8,14,64,14,'2003-01-11',NULL),(9,16,66,16,'2005-01-12',NULL),(10,18,68,18,'2007-01-14','2017-12-31'),(11,18,68,52,'2018-01-01',NULL),(12,20,70,20,'2009-01-15',NULL),(13,22,72,22,'2011-01-17',NULL),(14,24,74,24,'2013-01-18',NULL),(15,26,76,26,'2015-01-20',NULL),(16,28,78,28,'1991-01-21',NULL),(17,30,80,30,'1993-01-21',NULL),(18,32,82,32,'1995-01-21',NULL),(19,34,84,34,'1997-01-21','2018-02-01'),(20,34,84,53,'2018-02-02',NULL),(21,36,86,36,'1999-01-21',NULL),(22,38,88,38,'2001-01-21',NULL),(23,40,90,40,'2003-01-21',NULL),(24,42,92,42,'2005-01-21',NULL),(25,44,94,44,'2007-01-21',NULL),(26,46,96,46,'2009-01-21',NULL),(27,48,98,48,'2011-01-21','2016-12-31'),(28,50,100,50,'2013-01-21',NULL);
/*!40000 ALTER TABLE `est_contact_technique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `est_employe`
--

DROP TABLE IF EXISTS `est_employe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `est_employe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_contact_etablissement` int(11) NOT NULL,
  `id_personne_contact_etablissement` int(11) NOT NULL,
  `id_etablissement` int(11) NOT NULL,
  `fonction` varchar(255) NOT NULL DEFAULT 'Employé(e)',
  `date_debut_emploi` date NOT NULL DEFAULT '1900-01-01',
  `date_fin_emploi` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Employe_ContactEtablissement1_idx` (`id_contact_etablissement`,`id_personne_contact_etablissement`),
  KEY `fk_Employe_Etablissement1_idx` (`id_etablissement`),
  CONSTRAINT `fk_Employe_ContactEtablissement1` FOREIGN KEY (`id_contact_etablissement`, `id_personne_contact_etablissement`) REFERENCES `contact_etablissement` (`id`, `id_personne`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_Employe_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `est_employe`
--

LOCK TABLES `est_employe` WRITE;
/*!40000 ALTER TABLE `est_employe` DISABLE KEYS */;
INSERT INTO `est_employe` VALUES (1,1,51,1,'RH','1990-01-01','2010-12-31'),(2,2,52,2,'Ingénieur','1991-01-02','2000-12-31'),(3,2,52,51,'Ingénieur','2001-01-01',NULL),(4,3,53,3,'RH','1992-01-03',NULL),(5,4,54,4,'Ingénieur','1993-01-03',NULL),(6,5,55,5,'RH','1994-01-04',NULL),(7,6,56,6,'Ingénieur','1995-01-05',NULL),(8,7,57,7,'RH','1996-01-06',NULL),(9,8,58,8,'Ingénieur','1997-01-06',NULL),(10,9,59,9,'RH','1998-01-07',NULL),(11,10,60,10,'Ingénieur','1999-01-08',NULL),(12,11,61,11,'RH','2000-01-09',NULL),(13,12,62,12,'Ingénieur','2001-01-09',NULL),(14,13,63,13,'RH','2002-01-10',NULL),(15,14,64,14,'Ingénieur','2003-01-11',NULL),(16,15,65,15,'RH','2004-01-12',NULL),(17,16,66,16,'Ingénieur','2005-01-12',NULL),(18,17,67,17,'RH','2006-01-13',NULL),(19,18,68,18,'Ingénieur','2007-01-14','2017-12-31'),(20,18,68,52,'Ingénieur','2018-01-01',NULL),(21,19,69,19,'RH','2008-01-15',NULL),(22,20,70,20,'Ingénieur','2009-01-15',NULL),(23,21,71,21,'RH','2010-01-16',NULL),(24,22,72,22,'Ingénieur','2011-01-17',NULL),(25,23,73,23,'RH','2012-01-18',NULL),(26,24,74,24,'Ingénieur','2013-01-18',NULL),(27,25,75,25,'RH','2014-01-19',NULL),(28,26,76,26,'Ingénieur','2015-01-20',NULL),(29,27,77,27,'RH','1990-01-21',NULL),(30,28,78,28,'Ingénieur','1991-01-21',NULL),(31,29,79,29,'RH','1992-01-21',NULL),(32,30,80,30,'Ingénieur','1993-01-21',NULL),(33,31,81,31,'RH','1994-01-21',NULL),(34,32,82,32,'Ingénieur','1995-01-21',NULL),(35,33,83,33,'RH','1996-01-21',NULL),(36,34,84,34,'Ingénieur','1997-01-21','2018-02-01'),(37,34,84,53,'Ingénieur','2018-02-02',NULL),(38,35,85,35,'RH','1998-01-21',NULL),(39,36,86,36,'Ingénieur','1999-01-21',NULL),(40,37,87,37,'RH','2000-01-21',NULL),(41,38,88,38,'Ingénieur','2001-01-21',NULL),(42,39,89,39,'RH','2002-01-21',NULL),(43,40,90,40,'Ingénieur','2003-01-21',NULL),(44,41,91,41,'RH','2004-01-21',NULL),(45,42,92,42,'Ingénieur','2005-01-21',NULL),(46,43,93,43,'RH','2006-01-21',NULL),(47,44,94,44,'Ingénieur','2007-01-21',NULL),(48,45,95,45,'RH','2008-01-21',NULL),(49,46,96,46,'Ingénieur','2009-01-21',NULL),(50,47,97,47,'RH','2010-01-21',NULL),(51,48,98,48,'Ingénieur','2011-01-21','2016-12-31'),(52,49,99,49,'RH','2012-01-21',NULL),(53,50,100,50,'Ingénieur','2013-01-21',NULL);
/*!40000 ALTER TABLE `est_employe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etablissement`
--

DROP TABLE IF EXISTS `etablissement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etablissement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_entreprise` int(11) DEFAULT NULL,
  `id_adresse` int(11) DEFAULT NULL,
  `nom_etablissement` varchar(255) NOT NULL DEFAULT 'Inconnu',
  `num_siret` varchar(14) DEFAULT NULL,
  `type_structure` varchar(255) DEFAULT NULL,
  `effectifs` varchar(45) DEFAULT NULL,
  `secteurs_activites` varchar(255) DEFAULT NULL,
  `code_naf` varchar(45) DEFAULT NULL,
  `site_web_etablissement` varchar(255) DEFAULT NULL,
  `commentaire_etablissement` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `siret_UNIQUE` (`num_siret`),
  KEY `fk_Etablissement_Adresse1_idx` (`id_adresse`),
  KEY `fk_Etablissement_Entreprise1_idx` (`id_entreprise`),
  CONSTRAINT `fk_Etablissement_Adresse1` FOREIGN KEY (`id_adresse`) REFERENCES `adresse` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Etablissement_Entreprise1` FOREIGN KEY (`id_entreprise`) REFERENCES `entreprise` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=299 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etablissement`
--

LOCK TABLES `etablissement` WRITE;
/*!40000 ALTER TABLE `etablissement` DISABLE KEYS */;
INSERT INTO `etablissement` VALUES (1,59,133,'DIRECTION DEPARTEMENTALE DES TERRITOIRES D\'INDRE-ET-LOIRE','13001027500019','Administration','Non renseigné',NULL,'84.13Z',NULL,'Test'),(2,78,158,'BASE AERIENNE 705 DE TOURS','13001721300013','Administration','1000 et +',NULL,'84.22Z',NULL,NULL),(3,26,98,'CEREMA TERRITOIRS ET VILLE','13001831000081','Administration','50 à 199',NULL,'84.13Z',NULL,NULL),(4,5,91,'CNRS MIDI-PYRENEE','18008901300676','Non renseigné','Non renseigné',NULL,'72.19Z',NULL,NULL),(5,5,148,'CNRS UPR3266 GANIL','18008901303498','Entreprise publique / SEM','200 à 999',NULL,'72.19Z',NULL,NULL),(6,5,109,'CNRS','18008901303720','Entreprise publique / SEM','Non renseigné',NULL,NULL,NULL,NULL),(7,5,76,'CNRS - GICC - UMR 7292','18008901307481','Entreprise publique / SEM','50 à 199',NULL,'72.11Z',NULL,NULL),(8,66,141,'AGENCE DE L\'EAU LOIRE BRETAGNE','18450301900087','Etablissement public non industriel et commercial','Non renseigné',NULL,NULL,NULL,NULL),(9,83,163,'DEPARTEMENT DE SEINE ET MARNE','22770001000019','Collectivité territoriale','1000 et +',NULL,NULL,NULL,NULL),(10,76,156,'FORUM DES MARAIS AQUATIQUES','25171039800016','Collectivité territoriale','10 à 49',NULL,'84.12Z',NULL,NULL),(11,24,96,'CHRU BRETONNEAU','26370018900016','Etablissement public hospitalier','1000 et +',NULL,'86.10Z',NULL,NULL),(12,14,85,'AUDC','30179284200025','Association','10 à 49',NULL,'71.11Z',NULL,NULL),(13,85,165,'ECOFIT','30817214700032','Entreprise privée','50 à 199',NULL,'27.11z',NULL,NULL),(14,54,128,'APSIDE','30906508400068','Entreprise privée','1000 et +',NULL,'71.12B',NULL,NULL),(15,80,160,'ETS JC BOUY SAS','31018883400025','Entreprise privée','200 à 999',NULL,'25.62b',NULL,NULL),(16,84,164,'AVON POLYMERES FRANCE SAS','31278633800029','Entreprise privée','50 à 199',NULL,'22.19Z',NULL,NULL),(17,35,107,'GE MEDICAL SYSTEMS','31501335900155','Entreprise privée','1000 et +',NULL,'26.60z',NULL,NULL),(18,31,103,'COMPAGNIE DES AUTOCARS DE TOURAINE','31535016500041','Non renseigné','Non renseigné',NULL,'49.39A',NULL,NULL),(19,11,82,'BERGER WAGON I WAGON GHECO','31858565000035','Non renseigné','Non renseigné',NULL,'71.11Z',NULL,NULL),(20,50,123,'ENIA ARCHITECTES','32886221400041','Entreprise privée','10 à 49',NULL,'71.11Z',NULL,NULL),(21,32,104,'ERIL','32916606000023','Entreprise privée','10 à 49',NULL,'71.12b',NULL,NULL),(22,47,120,'COLAS NORD-EST','32919833700530','Entreprise privée','Non renseigné',NULL,'42.11Z',NULL,NULL),(23,27,99,'EURO ENGINEERING','33042146200269','Entreprise privée','50 à 199',NULL,'71.12b',NULL,NULL),(24,7,78,'AXIS CONSEILS','33174748500067','Entreprise privée','50 à 199',NULL,'71.12B',NULL,NULL),(25,39,112,'DARTY GRAND OUEST','33940393300049','Entreprise privée','1000 et +',NULL,'70.10Z',NULL,NULL),(26,25,97,'EMI - SEPAME ELECTRONIQUE','34933538000045','Entreprise privée','10 à 49',NULL,'26.51B',NULL,NULL),(27,69,146,'ASTRONICS - PGA AVIONICS','35053493900045','Entreprise privée','200 à 999',NULL,'33.20C',NULL,NULL),(28,12,83,'CONSEILS ET REALISATIONS INFORMATIQUE','35084898200012','Entreprise privée','1 à 9',NULL,'62.02A',NULL,NULL),(29,44,117,'AUSY','35290570700183','Entreprise privée','200 à 999',NULL,'62.02A',NULL,NULL),(30,86,166,'CHANTIER NAVAL GLEHEN','37698014000044','Entreprise privée','10 à 49',NULL,'30.11Z',NULL,NULL),(31,61,135,'FIVES MAINTENANCE','38006567200061','Entreprise privée','200 à 999',NULL,'33.12z',NULL,NULL),(32,22,94,'BIOMASSE NORMANDIE','38374331700034','Association','10 à 49',NULL,'72.19Z',NULL,NULL),(33,9,80,'BIOTOPE','39061361000117','Non renseigné','Non renseigné',NULL,NULL,NULL,NULL),(34,45,118,'CMF GROUPE','39087162200036','Entreprise privée','10 à 49',NULL,'28.41z',NULL,NULL),(35,10,81,'CAINET MONTMASSON INGENIEURS CONSEILS','39114240300024','Entreprise privée','10 à 49',NULL,'71.12B',NULL,NULL),(36,87,167,'CEP INDUSTRIE','39203178700089','Entreprise privée','10 à 49',NULL,'71.20B',NULL,NULL),(37,41,114,'EAS MONECONCEPT','39342614300045','Entreprise privée','Non renseigné',NULL,'71.12B',NULL,NULL),(38,60,134,'CARBET DES SCIENCES','39441887500032','Association','10 à 49',NULL,'94.99Z',NULL,NULL),(39,30,102,'CAISSE REG DU CREDIT AGRICOLE MUTUEL TOURAINE POITOU','39978009700701','Entreprise privée','10 à 49',NULL,'64.19Z',NULL,NULL),(40,58,132,'ETS TERRAL','39997980600029','Entreprise privée','1 à 9',NULL,'28.30z',NULL,NULL),(41,28,100,'FRANCE REDUCTEURS SAS','40129769200022','Entreprise privée','50 à 199',NULL,'22.29A',NULL,NULL),(42,17,88,'ATOS INTEGRATION','40802471900507','Entreprise privée','200 à 999',NULL,'62.02A',NULL,NULL),(43,18,89,'DUBOST ENVIRONNEMENT','41062188200035','Non renseigné','Non renseigné',NULL,NULL,NULL,NULL),(44,49,122,'CITADIA CONSEIL','41212470300171','Entreprise privée','50 à 199',NULL,'70.22Z',NULL,NULL),(45,29,101,'ECOTONE RECHERCHE ET ENVIRONNEMENT','41509420000045','Entreprise privée','10 à 49',NULL,'71.12B',NULL,NULL),(46,38,111,'AVIDSEN SAS','42046253300043','Entreprise privée','10 à 49',NULL,'46.43z',NULL,NULL),(47,71,149,'FAURECIA SYSTEME D\'ECHAPPEMENT','42079743300042','Entreprise privée','200 à 999',NULL,'29.32Z',NULL,NULL),(48,65,140,'EUROVIA LANGUEDOC-ROUSSILLON','42861352500024','Entreprise privée','50 à 199',NULL,'42.11Z',NULL,NULL),(49,3,73,'AREVA NP','42876450000016','Entreprise privée','Non renseigné',NULL,'24.46Z',NULL,NULL),(50,3,75,'AREVA PROJETS','42876450000198','Entreprise privée','200 à 999',NULL,'71.12B',NULL,NULL),(51,79,159,'ESVRES MATRICAGE','43003253200029','Entreprise privée','50 à 199',NULL,'25.50A',NULL,NULL),(52,74,153,'ENTREPRISE CITEOS','44031376500065','Entreprise privée','10 à 49',NULL,'43.21A',NULL,NULL),(53,33,105,'CABINET ECTAR ETUDE CONSEIL TRANS AERI','44370039800037','Entreprise privée','10 à 49',NULL,'70.22Z',NULL,NULL),(54,77,157,'ARCELORMITTAL - SITE DE BASSE INDRE','44471856300091','Entreprise privée','200 à 999',NULL,'24.10z',NULL,NULL),(55,40,113,'CAPGEMINI TECHNOLOGY SERVICES','47976684200211','Entreprise privée','10 à 49',NULL,'62.02A',NULL,NULL),(56,40,124,'CAPGEMINI TECHNOLOGY SERVICES','47976684200286','Entreprise privée','1000 et +',NULL,'62.02A',NULL,NULL),(57,64,139,'ENERGIES DEMAIN','48047850200077','Entreprise privée','10 à 49',NULL,'71.12B',NULL,NULL),(58,4,74,'FNAIR CENTRE VAL DE LOIRE','48312165300024','Association','1 à 9',NULL,'88.99B',NULL,NULL),(59,73,152,'FAIVELEY TRANSPORT TOURS','48924388100047','Entreprise privée','200 à 999',NULL,'30.20Z',NULL,NULL),(60,21,93,'EGIS VILLES & TRANSPORTS','49333442900591','Entreprise privée','200 à 999',NULL,'71.12B',NULL,NULL),(61,46,119,'DECATHLON FRANCE','50056940502009','Entreprise privée','50 à 199',NULL,'47.64z',NULL,NULL),(62,70,147,'ELECTRI CYCLE','50434100900026','Entreprise privée','10 à 49',NULL,'45.40Z',NULL,NULL),(63,81,161,'CAZAUX ROTORFLEX SARL','50493125400024','Entreprise privée','10 à 49',NULL,'28.93Z',NULL,NULL),(64,37,110,'CAT-AMANIA','51968508500010','Non renseigné','200 à 999',NULL,'62.02a',NULL,NULL),(65,75,155,'FOUNDATION BRAKES FRANCE','52926839300020','Entreprise privée','200 à 999',NULL,'29.32Z',NULL,NULL),(66,19,90,'FONCTION SUPPORT','53084118800069','Entreprise privée','10 à 49',NULL,'70.22Z',NULL,NULL),(67,55,129,'EXAEGIS','53870098000013','Entreprise privée','Non renseigné',NULL,'82.99z',NULL,NULL),(68,6,77,'BIOSPRINGER','54209199600026','Entreprise privée','200 à 999',NULL,'10.89Z',NULL,NULL),(69,2,138,'EDF CNEPE','55208131712419','Etablissement public non industriel et commercial','1000 et +',NULL,'35.11Z',NULL,NULL),(70,2,151,'EDF CNPE CHINON','55208131715453','Entreprise privée','1000 et +',NULL,'35.11Z','http://prestataires-nucleaire.edf.com/edf-fr-accueil/prestataires-du-nucleaire-edf/centrales-nucleaires/chinon-54059.html',NULL),(71,2,144,'EDF CNEN','55208131750062','Entreprise publique / SEM','1000 et +',NULL,'35.11Z',NULL,NULL),(72,2,72,'EDF - UNITE TECHNIQUE OPERATIONNELLE','55208131790175','Entreprise publique / SEM','200 à 999',NULL,'35.11z',NULL,NULL),(73,67,143,'BABOLAT VS','55213140100044','Entreprise privée','50 à 199',NULL,'32.30Z',NULL,NULL),(74,15,86,'BAYER SAS','56203889300680','Entreprise privée','10 à 49',NULL,'20.20Z',NULL,NULL),(75,36,108,'BOUYGUES IMMOBILIER','56209154601009','Entreprise privée','1000 et +',NULL,'41.10a',NULL,NULL),(76,52,126,'CMN','56211096500034','Entreprise privée','200 à 999',NULL,'30.11z',NULL,NULL),(77,82,162,'CEMOI CHOCOLATIERS','56420216600083','Entreprise privée','200 à 999',NULL,'10.82z',NULL,NULL),(78,57,131,'CITADIS','60262030400041','Entreprise publique / SEM','10 à 49',NULL,'42.99Z',NULL,NULL),(79,48,121,'COLAS RAIL','63204912800523','Entreprise privée','Non renseigné',NULL,'42.12Z',NULL,NULL),(80,20,92,'BNP PARIBAS','66204244900014','Etablissement public à caractère industriel et commercial','1000 et +',NULL,'64.19Z',NULL,NULL),(81,63,137,'CILAS','66980216700082','Entreprise privée','200 à 999',NULL,'26.70Z',NULL,NULL),(82,34,106,'BURGEAP','68200822200056','Entreprise privée','200 à 999',NULL,'71.12B',NULL,NULL),(83,42,142,'CGI NANTES','70204275500182','Entreprise privée','200 à 999',NULL,'62.02A',NULL,NULL),(84,42,115,'CGI FRANCE','70204275500349','Entreprise privée','50 à 199',NULL,'62.02A',NULL,NULL),(85,53,127,'CETIM','77562907400011','Entreprise privée','200 à 999',NULL,'72.19Z',NULL,NULL),(86,1,71,'COMMISSARIAT A L ENERGIE ATOMIQUE C','77568501900314','Etablissement public à caractère industriel et commercial','Non renseigné',NULL,'72.19Z','http://www.cea.fr/le-cea/les-centres-cea/le-ripault',NULL),(87,1,154,'CEA - SACLAY','77568501900488','Non renseigné','Non renseigné',NULL,'72.19Z',NULL,NULL),(88,88,168,'DEDIENNE MULTIPLASTURGY','77572308300058','Entreprise privée','50 à 199',NULL,'22.29a',NULL,NULL),(89,43,116,'FEDERATION DEPARTEMENTALE DE PECHE DE LA VIENNE','78156592400045','Association','Non renseigné',NULL,NULL,NULL,NULL),(90,8,79,'CAL DE MEURTHE-ET-MOSELLE','78334556400042','Association','10 à 49',NULL,'88.99b',NULL,NULL),(91,16,87,'ATELIER D\'URBANISME PERSPECTIVE','80423093600010','Entreprise privée','1 à 9',NULL,'71.11Z',NULL,NULL),(92,56,130,'BICEPHALE SAS','81821125200015','Entreprise privée','1 à 9',NULL,'46.51z',NULL,NULL),(93,13,84,'ENTECH SMART ENERGIES','81824631600025','Entreprise privée','10 à 49',NULL,'71.12b',NULL,NULL),(94,23,95,'EQUENSWORLDLINE','81917378200064','Etablissement étranger','0',NULL,'64.99Z',NULL,NULL),(95,62,136,'COLAS','82329962300012','Entreprise privée','200 à 999',NULL,'42.11Z',NULL,NULL),(96,51,125,'BEIJING INSTITUTE OF TECHNONOGY',NULL,'Etablissement étranger','Non renseigné',NULL,NULL,NULL,NULL),(97,68,145,'CALYOS SA',NULL,'Etablissement étranger','Non renseigné',NULL,NULL,NULL,NULL),(98,72,150,'BRUUN & MOLLERS LANDSCHAFTSARCHITEKTEN',NULL,'Etablissement étranger','10 à 49',NULL,NULL,NULL,NULL),(99,89,170,'ADVANS GROUP',NULL,NULL,NULL,'Informatique Electronique Mécanique',NULL,NULL,NULL),(100,90,171,'AERO CENTRE',NULL,NULL,NULL,'Informatique Electronique Mécanique',NULL,NULL,NULL),(101,91,172,'AGH CONSULTING',NULL,NULL,NULL,'Télécommunications ',NULL,NULL,NULL),(102,92,173,'AKKA TECHNOLOGIES',NULL,NULL,NULL,'Société d\'ingénierie',NULL,NULL,NULL),(103,93,174,'ALTEN',NULL,NULL,NULL,'Conseil en ingénierie',NULL,NULL,NULL),(104,94,175,'APSIDE TOP',NULL,NULL,NULL,'Conseil et ingénierie informatique',NULL,NULL,NULL),(105,95,176,'ARTICQUE',NULL,NULL,NULL,'éditeur logiciel',NULL,NULL,NULL),(106,96,177,'ASTRONICS PGA AVIONICS (PGA ELECTRONIC)',NULL,NULL,NULL,'Aéronautique',NULL,NULL,NULL),(107,97,178,'ATOS',NULL,NULL,NULL,'ESN (Entreprise de Services du Numérique)',NULL,NULL,NULL),(108,98,179,'BUSINESS & DECISION',NULL,NULL,NULL,'Informatique Décionnelle',NULL,NULL,NULL),(109,99,180,'CAPGEMINI',NULL,NULL,NULL,'NTIC (Nouv. Tech. de l\'Info. et de la Com.)',NULL,NULL,NULL),(110,100,181,'CGI',NULL,NULL,NULL,'ESN (Entreprise de Services du Numérique)',NULL,NULL,NULL),(111,101,182,'CIRFA - ARMEE DE L\'AIR',NULL,NULL,NULL,'Défense',NULL,NULL,NULL),(112,102,183,'CIRFA - ARMEE DE TERRE',NULL,NULL,NULL,'Défense',NULL,NULL,NULL),(113,103,184,'CIRFA - MARINE NATIONALE',NULL,NULL,NULL,'Défense',NULL,NULL,NULL),(114,104,185,'NETIXIA / CLOUD TEMPLE',NULL,NULL,NULL,'Développement logiciel',NULL,NULL,NULL),(115,105,186,'CNAV',NULL,NULL,NULL,'Retraite',NULL,NULL,NULL),(116,106,187,'DAHER',NULL,NULL,NULL,'Dir Service Info',NULL,NULL,NULL),(117,107,188,'DECATHLON - SERVICE INFORMATIQUE',NULL,NULL,NULL,'Retail - sport',NULL,NULL,NULL),(118,108,189,'ENEDIS (ERDF)',NULL,NULL,NULL,'Distribution d\'électricité',NULL,NULL,NULL),(119,109,190,'EXCENT',NULL,NULL,NULL,'Ingénierie mécanique',NULL,NULL,NULL),(120,110,191,'GAULT ET FREMONT',NULL,NULL,NULL,'Cartonnage',NULL,NULL,NULL),(121,111,192,'GFI INFORMATIQUE',NULL,NULL,NULL,'Informatique',NULL,NULL,NULL),(122,112,193,'GROUPE CYRèS - INGENSI',NULL,NULL,NULL,'Technologies et services',NULL,NULL,NULL),(123,113,194,'GROUPE OPEN',NULL,NULL,NULL,'IT',NULL,NULL,NULL),(124,114,195,'INFOTEL',NULL,NULL,NULL,'Informatique de Gestion',NULL,NULL,NULL),(125,115,196,'IREC',NULL,NULL,NULL,'Informatique',NULL,NULL,NULL),(126,116,197,'LOGITUD SOLUTIONS',NULL,NULL,NULL,'Editeur de Logiciels',NULL,NULL,NULL),(127,117,198,'MADE IN VAL DE LOIRE',NULL,NULL,NULL,'Industrie',NULL,NULL,NULL),(128,118,199,'MICHELIN',NULL,NULL,NULL,'Pneumatiques',NULL,NULL,NULL),(129,119,200,'MY SERIOUS GAME',NULL,NULL,NULL,'Formation',NULL,NULL,NULL),(130,120,201,'NEREIDE / APACHE OFBIZ',NULL,NULL,NULL,'Conseil et services informatique',NULL,NULL,NULL),(131,121,202,'NUMEN (SATI)',NULL,NULL,NULL,'Conseil et services informatique',NULL,NULL,NULL),(132,122,203,'ORANGE',NULL,NULL,NULL,'Télécommunications',NULL,NULL,NULL),(133,123,204,'PEAKEXPERT',NULL,NULL,NULL,'Laboratoire analyses polymères',NULL,NULL,NULL),(134,124,205,'PEPITE CENTRE',NULL,NULL,NULL,'Aide Créa Entreprise',NULL,NULL,NULL),(135,125,206,'SEGULA TECHNOLOGIES',NULL,NULL,NULL,'Conseil en ingénierie',NULL,NULL,NULL),(136,126,207,'SOGETI',NULL,NULL,NULL,'ESN (Entreprise de Services du Numérique)',NULL,NULL,NULL),(137,127,208,'SOPRA STERIA',NULL,NULL,NULL,'Conseil, intégration de systèmes',NULL,NULL,NULL),(138,128,209,'SNCF RéSEAU - INGéNIERIE ET PROJETS AU FéMININ !',NULL,NULL,NULL,'Ingenierie ferroviaire',NULL,NULL,NULL),(139,129,210,'SPRING',NULL,NULL,NULL,'RECRUTEMENT',NULL,NULL,NULL),(140,130,211,'STMICROELECTRONICS TOURS',NULL,NULL,NULL,'Semi conducteurs',NULL,NULL,NULL),(141,131,212,'SWORD',NULL,NULL,NULL,'Conseil et service informatique',NULL,NULL,NULL),(142,132,213,'TEKIN',NULL,NULL,NULL,'Conception d\'objets connectés',NULL,NULL,NULL),(143,133,214,'THALES',NULL,NULL,NULL,'Industrie Défense civile et militaire',NULL,NULL,NULL),(144,134,215,'UMANIS',NULL,NULL,NULL,'Informatique',NULL,NULL,NULL),(145,135,216,'WORLDLINE',NULL,NULL,NULL,'ESN (Entreprise de Services du Numérique)',NULL,NULL,NULL),(146,136,217,'NEOPOL',NULL,NULL,NULL,'Portage Salarial',NULL,NULL,NULL),(147,NULL,NULL,'Kazeko',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(148,NULL,NULL,'C2S',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(149,NULL,NULL,'Sopra / Steria, APS, Banking',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(150,137,218,'DL PAYSAGE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(151,138,219,'ESRI France SA',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(152,139,220,'URB-AM CONSEIL',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(153,140,221,'CLEARNOX',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(154,141,222,'LESENS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(155,142,223,'SUEZ RV CENTRE OUEST',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(156,2,224,'EDF',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(157,143,225,'ERDF',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(158,144,226,'SOCIETE D\'EQUIPEMENT DU DOUBS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(159,145,227,'INFOVISTA',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(160,146,228,'TESA',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(161,147,229,'INTERSECTION CONSULTING',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(162,148,230,'NEOLEASE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(163,149,231,'ELSYS DESIGN',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(164,150,232,'WESER',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(165,151,233,'TERRE ARMEE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(166,152,234,'CLF SATREM',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(167,153,235,'SNCF DRH-RHC',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(168,154,236,'ETABLISSEMENTS MICHEL',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(169,155,237,'LIGNE DAU',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(170,156,238,'EFFICO',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(171,157,239,'CENTRECO',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(172,158,240,'ADEV ENVIRONNEMENT SARL',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(173,159,241,'ATELIER METHODE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(174,160,242,'SORADIS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(175,161,243,'SOCIETE D\'ELECTRONIQUE DE TELECOM',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(176,162,244,'FRANS BONHOMME',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(177,163,245,'LA NOUVELLE REPUBLIQUE DU CENTRE OUEST',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(178,164,246,'MJ 80',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(179,165,247,'ALTERNATIVE COURTAGE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(180,166,248,'SAS GROUPE AXXESS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(181,167,249,'SOCIETE D\'EQUIPEMENT DE LA TOURAINE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(182,168,250,'ONTOMATICS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(183,169,251,'ACKWA',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(184,170,252,'NEREIDE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(185,171,253,'HCIS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(186,172,254,'SILIMIXT',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(187,173,255,'SCIENCES SYSTEMES ENERGIE ELECTRIQUE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(188,174,256,'BARRAULT JEAN-LOUIS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(189,175,257,'AMBIN INFORMATIQUE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(190,176,258,'KEOLIS TOURS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(191,177,259,'SARL OPTIMALOG',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(192,178,260,'MAISONING',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(193,179,261,'BUSINESS REPRO CENTRE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(194,180,262,'TUILERIE DE LA BRETECHE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(195,181,263,'PRESSE PORTAGE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(196,182,264,'SIAM CONSEILS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(197,183,265,'SASU LA COMPAGNIE DES SAVEURS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(198,184,266,'ARC INTERNATIONAL COOKWARE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(199,185,267,'A.C.T. ENGINEERING',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(200,186,268,'STE HEROUVILLE D\'ECONO MIXTE POUR LAM',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(201,187,269,'URBA-SERVICES',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(202,188,270,'ELAN CORPORATE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(203,189,271,'LOIRE OCEAN',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(204,190,272,'APRITEC INGENIERIE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(205,191,273,'PERTILIENCE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(206,192,274,'ECONOMIE MIXTE IMMOBILIERE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(207,193,275,'SYNERGIE GIE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(208,194,276,'ADEME',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(209,195,277,'ARMONY SYSTEM',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(210,196,278,'ANTEA',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(211,197,279,'SARL IPROCIA',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(212,198,280,'BIOTEC BIOLOGIE APPLIQUEE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(213,199,281,'CERYX TRAFIC SYSTEM',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(214,200,282,'ICF ENVIRONNEMENT',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(215,201,283,'SMARTFI SERVICES',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(216,202,284,'ADOMIA',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(217,203,285,'NALDEO',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(218,204,286,'SOGETI France',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(219,205,287,'I\'CAR SYSTEMS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(220,206,288,'ESKAPE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(221,207,289,'GEO HYD',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(222,208,290,'DL INFRA',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(223,209,291,'FASTBOIL',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(224,210,292,'SOM GROUPE ORTEC',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(225,211,293,'SOPRA BANKING SOFTWARE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(226,212,294,'CAT AMANIA',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(227,213,295,'SIVECO GROUP',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(228,214,296,'URBANIS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(229,215,297,'DL FINANCES',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(230,216,298,'CAPGEMINI France',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(231,217,299,'ASSYSTEM',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(232,218,300,'AVIDSEN',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(233,219,301,'SMART HOME INTERNATIONAL',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(234,220,302,'GPF',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(235,221,303,'LMN',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(236,222,304,'COULEURS DE TOLLENS - CROMOLOGY',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(237,223,305,'SEROP SA',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(238,224,306,'CM3 YNVESTISSEMENT',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(239,225,307,'ST MICROELECTRONICS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(240,226,308,'SKF France',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(241,227,309,'NEURO France IMPLANTS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(242,228,310,'ZODIAC SEATS France',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(243,229,311,'LEPRON SA',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(244,230,312,'CELFI EURL',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(245,231,313,'LAY CONCEPT SEMICONDUCTEUR',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(246,232,314,'REVERDY',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(247,233,315,'INVACARE France OPERATIONS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(248,234,316,'TOSHIBA GLOBAL COMMERCE SOLUTIONS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(249,235,317,'SECTRONIC',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(250,236,318,'JAYBEAM WIRELESS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(251,237,319,'SAE-FAMATEC',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(252,238,320,'SOFRASER',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(253,239,321,'SAS OPCA SN',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(254,240,322,'BDM France',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(255,241,323,'STIC SA',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(256,242,324,'OPCAIM',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(257,243,325,'SMI IA INFORMATIQUE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(258,244,326,'FRANCECOL TECHNOLOGY',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(259,245,327,'REOREV',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(260,246,328,'MECA 3 F',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(261,247,329,'SCANDIK COROMANT INSERTS France',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(262,248,330,'PANEM INTERNATIONAL',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(263,249,331,'SEF TOURAINE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(264,250,332,'GABIALEX',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(265,251,333,'KOYO BEARINGS VIERZON MAROMME',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(266,252,334,'GROLLEAU',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(267,253,335,'GROUPE NEXTER',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(268,254,336,'APSIDE SA',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(269,255,337,'HARINGTON TECHNOLOGIES',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(270,256,338,'UMANIS MANAGED SERVICES',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(271,257,339,'UMANIS INVESTISSEMENT',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(272,258,340,'AMBACIA CONSULTING',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(273,259,341,'DAHER AEROSPACE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(274,260,342,'EREP PROVENCE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(275,261,343,'HOTEL JOSSE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(276,262,344,'HUTCHINSON SNC',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(277,263,345,'SOTRELI',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(278,264,346,'LE ROUX CHRISTOPHE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(279,265,347,'COFIROUTE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(280,266,348,'SOLIHA MAYENNE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(281,267,349,'URBAN ISM SARL',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(282,268,350,'SOCIETE THIAISIENNE DE CHAUFFAGE STC',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(283,269,351,'FAREVA AMBOISE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(284,270,352,'FORMES ET SCULTURES INDUSTRIES',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(285,271,353,'CREALIS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(286,272,354,'PLASTIQUES DU VAL DE LOIRE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(287,273,355,'ISS L&P SIEGE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(288,274,356,'STOPFLAM',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(289,275,357,'HILL ROM SAS',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(290,276,358,'HARMONIE MUTUELLE-LAXOU NATIONAL',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(291,277,359,'MACIF MUTUALITE',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(292,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(293,NULL,NULL,'Open Group',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(294,NULL,NULL,'Sword SA',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(295,NULL,NULL,'Université',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(296,NULL,NULL,'Sopra/Steria ',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(297,NULL,NULL,'Cloud Temple/Netixia',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(298,NULL,NULL,'Acensi',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `etablissement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_personne` int(11) NOT NULL,
  `id_specialite` int(11) NOT NULL,
  `annee_etude` int(11) NOT NULL DEFAULT '1',
  `diplome` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 si diplomé, 0 autrement',
  `numero_etudiant` int(11) DEFAULT NULL,
  `mail_etudiant` varchar(100) DEFAULT NULL,
  `date_diplomation` date DEFAULT NULL,
  `id_startup` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`id_personne`),
  UNIQUE KEY `numeroEtudiant_UNIQUE` (`numero_etudiant`),
  KEY `fk_Etudiant_Startup1_idx` (`id_startup`),
  KEY `fk_Etudiant_Personne1_idx` (`id_personne`),
  KEY `fk_Etudiant_Specialite1_idx` (`id_specialite`),
  CONSTRAINT `fk_Etudiant_Personne1` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_Etudiant_Specialite1` FOREIGN KEY (`id_specialite`) REFERENCES `specialite` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Etudiant_Startup1` FOREIGN KEY (`id_startup`) REFERENCES `startup` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etudiant`
--

LOCK TABLES `etudiant` WRITE;
/*!40000 ALTER TABLE `etudiant` DISABLE KEYS */;
INSERT INTO `etudiant` VALUES (1,1,6,1,0,1,'jean.bon@etu.univ-mail.com',NULL,NULL),(2,2,7,1,0,2,'alain.deloin@etu.univ-mail.com',NULL,NULL),(3,3,8,1,0,3,'anne.honnyme@etu.univ-mail.com',NULL,NULL),(4,4,6,1,0,4,'sophie.fonfek@etu.univ-mail.com',NULL,NULL),(5,5,7,1,0,5,'claire.obskur@etu.univ-mail.com',NULL,NULL),(6,6,8,2,0,6,'jean.serien@etu.univ-mail.com',NULL,NULL),(7,7,6,2,0,7,'gerard.menvussa@etu.univ-mail.com',NULL,NULL),(8,8,7,2,0,8,'daisie.dratey@etu.univ-mail.com',NULL,NULL),(9,9,8,2,0,9,'agathe.zeblouse@etu.univ-mail.com',NULL,NULL),(10,10,6,2,0,10,'vincent.timaitre@etu.univ-mail.com',NULL,NULL),(11,11,1,3,0,11,'aicha.femalle@etu.univ-mail.com',NULL,NULL),(12,12,2,3,0,12,'alex.kuzbidon@etu.univ-mail.com',NULL,NULL),(13,13,3,3,0,13,'elie.coptair@etu.univ-mail.com',NULL,NULL),(14,14,4,3,0,14,'jesus.pairbien d\'ormi@etu.univ-mail.com',NULL,NULL),(15,15,5,3,0,15,'emma.tomme@etu.univ-mail.com',NULL,NULL),(16,16,1,4,0,16,'gilles.huminet@etu.univ-mail.com',NULL,NULL),(17,17,2,4,0,17,'guy.naisse@etu.univ-mail.com',NULL,NULL),(18,18,3,4,0,18,'alain.terrieur@etu.univ-mail.com',NULL,NULL),(19,19,4,4,0,19,'alex.terrieur@etu.univ-mail.com',NULL,NULL),(20,20,5,4,0,20,'helene.detroua@etu.univ-mail.com',NULL,NULL),(21,21,1,5,0,21,'jacques.sept@etu.univ-mail.com',NULL,NULL),(22,22,2,5,0,22,'jessica.scroute@etu.univ-mail.com',NULL,NULL),(23,23,3,5,0,23,'lara.clette@etu.univ-mail.com',NULL,NULL),(24,24,4,5,0,24,'korben.dallas@etu.univ-mail.com',NULL,NULL),(25,25,5,5,0,25,'leeloo.dallasmultipass@etu.univ-mail.com',NULL,NULL),(26,26,1,6,1,26,'line.explosible@etu.univ-mail.com','2017-09-30',NULL),(27,27,2,6,1,27,'marc.assain@etu.univ-mail.com','2017-09-30',NULL),(28,28,3,6,1,28,'paul.pauzission@etu.univ-mail.com','2016-09-30',NULL),(29,29,4,6,1,29,'quentin.turier@etu.univ-mail.com','2016-09-30',4),(30,30,5,6,1,30,'remi.fasollasido@etu.univ-mail.com','2015-09-30',5);
/*!40000 ALTER TABLE `etudiant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etudiant_participe_conseil`
--

DROP TABLE IF EXISTS `etudiant_participe_conseil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etudiant_participe_conseil` (
  `id_conseil_perfectionnement` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  `id_personne_etudiant` int(11) NOT NULL,
  PRIMARY KEY (`id_conseil_perfectionnement`,`id_etudiant`,`id_personne_etudiant`),
  KEY `fk_EtudiantParticipeConseil_Etudiant1_idx` (`id_personne_etudiant`,`id_etudiant`),
  CONSTRAINT `fk_EtudiantParticipeConseil_ConseilPerfectionnement1` FOREIGN KEY (`id_conseil_perfectionnement`) REFERENCES `conseil_perfectionnement` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_EtudiantParticipeConseil_Etudiant1` FOREIGN KEY (`id_personne_etudiant`, `id_etudiant`) REFERENCES `etudiant` (`id_personne`, `id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etudiant_participe_conseil`
--

LOCK TABLES `etudiant_participe_conseil` WRITE;
/*!40000 ALTER TABLE `etudiant_participe_conseil` DISABLE KEYS */;
INSERT INTO `etudiant_participe_conseil` VALUES (2,1,1),(2,2,2),(2,3,3),(6,11,11),(3,12,12),(4,13,13),(5,14,14),(7,15,15),(6,16,16),(3,17,17),(4,18,18),(5,19,19),(7,20,20),(6,21,21),(3,22,22),(4,23,23),(5,24,24),(7,25,25);
/*!40000 ALTER TABLE `etudiant_participe_conseil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum`
--

DROP TABLE IF EXISTS `forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_type_forum` int(11) DEFAULT NULL,
  `nom_forum` varchar(45) NOT NULL DEFAULT 'Inconnu',
  `date_debut_forum` datetime NOT NULL DEFAULT '1900-01-01 00:00:00',
  `date_fin_forum` datetime DEFAULT NULL,
  `commentaire_forum` varchar(255) DEFAULT NULL,
  `id_adresse` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Forum_TypeForum1_idx` (`id_type_forum`),
  KEY `fk_Forum_Adresse1_idx` (`id_adresse`),
  CONSTRAINT `fk_Forum_Adresse1` FOREIGN KEY (`id_adresse`) REFERENCES `adresse` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Forum_TypeForum1` FOREIGN KEY (`id_type_forum`) REFERENCES `type_forum` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum`
--

LOCK TABLES `forum` WRITE;
/*!40000 ALTER TABLE `forum` DISABLE KEYS */;
INSERT INTO `forum` VALUES (1,1,'Forum des entreprises 2017','2017-12-12 00:00:00','2017-12-12 00:00:00','hébergé au DI',169),(2,1,'Forum des entreprises 2018','2018-05-02 12:15:36','2018-05-02 12:15:36',NULL,169);
/*!40000 ALTER TABLE `forum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gratification`
--

DROP TABLE IF EXISTS `gratification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gratification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `montant_gratification` float NOT NULL DEFAULT '0',
  `unite_gratification` varchar(45) NOT NULL DEFAULT 'Brut' COMMENT 'BRUT / NET',
  `unite_duree_gratification` varchar(45) NOT NULL DEFAULT 'Mensuel' COMMENT 'HEURE, MOIS, etc.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gratification`
--

LOCK TABLES `gratification` WRITE;
/*!40000 ALTER TABLE `gratification` DISABLE KEYS */;
INSERT INTO `gratification` VALUES (1,3.75,'net','heure'),(2,52,'brut','heure'),(3,26.25,'net','jour'),(4,36.4,'brut','jour'),(5,131.25,'net','semaine'),(6,182,'brut','semaine'),(7,577.5,'net','mois'),(8,800.8,'brut','mois');
/*!40000 ALTER TABLE `gratification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `interruption_stage`
--

DROP TABLE IF EXISTS `interruption_stage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interruption_stage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_convention_stage` int(11) DEFAULT NULL,
  `date_debut_interruption` date NOT NULL DEFAULT '1900-01-01',
  `date_fin_interruption` date NOT NULL DEFAULT '1900-01-01',
  `commentaire_interruption` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_InterruptionStage_ConventionStage1_idx` (`id_convention_stage`),
  CONSTRAINT `FK_8738E74AC2AC37BD` FOREIGN KEY (`id_convention_stage`) REFERENCES `convention_stage` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interruption_stage`
--

LOCK TABLES `interruption_stage` WRITE;
/*!40000 ALTER TABLE `interruption_stage` DISABLE KEYS */;
INSERT INTO `interruption_stage` VALUES (1,2,'2017-07-17','2017-07-24','Fermeture temporaire'),(2,8,'2017-08-01','2017-08-08','Conges responsable'),(3,9,'2017-07-11','2017-08-11','Maladie prevue');
/*!40000 ALTER TABLE `interruption_stage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participation_forum`
--

DROP TABLE IF EXISTS `participation_forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participation_forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_forum` int(11) NOT NULL,
  `id_etablissement` int(11) NOT NULL COMMENT 'Etablissement représenté par le contact',
  `id_contact_etablissement` int(11) DEFAULT NULL,
  `id_personne_contact_etablissement` int(11) DEFAULT NULL,
  `recrute_stagiaire` varchar(255) DEFAULT NULL,
  `recrute_diplome` varchar(255) DEFAULT NULL,
  `recrute_apprentis` varchar(255) DEFAULT NULL,
  `niveaux_etudes_recherches` varchar(255) DEFAULT NULL,
  `filieres_recherchees` varchar(255) DEFAULT NULL,
  `commentaire_participation` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ParticipeForum_Forum1_idx` (`id_forum`),
  KEY `fk_ParticipationForum_Etablissement1_idx` (`id_etablissement`),
  KEY `fk_ParticipeForum_ContactEtablissement1` (`id_contact_etablissement`,`id_personne_contact_etablissement`),
  CONSTRAINT `fk_ParticipationForum_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ParticipeForum_ContactEtablissement1` FOREIGN KEY (`id_contact_etablissement`, `id_personne_contact_etablissement`) REFERENCES `contact_etablissement` (`id`, `id_personne`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_ParticipeForum_Forum1` FOREIGN KEY (`id_forum`) REFERENCES `forum` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participation_forum`
--

LOCK TABLES `participation_forum` WRITE;
/*!40000 ALTER TABLE `participation_forum` DISABLE KEYS */;
INSERT INTO `participation_forum` VALUES (1,1,1,1,51,'Stagiaire JEE, Stagiaire réseau aménagement','Ingénieur informatique',NULL,'4A, 5A','informatique, aménagement',NULL),(2,1,3,3,53,NULL,NULL,'DII, DAE','3A, 4A, 5A','Informatique, aménagement',NULL),(3,1,5,5,55,'Stagiaire C#, stagiaire énergétique','Ingénieur informatique, mécanique, énergétique',NULL,'4A, 5A','Informatique, mécanique, énergétique','Première participation'),(4,2,99,51,101,'','','','','',''),(5,2,100,52,102,'','','','','',''),(6,2,101,53,103,'','','','','',''),(7,2,102,54,104,'','','','','',''),(8,2,103,55,105,'','','','','',''),(9,2,104,56,106,'','','','','',''),(10,2,105,57,107,'','','','','',''),(11,2,106,58,108,'oui','oi','oui','BAC++','DI STMG','COMMENTAIRE'),(12,2,107,59,109,'','','','','',''),(13,2,29,61,111,'','','','','',''),(14,2,108,62,112,'','','','','',''),(15,2,109,63,113,'','','','','',''),(16,2,64,66,116,'','','','','',''),(17,2,110,67,117,'','','','','',''),(18,2,111,69,119,'','','','','',''),(19,2,112,70,120,'','','','','',''),(20,2,113,71,121,'','','','','',''),(21,2,114,72,122,'','','','','',''),(22,2,115,73,123,'','','','','',''),(23,2,116,74,124,'','','','','',''),(24,2,117,76,126,'','','','','',''),(25,2,118,77,127,'','','','','',''),(26,2,119,78,128,'','','','','',''),(27,2,120,80,130,'','','','','',''),(28,2,121,81,131,'','','','','',''),(29,2,122,82,132,'','','','','',''),(30,2,123,83,133,'','','','','',''),(31,2,124,84,134,'','','','','',''),(32,2,125,85,135,'','','','','',''),(33,2,126,86,136,'','','','','',''),(34,2,127,87,137,'','','','','',''),(35,2,128,88,138,'','','','','',''),(36,2,129,89,139,'','','','','',''),(37,2,130,90,140,'','','','','',''),(38,2,131,91,141,'','','','','',''),(39,2,132,92,142,'','','','','',''),(40,2,133,93,143,'','','','','',''),(41,2,134,94,144,'','','','','',''),(42,2,135,95,145,'','','','','',''),(43,2,136,96,146,'','','','','',''),(44,2,137,97,147,'','','','','',''),(45,2,138,98,148,'','','','','',''),(46,2,139,99,149,'','','','','',''),(47,2,140,100,150,'','','','','',''),(48,2,141,101,151,'','','','','',''),(49,2,142,102,152,'','','','','',''),(50,2,143,103,153,'','','','','',''),(51,2,144,104,154,'','','','','',''),(52,2,145,106,156,'','','','','',''),(53,2,146,107,157,'','','','','','');
/*!40000 ALTER TABLE `participation_forum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participe_conference`
--

DROP TABLE IF EXISTS `participe_conference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participe_conference` (
  `id_conference` int(11) NOT NULL,
  `id_contact_etablissement` int(11) NOT NULL,
  `id_personne_contact_etablissement` int(11) NOT NULL,
  PRIMARY KEY (`id_conference`,`id_contact_etablissement`,`id_personne_contact_etablissement`),
  KEY `fk_ParticipeConference_ContactEtablissement1_idx` (`id_contact_etablissement`,`id_personne_contact_etablissement`),
  CONSTRAINT `fk_ParticipeConference_Conference1` FOREIGN KEY (`id_conference`) REFERENCES `conference` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_ParticipeConference_ContactEtablissement1` FOREIGN KEY (`id_contact_etablissement`, `id_personne_contact_etablissement`) REFERENCES `contact_etablissement` (`id`, `id_personne`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participe_conference`
--

LOCK TABLES `participe_conference` WRITE;
/*!40000 ALTER TABLE `participe_conference` DISABLE KEYS */;
INSERT INTO `participe_conference` VALUES (3,14,64),(1,28,78),(2,32,82);
/*!40000 ALTER TABLE `participe_conference` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pays`
--

DROP TABLE IF EXISTS `pays`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(3) DEFAULT NULL,
  `alpha2` varchar(2) DEFAULT NULL,
  `alpha3` varchar(3) DEFAULT NULL,
  `nom_en_gb` varchar(45) DEFAULT NULL,
  `nom_fr_fr` varchar(45) NOT NULL DEFAULT 'Inconnu',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  UNIQUE KEY `alpha2_UNIQUE` (`alpha2`),
  UNIQUE KEY `alpha3_UNIQUE` (`alpha3`)
) ENGINE=InnoDB AUTO_INCREMENT=242 DEFAULT CHARSET=utf8 COMMENT='Issu de http://sql.sh/514-liste-pays-csv-xml Licence CC - 241 pays conformes à la norme ISO 3166-1';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pays`
--

LOCK TABLES `pays` WRITE;
/*!40000 ALTER TABLE `pays` DISABLE KEYS */;
INSERT INTO `pays` VALUES (1,4,'AF','AFG','Afghanistan','Afghanistan'),(2,8,'AL','ALB','Albania','Albanie'),(3,10,'AQ','ATA','Antarctica','Antarctique'),(4,12,'DZ','DZA','Algeria','Algérie'),(5,16,'AS','ASM','American Samoa','Samoa Américaines'),(6,20,'AD','AND','Andorra','Andorre'),(7,24,'AO','AGO','Angola','Angola'),(8,28,'AG','ATG','Antigua and Barbuda','Antigua-et-Barbuda'),(9,31,'AZ','AZE','Azerbaijan','Azerbaïdjan'),(10,32,'AR','ARG','Argentina','Argentine'),(11,36,'AU','AUS','Australia','Australie'),(12,40,'AT','AUT','Austria','Autriche'),(13,44,'BS','BHS','Bahamas','Bahamas'),(14,48,'BH','BHR','Bahrain','Bahreïn'),(15,50,'BD','BGD','Bangladesh','Bangladesh'),(16,51,'AM','ARM','Armenia','Arménie'),(17,52,'BB','BRB','Barbados','Barbade'),(18,56,'BE','BEL','Belgium','Belgique'),(19,60,'BM','BMU','Bermuda','Bermudes'),(20,64,'BT','BTN','Bhutan','Bhoutan'),(21,68,'BO','BOL','Bolivia','Bolivie'),(22,70,'BA','BIH','Bosnia and Herzegovina','Bosnie-Herzégovine'),(23,72,'BW','BWA','Botswana','Botswana'),(24,74,'BV','BVT','Bouvet Island','Île Bouvet'),(25,76,'BR','BRA','Brazil','Brésil'),(26,84,'BZ','BLZ','Belize','Belize'),(27,86,'IO','IOT','British Indian Ocean Territory','Territoire Britannique de l\'Océan Indien'),(28,90,'SB','SLB','Solomon Islands','Îles Salomon'),(29,92,'VG','VGB','British Virgin Islands','Îles Vierges Britanniques'),(30,96,'BN','BRN','Brunei Darussalam','Brunéi Darussalam'),(31,100,'BG','BGR','Bulgaria','Bulgarie'),(32,104,'MM','MMR','Myanmar','Myanmar'),(33,108,'BI','BDI','Burundi','Burundi'),(34,112,'BY','BLR','Belarus','Bélarus'),(35,116,'KH','KHM','Cambodia','Cambodge'),(36,120,'CM','CMR','Cameroon','Cameroun'),(37,124,'CA','CAN','Canada','Canada'),(38,132,'CV','CPV','Cape Verde','Cap-vert'),(39,136,'KY','CYM','Cayman Islands','Îles Caïmanes'),(40,140,'CF','CAF','Central African','République Centrafricaine'),(41,144,'LK','LKA','Sri Lanka','Sri Lanka'),(42,148,'TD','TCD','Chad','Tchad'),(43,152,'CL','CHL','Chile','Chili'),(44,156,'CN','CHN','China','Chine'),(45,158,'TW','TWN','Taiwan','Taïwan'),(46,162,'CX','CXR','Christmas Island','Île Christmas'),(47,166,'CC','CCK','Cocos (Keeling) Islands','Îles Cocos (Keeling)'),(48,170,'CO','COL','Colombia','Colombie'),(49,174,'KM','COM','Comoros','Comores'),(50,175,'YT','MYT','Mayotte','Mayotte'),(51,178,'CG','COG','Republic of the Congo','République du Congo'),(52,180,'CD','COD','The Democratic Republic Of The Congo','République Démocratique du Congo'),(53,184,'CK','COK','Cook Islands','Îles Cook'),(54,188,'CR','CRI','Costa Rica','Costa Rica'),(55,191,'HR','HRV','Croatia','Croatie'),(56,192,'CU','CUB','Cuba','Cuba'),(57,196,'CY','CYP','Cyprus','Chypre'),(58,203,'CZ','CZE','Czech Republic','République Tchèque'),(59,204,'BJ','BEN','Benin','Bénin'),(60,208,'DK','DNK','Denmark','Danemark'),(61,212,'DM','DMA','Dominica','Dominique'),(62,214,'DO','DOM','Dominican Republic','République Dominicaine'),(63,218,'EC','ECU','Ecuador','Équateur'),(64,222,'SV','SLV','El Salvador','El Salvador'),(65,226,'GQ','GNQ','Equatorial Guinea','Guinée Équatoriale'),(66,231,'ET','ETH','Ethiopia','Éthiopie'),(67,232,'ER','ERI','Eritrea','Érythrée'),(68,233,'EE','EST','Estonia','Estonie'),(69,234,'FO','FRO','Faroe Islands','Îles Féroé'),(70,238,'FK','FLK','Falkland Islands','Îles (malvinas) Falkland'),(71,239,'GS','SGS','South Georgia and the South Sandwich Islands','Géorgie du Sud et les Îles Sandwich du Sud'),(72,242,'FJ','FJI','Fiji','Fidji'),(73,246,'FI','FIN','Finland','Finlande'),(74,248,'AX','ALA','Åland Islands','Îles Åland'),(75,250,'FR','FRA','France','France'),(76,254,'GF','GUF','French Guiana','Guyane Française'),(77,258,'PF','PYF','French Polynesia','Polynésie Française'),(78,260,'TF','ATF','French Southern Territories','Terres Australes Françaises'),(79,262,'DJ','DJI','Djibouti','Djibouti'),(80,266,'GA','GAB','Gabon','Gabon'),(81,268,'GE','GEO','Georgia','Géorgie'),(82,270,'GM','GMB','Gambia','Gambie'),(83,275,'PS','PSE','Occupied Palestinian Territory','Territoire Palestinien Occupé'),(84,276,'DE','DEU','Germany','Allemagne'),(85,288,'GH','GHA','Ghana','Ghana'),(86,292,'GI','GIB','Gibraltar','Gibraltar'),(87,296,'KI','KIR','Kiribati','Kiribati'),(88,300,'GR','GRC','Greece','Grèce'),(89,304,'GL','GRL','Greenland','Groenland'),(90,308,'GD','GRD','Grenada','Grenade'),(91,312,'GP','GLP','Guadeloupe','Guadeloupe'),(92,316,'GU','GUM','Guam','Guam'),(93,320,'GT','GTM','Guatemala','Guatemala'),(94,324,'GN','GIN','Guinea','Guinée'),(95,328,'GY','GUY','Guyana','Guyana'),(96,332,'HT','HTI','Haiti','Haïti'),(97,334,'HM','HMD','Heard Island and McDonald Islands','Îles Heard et Mcdonald'),(98,336,'VA','VAT','Vatican City State','Saint-Siège (état de la Cité du Vatican)'),(99,340,'HN','HND','Honduras','Honduras'),(100,344,'HK','HKG','Hong Kong','Hong-Kong'),(101,348,'HU','HUN','Hungary','Hongrie'),(102,352,'IS','ISL','Iceland','Islande'),(103,356,'IN','IND','India','Inde'),(104,360,'ID','IDN','Indonesia','Indonésie'),(105,364,'IR','IRN','Islamic Republic of Iran','République Islamique d\'Iran'),(106,368,'IQ','IRQ','Iraq','Iraq'),(107,372,'IE','IRL','Ireland','Irlande'),(108,376,'IL','ISR','Israel','Israël'),(109,380,'IT','ITA','Italy','Italie'),(110,384,'CI','CIV','Côte d\'Ivoire','Côte d\'Ivoire'),(111,388,'JM','JAM','Jamaica','Jamaïque'),(112,392,'JP','JPN','Japan','Japon'),(113,398,'KZ','KAZ','Kazakhstan','Kazakhstan'),(114,400,'JO','JOR','Jordan','Jordanie'),(115,404,'KE','KEN','Kenya','Kenya'),(116,408,'KP','PRK','Democratic People\'s Republic of Korea','République Populaire Démocratique de Corée'),(117,410,'KR','KOR','Republic of Korea','République de Corée'),(118,414,'KW','KWT','Kuwait','Koweït'),(119,417,'KG','KGZ','Kyrgyzstan','Kirghizistan'),(120,418,'LA','LAO','Lao People\'s Democratic Republic','République Démocratique Populaire Lao'),(121,422,'LB','LBN','Lebanon','Liban'),(122,426,'LS','LSO','Lesotho','Lesotho'),(123,428,'LV','LVA','Latvia','Lettonie'),(124,430,'LR','LBR','Liberia','Libéria'),(125,434,'LY','LBY','Libyan Arab Jamahiriya','Jamahiriya Arabe Libyenne'),(126,438,'LI','LIE','Liechtenstein','Liechtenstein'),(127,440,'LT','LTU','Lithuania','Lituanie'),(128,442,'LU','LUX','Luxembourg','Luxembourg'),(129,446,'MO','MAC','Macao','Macao'),(130,450,'MG','MDG','Madagascar','Madagascar'),(131,454,'MW','MWI','Malawi','Malawi'),(132,458,'MY','MYS','Malaysia','Malaisie'),(133,462,'MV','MDV','Maldives','Maldives'),(134,466,'ML','MLI','Mali','Mali'),(135,470,'MT','MLT','Malta','Malte'),(136,474,'MQ','MTQ','Martinique','Martinique'),(137,478,'MR','MRT','Mauritania','Mauritanie'),(138,480,'MU','MUS','Mauritius','Maurice'),(139,484,'MX','MEX','Mexico','Mexique'),(140,492,'MC','MCO','Monaco','Monaco'),(141,496,'MN','MNG','Mongolia','Mongolie'),(142,498,'MD','MDA','Republic of Moldova','République de Moldova'),(143,500,'MS','MSR','Montserrat','Montserrat'),(144,504,'MA','MAR','Morocco','Maroc'),(145,508,'MZ','MOZ','Mozambique','Mozambique'),(146,512,'OM','OMN','Oman','Oman'),(147,516,'NA','NAM','Namibia','Namibie'),(148,520,'NR','NRU','Nauru','Nauru'),(149,524,'NP','NPL','Nepal','Népal'),(150,528,'NL','NLD','Netherlands','Pays-Bas'),(151,530,'AN','ANT','Netherlands Antilles','Antilles Néerlandaises'),(152,533,'AW','ABW','Aruba','Aruba'),(153,540,'NC','NCL','New Caledonia','Nouvelle-Calédonie'),(154,548,'VU','VUT','Vanuatu','Vanuatu'),(155,554,'NZ','NZL','New Zealand','Nouvelle-Zélande'),(156,558,'NI','NIC','Nicaragua','Nicaragua'),(157,562,'NE','NER','Niger','Niger'),(158,566,'NG','NGA','Nigeria','Nigéria'),(159,570,'NU','NIU','Niue','Niué'),(160,574,'NF','NFK','Norfolk Island','Île Norfolk'),(161,578,'NO','NOR','Norway','Norvège'),(162,580,'MP','MNP','Northern Mariana Islands','Îles Mariannes du Nord'),(163,581,'UM','UMI','United States Minor Outlying Islands','Îles Mineures Éloignées des États-Unis'),(164,583,'FM','FSM','Federated States of Micronesia','États Fédérés de Micronésie'),(165,584,'MH','MHL','Marshall Islands','Îles Marshall'),(166,585,'PW','PLW','Palau','Palaos'),(167,586,'PK','PAK','Pakistan','Pakistan'),(168,591,'PA','PAN','Panama','Panama'),(169,598,'PG','PNG','Papua New Guinea','Papouasie-Nouvelle-Guinée'),(170,600,'PY','PRY','Paraguay','Paraguay'),(171,604,'PE','PER','Peru','Pérou'),(172,608,'PH','PHL','Philippines','Philippines'),(173,612,'PN','PCN','Pitcairn','Pitcairn'),(174,616,'PL','POL','Poland','Pologne'),(175,620,'PT','PRT','Portugal','Portugal'),(176,624,'GW','GNB','Guinea-Bissau','Guinée-Bissau'),(177,626,'TL','TLS','Timor-Leste','Timor-Leste'),(178,630,'PR','PRI','Puerto Rico','Porto Rico'),(179,634,'QA','QAT','Qatar','Qatar'),(180,638,'RE','REU','Réunion','Réunion'),(181,642,'RO','ROU','Romania','Roumanie'),(182,643,'RU','RUS','Russian Federation','Fédération de Russie'),(183,646,'RW','RWA','Rwanda','Rwanda'),(184,654,'SH','SHN','Saint Helena','Sainte-Hélène'),(185,659,'KN','KNA','Saint Kitts and Nevis','Saint-Kitts-et-Nevis'),(186,660,'AI','AIA','Anguilla','Anguilla'),(187,662,'LC','LCA','Saint Lucia','Sainte-Lucie'),(188,666,'PM','SPM','Saint-Pierre and Miquelon','Saint-Pierre-et-Miquelon'),(189,670,'VC','VCT','Saint Vincent and the Grenadines','Saint-Vincent-et-les Grenadines'),(190,674,'SM','SMR','San Marino','Saint-Marin'),(191,678,'ST','STP','Sao Tome and Principe','Sao Tomé-et-Principe'),(192,682,'SA','SAU','Saudi Arabia','Arabie Saoudite'),(193,686,'SN','SEN','Senegal','Sénégal'),(194,690,'SC','SYC','Seychelles','Seychelles'),(195,694,'SL','SLE','Sierra Leone','Sierra Leone'),(196,702,'SG','SGP','Singapore','Singapour'),(197,703,'SK','SVK','Slovakia','Slovaquie'),(198,704,'VN','VNM','Vietnam','Viet Nam'),(199,705,'SI','SVN','Slovenia','Slovénie'),(200,706,'SO','SOM','Somalia','Somalie'),(201,710,'ZA','ZAF','South Africa','Afrique du Sud'),(202,716,'ZW','ZWE','Zimbabwe','Zimbabwe'),(203,724,'ES','ESP','Spain','Espagne'),(204,732,'EH','ESH','Western Sahara','Sahara Occidental'),(205,736,'SD','SDN','Sudan','Soudan'),(206,740,'SR','SUR','Suriname','Suriname'),(207,744,'SJ','SJM','Svalbard and Jan Mayen','Svalbard etÎle Jan Mayen'),(208,748,'SZ','SWZ','Swaziland','Swaziland'),(209,752,'SE','SWE','Sweden','Suède'),(210,756,'CH','CHE','Switzerland','Suisse'),(211,760,'SY','SYR','Syrian Arab Republic','République Arabe Syrienne'),(212,762,'TJ','TJK','Tajikistan','Tadjikistan'),(213,764,'TH','THA','Thailand','Thaïlande'),(214,768,'TG','TGO','Togo','Togo'),(215,772,'TK','TKL','Tokelau','Tokelau'),(216,776,'TO','TON','Tonga','Tonga'),(217,780,'TT','TTO','Trinidad and Tobago','Trinité-et-Tobago'),(218,784,'AE','ARE','United Arab Emirates','Émirats Arabes Unis'),(219,788,'TN','TUN','Tunisia','Tunisie'),(220,792,'TR','TUR','Turkey','Turquie'),(221,795,'TM','TKM','Turkmenistan','Turkménistan'),(222,796,'TC','TCA','Turks and Caicos Islands','Îles Turks et Caïques'),(223,798,'TV','TUV','Tuvalu','Tuvalu'),(224,800,'UG','UGA','Uganda','Ouganda'),(225,804,'UA','UKR','Ukraine','Ukraine'),(226,807,'MK','MKD','The Former Yugoslav Republic of Macedonia','L\'ex-République Yougoslave de Macédoine'),(227,818,'EG','EGY','Egypt','Égypte'),(228,826,'GB','GBR','United Kingdom','Royaume-Uni'),(229,833,'IM','IMN','Isle of Man','Île de Man'),(230,834,'TZ','TZA','United Republic Of Tanzania','République-Unie de Tanzanie'),(231,840,'US','USA','United States','États-Unis'),(232,850,'VI','VIR','U.S. Virgin Islands','Îles Vierges des États-Unis'),(233,854,'BF','BFA','Burkina Faso','Burkina Faso'),(234,858,'UY','URY','Uruguay','Uruguay'),(235,860,'UZ','UZB','Uzbekistan','Ouzbékistan'),(236,862,'VE','VEN','Venezuela','Venezuela'),(237,876,'WF','WLF','Wallis and Futuna','Wallis et Futuna'),(238,882,'WS','WSM','Samoa','Samoa'),(239,887,'YE','YEM','Yemen','Yémen'),(240,891,'CS','SCG','Serbia and Montenegro','Serbie-et-Monténégro'),(241,894,'ZM','ZMB','Zambia','Zambie');
/*!40000 ALTER TABLE `pays` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personne`
--

DROP TABLE IF EXISTS `personne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL DEFAULT 'Nom',
  `prenom` varchar(45) NOT NULL DEFAULT 'Prénom',
  `adresse_mail_perso` varchar(100) DEFAULT NULL,
  `code_sexe` varchar(1) DEFAULT NULL COMMENT 'M, F, etc.',
  `date_naissance` date DEFAULT NULL,
  `nationalite` varchar(100) DEFAULT NULL,
  `id_adresse` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Personne_Adresse1_idx` (`id_adresse`),
  CONSTRAINT `fk_Personne_Adresse1` FOREIGN KEY (`id_adresse`) REFERENCES `adresse` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personne`
--

LOCK TABLES `personne` WRITE;
/*!40000 ALTER TABLE `personne` DISABLE KEYS */;
INSERT INTO `personne` VALUES (1,'Bon','Jean','jean.bon@mail.com','M',NULL,'Française',1),(2,'Deloin','Alain','alain.deloin@mail.com','M',NULL,'Française',2),(3,'Honnyme','Anne','anne.honnyme@mail.com','F',NULL,'Française',3),(4,'Fonfek','Sophie','sophie.fonfek@mail.com','F',NULL,'Française',4),(5,'Obskur','Claire','claire.obskur@mail.com','F',NULL,'Allemande',5),(6,'Sérien','Jean','jean.serien@mail.com','M',NULL,'Française',6),(7,'Menvussa','Gérard','gerard.menvussa@mail.com','M',NULL,'Française',7),(8,'Dratey','Daisie','daisie.dratey@mail.com','F',NULL,'Française',8),(9,'Zeblouse','Agathe','agathe.zeblouse@mail.com','F',NULL,'Française',9),(10,'Timaître','Vincent','vincent.timaitre@mail.com','M',NULL,'Française',10),(11,'Fémalle','Aïcha','aicha.femalle@mail.com','F',NULL,'Française',11),(12,'Kuzbidon','Alex','alex.kuzbidon@mail.com','M',NULL,'Egyptienne',12),(13,'Coptair','Elie','elie.coptair@mail.com','M',NULL,'Française',13),(14,'Pairbien D\'ormi','Jésus','jesus.pairbien d\'ormi@mail.com','M',NULL,'Française',14),(15,'Tomme','Emma','emma.tomme@mail.com','F',NULL,'Espagnole',15),(16,'Huminet','Gilles','gilles.huminet@mail.com','M',NULL,'Française',16),(17,'Naisse','Guy','guy.naisse@mail.com','M',NULL,'Française',17),(18,'Terrieur','Alain','alain.terrieur@mail.com','M',NULL,'Française',18),(19,'Terrieur','Alex','alex.terrieur@mail.com','M',NULL,'Française',18),(20,'Detroua','Hélène','helene.detroua@mail.com','F',NULL,'Grecque',1),(21,'Sept','Jacques','jacques.sept@mail.com','M',NULL,'Française',19),(22,'Scroute','Jessica','jessica.scroute@mail.com','F',NULL,'Française',4),(23,'Clette','Lara','lara.clette@mail.com','F',NULL,'Française',20),(24,'Dallas','Korben','korben.dallas@mail.com','M',NULL,'Américaine',21),(25,'Dallasmultipass','Leeloo','leeloo.dallasmultipass@mail.com','F',NULL,'Islandaise',21),(26,'Explosible','Line','line.explosible@mail.com','F',NULL,'Chinoise',22),(27,'Assain','Marc','marc.assain@mail.com','M',NULL,'Française',23),(28,'Pauzission','Paul','paul.pauzission@mail.com','M',NULL,'Française',24),(29,'Turier','Quentin','quentin.turier@mail.com','M',NULL,'Française',25),(30,'Fasollasido','Rémi','remi.fasollasido@mail.com','M',NULL,'Française',26),(31,'Rgeu','Sacha','sacha.rgeu@mail.com','F',NULL,'Française',18),(32,'Agasse','Sam','sam.agasse@mail.com','M',NULL,'Néo-Zélandaise',27),(33,'Onsseugélolli','Sandra','sandra.onsseugelolli@mail.com','F',NULL,'Française',28),(34,'DeSavoie','Tom','tom.desavoie@mail.com','M',NULL,'Française',29),(35,'Pavu','Xavier','xavier.pavu@mail.com','M',NULL,'Française',30),(36,'Doe','John','john.doe@mail.com','M',NULL,'Française',31),(37,'Bienheu','Emma','emma.bienheu@mail.com','F',NULL,'Française',32),(38,'Dupont','Jean','jean.dupont@mail.com','M',NULL,'Française',33),(39,'Lambda','Alex','alex.lambda@mail.com','F',NULL,'Française',34),(40,'Toapa','Eugène','eugene.toapa@mail.com','M',NULL,'Française',35),(41,'Tation','Félicie','felicie.tation@mail.com','F',NULL,'Française',36),(42,'Lambada','Adrien','adrien.lambada@mail.com','M',NULL,'Portugaise',37),(43,'Bernard','Lucie','lucie.bernard@mail.com','F',NULL,'Française',38),(44,'DuLac','Loïc','loic.dulac@mail.com','M',NULL,'Française',39),(45,'LePetit','Nicolas','nicolas.lepetit@mail.com','M',NULL,'Française',39),(46,'Robert','Salomé','salome.robert@mail.com','F',NULL,'Française',40),(47,'Grand','Albain','albain.grand@mail.com','M',NULL,'Française',41),(48,'Dutronc','Juliette','juliette.dutronc@mail.com','F',NULL,'Française',42),(49,'Mytrille','Julien','julien.mytrille@mail.com','M',NULL,'Française',43),(50,'Feuillu','Clémence','clemence.feuillu@mail.com','F',NULL,'Française',44),(51,'Ali','Ibrahim','ibrahim.ali@mail.com','M',NULL,'Française',45),(52,'LeSure','Emmanuelle','emmanuelle.lesure@mail.com','F',NULL,'Française',46),(53,'Voisclair','Thomas','thomas.voisclair@mail.com','M',NULL,'Française',47),(54,'Dubois','Christine','christine.dubois@mail.com','F',NULL,'Française',48),(55,'Poulou','Christophe','christophe.poulou@mail.com','M',NULL,'Française',49),(56,'Clavier','Flora','flora.clavier@mail.com','F',NULL,'Française',44),(57,'Poignée','Antoine','antoine.poignee@mail.com','M',NULL,'Française',18),(58,'Decamp','Aurélie','aurelie.decamp@mail.com','F',NULL,'Française',45),(59,'Duflow','Maxence','maxence.duflow@mail.com','M',NULL,'Française',45),(60,'Sure','Sarah','sarah.sure@mail.com','F',NULL,'Française',46),(61,'Tomme','Olivier','olivier.tomme@mail.com','M',NULL,'Française',47),(62,'Courage','Emmanuel','emmanuel.courage@mail.com','F',NULL,'Française',48),(63,'Deflux','Laurène','laurene.deflux@mail.com','M',NULL,'Française',49),(64,'Ralou','Gégoire','gegoire.ralou@mail.com','F',NULL,'Française',50),(65,'Alexandrie','Alexandra','alexandra.alexandrie@mail.com','M',NULL,'Française',50),(66,'Jean','Kévin','kevin.jean@mail.com','F',NULL,'Française',50),(67,'Grant','Caroline','caroline.grant@mail.com','M',NULL,'Française',51),(68,'Iman','Alexath','alexath.iman@mail.com','F',NULL,'Française',52),(69,'Pote','Paul','paul.pote@mail.com','M',NULL,'Française',53),(70,'Labatte','Lucile','lucile.labatte@mail.com','F',NULL,'Française',54),(71,'Li','Qi','qi.li@mail.com','M',NULL,'Française',55),(72,'Duro','Ahmed','ahmed.duro@mail.com','F',NULL,'Française',55),(73,'Proust','Madeleine','madeleine.proust@mail.com','M',NULL,'Française',55),(74,'Fraise','Charlotte','charlotte.fraise@mail.com','F',NULL,'Française',55),(75,'Frag','Baptiste','baptiste.frag@mail.com','M',NULL,'Française',55),(76,'Lane','Romane','romane.lane@mail.com','F',NULL,'Française',55),(77,'Reuloup','Romain','romain.reuloup@mail.com','M',NULL,'Française',55),(78,'Rousso','Denise','denise.rousso@mail.com','F',NULL,'Française',55),(79,'Gassur','Samuel','samuel.gassur@mail.com','M',NULL,'Française',56),(80,'LeBlanc','Gandalf','gandalf.leblanc@mail.com','F',NULL,'Française',57),(81,'Nard','Bernard','bernard.nard@mail.com','M',NULL,'Française',58),(82,'Si','Meï','mei.si@mail.com','F',NULL,'Chinoise',58),(83,'Lebo','William','william.lebo@mail.com','M',NULL,'Française',59),(84,'Osscourt','Jeanne','jeanne.osscourt@mail.com','F',NULL,'Française',60),(85,'Bao','Bill','bill.bao@mail.com','M',NULL,'Française',47),(86,'Skaïoualcoeur','Annie','annie.skaioualcoeur@mail.com','F',NULL,'Française',49),(87,'Heure','Christophe','christophe.heure@mail.com','M',NULL,'Française',60),(88,'Petit','Amélie','amelie.petit@mail.com','F',NULL,'Française',61),(89,'DuBeurre','Herbert','herbert.dubeurre@mail.com','M',NULL,'Française',62),(90,'Illusion','Justine','justine.illusion@mail.com','F',NULL,'Française',63),(91,'Tiritiri','Thierry','thierry.tiritiri@mail.com','M',NULL,'Française',63),(92,'Dineaudangé','Ambre','ambre.dineaudange@mail.com','F',NULL,'Française',64),(93,'Ah','Denis','denis.ah@mail.com','M',NULL,'Française',65),(94,'Dit','Mathilde','mathilde.dit@mail.com','F',NULL,'Française',66),(95,'Lent','Alexis','alexis.lent@mail.com','M',NULL,'Française',67),(96,'Scieuse','Judith','judith.scieuse@mail.com','F',NULL,'Française',66),(97,'Kenobi','Obiwan','obiwan.kenobi@mail.com','M',NULL,'Française',68),(98,'Deuuu','Elisabeth','elisabeth.deuuu@mail.com','F',NULL,'Anglaise',69),(99,'Népudimagination','Jean','jean.nepudimagination@mail.com','M',NULL,'Française',70),(100,'Pasfésonboulo','Anna','anna.pasfesonboulo@mail.com','F',NULL,'Française',70),(101,'Ruciak','Marion',NULL,NULL,NULL,NULL,NULL),(102,'Denis','Christine',NULL,NULL,NULL,NULL,NULL),(103,'Delgado','Fernando',NULL,NULL,NULL,NULL,NULL),(104,'Malgogne','Sarah',NULL,NULL,NULL,NULL,NULL),(105,'Padiolleau','Maxime',NULL,NULL,NULL,NULL,NULL),(106,'Heritier','Béatrice',NULL,NULL,NULL,NULL,NULL),(107,'Ropion','Sandra',NULL,NULL,NULL,NULL,NULL),(108,'Dezecot','Christopher',NULL,NULL,NULL,NULL,NULL),(109,'Santos','Carmen Imelda',NULL,NULL,NULL,NULL,NULL),(110,'Giraudeau','Cyril',NULL,NULL,NULL,NULL,NULL),(111,'Lachaud','Marine',NULL,NULL,NULL,NULL,NULL),(112,'Michon','Gaëlle',NULL,NULL,NULL,NULL,NULL),(113,'Umbricht','Caroline',NULL,NULL,NULL,NULL,NULL),(114,'Vaquier De Labaume','Myriam',NULL,NULL,NULL,NULL,NULL),(115,'Rondeau','Chloé',NULL,NULL,NULL,NULL,NULL),(116,'Remay','Dimtri',NULL,NULL,NULL,NULL,NULL),(117,'Jabbour','Marie-Evelyne',NULL,NULL,NULL,NULL,NULL),(118,'Binet','Gregoire',NULL,NULL,NULL,NULL,NULL),(119,'Heurtaux','Loick',NULL,NULL,NULL,NULL,NULL),(120,'Fremont','Olivier',NULL,NULL,NULL,NULL,NULL),(121,'Trinquart','Jean-Gilles',NULL,NULL,NULL,NULL,NULL),(122,'Leguédois','Frédéric',NULL,NULL,NULL,NULL,NULL),(123,'Cuzon','Marina',NULL,NULL,NULL,NULL,NULL),(124,'Aubert','Alexandre',NULL,NULL,NULL,NULL,NULL),(125,'Benoist','Cécile',NULL,NULL,NULL,NULL,NULL),(126,'Allée','Benjamin',NULL,NULL,NULL,NULL,NULL),(127,'Gouvazé','Karine',NULL,NULL,NULL,NULL,NULL),(128,'Le Diouron','Amélie',NULL,NULL,NULL,NULL,NULL),(129,'Berlizon','Carole',NULL,NULL,NULL,NULL,NULL),(130,'Lambert','Elodie',NULL,NULL,NULL,NULL,NULL),(131,'Thomas','Stéphanie',NULL,NULL,NULL,NULL,NULL),(132,'Cloarec','Erwann',NULL,NULL,NULL,NULL,NULL),(133,'Benoit','Fabien',NULL,NULL,NULL,NULL,NULL),(134,'Belchior','Fanny',NULL,NULL,NULL,NULL,NULL),(135,'Grandry','Florence',NULL,NULL,NULL,NULL,NULL),(136,'Papillon','Julien',NULL,NULL,NULL,NULL,NULL),(137,'Hirtz','Christine',NULL,NULL,NULL,NULL,NULL),(138,'Gallois','Julien',NULL,NULL,NULL,NULL,NULL),(139,'Barjavel','Jenny',NULL,NULL,NULL,NULL,NULL),(140,'Steltzlen','Charles',NULL,NULL,NULL,NULL,NULL),(141,'Piera-Colin','Florence',NULL,NULL,NULL,NULL,NULL),(142,'Gaborit','Xavier',NULL,NULL,NULL,NULL,NULL),(143,'Longieras','Nicolas',NULL,NULL,NULL,NULL,NULL),(144,'Renoux','Caroline',NULL,NULL,NULL,NULL,NULL),(145,'Baudron','Christophe',NULL,NULL,NULL,NULL,NULL),(146,'Alix','Natacha',NULL,NULL,NULL,NULL,NULL),(147,'Jennervein','Nadine',NULL,NULL,NULL,NULL,NULL),(148,'Moreto','Laurent',NULL,NULL,NULL,NULL,NULL),(149,'Moreira','Isabelle',NULL,NULL,NULL,NULL,NULL),(150,'Francou Frigola','Brigitte',NULL,NULL,NULL,NULL,NULL),(151,'Sellier','Berthille',NULL,NULL,NULL,NULL,NULL),(152,'Autale','Raphael',NULL,NULL,NULL,NULL,NULL),(153,'Fauconnet','Sophie',NULL,NULL,NULL,NULL,NULL),(154,'Bouttier','Meggie',NULL,NULL,NULL,NULL,NULL),(155,'Laudiere','Tiphaine',NULL,NULL,NULL,NULL,NULL),(156,'Amri','Chérifa',NULL,NULL,NULL,NULL,NULL),(157,'Prelorenzo','Alain',NULL,NULL,NULL,NULL,NULL),(158,'A Bouland, Messan Chakpali','Prénom',NULL,NULL,NULL,NULL,NULL),(159,'A Bouland','Prénom',NULL,NULL,NULL,NULL,NULL),(160,'A Puret','Prénom',NULL,NULL,NULL,NULL,NULL),(161,'F Paulin','Prénom',NULL,NULL,NULL,NULL,NULL),(162,'','Prénom',NULL,NULL,NULL,NULL,NULL),(163,'Bouland','A',NULL,NULL,NULL,NULL,NULL),(164,'Chakpali','Messan',NULL,NULL,NULL,NULL,NULL),(165,'Puret','A',NULL,NULL,NULL,NULL,NULL),(166,'Paulin','F',NULL,NULL,NULL,NULL,NULL),(167,'Komonski','Emmanuelle',NULL,NULL,NULL,NULL,NULL),(168,'Girardeau','Sebastien',NULL,NULL,NULL,NULL,NULL),(169,'moi-même','Prénom',NULL,NULL,NULL,NULL,NULL),(170,'Gilbon','Ludovic',NULL,NULL,NULL,NULL,NULL),(171,'MOKHTARI','Amine',NULL,NULL,NULL,NULL,NULL),(172,'Boutier','Meggie',NULL,NULL,NULL,NULL,NULL),(173,'Klu','Amen',NULL,NULL,NULL,NULL,NULL),(174,'Charier','Rémy',NULL,NULL,NULL,NULL,NULL),(175,'Semestre','2nd',NULL,NULL,NULL,NULL,NULL),(176,'Lebon','Prénom',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `personne` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personnel_participe_conseil`
--

DROP TABLE IF EXISTS `personnel_participe_conseil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personnel_participe_conseil` (
  `id_conseil_perfectionnement` int(11) NOT NULL,
  `id_personnel_polytech` int(11) NOT NULL,
  `id_personne_personnel_polytech` int(11) NOT NULL,
  PRIMARY KEY (`id_conseil_perfectionnement`,`id_personnel_polytech`,`id_personne_personnel_polytech`),
  KEY `fk_PersonnelParticipeConseil_PersonnelPolytech1_idx` (`id_personne_personnel_polytech`,`id_personnel_polytech`),
  CONSTRAINT `fk_PersonnelParticipeConseil_ConseilPerfectionnement1` FOREIGN KEY (`id_conseil_perfectionnement`) REFERENCES `conseil_perfectionnement` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_PersonnelParticipeConseil_PersonnelPolytech1` FOREIGN KEY (`id_personne_personnel_polytech`, `id_personnel_polytech`) REFERENCES `personnel_polytech` (`id_personne`, `id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personnel_participe_conseil`
--

LOCK TABLES `personnel_participe_conseil` WRITE;
/*!40000 ALTER TABLE `personnel_participe_conseil` DISABLE KEYS */;
INSERT INTO `personnel_participe_conseil` VALUES (1,1,31),(1,2,32),(2,3,33),(2,4,34),(3,6,36),(3,7,37),(4,9,39),(4,10,40),(5,12,42),(5,13,43),(6,15,45),(6,16,46),(7,18,48),(7,19,49);
/*!40000 ALTER TABLE `personnel_participe_conseil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personnel_polytech`
--

DROP TABLE IF EXISTS `personnel_polytech`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personnel_polytech` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_personne` int(11) NOT NULL,
  `id_departement` int(11) NOT NULL,
  `fonction` varchar(255) NOT NULL DEFAULT 'Personnel Polytech',
  `mail_universitaire` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`,`id_personne`),
  KEY `fk_PersonnelPolytech_Personne1_idx` (`id_personne`),
  KEY `fk_PersonnelPolytech_Departement1_idx` (`id_departement`),
  CONSTRAINT `fk_PersonnelPolytech_Departement1` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personnel_polytech`
--

LOCK TABLES `personnel_polytech` WRITE;
/*!40000 ALTER TABLE `personnel_polytech` DISABLE KEYS */;
INSERT INTO `personnel_polytech` VALUES (1,31,1,'Enseignant chercheur','sacha.rgeu@univ-mail.com'),(2,32,1,'Secrétaire','sam.agasse@univ-mail.com'),(3,33,2,'Responsable département','sandra.onsseugelolli@univ-mail.com'),(4,34,2,'Enseignant chercheur','tom.desavoie@univ-mail.com'),(5,35,2,'Secrétaire','xavier.pavu@univ-mail.com'),(6,36,3,'Responsable département','john.doe@univ-mail.com'),(7,37,3,'Enseignant chercheur','emma.bienheu@univ-mail.com'),(8,38,3,'Secrétaire','jean.dupont@univ-mail.com'),(9,39,4,'Responsable département','alex.lambda@univ-mail.com'),(10,40,4,'Enseignant chercheur','eugene.toapa@univ-mail.com'),(11,41,4,'Secrétaire','felicie.tation@univ-mail.com'),(12,42,5,'Responsable département','adrien.lambada@univ-mail.com'),(13,43,5,'Enseignant chercheur','lucie.bernard@univ-mail.com'),(14,44,5,'Secrétaire','loic.dulac@univ-mail.com'),(15,45,6,'Responsable département','nicolas.lepetit@univ-mail.com'),(16,46,6,'Enseignant chercheur','salome.robert@univ-mail.com'),(17,47,6,'Secrétaire','albain.grand@univ-mail.com'),(18,48,7,'Responsable département','juliette.dutronc@univ-mail.com'),(19,49,7,'Enseignant chercheur','julien.mytrille@univ-mail.com'),(20,50,7,'Secrétaire','clemence.feuillu@univ-mail.com');
/*!40000 ALTER TABLE `personnel_polytech` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `possede_telephone`
--

DROP TABLE IF EXISTS `possede_telephone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `possede_telephone` (
  `id_personne` int(11) NOT NULL,
  `id_telephone` int(11) NOT NULL,
  PRIMARY KEY (`id_personne`,`id_telephone`),
  KEY `fk_PossedeTelephone_Telephone1_idx` (`id_telephone`),
  CONSTRAINT `fk_PossedeTelephone_Personne` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_PossedeTelephone_Telephone1` FOREIGN KEY (`id_telephone`) REFERENCES `telephone` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `possede_telephone`
--

LOCK TABLES `possede_telephone` WRITE;
/*!40000 ALTER TABLE `possede_telephone` DISABLE KEYS */;
INSERT INTO `possede_telephone` VALUES (1,1),(2,2),(3,3),(4,4),(5,5),(6,6),(7,7),(8,8),(9,9),(10,10),(11,11),(12,12),(13,13),(14,14),(15,15),(16,16),(17,17),(18,18),(19,19),(20,20),(21,21),(22,22),(23,23),(24,24),(25,25),(26,26),(27,27),(28,28),(29,29),(30,30),(31,31),(32,32),(33,33),(34,34),(35,35),(36,36),(37,37),(38,38),(39,39),(40,40),(41,41),(42,42),(43,43),(44,44),(45,45),(46,46),(47,47),(48,48),(49,49),(50,50),(51,51),(52,52),(53,53),(54,54),(55,55),(56,56),(57,57),(58,58),(59,59),(60,60),(61,61),(62,62),(63,63),(64,64),(65,65),(66,66),(67,67),(68,68),(69,69),(70,70),(71,71),(72,72),(73,73),(74,74),(75,75),(76,76),(77,77),(78,78),(79,79),(80,80),(81,81),(82,82),(83,83),(84,84),(85,85),(86,86),(87,87),(88,88),(89,89),(90,90),(91,91),(92,92),(93,93),(94,94),(95,95),(96,96),(97,97),(98,98),(99,99),(100,100),(1,101),(2,102),(3,103),(4,104),(5,105),(6,106),(7,107),(8,108),(9,109),(10,110),(11,111),(12,112),(13,113),(14,114),(15,115),(16,116),(17,117),(18,118),(19,119),(20,120),(21,121),(22,122),(23,123),(24,124),(25,125),(26,126),(27,127),(28,128),(29,129),(30,130),(31,131),(32,132),(33,133),(34,134),(35,135),(36,136),(37,137),(38,138),(39,139),(40,140),(41,141),(42,142),(43,143),(44,144),(45,145),(46,146),(47,147),(48,148),(49,149),(50,150),(51,151),(52,152),(53,153),(54,154),(55,155),(56,156),(57,157),(58,158),(59,159),(60,160),(61,161),(62,162),(63,163),(64,164),(65,165),(66,166),(67,167),(68,168),(69,169),(70,170),(71,171),(72,172),(73,173),(74,174),(75,175),(76,176),(77,177),(78,178),(79,179),(80,180),(81,181),(82,182),(83,183),(84,184),(85,185),(86,186),(87,187),(88,188),(89,189),(90,190),(91,191),(92,192),(93,193),(94,194),(95,195),(96,196),(97,197),(98,198),(99,199),(100,200),(101,201),(102,201),(103,202),(104,203),(105,204),(106,205),(107,206),(108,207),(109,208),(110,208),(111,209),(112,210),(113,211),(114,212),(115,213),(116,213),(117,214),(118,214),(119,215),(120,216),(121,217),(122,218),(123,219),(124,219),(125,220),(126,221),(127,222),(128,223),(129,224),(130,225),(131,226),(132,227),(133,228),(134,229),(135,230),(136,231),(137,232),(138,233),(139,234),(140,235),(141,236),(142,237),(143,238),(144,239),(145,240),(146,241),(147,242),(148,243),(149,244),(150,245),(151,246),(152,247),(153,248),(154,249),(155,250),(156,251),(157,252);
/*!40000 ALTER TABLE `possede_telephone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projet_pedagogique`
--

DROP TABLE IF EXISTS `projet_pedagogique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projet_pedagogique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_etablissement` int(11) NOT NULL,
  `date_debut_projet` date NOT NULL DEFAULT '1900-01-01',
  `intitule_projet` varchar(255) NOT NULL DEFAULT 'Projet pédagogique',
  `details_projet` text,
  `montant_alloue` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ProjetPedagogique_Etablissement1_idx` (`id_etablissement`),
  CONSTRAINT `fk_ProjetPedagogique_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projet_pedagogique`
--

LOCK TABLES `projet_pedagogique` WRITE;
/*!40000 ALTER TABLE `projet_pedagogique` DISABLE KEYS */;
INSERT INTO `projet_pedagogique` VALUES (1,1,'2018-01-01','Projet pédagogique 1','Projet 1',500),(2,2,'2018-01-01','Projet pédagogique 2','Projet 2',400),(3,3,'2018-01-01','Projet pédagogique 3','Projet 3',600),(4,4,'2018-01-01','Projet pédagogique 4','Projet 4',390),(5,5,'2018-01-01','Projet pédagogique 5','Projet 5',450),(6,6,'2018-01-01','Projet pédagogique 6','Projet 6',550),(7,7,'2018-01-01','Projet pédagogique 7','Projet 7',620),(8,8,'2018-01-01','Projet pédagogique 8','Projet 8',601),(9,9,'2018-01-01','Projet pédagogique 9','Projet 9',500),(10,10,'2018-01-01','Projet pédagogique 10','Projet 10',420);
/*!40000 ALTER TABLE `projet_pedagogique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rencontre_contact`
--

DROP TABLE IF EXISTS `rencontre_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rencontre_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_adresse` int(11) NOT NULL,
  `id_contact_etablissement` int(11) NOT NULL,
  `id_personne_contact_etablissement` int(11) NOT NULL,
  `id_personnel_polytech` int(11) DEFAULT NULL,
  `id_personne_personnel_polytech` int(11) DEFAULT NULL,
  `date_rencontre` date NOT NULL DEFAULT '1900-01-01',
  `date_rdv_telephonique` date DEFAULT NULL,
  `sujet` varchar(255) DEFAULT NULL,
  `suite` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Rencontre_Adresse1_idx` (`id_adresse`),
  KEY `fk_Rencontre_ContactEtablissement1_idx` (`id_contact_etablissement`,`id_personne_contact_etablissement`),
  KEY `fk_Rencontre_PersonnelPolytech1_idx` (`id_personnel_polytech`,`id_personne_personnel_polytech`),
  CONSTRAINT `fk_Rencontre_Adresse1` FOREIGN KEY (`id_adresse`) REFERENCES `adresse` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Rencontre_ContactEtablissement1` FOREIGN KEY (`id_contact_etablissement`, `id_personne_contact_etablissement`) REFERENCES `contact_etablissement` (`id`, `id_personne`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Rencontre_PersonnelPolytech1` FOREIGN KEY (`id_personnel_polytech`, `id_personne_personnel_polytech`) REFERENCES `personnel_polytech` (`id`, `id_personne`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rencontre_contact`
--

LOCK TABLES `rencontre_contact` WRITE;
/*!40000 ALTER TABLE `rencontre_contact` DISABLE KEYS */;
INSERT INTO `rencontre_contact` VALUES (1,158,2,52,9,39,'2018-03-01','2018-02-10','Mise en place projet pédagogique','Nouveau projet pédagogique DI4 pour 2019'),(2,76,7,57,16,46,'2017-10-01','2017-09-25','Partenariat pour CIFRE','2 étudiants en CIFRE pour 2018-2019'),(3,120,22,72,20,50,'2018-05-01',NULL,'Retour d\'expérience apprentissage',NULL),(4,103,18,68,9,39,'2018-04-01','2018-03-15','Vacation pour cours de recherche opérationnelle S7 DI','Acceptation pour S7 2018');
/*!40000 ALTER TABLE `rencontre_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_accueil`
--

DROP TABLE IF EXISTS `service_accueil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_accueil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_etablissement` int(11) NOT NULL,
  `nom_service` varchar(100) NOT NULL DEFAULT 'Service d''accueil',
  PRIMARY KEY (`id`),
  KEY `fk_ServiceAccueil_Etablissement1_idx` (`id_etablissement`),
  CONSTRAINT `fk_ServiceAccueil_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_accueil`
--

LOCK TABLES `service_accueil` WRITE;
/*!40000 ALTER TABLE `service_accueil` DISABLE KEYS */;
INSERT INTO `service_accueil` VALUES (1,1,'informatique'),(2,5,'administration'),(3,10,'atelier'),(4,15,'informatique'),(5,20,'comptabilite'),(6,25,'administration'),(7,30,'general'),(8,35,'atelier'),(9,40,'informatique');
/*!40000 ALTER TABLE `service_accueil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specialite`
--

DROP TABLE IF EXISTS `specialite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specialite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_departement` int(11) NOT NULL,
  `libelle_specialite` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `libelleSpecialite_UNIQUE` (`libelle_specialite`),
  KEY `fk_Specialite_Departement1_idx` (`id_departement`),
  CONSTRAINT `fk_Specialite_Departement1` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialite`
--

LOCK TABLES `specialite` WRITE;
/*!40000 ALTER TABLE `specialite` DISABLE KEYS */;
INSERT INTO `specialite` VALUES (1,6,'Électronique et génie électrique'),(2,3,'Génie de l\'aménagement et de l\'environnement'),(3,4,'Informatique'),(4,5,'Informatique industrielle'),(5,7,'Mécanique et conception des systèmes'),(6,2,'PeiP A Maths-Info'),(7,2,'PeiP A Sc. Matière'),(8,2,'PeiP B Biologie');
/*!40000 ALTER TABLE `specialite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stage`
--

DROP TABLE IF EXISTS `stage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_debut_stage` date NOT NULL DEFAULT '1900-01-01',
  `date_fin_stage` date NOT NULL DEFAULT '1900-01-01',
  `etranger` tinyint(4) NOT NULL DEFAULT '0',
  `annee_etude_stage` int(11) DEFAULT NULL,
  `thematique_stage` varchar(255) DEFAULT NULL,
  `sujet_stage` text,
  `fonctions_taches_stage` text,
  `details_projet_stage` text,
  `duree_stage_semaines` int(11) DEFAULT NULL,
  `duree_stage_heures` int(11) DEFAULT NULL,
  `nb_jours_travail` int(11) DEFAULT NULL,
  `commentaire_duree_stage` varchar(255) DEFAULT NULL,
  `commentaire_stage` text,
  `element_pedagogique` varchar(255) DEFAULT NULL,
  `avantages_nature` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stage`
--

LOCK TABLES `stage` WRITE;
/*!40000 ALTER TABLE `stage` DISABLE KEYS */;
INSERT INTO `stage` VALUES (1,'2017-06-12','2017-08-25',0,4,'Migration de données','Le stagiaire devra migrer des données depuis des fichier vers une interface web','Fonction de migration','RAS',11,385,55,NULL,NULL,NULL,NULL),(2,'2017-06-12','2017-08-25',0,4,'Developpement web','Developpement de site web de presentation','developpeur web','avec symfony3',11,385,55,NULL,'Ce stage sera sympatique',NULL,'Tickets restos'),(3,'2017-06-12','2017-08-04',0,3,'Assistance informatique','Assistance en tout genre, café, photocopies etc','Stagiaire lambda','Moca de préférence',4,140,20,'Ce stage est plutot court',NULL,NULL,'dosettes de café offertes'),(4,'2017-06-12','2017-08-04',0,3,'Tests','Tests de logiciels et d\'applications','Testeur débutant',NULL,4,140,20,'Ce stage est plutot court',NULL,NULL,NULL),(5,'2017-06-12','2017-08-25',0,4,'Mecanique','Vissage de boulons et autre écrous','Mecanicien','Seulement utiliser des clés de 12',11,385,55,NULL,NULL,NULL,'Boite à outils fournie'),(6,'2017-04-03','2017-08-04',0,5,'Arrangement d\'espace verts','Le stagiaire devra arranger la pelouse','Agent d\'entretien',NULL,18,630,90,NULL,NULL,NULL,NULL),(7,'2017-04-03','2017-08-04',0,5,'Refonte de systeme electrique','Le stagiaire devra refaire tout le systeme electrique de lentreprise en y repensant le schéma','Ingénieur électricien',NULL,18,630,90,NULL,'Cette mission est très importante',NULL,NULL),(8,'2017-06-12','2017-08-04',0,3,'Remplissage d\'herbier','Remplissage de l\'herbier national des forêts','Ramasseur botanique',NULL,4,140,20,NULL,NULL,NULL,'Transports de forets en forets payés'),(9,'2017-04-03','2017-08-11',0,5,'Projet de grande envergure','Projet de recherche et développement pour une grande entreprise','Responsable de projet informatique',NULL,19,665,95,NULL,NULL,NULL,'Tickets restos, 1 semaine de vancances libre'),(10,'2017-04-03','2017-08-25',1,4,'Brancher des ampoules','Brancher des ampoules','Brancheur d\'ampoules',NULL,21,735,105,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `stage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `startup`
--

DROP TABLE IF EXISTS `startup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `startup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_startup` varchar(100) NOT NULL DEFAULT 'Inconnu',
  `date_creation_startup` date NOT NULL DEFAULT '1900-01-01',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `startup`
--

LOCK TABLES `startup` WRITE;
/*!40000 ALTER TABLE `startup` DISABLE KEYS */;
INSERT INTO `startup` VALUES (1,'PriceMoov','2017-09-30'),(2,'StarMate','2015-05-06'),(3,'Dev&Co','2018-04-09'),(4,'C++MaisPasAssez','2016-11-03'),(5,'MyConference','2015-12-12'),(6,'ExpertDev','2017-06-12'),(7,'BarreEspaceVerts','2018-01-01');
/*!40000 ALTER TABLE `startup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telephone`
--

DROP TABLE IF EXISTS `telephone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telephone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_telephone` varchar(45) NOT NULL DEFAULT '00 00 00 00 00',
  `type_telephone` varchar(45) NOT NULL DEFAULT 'Fixe',
  `commentaire_telephone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numTelephone_UNIQUE` (`num_telephone`)
) ENGINE=InnoDB AUTO_INCREMENT=253 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telephone`
--

LOCK TABLES `telephone` WRITE;
/*!40000 ALTER TABLE `telephone` DISABLE KEYS */;
INSERT INTO `telephone` VALUES (1,'01-23-24-11-11','fixe','telephone 1'),(2,'01-23-24-11-12','fixe','telephone 2'),(3,'01-23-24-11-13','fixe','telephone 3'),(4,'01-23-24-11-14','fixe','telephone 4'),(5,'01-23-24-11-15','fixe','telephone 5'),(6,'01-23-24-11-16','fixe','telephone 6'),(7,'01-23-24-11-17','fixe','telephone 7'),(8,'01-23-24-11-18','fixe','telephone 8'),(9,'01-23-24-11-19','fixe','telephone 9'),(10,'01-23-24-11-20','fixe','telephone 10'),(11,'01-23-24-11-21','fixe','telephone 11'),(12,'01-23-24-11-22','fixe','telephone 12'),(13,'01-23-24-11-23','fixe','telephone 13'),(14,'01-23-24-11-24','fixe','telephone 14'),(15,'01-23-24-11-25','fixe','telephone 15'),(16,'01-23-24-11-26','fixe','telephone 16'),(17,'01-23-24-11-27','fixe','telephone 17'),(18,'01-23-24-11-28','fixe','telephone 18'),(19,'01-23-24-11-29','fixe','telephone 19'),(20,'01-23-24-11-30','fixe','telephone 20'),(21,'02-23-24-11-11','fixe','telephone 21'),(22,'02-23-24-11-12','fixe','telephone 22'),(23,'02-23-24-11-13','fixe','telephone 23'),(24,'02-23-24-11-14','fixe','telephone 24'),(25,'02-23-24-11-15','fixe','telephone 25'),(26,'02-23-24-11-16','fixe','telephone 26'),(27,'02-23-24-11-17','fixe','telephone 27'),(28,'02-23-24-11-18','fixe','telephone 28'),(29,'02-23-24-11-19','fixe','telephone 29'),(30,'02-23-24-11-20','fixe','telephone 30'),(31,'02-23-24-11-21','fixe','telephone 31'),(32,'02-23-24-11-22','fixe','telephone 32'),(33,'02-23-24-11-23','fixe','telephone 33'),(34,'02-23-24-11-24','fixe','telephone 34'),(35,'02-23-24-11-25','fixe','telephone 35'),(36,'02-23-24-11-26','fixe','telephone 36'),(37,'02-23-24-11-27','fixe','telephone 37'),(38,'02-23-24-11-28','fixe','telephone 38'),(39,'02-23-24-11-29','fixe','telephone 39'),(40,'02-23-24-11-30','fixe','telephone 40'),(41,'03-23-24-11-11','fixe','telephone 41'),(42,'03-23-24-11-12','fixe','telephone 42'),(43,'03-23-24-11-13','fixe','telephone 43'),(44,'03-23-24-11-14','fixe','telephone 44'),(45,'03-23-24-11-15','fixe','telephone 45'),(46,'03-23-24-11-16','fixe','telephone 46'),(47,'03-23-24-11-17','fixe','telephone 47'),(48,'03-23-24-11-18','fixe','telephone 48'),(49,'03-23-24-11-19','fixe','telephone 49'),(50,'03-23-24-11-20','fixe','telephone 50'),(51,'03-23-24-11-21','fixe','telephone 51'),(52,'03-23-24-11-22','fixe','telephone 52'),(53,'03-23-24-11-23','fixe','telephone 53'),(54,'03-23-24-11-24','fixe','telephone 54'),(55,'03-23-24-11-25','fixe','telephone 55'),(56,'03-23-24-11-26','fixe','telephone 56'),(57,'03-23-24-11-27','fixe','telephone 57'),(58,'03-23-24-11-28','fixe','telephone 58'),(59,'03-23-24-11-29','fixe','telephone 59'),(60,'03-23-24-11-30','fixe','telephone 60'),(61,'04-23-24-11-11','fixe','telephone 61'),(62,'04-23-24-11-12','fixe','telephone 62'),(63,'04-23-24-11-13','fixe','telephone 63'),(64,'04-23-24-11-14','fixe','telephone 64'),(65,'04-23-24-11-15','fixe','telephone 65'),(66,'04-23-24-11-16','fixe','telephone 66'),(67,'04-23-24-11-17','fixe','telephone 67'),(68,'04-23-24-11-18','fixe','telephone 68'),(69,'04-23-24-11-19','fixe','telephone 69'),(70,'04-23-24-11-20','fixe','telephone 70'),(71,'04-23-24-11-21','fixe','telephone 71'),(72,'04-23-24-11-22','fixe','telephone 72'),(73,'04-23-24-11-23','fixe','telephone 73'),(74,'04-23-24-11-24','fixe','telephone 74'),(75,'04-23-24-11-25','fixe','telephone 75'),(76,'04-23-24-11-26','fixe','telephone 76'),(77,'04-23-24-11-27','fixe','telephone 77'),(78,'04-23-24-11-28','fixe','telephone 78'),(79,'04-23-24-11-29','fixe','telephone 79'),(80,'04-23-24-11-30','fixe','telephone 80'),(81,'05-23-24-11-11','fixe','telephone 81'),(82,'05-23-24-11-12','fixe','telephone 82'),(83,'05-23-24-11-13','fixe','telephone 83'),(84,'05-23-24-11-14','fixe','telephone 84'),(85,'05-23-24-11-15','fixe','telephone 85'),(86,'05-23-24-11-16','fixe','telephone 86'),(87,'05-23-24-11-17','fixe','telephone 87'),(88,'05-23-24-11-18','fixe','telephone 88'),(89,'05-23-24-11-19','fixe','telephone 89'),(90,'05-23-24-11-20','fixe','telephone 90'),(91,'05-23-24-11-21','fixe','telephone 91'),(92,'05-23-24-11-22','fixe','telephone 92'),(93,'05-23-24-11-23','fixe','telephone 93'),(94,'05-23-24-11-24','fixe','telephone 94'),(95,'05-23-24-11-25','fixe','telephone 95'),(96,'05-23-24-11-26','fixe','telephone 96'),(97,'05-23-24-11-27','fixe','telephone 97'),(98,'05-23-24-11-28','fixe','telephone 98'),(99,'05-23-24-11-29','fixe','telephone 99'),(100,'05-23-24-11-30','fixe','telephone 100'),(101,'06-23-24-11-11','portable','telephone 101'),(102,'06-23-24-11-12','portable','telephone 102'),(103,'06-23-24-11-13','portable','telephone 103'),(104,'06-23-24-11-14','portable','telephone 104'),(105,'06-23-24-11-15','portable','telephone 105'),(106,'06-23-24-11-16','portable','telephone 106'),(107,'06-23-24-11-17','portable','telephone 107'),(108,'06-23-24-11-18','portable','telephone 108'),(109,'06-23-24-11-19','portable','telephone 109'),(110,'06-23-24-11-20','portable','telephone 110'),(111,'06-23-24-11-21','portable','telephone 111'),(112,'06-23-24-11-22','portable','telephone 112'),(113,'06-23-24-11-23','portable','telephone 113'),(114,'06-23-24-11-24','portable','telephone 114'),(115,'06-23-24-11-25','portable','telephone 115'),(116,'06-23-24-11-26','portable','telephone 116'),(117,'06-23-24-11-27','portable','telephone 117'),(118,'06-23-24-11-28','portable','telephone 118'),(119,'06-23-24-11-29','portable','telephone 119'),(120,'06-23-24-11-30','portable','telephone 120'),(121,'06-23-24-11-31','portable','telephone 121'),(122,'06-23-24-11-32','portable','telephone 122'),(123,'06-23-24-11-33','portable','telephone 123'),(124,'06-23-24-11-34','portable','telephone 124'),(125,'06-23-24-11-35','portable','telephone 125'),(126,'06-23-24-11-36','portable','telephone 126'),(127,'06-23-24-11-37','portable','telephone 127'),(128,'06-23-24-11-38','portable','telephone 128'),(129,'06-23-24-11-39','portable','telephone 129'),(130,'06-23-24-11-40','portable','telephone 130'),(131,'06-23-24-11-41','portable','telephone 131'),(132,'06-23-24-11-42','portable','telephone 132'),(133,'06-23-24-11-43','portable','telephone 133'),(134,'06-23-24-11-44','portable','telephone 134'),(135,'06-23-24-11-45','portable','telephone 135'),(136,'06-23-24-11-46','portable','telephone 136'),(137,'06-23-24-11-47','portable','telephone 137'),(138,'06-23-24-11-48','portable','telephone 138'),(139,'06-23-24-11-49','portable','telephone 139'),(140,'06-23-24-11-50','portable','telephone 140'),(141,'06-23-24-11-51','portable','telephone 141'),(142,'06-23-24-11-52','portable','telephone 142'),(143,'06-23-24-11-53','portable','telephone 143'),(144,'06-23-24-11-54','portable','telephone 144'),(145,'06-23-24-11-55','portable','telephone 145'),(146,'06-23-24-11-56','portable','telephone 146'),(147,'06-23-24-11-57','portable','telephone 147'),(148,'06-23-24-11-58','portable','telephone 148'),(149,'06-23-24-11-59','portable','telephone 149'),(150,'06-23-24-11-60','portable','telephone 150'),(151,'06-23-24-11-61','portable','telephone 151'),(152,'06-23-24-11-62','portable','telephone 152'),(153,'06-23-24-11-63','portable','telephone 153'),(154,'06-23-24-11-64','portable','telephone 154'),(155,'06-23-24-11-65','portable','telephone 155'),(156,'06-23-24-11-66','portable','telephone 156'),(157,'06-23-24-11-67','portable','telephone 157'),(158,'06-23-24-11-68','portable','telephone 158'),(159,'06-23-24-11-69','portable','telephone 159'),(160,'06-23-24-11-70','portable','telephone 160'),(161,'06-23-24-11-71','portable','telephone 161'),(162,'06-23-24-11-72','portable','telephone 162'),(163,'06-23-24-11-73','portable','telephone 163'),(164,'06-23-24-11-74','portable','telephone 164'),(165,'06-23-24-11-75','portable','telephone 165'),(166,'06-23-24-11-76','portable','telephone 166'),(167,'06-23-24-11-77','portable','telephone 167'),(168,'06-23-24-11-78','portable','telephone 168'),(169,'06-23-24-11-79','portable','telephone 169'),(170,'06-23-24-11-80','portable','telephone 170'),(171,'06-23-24-11-81','portable','telephone 171'),(172,'06-23-24-11-82','portable','telephone 172'),(173,'06-23-24-11-83','portable','telephone 173'),(174,'06-23-24-11-84','portable','telephone 174'),(175,'06-23-24-11-85','portable','telephone 175'),(176,'06-23-24-11-86','portable','telephone 176'),(177,'06-23-24-11-87','portable','telephone 177'),(178,'06-23-24-11-88','portable','telephone 178'),(179,'06-23-24-11-89','portable','telephone 179'),(180,'06-23-24-11-90','portable','telephone 180'),(181,'06-23-24-11-91','portable','telephone 181'),(182,'06-23-24-11-92','portable','telephone 182'),(183,'06-23-24-11-93','portable','telephone 183'),(184,'06-23-24-11-94','portable','telephone 184'),(185,'06-23-24-11-95','portable','telephone 185'),(186,'06-23-24-11-96','portable','telephone 186'),(187,'06-23-24-11-97','portable','telephone 187'),(188,'06-23-24-11-98','portable','telephone 188'),(189,'06-23-24-11-99','portable','telephone 189'),(190,'06-23-24-12-11','portable','telephone 190'),(191,'06-23-24-12-12','portable','telephone 191'),(192,'06-23-24-12-13','portable','telephone 192'),(193,'06-23-24-12-14','portable','telephone 193'),(194,'06-23-24-12-15','portable','telephone 194'),(195,'06-23-24-12-16','portable','telephone 195'),(196,'06-23-24-12-17','portable','telephone 196'),(197,'06-23-24-12-18','portable','telephone 197'),(198,'06-23-24-12-19','portable','telephone 198'),(199,'06-23-24-12-20','portable','telephone 199'),(200,'06-23-24-12-21','portable','telephone 200'),(201,'01-41-87-67-00','Fixe',NULL),(202,'06-32-12-80-76','Fixe',NULL),(203,'02-90-87-01-00','Fixe',NULL),(204,'02-51-77-40-07','Fixe',NULL),(205,'06-10-27-34-78','Fixe',NULL),(206,'02-47-49-63-23','Fixe',NULL),(207,'02-54-35-58-98','Fixe',NULL),(208,'331-73-26-61-16','Fixe',NULL),(209,'01-79-41-03-89','Fixe',NULL),(210,'06-69-62-19-26','Fixe',NULL),(211,'01-49-00-60-55','Fixe',NULL),(212,'01-49-67-54-67','Fixe',NULL),(213,'02-23-45-18-82','Fixe',NULL),(214,'02-51-89-74-01','Fixe',NULL),(215,'02-34-53-80-67','Fixe',NULL),(216,'02-34-53-80-70','Fixe',NULL),(217,'02-34-53-80-15','Fixe',NULL),(218,'06-95-71-37-12','Fixe',NULL),(219,'02-47-88-74-38','Fixe',NULL),(220,'02-54-71-13-60','Fixe',NULL),(221,'06-50-44-40-08','Fixe',NULL),(222,'02-47-48-50-67','Fixe',NULL),(223,'02-48-66-69-23','Fixe',NULL),(224,'05-35-54-49-24','Fixe',NULL),(225,'02-47-32-37-58','Fixe',NULL),(226,'06-25-13-17-15','Fixe',NULL),(227,'06-34-09-81-10','Fixe',NULL),(228,'02-18-75-16-89','Fixe',NULL),(229,'02-28-01-27-28','Fixe',NULL),(230,'05-49-62-64-52','Fixe',NULL),(231,'06-88-19-77-91','Fixe',NULL),(232,'06-65-32-40-51','Fixe',NULL),(233,'02-47-48-61-01','Fixe',NULL),(234,'02-45-34-04-40','Fixe',NULL),(235,'02-47-50-30-54','Fixe',NULL),(236,'02-47-48-46-99','Fixe',NULL),(237,'02-38-25-65-88','Fixe',NULL),(238,'06-16-64-45-33','Fixe',NULL),(239,'02-47-36-79-81','Fixe',NULL),(240,'06-16-22-09-44','Fixe',NULL),(241,'02-49-53-01-66','Fixe',NULL),(242,'01-46-96-35-10','Fixe',NULL),(243,'06-16-93-65-02','Fixe',NULL),(244,'02-47-70-28-79','Fixe',NULL),(245,'02-47-42-40-45','Fixe',NULL),(246,'04-72-85-72-85','Fixe',NULL),(247,'02-47-46-30-76','Fixe',NULL),(248,'02-38-52-63-69','Fixe',NULL),(249,'02-77-27-77-25','Fixe',NULL),(250,'02-77-27-77-22','Fixe',NULL),(251,'06-70-44-14-29','Fixe',NULL),(252,'02-47-48-08-17','Fixe',NULL);
/*!40000 ALTER TABLE `telephone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_forum`
--

DROP TABLE IF EXISTS `type_forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type_forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_type_forum` varchar(45) NOT NULL DEFAULT 'Type inconnu',
  `commentaire_type_forum` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Type de forum : forum des entreprises, salon étudiant, etc.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_forum`
--

LOCK TABLES `type_forum` WRITE;
/*!40000 ALTER TABLE `type_forum` DISABLE KEYS */;
INSERT INTO `type_forum` VALUES (1,'Forum des entreprises Polytech Tours','Forum annuel de Polytech Tours à l\'occasion duquel de nombreuses entreprises sont invitées'),(2,'Salon de l\'étudiant','Salon publique rassemblant écoles, universités et entreprises');
/*!40000 ALTER TABLE `type_forum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Admin','admin','$2y$13$qxcOMbktscTGrFF4RT14dud3mzsxbmVjsDdKsx1CP/8YtOaql7z4e','a:1:{i:0;s:10:\"ROLE_ADMIN\";}','admin@polytech.com');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verse_taxe_apprentissage`
--

DROP TABLE IF EXISTS `verse_taxe_apprentissage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verse_taxe_apprentissage` (
  `id_departement` int(11) NOT NULL,
  `id_entreprise` int(11) NOT NULL,
  `annee_versement` int(11) NOT NULL,
  `partie_versante` varchar(255) NOT NULL,
  `montant_taxe` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_departement`,`id_entreprise`,`annee_versement`,`partie_versante`),
  KEY `fk_verse_taxe_apprentissage_entreprise1_idx` (`id_entreprise`),
  CONSTRAINT `fk_VerseTaxeApprentissage_Departement1` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_verse_taxe_apprentissage_entreprise1` FOREIGN KEY (`id_entreprise`) REFERENCES `entreprise` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verse_taxe_apprentissage`
--

LOCK TABLES `verse_taxe_apprentissage` WRITE;
/*!40000 ALTER TABLE `verse_taxe_apprentissage` DISABLE KEYS */;
INSERT INTO `verse_taxe_apprentissage` VALUES (1,1,2018,'C.C.I. Paris',2000),(1,2,2014,'ACTALIANS',5),(1,91,2014,'FAFSEA',2),(1,143,2014,'ACTALIANS',5000),(1,146,2014,'C.C.I. FRANCHE COMTE',1853),(1,149,2014,'C.C.I. FRANCHE COMTE',1),(1,157,2014,'C.C.I. CENTRE VAL DE LOIRE',637),(1,162,2014,'C.C.I. CENTRE VAL DE LOIRE',2),(1,163,2014,'C.C.I. CENTRE VAL DE LOIRE',200),(1,164,2014,'C.C.I. CENTRE VAL DE LOIRE',38),(1,165,2014,'C.C.I. CENTRE VAL DE LOIRE',279),(1,166,2014,'C.C.I. CENTRE VAL DE LOIRE',946),(1,171,2014,'C.C.I. CENTRE VAL DE LOIRE',148),(1,188,2014,'C.C.I. HAUTS DE France',153),(1,202,2014,'FAFSEA',3),(1,203,2014,'FAFSEA',237),(1,224,2014,'INTERGROS',14),(1,242,2014,'INTERGROS',6),(1,262,2014,'INTERGROS',2),(1,269,2014,'OPCA CONSTRUCTYS',1000),(1,270,2014,'OPCA CONSTRUCTYS',632),(2,42,2014,'FAFSEA',3000),(2,91,2014,'FAFSEA',2428),(2,97,2014,'FAFSEA',20500),(2,135,2014,'FAFSEA',13900),(2,137,2014,'ACTALIANS',15),(2,145,2014,'C.C.I. FRANCHE COMTE',5275),(2,146,2014,'C.C.I. FRANCHE COMTE',1),(2,157,2014,'C.C.I. CENTRE VAL DE LOIRE',637),(2,164,2014,'C.C.I. CENTRE VAL DE LOIRE',38),(2,165,2014,'C.C.I. CENTRE VAL DE LOIRE',279),(2,166,2014,'C.C.I. CENTRE VAL DE LOIRE',946),(2,171,2014,'C.C.I. CENTRE VAL DE LOIRE',148),(2,196,2014,'FAFSEA',3925),(2,199,2014,'FAFSEA',653),(2,200,2014,'FAFSEA',1000),(2,201,2014,'FAFSEA',3000),(2,204,2014,'FAFSEA',1000),(2,207,2014,'FAFSEA',370),(2,208,2014,'FAFSEA',58),(2,212,2014,'FAFSEA',7042),(2,213,2014,'FAFSEA',60),(2,214,2014,'FAFSEA',464),(2,217,2014,'FAFSEA',1000),(2,224,2014,'INTERGROS',14),(2,228,2014,'INTERGROS',3538),(2,234,2014,'INTERGROS',2442),(2,253,2014,'INTERGROS',6000),(2,269,2014,'OPCA CONSTRUCTYS',1),(2,273,2014,'OPCA TRANSPORTS ET SERVICES',25142),(2,274,2014,'OPCA TRANSPORTS ET SERVICES',233),(3,3,2018,'OPCA DEFI',5000),(3,137,2014,'ACTALIANS',15),(3,138,2014,'ACTALIANS',158),(3,139,2014,'ACTALIANS',305.23),(3,144,2014,'C.C.I. FRANCHE COMTE',89),(3,154,2014,'C.C.I. FRANCHE COMTE',900),(3,155,2014,'C.C.I. CENTRE VAL DE LOIRE',52),(3,156,2014,'C.C.I. CENTRE VAL DE LOIRE',1),(3,157,2014,'C.C.I. CENTRE VAL DE LOIRE',343),(3,158,2014,'C.C.I. CENTRE VAL DE LOIRE',97),(3,159,2014,'C.C.I. CENTRE VAL DE LOIRE',8),(3,160,2014,'C.C.I. CENTRE VAL DE LOIRE',2),(3,167,2014,'C.C.I. CENTRE VAL DE LOIRE',401),(3,176,2014,'C.C.I. CENTRE VAL DE LOIRE',1),(3,181,2014,'C.C.I. CENTRE VAL DE LOIRE',1),(3,182,2014,'C.C.I. CENTRE VAL DE LOIRE',109),(3,186,2014,'C.R.C.I BASSE NORMANDIE',478),(3,187,2014,'C.C.I. HAUTS DE France',276),(3,189,2014,'C.R.C.I. PAYS DE LA LOIRE',576),(3,190,2014,'C.R.C.I. PAYS DE LA LOIRE',23),(3,192,2014,'C.C.I.  AUVERGNE RHONE ALPES',286),(3,193,2014,'C.C.I.  AUVERGNE RHONE ALPES',199),(3,194,2014,'FAFSEA',1),(3,196,2014,'FAFSEA',3),(3,197,2014,'FAFSEA',47),(3,198,2014,'FAFSEA',505),(3,200,2014,'FAFSEA',1),(3,208,2014,'FAFSEA',58),(3,215,2014,'FAFSEA',31),(3,222,2014,'INTERGROS',958.33),(3,264,2014,'INTERGROS',67),(3,265,2014,'INTERGROS',7),(3,266,2014,'INTERGROS',60),(3,267,2014,'INTERGROS',189),(3,276,2014,'UNIFORMATION',4),(4,42,2014,'FAFSEA',3),(4,54,2017,'OPCALIA',500),(4,54,2018,'OPCALIA',500),(4,97,2014,'FAFSEA',20),(4,135,2014,'FAFSEA',13),(4,140,2014,'ACTALIANS',106.02),(4,145,2014,'C.C.I. FRANCHE COMTE',5),(4,161,2014,'C.C.I. CENTRE VAL DE LOIRE',283),(4,168,2014,'C.C.I. CENTRE VAL DE LOIRE',202),(4,169,2014,'C.C.I. CENTRE VAL DE LOIRE',73),(4,170,2014,'C.C.I. CENTRE VAL DE LOIRE',108),(4,175,2014,'C.C.I. CENTRE VAL DE LOIRE',40),(4,177,2014,'C.C.I. CENTRE VAL DE LOIRE',56),(4,195,2014,'FAFSEA',560),(4,201,2014,'FAFSEA',3),(4,204,2014,'FAFSEA',1),(4,205,2014,'FAFSEA',5),(4,206,2014,'FAFSEA',473),(4,207,2014,'FAFSEA',370),(4,211,2014,'FAFSEA',3),(4,212,2014,'FAFSEA',7),(4,216,2014,'FAFSEA',2),(4,234,2014,'INTERGROS',2),(4,254,2014,'INTERGROS',530),(4,255,2014,'INTERGROS',707),(4,256,2014,'INTERGROS',1),(4,257,2014,'INTERGROS',1),(4,258,2014,'INTERGROS',33),(4,277,2014,'UNIFORMATION',3),(5,40,2018,'OPCALIA',1000),(5,148,2014,'C.C.I. FRANCHE COMTE',14),(5,178,2014,'C.C.I. CENTRE VAL DE LOIRE',900),(5,209,2014,'FAFSEA',192),(6,2,2018,'AGEFOS PME',6000),(6,141,2014,'ACTALIANS',438),(6,142,2014,'ACTALIANS',400),(6,143,2014,'ACTALIANS',5),(6,147,2014,'C.C.I. FRANCHE COMTE',28),(6,153,2014,'C.C.I. FRANCHE COMTE',6),(6,171,2014,'C.C.I. CENTRE VAL DE LOIRE',79),(6,172,2014,'C.C.I. CENTRE VAL DE LOIRE',36),(6,173,2014,'C.C.I. CENTRE VAL DE LOIRE',145),(6,174,2014,'C.C.I. CENTRE VAL DE LOIRE',61),(6,179,2014,'C.C.I. CENTRE VAL DE LOIRE',458),(6,180,2014,'C.C.I. CENTRE VAL DE LOIRE',34),(6,217,2014,'FAFSEA',1),(6,218,2014,'INTERGROS',1),(6,221,2014,'INTERGROS',50.87),(6,225,2014,'INTERGROS',7),(6,226,2014,'INTERGROS',750),(6,228,2014,'INTERGROS',3),(6,235,2014,'INTERGROS',300),(6,236,2014,'INTERGROS',645),(6,243,2014,'INTERGROS',298),(6,244,2014,'INTERGROS',355),(6,275,2014,'OPCA 3+',298),(7,48,2018,'AGEFOS PME',3000),(7,150,2014,'C.C.I. CENTRE VAL DE LOIRE',3),(7,150,2014,'C.C.I. FRANCHE COMTE',71),(7,150,2014,'C.C.I. HAUTS DE France',57),(7,151,2014,'C.C.I. FRANCHE COMTE',60),(7,152,2014,'C.C.I. FRANCHE COMTE',1),(7,183,2014,'C.C.I. CENTRE VAL DE LOIRE',394),(7,184,2014,'C.C.I. CENTRE VAL DE LOIRE',600),(7,185,2014,'C.C.I. CENTRE VAL DE LOIRE',336),(7,191,2014,'C.C.I.  AUVERGNE RHONE ALPES',78),(7,199,2014,'FAFSEA',653),(7,210,2014,'FAFSEA',1),(7,213,2014,'FAFSEA',60),(7,214,2014,'FAFSEA',464),(7,218,2014,'INTERGROS',233.6),(7,219,2014,'INTERGROS',196.07),(7,220,2014,'INTERGROS',10),(7,223,2014,'INTERGROS',132),(7,226,2014,'INTERGROS',750),(7,227,2014,'INTERGROS',314),(7,229,2014,'INTERGROS',81),(7,230,2014,'INTERGROS',41),(7,231,2014,'INTERGROS',175),(7,232,2014,'INTERGROS',216),(7,233,2014,'INTERGROS',1),(7,237,2014,'INTERGROS',219),(7,238,2014,'INTERGROS',76),(7,239,2014,'INTERGROS',403),(7,240,2014,'INTERGROS',520),(7,241,2014,'INTERGROS',389),(7,245,2014,'INTERGROS',291),(7,246,2014,'INTERGROS',100),(7,247,2014,'INTERGROS',2),(7,248,2014,'INTERGROS',565),(7,249,2014,'INTERGROS',1),(7,250,2014,'INTERGROS',210),(7,251,2014,'INTERGROS',500),(7,252,2014,'INTERGROS',1),(7,253,2014,'INTERGROS',6),(7,259,2014,'INTERGROS',1),(7,260,2014,'INTERGROS',65),(7,261,2014,'INTERGROS',141),(7,262,2014,'INTERGROS',2),(7,263,2014,'INTERGROS',189),(7,268,2014,'OPCA CONSTRUCTYS',188),(7,271,2014,'OPCA CONSTRUCTYS',200),(7,272,2014,'OPCA CONSTRUCTYS',1),(7,273,2014,'OPCA TRANSPORTS ET SERVICES',25),(7,274,2014,'OPCA TRANSPORTS ET SERVICES',233);
/*!40000 ALTER TABLE `verse_taxe_apprentissage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ville`
--

DROP TABLE IF EXISTS `ville`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ville` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pays` int(11) DEFAULT NULL,
  `nom_ville` varchar(200) NOT NULL DEFAULT 'Inconnu',
  `departement` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Ville_Pays1_idx` (`id_pays`),
  CONSTRAINT `FK_43C3D9C3BFBF20AC` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36852 DEFAULT CHARSET=utf8 COMMENT='Issu de http://sql.sh/736-base-donnees-villes-francaises Licence CC';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ville`
--

LOCK TABLES `ville` WRITE;
/*!40000 ALTER TABLE `ville` DISABLE KEYS */;
INSERT INTO `ville` VALUES (33051,75,'Lacapelle-Ségalar','81'),(33052,75,'Appelle','81'),(33053,75,'Villefranche-d\'Albigeois','81'),(33054,75,'Montgaillard','81'),(33055,75,'Garrevaques','81'),(33056,75,'Albi','81'),(33057,75,'Saint-Jean-de-Marcel','81'),(33058,75,'Trébas','81'),(33059,75,'Larroque','81'),(33060,75,'Saint-Gauzens','81'),(33061,75,'Castelnau-de-Lévis','81'),(33062,75,'Ferrières','81'),(33063,75,'Taïx','81'),(33064,75,'Naves','81'),(33065,75,'Veilhes','81'),(33066,75,'Le Masnau-Massuguiès','81'),(33067,75,'Cahuzac-sur-Vère','81'),(33068,75,'Teyssode','81'),(33069,75,'Terssac','81'),(33070,75,'Nages','81'),(33071,75,'Albine','81'),(33072,75,'Lasfaillades','81'),(33073,75,'Castelnau-de-Montmiral','81'),(33074,75,'Gaillac','81'),(33075,75,'Montdragon','81'),(33076,75,'Durfort','81'),(33077,75,'Lamontélarié','81'),(33078,75,'Jonquières','81'),(33079,75,'Milhars','81'),(33080,75,'Lédas-et-Penthiès','81'),(33081,75,'Grazac','81'),(33082,75,'Montauriol','81'),(33083,75,'Busque','81'),(33084,75,'Roumégoux','81'),(33085,75,'Saint-Juéry','81'),(33086,75,'Almayrac','81'),(33087,75,'Roussayrolles','81'),(33088,75,'Frausseilles','81'),(33089,75,'Montvalen','81'),(33090,75,'Lisle-sur-Tarn','81'),(33091,75,'Saint-Lieux-Lafenasse','81'),(33092,75,'Magrin','81'),(33093,75,'Lempaut','81'),(33094,75,'Le Margnès','81'),(33095,75,'Arthès','81'),(33096,75,'Le Garric','81'),(33097,75,'Beauvais-sur-Tescou','81'),(33098,75,'Sémalens','81'),(33099,75,'Marssac-sur-Tarn','81'),(33100,75,'La Sauzière-Saint-Jean','81'),(33101,75,'Donnazac','81'),(33102,75,'Mazamet','81'),(33103,75,'Labessière-Candeil','81'),(33104,75,'Montans','81'),(33105,75,'Lacapelle-Pinet','81'),(33106,75,'Algans','81'),(33107,75,'Vénès','81'),(33108,75,'Caucalières','81'),(33109,75,'Montgey','81'),(33110,75,'Prades','81'),(33111,75,'Sainte-Cécile-du-Cayrou','81'),(33112,75,'Lacaze','81'),(33113,75,'Saint-André','81'),(33114,75,'Saint-Amans-Valtoret','81'),(33115,75,'Vieux','81'),(33116,75,'Espérausses','81'),(33117,75,'Campagnac','81'),(33118,75,'Saint-Amancet','81'),(33119,75,'Fraissines','81'),(33120,75,'Noailhac','81'),(33121,75,'Rayssac','81'),(33122,75,'Fréjairolles','81'),(33123,75,'Lugan','81'),(33124,75,'Tauriac','81'),(33125,75,'Cabanès','81'),(33126,75,'Mont-Roc','81'),(33127,75,'Lagardiolle','81'),(33128,75,'Saint-Antonin-de-Lacalm','81'),(33129,75,'Labastide-Gabausse','81'),(33130,75,'Mailhoc','81'),(33131,75,'Sorèze','81'),(33132,75,'Cordes-sur-Ciel','81'),(33133,75,'Lautrec','81'),(33134,75,'Fréjeville','81'),(33135,75,'Treban','81'),(33136,75,'Garrigues','81'),(33137,75,'Valence-d\'Albigeois','81'),(33138,75,'Brousse','81'),(33139,75,'Rouffiac','81'),(33140,75,'Mézens','81'),(33141,75,'Marnaves','81'),(33142,75,'Saint-Lieux-lès-Lavaur','81'),(33143,75,'Montredon-Labessonnié','81'),(33144,75,'Milhavet','81'),(33145,75,'Bout-du-Pont-de-Larn','81'),(33146,75,'Marzens','81'),(33147,75,'Saint-Marcel-Campes','81'),(33148,75,'Lamillarié','81'),(33149,75,'Brens','81'),(33150,75,'Lacougotte-Cadoul','81'),(33151,75,'Ambialet','81'),(33152,75,'Castelnau-de-Brassac','81'),(33153,75,'Montcabrier','81'),(33154,75,'Dourgne','81'),(33155,75,'Réalmont','81'),(33156,75,'Trévien','81'),(33157,75,'Saint-Jean-de-Rives','81'),(33158,75,'Cadix','81'),(33159,75,'Aguts','81'),(33160,75,'Dénat','81'),(33161,75,'Cambon-lès-Lavaur','81'),(33162,75,'Puycalvel','81'),(33163,75,'Sieurac','81'),(33164,75,'Brassac','81'),(33165,75,'Sérénac','81'),(33166,75,'Saint-Agnan','81'),(33167,75,'Montels','81'),(33168,75,'Puygouzon','81'),(33169,75,'Payrin-Augmontel','81'),(33170,75,'Blan','81'),(33171,75,'Rabastens','81'),(33172,75,'Cuq-Toulza','81'),(33173,75,'Fauch','81'),(33174,75,'Mouzens','81'),(33175,75,'Montrosier','81'),(33176,75,'Labastide-Rouairoux','81'),(33177,75,'Murat-sur-Vèbre','81'),(33178,75,'Técou','81'),(33179,75,'Ambres','81'),(33180,75,'Lacabarède','81'),(33181,75,'Saint-Jean-de-Vals','81'),(33182,75,'Mouzieys-Teulet','81'),(33183,75,'Viviers-lès-Montagnes','81'),(33184,75,'Viterbe','81'),(33185,75,'Belleserre','81'),(33186,75,'Saint-Martin-Laguépie','81'),(33187,75,'Rosières','81'),(33188,75,'Sauveterre','81'),(33189,75,'Labastide-Saint-Georges','81'),(33190,75,'Senaux','81'),(33191,75,'Aiguefonde','81'),(33192,75,'Livers-Cazelles','81'),(33193,75,'Lasgraisses','81'),(33194,75,'Guitalens-L\'Albarède','81'),(33195,75,'Bellegarde','81'),(33196,75,'Montirat','81'),(33197,75,'Salles','81'),(33198,75,'Moulin-Mage','81'),(33199,75,'Tonnac','81'),(33200,75,'Briatexte','81'),(33201,75,'Lacaune','81'),(33202,75,'Saint-Beauzile','81'),(33203,75,'Labastide-de-Lévis','81'),(33204,75,'Vaour','81'),(33205,75,'Gijounet','81'),(33206,75,'Andouque','81'),(33207,75,'Montpinier','81'),(33208,75,'Vielmur-sur-Agout','81'),(33209,75,'Alos','81'),(33210,75,'Puylaurens','81'),(33211,75,'Lavaur','81'),(33212,75,'Serviès','81'),(33213,75,'Peyrole','81'),(33214,75,'Crespin','81'),(33215,75,'Combefa','81'),(33216,75,'Itzac','81'),(33217,75,'Castanet','81'),(33218,75,'Lacrouzette','81'),(33219,75,'Carbes','81'),(33220,75,'Sainte-Gemme','81'),(33221,75,'Villeneuve-sur-Vère','81'),(33222,75,'Fénols','81'),(33223,75,'Saussenac','81'),(33224,75,'Cuq','81'),(33225,75,'Puycelsi','81'),(33226,75,'Padiès','81'),(33227,75,'Curvalle','81'),(33228,75,'Saliès','81'),(33229,75,'Cadalen','81'),(33230,75,'Pratviel','81'),(33231,75,'Saint-Grégoire','81'),(33232,75,'Barre','81'),(33233,75,'Verdalle','81'),(33234,75,'Escroux','81'),(33235,75,'Saint-Cirgue','81'),(33236,75,'Viane','81'),(33237,75,'Cahuzac','81'),(33238,75,'Saint-Genest-de-Contest','81'),(33239,75,'Loupiac','81'),(33240,75,'Saint-Julien-du-Puy','81'),(33241,75,'Blaye-les-Mines','81'),(33242,75,'Villeneuve-lès-Lavaur','81'),(33243,75,'Le Rialet','81'),(33244,75,'Andillac','81'),(33245,75,'Bournazel','81'),(33246,75,'Labarthe-Bleys','81'),(33247,75,'Roquevidal','81'),(33248,75,'Alban','81'),(33249,75,'Grave','81'),(33250,75,'Massaguel','81'),(33251,75,'Bannières','81'),(33252,75,'Paulinet','81'),(33253,75,'Graulhet','81'),(33254,75,'Coufouleux','81'),(33255,75,'Saint-Amans-Soult','81'),(33256,75,'Teillet','81'),(33257,75,'Saint-Pierre-de-Trivisy','81'),(33258,75,'Pont-de-Larn','81'),(33259,75,'Viviers-lès-Lavaur','81'),(33260,75,'Massac-Séran','81'),(33261,75,'Angles','81'),(33262,75,'Saint-Michel-de-Vax','81'),(33263,75,'Assac','81'),(33264,75,'Saint-Salvi-de-Carcavès','81'),(33265,75,'Ronel','81'),(33266,75,'Aussillon','81'),(33267,75,'Penne','81'),(33268,75,'Saint-Sernin-lès-Lavaur','81'),(33269,75,'Le Verdier','81'),(33270,75,'Cunac','81'),(33271,75,'Damiatte','81'),(33272,75,'Laparrouquial','81'),(33273,75,'Cambounet-sur-le-Sor','81'),(33274,75,'Saint-Benoît-de-Carmaux','81'),(33275,75,'Saïx','81'),(33276,75,'Moularès','81'),(33277,75,'Vindrac-Alayrac','81'),(33278,75,'Carlus','81'),(33279,75,'Saint-Sulpice','81'),(33280,75,'Le Bez','81'),(33281,75,'Sainte-Croix','81'),(33282,75,'Orban','81'),(33283,75,'Puéchoursi','81'),(33284,75,'Senouillac','81'),(33285,75,'Mirandol-Bourgnounac','81'),(33286,75,'Puybegon','81'),(33287,75,'Péchaudier','81'),(33288,75,'Crespinet','81'),(33289,75,'Montfa','81'),(33290,75,'Labastide-Dénat','81'),(33291,75,'Saint-Affrique-les-Montagnes','81'),(33292,75,'Laboutarie','81'),(33293,75,'Massals','81'),(33294,75,'Parisot','81'),(33295,75,'Arifat','81'),(33296,75,'Bruguière','81'),(33297,75,'Saint-Germain-des-Prés','81'),(33298,75,'Broze','81'),(33299,75,'Croisille','81'),(33300,75,'Le Riols','81'),(33301,75,'Courris','81'),(33302,75,'Saint-Michel-Labadié','81'),(33303,75,'Le Sequestre','81'),(33304,75,'Faussergues','81'),(33305,75,'Terre-Clapier','81'),(33306,75,'Le Vintrou','81'),(33307,75,'Le Fraysse','81'),(33308,75,'Missècle','81'),(33309,75,'Lagarrigue','81'),(33310,75,'Saint-Germier','81'),(33311,75,'Bertre','81'),(33312,75,'Burlats','81'),(33313,75,'Berlats','81'),(33314,75,'Lescure-d\'Albigeois','81'),(33315,75,'Pampelonne','81'),(33316,75,'Amarens','81'),(33317,75,'Fiac','81'),(33318,75,'Saint-Salvy-de-la-Balme','81'),(33319,75,'Le Ségur','81'),(33320,75,'Soual','81'),(33321,75,'Tanus','81'),(33322,75,'Fayssac','81'),(33323,75,'Arfons','81'),(33324,75,'Miolles','81'),(33325,75,'Cabannes','81'),(33326,75,'Cagnac-les-Mines','81'),(33327,75,'Cestayrols','81'),(33328,75,'Palleville','81'),(33329,75,'Marsal','81'),(33330,75,'Carmaux','81'),(33331,75,'Cambounès','81'),(33332,75,'Aussac','81'),(33333,75,'Poulan-Pouzols','81'),(33334,75,'Souel','81'),(33335,75,'Castres','81'),(33336,75,'Vabre','81'),(33337,75,'Saint-Julien-Gaulène','81'),(33338,75,'Peyregoux','81'),(33339,75,'Roquemaure','81'),(33340,75,'Roquecourbe','81'),(33341,75,'Salvagnac','81'),(33342,75,'Saint-Christophe','81'),(33343,75,'Boissezon','81'),(33344,75,'Cambon','81'),(33345,75,'Bernac','81'),(33346,75,'Loubers','81'),(33347,75,'Monestiés','81'),(33348,75,'Valderiès','81'),(33349,75,'Le Dourn','81'),(33350,75,'Saint-Urcisse','81'),(33351,75,'Saint-Paul-Cap-de-Joux','81'),(33352,75,'Mouzieys-Panens','81'),(33353,75,'Noailles','81'),(33354,75,'Cammazes','81'),(33355,75,'Valdurenque','81'),(33356,75,'Escoussens','81'),(33357,75,'Florentin','81'),(33358,75,'Lescout','81'),(33359,75,'Jouqueviel','81'),(33360,75,'Giroussens','81'),(33361,75,'Belcastel','81'),(33362,75,'Maurens-Scopont','81'),(33363,75,'Poudis','81'),(33364,75,'Rivières','81'),(33365,75,'Montdurausse','81'),(33366,75,'Laboulbène','81'),(33367,75,'Le Travet','81'),(33368,75,'Lombers','81'),(33369,75,'Teulat','81'),(33370,75,'Saint-Vincent','82'),(33371,75,'Montagudet','82'),(33372,75,'Meauzac','82'),(33373,75,'Saint-Michel','82'),(33374,75,'Gimat','82'),(33375,75,'Cayrac','82'),(33376,75,'Montjoi','82'),(33377,75,'Saint-Projet','82'),(33378,75,'Golfech','82'),(33379,75,'Saint-Paul-d\'Espis','82'),(33380,75,'Montricoux','82'),(33381,75,'Albefeuille-Lagarde','82'),(33382,75,'Puycornet','82'),(33383,75,'Mirabel','82'),(33384,75,'Génébrières','82'),(33385,75,'Saint-Cirice','82'),(33386,75,'Saint-Étienne-de-Tulmont','82'),(33387,75,'Saint-Sardos','82'),(33388,75,'Montbeton','82'),(33389,75,'Maumusson','82'),(33390,75,'Castelsarrasin','82'),(33391,75,'Marignac','82'),(33392,75,'Escazeaux','82'),(33393,75,'Auty','82'),(33394,75,'Saint-Nauphary','82'),(33395,75,'Auterive','82'),(33396,75,'Fajolles','82'),(33397,75,'Saint-Cirq','82'),(33398,75,'Bressols','82'),(33399,75,'Caumont','82'),(33400,75,'Coutures','82'),(33401,75,'Lafitte','82'),(33402,75,'Saint-Georges','82'),(33403,75,'Durfort-Lacapelette','82'),(33404,75,'Saint-Amans-du-Pech','82'),(33405,75,'Mansonville','82'),(33406,75,'Reyniès','82'),(33407,75,'Canals','82'),(33408,75,'Labarthe','82'),(33409,75,'Valence','82'),(33410,75,'Nohic','82'),(33411,75,'Bruniquel','82'),(33412,75,'Maubec','82'),(33413,75,'Saint-Aignan','82'),(33414,75,'Donzac','82'),(33415,75,'Cumont','82'),(33416,75,'Bardigues','82'),(33417,75,'Mas-Grenier','82'),(33418,75,'Varennes','82'),(33419,75,'Saint-Antonin-Noble-Val','82'),(33420,75,'Castelsagrat','82'),(33421,75,'Merles','82'),(33422,75,'Lafrançaise','82'),(33423,75,'Labastide-Saint-Pierre','82'),(33424,75,'Balignac','82'),(33425,75,'Saint-Vincent-Lespinasse','82'),(33426,75,'Montalzat','82'),(33427,75,'Labastide-de-Penne','82'),(33428,75,'Labourgade','82'),(33429,75,'Montbarla','82'),(33430,75,'Barry-d\'Islemade','82'),(33431,75,'Loze','82'),(33432,75,'Lamothe-Capdeville','82'),(33433,75,'Bioule','82'),(33434,75,'Grisolles','82'),(33435,75,'Saint-Loup','82'),(33436,75,'Saint-Beauzeil','82'),(33437,75,'Laguépie','82'),(33438,75,'Chapelle','82'),(33439,75,'Goudourville','82'),(33440,75,'Lacourt-Saint-Pierre','82'),(33441,75,'Moissac','82'),(33442,75,'Angeville','82'),(33443,75,'Malause','82'),(33444,75,'Vazerac','82'),(33445,75,'Montaigu-de-Quercy','82'),(33446,75,'Saint-Porquier','82'),(33447,75,'Puygaillard-de-Quercy','82'),(33448,75,'Espalais','82'),(33449,75,'Comberouger','82'),(33450,75,'Piquecos','82'),(33451,75,'Poupas','82'),(33452,75,'Perville','82'),(33453,75,'Montfermier','82'),(33454,75,'Sérignac','82'),(33455,75,'Espinas','82'),(33456,75,'Campsas','82'),(33457,75,'Orgueil','82'),(33458,75,'Marsac','82'),(33459,75,'Finhan','82'),(33460,75,'La Ville-Dieu-du-Temple','82'),(33461,75,'Corbarieu','82'),(33462,75,'Lamothe-Cumont','82'),(33463,75,'Lavit','82'),(33464,75,'Roquecor','82'),(33465,75,'Le Causé','82'),(33466,75,'Saint-Nazaire-de-Valentane','82'),(33467,75,'Pompignan','82'),(33468,75,'Brassac','82'),(33469,75,'Saint-Arroumex','82'),(33470,75,'Lizac','82'),(33471,75,'Cazals','82'),(33472,75,'Lavaurette','82'),(33473,75,'Goas','82'),(33474,75,'Pommevic','82'),(33475,75,'La Salvetat-Belmontet','82'),(33476,75,'Escatalens','82'),(33477,75,'Gasques','82'),(33478,75,'Castéra-Bouzet','82'),(33479,75,'Esparsac','82'),(33480,75,'L\'Honor-de-Cos','82'),(33481,75,'Savenès','82'),(33482,75,'Vaïssac','82'),(33483,75,'Montgaillard','82'),(33484,75,'Caussade','82'),(33485,75,'Saint-Clair','82'),(33486,75,'Labastide-du-Temple','82'),(33487,75,'Faudoas','82'),(33488,75,'Bourret','82'),(33489,75,'Verfeil','82'),(33490,75,'Gramont','82'),(33491,75,'Albias','82'),(33492,75,'Vigueron','82'),(33493,75,'Montastruc','82'),(33494,75,'Belbèse','82'),(33495,75,'Touffailles','82'),(33496,75,'Féneyrols','82'),(33497,75,'Montain','82'),(33498,75,'Septfonds','82'),(33499,75,'Monclar-de-Quercy','82'),(33500,75,'Saint-Amans-de-Pellagal','82'),(33501,75,'Verdun-sur-Garonne','82'),(33502,75,'Fabas','82'),(33503,75,'Bessens','82'),(33504,75,'Montech','82'),(33505,75,'Bouillac','82'),(33506,75,'Cazes-Mondenard','82'),(33507,75,'Gariès','82'),(33508,75,'Sainte-Juliette','82'),(33509,75,'Molières','82'),(33510,75,'Dunes','82'),(33511,75,'Gensac','82'),(33512,75,'Barthes','82'),(33513,75,'Auvillar','82'),(33514,75,'Cayriech','82'),(33515,75,'Lacour','82'),(33516,75,'Léojac','82'),(33517,75,'Varen','82'),(33518,75,'Lacapelle-Livron','82'),(33519,75,'Villemade','82'),(33520,75,'Puylagarde','82'),(33521,75,'Puylaroque','82'),(33522,75,'Sauveterre','82'),(33523,75,'Montpezat-de-Quercy','82'),(33524,75,'Cordes-Tolosannes','82'),(33525,75,'Lapenche','82'),(33526,75,'Beaumont-de-Lomagne','82'),(33527,75,'Castelmayran','82'),(33528,75,'Puygaillard-de-Lomagne','82'),(33529,75,'Saint-Jean-du-Bouzet','82'),(33530,75,'Verlhac-Tescou','82'),(33531,75,'Parisot','82'),(33532,75,'Bouloc','82'),(33533,75,'Tréjouls','82'),(33534,75,'Caylus','82'),(33535,75,'Saint-Nicolas-de-la-Grave','82'),(33536,75,'Montesquieu','82'),(33537,75,'Villebrumier','82'),(33538,75,'Beaupuy','82'),(33539,75,'Sistels','82'),(33540,75,'Réalville','82'),(33541,75,'Ginals','82'),(33542,75,'Dieupentale','82'),(33543,75,'Bourg-de-Visa','82'),(33544,75,'Montbartier','82'),(33545,75,'Asques','82'),(33546,75,'Belvèze','82'),(33547,75,'Garganvillar','82'),(33548,75,'Nègrepelisse','82'),(33549,75,'Lamagistère','82'),(33550,75,'Glatens','82'),(33551,75,'Monbéqui','82'),(33552,75,'Valeilles','82'),(33553,75,'Aucamville','82'),(33554,75,'Miramont-de-Quercy','82'),(33555,75,'Mouillac','82'),(33556,75,'Lauzerte','82'),(33557,75,'Montauban','82'),(33558,75,'Castelferrus','82'),(33559,75,'Castanet','82'),(33560,75,'Fauroux','82'),(33561,75,'Boudou','82'),(33562,75,'Monteils','82'),(33563,75,'Le Pin','82'),(33564,75,'Larrazet','82'),(33565,75,'Seillons-Source-d\'Argens','83'),(33566,75,'Néoules','83'),(33567,75,'Solliès-Toucas','83'),(33568,75,'Cogolin','83'),(33569,75,'Villecroze','83'),(33570,75,'Le Cannet-des-Maures','83'),(33571,75,'Claviers','83'),(33572,75,'La Londe-les-Maures','83'),(33573,75,'Pontevès','83'),(33574,75,'Brue-Auriac','83'),(33575,75,'Régusse','83'),(33576,75,'Plan-d\'Aups-Sainte-Baume','83'),(33577,75,'Figanières','83'),(33578,75,'Sainte-Maxime','83'),(33579,75,'Solliès-Pont','83'),(33580,75,'Rians','83'),(33581,75,'Saint-Cyr-sur-Mer','83'),(33582,75,'Mazaugues','83'),(33583,75,'Cabasse','83'),(33584,75,'Nans-les-Pins','83'),(33585,75,'Cavalaire-sur-Mer','83'),(33586,75,'Flassans-sur-Issole','83'),(33587,75,'Ramatuelle','83'),(33588,75,'Le Thoronet','83'),(33589,75,'Saint-Zacharie','83'),(33590,75,'Le Bourguet','83'),(33591,75,'La Garde','83'),(33592,75,'Puget-sur-Argens','83'),(33593,75,'Sanary-sur-Mer','83'),(33594,75,'Bras','83'),(33595,75,'Hyères','83'),(33596,75,'La Valette-du-Var','83'),(33597,75,'Méounes-lès-Montrieux','83'),(33598,75,'Ollioules','83'),(33599,75,'Sillans-la-Cascade','83'),(33600,75,'Saint-Maximin-la-Sainte-Baume','83'),(33601,75,'Saint-Antonin-du-Var','83'),(33602,75,'Callian','83'),(33603,75,'Solliès-Ville','83'),(33604,75,'Rayol-Canadel-sur-Mer','83'),(33605,75,'La Celle','83'),(33606,75,'Le Plan-de-la-Tour','83'),(33607,75,'Vins-sur-Caramy','83'),(33608,75,'Flayosc','83'),(33609,75,'Bauduen','83'),(33610,75,'Camps-la-Source','83'),(33611,75,'Bargemon','83'),(33612,75,'Tanneron','83'),(33613,75,'Fox-Amphoux','83'),(33614,75,'Aups','83'),(33615,75,'Taradeau','83'),(33616,75,'Saint-Julien','83'),(33617,75,'La Martre','83'),(33618,75,'Lorgues','83'),(33619,75,'Arcs','83'),(33620,75,'Roquebrune-sur-Argens','83'),(33621,75,'Entrecasteaux','83'),(33622,75,'Callas','83'),(33623,75,'Ollières','83'),(33624,75,'Rougiers','83'),(33625,75,'Pourcieux','83'),(33626,75,'Évenos','83'),(33627,75,'Carnoules','83'),(33628,75,'Le Pradet','83'),(33629,75,'Bargème','83'),(33630,75,'Bormes-les-Mimosas','83'),(33631,75,'Seillans','83'),(33632,75,'Pourrières','83'),(33633,75,'Pignans','83'),(33634,75,'Carqueiranne','83'),(33635,75,'Tavernes','83'),(33636,75,'Adrets-de-l\'Estérel','83'),(33637,75,'Fayence','83'),(33638,75,'Six-Fours-les-Plages','83'),(33639,75,'Châteauvieux','83'),(33640,75,'Carcès','83'),(33641,75,'Vidauban','83'),(33642,75,'Garéoult','83'),(33643,75,'Varages','83'),(33644,75,'Draguignan','83'),(33645,75,'Saint-Martin','83'),(33646,75,'Esparron','83'),(33647,75,'Barjols','83'),(33648,75,'Montauroux','83'),(33649,75,'Saint-Paul-en-Forêt','83'),(33650,75,'Moissac-Bellevue','83'),(33651,75,'Le Val','83'),(33652,75,'Trans-en-Provence','83'),(33653,75,'Le Muy','83'),(33654,75,'Fréjus','83'),(33655,75,'Correns','83'),(33656,75,'Signes','83'),(33657,75,'La Roquebrussanne','83'),(33658,75,'Riboux','83'),(33659,75,'Châteauvert','83'),(33660,75,'Montmeyan','83'),(33661,75,'Montferrat','83'),(33662,75,'Vérignon','83'),(33663,75,'Cuers','83'),(33664,75,'Grimaud','83'),(33665,75,'Besse-sur-Issole','83'),(33666,75,'Mons','83'),(33667,75,'Comps-sur-Artuby','83'),(33668,75,'La Crau','83'),(33669,75,'Tourrettes','83'),(33670,75,'Le Lavandou','83'),(33671,75,'Salernes','83'),(33672,75,'Salles-sur-Verdon','83'),(33673,75,'Gassin','83'),(33674,75,'Baudinard-sur-Verdon','83'),(33675,75,'Forcalqueiret','83'),(33676,75,'La Motte','83'),(33677,75,'Toulon','83'),(33678,75,'La Môle','83'),(33679,75,'Puget-Ville','83'),(33680,75,'Le Beausset','83'),(33681,75,'La Verdière','83'),(33682,75,'La Cadière-d\'Azur','83'),(33683,75,'Belgentier','83'),(33684,75,'Châteaudouble','83'),(33685,75,'Aiguines','83'),(33686,75,'Tourtour','83'),(33687,75,'Brignoles','83'),(33688,75,'Saint-Raphaël','83'),(33689,75,'Collobrières','83'),(33690,75,'Sainte-Anastasie-sur-Issole','83'),(33691,75,'La Garde-Freinet','83'),(33692,75,'La Croix-Valmer','83'),(33693,75,'Rocbaron','83'),(33694,75,'Le Luc','83'),(33695,75,'La Bastide','83'),(33696,75,'Brenon','83'),(33697,75,'Artignosc-sur-Verdon','83'),(33698,75,'Montfort-sur-Argens','83'),(33699,75,'Artigues','83'),(33700,75,'Gonfaron','83'),(33701,75,'Cotignac','83'),(33702,75,'Tourves','83'),(33703,75,'Saint-Tropez','83'),(33704,75,'Pierrefeu-du-Var','83'),(33705,75,'Le Revest-les-Eaux','83'),(33706,75,'La Farlède','83'),(33707,75,'Saint-Mandrier-sur-Mer','83'),(33708,75,'Le Castellet','83'),(33709,75,'Bandol','83'),(33710,75,'Ampus','83'),(33711,75,'La Seyne-sur-Mer','83'),(33712,75,'La Roque-Esclapon','83'),(33713,75,'Vinon-sur-Verdon','83'),(33714,75,'Bagnols-en-Forêt','83'),(33715,75,'Mayons','83'),(33716,75,'Trigance','83'),(33717,75,'Ginasservis','83'),(33718,75,'Villes-sur-Auzon','84'),(33719,75,'Visan','84'),(33720,75,'Rasteau','84'),(33721,75,'Saint-Saturnin-lès-Apt','84'),(33722,75,'Bédarrides','84'),(33723,75,'Brantes','84'),(33724,75,'Oppède','84'),(33725,75,'Uchaux','84'),(33726,75,'Saignon','84'),(33727,75,'Bédoin','84'),(33728,75,'Saint-Martin-de-Castillon','84'),(33729,75,'Caromb','84'),(33730,75,'Malaucène','84'),(33731,75,'Grillon','84'),(33732,75,'Saint-Pierre-de-Vassols','84'),(33733,75,'Lioux','84'),(33734,75,'Castellet','84'),(33735,75,'Cabrières-d\'Aigues','84'),(33736,75,'Mormoiron','84'),(33737,75,'Villelaure','84'),(33738,75,'Le Pontet','84'),(33739,75,'Saint-Trinit','84'),(33740,75,'Faucon','84'),(33741,75,'Saint-Christol','84'),(33742,75,'Mérindol','84'),(33743,75,'Châteauneuf-du-Pape','84'),(33744,75,'Cavaillon','84'),(33745,75,'Beaumes-de-Venise','84'),(33746,75,'Modène','84'),(33747,75,'Méthamis','84'),(33748,75,'Lamotte-du-Rhône','84'),(33749,75,'Vedène','84'),(33750,75,'Cadenet','84'),(33751,75,'La Tour-d\'Aigues','84'),(33752,75,'Althen-des-Paluds','84'),(33753,75,'Morières-lès-Avignon','84'),(33754,75,'Puyméras','84'),(33755,75,'Caumont-sur-Durance','84'),(33756,75,'Jonquières','84'),(33757,75,'Richerenches','84'),(33758,75,'Peypin-d\'Aigues','84'),(33759,75,'Pernes-les-Fontaines','84'),(33760,75,'Sannes','84'),(33761,75,'Le Barroux','84'),(33762,75,'Lafare','84'),(33763,75,'Sarrians','84'),(33764,75,'Sorgues','84'),(33765,75,'La Bastide-des-Jourdans','84'),(33766,75,'Violès','84'),(33767,75,'Viens','84'),(33768,75,'Camaret-sur-Aigues','84'),(33769,75,'Blauvac','84'),(33770,75,'Vitrolles-en-Lubéron','84'),(33771,75,'Lagarde-Paréol','84'),(33772,75,'Lagnes','84'),(33773,75,'Vacqueyras','84'),(33774,75,'Puget','84'),(33775,75,'Malemort-du-Comtat','84'),(33776,75,'Auribeau','84'),(33777,75,'Gigondas','84'),(33778,75,'Villars','84'),(33779,75,'Rustrel','84'),(33780,75,'Séguret','84'),(33781,75,'Saint-Marcellin-lès-Vaison','84'),(33782,75,'Mondragon','84'),(33783,75,'Cabrières-d\'Avignon','84'),(33784,75,'Saint-Saturnin-lès-Avignon','84'),(33785,75,'Savoillan','84'),(33786,75,'Châteauneuf-de-Gadagne','84'),(33787,75,'Robion','84'),(33788,75,'Entrechaux','84'),(33789,75,'Roaix','84'),(33790,75,'Gordes','84'),(33791,75,'Saint-Roman-de-Malegarde','84'),(33792,75,'Mornas','84'),(33793,75,'Sault','84'),(33794,75,'Ansouis','84'),(33795,75,'L\'Isle-sur-la-Sorgue','84'),(33796,75,'Goult','84'),(33797,75,'Piolenc','84'),(33798,75,'Lourmarin','84'),(33799,75,'Saint-Romain-en-Viennois','84'),(33800,75,'Ménerbes','84'),(33801,75,'Valréas','84'),(33802,75,'Gignac','84'),(33803,75,'Bonnieux','84'),(33804,75,'Buoux','84'),(33805,75,'Vaugines','84'),(33806,75,'Puyvert','84'),(33807,75,'Carpentras','84'),(33808,75,'Courthézon','84'),(33809,75,'Beaumont-du-Ventoux','84'),(33810,75,'Buisson','84'),(33811,75,'Sablet','84'),(33812,75,'Entraigues-sur-la-Sorgue','84'),(33813,75,'Saint-Pantaléon','84'),(33814,75,'Murs','84'),(33815,75,'Mirabeau','84'),(33816,75,'Lagarde-d\'Apt','84'),(33817,75,'Saumane-de-Vaucluse','84'),(33818,75,'Venasque','84'),(33819,75,'Velleron','84'),(33820,75,'Mazan','84'),(33821,75,'Caseneuve','84'),(33822,75,'Le Beaucet','84'),(33823,75,'Sérignan-du-Comtat','84'),(33824,75,'Taillades','84'),(33825,75,'Aubignan','84'),(33826,75,'Fontaine-de-Vaucluse','84'),(33827,75,'La Motte-d\'Aigues','84'),(33828,75,'Monieux','84'),(33829,75,'La Bastidonne','84'),(33830,75,'Beaumont-de-Pertuis','84'),(33831,75,'Bollène','84'),(33832,75,'Villedieu','84'),(33833,75,'Monteux','84'),(33834,75,'Flassan','84'),(33835,75,'La Roque-sur-Pernes','84'),(33836,75,'Roussillon','84'),(33837,75,'Orange','84'),(33838,75,'Avignon','84'),(33839,75,'Aurel','84'),(33840,75,'Saint-Léger-du-Ventoux','84'),(33841,75,'La Roque-Alric','84'),(33842,75,'Saint-Martin-de-la-Brasque','84'),(33843,75,'Sivergues','84'),(33844,75,'Jonquerettes','84'),(33845,75,'Beaumettes','84'),(33846,75,'Cairanne','84'),(33847,75,'Pertuis','84'),(33848,75,'Maubec','84'),(33849,75,'Le Thor','84'),(33850,75,'Suzette','84'),(33851,75,'Lacoste','84'),(33852,75,'Grambois','84'),(33853,75,'Travaillan','84'),(33854,75,'Apt','84'),(33855,75,'Sainte-Cécile-les-Vignes','84'),(33856,75,'Lauris','84'),(33857,75,'Vaison-la-Romaine','84'),(33858,75,'Cucuron','84'),(33859,75,'Lapalud','84'),(33860,75,'Caderousse','84'),(33861,75,'Loriol-du-Comtat','84'),(33862,75,'Crestet','84'),(33863,75,'Saint-Hippolyte-le-Graveyron','84'),(33864,75,'Crillon-le-Brave','84'),(33865,75,'Joucas','84'),(33866,75,'Gargas','84'),(33867,75,'Saint-Didier','84'),(33868,75,'Cheval-Blanc','84'),(33869,75,'La Gaubretière','85'),(33870,75,'Damvix','85'),(33871,75,'Saint-Hilaire-de-Loulay','85'),(33872,75,'Sainte-Radégonde-des-Noyers','85'),(33873,75,'Bretignolles-sur-Mer','85'),(33874,75,'Mormaison','85'),(33875,75,'La Jonchère','85'),(33876,75,'Liez','85'),(33877,75,'Vairé','85'),(33878,75,'Saint-Martin-de-Fraigneau','85'),(33879,75,'Vouvant','85'),(33880,75,'Saint-Vincent-Sterlanges','85'),(33881,75,'Breuil-Barret','85'),(33882,75,'Poiroux','85'),(33883,75,'Saint-Jean-de-Beugné','85'),(33884,75,'Loge-Fougereuse','85'),(33885,75,'Lairoux','85'),(33886,75,'Saint-Vincent-sur-Graon','85'),(33887,75,'Saint-Germain-de-Prinçay','85'),(33888,75,'La Guyonnière','85'),(33889,75,'Le Poiré-sur-Velluire','85'),(33890,75,'Saligny','85'),(33891,75,'Saint-Sulpice-en-Pareds','85'),(33892,75,'Landeronde','85'),(33893,75,'Talmont-Saint-Hilaire','85'),(33894,75,'Saint-Valérien','85'),(33895,75,'Fontaines','85'),(33896,75,'Auzay','85'),(33897,75,'Le Poiré-sur-Vie','85'),(33898,75,'Saint-Benoist-sur-Mer','85'),(33899,75,'Réaumur','85'),(33900,75,'Saint-Georges-de-Montaigu','85'),(33901,75,'Maillezais','85'),(33902,75,'Saint-Laurent-sur-Sèvre','85'),(33903,75,'Rocheservière','85'),(33904,75,'Bois-de-Céné','85'),(33905,75,'Saint-Georges-de-Pointindoux','85'),(33906,75,'Saint-André-Treize-Voies','85'),(33907,75,'Mallièvre','85'),(33908,75,'Belleville-sur-Vie','85'),(33909,75,'Mesnard-la-Barotière','85'),(33910,75,'Saint-Juire-Champgillon','85'),(33911,75,'La Chapelle-Thémer','85'),(33912,75,'Saint-Paul-Mont-Penit','85'),(33913,75,'Moutiers-les-Mauxfaits','85'),(33914,75,'La Couture','85'),(33915,75,'Château-d\'Olonne','85'),(33916,75,'Saint-Mars-la-Réorthe','85'),(33917,75,'Coëx','85'),(33918,75,'Cheffois','85'),(33919,75,'Saint-Sulpice-le-Verdon','85'),(33920,75,'Le Givre','85'),(33921,75,'Velluire','85'),(33922,75,'Saint-Maixent-sur-Vie','85'),(33923,75,'L\'Île-d\'Elle','85'),(33924,75,'Saint-Michel-le-Cloucq','85'),(33925,75,'Mareuil-sur-Lay-Dissais','85'),(33926,75,'Saint-Jean-de-Monts','85'),(33927,75,'Saint-Mathurin','85'),(33928,75,'Rosnay','85'),(33929,75,'La Genétouze','85'),(33930,75,'La Copechagnière','85'),(33931,75,'Mervent','85'),(33932,75,'Saint-Aubin-des-Ormeaux','85'),(33933,75,'La Chapelle-Achard','85'),(33934,75,'Pineaux','85'),(33935,75,'Le Fenouiller','85'),(33936,75,'Saint-Hilaire-la-Forêt','85'),(33937,75,'Sainte-Foy','85'),(33938,75,'Beaulieu-sous-la-Roche','85'),(33939,75,'La Tranche-sur-Mer','85'),(33940,75,'Monsireigne','85'),(33941,75,'Sainte-Pexine','85'),(33942,75,'Saint-Denis-du-Payré','85'),(33943,75,'La Réorthe','85'),(33944,75,'Vix','85'),(33945,75,'Saint-André-Goule-d\'Oie','85'),(33946,75,'Chavagnes-en-Paillers','85'),(33947,75,'Grand\'Landes','85'),(33948,75,'Saint-Denis-la-Chevasse','85'),(33949,75,'Grosbreuil','85'),(33950,75,'Bazoges-en-Paillers','85'),(33951,75,'La Bernardière','85'),(33952,75,'L\'Herbergement','85'),(33953,75,'La Pommeraie-sur-Sèvre','85'),(33954,75,'Chaillé-sous-les-Ormeaux','85'),(33955,75,'Longèves','85'),(33956,75,'Moreilles','85'),(33957,75,'Nieul-le-Dolent','85'),(33958,75,'Bouin','85'),(33959,75,'Fontenay-le-Comte','85'),(33960,75,'Notre-Dame-de-Riez','85'),(33961,75,'Péault','85'),(33962,75,'Saint-Michel-en-l\'Herm','85'),(33963,75,'Le Girouard','85'),(33964,75,'Sainte-Florence','85'),(33965,75,'La Rabatelière','85'),(33966,75,'La Tardière','85'),(33967,75,'Palluau','85'),(33968,75,'L\'Île-d\'Olonne','85'),(33969,75,'Saint-Martin-des-Tilleuls','85'),(33970,75,'La Bretonnière-la-Claye','85'),(33971,75,'Saint-Malô-du-Bois','85'),(33972,75,'Olonne-sur-Mer','85'),(33973,75,'Saint-Hilaire-de-Voust','85'),(33974,75,'L\'Aiguillon-sur-Mer','85'),(33975,75,'Saint-Martin-Lars-en-Sainte-Hermine','85'),(33976,75,'Bouillé-Courdault','85'),(33977,75,'La Caillère-Saint-Hilaire','85'),(33978,75,'Pouzauges','85'),(33979,75,'Essarts','85'),(33980,75,'Mouilleron-le-Captif','85'),(33981,75,'Foussais-Payré','85'),(33982,75,'Dompierre-sur-Yon','85'),(33983,75,'Challans','85'),(33984,75,'La Chapelle-Hermier','85'),(33985,75,'Doix','85'),(33986,75,'Saint-Germain-l\'Aiguiller','85'),(33987,75,'La Taillée','85'),(33988,75,'La Chaize-Giraud','85'),(33989,75,'Sallertaine','85'),(33990,75,'Givrand','85'),(33991,75,'Saint-Martin-des-Fontaines','85'),(33992,75,'Châteauneuf','85'),(33993,75,'Saint-Urbain','85'),(33994,75,'Apremont','85'),(33995,75,'Sainte-Hermine','85'),(33996,75,'Sérigné','85'),(33997,75,'La Garnache','85'),(33998,75,'Saint-Vincent-sur-Jard','85'),(33999,75,'L\'Oie','85'),(34000,75,'Treize-Vents','85'),(34001,75,'La Verrie','85'),(34002,75,'Saint-Cyr-des-Gâts','85'),(34003,75,'Commequiers','85'),(34004,75,'Corpe','85'),(34005,75,'Rochetrejoux','85'),(34006,75,'Luçon','85'),(34007,75,'L\'Épine','85'),(34008,75,'Oulmes','85'),(34009,75,'Sainte-Cécile','85'),(34010,75,'Thouarsais-Bouildroux','85'),(34011,75,'Longeville-sur-Mer','85'),(34012,75,'Sables-d\'Olonne','85'),(34013,75,'Bournezeau','85'),(34014,75,'Saint-Laurent-de-la-Salle','85'),(34015,75,'Saint-Maurice-le-Girard','85'),(34016,75,'Faymoreau','85'),(34017,75,'Clouzeaux','85'),(34018,75,'La Roche-sur-Yon','85'),(34019,75,'Antigny','85'),(34020,75,'Thorigny','85'),(34021,75,'La Flocellière','85'),(34022,75,'Saint-Gilles-Croix-de-Vie','85'),(34023,75,'Brouzils','85'),(34024,75,'Angles','85'),(34025,75,'Saint-Aubin-la-Plaine','85'),(34026,75,'Falleron','85'),(34027,75,'Chaix','85'),(34028,75,'Marillet','85'),(34029,75,'La Meilleraie-Tillay','85'),(34030,75,'Maché','85'),(34031,75,'Chasnais','85'),(34032,75,'Saint-Maurice-des-Noues','85'),(34033,75,'Marsais-Sainte-Radégonde','85'),(34034,75,'Le Gué-de-Velluire','85'),(34035,75,'Soullans','85'),(34036,75,'Brem-sur-Mer','85'),(34037,75,'Chauché','85'),(34038,75,'Saint-Cyr-en-Talmondais','85'),(34039,75,'Saint-Gervais','85'),(34040,75,'La Mothe-Achard','85'),(34041,75,'Saint-Fulgent','85'),(34042,75,'Landes-Genusson','85'),(34043,75,'Saint-Pierre-le-Vieux','85'),(34044,75,'Xanton-Chassenon','85'),(34045,75,'Moutiers-sur-le-Lay','85'),(34046,75,'Chantonnay','85'),(34047,75,'Lucs-sur-Boulogne','85'),(34048,75,'Mortagne-sur-Sèvre','85'),(34049,75,'Saint-Révérend','85'),(34050,75,'Montournais','85'),(34051,75,'Saint-Florent-des-Bois','85'),(34052,75,'Froidfond','85'),(34053,75,'Landevieille','85'),(34054,75,'Chambretaud','85'),(34055,75,'La Jaudonnière','85'),(34056,75,'Saint-Hilaire-de-Riez','85'),(34057,75,'Le Mazeau','85'),(34058,75,'Magnils-Reigniers','85'),(34059,75,'Saint-Julien-des-Landes','85'),(34060,75,'Saint-Philbert-de-Bouaine','85'),(34061,75,'Saint-Sigismond','85'),(34062,75,'Le Champ-Saint-Père','85'),(34063,75,'Chaillé-les-Marais','85'),(34064,75,'Jard-sur-Mer','85'),(34065,75,'Epesses','85'),(34066,75,'Vouillé-les-Marais','85'),(34067,75,'La Chapelle-Palluau','85'),(34068,75,'Saint-Avaugourd-des-Landes','85'),(34069,75,'La Châtaigneraie','85'),(34070,75,'L\'Île-d\'Yeu','85'),(34071,75,'Venansault','85'),(34072,75,'Treize-Septiers','85'),(34073,75,'Saint-Christophe-du-Ligneron','85'),(34074,75,'Beauvoir-sur-Mer','85'),(34075,75,'La Chapelle-aux-Lys','85'),(34076,75,'Tallud-Sainte-Gemme','85'),(34077,75,'La Chaize-le-Vicomte','85'),(34078,75,'Nesmy','85'),(34079,75,'Bazoges-en-Pareds','85'),(34080,75,'Herbiers','85'),(34081,75,'Châtelliers-Châteaumur','85'),(34082,75,'Saint-Mesmin','85'),(34083,75,'L\'Hermenault','85'),(34084,75,'Sigournais','85'),(34085,75,'Chavagnes-les-Redoux','85'),(34086,75,'Château-Guibert','85'),(34087,75,'Pouillé','85'),(34088,75,'Nalliers','85'),(34089,75,'Avrillé','85'),(34090,75,'Bourneau','85'),(34091,75,'Montreuil','85'),(34092,75,'Mouilleron-en-Pareds','85'),(34093,75,'Menomblet','85'),(34094,75,'Boulogne','85'),(34095,75,'La Faute-sur-Mer','85'),(34096,75,'Grues','85'),(34097,75,'Le Bernard','85'),(34098,75,'Montaigu','85'),(34099,75,'La Boissière-de-Montaigu','85'),(34100,75,'L\'Orbrie','85'),(34101,75,'Sainte-Flaive-des-Loups','85'),(34102,75,'Maillé','85'),(34103,75,'Puyravault','85'),(34104,75,'La Bruffière','85'),(34105,75,'La Guérinière','85'),(34106,75,'Pissotte','85'),(34107,75,'Martinet','85'),(34108,75,'Cezais','85'),(34109,75,'Aubigny','85'),(34110,75,'Saint-Étienne-de-Brillouet','85'),(34111,75,'Curzon','85'),(34112,75,'Triaize','85'),(34113,75,'Champagné-les-Marais','85'),(34114,75,'Mouchamps','85'),(34115,75,'Sainte-Gemme-la-Plaine','85'),(34116,75,'Beaurepaire','85'),(34117,75,'Le Langon','85'),(34118,75,'Le Perrier','85'),(34119,75,'Saint-Paul-en-Pareds','85'),(34120,75,'Mouzeuil-Saint-Martin','85'),(34121,75,'Puy-de-Serre','85'),(34122,75,'Tiffauges','85'),(34123,75,'Noirmoutier-en-l\'Île','85'),(34124,75,'Le Tablier','85'),(34125,75,'Saint-Hilaire-des-Loges','85'),(34126,75,'Nieul-sur-l\'Autise','85'),(34127,75,'Saint-Prouant','85'),(34128,75,'Vendrennes','85'),(34129,75,'Le Boupère','85'),(34130,75,'Aizenay','85'),(34131,75,'La Boissière-des-Landes','85'),(34132,75,'Fougeré','85'),(34133,75,'Benet','85'),(34134,75,'Cugand','85'),(34135,75,'Saint-Étienne-du-Bois','85'),(34136,75,'Saint-Martin-des-Noyers','85'),(34137,75,'Saint-Hilaire-le-Vouhis','85'),(34138,75,'Saint-Pierre-du-Chemin','85'),(34139,75,'Beaufou','85'),(34140,75,'Petosse','85'),(34141,75,'Thiré','85'),(34142,75,'Bessay','85'),(34143,75,'La Merlatière','85'),(34144,75,'Notre-Dame-de-Monts','85'),(34145,75,'Boufféré','85'),(34146,75,'Barbâtre','85'),(34147,75,'La Barre-de-Monts','85'),(34148,75,'Saint-Michel-Mont-Mercure','85'),(34149,75,'La Ferrière','85'),(34150,75,'L\'Aiguillon-sur-Vie','85'),(34151,75,'Paizay-le-Sec','86'),(34152,75,'Mignaloux-Beauvoir','86'),(34153,75,'Saïx','86'),(34154,75,'Ligugé','86'),(34155,75,'Vouzailles','86'),(34156,75,'La Puye','86'),(34157,75,'Voulon','86'),(34158,75,'Celle-Lévescault','86'),(34159,75,'Coussay','86'),(34160,75,'Payré','86'),(34161,75,'Coulombiers','86'),(34162,75,'Chatain','86'),(34163,75,'Craon','86'),(34164,75,'Dienne','86'),(34165,75,'Ceaux-en-Couhé','86'),(34166,75,'La Bussière','86'),(34167,75,'Magné','86'),(34168,75,'Aulnay','86'),(34169,75,'Pindray','86'),(34170,75,'Ouzilly','86'),(34171,75,'Mairé','86'),(34172,75,'Amberre','86'),(34173,75,'Saint-Rémy-sur-Creuse','86'),(34174,75,'Chalandray','86'),(34175,75,'Trois-Moutiers','86'),(34176,75,'Chiré-en-Montreuil','86'),(34177,75,'Leugny','86'),(34178,75,'Vernon','86'),(34179,75,'Antran','86'),(34180,75,'Le Rochereau','86'),(34181,75,'Millac','86'),(34182,75,'Le Vigeant','86'),(34183,75,'Mazeuil','86'),(34184,75,'La Chapelle-Bâton','86'),(34185,75,'Cherves','86'),(34186,75,'Gizay','86'),(34187,75,'Luchapt','86'),(34188,75,'Jardres','86'),(34189,75,'Port-de-Piles','86'),(34190,75,'Montmorillon','86'),(34191,75,'Ceaux-en-Loudun','86'),(34192,75,'Ormes','86'),(34193,75,'Chabournay','86'),(34194,75,'Availles-en-Châtellerault','86'),(34195,75,'Pleumartin','86'),(34196,75,'Avanton','86'),(34197,75,'La Roche-Rigault','86'),(34198,75,'Voulême','86'),(34199,75,'La Trimouille','86'),(34200,75,'Roiffé','86'),(34201,75,'Chapelle-Viviers','86'),(34202,75,'Saint-Saviol','86'),(34203,75,'Berthegon','86'),(34204,75,'Prinçay','86'),(34205,75,'Vendeuvre-du-Poitou','86'),(34206,75,'Morton','86'),(34207,75,'Châtillon','86'),(34208,75,'Leigné-sur-Usseau','86'),(34209,75,'Saint-Clair','86'),(34210,75,'Genouillé','86'),(34211,75,'Moussac','86'),(34212,75,'La Chaussée','86'),(34213,75,'Vouneuil-sous-Biard','86'),(34214,75,'Saint-Macoux','86'),(34215,75,'Chasseneuil-du-Poitou','86'),(34216,75,'Lavoux','86'),(34217,75,'Montreuil-Bonnin','86'),(34218,75,'Lésigny','86'),(34219,75,'La Grimaudière','86'),(34220,75,'Jazeneuil','86'),(34221,75,'Pouant','86'),(34222,75,'Lusignan','86'),(34223,75,'Buxerolles','86'),(34224,75,'Liglet','86'),(34225,75,'Jaunay-Clan','86'),(34226,75,'Béthines','86'),(34227,75,'Leignes-sur-Fontaine','86'),(34228,75,'Sérigny','86'),(34229,75,'Civray','86'),(34230,75,'Thuré','86'),(34231,75,'Brion','86'),(34232,75,'Saint-Léger-de-Montbrillais','86'),(34233,75,'Queaux','86'),(34234,75,'Naintré','86'),(34235,75,'Blanzay','86'),(34236,75,'Dissay','86'),(34237,75,'Liniers','86'),(34238,75,'Maisonneuve','86'),(34239,75,'La Roche-Posay','86'),(34240,75,'Chouppes','86'),(34241,75,'Linazay','86'),(34242,75,'Bournand','86'),(34243,75,'Poitiers','86'),(34244,75,'Fontaine-le-Comte','86'),(34245,75,'Nouaillé-Maupertuis','86'),(34246,75,'Saint-Romain','86'),(34247,75,'Champagné-Saint-Hilaire','86'),(34248,75,'Charrais','86'),(34249,75,'Civaux','86'),(34250,75,'Moulismes','86'),(34251,75,'Gençay','86'),(34252,75,'Cuhon','86'),(34253,75,'Marnay','86'),(34254,75,'Journet','86'),(34255,75,'Vouillé','86'),(34256,75,'Saint-Laurent-de-Jourdes','86'),(34257,75,'Maulay','86'),(34258,75,'Saint-Gaudent','86'),(34259,75,'Saint-Savin','86'),(34260,75,'Surin','86'),(34261,75,'Mirebeau','86'),(34262,75,'Messemé','86'),(34263,75,'Saires','86'),(34264,75,'Bellefonds','86'),(34265,75,'Scorbé-Clairvaux','86'),(34266,75,'Joussé','86'),(34267,75,'Charroux','86'),(34268,75,'Saint-Maurice-la-Clouère','86'),(34269,75,'Asnois','86'),(34270,75,'Sammarçolles','86'),(34271,75,'Jouhet','86'),(34272,75,'Bonneuil-Matours','86'),(34273,75,'Ranton','86'),(34274,75,'Savigny-Lévescault','86'),(34275,75,'Chalais','86'),(34276,75,'Loudun','86'),(34277,75,'Archigny','86'),(34278,75,'Arçay','86'),(34279,75,'Benassay','86'),(34280,75,'Vaux-sur-Vienne','86'),(34281,75,'Bouresse','86'),(34282,75,'Coulonges','86'),(34283,75,'Couhé','86'),(34284,75,'Gouex','86'),(34285,75,'Plaisance','86'),(34286,75,'Payroux','86'),(34287,75,'Beaumont','86'),(34288,75,'Asnières-sur-Blour','86'),(34289,75,'Montamisé','86'),(34290,75,'Oyré','86'),(34291,75,'Martaizé','86'),(34292,75,'Chenevelles','86'),(34293,75,'Curzay-sur-Vonne','86'),(34294,75,'Romagne','86'),(34295,75,'Saint-Pierre-de-Maillé','86'),(34296,75,'Château-Garnier','86'),(34297,75,'Bourg-Archambault','86'),(34298,75,'Vézières','86'),(34299,75,'Anché','86'),(34300,75,'Champagné-le-Sec','86'),(34301,75,'Aslonnes','86'),(34302,75,'Persac','86'),(34303,75,'Saint-Laon','86'),(34304,75,'Leigné-les-Bois','86'),(34305,75,'Pouançay','86'),(34306,75,'La Ferrière-Airoux','86'),(34307,75,'Usson-du-Poitou','86'),(34308,75,'Cissé','86'),(34309,75,'Mouterre-sur-Blourde','86'),(34310,75,'Dangé-Saint-Romain','86'),(34311,75,'Brux','86'),(34312,75,'Villiers','86'),(34313,75,'Mondion','86'),(34314,75,'Frozes','86'),(34315,75,'Coussay-les-Bois','86'),(34316,75,'Guesnes','86'),(34317,75,'Saint-Gervais-les-Trois-Clochers','86'),(34318,75,'Nueil-sous-Faye','86'),(34319,75,'Villemort','86'),(34320,75,'Latillé','86'),(34321,75,'Colombiers','86'),(34322,75,'Pouillé','86'),(34323,75,'Saint-Georges-lès-Baillargeaux','86'),(34324,75,'Brigueil-le-Chantre','86'),(34325,75,'Mouterre-Silly','86'),(34326,75,'Verrières','86'),(34327,75,'Fleix','86'),(34328,75,'L\'Isle-Jourdain','86'),(34329,75,'Availles-Limouzine','86'),(34330,75,'Blaslay','86'),(34331,75,'Neuville-de-Poitou','86'),(34332,75,'Saint-Benoît','86'),(34333,75,'Usseau','86'),(34334,75,'Beuxes','86'),(34335,75,'Lauthiers','86'),(34336,75,'Vellèches','86'),(34337,75,'Maillé','86'),(34338,75,'Saint-Jean-de-Sauves','86'),(34339,75,'Thurageau','86'),(34340,75,'Sainte-Radegonde','86'),(34341,75,'Adriers','86'),(34342,75,'Orches','86'),(34343,75,'Senillé','86'),(34344,75,'Sanxay','86'),(34345,75,'Savigny-sous-Faye','86'),(34346,75,'Quinçay','86'),(34347,75,'Saulgé','86'),(34348,75,'Sèvres-Anxaumont','86'),(34349,75,'Nieuil-l\'Espoir','86'),(34350,75,'Lhommaizé','86'),(34351,75,'Sommières-du-Clain','86'),(34352,75,'Saint-Sauveur','86'),(34353,75,'La Chapelle-Moulière','86'),(34354,75,'Châtellerault','86'),(34355,75,'Roches-Prémarie-Andillé','86'),(34356,75,'Vicq-sur-Gartempe','86'),(34357,75,'Saint-Pierre-d\'Exideuil','86'),(34358,75,'Ingrandes','86'),(34359,75,'Saint-Martin-l\'Ars','86'),(34360,75,'Lizant','86'),(34361,75,'Curçay-sur-Dive','86'),(34362,75,'Pressac','86'),(34363,75,'Angles-sur-l\'Anglin','86'),(34364,75,'Saint-Sauvant','86'),(34365,75,'Verrue','86'),(34366,75,'Vaux','86'),(34367,75,'Massognes','86'),(34368,75,'Lavausseau','86'),(34369,75,'Yversay','86'),(34370,75,'Varennes','86'),(34371,75,'Saint-Christophe','86'),(34372,75,'Biard','86'),(34373,75,'Berrie','86'),(34374,75,'Ternay','86'),(34375,75,'Saint-Germain','86'),(34376,75,'Lathus-Saint-Rémy','86'),(34377,75,'Croutelle','86'),(34378,75,'Marigny-Chemereau','86'),(34379,75,'Nalliers','86'),(34380,75,'Rouillé','86'),(34381,75,'Mazerolles','86'),(34382,75,'Marçay','86'),(34383,75,'Cloué','86'),(34384,75,'Nérignac','86'),(34385,75,'Champniers','86'),(34386,75,'Saint-Léomer','86'),(34387,75,'Thollet','86'),(34388,75,'Château-Larcher','86'),(34389,75,'Chaunay','86'),(34390,75,'Migné-Auxances','86'),(34391,75,'Moncontour','86'),(34392,75,'Mauprévoir','86'),(34393,75,'Dercé','86'),(34394,75,'Champigny-le-Sec','86'),(34395,75,'Lencloître','86'),(34396,75,'La Villedieu-du-Clain','86'),(34397,75,'Saint-Julien-l\'Ars','86'),(34398,75,'La Chapelle-Montreuil','86'),(34399,75,'Monts-sur-Guesnes','86'),(34400,75,'Sillars','86'),(34401,75,'Ayron','86'),(34402,75,'Iteuil','86'),(34403,75,'Béruges','86'),(34404,75,'Antigny','86'),(34405,75,'Fleuré','86'),(34406,75,'Angliers','86'),(34407,75,'Cernay','86'),(34408,75,'Haims','86'),(34409,75,'Vivonne','86'),(34410,75,'Saint-Secondin','86'),(34411,75,'Sossais','86'),(34412,75,'Savigné','86'),(34413,75,'Raslay','86'),(34414,75,'Bonnes','86'),(34415,75,'Bignoux','86'),(34416,75,'Saint-Cyr','86'),(34417,75,'Cenon-sur-Vienne','86'),(34418,75,'Doussay','86'),(34419,75,'Buxeuil','86'),(34420,75,'Glénouze','86'),(34421,75,'Basses','86'),(34422,75,'Vouneuil-sur-Vienne','86'),(34423,75,'Tercé','86'),(34424,75,'Lussac-les-Châteaux','86'),(34425,75,'Chauvigny','86'),(34426,75,'Valdivienne','86'),(34427,75,'Cheneché','86'),(34428,75,'Saint-Genest-d\'Ambière','86'),(34429,75,'Monthoiron','86'),(34430,75,'Smarves','86'),(34431,75,'Marigny-Brizay','86'),(34432,75,'Saint-Sornin-Leulac','87'),(34433,75,'Salles-Lavauguyon','87'),(34434,75,'Saint-Ouen-sur-Gartempe','87'),(34435,75,'Saint-Martial-sur-Isop','87'),(34436,75,'Ladignac-le-Long','87'),(34437,75,'Saint-Pardoux','87'),(34438,75,'Javerdat','87'),(34439,75,'Lavignac','87'),(34440,75,'Saint-Bazile','87'),(34441,75,'Chalus','87'),(34442,75,'Saint-Auvent','87'),(34443,75,'Saint-Amand-Magnazeix','87'),(34444,75,'Rochechouart','87'),(34445,75,'Balledent','87'),(34446,75,'Saint-Germain-les-Belles','87'),(34447,75,'Saint-Yrieix-sous-Aixe','87'),(34448,75,'Le Vigen','87'),(34449,75,'Rilhac-Rancon','87'),(34450,75,'Coussac-Bonneval','87'),(34451,75,'Champsac','87'),(34452,75,'Meuzac','87'),(34453,75,'Bussière-Galant','87'),(34454,75,'Surdoux','87'),(34455,75,'Saint-Priest-Taurion','87'),(34456,75,'Nedde','87'),(34457,75,'Saint-Jean-Ligoure','87'),(34458,75,'Rempnat','87'),(34459,75,'Isle','87'),(34460,75,'Saint-Barbant','87'),(34461,75,'Videix','87'),(34462,75,'Moissannes','87'),(34463,75,'Beynac','87'),(34464,75,'Saint-Vitte-sur-Briance','87'),(34465,75,'Neuvic-Entier','87'),(34466,75,'Saint-Junien','87'),(34467,75,'Le Dorat','87'),(34468,75,'Grands-Chézeaux','87'),(34469,75,'Saint-Hilaire-la-Treille','87'),(34470,75,'Bujaleuf','87'),(34471,75,'Janailhac','87'),(34472,75,'Pageas','87'),(34473,75,'Veyrac','87'),(34474,75,'Feytiat','87'),(34475,75,'Saillat-sur-Vienne','87'),(34476,75,'La Geneytouse','87'),(34477,75,'Glanges','87'),(34478,75,'Bonnac-la-Côte','87'),(34479,75,'Saint-Bonnet-Briance','87'),(34480,75,'Champagnac-la-Rivière','87'),(34481,75,'Linards','87'),(34482,75,'Le Buis','87'),(34483,75,'Magnac-Bourg','87'),(34484,75,'Eyjeaux','87'),(34485,75,'Fromental','87'),(34486,75,'Châteauponsac','87'),(34487,75,'Mézières-sur-Issoire','87'),(34488,75,'Limoges','87'),(34489,75,'Saint-Gence','87'),(34490,75,'Saint-Cyr','87'),(34491,75,'Saint-Yrieix-la-Perche','87'),(34492,75,'Oradour-sur-Vayres','87'),(34493,75,'Droux','87'),(34494,75,'Mailhac-sur-Benaize','87'),(34495,75,'Maisonnais-sur-Tardoire','87'),(34496,75,'Folles','87'),(34497,75,'Flavignac','87'),(34498,75,'Boisseuil','87'),(34499,75,'La Chapelle-Montbrandeix','87'),(34500,75,'Blanzac','87'),(34501,75,'Saint-Genest-sur-Roselle','87'),(34502,75,'Saint-Sornin-la-Marche','87'),(34503,75,'Pierre-Buffière','87'),(34504,75,'Dinsac','87'),(34505,75,'Rilhac-Lastours','87'),(34506,75,'Oradour-Saint-Genest','87'),(34507,75,'Saint-Sulpice-les-Feuilles','87'),(34508,75,'Aureil','87'),(34509,75,'Vicq-sur-Breuilh','87'),(34510,75,'Saint-Mathieu','87'),(34511,75,'Bussière-Poitevine','87'),(34512,75,'Beaumont-du-Lac','87'),(34513,75,'Condat-sur-Vienne','87'),(34514,75,'Jouac','87'),(34515,75,'Saint-Priest-sous-Aixe','87'),(34516,75,'Gorre','87'),(34517,75,'Saint-Paul','87'),(34518,75,'Saint-Martin-le-Mault','87'),(34519,75,'Bussière-Boffy','87'),(34520,75,'Glandon','87'),(34521,75,'Laurière','87'),(34522,75,'Cieux','87'),(34523,75,'Magnac-Laval','87'),(34524,75,'La Bazeuge','87'),(34525,75,'Saint-Hilaire-les-Places','87'),(34526,75,'Razès','87'),(34527,75,'Saint-Jouvent','87'),(34528,75,'Saint-Maurice-les-Brousses','87'),(34529,75,'Blond','87'),(34530,75,'Breuilaufa','87'),(34531,75,'La Meyze','87'),(34532,75,'Verneuil-sur-Vienne','87'),(34533,75,'Bersac-sur-Rivalier','87'),(34534,75,'Thiat','87'),(34535,75,'Berneuil','87'),(34536,75,'Verneuil-Moustiers','87'),(34537,75,'Jourgnac','87'),(34538,75,'Peyrat-de-Bellac','87'),(34539,75,'Saint-Priest-Ligoure','87'),(34540,75,'La Porcherie','87'),(34541,75,'Dournazac','87'),(34542,75,'Le Chalard','87'),(34543,75,'Eymoutiers','87'),(34544,75,'Rancon','87'),(34545,75,'Thouron','87'),(34546,75,'Royères','87'),(34547,75,'Nexon','87'),(34548,75,'Dompierre-les-Églises','87'),(34549,75,'Marval','87'),(34550,75,'La Jonchère-Saint-Maurice','87'),(34551,75,'Chamboret','87'),(34552,75,'Nouic','87'),(34553,75,'Saint-Martin-Terressus','87'),(34554,75,'Sainte-Marie-de-Vaux','87'),(34555,75,'Saint-Victurnien','87'),(34556,75,'Saint-Sylvestre','87'),(34557,75,'Vayres','87'),(34558,75,'Saint-Martin-le-Vieux','87'),(34559,75,'Saint-Martin-de-Jussac','87'),(34560,75,'Séreilhac','87'),(34561,75,'Compreignac','87'),(34562,75,'Domps','87'),(34563,75,'Jabreilles-les-Bordes','87'),(34564,75,'Châteauneuf-la-Forêt','87'),(34565,75,'Lussac-les-Églises','87'),(34566,75,'Saint-Brice-sur-Vienne','87'),(34567,75,'Montrol-Sénard','87'),(34568,75,'Saint-Laurent-sur-Gorre','87'),(34569,75,'Saint-Junien-les-Combes','87'),(34570,75,'Cars','87'),(34571,75,'Le Châtenet-en-Dognon','87'),(34572,75,'Saint-Sulpice-Laurière','87'),(34573,75,'Saint-Laurent-les-Églises','87'),(34574,75,'La Roche-l\'Abeille','87'),(34575,75,'Chaillac-sur-Vienne','87'),(34576,75,'Sauviat-sur-Vige','87'),(34577,75,'Nantiat','87'),(34578,75,'Cussac','87'),(34579,75,'Bessines-sur-Gartempe','87'),(34580,75,'Saint-Gilles-les-Forêts','87'),(34581,75,'Saint-Léger-Magnazeix','87'),(34582,75,'Cognac-la-Forêt','87'),(34583,75,'Cheissoux','87'),(34584,75,'Bosmie-l\'Aiguille','87'),(34585,75,'Aixe-sur-Vienne','87'),(34586,75,'La Croisille-sur-Briance','87'),(34587,75,'La Croix-sur-Gartempe','87'),(34588,75,'Ambazac','87'),(34589,75,'Saint-Léonard-de-Noblat','87'),(34590,75,'Masléon','87'),(34591,75,'Mortemart','87'),(34592,75,'Chaptelat','87'),(34593,75,'Chéronnac','87'),(34594,75,'Château-Chervix','87'),(34595,75,'Cromac','87'),(34596,75,'Saint-Georges-les-Landes','87'),(34597,75,'Eybouleuf','87'),(34598,75,'Couzeix','87'),(34599,75,'Arnac-la-Poste','87'),(34600,75,'Saint-Léger-la-Montagne','87'),(34601,75,'Darnac','87'),(34602,75,'Saint-Symphorien-sur-Couze','87'),(34603,75,'Solignac','87'),(34604,75,'Saint-Méard','87'),(34605,75,'Pensol','87'),(34606,75,'Burgnac','87'),(34607,75,'Nieul','87'),(34608,75,'Saint-Denis-des-Murs','87'),(34609,75,'Azat-le-Ris','87'),(34610,75,'Saint-Amand-le-Petit','87'),(34611,75,'Billanges','87'),(34612,75,'Sussac','87'),(34613,75,'Augne','87'),(34614,75,'Tersannes','87'),(34615,75,'Peyrilhac','87'),(34616,75,'Panazol','87'),(34617,75,'Roussac','87'),(34618,75,'Bellac','87'),(34619,75,'Saint-Just-le-Martel','87'),(34620,75,'Vaulry','87'),(34621,75,'Sainte-Anne-Saint-Priest','87'),(34622,75,'Saint-Bonnet-de-Bellac','87'),(34623,75,'Le Palais-sur-Vienne','87'),(34624,75,'Peyrat-le-Château','87'),(34625,75,'Saint-Hilaire-Bonneval','87'),(34626,75,'Oradour-sur-Glane','87'),(34627,75,'Roziers-Saint-Georges','87'),(34628,75,'Villefavard','87'),(34629,75,'Saint-Julien-le-Petit','87'),(34630,75,'Gajoubert','87'),(34631,75,'Champnétery','87'),(34632,75,'Meilhac','87'),(34633,75,'La Croix-aux-Mines','88'),(34634,75,'Le Syndicat','88'),(34635,75,'Harmonville','88'),(34636,75,'Hennezel','88'),(34637,75,'Senonges','88'),(34638,75,'Malaincourt','88'),(34639,75,'Dinozé','88'),(34640,75,'Haréville','88'),(34641,75,'Morelmaison','88'),(34642,75,'Villoncourt','88'),(34643,75,'La Vacheresse-et-la-Rouillie','88'),(34644,75,'Frénois','88'),(34645,75,'Éloyes','88'),(34646,75,'Pair-et-Grandrupt','88'),(34647,75,'Forges','88'),(34648,75,'Mont-lès-Neufchâteau','88'),(34649,75,'La Haye','88'),(34650,75,'Brantigny','88'),(34651,75,'Morville','88'),(34652,75,'Le Valtin','88'),(34653,75,'Gendreville','88'),(34654,75,'Crainvilliers','88'),(34655,75,'Madonne-et-Lamerey','88'),(34656,75,'Jeuxey','88'),(34657,75,'Rochesson','88'),(34658,75,'Entre-deux-Eaux','88'),(34659,75,'Bruyères','88'),(34660,75,'Uzemain','88'),(34661,75,'Grandrupt-de-Bains','88'),(34662,75,'Domjulien','88'),(34663,75,'La Chapelle-aux-Bois','88'),(34664,75,'Renauvoid','88'),(34665,75,'Uriménil','88'),(34666,75,'Rehaupal','88'),(34667,75,'Thons','88'),(34668,75,'Vaudeville','88'),(34669,75,'Granges-sur-Vologne','88'),(34670,75,'Rozerotte','88'),(34671,75,'Jubainville','88'),(34672,75,'Ruppes','88'),(34673,75,'Le Mont','88'),(34674,75,'Légéville-et-Bonfays','88'),(34675,75,'Deinvillers','88'),(34676,75,'La Baffe','88'),(34677,75,'Pouxeux','88'),(34678,75,'Fiménil','88'),(34679,75,'Mandres-sur-Vair','88'),(34680,75,'Allarmont','88'),(34681,75,'Rouges-Eaux','88'),(34682,75,'Hagnéville-et-Roncourt','88'),(34683,75,'Pierrepont-sur-l\'Arentèle','88'),(34684,75,'Domrémy-la-Pucelle','88'),(34685,75,'Aumontzey','88'),(34686,75,'Oëlleville','88'),(34687,75,'Colroy-la-Grande','88'),(34688,75,'Rollainville','88'),(34689,75,'Vomécourt-sur-Madon','88'),(34690,75,'Pont-sur-Madon','88'),(34691,75,'Châtenois','88'),(34692,75,'Tendon','88'),(34693,75,'Bouzemont','88'),(34694,75,'La Neuveville-devant-Lépanges','88'),(34695,75,'Autrey','88'),(34696,75,'Saint-Nabord','88'),(34697,75,'Xamontarupt','88'),(34698,75,'Vroville','88'),(34699,75,'Bleurville','88'),(34700,75,'Bocquegney','88'),(34701,75,'Begnécourt','88'),(34702,75,'Saint-Amé','88'),(34703,75,'Bulgnéville','88'),(34704,75,'Thiéfosse','88'),(34705,75,'Darney','88'),(34706,75,'Pont-lès-Bonfays','88'),(34707,75,'Docelles','88'),(34708,75,'Hymont','88'),(34709,75,'Norroy','88'),(34710,75,'Tignécourt','88'),(34711,75,'Saint-Michel-sur-Meurthe','88'),(34712,75,'Saint-Julien','88'),(34713,75,'Brû','88'),(34714,75,'Trémonzey','88'),(34715,75,'La Bresse','88'),(34716,75,'Raon-aux-Bois','88'),(34717,75,'Trampot','88'),(34718,75,'Vagney','88'),(34719,75,'Vincey','88'),(34720,75,'Saint-Baslemont','88'),(34721,75,'Moriville','88'),(34722,75,'Voivres','88'),(34723,75,'Le Beulay','88'),(34724,75,'Rocourt','88'),(34725,75,'Godoncourt','88'),(34726,75,'Ménil-sur-Belvitte','88'),(34727,75,'Bellefontaine','88'),(34728,75,'Socourt','88'),(34729,75,'Dombrot-sur-Vair','88'),(34730,75,'Évaux-et-Ménil','88'),(34731,75,'Autreville','88'),(34732,75,'Le Val-d\'Ajol','88'),(34733,75,'Mattaincourt','88'),(34734,75,'Robécourt','88'),(34735,75,'Saint-Paul','88'),(34736,75,'Seraumont','88'),(34737,75,'Bertrimoutier','88'),(34738,75,'Rehaincourt','88'),(34739,75,'Saint-Remimont','88'),(34740,75,'Vittel','88'),(34741,75,'Xaronval','88'),(34742,75,'Ménil-de-Senones','88'),(34743,75,'Racécourt','88'),(34744,75,'Autigny-la-Tour','88'),(34745,75,'Madegney','88'),(34746,75,'Chermisey','88'),(34747,75,'Doncières','88'),(34748,75,'Marainville-sur-Madon','88'),(34749,75,'Roville-aux-Chênes','88'),(34750,75,'Damas-aux-Bois','88'),(34751,75,'Harol','88'),(34752,75,'Celles-sur-Plaine','88'),(34753,75,'Dombrot-le-Sec','88'),(34754,75,'Coinches','88'),(34755,75,'Épinal','88'),(34756,75,'Villers','88'),(34757,75,'Remomeix','88'),(34758,75,'Raves','88'),(34759,75,'Golbey','88'),(34760,75,'Vaubexy','88'),(34761,75,'Cheniménil','88'),(34762,75,'Thaon-les-Vosges','88'),(34763,75,'Ferdrupt','88'),(34764,75,'Saulxures-sur-Moselotte','88'),(34765,75,'Bainville-aux-Saules','88'),(34766,75,'Beaufremont','88'),(34767,75,'Mont-lès-Lamarche','88'),(34768,75,'Gorhey','88'),(34769,75,'Gemmelaincourt','88'),(34770,75,'Padoux','88'),(34771,75,'Sainte-Marguerite','88'),(34772,75,'Dommartin-aux-Bois','88'),(34773,75,'Gerbépal','88'),(34774,75,'Ollainville','88'),(34775,75,'Archettes','88'),(34776,75,'Portieux','88'),(34777,75,'Harchéchamp','88'),(34778,75,'Remoncourt','88'),(34779,75,'Dombasle-devant-Darney','88'),(34780,75,'Velotte-et-Tatignécourt','88'),(34781,75,'Gugney-aux-Aulx','88'),(34782,75,'Dommartin-sur-Vraine','88'),(34783,75,'Bois-de-Champ','88'),(34784,75,'Vouxey','88'),(34785,75,'Houéville','88'),(34786,75,'Fresse-sur-Moselle','88'),(34787,75,'Liézey','88'),(34788,75,'Raon-sur-Plaine','88'),(34789,75,'Lironcourt','88'),(34790,75,'Frenelle-la-Petite','88'),(34791,75,'Ameuvelle','88'),(34792,75,'Châtillon-sur-Saône','88'),(34793,75,'Jussarupt','88'),(34794,75,'Vrécourt','88'),(34795,75,'Vienville','88'),(34796,75,'Fremifontaine','88'),(34797,75,'Plainfaing','88'),(34798,75,'Moyenmoutier','88'),(34799,75,'Ambacourt','88'),(34800,75,'Vieux-Moulin','88'),(34801,75,'Gerbamont','88'),(34802,75,'Vaudoncourt','88'),(34803,75,'Ramonchamp','88'),(34804,75,'Champdray','88'),(34805,75,'Arrentès-de-Corcieux','88'),(34806,75,'Neuvillers-sur-Fave','88'),(34807,75,'Rainville','88'),(34808,75,'Ortoncourt','88'),(34809,75,'Coussey','88'),(34810,75,'Maroncourt','88'),(34811,75,'Isches','88'),(34812,75,'Laveline-devant-Bruyères','88'),(34813,75,'La Petite-Fosse','88'),(34814,75,'Martigny-les-Gerbonvaux','88'),(34815,75,'Fignévelle','88'),(34816,75,'Méménil','88'),(34817,75,'Ainvelle','88'),(34818,75,'Nayemont-les-Fosses','88'),(34819,75,'Aroffe','88'),(34820,75,'Marey','88'),(34821,75,'Bayecourt','88'),(34822,75,'Mazeley','88'),(34823,75,'Vallois','88'),(34824,75,'Jarménil','88'),(34825,75,'Xonrupt-Longemer','88'),(34826,75,'Saint-Ouen-lès-Parey','88'),(34827,75,'Hurbache','88'),(34828,75,'Tranqueville-Graux','88'),(34829,75,'Saint-Jean-d\'Ormont','88'),(34830,75,'Esley','88'),(34831,75,'Provenchères-sur-Fave','88'),(34832,75,'Maconcourt','88'),(34833,75,'Saint-Pierremont','88'),(34834,75,'Viménil','88'),(34835,75,'Soulosse-sous-Saint-Élophe','88'),(34836,75,'Removille','88'),(34837,75,'Lesseux','88'),(34838,75,'Rebeuville','88'),(34839,75,'Dogneville','88'),(34840,75,'Ménarmont','88'),(34841,75,'Gironcourt-sur-Vraine','88'),(34842,75,'Châtel-sur-Moselle','88'),(34843,75,'Estrennes','88'),(34844,75,'Domvallier','88'),(34845,75,'Herpelmont','88'),(34846,75,'Boulaincourt','88'),(34847,75,'Poulières','88'),(34848,75,'Puzieux','88'),(34849,75,'Mortagne','88'),(34850,75,'Poussay','88'),(34851,75,'Bazegney','88'),(34852,75,'Le Magny','88'),(34853,75,'Domfaing','88'),(34854,75,'Florémont','88'),(34855,75,'Anould','88'),(34856,75,'Regney','88'),(34857,75,'Vicherey','88'),(34858,75,'La Grande-Fosse','88'),(34859,75,'Longchamp-sous-Châtenois','88'),(34860,75,'Dompaire','88'),(34861,75,'Bouxières-aux-Bois','88'),(34862,75,'Clézentaine','88'),(34863,75,'Urville','88'),(34864,75,'Gugnécourt','88'),(34865,75,'Monthureux-le-Sec','88'),(34866,75,'Saint-Stail','88'),(34867,75,'Sanchey','88'),(34868,75,'Certilleux','88'),(34869,75,'Fays','88'),(34870,75,'Frizon','88'),(34871,75,'Langley','88'),(34872,75,'Landaville','88'),(34873,75,'Le Clerjus','88'),(34874,75,'Gigney','88'),(34875,75,'Nomexy','88'),(34876,75,'Frapelle','88'),(34877,75,'Pompierre','88'),(34878,75,'Battexey','88'),(34879,75,'Arches','88'),(34880,75,'Darney-aux-Chênes','88'),(34881,75,'Blevaincourt','88'),(34882,75,'La Bourgonce','88'),(34883,75,'Relanges','88'),(34884,75,'Attignéville','88'),(34885,75,'Dolaincourt','88'),(34886,75,'Pierrefitte','88'),(34887,75,'Sainte-Barbe','88'),(34888,75,'Saint-Maurice-sur-Mortagne','88'),(34889,75,'Raon-l\'Étape','88'),(34890,75,'Gelvécourt-et-Adompt','88'),(34891,75,'Ahéville','88'),(34892,75,'Saint-Maurice-sur-Moselle','88'),(34893,75,'Jorxey','88'),(34894,75,'Chauffecourt','88'),(34895,75,'Cornimont','88'),(34896,75,'Avranville','88'),(34897,75,'La Houssière','88'),(34898,75,'La Salle','88'),(34899,75,'Avrainville','88'),(34900,75,'Avillers','88'),(34901,75,'Denipaire','88'),(34902,75,'Parey-sous-Montfort','88'),(34903,75,'Le Saulcy','88'),(34904,75,'Lignéville','88'),(34905,75,'Charmes','88'),(34906,75,'Bazien','88'),(34907,75,'Baudricourt','88'),(34908,75,'Balléville','88'),(34909,75,'Ménil-en-Xaintois','88'),(34910,75,'Repel','88'),(34911,75,'Bazoilles-sur-Meuse','88'),(34912,75,'Haillainville','88'),(34913,75,'La Petite-Raon','88'),(34914,75,'Savigny','88'),(34915,75,'Grandvillers','88'),(34916,75,'Senaide','88'),(34917,75,'Oncourt','88'),(34918,75,'Ubexy','88'),(34919,75,'Beauménil','88'),(34920,75,'They-sous-Montfort','88'),(34921,75,'Deycimont','88'),(34922,75,'Belrupt','88'),(34923,75,'Lépanges-sur-Vologne','88'),(34924,75,'Saint-Étienne-lès-Remiremont','88'),(34925,75,'Ableuvenettes','88'),(34926,75,'Fomerey','88'),(34927,75,'Bonvillet','88'),(34928,75,'Housseras','88'),(34929,75,'Martinvelle','88'),(34930,75,'Sercœœur','88'),(34931,75,'La Neuveville-sous-Châtenois','88'),(34932,75,'Frenelle-la-Grande','88'),(34933,75,'Lusse','88'),(34934,75,'Mazirot','88'),(34935,75,'Punerot','88'),(34936,75,'Sapois','88'),(34937,75,'Romont','88'),(34938,75,'Aulnois','88'),(34939,75,'Zincourt','88'),(34940,75,'Bussang','88'),(34941,75,'Girmont','88'),(34942,75,'Gérardmer','88'),(34943,75,'Aingeville','88'),(34944,75,'Madecourt','88'),(34945,75,'Valleroy-le-Sec','88'),(34946,75,'Basse-sur-le-Rupt','88'),(34947,75,'Fontenoy-le-Château','88'),(34948,75,'Hennecourt','88'),(34949,75,'Pargny-sous-Mureau','88'),(34950,75,'Mandray','88'),(34951,75,'Chaumousey','88'),(34952,75,'Gircourt-lès-Viéville','88'),(34953,75,'Sartes','88'),(34954,75,'Hagécourt','88'),(34955,75,'Girmont-Val-d\'Ajol','88'),(34956,75,'Juvaincourt','88'),(34957,75,'Girecourt-sur-Durbion','88'),(34958,75,'Fouchécourt','88'),(34959,75,'Pleuvezain','88'),(34960,75,'Senones','88'),(34961,75,'Jainvillotte','88'),(34962,75,'Liffol-le-Grand','88'),(34963,75,'Uxegney','88'),(34964,75,'Frebécourt','88'),(34965,75,'Morizécourt','88'),(34966,75,'Fraize','88'),(34967,75,'Saulxures-lès-Bulgnéville','88'),(34968,75,'Biécourt','88'),(34969,75,'Domptail','88'),(34970,75,'Montmotier','88'),(34971,75,'Domèvre-sur-Durbion','88'),(34972,75,'Vervezelle','88'),(34973,75,'Saint-Benoît-la-Chipotte','88'),(34974,75,'Saulcy-sur-Meurthe','88'),(34975,75,'Hergugney','88'),(34976,75,'Damas-et-Bettegney','88'),(34977,75,'Saint-Vallier','88'),(34978,75,'Mirecourt','88'),(34979,75,'Houécourt','88'),(34980,75,'Le Ménil','88'),(34981,75,'Valfroicourt','88'),(34982,75,'Belval','88'),(34983,75,'Varmonzey','88'),(34984,75,'Chavelot','88'),(34985,75,'Hardancourt','88'),(34986,75,'Sionne','88'),(34987,75,'Rugney','88'),(34988,75,'Grandrupt','88'),(34989,75,'Soncourt','88'),(34990,75,'Saint-Dié-des-Vosges','88'),(34991,75,'Saint-Léonard','88'),(34992,75,'Domèvre-sur-Avière','88'),(34993,75,'Saint-Genest','88'),(34994,75,'Laveline-du-Houx','88'),(34995,75,'Dommartin-lès-Vallois','88'),(34996,75,'Rozières-sur-Mouzon','88'),(34997,75,'Charmois-l\'Orgueilleux','88'),(34998,75,'Hadol','88'),(34999,75,'La Forge','88'),(35000,75,'Vecoux','88'),(35001,75,'Offroicourt','88'),(35002,75,'Remiremont','88'),(35003,75,'Lemmecourt','88'),(35004,75,'Ban-sur-Meurthe-Clefcy','88'),(35005,75,'Châtas','88'),(35006,75,'Vomécourt','88'),(35007,75,'Gemaingoutte','88'),(35008,75,'Ventron','88'),(35009,75,'Plombières-les-Bains','88'),(35010,75,'Regnévelle','88'),(35011,75,'La Chapelle-devant-Bruyères','88'),(35012,75,'Vexaincourt','88'),(35013,75,'Barbey-Seroux','88'),(35014,75,'Le Thillot','88'),(35015,75,'Luvigny','88'),(35016,75,'Saint-Rémy','88'),(35017,75,'Fontenay','88'),(35018,75,'Dompierre','88'),(35019,75,'Cleurie','88'),(35020,75,'Jeanménil','88'),(35021,75,'Contrexéville','88'),(35022,75,'Nossoncourt','88'),(35023,75,'Combrimont','88'),(35024,75,'Rapey','88'),(35025,75,'Fréville','88'),(35026,75,'Circourt','88'),(35027,75,'Clérey-la-Côte','88'),(35028,75,'Bult','88'),(35029,75,'Belmont-sur-Buttant','88'),(35030,75,'Brechainville','88'),(35031,75,'Valleroy-aux-Saules','88'),(35032,75,'Bazoilles-et-Ménil','88'),(35033,75,'Igney','88'),(35034,75,'Belmont-sur-Vair','88'),(35035,75,'Dommartin-lès-Remiremont','88'),(35036,75,'Brouvelieures','88'),(35037,75,'Rancourt','88'),(35038,75,'La Neuveville-sous-Montfort','88'),(35039,75,'Auzainvilliers','88'),(35040,75,'Thiraucourt','88'),(35041,75,'Chantraine','88'),(35042,75,'Étival-Clairefontaine','88'),(35043,75,'Dounoux','88'),(35044,75,'Gruey-lès-Surance','88'),(35045,75,'Belmont-lès-Darney','88'),(35046,75,'Villotte','88'),(35047,75,'Romain-aux-Bois','88'),(35048,75,'Ramecourt','88'),(35049,75,'Hautmougey','88'),(35050,75,'Médonville','88'),(35051,75,'Gignéville','88'),(35052,75,'Harsault','88'),(35053,75,'Attigny','88'),(35054,75,'Longchamp','88'),(35055,75,'Biffontaine','88'),(35056,75,'Corcieux','88'),(35057,75,'Viviers-lès-Offroicourt','88'),(35058,75,'Blémerey','88'),(35059,75,'Le Puid','88'),(35060,75,'Champ-le-Duc','88'),(35061,75,'Dombasle-en-Xaintois','88'),(35062,75,'Fauconcourt','88'),(35063,75,'Grand','88'),(35064,75,'Nonzeville','88'),(35065,75,'Suriauville','88'),(35066,75,'Hadigny-les-Verrières','88'),(35067,75,'Ban-de-Laveline','88'),(35068,75,'Nompatelize','88'),(35069,75,'Totainville','88'),(35070,75,'Xaffévillers','88'),(35071,75,'Le Vermont','88'),(35072,75,'Destord','88'),(35073,75,'Laval-sur-Vologne','88'),(35074,75,'Lubine','88'),(35075,75,'Badménil-aux-Bois','88'),(35076,75,'Aouze','88'),(35077,75,'Tollaincourt','88'),(35078,75,'Villouxel','88'),(35079,75,'Saint-Menge','88'),(35080,75,'Darnieulles','88'),(35081,75,'Rambervillers','88'),(35082,75,'Essegney','88'),(35083,75,'Bouxurulles','88'),(35084,75,'Bettoncourt','88'),(35085,75,'Vioménil','88'),(35086,75,'Jésonville','88'),(35087,75,'Viviers-le-Gras','88'),(35088,75,'Wisembach','88'),(35089,75,'Sans-Vallois','88'),(35090,75,'Sainte-Hélène','88'),(35091,75,'Taintrux','88'),(35092,75,'Saint-Gorgon','88'),(35093,75,'Pallegney','88'),(35094,75,'Nonville','88'),(35095,75,'Le Roulier','88'),(35096,75,'Escles','88'),(35097,75,'Thuillières','88'),(35098,75,'Ban-de-Sapt','88'),(35099,75,'Rouvres-en-Xaintois','88'),(35100,75,'Viocourt','88'),(35101,75,'Tilleux','88'),(35102,75,'Circourt-sur-Mouzon','88'),(35103,75,'Deyvillers','88'),(35104,75,'Dignonville','88'),(35105,75,'Domèvre-sous-Montfort','88'),(35106,75,'Sandaucourt','88'),(35107,75,'Neufchâteau','88'),(35108,75,'Xertigny','88'),(35109,75,'Serécourt','88'),(35110,75,'Derbamont','88'),(35111,75,'Saint-Prancher','88'),(35112,75,'Monthureux-sur-Saône','88'),(35113,75,'Serocourt','88'),(35114,75,'Moyemont','88'),(35115,75,'Bettegney-Saint-Brice','88'),(35116,75,'Chamagne','88'),(35117,75,'Ville-sur-Illon','88'),(35118,75,'Le Tholy','88'),(35119,75,'Midrevaux','88'),(35120,75,'Barville','88'),(35121,75,'Vaxoncourt','88'),(35122,75,'Girancourt','88'),(35123,75,'Anglemont','88'),(35124,75,'Rouvres-la-Chétive','88'),(35125,75,'Chef-Haut','88'),(35126,75,'Remicourt','88'),(35127,75,'Grignoncourt','88'),(35128,75,'Charmois-devant-Bruyères','88'),(35129,75,'Greux','88'),(35130,75,'Martigny-les-Bains','88'),(35131,75,'Sauville','88'),(35132,75,'Provenchères-lès-Darney','88'),(35133,75,'Damblain','88'),(35134,75,'Bains-les-Bains','88'),(35135,75,'Claudon','88'),(35136,75,'La Voivre','88'),(35137,75,'Courcelles-sous-Châtenois','88'),(35138,75,'Prey','88'),(35139,75,'Moncel-sur-Vair','88'),(35140,75,'Lerrain','88'),(35141,75,'Rupt-sur-Moselle','88'),(35142,75,'Maxey-sur-Meuse','88'),(35143,75,'Faucompierre','88'),(35144,75,'Aydoilles','88'),(35145,75,'Marche','88'),(35146,75,'Moussey','88'),(35147,75,'Frain','88'),(35148,75,'Bernouil','89'),(35149,75,'Jouy','89'),(35150,75,'Sainte-Pallaye','89'),(35151,75,'Ronchères','89'),(35152,75,'Villenavotte','89'),(35153,75,'Molinons','89'),(35154,75,'Nitry','89'),(35155,75,'Noé','89'),(35156,75,'Merry-la-Vallée','89'),(35157,75,'Lasson','89'),(35158,75,'Tonnerre','89'),(35159,75,'Verlin','89'),(35160,75,'Dicy','89'),(35161,75,'Cruzy-le-Châtel','89'),(35162,75,'Irancy','89'),(35163,75,'Saint-Martin-sur-Armançon','89'),(35164,75,'Viviers','89'),(35165,75,'Chemilly-sur-Yonne','89'),(35166,75,'Fulvy','89'),(35167,75,'Poilly-sur-Tholon','89'),(35168,75,'Chambeugle','89'),(35169,75,'Gland','89'),(35170,75,'Bléneau','89'),(35171,75,'Saint-Germain-des-Champs','89'),(35172,75,'Cry','89'),(35173,75,'Augy','89'),(35174,75,'Foissy-sur-Vanne','89'),(35175,75,'Annay-sur-Serein','89'),(35176,75,'Saint-Martin-des-Champs','89'),(35177,75,'Vincelottes','89'),(35178,75,'Saint-Bris-le-Vineux','89'),(35179,75,'Villeperrot','89'),(35180,75,'Saint-Père','89'),(35181,75,'Flacy','89'),(35182,75,'Ormes','89'),(35183,75,'Saint-Léger-Vauban','89'),(35184,75,'Moutiers-en-Puisaye','89'),(35185,75,'Tannerre-en-Puisaye','89'),(35186,75,'Fontenay-sous-Fouronnes','89'),(35187,75,'Saint-Maurice-Thizouaille','89'),(35188,75,'Domecy-sur-le-Vault','89'),(35189,75,'Prégilbert','89'),(35190,75,'Bœœurs-en-Othe','89'),(35191,75,'Moulins-sur-Ouanne','89'),(35192,75,'Maillot','89'),(35193,75,'Évry','89'),(35194,75,'Chevannes','89'),(35195,75,'Dollot','89'),(35196,75,'Fontenay-près-Vézelay','89'),(35197,75,'Lindry','89'),(35198,75,'Paroy-sur-Tholon','89'),(35199,75,'Chaumont','89'),(35200,75,'Saint-Martin-du-Tertre','89'),(35201,75,'Saligny','89'),(35202,75,'Béru','89'),(35203,75,'Thury','89'),(35204,75,'Chitry','89'),(35205,75,'Épineuil','89'),(35206,75,'Quenne','89'),(35207,75,'Gron','89'),(35208,75,'Étais-la-Sauvin','89'),(35209,75,'Noyers','89'),(35210,75,'Mouffy','89'),(35211,75,'Sainte-Colombe','89'),(35212,75,'Levis','89'),(35213,75,'Serbonnes','89'),(35214,75,'Grandchamp','89'),(35215,75,'Annéot','89'),(35216,75,'Venizy','89'),(35217,75,'Villiers-Louis','89'),(35218,75,'Villy','89'),(35219,75,'Paron','89'),(35220,75,'Fontenailles','89'),(35221,75,'Cheney','89'),(35222,75,'Molesmes','89'),(35223,75,'Fontenay-près-Chablis','89'),(35224,75,'Yrouerre','89'),(35225,75,'Ancy-le-Franc','89'),(35226,75,'Champigny','89'),(35227,75,'Angely','89'),(35228,75,'Leugny','89'),(35229,75,'Monéteau','89'),(35230,75,'Escolives-Sainte-Camille','89'),(35231,75,'Percey','89'),(35232,75,'Saint-Martin-sur-Ocre','89'),(35233,75,'Asquins','89'),(35234,75,'Bordes','89'),(35235,75,'Bessy-sur-Cure','89'),(35236,75,'Ancy-le-Libre','89'),(35237,75,'Villeneuve-sur-Yonne','89'),(35238,75,'Girolles','89'),(35239,75,'Montréal','89'),(35240,75,'Diges','89'),(35241,75,'Villemer','89'),(35242,75,'Perceneige','89'),(35243,75,'Vaudeurs','89'),(35244,75,'Saint-Moré','89'),(35245,75,'Saint-Privé','89'),(35246,75,'Pont-sur-Yonne','89'),(35247,75,'Vincelles','89'),(35248,75,'Cussy-les-Forges','89'),(35249,75,'Vallan','89'),(35250,75,'Préhy','89'),(35251,75,'Island','89'),(35252,75,'Trévilly','89'),(35253,75,'Beauvilliers','89'),(35254,75,'Maligny','89'),(35255,75,'Thorigny-sur-Oreuse','89'),(35256,75,'Quincerot','89'),(35257,75,'Vézinnes','89'),(35258,75,'Mailly-le-Château','89'),(35259,75,'Montillot','89'),(35260,75,'Paroy-en-Othe','89'),(35261,75,'Appoigny','89'),(35262,75,'Saint-Romain-le-Preux','89'),(35263,75,'Chichery','89'),(35264,75,'Champvallon','89'),(35265,75,'Jaulges','89'),(35266,75,'Bussières','89'),(35267,75,'Lucy-le-Bois','89'),(35268,75,'Courlon-sur-Yonne','89'),(35269,75,'Villecien','89'),(35270,75,'Malay-le-Grand','89'),(35271,75,'Saints','89'),(35272,75,'Pisy','89'),(35273,75,'Parly','89'),(35274,75,'Lézinnes','89'),(35275,75,'Saint-Aubin-Château-Neuf','89'),(35276,75,'Savigny-sur-Clairis','89'),(35277,75,'Fontenoy','89'),(35278,75,'Toucy','89'),(35279,75,'Volgré','89'),(35280,75,'Foissy-lès-Vézelay','89'),(35281,75,'Saint-Clément','89'),(35282,75,'Escamps','89'),(35283,75,'Chichée','89'),(35284,75,'Thizy','89'),(35285,75,'Béon','89'),(35286,75,'Courtois-sur-Yonne','89'),(35287,75,'Sarry','89'),(35288,75,'Villeroy','89'),(35289,75,'Vermenton','89'),(35290,75,'Domecy-sur-Cure','89'),(35291,75,'Vergigny','89'),(35292,75,'Beugnon','89'),(35293,75,'Plessis-Saint-Jean','89'),(35294,75,'Saint-Agnan','89'),(35295,75,'Chailley','89'),(35296,75,'Butteaux','89'),(35297,75,'Chamoux','89'),(35298,75,'Coutarnoux','89'),(35299,75,'Vaumort','89'),(35300,75,'Pontaubert','89'),(35301,75,'Saint-Brancher','89'),(35302,75,'Venouse','89'),(35303,75,'Accolay','89'),(35304,75,'Passy','89'),(35305,75,'Villefargeau','89'),(35306,75,'Villethierry','89'),(35307,75,'Vézelay','89'),(35308,75,'Marsangy','89'),(35309,75,'Coulours','89'),(35310,75,'Esnon','89'),(35311,75,'Sambourg','89'),(35312,75,'Saint-Sauveur-en-Puisaye','89'),(35313,75,'Sommecaise','89'),(35314,75,'Villefranche','89'),(35315,75,'Cravant','89'),(35316,75,'Beaumont','89'),(35317,75,'Malay-le-Petit','89'),(35318,75,'Avallon','89'),(35319,75,'Villemanoche','89'),(35320,75,'Chassy','89'),(35321,75,'Lailly','89'),(35322,75,'Chéroy','89'),(35323,75,'Sauvigny-le-Bois','89'),(35324,75,'Montacher-Villegardin','89'),(35325,75,'Bassou','89'),(35326,75,'Chaumot','89'),(35327,75,'Champignelles','89'),(35328,75,'Cheny','89'),(35329,75,'Méré','89'),(35330,75,'Cézy','89'),(35331,75,'Ligny-le-Châtel','89'),(35332,75,'Vignes','89'),(35333,75,'Voisines','89'),(35334,75,'Charny','89'),(35335,75,'Molosmes','89'),(35336,75,'Dyé','89'),(35337,75,'Lalande','89'),(35338,75,'Mercy','89'),(35339,75,'Fouronnes','89'),(35340,75,'Aisy-sur-Armançon','89'),(35341,75,'Villebougis','89'),(35342,75,'Gigny','89'),(35343,75,'Crain','89'),(35344,75,'Étigny','89'),(35345,75,'Pailly','89'),(35346,75,'Fleys','89'),(35347,75,'Coulanges-la-Vineuse','89'),(35348,75,'Rogny-les-Sept-Écluses','89'),(35349,75,'Neuvy-Sautour','89'),(35350,75,'Villechétive','89'),(35351,75,'Sainte-Vertu','89'),(35352,75,'Arthonnay','89'),(35353,75,'Lignorelles','89'),(35354,75,'Turny','89'),(35355,75,'Saint-Martin-d\'Ordon','89'),(35356,75,'Bonnard','89'),(35357,75,'Laduz','89'),(35358,75,'Cudot','89'),(35359,75,'Épineau-les-Voves','89'),(35360,75,'Fresnes','89'),(35361,75,'Pontigny','89'),(35362,75,'Bussy-en-Othe','89'),(35363,75,'Molay','89'),(35364,75,'Voutenay-sur-Cure','89'),(35365,75,'Argenteuil-sur-Armançon','89'),(35366,75,'Brienon-sur-Armançon','89'),(35367,75,'Héry','89'),(35368,75,'Gurgy','89'),(35369,75,'Champs-sur-Yonne','89'),(35370,75,'Stigny','89'),(35371,75,'Soucy','89'),(35372,75,'Nailly','89'),(35373,75,'Tanlay','89'),(35374,75,'Sacy','89'),(35375,75,'Mailly-la-Ville','89'),(35376,75,'Marchais-Beton','89'),(35377,75,'Baon','89'),(35378,75,'Censy','89'),(35379,75,'Cisery','89'),(35380,75,'Collan','89'),(35381,75,'Tharot','89'),(35382,75,'Armeau','89'),(35383,75,'Précy-sur-Vrin','89'),(35384,75,'Athie','89'),(35385,75,'Sainpuits','89'),(35386,75,'Saint-Loup-d\'Ordon','89'),(35387,75,'Fouchères','89'),(35388,75,'Beauvoir','89'),(35389,75,'Annoux','89'),(35390,75,'Dannemoine','89'),(35391,75,'Saint-Maurice-aux-Riches-Hommes','89'),(35392,75,'Arcy-sur-Cure','89'),(35393,75,'Cérilly','89'),(35394,75,'Lichères-près-Aigremont','89'),(35395,75,'Prunoy','89'),(35396,75,'Mélisey','89'),(35397,75,'Theil-sur-Vanne','89'),(35398,75,'Précy-le-Sec','89'),(35399,75,'Moulins-en-Tonnerrois','89'),(35400,75,'Flogny-la-Chapelle','89'),(35401,75,'Subligny','89'),(35402,75,'Pimelles','89'),(35403,75,'Guillon','89'),(35404,75,'Bazarnes','89'),(35405,75,'Villeneuve-les-Genêts','89'),(35406,75,'Lavau','89'),(35407,75,'Chemilly-sur-Serein','89'),(35408,75,'Sauvigny-le-Beuréal','89'),(35409,75,'Dracy','89'),(35410,75,'Chevillon','89'),(35411,75,'Val-de-Mercy','89'),(35412,75,'Ravières','89'),(35413,75,'Saint-Fargeau','89'),(35414,75,'Pacy-sur-Armançon','89'),(35415,75,'Marmeaux','89'),(35416,75,'Véron','89'),(35417,75,'Saint-Denis','89'),(35418,75,'Bellechaume','89'),(35419,75,'Branches','89'),(35420,75,'Lichères-sur-Yonne','89'),(35421,75,'Champlost','89'),(35422,75,'Sépeaux','89'),(35423,75,'L\'Isle-sur-Serein','89'),(35424,75,'Sennevoy-le-Haut','89'),(35425,75,'Montigny-la-Resle','89'),(35426,75,'Villiers-Saint-Benoît','89'),(35427,75,'Chéu','89'),(35428,75,'Cuy','89'),(35429,75,'La Chapelle-Vaupelteigne','89'),(35430,75,'Tronchoy','89'),(35431,75,'Fleury-la-Vallée','89'),(35432,75,'Pierre-Perthuis','89'),(35433,75,'Sainte-Magnance','89'),(35434,75,'Rousson','89'),(35435,75,'Venoy','89'),(35436,75,'Laroche-Saint-Cydroine','89'),(35437,75,'Tharoiseau','89'),(35438,75,'Fontenouilles','89'),(35439,75,'Roffey','89'),(35440,75,'Villeneuve-Saint-Salves','89'),(35441,75,'Villevallier','89'),(35442,75,'Sementron','89'),(35443,75,'Trichey','89'),(35444,75,'Sceaux','89'),(35445,75,'Brion','89'),(35446,75,'Cornant','89'),(35447,75,'Domats','89'),(35448,75,'Charbuy','89'),(35449,75,'Bussy-le-Repos','89'),(35450,75,'Bagneaux','89'),(35451,75,'Villeblevin','89'),(35452,75,'Dissangis','89'),(35453,75,'Migennes','89'),(35454,75,'Châtel-Censoir','89'),(35455,75,'Looze','89'),(35456,75,'Vinneuf','89'),(35457,75,'Étivey','89'),(35458,75,'Étaule','89'),(35459,75,'Merry-Sec','89'),(35460,75,'Varennes','89'),(35461,75,'Brosses','89'),(35462,75,'Chassignelles','89'),(35463,75,'Coulangeron','89'),(35464,75,'Santigny','89'),(35465,75,'Magny','89'),(35466,75,'Villon','89'),(35467,75,'Trucy-sur-Yonne','89'),(35468,75,'Sermizelles','89'),(35469,75,'Chastellux-sur-Cure','89'),(35470,75,'Massangis','89'),(35471,75,'Sougères-en-Puisaye','89'),(35472,75,'Rouvray','89'),(35473,75,'Blannay','89'),(35474,75,'Provency','89'),(35475,75,'Joux-la-Ville','89'),(35476,75,'Menades','89'),(35477,75,'Argentenay','89'),(35478,75,'Lainsecq','89'),(35479,75,'Migé','89'),(35480,75,'Jussy','89'),(35481,75,'Courson-les-Carrières','89'),(35482,75,'Villiers-les-Hauts','89'),(35483,75,'Merry-sur-Yonne','89'),(35484,75,'Villeneuve-la-Guyard','89'),(35485,75,'Coulanges-sur-Yonne','89'),(35486,75,'Rosoy','89'),(35487,75,'Piffonds','89'),(35488,75,'Thorey','89'),(35489,75,'Cerisiers','89'),(35490,75,'Taingy','89'),(35491,75,'Druyes-les-Belles-Fontaines','89'),(35492,75,'Annay-la-Côte','89'),(35493,75,'Guerchy','89'),(35494,75,'Charentenay','89'),(35495,75,'Dixmont','89'),(35496,75,'Asnières-sous-Bois','89'),(35497,75,'Collemiers','89'),(35498,75,'Quarré-les-Tombes','89'),(35499,75,'Lixy','89'),(35500,75,'Vireaux','89'),(35501,75,'Arces-Dilo','89'),(35502,75,'Sormery','89'),(35503,75,'Égriselles-le-Bocage','89'),(35504,75,'Saint-Julien-du-Sault','89'),(35505,75,'Soumaintrain','89'),(35506,75,'Égleny','89'),(35507,75,'Rugny','89'),(35508,75,'Saint-Maurice-le-Vieil','89'),(35509,75,'La Postolle','89'),(35510,75,'Saint-Valérien','89'),(35511,75,'Seignelay','89'),(35512,75,'Hauterive','89'),(35513,75,'Compigny','89'),(35514,75,'Sièges','89'),(35515,75,'Clérimois','89'),(35516,75,'Sennevoy-le-Bas','89'),(35517,75,'La Ferté-Loupière','89'),(35518,75,'Vault-de-Lugny','89'),(35519,75,'Chamvres','89'),(35520,75,'Perrigny-sur-Armançon','89'),(35521,75,'Mont-Saint-Sulpice','89'),(35522,75,'Sens','89'),(35523,75,'Pont-sur-Vanne','89'),(35524,75,'Sery','89'),(35525,75,'Gy-l\'Évêque','89'),(35526,75,'Mézilles','89'),(35527,75,'La Belliole','89'),(35528,75,'Champcevrais','89'),(35529,75,'Pasilly','89'),(35530,75,'Lucy-sur-Yonne','89'),(35531,75,'Charmoy','89'),(35532,75,'Givry','89'),(35533,75,'Chigy','89'),(35534,75,'Sergines','89'),(35535,75,'La Celle-Saint-Cyr','89'),(35536,75,'Ormoy','89'),(35537,75,'Beine','89'),(35538,75,'Neuilly','89'),(35539,75,'Junay','89'),(35540,75,'Festigny','89'),(35541,75,'Chablis','89'),(35542,75,'Bois-d\'Arcy','89'),(35543,75,'Saint-André-en-Terre-Plaine','89'),(35544,75,'Saint-Cyr-les-Colons','89'),(35545,75,'Villeneuve-la-Dondagre','89'),(35546,75,'Treigny','89'),(35547,75,'Andryes','89'),(35548,75,'Courtoin','89'),(35549,75,'Grimault','89'),(35550,75,'Villiers-sur-Tholon','89'),(35551,75,'Vernoy','89'),(35552,75,'Courgis','89'),(35553,75,'Poilly-sur-Serein','89'),(35554,75,'Villiers-Vineux','89'),(35555,75,'Nuits','89'),(35556,75,'La Chapelle-sur-Oreuse','89'),(35557,75,'Joigny','89'),(35558,75,'Brannay','89'),(35559,75,'Savigny-en-Terre-Plaine','89'),(35560,75,'Fontaines','89'),(35561,75,'Villeneuve-l\'Archevêque','89'),(35562,75,'Pourrain','89'),(35563,75,'Fournaudin','89'),(35564,75,'Jouancy','89'),(35565,75,'Vallery','89'),(35566,75,'Bleigny-le-Carreau','89'),(35567,75,'Ouanne','89'),(35568,75,'Serrigny','89'),(35569,75,'Sainte-Colombe-sur-Loing','89'),(35570,75,'Auxerre','89'),(35571,75,'Malicorne','89'),(35572,75,'Saint-Georges-sur-Baulche','89'),(35573,75,'Champlay','89'),(35574,75,'Courgenay','89'),(35575,75,'Chêne-Arnoult','89'),(35576,75,'Vézannes','89'),(35577,75,'Saint-Sérotin','89'),(35578,75,'Tissey','89'),(35579,75,'Lucy-sur-Cure','89'),(35580,75,'Aigremont','89'),(35581,75,'Senan','89'),(35582,75,'Châtel-Gérard','89'),(35583,75,'Michery','89'),(35584,75,'Thory','89'),(35585,75,'Saint-Aubin-sur-Yonne','89'),(35586,75,'Saint-Martin-sur-Ouanne','89'),(35587,75,'Talcy','89'),(35588,75,'Perreux','89'),(35589,75,'Perrigny','89'),(35590,75,'Carisey','89'),(35591,75,'Saint-Denis-sur-Ouanne','89'),(35592,75,'Gisy-les-Nobles','89'),(35593,75,'Fontaine-la-Gaillarde','89'),(35594,75,'Aillant-sur-Tholon','89'),(35595,75,'Jully','89'),(35596,75,'Saint-Florentin','89'),(35597,75,'Vareilles','89'),(35598,75,'Bierry-les-Belles-Fontaines','89'),(35599,75,'Germigny','89'),(35600,75,'Vassy-sous-Pisy','89'),(35601,75,'Blacy','89'),(35602,75,'Lain','89'),(35603,75,'Courtelevant','90'),(35604,75,'Méziré','90'),(35605,75,'Reppe','90'),(35606,75,'Sermamagny','90'),(35607,75,'Belfort','90'),(35608,75,'Vauthiermont','90'),(35609,75,'Saint-Germain-le-Châtelet','90'),(35610,75,'Meroux','90'),(35611,75,'Felon','90'),(35612,75,'Bessoncourt','90'),(35613,75,'Bourogne','90'),(35614,75,'Grosne','90'),(35615,75,'Phaffans','90'),(35616,75,'Montreux-Château','90'),(35617,75,'Riervescemont','90'),(35618,75,'Danjoutin','90'),(35619,75,'Béthonvilliers','90'),(35620,75,'Lamadeleine-Val-des-Anges','90'),(35621,75,'Angeot','90'),(35622,75,'Bermont','90'),(35623,75,'Denney','90'),(35624,75,'Autrechêne','90'),(35625,75,'Menoncourt','90'),(35626,75,'Novillard','90'),(35627,75,'Offemont','90'),(35628,75,'Grosmagny','90'),(35629,75,'Vézelois','90'),(35630,75,'Châtenois-les-Forges','90'),(35631,75,'Petit-Croix','90'),(35632,75,'Joncherey','90'),(35633,75,'Chèvremont','90'),(35634,75,'Rivière','90'),(35635,75,'Lepuix','90'),(35636,75,'Charmois','90'),(35637,75,'Fontaine','90'),(35638,75,'Auxelles-Bas','90'),(35639,75,'Froidefontaine','90'),(35640,75,'Cravanche','90'),(35641,75,'Roppe','90'),(35642,75,'Fêche-l\'Église','90'),(35643,75,'Auxelles-Haut','90'),(35644,75,'Lachapelle-sous-Rougemont','90'),(35645,75,'Trévenans','90'),(35646,75,'Argiésans','90'),(35647,75,'Rougemont-le-Château','90'),(35648,75,'Morvillars','90'),(35649,75,'Giromagny','90'),(35650,75,'Delle','90'),(35651,75,'Valdoie','90'),(35652,75,'Boron','90'),(35653,75,'Croix','90'),(35654,75,'Moval','90'),(35655,75,'Étueffont','90'),(35656,75,'Grandvillars','90'),(35657,75,'Suarce','90'),(35658,75,'Pérouse','90'),(35659,75,'Courcelles','90'),(35660,75,'Botans','90'),(35661,75,'Évette-Salbert','90'),(35662,75,'Réchésy','90'),(35663,75,'Bourg-sous-Châtelet','90'),(35664,75,'Cunelières','90'),(35665,75,'Frais','90'),(35666,75,'Leval','90'),(35667,75,'Bavilliers','90'),(35668,75,'Banvillars','90'),(35669,75,'Éloie','90'),(35670,75,'Foussemagne','90'),(35671,75,'Vescemont','90'),(35672,75,'Brebotte','90'),(35673,75,'Vellescot','90'),(35674,75,'Chavanatte','90'),(35675,75,'Essert','90'),(35676,75,'Urcerey','90'),(35677,75,'Rougegoutte','90'),(35678,75,'Romagny-sous-Rougemont','90'),(35679,75,'Petitefontaine','90'),(35680,75,'Petitmagny','90'),(35681,75,'Andelnans','90'),(35682,75,'Saint-Dizier-l\'Évêque','90'),(35683,75,'Sevenans','90'),(35684,75,'Lebetain','90'),(35685,75,'Lachapelle-sous-Chaux','90'),(35686,75,'Buc','90'),(35687,75,'Grange','90'),(35688,75,'Dorans','90'),(35689,75,'Thiancourt','90'),(35690,75,'Eguenigue','90'),(35691,75,'Faverois','90'),(35692,75,'Anjoutey','90'),(35693,75,'Villars-le-Sec','90'),(35694,75,'Chaux','90'),(35695,75,'Florimont','90'),(35696,75,'Beaucourt','90'),(35697,75,'Vétrigne','90'),(35698,75,'Montbouton','90'),(35699,75,'Fontenelle','90'),(35700,75,'Chavannes-les-Grands','90'),(35701,75,'Lacollonge','90'),(35702,75,'Bretagne','90'),(35703,75,'Lepuix-Neuf','90'),(35704,75,'Recouvrance','90'),(35705,75,'Janvry','91'),(35706,75,'Brunoy','91'),(35707,75,'Boissy-sous-Saint-Yon','91'),(35708,75,'Villebon-sur-Yvette','91'),(35709,75,'Monnerville','91'),(35710,75,'Gironville-sur-Essonne','91'),(35711,75,'Saint-Hilaire','91'),(35712,75,'Évry','91'),(35713,75,'Leudeville','91'),(35714,75,'Valpuiseaux','91'),(35715,75,'Dourdan','91'),(35716,75,'Estouches','91'),(35717,75,'Draveil','91'),(35718,75,'Marolles-en-Beauce','91'),(35719,75,'Mennecy','91'),(35720,75,'Grigny','91'),(35721,75,'Vert-le-Petit','91'),(35722,75,'Oncy-sur-École','91'),(35723,75,'Guillerval','91'),(35724,75,'Wissous','91'),(35725,75,'Vayres-sur-Essonne','91'),(35726,75,'Abbéville-la-Rivière','91'),(35727,75,'Avrainville','91'),(35728,75,'Ris-Orangis','91'),(35729,75,'Bures-sur-Yvette','91'),(35730,75,'Palaiseau','91'),(35731,75,'Arpajon','91'),(35732,75,'Guigneville-sur-Essonne','91'),(35733,75,'Épinay-sur-Orge','91'),(35734,75,'Blandy','91'),(35735,75,'Boussy-Saint-Antoine','91'),(35736,75,'Villabé','91'),(35737,75,'La Ville-du-Bois','91'),(35738,75,'Angervilliers','91'),(35739,75,'Écharcon','91'),(35740,75,'Ormoy','91'),(35741,75,'Cerny','91'),(35742,75,'Verrières-le-Buisson','91'),(35743,75,'Boissy-le-Cutté','91'),(35744,75,'Crosne','91'),(35745,75,'Moigny-sur-École','91'),(35746,75,'Longpont-sur-Orge','91'),(35747,75,'Mondeville','91'),(35748,75,'Saint-Michel-sur-Orge','91'),(35749,75,'Ballainvilliers','91'),(35750,75,'Villejust','91'),(35751,75,'Saint-Escobille','91'),(35752,75,'Saint-Pierre-du-Perray','91'),(35753,75,'Mérobert','91'),(35754,75,'Ballancourt-sur-Essonne','91'),(35755,75,'Maisse','91'),(35756,75,'Chamarande','91'),(35757,75,'Milly-la-Forêt','91'),(35758,75,'Breux-Jouy','91'),(35759,75,'Le Plessis-Pâté','91'),(35760,75,'Auvers-Saint-Georges','91'),(35761,75,'Auvernaux','91'),(35762,75,'Morsang-sur-Seine','91'),(35763,75,'Vigneux-sur-Seine','91'),(35764,75,'Champcueil','91'),(35765,75,'Courcouronnes','91'),(35766,75,'Boigneville','91'),(35767,75,'Étréchy','91'),(35768,75,'Authon-la-Plaine','91'),(35769,75,'Boissy-la-Rivière','91'),(35770,75,'Saintry-sur-Seine','91'),(35771,75,'Montlhéry','91'),(35772,75,'Fleury-Mérogis','91'),(35773,75,'Saint-Sulpice-de-Favières','91'),(35774,75,'Varennes-Jarcy','91'),(35775,75,'Videlles','91'),(35776,75,'Quincy-sous-Sénart','91'),(35777,75,'Orveau','91'),(35778,75,'Granges-le-Roi','91'),(35779,75,'Gometz-le-Châtel','91'),(35780,75,'Boutigny-sur-Essonne','91'),(35781,75,'Méréville','91'),(35782,75,'Boutervilliers','91'),(35783,75,'Mauchamps','91'),(35784,75,'Igny','91'),(35785,75,'Viry-Châtillon','91'),(35786,75,'Bouville','91'),(35787,75,'Étampes','91'),(35788,75,'Gometz-la-Ville','91'),(35789,75,'Arrancourt','91'),(35790,75,'Bièvres','91'),(35791,75,'D\'Huison-Longueville','91'),(35792,75,'Chatignonville','91'),(35793,75,'Dannemois','91'),(35794,75,'Chevannes','91'),(35795,75,'Forges-les-Bains','91'),(35796,75,'Angerville','91'),(35797,75,'Corbeil-Essonnes','91'),(35798,75,'Le Val-Saint-Germain','91'),(35799,75,'Puiselet-le-Marais','91'),(35800,75,'Bois-Herpin','91'),(35801,75,'Orsay','91'),(35802,75,'Tigery','91'),(35803,75,'Fontenay-le-Vicomte','91'),(35804,75,'Massy','91'),(35805,75,'La Ferté-Alais','91'),(35806,75,'Yerres','91'),(35807,75,'Paray-Vieille-Poste','91'),(35808,75,'Saint-Germain-lès-Arpajon','91'),(35809,75,'Saint-Maurice-Montcouronne','91'),(35810,75,'Gif-sur-Yvette','91'),(35811,75,'Pussay','91'),(35812,75,'Morangis','91'),(35813,75,'Villiers-sur-Orge','91'),(35814,75,'La Forêt-Sainte-Croix','91'),(35815,75,'Guibeville','91'),(35816,75,'Chilly-Mazarin','91'),(35817,75,'Champmotteux','91'),(35818,75,'Bouray-sur-Juine','91'),(35819,75,'Soisy-sur-École','91'),(35820,75,'Souzy-la-Briche','91'),(35821,75,'La Norville','91'),(35822,75,'Épinay-sous-Sénart','91'),(35823,75,'Brières-les-Scellés','91'),(35824,75,'Nainville-les-Roches','91'),(35825,75,'Ulis','91'),(35826,75,'Athis-Mons','91'),(35827,75,'Leuville-sur-Orge','91'),(35828,75,'Soisy-sur-Seine','91'),(35829,75,'Fontenay-lès-Briis','91'),(35830,75,'Saint-Cyr-la-Rivière','91'),(35831,75,'Lisses','91'),(35832,75,'Baulne','91'),(35833,75,'Briis-sous-Forges','91'),(35834,75,'Nozay','91'),(35835,75,'Ormoy-la-Rivière','91'),(35836,75,'Champlan','91'),(35837,75,'Roinvilliers','91'),(35838,75,'Richarville','91'),(35839,75,'Courson-Monteloup','91'),(35840,75,'Congerville-Thionville','91'),(35841,75,'Marcoussis','91'),(35842,75,'Boullay-les-Troux','91'),(35843,75,'La Forêt-le-Roi','91'),(35844,75,'Vaugrigneuse','91'),(35845,75,'Janville-sur-Juine','91'),(35846,75,'Étiolles','91'),(35847,75,'Linas','91'),(35848,75,'Saclas','91'),(35849,75,'Chauffour-lès-Étréchy','91'),(35850,75,'Saint-Jean-de-Beauregard','91'),(35851,75,'Morsang-sur-Orge','91'),(35852,75,'Juvisy-sur-Orge','91'),(35853,75,'Chalo-Saint-Mars','91'),(35854,75,'Vauhallan','91'),(35855,75,'Chalou-Moulineux','91'),(35856,75,'Vert-le-Grand','91'),(35857,75,'Montgeron','91'),(35858,75,'Saulx-les-Chartreux','91'),(35859,75,'Pecqueuse','91'),(35860,75,'Corbreuse','91'),(35861,75,'Brétigny-sur-Orge','91'),(35862,75,'Boissy-le-Sec','91'),(35863,75,'Villemoisson-sur-Orge','91'),(35864,75,'Saint-Chéron','91'),(35865,75,'Bondoufle','91'),(35866,75,'Le Coudray-Montceaux','91'),(35867,75,'Roinville','91'),(35868,75,'Brouy','91'),(35869,75,'Saint-Vrain','91'),(35870,75,'Sermaise','91'),(35871,75,'Saint-Aubin','91'),(35872,75,'Villeneuve-sur-Auvers','91'),(35873,75,'Saclay','91'),(35874,75,'Égly','91'),(35875,75,'Morigny-Champigny','91'),(35876,75,'Prunay-sur-Essonne','91'),(35877,75,'Saint-Germain-lès-Corbeil','91'),(35878,75,'Buno-Bonnevaux','91'),(35879,75,'Torfou','91'),(35880,75,'Fontaine-la-Rivière','91'),(35881,75,'Itteville','91'),(35882,75,'Breuillet','91'),(35883,75,'Villiers-le-Bâcle','91'),(35884,75,'Cheptainville','91'),(35885,75,'Lardy','91'),(35886,75,'Marolles-en-Hurepoix','91'),(35887,75,'Villeconin','91'),(35888,75,'Sainte-Geneviève-des-Bois','91'),(35889,75,'Bruyères-le-Châtel','91'),(35890,75,'Savigny-sur-Orge','91'),(35891,75,'Saint-Cyr-sous-Dourdan','91'),(35892,75,'Ollainville','91'),(35893,75,'Mespuits','91'),(35894,75,'Plessis-Saint-Benoist','91'),(35895,75,'Courdimanche-sur-Essonne','91'),(35896,75,'Courances','91'),(35897,75,'Limours','91'),(35898,75,'Molières','91'),(35899,75,'Longjumeau','91'),(35900,75,'Saint-Yon','91'),(35901,75,'Neuilly-sur-Seine','92'),(35902,75,'Châtillon','92'),(35903,75,'Bois-Colombes','92'),(35904,75,'Puteaux','92'),(35905,75,'Clamart','92'),(35906,75,'Meudon','92'),(35907,75,'Marnes-la-Coquette','92'),(35908,75,'Issy-les-Moulineaux','92'),(35909,75,'Vaucresson','92'),(35910,75,'Rueil-Malmaison','92'),(35911,75,'Antony','92'),(35912,75,'Le Plessis-Robinson','92'),(35913,75,'Levallois-Perret','92'),(35914,75,'Boulogne-Billancourt','92'),(35915,75,'Asnières-sur-Seine','92'),(35916,75,'Colombes','92'),(35917,75,'Fontenay-aux-Roses','92'),(35918,75,'Garches','92'),(35919,75,'Villeneuve-la-Garenne','92'),(35920,75,'Courbevoie','92'),(35921,75,'Montrouge','92'),(35922,75,'Châtenay-Malabry','92'),(35923,75,'Clichy','92'),(35924,75,'Vanves','92'),(35925,75,'Ville-d\'Avray','92'),(35926,75,'Suresnes','92'),(35927,75,'Sèvres','92'),(35928,75,'Sceaux','92'),(35929,75,'Chaville','92'),(35930,75,'La Garenne-Colombes','92'),(35931,75,'Gennevilliers','92'),(35932,75,'Nanterre','92'),(35933,75,'Saint-Cloud','92'),(35934,75,'Malakoff','92'),(35935,75,'Bagneux','92'),(35936,75,'Bourg-la-Reine','92'),(35937,75,'Le Bourget','93'),(35938,75,'Bagnolet','93'),(35939,75,'La Courneuve','93'),(35940,75,'Pavillons-sous-Bois','93'),(35941,75,'Sevran','93'),(35942,75,'Villemomble','93'),(35943,75,'Montreuil','93'),(35944,75,'Livry-Gargan','93'),(35945,75,'Aulnay-sous-Bois','93'),(35946,75,'Dugny','93'),(35947,75,'Coubron','93'),(35948,75,'Villetaneuse','93'),(35949,75,'Le Raincy','93'),(35950,75,'Saint-Denis','93'),(35951,75,'Lilas','93'),(35952,75,'Clichy-sous-Bois','93'),(35953,75,'Noisy-le-Grand','93'),(35954,75,'Romainville','93'),(35955,75,'Aubervilliers','93'),(35956,75,'Noisy-le-Sec','93'),(35957,75,'Villepinte','93'),(35958,75,'Bobigny','93'),(35959,75,'Pierrefitte-sur-Seine','93'),(35960,75,'Tremblay-en-France','93'),(35961,75,'Vaujours','93'),(35962,75,'Montfermeil','93'),(35963,75,'L\'Île-Saint-Denis','93'),(35964,75,'Le Pré-Saint-Gervais','93'),(35965,75,'Stains','93'),(35966,75,'Pantin','93'),(35967,75,'Neuilly-Plaisance','93'),(35968,75,'Rosny-sous-Bois','93'),(35969,75,'Saint-Ouen','93'),(35970,75,'Gournay-sur-Marne','93'),(35971,75,'Bondy','93'),(35972,75,'Épinay-sur-Seine','93'),(35973,75,'Neuilly-sur-Marne','93'),(35974,75,'Drancy','93'),(35975,75,'Le Blanc-Mesnil','93'),(35976,75,'Gagny','93'),(35977,75,'Fontenay-sous-Bois','94'),(35978,75,'Santeny','94'),(35979,75,'L\'Haÿ-les-Roses','94'),(35980,75,'Limeil-Brévannes','94'),(35981,75,'Alfortville','94'),(35982,75,'Le Plessis-Trévise','94'),(35983,75,'Choisy-le-Roi','94'),(35984,75,'Saint-Mandé','94'),(35985,75,'Fresnes','94'),(35986,75,'Villiers-sur-Marne','94'),(35987,75,'Le Kremlin-Bicêtre','94'),(35988,75,'Boissy-Saint-Léger','94'),(35989,75,'La Queue-en-Brie','94'),(35990,75,'Ormesson-sur-Marne','94'),(35991,75,'Arcueil','94'),(35992,75,'Marolles-en-Brie','94'),(35993,75,'Villecresnes','94'),(35994,75,'Le Perreux-sur-Marne','94'),(35995,75,'Valenton','94'),(35996,75,'Nogent-sur-Marne','94'),(35997,75,'Cachan','94'),(35998,75,'Saint-Maur-des-Fossés','94'),(35999,75,'Rungis','94'),(36000,75,'Thiais','94'),(36001,75,'Sucy-en-Brie','94'),(36002,75,'Mandres-les-Roses','94'),(36003,75,'Vincennes','94'),(36004,75,'Charenton-le-Pont','94'),(36005,75,'Saint-Maurice','94'),(36006,75,'Bry-sur-Marne','94'),(36007,75,'Bonneuil-sur-Marne','94'),(36008,75,'Joinville-le-Pont','94'),(36009,75,'Ablon-sur-Seine','94'),(36010,75,'Noiseau','94'),(36011,75,'Gentilly','94'),(36012,75,'Villejuif','94'),(36013,75,'Vitry-sur-Seine','94'),(36014,75,'Chevilly-Larue','94'),(36015,75,'Chennevières-sur-Marne','94'),(36016,75,'Périgny','94'),(36017,75,'Champigny-sur-Marne','94'),(36018,75,'Ivry-sur-Seine','94'),(36019,75,'Maisons-Alfort','94'),(36020,75,'Orly','94'),(36021,75,'Villeneuve-le-Roi','94'),(36022,75,'Villeneuve-Saint-Georges','94'),(36023,75,'Créteil','94'),(36024,75,'Baillet-en-France','95'),(36025,75,'Osny','95'),(36026,75,'Hodent','95'),(36027,75,'Montreuil-sur-Epte','95'),(36028,75,'Cergy','95'),(36029,75,'Chennevières-lès-Louvres','95'),(36030,75,'Montlignon','95'),(36031,75,'Fontenay-en-Parisis','95'),(36032,75,'Ézanville','95'),(36033,75,'Neuville-sur-Oise','95'),(36034,75,'Sagy','95'),(36035,75,'Théméricourt','95'),(36036,75,'Butry-sur-Oise','95'),(36037,75,'Le Plessis-Luzarches','95'),(36038,75,'Jouy-le-Moutier','95'),(36039,75,'Mareil-en-France','95'),(36040,75,'Bréançon','95'),(36041,75,'Chaussy','95'),(36042,75,'Vallangoujard','95'),(36043,75,'Magny-en-Vexin','95'),(36044,75,'Bellefontaine','95'),(36045,75,'Haravilliers','95'),(36046,75,'Survilliers','95'),(36047,75,'Le Heaulme','95'),(36048,75,'Courcelles-sur-Viosne','95'),(36049,75,'Brignancourt','95'),(36050,75,'Seraincourt','95'),(36051,75,'Vémars','95'),(36052,75,'Domont','95'),(36053,75,'Bonneuil-en-France','95'),(36054,75,'Montmorency','95'),(36055,75,'Bruyères-sur-Oise','95'),(36056,75,'Épiais-lès-Louvres','95'),(36057,75,'Montgeroult','95'),(36058,75,'Margency','95'),(36059,75,'Pontoise','95'),(36060,75,'Menouville','95'),(36061,75,'Cléry-en-Vexin','95'),(36062,75,'Commeny','95'),(36063,75,'Épiais-Rhus','95'),(36064,75,'Vauréal','95'),(36065,75,'Bray-et-Lû','95'),(36066,75,'Marly-la-Ville','95'),(36067,75,'Le Perchay','95'),(36068,75,'Génicourt','95'),(36069,75,'Amenucourt','95'),(36070,75,'Condécourt','95'),(36071,75,'Groslay','95'),(36072,75,'Menucourt','95'),(36073,75,'Saint-Witz','95'),(36074,75,'Piscop','95'),(36075,75,'Nucourt','95'),(36076,75,'Arronville','95'),(36077,75,'Herblay','95'),(36078,75,'Asnières-sur-Oise','95'),(36079,75,'Presles','95'),(36080,75,'Lassy','95'),(36081,75,'Andilly','95'),(36082,75,'Haute-Isle','95'),(36083,75,'Chaumontel','95'),(36084,75,'Villaines-sous-Bois','95'),(36085,75,'Ermont','95'),(36086,75,'Auvers-sur-Oise','95'),(36087,75,'Saint-Brice-sous-Forêt','95'),(36088,75,'Arthies','95'),(36089,75,'Grisy-les-Plâtres','95'),(36090,75,'Puiseux-en-France','95'),(36091,75,'Goussainville','95'),(36092,75,'Moussy','95'),(36093,75,'Pierrelaye','95'),(36094,75,'Franconville','95'),(36095,75,'Louvres','95'),(36096,75,'Gouzangrez','95'),(36097,75,'Le Bellay-en-Vexin','95'),(36098,75,'Gonesse','95'),(36099,75,'La Chapelle-en-Vexin','95'),(36100,75,'Hédouville','95'),(36101,75,'Villers-en-Arthies','95'),(36102,75,'Saint-Martin-du-Tertre','95'),(36103,75,'Seugy','95'),(36104,75,'Roissy-en-France','95'),(36105,75,'Boissy-l\'Aillerie','95'),(36106,75,'La Frette-sur-Seine','95'),(36107,75,'Wy-dit-Joli-Village','95'),(36108,75,'Deuil-la-Barre','95'),(36109,75,'Bezons','95'),(36110,75,'Courdimanche','95'),(36111,75,'Ronquerolles','95'),(36112,75,'Saint-Gratien','95'),(36113,75,'Bernes-sur-Oise','95'),(36114,75,'Nesles-la-Vallée','95'),(36115,75,'Chars','95'),(36116,75,'Viarmes','95'),(36117,75,'Neuilly-en-Vexin','95'),(36118,75,'Taverny','95'),(36119,75,'Bessancourt','95'),(36120,75,'Vigny','95'),(36121,75,'Ableiges','95'),(36122,75,'Beaumont-sur-Oise','95'),(36123,75,'Theuville','95'),(36124,75,'Saint-Clair-sur-Epte','95'),(36125,75,'Vienne-en-Arthies','95'),(36126,75,'Cormeilles-en-Parisis','95'),(36127,75,'Labbeville','95'),(36128,75,'Livilliers','95'),(36129,75,'Charmont','95'),(36130,75,'Bouffémont','95'),(36131,75,'Berville','95'),(36132,75,'Sannois','95'),(36133,75,'Villeron','95'),(36134,75,'Écouen','95'),(36135,75,'Saint-Cyr-en-Arthies','95'),(36136,75,'Saint-Prix','95'),(36137,75,'Ennery','95'),(36138,75,'Saint-Leu-la-Forêt','95'),(36139,75,'Attainville','95'),(36140,75,'Belloy-en-France','95'),(36141,75,'Frouville','95'),(36142,75,'Us','95'),(36143,75,'Champagne-sur-Oise','95'),(36144,75,'Boisemont','95'),(36145,75,'Chauvry','95'),(36146,75,'Ambleville','95'),(36147,75,'Béthemont-la-Forêt','95'),(36148,75,'Le Thillay','95'),(36149,75,'Saint-Ouen-l\'Aumône','95'),(36150,75,'Maffliers','95'),(36151,75,'Noisy-sur-Oise','95'),(36152,75,'Nerville-la-Forêt','95'),(36153,75,'Persan','95'),(36154,75,'L\'Isle-Adam','95'),(36155,75,'Garges-lès-Gonesse','95'),(36156,75,'Montmagny','95'),(36157,75,'Montigny-lès-Cormeilles','95'),(36158,75,'Cormeilles-en-Vexin','95'),(36159,75,'Chérence','95'),(36160,75,'Omerville','95'),(36161,75,'Luzarches','95'),(36162,75,'Aincourt','95'),(36163,75,'Avernes','95'),(36164,75,'Hérouville','95'),(36165,75,'Frémécourt','95'),(36166,75,'Frémainville','95'),(36167,75,'Saint-Gervais','95'),(36168,75,'Buhy','95'),(36169,75,'Eaubonne','95'),(36170,75,'Valmondois','95'),(36171,75,'Montsoult','95'),(36172,75,'Parmain','95'),(36173,75,'La Roche-Guyon','95'),(36174,75,'Argenteuil','95'),(36175,75,'Le Plessis-Bouchard','95'),(36176,75,'Villiers-le-Bel','95'),(36177,75,'Éragny','95'),(36178,75,'Vaudherland','95'),(36179,75,'Gadancourt','95'),(36180,75,'Sarcelles','95'),(36181,75,'Longuesse','95'),(36182,75,'Nointel','95'),(36183,75,'Le Plessis-Gassot','95'),(36184,75,'Méry-sur-Oise','95'),(36185,75,'Mériel','95'),(36186,75,'Soisy-sous-Montmorency','95'),(36187,75,'Banthelu','95'),(36188,75,'Guiry-en-Vexin','95'),(36189,75,'Santeuil','95'),(36190,75,'Frépillon','95'),(36191,75,'Bouqueval','95'),(36192,75,'Épinay-Champlâtreux','95'),(36193,75,'Villiers-le-Sec','95'),(36194,75,'Beauchamp','95'),(36195,75,'Le Mesnil-Aubry','95'),(36196,75,'Châtenay-en-France','95'),(36197,75,'Enghien-les-Bains','95'),(36198,75,'Genainville','95'),(36199,75,'Marines','95'),(36200,75,'Mours','95'),(36201,75,'Arnouville','95'),(36202,75,'Jagny-sous-Bois','95'),(36203,75,'Puiseux-Pontoise','95'),(36204,75,'Moisselles','95'),(36205,75,'Vétheuil','95'),(36206,75,'Villiers-Adam','95'),(36207,75,'Maudétour-en-Vexin','95'),(36208,75,'Fosses','95'),(36209,75,'Cristinacce','2A'),(36210,75,'Évisa','2A'),(36211,75,'Serriera','2A'),(36212,75,'Guagno','2A'),(36213,75,'Azzana','2A'),(36214,75,'Pastricciola','2A'),(36215,75,'Rezza','2A'),(36216,75,'Rosazia','2A'),(36217,75,'Salice','2A'),(36218,75,'Balogna','2A'),(36219,75,'Murzo','2A'),(36220,75,'Arbori','2A'),(36221,75,'Vico','2A'),(36222,75,'Cargèse','2A'),(36223,75,'Ota','2A'),(36224,75,'Partinello','2A'),(36225,75,'Tavera','2A'),(36226,75,'Bocognano','2A'),(36227,75,'Vero','2A'),(36228,75,'Lopigna','2A'),(36229,75,'Arro','2A'),(36230,75,'Casaglione','2A'),(36231,75,'Ambiegna','2A'),(36232,75,'Coggia','2A'),(36233,75,'Orto','2A'),(36234,75,'Poggiolo','2A'),(36235,75,'Soccia','2A'),(36236,75,'Marignana','2A'),(36237,75,'Renno','2A'),(36238,75,'Bastelica','2A'),(36239,75,'Peri','2A'),(36240,75,'Ucciani','2A'),(36241,75,'Carbuccia','2A'),(36242,75,'Sarrola-Carcopino','2A'),(36243,75,'Tavaco','2A'),(36244,75,'Cannelle','2A'),(36245,75,'Sari-d\'Orcino','2A'),(36246,75,'Calcatoggio','2A'),(36247,75,'Valle-di-Mezzana','2A'),(36248,75,'Appietto','2A'),(36249,75,'Sant\'Andréa-d\'Orcino','2A'),(36250,75,'Letia','2A'),(36251,75,'Piana','2A'),(36252,75,'Palneca','2A'),(36253,75,'Ciamannacce','2A'),(36254,75,'Cozzano','2A'),(36255,75,'Tasso','2A'),(36256,75,'Sampolo','2A'),(36257,75,'Tolla','2A'),(36258,75,'Ocana','2A'),(36259,75,'Cuttoli-Corticchiato','2A'),(36260,75,'Afa','2A'),(36261,75,'Alata','2A'),(36262,75,'Villanova','2A'),(36263,75,'Osani','2A'),(36264,75,'Corrano','2A'),(36265,75,'Zicavo','2A'),(36266,75,'Guitera-les-Bains','2A'),(36267,75,'Santa-Maria-Siché','2A'),(36268,75,'Quasquara','2A'),(36269,75,'Zévaco','2A'),(36270,75,'Campo','2A'),(36271,75,'Frasseto','2A'),(36272,75,'Cauro','2A'),(36273,75,'Eccica-Suarella','2A'),(36274,75,'Bastelicaccia','2A'),(36275,75,'Ajaccio','2A'),(36276,75,'Sari-Solenzara','2A'),(36277,75,'Olivese','2A'),(36278,75,'Forciolo','2A'),(36279,75,'Azilone-Ampaza','2A'),(36280,75,'Zigliara','2A'),(36281,75,'Argiusta-Moriccio','2A'),(36282,75,'Cardo-Torgia','2A'),(36283,75,'Grosseto-Prugna','2A'),(36284,75,'Cognocoli-Monticchi','2A'),(36285,75,'Guargualé','2A'),(36286,75,'Urbalacone','2A'),(36287,75,'Albitreccia','2A'),(36288,75,'Pietrosella','2A'),(36289,75,'Conca','2A'),(36290,75,'Quenza','2A'),(36291,75,'Zonza','2A'),(36292,75,'Serra-di-Scopamène','2A'),(36293,75,'Sorbollano','2A'),(36294,75,'Aullène','2A'),(36295,75,'Zérubia','2A'),(36296,75,'Petreto-Bicchisano','2A'),(36297,75,'Moca-Croce','2A'),(36298,75,'Pila-Canale','2A'),(36299,75,'Coti-Chiavari','2A'),(36300,75,'Lecci','2A'),(36301,75,'San-Gavino-di-Carbini','2A'),(36302,75,'Levie','2A'),(36303,75,'Olmiccia','2A'),(36304,75,'Sainte-Lucie-de-Tallano','2A'),(36305,75,'Altagène','2A'),(36306,75,'Cargiaca','2A'),(36307,75,'Loreto-di-Tallano','2A'),(36308,75,'Mela','2A'),(36309,75,'Zoza','2A'),(36310,75,'Fozzano','2A'),(36311,75,'Santa-Maria-Figaniella','2A'),(36312,75,'Casalabriva','2A'),(36313,75,'Olmeto','2A'),(36314,75,'Sollacaro','2A'),(36315,75,'Serra-di-Ferro','2A'),(36316,75,'Carbini','2A'),(36317,75,'Arbellara','2A'),(36318,75,'Granace','2A'),(36319,75,'Viggianello','2A'),(36320,75,'Propriano','2A'),(36321,75,'Porto-Vecchio','2A'),(36322,75,'Foce','2A'),(36323,75,'Sartène','2A'),(36324,75,'Giuncheto','2A'),(36325,75,'Grossa','2A'),(36326,75,'Bilia','2A'),(36327,75,'Belvédère-Campomoro','2A'),(36328,75,'Sotta','2A'),(36329,75,'Figari','2A'),(36330,75,'Pianottoli-Caldarello','2A'),(36331,75,'Monacia-d\'Aullène','2A'),(36332,75,'Bonifacio','2A'),(36333,75,'Campana','2B'),(36334,75,'Castineta','2B'),(36335,75,'Nocario','2B'),(36336,75,'Saliceto','2B'),(36337,75,'Gavignano','2B'),(36338,75,'Poggio-Marinaccio','2B'),(36339,75,'Quercitello','2B'),(36340,75,'La Porta','2B'),(36341,75,'Morosaglia','2B'),(36342,75,'Aiti','2B'),(36343,75,'Piedigriggio','2B'),(36344,75,'Prato-di-Giovellina','2B'),(36345,75,'Popolasca','2B'),(36346,75,'Castiglione','2B'),(36347,75,'Asco','2B'),(36348,75,'Santa-Maria-Poggio','2B'),(36349,75,'Cervione','2B'),(36350,75,'San-Giuliano','2B'),(36351,75,'Valle-di-Campoloro','2B'),(36352,75,'Santa-Reparata-di-Moriani','2B'),(36353,75,'Piedipartino','2B'),(36354,75,'Piedicroce','2B'),(36355,75,'Carpineto','2B'),(36356,75,'Valle-d\'Orezza','2B'),(36357,75,'Parata','2B'),(36358,75,'Felce','2B'),(36359,75,'Perelli','2B'),(36360,75,'Piobetta','2B'),(36361,75,'Pietricaggio','2B'),(36362,75,'Tarrano','2B'),(36363,75,'Rapaggio','2B'),(36364,75,'Stazzona','2B'),(36365,75,'Valle-d\'Alesani','2B'),(36366,75,'Carcheto-Brustico','2B'),(36367,75,'Pie-d\'Orezza','2B'),(36368,75,'San-Lorenzo','2B'),(36369,75,'Carticasi','2B'),(36370,75,'Cambia','2B'),(36371,75,'Érone','2B'),(36372,75,'Lano','2B'),(36373,75,'Rusio','2B'),(36374,75,'Tralonca','2B'),(36375,75,'Omessa','2B'),(36376,75,'Castirla','2B'),(36377,75,'Soveria','2B'),(36378,75,'Corscia','2B'),(36379,75,'Manso','2B'),(36380,75,'Galéria','2B'),(36381,75,'Canale-di-Verde','2B'),(36382,75,'Ortale','2B'),(36383,75,'Pietra-di-Verde','2B'),(36384,75,'Sant\'Andréa-di-Cotone','2B'),(36385,75,'Campi','2B'),(36386,75,'Linguizzetta','2B'),(36387,75,'Chiatra','2B'),(36388,75,'Pianello','2B'),(36389,75,'Matra','2B'),(36390,75,'Moïta','2B'),(36391,75,'Novale','2B'),(36392,75,'Piazzali','2B'),(36393,75,'Zuani','2B'),(36394,75,'Sermano','2B'),(36395,75,'Bustanico','2B'),(36396,75,'Alzi','2B'),(36397,75,'Alando','2B'),(36398,75,'Mazzola','2B'),(36399,75,'Sant\'Andréa-di-Bozio','2B'),(36400,75,'Favalello','2B'),(36401,75,'Castellare-di-Mercurio','2B'),(36402,75,'Santa-Lucia-di-Mercurio','2B'),(36403,75,'Corte','2B'),(36404,75,'Albertacce','2B'),(36405,75,'Casamaccioli','2B'),(36406,75,'Lozzi','2B'),(36407,75,'Calacuccia','2B'),(36408,75,'Tallone','2B'),(36409,75,'Tox','2B'),(36410,75,'Giuncaggio','2B'),(36411,75,'Pietraserena','2B'),(36412,75,'Ampriani','2B'),(36413,75,'Pancheraccia','2B'),(36414,75,'Zalana','2B'),(36415,75,'Erbajolo','2B'),(36416,75,'Focicchia','2B'),(36417,75,'Altiani','2B'),(36418,75,'Piedicorte-di-Gaggio','2B'),(36419,75,'Poggio-di-Venaco','2B'),(36420,75,'Riventosa','2B'),(36421,75,'Venaco','2B'),(36422,75,'Santo-Pietro-di-Venaco','2B'),(36423,75,'Casanova','2B'),(36424,75,'Antisanti','2B'),(36425,75,'Pietroso','2B'),(36426,75,'Rospigliani','2B'),(36427,75,'Vezzani','2B'),(36428,75,'Ersa','2B'),(36429,75,'Vivario','2B'),(36430,75,'Muracciole','2B'),(36431,75,'Aléria','2B'),(36432,75,'Aghione','2B'),(36433,75,'Casevecchie','2B'),(36434,75,'Ghisoni','2B'),(36435,75,'Poggio-di-Nazza','2B'),(36436,75,'Lugo-di-Nazza','2B'),(36437,75,'Ghisonaccia','2B'),(36438,75,'Serra-di-Fiumorbo','2B'),(36439,75,'Prunelli-di-Fiumorbo','2B'),(36440,75,'San-Gavino-di-Fiumorbo','2B'),(36441,75,'Isolaccio-di-Fiumorbo','2B'),(36442,75,'Ventiseri','2B'),(36443,75,'Chisa','2B'),(36444,75,'Solaro','2B'),(36445,75,'Noceta','2B'),(36446,75,'Meria','2B'),(36447,75,'Tomino','2B'),(36448,75,'Morsiglia','2B'),(36449,75,'Centuri','2B'),(36450,75,'Rogliano','2B'),(36451,75,'Cagnano','2B'),(36452,75,'Barrettali','2B'),(36453,75,'Pino','2B'),(36454,75,'Luri','2B'),(36455,75,'Pietracorbara','2B'),(36456,75,'Sisco','2B'),(36457,75,'Olcani','2B'),(36458,75,'Canari','2B'),(36459,75,'Ogliastro','2B'),(36460,75,'Brando','2B'),(36461,75,'Santa-Maria-di-Lota','2B'),(36462,75,'Olmeta-di-Capocorso','2B'),(36463,75,'Nonza','2B'),(36464,75,'Bastia','2B'),(36465,75,'San-Martino-di-Lota','2B'),(36466,75,'Ville-di-Pietrabugno','2B'),(36467,75,'Barbaggio','2B'),(36468,75,'Patrimonio','2B'),(36469,75,'Farinole','2B'),(36470,75,'Biguglia','2B'),(36471,75,'Furiani','2B'),(36472,75,'Poggio-d\'Oletta','2B'),(36473,75,'Oletta','2B'),(36474,75,'Saint-Florent','2B'),(36475,75,'Vallecalle','2B'),(36476,75,'Rapale','2B'),(36477,75,'Olmeta-di-Tuda','2B'),(36478,75,'Rutali','2B'),(36479,75,'Murato','2B'),(36480,75,'San-Gavino-di-Tenda','2B'),(36481,75,'Santo-Pietro-di-Tenda','2B'),(36482,75,'Piève','2B'),(36483,75,'Sorio','2B'),(36484,75,'Urtaca','2B'),(36485,75,'Lama','2B'),(36486,75,'Novella','2B'),(36487,75,'Belgodère','2B'),(36488,75,'Palasca','2B'),(36489,75,'L\'Île-Rousse','2B'),(36490,75,'Pigna','2B'),(36491,75,'Monticello','2B'),(36492,75,'Sant\'Antonino','2B'),(36493,75,'Santa-Reparata-di-Balagna','2B'),(36494,75,'Corbara','2B'),(36495,75,'Algajola','2B'),(36496,75,'Vignale','2B'),(36497,75,'Lucciana','2B'),(36498,75,'Borgo','2B'),(36499,75,'Prunelli-di-Casacconi','2B'),(36500,75,'Scolca','2B'),(36501,75,'Volpajola','2B'),(36502,75,'Campitello','2B'),(36503,75,'Bigorno','2B'),(36504,75,'Lento','2B'),(36505,75,'Pietralba','2B'),(36506,75,'Vallica','2B'),(36507,75,'Olmi-Cappella','2B'),(36508,75,'Speloncato','2B'),(36509,75,'Pioggiola','2B'),(36510,75,'Costa','2B'),(36511,75,'Ville-di-Paraso','2B'),(36512,75,'Occhiatana','2B'),(36513,75,'Avapessa','2B'),(36514,75,'Muro','2B'),(36515,75,'Zilia','2B'),(36516,75,'Nessa','2B'),(36517,75,'Feliceto','2B'),(36518,75,'Montegrosso','2B'),(36519,75,'Lavatoggio','2B'),(36520,75,'Cateri','2B'),(36521,75,'Lumio','2B'),(36522,75,'Aregno','2B'),(36523,75,'Calvi','2B'),(36524,75,'Venzolasca','2B'),(36525,75,'Taglio-Isolaccio','2B'),(36526,75,'Sorbo-Ocagnano','2B'),(36527,75,'Castellare-di-Casinca','2B'),(36528,75,'Penta-di-Casinca','2B'),(36529,75,'Porri','2B'),(36530,75,'Vescovato','2B'),(36531,75,'Casabianca','2B'),(36532,75,'Penta-Acquatella','2B'),(36533,75,'Piano','2B'),(36534,75,'Monte','2B'),(36535,75,'Loreto-di-Casinca','2B'),(36536,75,'Olmo','2B'),(36537,75,'Silvareccio','2B'),(36538,75,'Casalta','2B'),(36539,75,'Castello-di-Rostino','2B'),(36540,75,'Giocatojo','2B'),(36541,75,'Bisinchi','2B'),(36542,75,'Campile','2B'),(36543,75,'Ortiporio','2B'),(36544,75,'Crocicchia','2B'),(36545,75,'Valle-di-Rostino','2B'),(36546,75,'Canavaggia','2B'),(36547,75,'Moltifao','2B'),(36548,75,'Castifao','2B'),(36549,75,'Mausoléo','2B'),(36550,75,'Calenzana','2B'),(36551,75,'Moncale','2B'),(36552,75,'Santa-Lucia-di-Moriani','2B'),(36553,75,'San-Nicolao','2B'),(36554,75,'Talasani','2B'),(36555,75,'Pero-Casevecchie','2B'),(36556,75,'Velone-Orneto','2B'),(36557,75,'Pruno','2B'),(36558,75,'Poggio-Mezzana','2B'),(36559,75,'San-Giovanni-di-Moriani','2B'),(36560,75,'Croce','2B'),(36561,75,'Ficaja','2B'),(36562,75,'San-Damiano','2B'),(36563,75,'Monacia-d\'Orezza','2B'),(36564,75,'Piazzole','2B'),(36565,75,'San-Gavino-d\'Ampugnani','2B'),(36566,75,'Verdèse','2B'),(36567,75,'Polveroso','2B'),(36568,75,'Scata','2B'),(36569,75,'Abymes','971'),(36570,75,'Anse-Bertrand','971'),(36571,75,'Baie-Mahault','971'),(36572,75,'Baillif','971'),(36573,75,'Basse-Terre','971'),(36574,75,'Bouillante','971'),(36575,75,'Capesterre-Belle-Eau','971'),(36576,75,'Capesterre-de-Marie-Galante','971'),(36577,75,'Gourbeyre','971'),(36578,75,'Désirade','971'),(36579,75,'Deshaies','971'),(36580,75,'Grand-Bourg','971'),(36581,75,'Gosier','971'),(36582,75,'Goyave','971'),(36583,75,'Lamentin','971'),(36584,75,'Morne-à-l\'Eau','971'),(36585,75,'Moule','971'),(36586,75,'Petit-Bourg','971'),(36587,75,'Petit-Canal','971'),(36588,75,'Pointe-à-Pitre','971'),(36589,75,'Pointe-Noire','971'),(36590,75,'Port-Louis','971'),(36591,75,'Saint-Claude','971'),(36592,75,'Saint-François','971'),(36593,75,'Saint-Louis','971'),(36594,75,'Sainte-Anne','971'),(36595,75,'Sainte-Rose','971'),(36596,75,'Terre-de-Bas','971'),(36597,75,'Terre-de-Haut','971'),(36598,75,'Trois-Rivières','971'),(36599,75,'Vieux-Fort','971'),(36600,75,'Vieux-Habitants','971'),(36601,75,'Ajoupa-Bouillon','972'),(36602,75,'Les Anses-d\'Arlet','972'),(36603,75,'Basse-Pointe','972'),(36604,75,'Carbet','972'),(36605,75,'Case-Pilote','972'),(36606,75,'Diamant','972'),(36607,75,'Ducos','972'),(36608,75,'Fonds-Saint-Denis','972'),(36609,75,'Fort-de-France','972'),(36610,75,'François','972'),(36611,75,'Grand\'Rivière','972'),(36612,75,'Gros-Morne','972'),(36613,75,'Lamentin','972'),(36614,75,'Lorrain','972'),(36615,75,'Macouba','972'),(36616,75,'Marigot','972'),(36617,75,'Marin','972'),(36618,75,'Morne-Rouge','972'),(36619,75,'Prêcheur','972'),(36620,75,'Rivière-Pilote','972'),(36621,75,'Rivière-Salée','972'),(36622,75,'Robert','972'),(36623,75,'Saint-Esprit','972'),(36624,75,'Saint-Joseph','972'),(36625,75,'Saint-Pierre','972'),(36626,75,'Sainte-Anne','972'),(36627,75,'Sainte-Luce','972'),(36628,75,'Sainte-Marie','972'),(36629,75,'SHOELCHER','972'),(36630,75,'Trinité','972'),(36631,75,'Trois-Îlets','972'),(36632,75,'Vauclin','972'),(36633,75,'Morne-Vert','972'),(36634,75,'Bellefontaine','972'),(36635,75,'Régina','973'),(36636,75,'Cayenne','973'),(36637,75,'Iracoubo','973'),(36638,75,'Kourou','973'),(36639,75,'MACOURIA TONATE','973'),(36640,75,'Mana','973'),(36641,75,'Matoury','973'),(36642,75,'Saint-Georges','973'),(36643,75,'Remire-Montjoly','973'),(36644,75,'Roura','973'),(36645,75,'Saint-Laurent-du-Maroni','973'),(36646,75,'Sinnamary','973'),(36647,75,'Montsinéry-Tonnegrande','973'),(36648,75,'Ouanary','973'),(36649,75,'Saül','973'),(36650,75,'Maripasoula','973'),(36651,75,'Camopi','973'),(36652,75,'Grand-Santi','973'),(36653,75,'Saint-Élie','973'),(36654,75,'Apatou','973'),(36655,75,'Awala-Yalimapo','973'),(36656,75,'POMPIDOU PAPA ICHTON','973'),(36657,75,'Avirons','974'),(36658,75,'Bras-Panon','974'),(36659,75,'Entre-Deux','974'),(36660,75,'Étang-Salé','974'),(36661,75,'Petite-Île','974'),(36662,75,'Plaine-des-Palmistes','974'),(36663,75,'Port','974'),(36664,75,'Possession','974'),(36665,75,'Saint-André','974'),(36666,75,'Saint-Benoît','974'),(36667,75,'Saint-Denis','974'),(36668,75,'Saint-Joseph','974'),(36669,75,'Saint-Leu','974'),(36670,75,'Saint-Louis','974'),(36671,75,'Saint-Paul','974'),(36672,75,'Saint-Pierre','974'),(36673,75,'Saint-Philippe','974'),(36674,75,'Sainte-Marie','974'),(36675,75,'Sainte-Rose','974'),(36676,75,'Sainte-Suzanne','974'),(36677,75,'Salazie','974'),(36678,75,'Tampon','974'),(36679,75,'Trois-Bassins','974'),(36680,75,'Cilaos','974'),(36681,75,'Acoua','976'),(36682,75,'Bandraboua','976'),(36683,75,'Bandrele','976'),(36684,75,'Bouéni','976'),(36685,75,'Chiconi','976'),(36686,75,'Chirongui','976'),(36687,75,'Dembeni','976'),(36688,75,'Dzaoudzi','976'),(36689,75,'Kani-Kéli','976'),(36690,75,'Koungou','976'),(36691,75,'Mamoudzou','976'),(36692,75,'Mtsamboro','976'),(36693,75,'M\'Tsangamouji','976'),(36694,75,'Ouangani','976'),(36695,75,'Pamandzi','976'),(36696,75,'Sada','976'),(36697,75,'Tsingoni','976'),(36698,75,'Saint-Barthélemy','971'),(36699,75,'Saint-Martin','971'),(36700,75,'Saint-Pierre-et-Miquelon','975'),(36701,44,'Beijing',NULL),(36702,84,'Hamburg',NULL),(36703,18,'Jumet',NULL),(36704,75,'TOURS CEDEX 2',NULL),(36705,75,'TOURS Cedex 2',NULL),(36706,75,'PARIS LA DEFENSE 12 CEDEX',NULL),(36707,75,'TOURS CEDEX 1',NULL),(36708,75,'TOURS Cedex 2',NULL),(36709,75,'ST DIDIER AU MONT D OR',NULL),(36710,75,'',NULL),(36711,75,'',NULL),(36712,75,'',NULL),(36713,75,'',NULL),(36714,75,'',NULL),(36715,75,'',NULL),(36716,75,'',NULL),(36717,75,'',NULL),(36718,75,'',NULL),(36719,75,'',NULL),(36720,75,'',NULL),(36721,75,'',NULL),(36722,75,'',NULL),(36723,75,'',NULL),(36724,75,'',NULL),(36725,75,'',NULL),(36726,75,'',NULL),(36727,75,'',NULL),(36728,75,'',NULL),(36729,75,'',NULL),(36730,75,'',NULL),(36731,75,'',NULL),(36732,75,'',NULL),(36733,75,'',NULL),(36734,75,'',NULL),(36735,75,'',NULL),(36736,75,'',NULL),(36737,75,'',NULL),(36738,75,'',NULL),(36739,75,'',NULL),(36740,75,'',NULL),(36741,75,'',NULL),(36742,75,'',NULL),(36743,75,'',NULL),(36744,75,'',NULL),(36745,75,'',NULL),(36746,75,'',NULL),(36747,75,'',NULL),(36748,75,'',NULL),(36749,75,'',NULL),(36750,75,'',NULL),(36751,75,'',NULL),(36752,75,'',NULL),(36753,75,'',NULL),(36754,75,'',NULL),(36755,75,'',NULL),(36756,75,'',NULL),(36757,75,'',NULL),(36758,75,'',NULL),(36759,75,'',NULL),(36760,75,'',NULL),(36761,75,'',NULL),(36762,75,'',NULL),(36763,75,'',NULL),(36764,75,'',NULL),(36765,75,'',NULL),(36766,75,'',NULL),(36767,75,'',NULL),(36768,75,'',NULL),(36769,75,'',NULL),(36770,75,'',NULL),(36771,75,'',NULL),(36772,75,'',NULL),(36773,75,'',NULL),(36774,75,'',NULL),(36775,75,'',NULL),(36776,75,'',NULL),(36777,75,'',NULL),(36778,75,'',NULL),(36779,75,'',NULL),(36780,75,'',NULL),(36781,75,'',NULL),(36782,75,'',NULL),(36783,75,'',NULL),(36784,75,'',NULL),(36785,75,'',NULL),(36786,75,'',NULL),(36787,75,'',NULL),(36788,75,'',NULL),(36789,75,'',NULL),(36790,75,'',NULL),(36791,75,'',NULL),(36792,75,'',NULL),(36793,75,'',NULL),(36794,75,'',NULL),(36795,75,'',NULL),(36796,75,'',NULL),(36797,75,'',NULL),(36798,75,'',NULL),(36799,75,'',NULL),(36800,75,'',NULL),(36801,75,'',NULL),(36802,75,'',NULL),(36803,75,'',NULL),(36804,75,'',NULL),(36805,75,'',NULL),(36806,75,'',NULL),(36807,75,'',NULL),(36808,75,'',NULL),(36809,75,'',NULL),(36810,75,'',NULL),(36811,75,'',NULL),(36812,75,'',NULL),(36813,75,'',NULL),(36814,75,'',NULL),(36815,75,'',NULL),(36816,75,'',NULL),(36817,75,'',NULL),(36818,75,'',NULL),(36819,75,'',NULL),(36820,75,'',NULL),(36821,75,'',NULL),(36822,75,'',NULL),(36823,75,'',NULL),(36824,75,'',NULL),(36825,75,'',NULL),(36826,75,'',NULL),(36827,75,'',NULL),(36828,75,'',NULL),(36829,75,'',NULL),(36830,75,'',NULL),(36831,75,'',NULL),(36832,75,'',NULL),(36833,75,'',NULL),(36834,75,'',NULL),(36835,75,'',NULL),(36836,75,'',NULL),(36837,75,'',NULL),(36838,75,'',NULL),(36839,75,'',NULL),(36840,75,'',NULL),(36841,75,'',NULL),(36842,75,'',NULL),(36843,75,'',NULL),(36844,75,'',NULL),(36845,75,'',NULL),(36846,75,'',NULL),(36847,75,'',NULL),(36848,75,'',NULL),(36849,75,'',NULL),(36850,75,'',NULL),(36851,75,'',NULL);
/*!40000 ALTER TABLE `ville` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_rel_ent_pol_tours'
--
/*!50003 DROP PROCEDURE IF EXISTS `display_apprenticeship_stats_current_year` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `display_apprenticeship_stats_current_year`(
	IN pi_date DATE, OUT po_total INT, OUT po_ongoing INT, OUT po_finished INT, OUT po_tocome INT)
BEGIN
	DECLARE v_total INT;
    SET v_total = 0;    
    
	
    SELECT COUNT(id) INTO po_ongoing
    FROM apprentissage
    WHERE pi_date BETWEEN date_debut_apprentissage AND date_fin_apprentissage;
    SET v_total = v_total + po_ongoing;
    
    
    SELECT COUNT(id) INTO po_finished
    FROM apprentissage
    WHERE date_fin_apprentissage < pi_date AND YEAR(date_fin_apprentissage) = YEAR(pi_date);
    SET v_total = v_total + po_finished;
    
    
    SELECT COUNT(id) INTO po_tocome
    FROM apprentissage
    WHERE date_debut_apprentissage > pi_date AND YEAR(date_debut_apprentissage) = YEAR(pi_date);
    SET v_total = v_total + po_tocome;
    
    
    SET po_total = v_total;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `display_apprenticeship_stats_total` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `display_apprenticeship_stats_total`(
	OUT po_total INT)
BEGIN
	SELECT COUNT(id) INTO po_total
	FROM apprentissage;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `display_internship_stats_current_year` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `display_internship_stats_current_year`(
	IN pi_date DATE, OUT po_total INT, 
    OUT po_total_finished INT, OUT po_france_finished INT, OUT po_abroad_finished INT,
    OUT po_total_ongoing INT, OUT po_france_ongoing INT, OUT po_abroad_ongoing INT,
    OUT po_total_tocome INT, OUT po_france_tocome INT, OUT po_abroad_tocome INT)
BEGIN
	DECLARE v_total_finished INT;
    DECLARE v_total_ongoing INT;
    DECLARE v_total_tocome INT;
    SET v_total_finished = 0; 
    SET v_total_ongoing = 0;
    SET v_total_tocome = 0;
    
	
	SELECT COUNT(id) INTO po_france_finished
    FROM stage
    WHERE date_fin_stage < pi_date AND YEAR(date_fin_stage) = YEAR(pi_date)
		AND etranger = 0;
    SET v_total_finished = v_total_finished + po_france_finished;
    
    
	SELECT COUNT(id) INTO po_abroad_finished
    FROM stage
    WHERE date_fin_stage < pi_date AND YEAR(date_fin_stage) = YEAR(pi_date)
		AND etranger = 1;
    SET v_total_finished = v_total_finished + po_abroad_finished;

	
    SET po_total_finished = v_total_finished;
    
    
    
    SELECT COUNT(id) INTO po_france_ongoing
    FROM stage
    WHERE pi_date BETWEEN date_debut_stage AND date_fin_stage
		AND etranger = 0;
    SET v_total_ongoing = v_total_ongoing + po_france_ongoing;
    
    
    SELECT COUNT(id) INTO po_abroad_ongoing
    FROM stage
    WHERE pi_date BETWEEN date_debut_stage AND date_fin_stage
		AND etranger = 1;
    SET v_total_ongoing = v_total_ongoing + po_abroad_ongoing;
    
    
    SET po_total_ongoing = v_total_ongoing;
    
    
    
    SELECT COUNT(id) INTO po_france_tocome
    FROM stage
    WHERE date_debut_stage > pi_date AND YEAR(date_debut_stage) = YEAR(pi_date)
		AND etranger = 0;
    SET v_total_tocome = v_total_tocome + po_france_tocome;
    
    
    SELECT COUNT(id) INTO po_abroad_tocome
    FROM stage
    WHERE date_debut_stage > pi_date AND YEAR(date_debut_stage) = YEAR(pi_date)
		AND etranger = 1;
    SET v_total_tocome = v_total_tocome + po_abroad_tocome;
    
    
    SET po_total_tocome = v_total_tocome;
    
    

    
    SET po_total = v_total_finished + v_total_ongoing + v_total_tocome;    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `display_internship_stats_total` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `display_internship_stats_total`(
	OUT po_total INT, OUT po_france INT, OUT po_abroad INT)
BEGIN
	
	SELECT COUNT(id) INTO po_total
	FROM convention_stage;
    
    
    SELECT COUNT(c.id) INTO po_france
    FROM convention_stage c, stage s
    WHERE c.id_stage = s.id AND s.etranger = 0;
    
    
    SELECT COUNT(c.id) INTO po_abroad
    FROM convention_stage c, stage s
    WHERE c.id_stage = s.id AND s.etranger = 1;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `get_oldest_apprenticeship_year` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_oldest_apprenticeship_year`(OUT po_year YEAR)
BEGIN
	SELECT YEAR(MIN(date_debut_apprentissage)) INTO po_year
    FROM apprentissage;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `get_oldest_forum_year` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_oldest_forum_year`(IN pi_forum_type VARCHAR(45), OUT po_year YEAR)
BEGIN
	SELECT YEAR(f.date_debut_forum) INTO po_year
    FROM forum f, type_forum t
    WHERE f.id_type_forum = t.id
		AND t.libelle_type_forum = pi_forum_type;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `get_oldest_internship_year` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_oldest_internship_year`(OUT po_year YEAR)
BEGIN
	SELECT YEAR(MIN(date_debut_stage)) INTO po_year
    FROM stage;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-23 18:07:39