-- Script MySQL pour création d'enregistrements tests
-- BD: db_rel_ent_pol_tours   Version: 2.0
-- TABLES: personne, possede_telephone, etudiant, personnel_polytech, contact_etablissement

USE `db_rel_ent_pol_tours`;

-- Resets tables
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE personne;
ALTER TABLE personne AUTO_INCREMENT = 1;
TRUNCATE TABLE possede_telephone;
TRUNCATE TABLE etudiant;
ALTER TABLE etudiant AUTO_INCREMENT = 1;
TRUNCATE TABLE personnel_polytech;
ALTER TABLE personnel_polytech AUTO_INCREMENT = 1;
TRUNCATE TABLE contact_etablissement;
ALTER TABLE contact_etablissement AUTO_INCREMENT = 1;
SET FOREIGN_KEY_CHECKS = 1;


INSERT INTO personne(nom,prenom,adresse_mail_perso,code_sexe,nationalite,id_adresse) VALUES
 ('Bon','Jean','jean.bon@mail.com','M','Française',1)
,('Deloin','Alain','alain.deloin@mail.com','M','Française',2)
,('Honnyme','Anne','anne.honnyme@mail.com','F','Française',3)
,('Fonfek','Sophie','sophie.fonfek@mail.com','F','Française',4)
,('Obskur','Claire','claire.obskur@mail.com','F','Allemande',5)
,('Sérien','Jean','jean.serien@mail.com','M','Française',6)
,('Menvussa','Gérard','gerard.menvussa@mail.com','M','Française',7)
,('Dratey','Daisie','daisie.dratey@mail.com','F','Française',8)
,('Zeblouse','Agathe','agathe.zeblouse@mail.com','F','Française',9)
,('Timaître','Vincent','vincent.timaitre@mail.com','M','Française',10)
,('Fémalle','Aïcha','aicha.femalle@mail.com','F','Française',11)
,('Kuzbidon','Alex','alex.kuzbidon@mail.com','M','Egyptienne',12)
,('Coptair','Elie','elie.coptair@mail.com','M','Française',13)
,('Pairbien D''ormi','Jésus','jesus.pairbien d''ormi@mail.com','M','Française',14)
,('Tomme','Emma','emma.tomme@mail.com','F','Espagnole',15)
,('Huminet','Gilles','gilles.huminet@mail.com','M','Française',16)
,('Naisse','Guy','guy.naisse@mail.com','M','Française',17)
,('Terrieur','Alain','alain.terrieur@mail.com','M','Française',18)
,('Terrieur','Alex','alex.terrieur@mail.com','M','Française',18)
,('Detroua','Hélène','helene.detroua@mail.com','F','Grecque',1)
,('Sept','Jacques','jacques.sept@mail.com','M','Française',19)
,('Scroute','Jessica','jessica.scroute@mail.com','F','Française',4)
,('Clette','Lara','lara.clette@mail.com','F','Française',20)
,('Dallas','Korben','korben.dallas@mail.com','M','Américaine',21)
,('Dallasmultipass','Leeloo','leeloo.dallasmultipass@mail.com','F','Islandaise',21)
,('Explosible','Line','line.explosible@mail.com','F','Chinoise',22)
,('Assain','Marc','marc.assain@mail.com','M','Française',23)
,('Pauzission','Paul','paul.pauzission@mail.com','M','Française',24)
,('Turier','Quentin','quentin.turier@mail.com','M','Française',25)
,('Fasollasido','Rémi','remi.fasollasido@mail.com','M','Française',26)
,('Rgeu','Sacha','sacha.rgeu@mail.com','F','Française',18)
,('Agasse','Sam','sam.agasse@mail.com','M','Néo-Zélandaise',27)
,('Onsseugélolli','Sandra','sandra.onsseugelolli@mail.com','F','Française',28)
,('DeSavoie','Tom','tom.desavoie@mail.com','M','Française',29)
,('Pavu','Xavier','xavier.pavu@mail.com','M','Française',30)
,('Doe','John','john.doe@mail.com','M','Française',31)
,('Bienheu','Emma','emma.bienheu@mail.com','F','Française',32)
,('Dupont','Jean','jean.dupont@mail.com','M','Française',33)
,('Lambda','Alex','alex.lambda@mail.com','F','Française',34)
,('Toapa','Eugène','eugene.toapa@mail.com','M','Française',35)
,('Tation','Félicie','felicie.tation@mail.com','F','Française',36)
,('Lambada','Adrien','adrien.lambada@mail.com','M','Portugaise',37)
,('Bernard','Lucie','lucie.bernard@mail.com','F','Française',38)
,('DuLac','Loïc','loic.dulac@mail.com','M','Française',39)
,('LePetit','Nicolas','nicolas.lepetit@mail.com','M','Française',39)
,('Robert','Salomé','salome.robert@mail.com','F','Française',40)
,('Grand','Albain','albain.grand@mail.com','M','Française',41)
,('Dutronc','Juliette','juliette.dutronc@mail.com','F','Française',42)
,('Mytrille','Julien','julien.mytrille@mail.com','M','Française',43)
,('Feuillu','Clémence','clemence.feuillu@mail.com','F','Française',44)
,('Ali','Ibrahim','ibrahim.ali@mail.com','M','Française',45)
,('LeSure','Emmanuelle','emmanuelle.lesure@mail.com','F','Française',46)
,('Voisclair','Thomas','thomas.voisclair@mail.com','M','Française',47)
,('Dubois','Christine','christine.dubois@mail.com','F','Française',48)
,('Poulou','Christophe','christophe.poulou@mail.com','M','Française',49)
,('Clavier','Flora','flora.clavier@mail.com','F','Française',44)
,('Poignée','Antoine','antoine.poignee@mail.com','M','Française',18)
,('Decamp','Aurélie','aurelie.decamp@mail.com','F','Française',45)
,('Duflow','Maxence','maxence.duflow@mail.com','M','Française',45)
,('Sure','Sarah','sarah.sure@mail.com','F','Française',46)
,('Tomme','Olivier','olivier.tomme@mail.com','M','Française',47)
,('Courage','Emmanuel','emmanuel.courage@mail.com','F','Française',48)
,('Deflux','Laurène','laurene.deflux@mail.com','M','Française',49)
,('Ralou','Gégoire','gegoire.ralou@mail.com','F','Française',50)
,('Alexandrie','Alexandra','alexandra.alexandrie@mail.com','M','Française',50)
,('Jean','Kévin','kevin.jean@mail.com','F','Française',50)
,('Grant','Caroline','caroline.grant@mail.com','M','Française',51)
,('Iman','Alexath','alexath.iman@mail.com','F','Française',52)
,('Pote','Paul','paul.pote@mail.com','M','Française',53)
,('Labatte','Lucile','lucile.labatte@mail.com','F','Française',54)
,('Li','Qi','qi.li@mail.com','M','Française',55)
,('Duro','Ahmed','ahmed.duro@mail.com','F','Française',55)
,('Proust','Madeleine','madeleine.proust@mail.com','M','Française',55)
,('Fraise','Charlotte','charlotte.fraise@mail.com','F','Française',55)
,('Frag','Baptiste','baptiste.frag@mail.com','M','Française',55)
,('Lane','Romane','romane.lane@mail.com','F','Française',55)
,('Reuloup','Romain','romain.reuloup@mail.com','M','Française',55)
,('Rousso','Denise','denise.rousso@mail.com','F','Française',55)
,('Gassur','Samuel','samuel.gassur@mail.com','M','Française',56)
,('LeBlanc','Gandalf','gandalf.leblanc@mail.com','F','Française',57)
,('Nard','Bernard','bernard.nard@mail.com','M','Française',58)
,('Si','Meï','mei.si@mail.com','F','Chinoise',58)
,('Lebo','William','william.lebo@mail.com','M','Française',59)
,('Osscourt','Jeanne','jeanne.osscourt@mail.com','F','Française',60)
,('Bao','Bill','bill.bao@mail.com','M','Française',47)
,('Skaïoualcoeur','Annie','annie.skaioualcoeur@mail.com','F','Française',49)
,('Heure','Christophe','christophe.heure@mail.com','M','Française',60)
,('Petit','Amélie','amelie.petit@mail.com','F','Française',61)
,('DuBeurre','Herbert','herbert.dubeurre@mail.com','M','Française',62)
,('Illusion','Justine','justine.illusion@mail.com','F','Française',63)
,('Tiritiri','Thierry','thierry.tiritiri@mail.com','M','Française',63)
,('Dineaudangé','Ambre','ambre.dineaudange@mail.com','F','Française',64)
,('Ah','Denis','denis.ah@mail.com','M','Française',65)
,('Dit','Mathilde','mathilde.dit@mail.com','F','Française',66)
,('Lent','Alexis','alexis.lent@mail.com','M','Française',67)
,('Scieuse','Judith','judith.scieuse@mail.com','F','Française',66)
,('Kenobi','Obiwan','obiwan.kenobi@mail.com','M','Française',68)
,('Deuuu','Elisabeth','elisabeth.deuuu@mail.com','F','Anglaise',69)
,('Népudimagination','Jean','jean.nepudimagination@mail.com','M','Française',70)
,('Pasfésonboulo','Anna','anna.pasfesonboulo@mail.com','F','Française',70);

