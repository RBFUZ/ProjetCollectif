-- Script MySQL pour création d'enregistrements tests
-- BD: db_rel_ent_pol_tours   Version: 2.0
-- TABLES: conseil_perfectionnement, etudiant_participe_conseil, contact_participe_conseil, personnel_participe_conseil

USE `db_rel_ent_pol_tours`;

-- Resets table
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE conseil_perfectionnement;
ALTER TABLE conseil_perfectionnement AUTO_INCREMENT = 1;
TRUNCATE TABLE etudiant_participe_conseil;
TRUNCATE TABLE contact_participe_conseil;
TRUNCATE TABLE personnel_participe_conseil;
SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO conseil_perfectionnement (date_conseil_perfectionnement, id_departement) VALUES
 ('2017-07-01', 1)
,('2017-07-01', 2)
,('2017-07-01', 3)
,('2017-07-01', 4)
,('2017-07-01', 5)
,('2017-07-01', 6)
,('2017-07-01', 7);

INSERT INTO etudiant_participe_conseil (id_conseil_perfectionnement, id_etudiant, id_personne_etudiant) VALUES
 (2, 1, 1)
,(2, 2, 2)
,(2, 3, 3)
,(3, 12, 12)
,(3, 17, 17)
,(3, 22, 22)
,(4, 13, 13)
,(4, 18, 18)
,(4, 23, 23)
,(5, 14, 14)
,(5, 19, 19)
,(5, 24, 24)
,(6, 11, 11)
,(6, 16, 16)
,(6, 21, 21)
,(7, 15, 15)
,(7, 20, 20)
,(7, 25, 25);

INSERT INTO personnel_participe_conseil (id_conseil_perfectionnement, id_personnel_polytech, id_personne_personnel_polytech) VALUES
 (1, 1, 31)
,(1, 2, 32)
,(2, 3, 33)
,(2, 4, 34)
,(3, 6, 36)
,(3, 7, 37)
,(4, 9, 39)
,(4, 10, 40)
,(5, 12, 42)
,(5, 13, 43)
,(6, 15, 45)
,(6, 16, 46)
,(7, 18, 48)
,(7, 19, 49);

INSERT INTO contact_participe_conseil (id_conseil_perfectionnement, id_contact_etablissement, id_personne_contact_etablissement) VALUES
 (1, 1, 51)
,(1, 2, 52)
,(2, 3, 53)
,(2, 4, 54)
,(3, 5, 55)
,(3, 6, 56)
,(4, 7, 57)
,(4, 8, 58)
,(5, 9, 59)
,(5, 10, 60)
,(6, 11, 61)
,(6, 12, 62)
,(7, 13, 63)
,(7, 14, 64);
