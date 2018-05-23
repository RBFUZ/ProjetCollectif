-- MySQL dump 10.13  Distrib 5.7.19, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_rel_ent_pol_tours
-- ------------------------------------------------------
-- Server version	5.7.19

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
  `id_ville` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code_postal` varchar(45) NOT NULL,
  `complement_adresse` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Adresse_Ville1_idx` (`id_ville`),
  CONSTRAINT `fk_Adresse_Ville1` FOREIGN KEY (`id_ville`) REFERENCES `ville` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adresse`
--

LOCK TABLES `adresse` WRITE;
/*!40000 ALTER TABLE `adresse` DISABLE KEYS */;
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
  `id_etablissement` int(11) NOT NULL,
  `id_specialite` int(11) NOT NULL,
  `id_personne_etudiant` int(11) DEFAULT NULL,
  `id_etudiant` int(11) DEFAULT NULL,
  `id_gratification` int(11) DEFAULT NULL,
  `etranger` tinyint(4) NOT NULL DEFAULT '0',
  `duree_apprentissage_annees` int(11) NOT NULL DEFAULT '3' COMMENT '1 an, 3 ans, etc.',
  `date_debut_apprentissage` date NOT NULL,
  `date_fin_apprentissage` date NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apprentissage`
--

LOCK TABLES `apprentissage` WRITE;
/*!40000 ALTER TABLE `apprentissage` DISABLE KEYS */;
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
  `date_creation_avenant` date NOT NULL,
  `objet_avenant` varchar(45) NOT NULL,
  `details_avenant` text,
  PRIMARY KEY (`id`),
  KEY `fk_Avenant_ConventionStage1_idx` (`id_convention_stage`),
  CONSTRAINT `fk_Avenant_ConventionStage1` FOREIGN KEY (`id_convention_stage`) REFERENCES `convention_stage` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avenant`
--

LOCK TABLES `avenant` WRITE;
/*!40000 ALTER TABLE `avenant` DISABLE KEYS */;
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
  `intitule_cifre` varchar(255) NOT NULL,
  `soutenue` tinyint(4) NOT NULL DEFAULT '1',
  `date_debut_cifre` date NOT NULL,
  `date_fin_cifre` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_CIFRE_Etudiant1_idx` (`id_personne_etudiant`,`id_etudiant`),
  KEY `fk_CIFRE_Etablissement1_idx` (`id_etablissement`),
  KEY `fk_CIFRE_PersonnelPolytech1_idx` (`id_personne_personnel_polytech`,`id_personnel_polytech`),
  CONSTRAINT `fk_CIFRE_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_CIFRE_Etudiant1` FOREIGN KEY (`id_personne_etudiant`, `id_etudiant`) REFERENCES `etudiant` (`id_personne`, `id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_CIFRE_PersonnelPolytech1` FOREIGN KEY (`id_personne_personnel_polytech`, `id_personnel_polytech`) REFERENCES `personnel_polytech` (`id_personne`, `id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cifre`
--

LOCK TABLES `cifre` WRITE;
/*!40000 ALTER TABLE `cifre` DISABLE KEYS */;
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
  `sujet_conference` varchar(255) NOT NULL,
  `annulee` tinyint(4) NOT NULL DEFAULT '0',
  `date_conference` date NOT NULL,
  `heure_debut_conference` time DEFAULT NULL,
  `heure_fin_conference` time DEFAULT NULL,
  `id_etablissement` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Conference_Etablissement1_idx` (`id_etablissement`),
  CONSTRAINT `fk_Conference_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conference`
--

LOCK TABLES `conference` WRITE;
/*!40000 ALTER TABLE `conference` DISABLE KEYS */;
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
  `date_conseil_perfectionnement` date NOT NULL,
  `id_departement` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ConseilPerfectionnement_Departement1_idx` (`id_departement`),
  CONSTRAINT `fk_ConseilPerfectionnement_Departement1` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conseil_perfectionnement`
--

LOCK TABLES `conseil_perfectionnement` WRITE;
/*!40000 ALTER TABLE `conseil_perfectionnement` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_etablissement`
--

LOCK TABLES `contact_etablissement` WRITE;
/*!40000 ALTER TABLE `contact_etablissement` DISABLE KEYS */;
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
  `date_creation` date NOT NULL,
  `date_derniere_modification` date NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `convention_stage`
--

LOCK TABLES `convention_stage` WRITE;
/*!40000 ALTER TABLE `convention_stage` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departement`
--

LOCK TABLES `departement` WRITE;
/*!40000 ALTER TABLE `departement` DISABLE KEYS */;
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
  `date_debut_vacation` date NOT NULL,
  `date_fin_vacation` date DEFAULT NULL,
  `volume_horaire` int(11) DEFAULT NULL,
  `commentaire_vacation` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_EffectueVacation_ContactEtablissement1_idx` (`id_contact_etablissement`,`id_personne_contact_etablissement`),
  KEY `fk_EffectueVacation_Etablissement1_idx` (`id_etablissement`),
  CONSTRAINT `fk_EffectueVacation_ContactEtablissement1` FOREIGN KEY (`id_contact_etablissement`, `id_personne_contact_etablissement`) REFERENCES `contact_etablissement` (`id`, `id_personne`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_EffectueVacation_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `effectue_vacation`
--

LOCK TABLES `effectue_vacation` WRITE;
/*!40000 ALTER TABLE `effectue_vacation` DISABLE KEYS */;
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
  `nom_entreprise` varchar(255) NOT NULL,
  `statut_juridique` varchar(45) NOT NULL DEFAULT 'Inconnu',
  `num_siren` varchar(9) DEFAULT NULL,
  `site_web_entreprise` varchar(255) DEFAULT NULL,
  `commentaire_entreprise` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entreprise`
--

LOCK TABLES `entreprise` WRITE;
/*!40000 ALTER TABLE `entreprise` DISABLE KEYS */;
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
  `date_debut_contact_rh` date NOT NULL,
  `date_fin_contact_rh` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_EstContactRH_ContactEtablissement1_idx` (`id_contact_etablissement`,`id_personne_contact_etablissement`),
  KEY `fk_EstContactRH_Etablissement1_idx` (`id_etablissement`),
  CONSTRAINT `fk_EstContactRH_ContactEtablissement1` FOREIGN KEY (`id_contact_etablissement`, `id_personne_contact_etablissement`) REFERENCES `contact_etablissement` (`id`, `id_personne`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_EstContactRH_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `est_contact_rh`
--

LOCK TABLES `est_contact_rh` WRITE;
/*!40000 ALTER TABLE `est_contact_rh` DISABLE KEYS */;
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
  `date_debut_contact_technique` date NOT NULL,
  `date_fin_contact_technique` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_EstContactTechnique_ContactEtablissement1_idx` (`id_contact_etablissement`,`id_personne_contact_etablissement`),
  KEY `fk_EstContactTechnique_Etablissement1_idx` (`id_etablissement`),
  CONSTRAINT `fk_EstContactTechnique_ContactEtablissement1` FOREIGN KEY (`id_contact_etablissement`, `id_personne_contact_etablissement`) REFERENCES `contact_etablissement` (`id`, `id_personne`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_EstContactTechnique_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `est_contact_technique`
--

LOCK TABLES `est_contact_technique` WRITE;
/*!40000 ALTER TABLE `est_contact_technique` DISABLE KEYS */;
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
  `date_debut_emploi` date NOT NULL,
  `date_fin_emploi` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Employe_ContactEtablissement1_idx` (`id_contact_etablissement`,`id_personne_contact_etablissement`),
  KEY `fk_Employe_Etablissement1_idx` (`id_etablissement`),
  CONSTRAINT `fk_Employe_ContactEtablissement1` FOREIGN KEY (`id_contact_etablissement`, `id_personne_contact_etablissement`) REFERENCES `contact_etablissement` (`id`, `id_personne`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_Employe_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `est_employe`
--

LOCK TABLES `est_employe` WRITE;
/*!40000 ALTER TABLE `est_employe` DISABLE KEYS */;
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
  `id_entreprise` int(11) NOT NULL,
  `id_adresse` int(11) NOT NULL,
  `nom_etablissement` varchar(255) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etablissement`
--

LOCK TABLES `etablissement` WRITE;
/*!40000 ALTER TABLE `etablissement` DISABLE KEYS */;
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
  `annee_etude` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etudiant`
--

LOCK TABLES `etudiant` WRITE;
/*!40000 ALTER TABLE `etudiant` DISABLE KEYS */;
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
  `id_type_forum` int(11) NOT NULL,
  `nom_forum` varchar(45) NOT NULL,
  `date_debut_forum` datetime NOT NULL,
  `date_fin_forum` datetime DEFAULT NULL,
  `commentaire_forum` varchar(255) DEFAULT NULL,
  `id_adresse` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Forum_TypeForum1_idx` (`id_type_forum`),
  KEY `fk_Forum_Adresse1_idx` (`id_adresse`),
  CONSTRAINT `fk_Forum_Adresse1` FOREIGN KEY (`id_adresse`) REFERENCES `adresse` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Forum_TypeForum1` FOREIGN KEY (`id_type_forum`) REFERENCES `type_forum` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum`
--

LOCK TABLES `forum` WRITE;
/*!40000 ALTER TABLE `forum` DISABLE KEYS */;
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
  `montant_gratification` float NOT NULL,
  `unite_gratification` varchar(45) NOT NULL DEFAULT 'Brut' COMMENT 'BRUT / NET',
  `unite_duree_gratification` varchar(45) NOT NULL DEFAULT 'Mensuel' COMMENT 'HEURE, MOIS, etc.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gratification`
--

LOCK TABLES `gratification` WRITE;
/*!40000 ALTER TABLE `gratification` DISABLE KEYS */;
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
  `id_convention_stage` int(11) NOT NULL,
  `date_debut_interruption` date NOT NULL,
  `date_fin_interruption` date NOT NULL,
  `commentaire_interruption` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_InterruptionStage_ConventionStage1_idx` (`id_convention_stage`),
  CONSTRAINT `fk_InterruptionStage_ConventionStage1` FOREIGN KEY (`id_convention_stage`) REFERENCES `convention_stage` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interruption_stage`
--

LOCK TABLES `interruption_stage` WRITE;
/*!40000 ALTER TABLE `interruption_stage` DISABLE KEYS */;
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
  `recrute_stagiaire` varchar(45) DEFAULT NULL,
  `recrute_diplome` varchar(45) DEFAULT NULL,
  `recrute_apprentis` varchar(45) DEFAULT NULL,
  `niveaux_etudes_recherches` varchar(45) DEFAULT NULL,
  `filieres_recherchees` varchar(45) DEFAULT NULL,
  `commentaire_participation` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ParticipeForum_Forum1_idx` (`id_forum`),
  KEY `fk_ParticipationForum_Etablissement1_idx` (`id_etablissement`),
  KEY `fk_ParticipeForum_ContactEtablissement1` (`id_contact_etablissement`,`id_personne_contact_etablissement`),
  CONSTRAINT `fk_ParticipationForum_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ParticipeForum_ContactEtablissement1` FOREIGN KEY (`id_contact_etablissement`, `id_personne_contact_etablissement`) REFERENCES `contact_etablissement` (`id`, `id_personne`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_ParticipeForum_Forum1` FOREIGN KEY (`id_forum`) REFERENCES `forum` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participation_forum`
--

LOCK TABLES `participation_forum` WRITE;
/*!40000 ALTER TABLE `participation_forum` DISABLE KEYS */;
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
  `nom_fr_fr` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  UNIQUE KEY `alpha2_UNIQUE` (`alpha2`),
  UNIQUE KEY `alpha3_UNIQUE` (`alpha3`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Issu de http://sql.sh/514-liste-pays-csv-xml Licence CC - 241 pays conformes à la norme ISO 3166-1';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pays`
--

LOCK TABLES `pays` WRITE;
/*!40000 ALTER TABLE `pays` DISABLE KEYS */;
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
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `adresse_mail_perso` varchar(100) DEFAULT NULL,
  `code_sexe` varchar(1) DEFAULT NULL COMMENT 'M, F, etc.',
  `date_naissance` date DEFAULT NULL,
  `nationalite` varchar(100) DEFAULT NULL,
  `id_adresse` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Personne_Adresse1_idx` (`id_adresse`),
  CONSTRAINT `fk_Personne_Adresse1` FOREIGN KEY (`id_adresse`) REFERENCES `adresse` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personne`
--

LOCK TABLES `personne` WRITE;
/*!40000 ALTER TABLE `personne` DISABLE KEYS */;
INSERT INTO `personne` VALUES (1,'denis','thibault','thibault.d@gmail.com','M',NULL,'F',NULL);
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
  CONSTRAINT `fk_PersonnelPolytech_Departement1` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_PersonnelPolytech_Personne1` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personnel_polytech`
--

LOCK TABLES `personnel_polytech` WRITE;
/*!40000 ALTER TABLE `personnel_polytech` DISABLE KEYS */;
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
  `date_debut_projet` date NOT NULL,
  `intitule_projet` varchar(255) NOT NULL DEFAULT 'Projet pédagogique',
  `details_projet` text,
  `montant_alloue` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ProjetPedagogique_Etablissement1_idx` (`id_etablissement`),
  CONSTRAINT `fk_ProjetPedagogique_Etablissement1` FOREIGN KEY (`id_etablissement`) REFERENCES `etablissement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projet_pedagogique`
--

LOCK TABLES `projet_pedagogique` WRITE;
/*!40000 ALTER TABLE `projet_pedagogique` DISABLE KEYS */;
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
  `date_rencontre` date NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rencontre_contact`
--

LOCK TABLES `rencontre_contact` WRITE;
/*!40000 ALTER TABLE `rencontre_contact` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_accueil`
--

LOCK TABLES `service_accueil` WRITE;
/*!40000 ALTER TABLE `service_accueil` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialite`
--

LOCK TABLES `specialite` WRITE;
/*!40000 ALTER TABLE `specialite` DISABLE KEYS */;
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
  `date_debut_stage` date NOT NULL,
  `date_fin_stage` date NOT NULL,
  `etranger` tinyint(4) NOT NULL DEFAULT '0',
  `annee_etude_stage` int(11) DEFAULT NULL,
  `thematique_stage` varchar(255) DEFAULT NULL,
  `sujet_stage` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stage`
--

LOCK TABLES `stage` WRITE;
/*!40000 ALTER TABLE `stage` DISABLE KEYS */;
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
  `nom_startup` varchar(100) NOT NULL,
  `date_creation_startup` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `startup`
--

LOCK TABLES `startup` WRITE;
/*!40000 ALTER TABLE `startup` DISABLE KEYS */;
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
  `num_telephone` varchar(45) NOT NULL,
  `type_telephone` varchar(45) NOT NULL DEFAULT 'Fixe',
  `commentaire_telephone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numTelephone_UNIQUE` (`num_telephone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telephone`
--

LOCK TABLES `telephone` WRITE;
/*!40000 ALTER TABLE `telephone` DISABLE KEYS */;
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
  `libelle_type_forum` varchar(45) NOT NULL,
  `commentaire_type_forum` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Type de forum : forum des entreprises, salon étudiant, etc.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_forum`
--

LOCK TABLES `type_forum` WRITE;
/*!40000 ALTER TABLE `type_forum` DISABLE KEYS */;
/*!40000 ALTER TABLE `type_forum` ENABLE KEYS */;
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
  `annee_versement` date NOT NULL,
  `montant_taxe` float NOT NULL,
  `partie_versante` varchar(255) NOT NULL,
  PRIMARY KEY (`id_departement`,`id_entreprise`,`annee_versement`),
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
  `id_pays` int(11) NOT NULL,
  `nom_ville` varchar(200) NOT NULL,
  `departement` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Ville_Pays1_idx` (`id_pays`),
  CONSTRAINT `fk_Ville_Pays1` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Issu de http://sql.sh/736-base-donnees-villes-francaises Licence CC';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ville`
--

LOCK TABLES `ville` WRITE;
/*!40000 ALTER TABLE `ville` DISABLE KEYS */;
/*!40000 ALTER TABLE `ville` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-11 16:52:44