INSERT INTO possede_telephone(id_personne,id_telephone) VALUES
 (1,1)
,(2,2)
,(3,3)
,(4,4)
,(5,5)
,(6,6)
,(7,7)
,(8,8)
,(9,9)
,(10,10)
,(11,11)
,(12,12)
,(13,13)
,(14,14)
,(15,15)
,(16,16)
,(17,17)
,(18,18)
,(19,19)
,(20,20)
,(21,21)
,(22,22)
,(23,23)
,(24,24)
,(25,25)
,(26,26)
,(27,27)
,(28,28)
,(29,29)
,(30,30)
,(31,31)
,(32,32)
,(33,33)
,(34,34)
,(35,35)
,(36,36)
,(37,37)
,(38,38)
,(39,39)
,(40,40)
,(41,41)
,(42,42)
,(43,43)
,(44,44)
,(45,45)
,(46,46)
,(47,47)
,(48,48)
,(49,49)
,(50,50)
,(51,51)
,(52,52)
,(53,53)
,(54,54)
,(55,55)
,(56,56)
,(57,57)
,(58,58)
,(59,59)
,(60,60)
,(61,61)
,(62,62)
,(63,63)
,(64,64)
,(65,65)
,(66,66)
,(67,67)
,(68,68)
,(69,69)
,(70,70)
,(71,71)
,(72,72)
,(73,73)
,(74,74)
,(75,75)
,(76,76)
,(77,77)
,(78,78)
,(79,79)
,(80,80)
,(81,81)
,(82,82)
,(83,83)
,(84,84)
,(85,85)
,(86,86)
,(87,87)
,(88,88)
,(89,89)
,(90,90)
,(91,91)
,(92,92)
,(93,93)
,(94,94)
,(95,95)
,(96,96)
,(97,97)
,(98,98)
,(99,99)
,(100,100)
,(1,101)
,(2,102)
,(3,103)
,(4,104)
,(5,105)
,(6,106)
,(7,107)
,(8,108)
,(9,109)
,(10,110)
,(11,111)
,(12,112)
,(13,113)
,(14,114)
,(15,115)
,(16,116)
,(17,117)
,(18,118)
,(19,119)
,(20,120)
,(21,121)
,(22,122)
,(23,123)
,(24,124)
,(25,125)
,(26,126)
,(27,127)
,(28,128)
,(29,129)
,(30,130)
,(31,131)
,(32,132)
,(33,133)
,(34,134)
,(35,135)
,(36,136)
,(37,137)
,(38,138)
,(39,139)
,(40,140)
,(41,141)
,(42,142)
,(43,143)
,(44,144)
,(45,145)
,(46,146)
,(47,147)
,(48,148)
,(49,149)
,(50,150)
,(51,151)
,(52,152)
,(53,153)
,(54,154)
,(55,155)
,(56,156)
,(57,157)
,(58,158)
,(59,159)
,(60,160)
,(61,161)
,(62,162)
,(63,163)
,(64,164)
,(65,165)
,(66,166)
,(67,167)
,(68,168)
,(69,169)
,(70,170)
,(71,171)
,(72,172)
,(73,173)
,(74,174)
,(75,175)
,(76,176)
,(77,177)
,(78,178)
,(79,179)
,(80,180)
,(81,181)
,(82,182)
,(83,183)
,(84,184)
,(85,185)
,(86,186)
,(87,187)
,(88,188)
,(89,189)
,(90,190)
,(91,191)
,(92,192)
,(93,193)
,(94,194)
,(95,195)
,(96,196)
,(97,197)
,(98,198)
,(99,199)
,(100,200);

