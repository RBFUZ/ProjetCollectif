-- Script MySQL pour création d'enregistrements tests
-- BD: db_rel_ent_pol_tours   Version: 2.0
-- TABLES: est_employe, est_contact_rh, est_contact_technique, effectue_vacation, rencontre_contact

USE `db_rel_ent_pol_tours`;

-- Resets table
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE est_employe;
ALTER TABLE est_employe AUTO_INCREMENT = 1;
TRUNCATE TABLE est_contact_rh;
ALTER TABLE est_contact_rh AUTO_INCREMENT = 1;
TRUNCATE TABLE est_contact_technique;
ALTER TABLE est_contact_technique AUTO_INCREMENT = 1;
TRUNCATE TABLE effectue_vacation;
ALTER TABLE effectue_vacation AUTO_INCREMENT = 1;
TRUNCATE TABLE rencontre_contact;
ALTER TABLE rencontre_contact AUTO_INCREMENT = 1;
SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO est_employe(id_contact_etablissement,id_personne_contact_etablissement,id_etablissement,date_debut_emploi,date_fin_emploi,fonction) VALUES
 (1,51,1,'1990-01-01','2010-12-31','RH')
,(2,52,2,'1991-01-02','2000-12-31','Ingénieur')
,(2,52,51,'2001-01-01',NULL,'Ingénieur')
,(3,53,3,'1992-01-03',NULL,'RH')
,(4,54,4,'1993-01-03',NULL,'Ingénieur')
,(5,55,5,'1994-01-04',NULL,'RH')
,(6,56,6,'1995-01-05',NULL,'Ingénieur')
,(7,57,7,'1996-01-06',NULL,'RH')
,(8,58,8,'1997-01-06',NULL,'Ingénieur')
,(9,59,9,'1998-01-07',NULL,'RH')
,(10,60,10,'1999-01-08',NULL,'Ingénieur')
,(11,61,11,'2000-01-09',NULL,'RH')
,(12,62,12,'2001-01-09',NULL,'Ingénieur')
,(13,63,13,'2002-01-10',NULL,'RH')
,(14,64,14,'2003-01-11',NULL,'Ingénieur')
,(15,65,15,'2004-01-12',NULL,'RH')
,(16,66,16,'2005-01-12',NULL,'Ingénieur')
,(17,67,17,'2006-01-13',NULL,'RH')
,(18,68,18,'2007-01-14','2017-12-31','Ingénieur')
,(18,68,52,'2018-01-01',NULL,'Ingénieur')
,(19,69,19,'2008-01-15',NULL,'RH')
,(20,70,20,'2009-01-15',NULL,'Ingénieur')
,(21,71,21,'2010-01-16',NULL,'RH')
,(22,72,22,'2011-01-17',NULL,'Ingénieur')
,(23,73,23,'2012-01-18',NULL,'RH')
,(24,74,24,'2013-01-18',NULL,'Ingénieur')
,(25,75,25,'2014-01-19',NULL,'RH')
,(26,76,26,'2015-01-20',NULL,'Ingénieur')
,(27,77,27,'1990-01-21',NULL,'RH')
,(28,78,28,'1991-01-21',NULL,'Ingénieur')
,(29,79,29,'1992-01-21',NULL,'RH')
,(30,80,30,'1993-01-21',NULL,'Ingénieur')
,(31,81,31,'1994-01-21',NULL,'RH')
,(32,82,32,'1995-01-21',NULL,'Ingénieur')
,(33,83,33,'1996-01-21',NULL,'RH')
,(34,84,34,'1997-01-21','2018-02-01','Ingénieur')
,(34,84,53,'2018-02-02',NULL,'Ingénieur')
,(35,85,35,'1998-01-21',NULL,'RH')
,(36,86,36,'1999-01-21',NULL,'Ingénieur')
,(37,87,37,'2000-01-21',NULL,'RH')
,(38,88,38,'2001-01-21',NULL,'Ingénieur')
,(39,89,39,'2002-01-21',NULL,'RH')
,(40,90,40,'2003-01-21',NULL,'Ingénieur')
,(41,91,41,'2004-01-21',NULL,'RH')
,(42,92,42,'2005-01-21',NULL,'Ingénieur')
,(43,93,43,'2006-01-21',NULL,'RH')
,(44,94,44,'2007-01-21',NULL,'Ingénieur')
,(45,95,45,'2008-01-21',NULL,'RH')
,(46,96,46,'2009-01-21',NULL,'Ingénieur')
,(47,97,47,'2010-01-21',NULL,'RH')
,(48,98,48,'2011-01-21','2016-12-31','Ingénieur')
,(49,99,49,'2012-01-21',NULL,'RH')
,(50,100,50,'2013-01-21',NULL,'Ingénieur');

