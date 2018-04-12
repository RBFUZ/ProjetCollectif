-- Script MySQL pour création d'enregistrements tests
-- BD: db_rel_ent_pol_tours   Version: 2.0
-- TABLES: projet_pedagogique, cifre

USE `db_rel_ent_pol_tours`;

-- Resets table
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE projet_pedagogique;
ALTER TABLE projet_pedagogique AUTO_INCREMENT = 1;
TRUNCATE TABLE cifre;
ALTER TABLE cifre AUTO_INCREMENT = 1;
SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO projet_pedagogique (date_debut_projet, intitule_projet, details_projet, montant_alloue, id_etablissement) VALUES
 ('2018-01-01', 'Projet pédagogique 1', 'Projet 1', 500, 1)
,('2018-01-01', 'Projet pédagogique 2', 'Projet 2', 400, 2)
,('2018-01-01', 'Projet pédagogique 3', 'Projet 3', 600, 3)
,('2018-01-01', 'Projet pédagogique 4', 'Projet 4', 390, 4)
,('2018-01-01', 'Projet pédagogique 5', 'Projet 5', 450, 5)
,('2018-01-01', 'Projet pédagogique 6', 'Projet 6', 550, 6)
,('2018-01-01', 'Projet pédagogique 7', 'Projet 7', 620, 7)
,('2018-01-01', 'Projet pédagogique 8', 'Projet 8', 601, 8)
,('2018-01-01', 'Projet pédagogique 9', 'Projet 9', 500, 9)
,('2018-01-01', 'Projet pédagogique 10', 'Projet 10', 420, 10);

INSERT INTO cifre (intitule_cifre, date_debut_cifre, soutenue, id_personne_etudiant, id_etudiant, 
			id_etablissement, id_personne_personnel_polytech, id_personnel_polytech) VALUES
 ('Etude de l''évolution des dunes de la Loire', '2017-10-01', 1, 27, 27, 1, 37, 7)
,('Recherche sur la reconaissance d''images', '2017-10-01', 0, 28, 28, 20, 40, 10);