INSERT INTO etudiant(id_personne,numero_etudiant,mail_etudiant,annee_etude,diplome,date_diplomation,id_specialite, id_startup) VALUES
 (1,1,'jean.bon@etu.univ-mail.com',1,0,NULL,6,NULL)
,(2,2,'alain.deloin@etu.univ-mail.com',1,0,NULL,7,NULL)
,(3,3,'anne.honnyme@etu.univ-mail.com',1,0,NULL,8,NULL)
,(4,4,'sophie.fonfek@etu.univ-mail.com',1,0,NULL,6,NULL)
,(5,5,'claire.obskur@etu.univ-mail.com',1,0,NULL,7,NULL)
,(6,6,'jean.serien@etu.univ-mail.com',2,0,NULL,8,NULL)
,(7,7,'gerard.menvussa@etu.univ-mail.com',2,0,NULL,6,NULL)
,(8,8,'daisie.dratey@etu.univ-mail.com',2,0,NULL,7,NULL)
,(9,9,'agathe.zeblouse@etu.univ-mail.com',2,0,NULL,8,NULL)
,(10,10,'vincent.timaitre@etu.univ-mail.com',2,0,NULL,6,NULL)
,(11,11,'aicha.femalle@etu.univ-mail.com',3,0,NULL,1,NULL)
,(12,12,'alex.kuzbidon@etu.univ-mail.com',3,0,NULL,2,NULL)
,(13,13,'elie.coptair@etu.univ-mail.com',3,0,NULL,3,NULL)
,(14,14,'jesus.pairbien d''ormi@etu.univ-mail.com',3,0,NULL,4,NULL)
,(15,15,'emma.tomme@etu.univ-mail.com',3,0,NULL,5,NULL)
,(16,16,'gilles.huminet@etu.univ-mail.com',4,0,NULL,1,NULL)
,(17,17,'guy.naisse@etu.univ-mail.com',4,0,NULL,2,NULL)
,(18,18,'alain.terrieur@etu.univ-mail.com',4,0,NULL,3,NULL)
,(19,19,'alex.terrieur@etu.univ-mail.com',4,0,NULL,4,NULL)
,(20,20,'helene.detroua@etu.univ-mail.com',4,0,NULL,5,NULL)
,(21,21,'jacques.sept@etu.univ-mail.com',5,0,NULL,1,NULL)
,(22,22,'jessica.scroute@etu.univ-mail.com',5,0,NULL,2,NULL)
,(23,23,'lara.clette@etu.univ-mail.com',5,0,NULL,3,NULL)
,(24,24,'korben.dallas@etu.univ-mail.com',5,0,NULL,4,NULL)
,(25,25,'leeloo.dallasmultipass@etu.univ-mail.com',5,0,NULL,5,NULL)
,(26,26,'line.explosible@etu.univ-mail.com',6,1,'2017-09-30',1,NULL)
,(27,27,'marc.assain@etu.univ-mail.com',6,1,'2017-09-30',2,NULL)
,(28,28,'paul.pauzission@etu.univ-mail.com',6,1,'2016-09-30',3,NULL)
,(29,29,'quentin.turier@etu.univ-mail.com',6,1,'2016-09-30',4,4)
,(30,30,'remi.fasollasido@etu.univ-mail.com',6,1,'2015-09-30',5,5);

