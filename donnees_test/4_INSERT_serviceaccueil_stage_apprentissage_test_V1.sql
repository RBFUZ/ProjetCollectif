-- Script MySQL pour création d'enregistrements tests
-- BD: db_rel_ent_pol_tours   Version: 1.0
-- TABLE: service_accueil, stage, gratification, convention_stage, avenant, interruption_stage, apprentissage

USE `db_rel_ent_pol_tours`;

-- Resets tables
SET FOREIGN_KEY_CHECKS = 0;

TRUNCATE TABLE service_accueil;
ALTER TABLE service_accueil AUTO_INCREMENT = 1;
TRUNCATE TABLE stage;
ALTER TABLE stage AUTO_INCREMENT = 1;
TRUNCATE TABLE gratification;
ALTER TABLE gratification AUTO_INCREMENT = 1;
TRUNCATE TABLE avenant;
ALTER TABLE avenant AUTO_INCREMENT = 1;
TRUNCATE TABLE interruption_stage;
ALTER TABLE interruption_stage AUTO_INCREMENT = 1;
TRUNCATE TABLE convention_stage;
ALTER TABLE convention_stage AUTO_INCREMENT = 1;
TRUNCATE TABLE apprentissage;
ALTER TABLE apprentissage AUTO_INCREMENT = 1;

SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO service_accueil(nom_service,id_etablissement) VALUES
 ('informatique',1)
,('administration',5)
,('atelier',10)
,('informatique',15)
,('comptabilite',20)
,('administration',25)
,('general',30)
,('atelier',35)
,('informatique',40);

INSERT INTO stage (date_debut_stage, date_fin_stage, etranger, annee_etude_stage, thematique_stage, sujet_stage, fonctions_taches_stage, details_projet_stage, duree_stage_semaines, duree_stage_heures, nb_jours_travail, commentaire_duree_stage, commentaire_stage, element_pedagogique, avantages_nature) VALUES
('2017-06-12', '2017-08-25', 0, 4, 'Migration de données', 'Le stagiaire devra migrer des données depuis des fichier vers une interface web', 'Fonction de migration', 'RAS', 11, 385, 55, NULL, NULL, NULL, NULL),
('2017-06-12', '2017-08-25', 0, 4, 'Developpement web', 'Developpement de site web de presentation', 'developpeur web', 'avec symfony3', 11, 385, 55, NULL, 'Ce stage sera sympatique', NULL, 'Tickets restos'),
('2017-06-12', '2017-08-04', 0, 3, 'Assistance informatique', 'Assistance en tout genre, café, photocopies etc', 'Stagiaire lambda', 'Moca de préférence', 4, 140, 20, 'Ce stage est plutot court', NULL, NULL, 'dosettes de café offertes'),
('2017-06-12', '2017-08-04', 0, 3, 'Tests', 'Tests de logiciels et d\'applications', 'Testeur débutant', NULL, 4, 140, 20, 'Ce stage est plutot court', NULL, NULL, NULL),
('2017-06-12', '2017-08-25', 0, 4, 'Mecanique', 'Vissage de boulons et autre écrous', 'Mecanicien', 'Seulement utiliser des clés de 12', 11, 385, 55, NULL, NULL, NULL, 'Boite à outils fournie'),
('2017-04-03', '2017-08-04', 0, 5, 'Arrangement d\'espace verts', 'Le stagiaire devra arranger la pelouse', 'Agent d\'entretien', NULL, 18, 630, 90, NULL, NULL, NULL, NULL),
('2017-04-03', '2017-08-04', 0, 5, 'Refonte de systeme electrique', 'Le stagiaire devra refaire tout le systeme electrique de lentreprise en y repensant le schéma', 'Ingénieur électricien', NULL, 18, 630, 90, NULL, 'Cette mission est très importante', NULL, NULL),
('2017-06-12', '2017-08-04', 0, 3, 'Remplissage d\'herbier', 'Remplissage de l\'herbier national des forêts', 'Ramasseur botanique', NULL, 4, 140, 20, NULL, NULL, NULL, 'Transports de forets en forets payés'),
('2017-04-03', '2017-08-11', 0, 5, 'Projet de grande envergure', 'Projet de recherche et développement pour une grande entreprise', 'Responsable de projet informatique', NULL, 19, 665, 95, NULL, NULL, NULL, 'Tickets restos, 1 semaine de vancances libre'),
('2017-04-03', '2017-08-25', 1, 4, 'Brancher des ampoules', 'Brancher des ampoules', 'Brancheur d\'ampoules', NULL, 21, 735, 105, NULL, NULL, NULL, NULL); 

