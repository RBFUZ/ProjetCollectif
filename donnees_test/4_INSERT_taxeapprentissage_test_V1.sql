-- Script MySQL pour création d'enregistrements tests
-- BD: db_rel_ent_pol_tours   Version: 1.0
-- TABLE: verse_taxe_apprentissage

USE `db_rel_ent_pol_tours`;

-- Resets tables
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE verse_taxe_apprentissage;
SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO verse_taxe_apprentissage (id_departement, id_entreprise, annee_versement, montant_taxe, partie_versante) VALUES
 (1, 1, '2018-01-01', 2000, 'C.C.I. Paris')
,(3, 3, '2018-01-01', 5000, 'OPCA DEFI')
,(4, 54, '2018-01-01', 500, 'OPCALIA')
,(4, 54, '2017-01-01', 500, 'OPCALIA')
,(5, 40, '2018-01-01', 1000, 'OPCALIA')
,(6, 2, '2018-01-01', 6000, 'AGEFOS PME')
,(7, 48, '2018-01-01', 3000, 'AGEFOS PME');
