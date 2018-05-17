-- Script MySQL pour création d'enregistrements tests
-- BD: db_rel_ent_pol_tours   Version: 2.0
-- TABLES: departement, specialite

USE `db_rel_ent_pol_tours`;

-- Resets tables
SET FOREIGN_KEY_CHECKS = 0;

TRUNCATE TABLE departement;
ALTER TABLE departement AUTO_INCREMENT = 1;
TRUNCATE TABLE specialite;
ALTER TABLE specialite AUTO_INCREMENT = 1;

SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO departement (libelle_departement)
VALUES('ACO'),
('PeiP'),
('DAE'),
('DI'),
('DII'),
('DEE'),
('DMS');

INSERT INTO specialite (libelle_specialite, id_departement)
VALUES ('Électronique et génie électrique', 6),
('Génie de l''aménagement et de l''environnement', 3),
('Informatique', 4),
('Informatique industrielle', 5),
('Mécanique et conception des systèmes', 7),
('PeiP A Maths-Info', 2),
('PeiP A Sc. Matière', 2),
('PeiP B Biologie', 2);