INSERT INTO personnel_polytech(id_personne,mail_universitaire,fonction,id_departement) VALUES
 (31,'sacha.rgeu@univ-mail.com','Enseignant chercheur',1)
,(32,'sam.agasse@univ-mail.com','Secrétaire',1)
,(33,'sandra.onsseugelolli@univ-mail.com','Responsable département',2)
,(34,'tom.desavoie@univ-mail.com','Enseignant chercheur',2)
,(35,'xavier.pavu@univ-mail.com','Secrétaire',2)
,(36,'john.doe@univ-mail.com','Responsable département',3)
,(37,'emma.bienheu@univ-mail.com','Enseignant chercheur',3)
,(38,'jean.dupont@univ-mail.com','Secrétaire',3)
,(39,'alex.lambda@univ-mail.com','Responsable département',4)
,(40,'eugene.toapa@univ-mail.com','Enseignant chercheur',4)
,(41,'felicie.tation@univ-mail.com','Secrétaire',4)
,(42,'adrien.lambada@univ-mail.com','Responsable département',5)
,(43,'lucie.bernard@univ-mail.com','Enseignant chercheur',5)
,(44,'loic.dulac@univ-mail.com','Secrétaire',5)
,(45,'nicolas.lepetit@univ-mail.com','Responsable département',6)
,(46,'salome.robert@univ-mail.com','Enseignant chercheur',6)
,(47,'albain.grand@univ-mail.com','Secrétaire',6)
,(48,'juliette.dutronc@univ-mail.com','Responsable département',7)
,(49,'julien.mytrille@univ-mail.com','Enseignant chercheur',7)
,(50,'clemence.feuillu@univ-mail.com','Secrétaire',7);