INSERT INTO est_contact_rh(id_contact_etablissement,id_personne_contact_etablissement,id_etablissement,date_debut_contact_rh,date_fin_contact_rh) VALUES
 (1,51,1,'1990-01-01','2010-12-31')
,(3,53,3,'1992-01-03',NULL)
,(5,55,5,'1994-01-04',NULL)
,(7,57,7,'1996-01-06',NULL)
,(9,59,9,'1998-01-07',NULL)
,(11,61,11,'2000-01-09',NULL)
,(13,63,13,'2002-01-10',NULL)
,(15,65,15,'2004-01-12',NULL)
,(17,67,17,'2006-01-13',NULL)
,(19,69,19,'2008-01-15',NULL)
,(21,71,21,'2010-01-16',NULL)
,(23,73,23,'2012-01-18',NULL)
,(25,75,25,'2014-01-19',NULL)
,(27,77,27,'1990-01-21',NULL)
,(29,79,29,'1992-01-21',NULL)
,(31,81,31,'1994-01-21',NULL)
,(33,83,33,'1996-01-21',NULL)
,(35,85,35,'1998-01-21',NULL)
,(37,87,37,'2000-01-21',NULL)
,(39,89,39,'2002-01-21',NULL)
,(41,91,41,'2004-01-21',NULL)
,(43,93,43,'2006-01-21',NULL)
,(45,95,45,'2008-01-21',NULL)
,(47,97,47,'2010-01-21',NULL)
,(49,99,49,'2012-01-21',NULL);

INSERT INTO est_contact_technique(id_contact_etablissement,id_personne_contact_etablissement,id_etablissement,date_debut_contact_technique,date_fin_contact_technique) VALUES
 (2,52,2,'1991-01-02','2000-12-31')
,(2,52,51,'2001-01-01',NULL)
,(4,54,4,'1993-01-03',NULL)
,(6,56,6,'1995-01-05',NULL)
,(8,58,8,'1997-01-06',NULL)
,(10,60,10,'1999-01-08',NULL)
,(12,62,12,'2001-01-09',NULL)
,(14,64,14,'2003-01-11',NULL)
,(16,66,16,'2005-01-12',NULL)
,(18,68,18,'2007-01-14','2017-12-31')
,(18,68,52,'2018-01-01',NULL)
,(20,70,20,'2009-01-15',NULL)
,(22,72,22,'2011-01-17',NULL)
,(24,74,24,'2013-01-18',NULL)
,(26,76,26,'2015-01-20',NULL)
,(28,78,28,'1991-01-21',NULL)
,(30,80,30,'1993-01-21',NULL)
,(32,82,32,'1995-01-21',NULL)
,(34,84,34,'1997-01-21','2018-02-01')
,(34,84,53,'2018-02-02',NULL)
,(36,86,36,'1999-01-21',NULL)
,(38,88,38,'2001-01-21',NULL)
,(40,90,40,'2003-01-21',NULL)
,(42,92,42,'2005-01-21',NULL)
,(44,94,44,'2007-01-21',NULL)
,(46,96,46,'2009-01-21',NULL)
,(48,98,48,'2011-01-21','2016-12-31')
,(50,100,50,'2013-01-21',NULL);

INSERT INTO effectue_vacation(id_contact_etablissement,id_personne_contact_etablissement,id_etablissement,date_debut_vacation,date_fin_vacation,volume_horaire) VALUES
 (12,62,12,'2018-01-22','2018-06-01',30)
,(22,72,22,'2017-09-01','2018-01-20',25)
,(30,80,30,'2017-01-22','2017-06-01',40)
,(32,82,32,'2016-09-01','2017-01-20',30)
,(42,92,42,'2017-09-01','2017-06-01',50);

INSERT INTO rencontre_contact (date_rencontre, date_rdv_telephonique, sujet, suite, id_adresse, 
		id_contact_etablissement, id_personne_contact_etablissement, id_personnel_polytech, id_personne_personnel_polytech) VALUES
 ('2018-03-01', '2018-02-10', 'Mise en place projet pédagogique', 'Nouveau projet pédagogique DI4 pour 2019', 158, 2, 52, 9, 39)
,('2017-10-01', '2017-09-25', 'Partenariat pour CIFRE', '2 étudiants en CIFRE pour 2018-2019', 76, 7, 57, 16, 46)
,('2018-05-01', NULL, 'Retour d''expérience apprentissage', NULL, 120, 22, 72, 20, 50)
,('2018-04-01', '2018-03-15', 'Vacation pour cours de recherche opérationnelle S7 DI', 'Acceptation pour S7 2018', 103, 18, 68, 9, 39);
