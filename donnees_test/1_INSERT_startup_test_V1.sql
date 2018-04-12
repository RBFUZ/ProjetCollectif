-- Script MySQL pour création d'enregistrements tests
-- BD: db_rel_ent_pol_tours   Version: 1.0
-- TABLE: startup

USE `db_rel_ent_pol_tours`;

-- Resets tables
SET FOREIGN_KEY_CHECKS = 0;

TRUNCATE TABLE startup;
ALTER TABLE startup AUTO_INCREMENT = 1;

SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO startup(nom_startup,date_creation_startup) VALUES
 ('PriceMoov','2017-09-30')
,('StarMate','2015-05-06')
,('Dev&Co','2018-04-09')
,('C++MaisPasAssez','2016-11-03')
,('MyConference','2015-12-12')
,('ExpertDev','2017-06-12')
,('BarreEspaceVerts','2018-01-01');