INSERT INTO gratification(montant_gratification,unite_gratification,unite_duree_gratification) VALUES
 (3,75,'net','heure')
,(5,2,'brut','heure')
,(26,25,'net','jour')
,(36,4,'brut','jour')
,(131,25,'net','semaine')
,(182,'brut','semaine')
,(577,5,'net','mois')
,(800,8,'brut','mois');

INSERT INTO convention_stage(numero_convention,date_creation,date_derniere_modification,type_convention,validee,validee_pedagogiquement,id_stage,id_etudiant,id_personne_etudiant,id_specialite,id_etablissement,id_personnel_polytech_tuteur,id_personne_personnel_polytech_tuteur,id_personnel_polytech_charge_suivi,id_personne_personnel_polytech_charge_suivi,id_contact_etablissement_tuteur,id_personne_contact_etablissement_tuteur,id_contact_etablissement_signataire,id_personne_contact_etablissement_signataire,id_gratification,id_service_accueil) VALUES
 (1,'2017-04-09','2017-05-09','OBLIGATOIRE',1,0,1,11,11,1,1,1,31,10,40,1,51,1,51,1,1)
,(2,'2017-03-16','2017-03-16','OBLIGATOIRE',0,0,2,12,12,2,2,2,32,11,41,2,52,2,52,NULL,2)
,(3,'2017-03-02','2017-03-02','OBLIGATOIRE',1,1,3,13,13,3,3,3,33,12,42,3,53,3,53,3,3)
,(4,'2017-04-15','2017-04-15',NULL,0,0,4,14,14,4,4,4,34,13,43,4,54,4,54,NULL,4)
,(5,'2017-03-12','2017-05-12','OBLIGATOIRE',1,1,5,15,15,5,5,5,35,14,44,5,55,5,55,4,5)
,(6,'2017-04-11','2017-04-19',NULL,0,0,6,16,16,1,6,6,36,15,45,6,56,6,56,2,6)
,(7,'2017-02-28','2017-02-28','OBLIGATOIRE',1,1,7,17,17,2,7,7,37,16,46,7,57,7,57,NULL,7)
,(8,'2017-05-12','2017-05-26','OBLIGATOIRE',1,0,8,18,18,3,8,8,38,17,47,8,58,8,58,4,8)
,(9,'2017-03-02','2017-03-30',NULL,1,1,9,19,19,4,9,9,39,18,48,9,59,9,59,2,9)
,(10,'2017-03-01','2017-03-01','OBLIGATOIRE',1,1,10,16,16,1,96,13,43,14,44,NULL,NULL,NULL,NULL,NULL,NULL);

INSERT INTO avenant(date_creation_avenant,objet_avenant,details_avenant,id_convention_stage) VALUES
 ('2017-06-05','Rallongement de date',NULL,1)
,('2017-06-05','Gratification a augmenter','Prime de 5euros par jour',5)
,('2017-05-31','Rallongement de date',NULL,7);

INSERT INTO interruption_stage(date_debut_interruption,date_fin_interruption,commentaire_interruption,id_convention_stage) VALUES
 ('2017-07-17','2017-07-24','Fermeture temporaire',2)
,('2017-08-01','2017-08-08','Conges responsable',8)
,('2017-07-11','2017-08-11','Maladie prevue',9);

INSERT INTO apprentissage(date_debut_apprentissage,date_fin_apprentissage,duree_apprentissage_annees,etranger,details_apprentissage,id_gratification,id_specialite,id_personne_etudiant,id_etudiant,id_etablissement) VALUES
 ('2017-09-15','2018-06-30',1,0,NULL,1,1,11,11,6)
,('2017-09-15','2018-06-30',2,1,'Cet apprentissage est en Allemagne',2,3,13,13,98)
,('2017-09-16','2020-06-30',3,0,NULL,3,3,18,18,9)
,('2015-09-17','2018-07-03',1,0,NULL,4,2,12,12,18)
,('2016-09-18','2019-06-30',2,0,NULL,1,3,28,28,23)
,('2017-09-19','2018-07-05',1,0,NULL,2,2,22,22,64)
,('2017-09-20','2018-07-06',1,0,NULL,3,4,14,14,70);