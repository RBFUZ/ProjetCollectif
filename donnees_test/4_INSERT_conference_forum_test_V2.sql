-- Script MySQL pour création d'enregistrements tests
-- BD: db_rel_ent_pol_tours   Version: 2.0
-- TABLES: conference, participe_conference, type_forum, forum, participation_forum

USE `db_rel_ent_pol_tours`;

-- Resets tables
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE conference;
ALTER TABLE conference AUTO_INCREMENT = 1;
TRUNCATE TABLE participe_conference;
TRUNCATE TABLE type_forum;
ALTER TABLE type_forum AUTO_INCREMENT = 1;
TRUNCATE TABLE forum;
ALTER TABLE forum AUTO_INCREMENT = 1;
TRUNCATE TABLE participation_forum;
ALTER TABLE participation_forum AUTO_INCREMENT = 1;
SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO conference (date_conference, heure_debut_conference, heure_fin_conference, sujet_conference, annulee, id_etablissement) VALUES
 ('2018-02-01', '14:00:00', '16:00:00', 'La sécurité des données bancaires', 0,  80)
,('2018-02-01', '16:15:00', '18:15:00', 'Le développement des énergies biomasses', 1, 32)
,('2018-02-01', '16:15:00', '18:15:00', 'Les nouvelles énergies hydroliques et leur impact', 0, 8);

INSERT INTO participe_conference (id_conference, id_contact_etablissement, id_personne_contact_etablissement) VALUES 
 (1, 28, 78)
,(2, 32, 82)
,(3, 14, 64);

INSERT INTO type_forum (libelle_type_forum, commentaire_type_forum) VALUES
 ('Forum des entreprises Polytech Tours', 'Forum annuel de Polytech Tours à l''occasion duquel de nombreuses entreprises sont invitées')
,('Salon de l''étudiant', 'Salon publique rassemblant écoles, universités et entreprises');

INSERT INTO forum (id_type_forum, nom_forum, date_debut_forum, date_fin_forum, commentaire_forum, id_adresse) VALUES
 (1, 'Forum des entreprises 2017', '2017-12-12', '2017-12-12', 'hébergé au DI', 169);
 
INSERT INTO participation_forum (id_forum, id_contact_etablissement, id_personne_contact_etablissement, id_etablissement, recrute_stagiaire,
		recrute_diplome, recrute_apprentis, niveaux_etudes_recherches, filieres_recherchees, commentaire_participation) VALUES
 (1, 1, 51, 1, 'Stagiaire JEE, Stagiaire réseau aménagement', 'Ingénieur informatique', NULL, '4A, 5A', 'informatique, aménagement', NULL)
,(1, 3, 53, 3, NULL, NULL, 'DII, DAE', '3A, 4A, 5A', 'Informatique, aménagement', NULL)
,(1, 5, 55, 5, 'Stagiaire C#, stagiaire énergétique', 'Ingénieur informatique, mécanique, énergétique', NULL, '4A, 5A', 'Informatique, mécanique, énergétique', 'Première participation');