INSERT INTO contact_etablissement(id_personne,mail_professionnel,fax) VALUES
 (51,'ibrahim.ali@pro-mail.com',NULL)
,(52,'emmanuelle.lesure@pro-mail.com',NULL)
,(53,'thomas.voisclair@pro-mail.com','0234567891')
,(54,'christine.dubois@pro-mail.com',NULL)
,(55,'christophe.poulou@pro-mail.com',NULL)
,(56,'flora.clavier@pro-mail.com',NULL)
,(57,'antoine.poignee@pro-mail.com',NULL)
,(58,'aurelie.decamp@pro-mail.com',NULL)
,(59,'maxence.duflow@pro-mail.com',NULL)
,(60,'sarah.sure@pro-mail.com',NULL)
,(61,'olivier.tomme@pro-mail.com',NULL)
,(62,'emmanuel.courage@pro-mail.com',NULL)
,(63,'laurene.deflux@pro-mail.com',NULL)
,(64,'gegoire.ralou@pro-mail.com',NULL)
,(65,'alexandra.alexandrie@pro-mail.com',NULL)
,(66,'kevin.jean@pro-mail.com',NULL)
,(67,'caroline.grant@pro-mail.com',NULL)
,(68,'alexath.iman@pro-mail.com',NULL)
,(69,'paul.pote@pro-mail.com',NULL)
,(70,'lucile.labatte@pro-mail.com',NULL)
,(71,'qi.li@pro-mail.com',NULL)
,(72,'ahmed.duro@pro-mail.com',NULL)
,(73,'madeleine.proust@pro-mail.com',NULL)
,(74,'charlotte.fraise@pro-mail.com',NULL)
,(75,'baptiste.frag@pro-mail.com',NULL)
,(76,'romane.lane@pro-mail.com',NULL)
,(77,'romain.reuloup@pro-mail.com','0219876543')
,(78,'denise.rousso@pro-mail.com',NULL)
,(79,'samuel.gassur@pro-mail.com',NULL)
,(80,'gandalf.leblanc@pro-mail.com',NULL)
,(81,'bernard.nard@pro-mail.com',NULL)
,(82,'mei.si@pro-mail.com',NULL)
,(83,'william.lebo@pro-mail.com',NULL)
,(84,'jeanne.osscourt@pro-mail.com',NULL)
,(85,'bill.bao@pro-mail.com',NULL)
,(86,'annie.skaioualcoeur@pro-mail.com',NULL)
,(87,'christophe.heure@pro-mail.com',NULL)
,(88,'amelie.petit@pro-mail.com',NULL)
,(89,'herbert.dubeurre@pro-mail.com',NULL)
,(90,'justine.illusion@pro-mail.com',NULL)
,(91,'thierry.tiritiri@pro-mail.com',NULL)
,(92,'ambre.dineaudange@pro-mail.com',NULL)
,(93,'denis.ah@pro-mail.com',NULL)
,(94,'mathilde.dit@pro-mail.com',NULL)
,(95,'alexis.lent@pro-mail.com',NULL)
,(96,'judith.scieuse@pro-mail.com',NULL)
,(97,'obiwan.kenobi@pro-mail.com',NULL)
,(98,'elisabeth.deuuu@pro-mail.com',NULL)
,(99,'jean.nepudimagination@pro-mail.com',NULL)
,(100,'anna.pasfesonboulo@pro-mail.com',NULL);