<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180503135401 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contact_etablissement CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE contact_etablissement ADD CONSTRAINT FK_1651AAB5F15257A FOREIGN KEY (id_personne) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE convention_stage DROP FOREIGN KEY fk_ConventionStage_Gratification1');
        $this->addSql('ALTER TABLE convention_stage CHANGE id_stage id_stage INT DEFAULT NULL, CHANGE id_etudiant id_etudiant INT DEFAULT NULL, CHANGE id_personne_etudiant id_personne_etudiant INT DEFAULT NULL, CHANGE id_specialite id_specialite INT DEFAULT NULL, CHANGE id_etablissement id_etablissement INT DEFAULT NULL, CHANGE id_personnel_polytech_tuteur id_personnel_polytech_tuteur INT DEFAULT NULL, CHANGE id_personne_personnel_polytech_tuteur id_personne_personnel_polytech_tuteur INT DEFAULT NULL, CHANGE id_personnel_polytech_charge_suivi id_personnel_polytech_charge_suivi INT DEFAULT NULL, CHANGE id_personne_personnel_polytech_charge_suivi id_personne_personnel_polytech_charge_suivi INT DEFAULT NULL, CHANGE id_contact_etablissement_tuteur id_contact_etablissement_tuteur INT DEFAULT NULL, CHANGE id_personne_contact_etablissement_tuteur id_personne_contact_etablissement_tuteur INT DEFAULT NULL, CHANGE id_contact_etablissement_signataire id_contact_etablissement_signataire INT DEFAULT NULL, CHANGE id_personne_contact_etablissement_signataire id_personne_contact_etablissement_signataire INT DEFAULT NULL, CHANGE id_service_accueil id_service_accueil INT DEFAULT NULL, CHANGE validee validee TINYINT(1) DEFAULT \'1\' NOT NULL, CHANGE validee_pedagogiquement validee_pedagogiquement TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE convention_stage ADD CONSTRAINT FK_2126626C5D39703F FOREIGN KEY (id_gratification) REFERENCES gratification (id)');
        $this->addSql('ALTER TABLE effectue_vacation DROP FOREIGN KEY fk_EffectueVacation_ContactEtablissement1');
        $this->addSql('ALTER TABLE effectue_vacation DROP FOREIGN KEY fk_EffectueVacation_Etablissement1');
        $this->addSql('ALTER TABLE effectue_vacation CHANGE id_contact_etablissement id_contact_etablissement INT DEFAULT NULL, CHANGE id_personne_contact_etablissement id_personne_contact_etablissement INT DEFAULT NULL, CHANGE id_etablissement id_etablissement INT DEFAULT NULL, CHANGE volume_horaire volume_horaire INT DEFAULT NULL');
        $this->addSql('ALTER TABLE effectue_vacation ADD CONSTRAINT FK_4B136D2CD0D28DABE72C93E8 FOREIGN KEY (id_contact_etablissement, id_personne_contact_etablissement) REFERENCES contact_etablissement (id, id_personne)');
        $this->addSql('ALTER TABLE effectue_vacation ADD CONSTRAINT FK_4B136D2C9ED58849 FOREIGN KEY (id_etablissement) REFERENCES etablissement (id)');
        $this->addSql('ALTER TABLE entreprise CHANGE statut_juridique statut_juridique VARCHAR(45) DEFAULT \'Inconnu\' NOT NULL');
        $this->addSql('ALTER TABLE est_contact_rh DROP FOREIGN KEY fk_EstContactRH_ContactEtablissement1');
        $this->addSql('ALTER TABLE est_contact_rh DROP FOREIGN KEY fk_EstContactRH_Etablissement1');
        $this->addSql('ALTER TABLE est_contact_rh CHANGE id_contact_etablissement id_contact_etablissement INT DEFAULT NULL, CHANGE id_personne_contact_etablissement id_personne_contact_etablissement INT DEFAULT NULL, CHANGE id_etablissement id_etablissement INT DEFAULT NULL');
        $this->addSql('ALTER TABLE est_contact_rh ADD CONSTRAINT FK_B65AD12DD0D28DABE72C93E8 FOREIGN KEY (id_contact_etablissement, id_personne_contact_etablissement) REFERENCES contact_etablissement (id, id_personne)');
        $this->addSql('ALTER TABLE est_contact_rh ADD CONSTRAINT FK_B65AD12D9ED58849 FOREIGN KEY (id_etablissement) REFERENCES etablissement (id)');
        $this->addSql('ALTER TABLE est_contact_technique DROP FOREIGN KEY fk_EstContactTechnique_ContactEtablissement1');
        $this->addSql('ALTER TABLE est_contact_technique DROP FOREIGN KEY fk_EstContactTechnique_Etablissement1');
        $this->addSql('ALTER TABLE est_contact_technique CHANGE id_contact_etablissement id_contact_etablissement INT DEFAULT NULL, CHANGE id_personne_contact_etablissement id_personne_contact_etablissement INT DEFAULT NULL, CHANGE id_etablissement id_etablissement INT DEFAULT NULL');
        $this->addSql('ALTER TABLE est_contact_technique ADD CONSTRAINT FK_4CB75236D0D28DABE72C93E8 FOREIGN KEY (id_contact_etablissement, id_personne_contact_etablissement) REFERENCES contact_etablissement (id, id_personne)');
        $this->addSql('ALTER TABLE est_contact_technique ADD CONSTRAINT FK_4CB752369ED58849 FOREIGN KEY (id_etablissement) REFERENCES etablissement (id)');
        $this->addSql('ALTER TABLE est_employe DROP FOREIGN KEY fk_Employe_ContactEtablissement1');
        $this->addSql('ALTER TABLE est_employe DROP FOREIGN KEY fk_Employe_Etablissement1');
        $this->addSql('ALTER TABLE est_employe CHANGE id_contact_etablissement id_contact_etablissement INT DEFAULT NULL, CHANGE id_personne_contact_etablissement id_personne_contact_etablissement INT DEFAULT NULL, CHANGE id_etablissement id_etablissement INT DEFAULT NULL, CHANGE fonction fonction VARCHAR(255) DEFAULT \'Employé(e)\' NOT NULL');
        $this->addSql('ALTER TABLE est_employe ADD CONSTRAINT FK_135BCA79D0D28DABE72C93E8 FOREIGN KEY (id_contact_etablissement, id_personne_contact_etablissement) REFERENCES contact_etablissement (id, id_personne)');
        $this->addSql('ALTER TABLE est_employe ADD CONSTRAINT FK_135BCA799ED58849 FOREIGN KEY (id_etablissement) REFERENCES etablissement (id)');
        $this->addSql('ALTER TABLE etablissement CHANGE id_adresse id_adresse INT DEFAULT NULL, CHANGE id_entreprise id_entreprise INT DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY fk_Etudiant_Personne1');
        $this->addSql('ALTER TABLE etudiant CHANGE id id INT NOT NULL, CHANGE id_specialite id_specialite INT DEFAULT NULL, CHANGE numero_etudiant numero_etudiant INT DEFAULT NULL, CHANGE mail_etudiant mail_etudiant VARCHAR(100) DEFAULT NULL, CHANGE diplome diplome TINYINT(1) NOT NULL COMMENT \'1 si diplomé, 0 autrement\'');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E35F15257A FOREIGN KEY (id_personne) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE forum CHANGE id_type_forum id_type_forum INT DEFAULT NULL, CHANGE id_adresse id_adresse INT DEFAULT NULL');
        $this->addSql('ALTER TABLE gratification CHANGE unite_gratification unite_gratification VARCHAR(45) DEFAULT \'Brut\' NOT NULL COMMENT \'BRUT / NET\', CHANGE unite_duree_gratification unite_duree_gratification VARCHAR(45) DEFAULT \'Mensuel\' NOT NULL COMMENT \'HEURE, MOIS, etc.\'');
        $this->addSql('ALTER TABLE interruption_stage DROP FOREIGN KEY fk_InterruptionStage_ConventionStage1');
        $this->addSql('ALTER TABLE interruption_stage CHANGE id_convention_stage id_convention_stage INT DEFAULT NULL');
        $this->addSql('ALTER TABLE interruption_stage ADD CONSTRAINT FK_8738E74AC2AC37BD FOREIGN KEY (id_convention_stage) REFERENCES convention_stage (id)');
        $this->addSql('ALTER TABLE participation_forum DROP FOREIGN KEY fk_ParticipeForum_ContactEtablissement1');
        $this->addSql('ALTER TABLE participation_forum DROP FOREIGN KEY fk_ParticipeForum_Forum1');
        $this->addSql('ALTER TABLE participation_forum CHANGE id_forum id_forum INT DEFAULT NULL, CHANGE id_contact_etablissement id_contact_etablissement INT DEFAULT NULL, CHANGE id_personne_contact_etablissement id_personne_contact_etablissement INT DEFAULT NULL, CHANGE id_etablissement id_etablissement INT DEFAULT NULL');
        $this->addSql('ALTER TABLE participation_forum ADD CONSTRAINT FK_8AF73346D0D28DABE72C93E8 FOREIGN KEY (id_contact_etablissement, id_personne_contact_etablissement) REFERENCES contact_etablissement (id, id_personne)');
        $this->addSql('ALTER TABLE participation_forum ADD CONSTRAINT FK_8AF733466BAEFFFD FOREIGN KEY (id_forum) REFERENCES forum (id)');
        $this->addSql('ALTER TABLE pays CHANGE code code INT DEFAULT NULL, CHANGE alpha2 alpha2 VARCHAR(2) DEFAULT NULL, CHANGE alpha3 alpha3 VARCHAR(3) DEFAULT NULL, CHANGE nom_en_gb nom_en_gb VARCHAR(45) DEFAULT NULL');
        $this->addSql('ALTER TABLE personne ADD date_naissance DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE possede_telephone DROP FOREIGN KEY fk_PossedeTelephone_Personne');
        $this->addSql('ALTER TABLE possede_telephone DROP FOREIGN KEY fk_PossedeTelephone_Telephone1');
        $this->addSql('ALTER TABLE possede_telephone ADD CONSTRAINT FK_69CDCE035F15257A FOREIGN KEY (id_personne) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE possede_telephone ADD CONSTRAINT FK_69CDCE03C53A4C37 FOREIGN KEY (id_telephone) REFERENCES telephone (id)');
        $this->addSql('ALTER TABLE possede_telephone RENAME INDEX fk_possedetelephone_telephone1_idx TO IDX_69CDCE03C53A4C37');
        $this->addSql('ALTER TABLE personnel_polytech DROP FOREIGN KEY fk_PersonnelPolytech_Personne1');
        $this->addSql('ALTER TABLE personnel_polytech CHANGE id id INT NOT NULL, CHANGE id_departement id_departement INT DEFAULT NULL, CHANGE mail_universitaire mail_universitaire VARCHAR(100) DEFAULT NULL, CHANGE fonction fonction VARCHAR(255) DEFAULT \'Personnel Polytech\' NOT NULL');
        $this->addSql('ALTER TABLE personnel_polytech ADD CONSTRAINT FK_33F1CB215F15257A FOREIGN KEY (id_personne) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE projet_pedagogique CHANGE id_etablissement id_etablissement INT DEFAULT NULL, CHANGE intitule_projet intitule_projet VARCHAR(255) DEFAULT \'Projet pédagogique\' NOT NULL');
        $this->addSql('ALTER TABLE rencontre_contact CHANGE id_adresse id_adresse INT DEFAULT NULL, CHANGE id_contact_etablissement id_contact_etablissement INT DEFAULT NULL, CHANGE id_personne_contact_etablissement id_personne_contact_etablissement INT DEFAULT NULL');
        $this->addSql('ALTER TABLE service_accueil DROP FOREIGN KEY fk_ServiceAccueil_Etablissement1');
        $this->addSql('ALTER TABLE service_accueil CHANGE id_etablissement id_etablissement INT DEFAULT NULL, CHANGE nom_service nom_service VARCHAR(100) DEFAULT \'Service d\'accueil\' NOT NULL');
        $this->addSql('ALTER TABLE service_accueil ADD CONSTRAINT FK_CD1D1E229ED58849 FOREIGN KEY (id_etablissement) REFERENCES etablissement (id)');
        $this->addSql('ALTER TABLE specialite CHANGE id_departement id_departement INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stage ADD etranger TINYINT(1) NOT NULL, CHANGE annee_etude_stage annee_etude_stage INT DEFAULT NULL, CHANGE thematique_stage thematique_stage VARCHAR(255) DEFAULT NULL, CHANGE sujet_stage sujet_stage VARCHAR(255) DEFAULT NULL, CHANGE fonctions_taches_stage fonctions_taches_stage TEXT DEFAULT NULL, CHANGE duree_stage_semaines duree_stage_semaines INT DEFAULT NULL, CHANGE duree_stage_heures duree_stage_heures INT DEFAULT NULL, CHANGE nb_jours_travail nb_jours_travail INT DEFAULT NULL');
        $this->addSql('ALTER TABLE telephone CHANGE type_telephone type_telephone VARCHAR(45) DEFAULT \'Fixe\' NOT NULL');
        $this->addSql('ALTER TABLE user ADD email VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE verse_taxe_apprentissage DROP FOREIGN KEY fk_VerseTaxeApprentissage_Departement1');
        $this->addSql('ALTER TABLE verse_taxe_apprentissage DROP FOREIGN KEY fk_VerseTaxeApprentissage_Etablissement1');
        $this->addSql('DROP INDEX fk_VerseTaxeApprentissage_Etablissement1_idx ON verse_taxe_apprentissage');
        $this->addSql('ALTER TABLE verse_taxe_apprentissage DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE verse_taxe_apprentissage CHANGE id_etablissement id_entreprise INT NOT NULL');
        $this->addSql('ALTER TABLE verse_taxe_apprentissage ADD CONSTRAINT FK_BBC2644AD9649694 FOREIGN KEY (id_departement) REFERENCES departement (id)');
        $this->addSql('ALTER TABLE verse_taxe_apprentissage ADD CONSTRAINT FK_BBC2644AA8937AB7 FOREIGN KEY (id_entreprise) REFERENCES entreprise (id)');
        $this->addSql('CREATE INDEX fk_verse_taxe_apprentissage_entreprise1_idx ON verse_taxe_apprentissage (id_entreprise)');
        $this->addSql('ALTER TABLE verse_taxe_apprentissage ADD PRIMARY KEY (annee_versement, id_departement, id_entreprise)');
        $this->addSql('ALTER TABLE ville DROP FOREIGN KEY fk_Ville_Pays1');
        $this->addSql('ALTER TABLE ville CHANGE id_pays id_pays INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ville ADD CONSTRAINT FK_43C3D9C3BFBF20AC FOREIGN KEY (id_pays) REFERENCES pays (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contact_etablissement DROP FOREIGN KEY FK_1651AAB5F15257A');
        $this->addSql('ALTER TABLE contact_etablissement CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE convention_stage DROP FOREIGN KEY FK_2126626C5D39703F');
        $this->addSql('ALTER TABLE convention_stage CHANGE id_contact_etablissement_tuteur id_contact_etablissement_tuteur INT NOT NULL, CHANGE id_personne_contact_etablissement_tuteur id_personne_contact_etablissement_tuteur INT NOT NULL, CHANGE id_contact_etablissement_signataire id_contact_etablissement_signataire INT NOT NULL, CHANGE id_personne_contact_etablissement_signataire id_personne_contact_etablissement_signataire INT NOT NULL, CHANGE id_etablissement id_etablissement INT NOT NULL, CHANGE id_etudiant id_etudiant INT NOT NULL, CHANGE id_personne_etudiant id_personne_etudiant INT NOT NULL, CHANGE id_personnel_polytech_tuteur id_personnel_polytech_tuteur INT NOT NULL, CHANGE id_personne_personnel_polytech_tuteur id_personne_personnel_polytech_tuteur INT NOT NULL, CHANGE id_personnel_polytech_charge_suivi id_personnel_polytech_charge_suivi INT NOT NULL, CHANGE id_personne_personnel_polytech_charge_suivi id_personne_personnel_polytech_charge_suivi INT NOT NULL, CHANGE id_service_accueil id_service_accueil INT NOT NULL, CHANGE id_specialite id_specialite INT NOT NULL, CHANGE id_stage id_stage INT NOT NULL, CHANGE validee validee TINYINT(1) NOT NULL, CHANGE validee_pedagogiquement validee_pedagogiquement TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE convention_stage ADD CONSTRAINT fk_ConventionStage_Gratification1 FOREIGN KEY (id_gratification) REFERENCES gratification (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE effectue_vacation DROP FOREIGN KEY FK_4B136D2CD0D28DABE72C93E8');
        $this->addSql('ALTER TABLE effectue_vacation DROP FOREIGN KEY FK_4B136D2C9ED58849');
        $this->addSql('ALTER TABLE effectue_vacation CHANGE id_contact_etablissement id_contact_etablissement INT NOT NULL, CHANGE id_personne_contact_etablissement id_personne_contact_etablissement INT NOT NULL, CHANGE id_etablissement id_etablissement INT NOT NULL, CHANGE volume_horaire volume_horaire INT NOT NULL');
        $this->addSql('ALTER TABLE effectue_vacation ADD CONSTRAINT fk_EffectueVacation_ContactEtablissement1 FOREIGN KEY (id_contact_etablissement, id_personne_contact_etablissement) REFERENCES contact_etablissement (id, id_personne) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE effectue_vacation ADD CONSTRAINT fk_EffectueVacation_Etablissement1 FOREIGN KEY (id_etablissement) REFERENCES etablissement (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entreprise CHANGE statut_juridique statut_juridique VARCHAR(45) NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE est_contact_rh DROP FOREIGN KEY FK_B65AD12DD0D28DABE72C93E8');
        $this->addSql('ALTER TABLE est_contact_rh DROP FOREIGN KEY FK_B65AD12D9ED58849');
        $this->addSql('ALTER TABLE est_contact_rh CHANGE id_contact_etablissement id_contact_etablissement INT NOT NULL, CHANGE id_personne_contact_etablissement id_personne_contact_etablissement INT NOT NULL, CHANGE id_etablissement id_etablissement INT NOT NULL');
        $this->addSql('ALTER TABLE est_contact_rh ADD CONSTRAINT fk_EstContactRH_ContactEtablissement1 FOREIGN KEY (id_contact_etablissement, id_personne_contact_etablissement) REFERENCES contact_etablissement (id, id_personne) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE est_contact_rh ADD CONSTRAINT fk_EstContactRH_Etablissement1 FOREIGN KEY (id_etablissement) REFERENCES etablissement (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE est_contact_technique DROP FOREIGN KEY FK_4CB75236D0D28DABE72C93E8');
        $this->addSql('ALTER TABLE est_contact_technique DROP FOREIGN KEY FK_4CB752369ED58849');
        $this->addSql('ALTER TABLE est_contact_technique CHANGE id_contact_etablissement id_contact_etablissement INT NOT NULL, CHANGE id_personne_contact_etablissement id_personne_contact_etablissement INT NOT NULL, CHANGE id_etablissement id_etablissement INT NOT NULL');
        $this->addSql('ALTER TABLE est_contact_technique ADD CONSTRAINT fk_EstContactTechnique_ContactEtablissement1 FOREIGN KEY (id_contact_etablissement, id_personne_contact_etablissement) REFERENCES contact_etablissement (id, id_personne) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE est_contact_technique ADD CONSTRAINT fk_EstContactTechnique_Etablissement1 FOREIGN KEY (id_etablissement) REFERENCES etablissement (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE est_employe DROP FOREIGN KEY FK_135BCA79D0D28DABE72C93E8');
        $this->addSql('ALTER TABLE est_employe DROP FOREIGN KEY FK_135BCA799ED58849');
        $this->addSql('ALTER TABLE est_employe CHANGE id_contact_etablissement id_contact_etablissement INT NOT NULL, CHANGE id_personne_contact_etablissement id_personne_contact_etablissement INT NOT NULL, CHANGE id_etablissement id_etablissement INT NOT NULL, CHANGE fonction fonction VARCHAR(255) NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE est_employe ADD CONSTRAINT fk_Employe_ContactEtablissement1 FOREIGN KEY (id_contact_etablissement, id_personne_contact_etablissement) REFERENCES contact_etablissement (id, id_personne) ON UPDATE CASCADE ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE est_employe ADD CONSTRAINT fk_Employe_Etablissement1 FOREIGN KEY (id_etablissement) REFERENCES etablissement (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE etablissement CHANGE id_adresse id_adresse INT NOT NULL, CHANGE id_entreprise id_entreprise INT NOT NULL');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E35F15257A');
        $this->addSql('ALTER TABLE etudiant CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE id_specialite id_specialite INT NOT NULL, CHANGE diplome diplome TINYINT(1) NOT NULL COMMENT \'TRUE si diplomé, FAUX autrement\', CHANGE numero_etudiant numero_etudiant INT NOT NULL, CHANGE mail_etudiant mail_etudiant VARCHAR(100) NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT fk_Etudiant_Personne1 FOREIGN KEY (id_personne) REFERENCES personne (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE forum CHANGE id_adresse id_adresse INT NOT NULL, CHANGE id_type_forum id_type_forum INT NOT NULL');
        $this->addSql('ALTER TABLE gratification CHANGE unite_gratification unite_gratification VARCHAR(45) NOT NULL COLLATE utf8_general_ci COMMENT \'BRUT / NET\', CHANGE unite_duree_gratification unite_duree_gratification VARCHAR(45) NOT NULL COLLATE utf8_general_ci COMMENT \'HEURE, MOIS, etc.\'');
        $this->addSql('ALTER TABLE interruption_stage DROP FOREIGN KEY FK_8738E74AC2AC37BD');
        $this->addSql('ALTER TABLE interruption_stage CHANGE id_convention_stage id_convention_stage INT NOT NULL');
        $this->addSql('ALTER TABLE interruption_stage ADD CONSTRAINT fk_InterruptionStage_ConventionStage1 FOREIGN KEY (id_convention_stage) REFERENCES convention_stage (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participation_forum DROP FOREIGN KEY FK_8AF73346D0D28DABE72C93E8');
        $this->addSql('ALTER TABLE participation_forum DROP FOREIGN KEY FK_8AF733466BAEFFFD');
        $this->addSql('ALTER TABLE participation_forum CHANGE id_etablissement id_etablissement INT NOT NULL COMMENT \'Etablissement représenté par le contact\', CHANGE id_contact_etablissement id_contact_etablissement INT NOT NULL, CHANGE id_personne_contact_etablissement id_personne_contact_etablissement INT NOT NULL, CHANGE id_forum id_forum INT NOT NULL');
        $this->addSql('ALTER TABLE participation_forum ADD CONSTRAINT fk_ParticipeForum_ContactEtablissement1 FOREIGN KEY (id_contact_etablissement, id_personne_contact_etablissement) REFERENCES contact_etablissement (id, id_personne) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participation_forum ADD CONSTRAINT fk_ParticipeForum_Forum1 FOREIGN KEY (id_forum) REFERENCES forum (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pays CHANGE code code INT NOT NULL, CHANGE alpha2 alpha2 VARCHAR(2) NOT NULL COLLATE utf8_general_ci, CHANGE alpha3 alpha3 VARCHAR(3) NOT NULL COLLATE utf8_general_ci, CHANGE nom_en_gb nom_en_gb VARCHAR(45) NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE personne DROP date_naissance');
        $this->addSql('ALTER TABLE personnel_polytech DROP FOREIGN KEY FK_33F1CB215F15257A');
        $this->addSql('ALTER TABLE personnel_polytech CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE id_departement id_departement INT NOT NULL, CHANGE fonction fonction VARCHAR(255) NOT NULL COLLATE utf8_general_ci, CHANGE mail_universitaire mail_universitaire VARCHAR(100) NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE personnel_polytech ADD CONSTRAINT fk_PersonnelPolytech_Personne1 FOREIGN KEY (id_personne) REFERENCES personne (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE possede_telephone DROP FOREIGN KEY FK_69CDCE035F15257A');
        $this->addSql('ALTER TABLE possede_telephone DROP FOREIGN KEY FK_69CDCE03C53A4C37');
        $this->addSql('ALTER TABLE possede_telephone ADD CONSTRAINT fk_PossedeTelephone_Personne FOREIGN KEY (id_personne) REFERENCES personne (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE possede_telephone ADD CONSTRAINT fk_PossedeTelephone_Telephone1 FOREIGN KEY (id_telephone) REFERENCES telephone (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE possede_telephone RENAME INDEX idx_69cdce03c53a4c37 TO fk_PossedeTelephone_Telephone1_idx');
        $this->addSql('ALTER TABLE projet_pedagogique CHANGE id_etablissement id_etablissement INT NOT NULL, CHANGE intitule_projet intitule_projet VARCHAR(255) NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE rencontre_contact CHANGE id_adresse id_adresse INT NOT NULL, CHANGE id_contact_etablissement id_contact_etablissement INT NOT NULL, CHANGE id_personne_contact_etablissement id_personne_contact_etablissement INT NOT NULL');
        $this->addSql('ALTER TABLE service_accueil DROP FOREIGN KEY FK_CD1D1E229ED58849');
        $this->addSql('ALTER TABLE service_accueil CHANGE id_etablissement id_etablissement INT NOT NULL, CHANGE nom_service nom_service VARCHAR(100) NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE service_accueil ADD CONSTRAINT fk_ServiceAccueil_Etablissement1 FOREIGN KEY (id_etablissement) REFERENCES etablissement (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE specialite CHANGE id_departement id_departement INT NOT NULL');
        $this->addSql('ALTER TABLE stage DROP etranger, CHANGE annee_etude_stage annee_etude_stage INT NOT NULL, CHANGE thematique_stage thematique_stage VARCHAR(255) NOT NULL COLLATE utf8_general_ci, CHANGE sujet_stage sujet_stage VARCHAR(255) NOT NULL COLLATE utf8_general_ci, CHANGE fonctions_taches_stage fonctions_taches_stage TEXT NOT NULL COLLATE utf8_general_ci, CHANGE duree_stage_semaines duree_stage_semaines INT NOT NULL, CHANGE duree_stage_heures duree_stage_heures INT NOT NULL, CHANGE nb_jours_travail nb_jours_travail INT NOT NULL');
        $this->addSql('ALTER TABLE telephone CHANGE type_telephone type_telephone VARCHAR(45) NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE user DROP email');
        $this->addSql('ALTER TABLE verse_taxe_apprentissage DROP FOREIGN KEY FK_BBC2644AD9649694');
        $this->addSql('ALTER TABLE verse_taxe_apprentissage DROP FOREIGN KEY FK_BBC2644AA8937AB7');
        $this->addSql('DROP INDEX fk_verse_taxe_apprentissage_entreprise1_idx ON verse_taxe_apprentissage');
        $this->addSql('ALTER TABLE verse_taxe_apprentissage DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE verse_taxe_apprentissage CHANGE id_entreprise id_etablissement INT NOT NULL');
        $this->addSql('ALTER TABLE verse_taxe_apprentissage ADD CONSTRAINT fk_VerseTaxeApprentissage_Departement1 FOREIGN KEY (id_departement) REFERENCES departement (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE verse_taxe_apprentissage ADD CONSTRAINT fk_VerseTaxeApprentissage_Etablissement1 FOREIGN KEY (id_etablissement) REFERENCES etablissement (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('CREATE INDEX fk_VerseTaxeApprentissage_Etablissement1_idx ON verse_taxe_apprentissage (id_etablissement)');
        $this->addSql('ALTER TABLE verse_taxe_apprentissage ADD PRIMARY KEY (id_departement, id_etablissement, annee_versement)');
        $this->addSql('ALTER TABLE ville DROP FOREIGN KEY FK_43C3D9C3BFBF20AC');
        $this->addSql('ALTER TABLE ville CHANGE id_pays id_pays INT NOT NULL');
        $this->addSql('ALTER TABLE ville ADD CONSTRAINT fk_Ville_Pays1 FOREIGN KEY (id_pays) REFERENCES pays (id) ON UPDATE NO ACTION ON DELETE CASCADE');
    }
}
