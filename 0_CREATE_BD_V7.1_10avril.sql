-- MySQL Script generated by MySQL Workbench
-- Thu Apr 12 15:41:54 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema db_rel_ent_pol_tours
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `db_rel_ent_pol_tours` ;

-- -----------------------------------------------------
-- Schema db_rel_ent_pol_tours
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_rel_ent_pol_tours` DEFAULT CHARACTER SET utf8 ;
USE `db_rel_ent_pol_tours` ;

-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`pays`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`pays` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `code` INT(3) NULL,
  `alpha2` VARCHAR(2) NULL,
  `alpha3` VARCHAR(3) NULL,
  `nom_en_gb` VARCHAR(45) NULL,
  `nom_fr_fr` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `code_UNIQUE` (`code` ASC),
  UNIQUE INDEX `alpha2_UNIQUE` (`alpha2` ASC),
  UNIQUE INDEX `alpha3_UNIQUE` (`alpha3` ASC))
ENGINE = InnoDB
COMMENT = 'Issu de http://sql.sh/514-liste-pays-csv-xml Licence CC - 241 pays conformes à la norme ISO 3166-1';


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`ville`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`ville` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_pays` INT NOT NULL,
  `nom_ville` VARCHAR(200) NOT NULL,
  `departement` VARCHAR(3) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Ville_Pays1_idx` (`id_pays` ASC),
  CONSTRAINT `fk_Ville_Pays1`
    FOREIGN KEY (`id_pays`)
    REFERENCES `db_rel_ent_pol_tours`.`pays` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Issu de http://sql.sh/736-base-donnees-villes-francaises Licence CC';


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`adresse`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`adresse` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_ville` INT NOT NULL,
  `adresse` VARCHAR(255) NOT NULL,
  `code_postal` VARCHAR(45) NOT NULL,
  `complement_adresse` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Adresse_Ville1_idx` (`id_ville` ASC),
  CONSTRAINT `fk_Adresse_Ville1`
    FOREIGN KEY (`id_ville`)
    REFERENCES `db_rel_ent_pol_tours`.`ville` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`personne`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`personne` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `prenom` VARCHAR(45) NOT NULL,
  `adresse_mail_perso` VARCHAR(100) NULL,
  `code_sexe` VARCHAR(1) NULL COMMENT 'M, F, etc.',
  `date_naissance` DATE NULL,
  `nationalite` VARCHAR(100) NULL,
  `id_adresse` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Personne_Adresse1_idx` (`id_adresse` ASC),
  CONSTRAINT `fk_Personne_Adresse1`
    FOREIGN KEY (`id_adresse`)
    REFERENCES `db_rel_ent_pol_tours`.`adresse` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`telephone`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`telephone` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `num_telephone` VARCHAR(45) NOT NULL,
  `type_telephone` VARCHAR(45) NOT NULL DEFAULT 'Fixe',
  `commentaire_telephone` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `numTelephone_UNIQUE` (`num_telephone` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`possede_telephone`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`possede_telephone` (
  `id_personne` INT NOT NULL,
  `id_telephone` INT NOT NULL,
  PRIMARY KEY (`id_personne`, `id_telephone`),
  INDEX `fk_PossedeTelephone_Telephone1_idx` (`id_telephone` ASC),
  CONSTRAINT `fk_PossedeTelephone_Personne`
    FOREIGN KEY (`id_personne`)
    REFERENCES `db_rel_ent_pol_tours`.`personne` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PossedeTelephone_Telephone1`
    FOREIGN KEY (`id_telephone`)
    REFERENCES `db_rel_ent_pol_tours`.`telephone` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`startup`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`startup` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom_startup` VARCHAR(100) NOT NULL,
  `date_creation_startup` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`departement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`departement` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `libelle_departement` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `libelleDepartement_UNIQUE` (`libelle_departement` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`specialite`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`specialite` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_departement` INT NOT NULL,
  `libelle_specialite` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `libelleSpecialite_UNIQUE` (`libelle_specialite` ASC),
  INDEX `fk_Specialite_Departement1_idx` (`id_departement` ASC),
  CONSTRAINT `fk_Specialite_Departement1`
    FOREIGN KEY (`id_departement`)
    REFERENCES `db_rel_ent_pol_tours`.`departement` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`etudiant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`etudiant` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_personne` INT NOT NULL,
  `id_specialite` INT NOT NULL,
  `annee_etude` INT NOT NULL,
  `diplome` TINYINT NOT NULL DEFAULT 0 COMMENT '1 si diplomé, 0 autrement',
  `numero_etudiant` INT NULL,
  `mail_etudiant` VARCHAR(100) NULL,
  `date_diplomation` DATE NULL,
  `id_startup` INT NULL,
  PRIMARY KEY (`id`, `id_personne`),
  UNIQUE INDEX `numeroEtudiant_UNIQUE` (`numero_etudiant` ASC),
  INDEX `fk_Etudiant_Startup1_idx` (`id_startup` ASC),
  INDEX `fk_Etudiant_Personne1_idx` (`id_personne` ASC),
  INDEX `fk_Etudiant_Specialite1_idx` (`id_specialite` ASC),
  CONSTRAINT `fk_Etudiant_Startup1`
    FOREIGN KEY (`id_startup`)
    REFERENCES `db_rel_ent_pol_tours`.`startup` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Etudiant_Personne1`
    FOREIGN KEY (`id_personne`)
    REFERENCES `db_rel_ent_pol_tours`.`personne` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Etudiant_Specialite1`
    FOREIGN KEY (`id_specialite`)
    REFERENCES `db_rel_ent_pol_tours`.`specialite` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`personnel_polytech`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`personnel_polytech` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_personne` INT NOT NULL,
  `id_departement` INT NOT NULL,
  `fonction` VARCHAR(255) NOT NULL DEFAULT 'Personnel Polytech',
  `mail_universitaire` VARCHAR(100) NULL,
  PRIMARY KEY (`id`, `id_personne`),
  INDEX `fk_PersonnelPolytech_Personne1_idx` (`id_personne` ASC),
  INDEX `fk_PersonnelPolytech_Departement1_idx` (`id_departement` ASC),
  CONSTRAINT `fk_PersonnelPolytech_Personne1`
    FOREIGN KEY (`id_personne`)
    REFERENCES `db_rel_ent_pol_tours`.`personne` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PersonnelPolytech_Departement1`
    FOREIGN KEY (`id_departement`)
    REFERENCES `db_rel_ent_pol_tours`.`departement` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`contact_etablissement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`contact_etablissement` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_personne` INT NOT NULL,
  `mail_professionnel` VARCHAR(100) NULL,
  `fax` VARCHAR(45) NULL,
  PRIMARY KEY (`id`, `id_personne`),
  INDEX `fk_ContactEtablissement_Personne1_idx` (`id_personne` ASC),
  CONSTRAINT `fk_ContactEtablissement_Personne1`
    FOREIGN KEY (`id_personne`)
    REFERENCES `db_rel_ent_pol_tours`.`personne` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`entreprise`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`entreprise` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom_entreprise` VARCHAR(255) NOT NULL,
  `statut_juridique` VARCHAR(45) NOT NULL DEFAULT 'Inconnu',
  `num_siren` VARCHAR(9) NULL,
  `site_web_entreprise` VARCHAR(255) NULL,
  `commentaire_entreprise` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`etablissement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`etablissement` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_entreprise` INT NOT NULL,
  `id_adresse` INT NOT NULL,
  `nom_etablissement` VARCHAR(255) NOT NULL,
  `num_siret` VARCHAR(14) NULL,
  `type_structure` VARCHAR(255) NULL,
  `effectifs` VARCHAR(45) NULL,
  `secteurs_activites` VARCHAR(255) NULL,
  `code_naf` VARCHAR(45) NULL,
  `site_web_etablissement` VARCHAR(255) NULL,
  `commentaire_etablissement` TEXT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `siret_UNIQUE` (`num_siret` ASC),
  INDEX `fk_Etablissement_Adresse1_idx` (`id_adresse` ASC),
  INDEX `fk_Etablissement_Entreprise1_idx` (`id_entreprise` ASC),
  CONSTRAINT `fk_Etablissement_Adresse1`
    FOREIGN KEY (`id_adresse`)
    REFERENCES `db_rel_ent_pol_tours`.`adresse` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Etablissement_Entreprise1`
    FOREIGN KEY (`id_entreprise`)
    REFERENCES `db_rel_ent_pol_tours`.`entreprise` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`stage`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`stage` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date_debut_stage` DATE NOT NULL,
  `date_fin_stage` DATE NULL,
  `annee_etude_stage` INT NULL,
  `thematique_stage` VARCHAR(255) NULL,
  `sujet_stage` VARCHAR(255) NULL,
  `fonctions_taches_stage` TEXT NULL,
  `details_projet_stage` TEXT NULL,
  `duree_stage_semaines` INT NULL,
  `duree_stage_heures` INT NULL,
  `nb_jours_travail` INT NULL,
  `commentaire_duree_stage` VARCHAR(255) NULL,
  `commentaire_stage` TEXT NULL,
  `element_pedagogique` VARCHAR(255) NULL,
  `avantages_nature` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`gratification`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`gratification` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `montant_gratification` FLOAT NOT NULL,
  `unite_gratification` VARCHAR(45) NOT NULL DEFAULT 'Brut' COMMENT 'BRUT / NET',
  `unite_duree_gratification` VARCHAR(45) NOT NULL DEFAULT 'Mensuel' COMMENT 'HEURE, MOIS, etc.',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`service_accueil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`service_accueil` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_etablissement` INT NOT NULL,
  `nom_service` VARCHAR(100) NOT NULL DEFAULT 'Service d''accueil',
  PRIMARY KEY (`id`),
  INDEX `fk_ServiceAccueil_Etablissement1_idx` (`id_etablissement` ASC),
  CONSTRAINT `fk_ServiceAccueil_Etablissement1`
    FOREIGN KEY (`id_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`etablissement` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`convention_stage`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`convention_stage` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_stage` INT NOT NULL,
  `id_etablissement` INT NOT NULL,
  `id_specialite` INT NOT NULL,
  `id_etudiant` INT NULL,
  `id_personne_etudiant` INT NULL,
  `id_personnel_polytech_tuteur` INT NULL,
  `id_personne_personnel_polytech_tuteur` INT NULL,
  `id_personnel_polytech_charge_suivi` INT NULL,
  `id_personne_personnel_polytech_charge_suivi` INT NULL,
  `id_contact_etablissement_tuteur` INT NULL,
  `id_personne_contact_etablissement_tuteur` INT NULL,
  `id_contact_etablissement_signataire` INT NULL,
  `id_personne_contact_etablissement_signataire` INT NULL,
  `id_gratification` INT NULL,
  `id_service_accueil` INT NULL,
  `date_creation` DATE NOT NULL,
  `date_derniere_modification` DATE NOT NULL,
  `validee` TINYINT NOT NULL DEFAULT 1,
  `validee_pedagogiquement` TINYINT NOT NULL DEFAULT 1,
  `type_convention` VARCHAR(45) NULL COMMENT 'Obligatoire, non obligatoire, ...',
  PRIMARY KEY (`id`),
  INDEX `fk_ConventionStage_Stage1_idx` (`id_stage` ASC),
  INDEX `fk_ConventionStage_Gratification1_idx` (`id_gratification` ASC),
  INDEX `fk_ConventionStage_Etudiant1_idx` (`id_etudiant` ASC, `id_personne_etudiant` ASC),
  INDEX `fk_ConventionStage_Specialite1_idx` (`id_specialite` ASC),
  INDEX `fk_ConventionStage_PersonnelPolytech1_idx` (`id_personnel_polytech_tuteur` ASC, `id_personne_personnel_polytech_tuteur` ASC),
  INDEX `fk_ConventionStage_PersonnelPolytech2_idx` (`id_personnel_polytech_charge_suivi` ASC, `id_personne_personnel_polytech_charge_suivi` ASC),
  INDEX `fk_ConventionStage_ContactEtablissement1_idx` (`id_contact_etablissement_tuteur` ASC, `id_personne_contact_etablissement_tuteur` ASC),
  INDEX `fk_ConventionStage_ContactEtablissement2_idx` (`id_contact_etablissement_signataire` ASC, `id_personne_contact_etablissement_signataire` ASC),
  INDEX `fk_ConventionStage_Etablissement1_idx` (`id_etablissement` ASC),
  INDEX `fk_ConventionStage_ServiceAccueil1_idx` (`id_service_accueil` ASC),
  CONSTRAINT `fk_ConventionStage_Stage1`
    FOREIGN KEY (`id_stage`)
    REFERENCES `db_rel_ent_pol_tours`.`stage` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_Gratification1`
    FOREIGN KEY (`id_gratification`)
    REFERENCES `db_rel_ent_pol_tours`.`gratification` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_Etudiant1`
    FOREIGN KEY (`id_etudiant` , `id_personne_etudiant`)
    REFERENCES `db_rel_ent_pol_tours`.`etudiant` (`id` , `id_personne`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_Specialite1`
    FOREIGN KEY (`id_specialite`)
    REFERENCES `db_rel_ent_pol_tours`.`specialite` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_PersonnelPolytech1`
    FOREIGN KEY (`id_personnel_polytech_tuteur` , `id_personne_personnel_polytech_tuteur`)
    REFERENCES `db_rel_ent_pol_tours`.`personnel_polytech` (`id` , `id_personne`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_PersonnelPolytech2`
    FOREIGN KEY (`id_personnel_polytech_charge_suivi` , `id_personne_personnel_polytech_charge_suivi`)
    REFERENCES `db_rel_ent_pol_tours`.`personnel_polytech` (`id` , `id_personne`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_ContactEtablissement1`
    FOREIGN KEY (`id_contact_etablissement_tuteur` , `id_personne_contact_etablissement_tuteur`)
    REFERENCES `db_rel_ent_pol_tours`.`contact_etablissement` (`id` , `id_personne`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_ContactEtablissement2`
    FOREIGN KEY (`id_contact_etablissement_signataire` , `id_personne_contact_etablissement_signataire`)
    REFERENCES `db_rel_ent_pol_tours`.`contact_etablissement` (`id` , `id_personne`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_Etablissement1`
    FOREIGN KEY (`id_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`etablissement` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConventionStage_ServiceAccueil1`
    FOREIGN KEY (`id_service_accueil`)
    REFERENCES `db_rel_ent_pol_tours`.`service_accueil` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`interruption_stage`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`interruption_stage` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_convention_stage` INT NOT NULL,
  `date_debut_interruption` DATE NOT NULL,
  `date_fin_interruption` DATE NOT NULL,
  `commentaire_interruption` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_InterruptionStage_ConventionStage1_idx` (`id_convention_stage` ASC),
  CONSTRAINT `fk_InterruptionStage_ConventionStage1`
    FOREIGN KEY (`id_convention_stage`)
    REFERENCES `db_rel_ent_pol_tours`.`convention_stage` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`avenant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`avenant` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_convention_stage` INT NOT NULL,
  `date_creation_avenant` DATE NOT NULL,
  `objet_avenant` VARCHAR(45) NOT NULL,
  `details_avenant` TEXT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Avenant_ConventionStage1_idx` (`id_convention_stage` ASC),
  CONSTRAINT `fk_Avenant_ConventionStage1`
    FOREIGN KEY (`id_convention_stage`)
    REFERENCES `db_rel_ent_pol_tours`.`convention_stage` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`apprentissage`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`apprentissage` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_etablissement` INT NOT NULL,
  `id_specialite` INT NOT NULL,
  `id_personne_etudiant` INT NULL,
  `id_etudiant` INT NULL,
  `id_gratification` INT NULL,
  `etranger` TINYINT NOT NULL DEFAULT 0,
  `duree_apprentissage_annees` INT NOT NULL DEFAULT 3 COMMENT '1 an, 3 ans, etc.',
  `date_debut_apprentissage` DATE NOT NULL,
  `date_fin_apprentissage` DATE NULL,
  `details_apprentissage` TEXT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Apprentissage_Gratification1_idx` (`id_gratification` ASC),
  INDEX `fk_Apprentissage_Specialite1_idx` (`id_specialite` ASC),
  INDEX `fk_Apprentissage_Etudiant1_idx` (`id_personne_etudiant` ASC, `id_etudiant` ASC),
  INDEX `fk_Apprentissage_Etablissement1_idx` (`id_etablissement` ASC),
  CONSTRAINT `fk_Apprentissage_Gratification1`
    FOREIGN KEY (`id_gratification`)
    REFERENCES `db_rel_ent_pol_tours`.`gratification` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Apprentissage_Specialite1`
    FOREIGN KEY (`id_specialite`)
    REFERENCES `db_rel_ent_pol_tours`.`specialite` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Apprentissage_Etudiant1`
    FOREIGN KEY (`id_personne_etudiant` , `id_etudiant`)
    REFERENCES `db_rel_ent_pol_tours`.`etudiant` (`id_personne` , `id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Apprentissage_Etablissement1`
    FOREIGN KEY (`id_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`etablissement` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`est_employe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`est_employe` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_contact_etablissement` INT NOT NULL,
  `id_personne_contact_etablissement` INT NOT NULL,
  `id_etablissement` INT NOT NULL,
  `fonction` VARCHAR(255) NOT NULL DEFAULT 'Employé(e)',
  `date_debut_emploi` DATE NOT NULL,
  `date_fin_emploi` DATE NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Employe_ContactEtablissement1_idx` (`id_contact_etablissement` ASC, `id_personne_contact_etablissement` ASC),
  INDEX `fk_Employe_Etablissement1_idx` (`id_etablissement` ASC),
  CONSTRAINT `fk_Employe_ContactEtablissement1`
    FOREIGN KEY (`id_contact_etablissement` , `id_personne_contact_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`contact_etablissement` (`id` , `id_personne`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Employe_Etablissement1`
    FOREIGN KEY (`id_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`etablissement` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`effectue_vacation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`effectue_vacation` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_etablissement` INT NOT NULL,
  `id_contact_etablissement` INT NULL,
  `id_personne_contact_etablissement` INT NULL,
  `date_debut_vacation` DATE NOT NULL,
  `date_fin_vacation` DATE NULL,
  `volume_horaire` INT NULL,
  `commentaire_vacation` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_EffectueVacation_ContactEtablissement1_idx` (`id_contact_etablissement` ASC, `id_personne_contact_etablissement` ASC),
  INDEX `fk_EffectueVacation_Etablissement1_idx` (`id_etablissement` ASC),
  CONSTRAINT `fk_EffectueVacation_ContactEtablissement1`
    FOREIGN KEY (`id_contact_etablissement` , `id_personne_contact_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`contact_etablissement` (`id` , `id_personne`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EffectueVacation_Etablissement1`
    FOREIGN KEY (`id_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`etablissement` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`est_contact_rh`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`est_contact_rh` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_contact_etablissement` INT NOT NULL,
  `id_personne_contact_etablissement` INT NOT NULL,
  `id_etablissement` INT NOT NULL,
  `date_debut_contact_rh` DATE NOT NULL,
  `date_fin_contact_rh` DATE NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_EstContactRH_ContactEtablissement1_idx` (`id_contact_etablissement` ASC, `id_personne_contact_etablissement` ASC),
  INDEX `fk_EstContactRH_Etablissement1_idx` (`id_etablissement` ASC),
  CONSTRAINT `fk_EstContactRH_ContactEtablissement1`
    FOREIGN KEY (`id_contact_etablissement` , `id_personne_contact_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`contact_etablissement` (`id` , `id_personne`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EstContactRH_Etablissement1`
    FOREIGN KEY (`id_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`etablissement` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`est_contact_technique`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`est_contact_technique` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_contact_etablissement` INT NOT NULL,
  `id_personne_contact_etablissement` INT NOT NULL,
  `id_etablissement` INT NOT NULL,
  `date_debut_contact_technique` DATE NOT NULL,
  `date_fin_contact_technique` DATE NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_EstContactTechnique_ContactEtablissement1_idx` (`id_contact_etablissement` ASC, `id_personne_contact_etablissement` ASC),
  INDEX `fk_EstContactTechnique_Etablissement1_idx` (`id_etablissement` ASC),
  CONSTRAINT `fk_EstContactTechnique_ContactEtablissement1`
    FOREIGN KEY (`id_contact_etablissement` , `id_personne_contact_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`contact_etablissement` (`id` , `id_personne`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EstContactTechnique_Etablissement1`
    FOREIGN KEY (`id_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`etablissement` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`type_forum`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`type_forum` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `libelle_type_forum` VARCHAR(45) NOT NULL,
  `commentaire_type_forum` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
COMMENT = 'Type de forum : forum des entreprises, salon étudiant, etc.';


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`forum`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`forum` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_type_forum` INT NOT NULL,
  `nom_forum` VARCHAR(45) NOT NULL,
  `date_debut_forum` DATETIME NOT NULL,
  `date_fin_forum` DATETIME NULL,
  `commentaire_forum` VARCHAR(255) NULL,
  `id_adresse` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Forum_TypeForum1_idx` (`id_type_forum` ASC),
  INDEX `fk_Forum_Adresse1_idx` (`id_adresse` ASC),
  CONSTRAINT `fk_Forum_TypeForum1`
    FOREIGN KEY (`id_type_forum`)
    REFERENCES `db_rel_ent_pol_tours`.`type_forum` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Forum_Adresse1`
    FOREIGN KEY (`id_adresse`)
    REFERENCES `db_rel_ent_pol_tours`.`adresse` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`participation_forum`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`participation_forum` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_forum` INT NOT NULL,
  `id_etablissement` INT NOT NULL COMMENT 'Etablissement représenté par le contact',
  `id_contact_etablissement` INT NULL,
  `id_personne_contact_etablissement` INT NULL,
  `recrute_stagiaire` VARCHAR(45) NULL,
  `recrute_diplome` VARCHAR(45) NULL,
  `recrute_apprentis` VARCHAR(45) NULL,
  `niveaux_etudes_recherches` VARCHAR(45) NULL,
  `filieres_recherchees` VARCHAR(45) NULL,
  `commentaire_participation` VARCHAR(255) NULL,
  INDEX `fk_ParticipeForum_Forum1_idx` (`id_forum` ASC),
  PRIMARY KEY (`id`),
  INDEX `fk_ParticipationForum_Etablissement1_idx` (`id_etablissement` ASC),
  CONSTRAINT `fk_ParticipeForum_ContactEtablissement1`
    FOREIGN KEY (`id_contact_etablissement` , `id_personne_contact_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`contact_etablissement` (`id` , `id_personne`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ParticipeForum_Forum1`
    FOREIGN KEY (`id_forum`)
    REFERENCES `db_rel_ent_pol_tours`.`forum` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ParticipationForum_Etablissement1`
    FOREIGN KEY (`id_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`etablissement` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`conference`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`conference` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `sujet_conference` VARCHAR(255) NOT NULL,
  `annulee` TINYINT NOT NULL DEFAULT 0,
  `date_conference` DATE NOT NULL,
  `heure_debut_conference` TIME NULL,
  `heure_fin_conference` TIME NULL,
  `id_etablissement` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Conference_Etablissement1_idx` (`id_etablissement` ASC),
  CONSTRAINT `fk_Conference_Etablissement1`
    FOREIGN KEY (`id_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`etablissement` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`participe_conference`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`participe_conference` (
  `id_conference` INT NOT NULL,
  `id_contact_etablissement` INT NOT NULL,
  `id_personne_contact_etablissement` INT NOT NULL,
  PRIMARY KEY (`id_conference`, `id_contact_etablissement`, `id_personne_contact_etablissement`),
  INDEX `fk_ParticipeConference_ContactEtablissement1_idx` (`id_contact_etablissement` ASC, `id_personne_contact_etablissement` ASC),
  CONSTRAINT `fk_ParticipeConference_Conference1`
    FOREIGN KEY (`id_conference`)
    REFERENCES `db_rel_ent_pol_tours`.`conference` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ParticipeConference_ContactEtablissement1`
    FOREIGN KEY (`id_contact_etablissement` , `id_personne_contact_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`contact_etablissement` (`id` , `id_personne`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`projet_pedagogique`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`projet_pedagogique` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_etablissement` INT NOT NULL,
  `date_debut_projet` DATE NOT NULL,
  `intitule_projet` VARCHAR(255) NOT NULL DEFAULT 'Projet pédagogique',
  `details_projet` TEXT NULL,
  `montant_alloue` FLOAT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_ProjetPedagogique_Etablissement1_idx` (`id_etablissement` ASC),
  CONSTRAINT `fk_ProjetPedagogique_Etablissement1`
    FOREIGN KEY (`id_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`etablissement` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`verse_taxe_apprentissage`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`verse_taxe_apprentissage` (
  `id_departement` INT NOT NULL,
  `id_entreprise` INT NOT NULL,
  `annee_versement` DATE NOT NULL,
  `montant_taxe` FLOAT NOT NULL,
  `partie_versante` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_departement`, `id_entreprise`, `annee_versement`),
  INDEX `fk_verse_taxe_apprentissage_entreprise1_idx` (`id_entreprise` ASC),
  CONSTRAINT `fk_VerseTaxeApprentissage_Departement1`
    FOREIGN KEY (`id_departement`)
    REFERENCES `db_rel_ent_pol_tours`.`departement` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_verse_taxe_apprentissage_entreprise1`
    FOREIGN KEY (`id_entreprise`)
    REFERENCES `db_rel_ent_pol_tours`.`entreprise` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`cifre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`cifre` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_etablissement` INT NOT NULL,
  `id_personne_etudiant` INT NULL,
  `id_etudiant` INT NULL,
  `id_personne_personnel_polytech` INT NULL,
  `id_personnel_polytech` INT NULL,
  `intitule_cifre` VARCHAR(255) NOT NULL,
  `soutenue` TINYINT NOT NULL DEFAULT 1,
  `date_debut_cifre` DATE NOT NULL,
  `date_fin_cifre` DATE NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_CIFRE_Etudiant1_idx` (`id_personne_etudiant` ASC, `id_etudiant` ASC),
  INDEX `fk_CIFRE_Etablissement1_idx` (`id_etablissement` ASC),
  INDEX `fk_CIFRE_PersonnelPolytech1_idx` (`id_personne_personnel_polytech` ASC, `id_personnel_polytech` ASC),
  CONSTRAINT `fk_CIFRE_Etudiant1`
    FOREIGN KEY (`id_personne_etudiant` , `id_etudiant`)
    REFERENCES `db_rel_ent_pol_tours`.`etudiant` (`id_personne` , `id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CIFRE_Etablissement1`
    FOREIGN KEY (`id_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`etablissement` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CIFRE_PersonnelPolytech1`
    FOREIGN KEY (`id_personne_personnel_polytech` , `id_personnel_polytech`)
    REFERENCES `db_rel_ent_pol_tours`.`personnel_polytech` (`id_personne` , `id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`conseil_perfectionnement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`conseil_perfectionnement` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date_conseil_perfectionnement` DATE NOT NULL,
  `id_departement` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_ConseilPerfectionnement_Departement1_idx` (`id_departement` ASC),
  CONSTRAINT `fk_ConseilPerfectionnement_Departement1`
    FOREIGN KEY (`id_departement`)
    REFERENCES `db_rel_ent_pol_tours`.`departement` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`etudiant_participe_conseil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`etudiant_participe_conseil` (
  `id_conseil_perfectionnement` INT NOT NULL,
  `id_etudiant` INT NOT NULL,
  `id_personne_etudiant` INT NOT NULL,
  PRIMARY KEY (`id_conseil_perfectionnement`, `id_etudiant`, `id_personne_etudiant`),
  INDEX `fk_EtudiantParticipeConseil_Etudiant1_idx` (`id_personne_etudiant` ASC, `id_etudiant` ASC),
  CONSTRAINT `fk_EtudiantParticipeConseil_ConseilPerfectionnement1`
    FOREIGN KEY (`id_conseil_perfectionnement`)
    REFERENCES `db_rel_ent_pol_tours`.`conseil_perfectionnement` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EtudiantParticipeConseil_Etudiant1`
    FOREIGN KEY (`id_personne_etudiant` , `id_etudiant`)
    REFERENCES `db_rel_ent_pol_tours`.`etudiant` (`id_personne` , `id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`personnel_participe_conseil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`personnel_participe_conseil` (
  `id_conseil_perfectionnement` INT NOT NULL,
  `id_personnel_polytech` INT NOT NULL,
  `id_personne_personnel_polytech` INT NOT NULL,
  PRIMARY KEY (`id_conseil_perfectionnement`, `id_personnel_polytech`, `id_personne_personnel_polytech`),
  INDEX `fk_PersonnelParticipeConseil_PersonnelPolytech1_idx` (`id_personne_personnel_polytech` ASC, `id_personnel_polytech` ASC),
  CONSTRAINT `fk_PersonnelParticipeConseil_ConseilPerfectionnement1`
    FOREIGN KEY (`id_conseil_perfectionnement`)
    REFERENCES `db_rel_ent_pol_tours`.`conseil_perfectionnement` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PersonnelParticipeConseil_PersonnelPolytech1`
    FOREIGN KEY (`id_personne_personnel_polytech` , `id_personnel_polytech`)
    REFERENCES `db_rel_ent_pol_tours`.`personnel_polytech` (`id_personne` , `id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`contact_participe_conseil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`contact_participe_conseil` (
  `id_conseil_perfectionnement` INT NOT NULL,
  `id_personne_contact_etablissement` INT NOT NULL,
  `id_contact_etablissement` INT NOT NULL,
  PRIMARY KEY (`id_conseil_perfectionnement`, `id_personne_contact_etablissement`, `id_contact_etablissement`),
  INDEX `fk_ContactParticipeConseil_ContactEtablissement1_idx` (`id_personne_contact_etablissement` ASC, `id_contact_etablissement` ASC),
  CONSTRAINT `fk_ContactParticipeConseil_ConseilPerfectionnement1`
    FOREIGN KEY (`id_conseil_perfectionnement`)
    REFERENCES `db_rel_ent_pol_tours`.`conseil_perfectionnement` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ContactParticipeConseil_ContactEtablissement1`
    FOREIGN KEY (`id_personne_contact_etablissement` , `id_contact_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`contact_etablissement` (`id_personne` , `id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_rel_ent_pol_tours`.`rencontre_contact`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_rel_ent_pol_tours`.`rencontre_contact` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_adresse` INT NOT NULL,
  `id_contact_etablissement` INT NOT NULL,
  `id_personne_contact_etablissement` INT NOT NULL,
  `id_personnel_polytech` INT NULL,
  `id_personne_personnel_polytech` INT NULL,
  `date_rencontre` DATE NOT NULL,
  `date_rdv_telephonique` DATE NULL,
  `sujet` VARCHAR(255) NULL,
  `suite` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Rencontre_Adresse1_idx` (`id_adresse` ASC),
  INDEX `fk_Rencontre_ContactEtablissement1_idx` (`id_contact_etablissement` ASC, `id_personne_contact_etablissement` ASC),
  INDEX `fk_Rencontre_PersonnelPolytech1_idx` (`id_personnel_polytech` ASC, `id_personne_personnel_polytech` ASC),
  CONSTRAINT `fk_Rencontre_Adresse1`
    FOREIGN KEY (`id_adresse`)
    REFERENCES `db_rel_ent_pol_tours`.`adresse` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Rencontre_ContactEtablissement1`
    FOREIGN KEY (`id_contact_etablissement` , `id_personne_contact_etablissement`)
    REFERENCES `db_rel_ent_pol_tours`.`contact_etablissement` (`id` , `id_personne`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Rencontre_PersonnelPolytech1`
    FOREIGN KEY (`id_personnel_polytech` , `id_personne_personnel_polytech`)
    REFERENCES `db_rel_ent_pol_tours`.`personnel_polytech` (`id` , `id_personne`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;