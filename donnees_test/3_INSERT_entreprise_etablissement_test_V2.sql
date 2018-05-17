-- Script MySQL pour création d'enregistrements tests
-- BD: db_rel_ent_pol_tours   Version: 2.0
-- TABLES: entreprise, etablissement

USE `db_rel_ent_pol_tours`;

-- Resets tables
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE entreprise;
ALTER TABLE entreprise AUTO_INCREMENT = 1;
TRUNCATE TABLE etablissement;
ALTER TABLE etablissement AUTO_INCREMENT = 1;
SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO entreprise(nom_entreprise,num_siren,statut_juridique) VALUES
 ('COMMISSARIAT A L ENERGIE ATOMIQUE C','775685019','INCONNU')
,('EDF','552081317','INCONNU')
,('AREVA NP','428764500','SAS')
,('FNAIR','483121653','INCONNU')
,('CNRS','180089013','INCONNU')
,('BIOSPRINGER','542091996','SA')
,('AXIS CONSEILS','331747485','SARL')
,('CAL','783345564','INCONNU')
,('BIOTOPE','390613610','INCONNU')
,('CAINET MONTMASSON INGENIEURS CONSEILS','391142403','SARL')
,('BERGER WAGON I WAGON GHECO','318585650','INCONNU')
,('CONSEILS ET REALISATIONS INFORMATIQUE','350848982','SAS')
,('ENTECH SMART ENERGIES','818246316','SAS')
,('AUDC','301792842','INCONNU')
,('BAYER SAS','562038893','SAS')
,('ATELIER D''URBANISME PERSPECTIVE','804230936','SAS')
,('ATOS INTEGRATION','408024719','SAS')
,('DUBOST ENVIRONNEMENT','410621882','INCONNU')
,('FONCTION SUPPORT','530841188','SAS')
,('BNP PARIBAS','662042449','INCONNU')
,('EGIS VILLES & TRANSPORTS','493334429','SAS')
,('BIOMASSE NORMANDIE','383743317','INCONNU')
,('EQUENSWORLDLINE','819173782','INCONNU')
,('CHRU BRETONNEAU','263700189','INCONNU')
,('EMI - SEPAME ELECTRONIQUE','349335380','SAS')
,('CEREMA TERRITOIRS ET VILLE','130018310','INCONNU')
,('EURO ENGINEERING','330421462','SA')
,('FRANCE REDUCTEURS SAS','401297692','SAS')
,('ECOTONE RECHERCHE ET ENVIRONNEMENT','415094200','SARL')
,('CAISSE REG DU CREDIT AGRICOLE MUTUEL TOURAINE POITOU','399780097','SCP')
,('COMPAGNIE DES AUTOCARS DE TOURAINE','315350165','INCONNU')
,('ERIL','329166060','SARL')
,('CABINET ECTAR ETUDE CONSEIL TRANS AERI','443700398','SAS')
,('BURGEAP','682008222','SA')
,('GE MEDICAL SYSTEMS','315013359','SCS')
,('BOUYGUES IMMOBILIER','562091546','SAS')
,('CAT-AMANIA','519685085','INCONNU')
,('AVIDSEN SAS','420462533','SAS')
,('DARTY GRAND OUEST','339403933','SNC')
,('CAPGEMINI TECHNOLOGY SERVICES','479766842','SA')
,('EAS MONECONCEPT','393426143','SARL')
,('CGI FRANCE','702042755','SAS')
,('FEDERATION DEPARTEMENTALE DE PECHE DE LA VIENNE','781565924','INCONNU')
,('AUSY','352905707','SAS')
,('CMF GROUPE','390871622','SAS')
,('DECATHLON FRANCE','500569405','SAS')
,('COLAS NORD-EST','329198337','SA')
,('COLAS RAIL','632049128','SA')
,('CITADIA CONSEIL','412124703','SARL')
,('ENIA ARCHITECTES','328862214','SAS')
,('BEIJING INSTITUTE OF TECHNONOGY',NULL,'INCONNU')
,('CMN','562110965','SA')
,('CETIM','775629074','Autres')
,('APSIDE','309065084','SA')
,('EXAEGIS','538700980','SAS')
,('BICEPHALE SAS','818211252','SAS')
,('CITADIS','602620304','INCONNU')
,('ETS TERRAL','399979806','SAS')
,('DIRECTION DEPARTEMENTALE DES TERRITOIRES D''INDRE-ET-LOIRE','130010275','INCONNU')
,('CARBET DES SCIENCES','394418875','INCONNU')
,('FIVES MAINTENANCE','380065672','SAS')
,('COLAS','823299623','SAS')
,('CILAS','669802167','SA')
,('ENERGIES DEMAIN','480478502','SAS')
,('EUROVIA LANGUEDOC-ROUSSILLON','428613525','SAS')
,('AGENCE DE L''EAU LOIRE BRETAGNE','184503019','INCONNU')
,('BABOLAT VS','552131401','SA')
,('CALYOS SA',NULL,'INCONNU')
,('ASTRONICS - PGA AVIONICS','350534939','SARL')
,('ELECTRI CYCLE','504341009','SAS')
,('FAURECIA SYSTEME D''ECHAPPEMENT','420797433','SA')
,('BRUUN & MOLLERS LANDSCHAFTSARCHITEKTEN',NULL,'INCONNU')
,('FAIVELEY TRANSPORT TOURS','489243881','SAS')
,('ENTREPRISE CITEOS','440313765','SAS')
,('FOUNDATION BRAKES FRANCE','529268393','SAS')
,('FORUM DES MARAIS AQUATIQUES','251710398','INCONNU')
,('ARCELORMITTAL - SITE DE BASSE INDRE','444718563','SAS')
,('BASE AERIENNE 705 DE TOURS','130017213','INCONNU')
,('ESVRES MATRICAGE','430032532','SAS')
,('ETS JC BOUY SAS','310188834','SAS')
,('CAZAUX ROTORFLEX SARL','504931254','SARL')
,('CEMOI CHOCOLATIERS','564202166','SA')
,('DEPARTEMENT DE SEINE ET MARNE','227700010','INCONNU')
,('AVON POLYMERES FRANCE SAS','312786338','SAS')
,('ECOFIT','308172147','SA')
,('CHANTIER NAVAL GLEHEN','376980140','SAS')
,('CEP INDUSTRIE','392031787','SAS')
,('DEDIENNE MULTIPLASTURGY','775723083','SAS');

INSERT INTO etablissement(nom_etablissement,num_siret,id_entreprise,type_structure,effectifs,code_naf,site_web_etablissement,id_adresse) VALUES
 ('DIRECTION DEPARTEMENTALE DES TERRITOIRES D''INDRE-ET-LOIRE','13001027500019',59,'Administration','Non renseigné','84.13Z',NULL,133)
,('BASE AERIENNE 705 DE TOURS','13001721300013',78,'Administration','1000 et +','84.22Z',NULL,158)
,('CEREMA TERRITOIRS ET VILLE','13001831000081',26,'Administration','50 à 199','84.13Z',NULL,98)
,('CNRS MIDI-PYRENEE','18008901300676',5,'Non renseigné','Non renseigné','72.19Z',NULL,91)
,('CNRS UPR3266 GANIL','18008901303498',5,'Entreprise publique / SEM','200 à 999','72.19Z',NULL,148)
,('CNRS','18008901303720',5,'Entreprise publique / SEM','Non renseigné',NULL,NULL,109)
,('CNRS - GICC - UMR 7292','18008901307481',5,'Entreprise publique / SEM','50 à 199','72.11Z',NULL,76)
,('AGENCE DE L''EAU LOIRE BRETAGNE','18450301900087',66,'Etablissement public non industriel et commercial','Non renseigné',NULL,NULL,141)
,('DEPARTEMENT DE SEINE ET MARNE','22770001000019',83,'Collectivité territoriale','1000 et +',NULL,NULL,163)
,('FORUM DES MARAIS AQUATIQUES','25171039800016',76,'Collectivité territoriale','10 à 49','84.12Z',NULL,156)
,('CHRU BRETONNEAU','26370018900016',24,'Etablissement public hospitalier','1000 et +','86.10Z',NULL,96)
,('AUDC','30179284200025',14,'Association','10 à 49','71.11Z',NULL,85)
,('ECOFIT','30817214700032',85,'Entreprise privée','50 à 199','27.11z',NULL,165)
,('APSIDE','30906508400068',54,'Entreprise privée','1000 et +','71.12B',NULL,128)
,('ETS JC BOUY SAS','31018883400025',80,'Entreprise privée','200 à 999','25.62b',NULL,160)
,('AVON POLYMERES FRANCE SAS','31278633800029',84,'Entreprise privée','50 à 199','22.19Z',NULL,164)
,('GE MEDICAL SYSTEMS','31501335900155',35,'Entreprise privée','1000 et +','26.60z',NULL,107)
,('COMPAGNIE DES AUTOCARS DE TOURAINE','31535016500041',31,'Non renseigné','Non renseigné','49.39A',NULL,103)
,('BERGER WAGON I WAGON GHECO','31858565000035',11,'Non renseigné','Non renseigné','71.11Z',NULL,82)
,('ENIA ARCHITECTES','32886221400041',50,'Entreprise privée','10 à 49','71.11Z',NULL,123)
,('ERIL','32916606000023',32,'Entreprise privée','10 à 49','71.12b',NULL,104)
,('COLAS NORD-EST','32919833700530',47,'Entreprise privée','Non renseigné','42.11Z',NULL,120)
,('EURO ENGINEERING','33042146200269',27,'Entreprise privée','50 à 199','71.12b',NULL,99)
,('AXIS CONSEILS','33174748500067',7,'Entreprise privée','50 à 199','71.12B',NULL,78)
,('DARTY GRAND OUEST','33940393300049',39,'Entreprise privée','1000 et +','70.10Z',NULL,112)
,('EMI - SEPAME ELECTRONIQUE','34933538000045',25,'Entreprise privée','10 à 49','26.51B',NULL,97)
,('ASTRONICS - PGA AVIONICS','35053493900045',69,'Entreprise privée','200 à 999','33.20C',NULL,146)
,('CONSEILS ET REALISATIONS INFORMATIQUE','35084898200012',12,'Entreprise privée','1 à 9','62.02A',NULL,83)
,('AUSY','35290570700183',44,'Entreprise privée','200 à 999','62.02A',NULL,117)
,('CHANTIER NAVAL GLEHEN','37698014000044',86,'Entreprise privée','10 à 49','30.11Z',NULL,166)
,('FIVES MAINTENANCE','38006567200061',61,'Entreprise privée','200 à 999','33.12z',NULL,135)
,('BIOMASSE NORMANDIE','38374331700034',22,'Association','10 à 49','72.19Z',NULL,94)
,('BIOTOPE','39061361000117',9,'Non renseigné','Non renseigné',NULL,NULL,80)
,('CMF GROUPE','39087162200036',45,'Entreprise privée','10 à 49','28.41z',NULL,118)
,('CAINET MONTMASSON INGENIEURS CONSEILS','39114240300024',10,'Entreprise privée','10 à 49','71.12B',NULL,81)
,('CEP INDUSTRIE','39203178700089',87,'Entreprise privée','10 à 49','71.20B',NULL,167)
,('EAS MONECONCEPT','39342614300045',41,'Entreprise privée','Non renseigné','71.12B',NULL,114)
,('CARBET DES SCIENCES','39441887500032',60,'Association','10 à 49','94.99Z',NULL,134)
,('CAISSE REG DU CREDIT AGRICOLE MUTUEL TOURAINE POITOU','39978009700701',30,'Entreprise privée','10 à 49','64.19Z',NULL,102)
,('ETS TERRAL','39997980600029',58,'Entreprise privée','1 à 9','28.30z',NULL,132)
,('FRANCE REDUCTEURS SAS','40129769200022',28,'Entreprise privée','50 à 199','22.29A',NULL,100)
,('ATOS INTEGRATION','40802471900507',17,'Entreprise privée','200 à 999','62.02A',NULL,88)
,('DUBOST ENVIRONNEMENT','41062188200035',18,'Non renseigné','Non renseigné',NULL,NULL,89)
,('CITADIA CONSEIL','41212470300171',49,'Entreprise privée','50 à 199','70.22Z',NULL,122)
,('ECOTONE RECHERCHE ET ENVIRONNEMENT','41509420000045',29,'Entreprise privée','10 à 49','71.12B',NULL,101)
,('AVIDSEN SAS','42046253300043',38,'Entreprise privée','10 à 49','46.43z',NULL,111)
,('FAURECIA SYSTEME D''ECHAPPEMENT','42079743300042',71,'Entreprise privée','200 à 999','29.32Z',NULL,149)
,('EUROVIA LANGUEDOC-ROUSSILLON','42861352500024',65,'Entreprise privée','50 à 199','42.11Z',NULL,140)
,('AREVA NP','42876450000016',3,'Entreprise privée','Non renseigné','24.46Z',NULL,73)
,('AREVA PROJETS','42876450000198',3,'Entreprise privée','200 à 999','71.12B',NULL,75)
,('ESVRES MATRICAGE','43003253200029',79,'Entreprise privée','50 à 199','25.50A',NULL,159)
,('ENTREPRISE CITEOS','44031376500065',74,'Entreprise privée','10 à 49','43.21A',NULL,153)
,('CABINET ECTAR ETUDE CONSEIL TRANS AERI','44370039800037',33,'Entreprise privée','10 à 49','70.22Z',NULL,105)
,('ARCELORMITTAL - SITE DE BASSE INDRE','44471856300091',77,'Entreprise privée','200 à 999','24.10z',NULL,157)
,('CAPGEMINI TECHNOLOGY SERVICES','47976684200211',40,'Entreprise privée','10 à 49','62.02A',NULL,113)
,('CAPGEMINI TECHNOLOGY SERVICES','47976684200286',40,'Entreprise privée','1000 et +','62.02A',NULL,124)
,('ENERGIES DEMAIN','48047850200077',64,'Entreprise privée','10 à 49','71.12B',NULL,139)
,('FNAIR CENTRE VAL DE LOIRE','48312165300024',4,'Association','1 à 9','88.99B',NULL,74)
,('FAIVELEY TRANSPORT TOURS','48924388100047',73,'Entreprise privée','200 à 999','30.20Z',NULL,152)
,('EGIS VILLES & TRANSPORTS','49333442900591',21,'Entreprise privée','200 à 999','71.12B',NULL,93)
,('DECATHLON FRANCE','50056940502009',46,'Entreprise privée','50 à 199','47.64z',NULL,119)
,('ELECTRI CYCLE','50434100900026',70,'Entreprise privée','10 à 49','45.40Z',NULL,147)
,('CAZAUX ROTORFLEX SARL','50493125400024',81,'Entreprise privée','10 à 49','28.93Z',NULL,161)
,('CAT-AMANIA','51968508500010',37,'Non renseigné','200 à 999','62.02a',NULL,110)
,('FOUNDATION BRAKES FRANCE','52926839300020',75,'Entreprise privée','200 à 999','29.32Z',NULL,155)
,('FONCTION SUPPORT','53084118800069',19,'Entreprise privée','10 à 49','70.22Z',NULL,90)
,('EXAEGIS','53870098000013',55,'Entreprise privée','Non renseigné','82.99z',NULL,129)
,('BIOSPRINGER','54209199600026',6,'Entreprise privée','200 à 999','10.89Z',NULL,77)
,('EDF CNEPE','55208131712419',2,'Etablissement public non industriel et commercial','1000 et +','35.11Z',NULL,138)
,('EDF CNPE CHINON','55208131715453',2,'Entreprise privée','1000 et +','35.11Z','http://prestataires-nucleaire.edf.com/edf-fr-accueil/prestataires-du-nucleaire-edf/centrales-nucleaires/chinon-54059.html',151)
,('EDF CNEN','55208131750062',2,'Entreprise publique / SEM','1000 et +','35.11Z',NULL,144)
,('EDF - UNITE TECHNIQUE OPERATIONNELLE','55208131790175',2,'Entreprise publique / SEM','200 à 999','35.11z',NULL,72)
,('BABOLAT VS','55213140100044',67,'Entreprise privée','50 à 199','32.30Z',NULL,143)
,('BAYER SAS','56203889300680',15,'Entreprise privée','10 à 49','20.20Z',NULL,86)
,('BOUYGUES IMMOBILIER','56209154601009',36,'Entreprise privée','1000 et +','41.10a',NULL,108)
,('CMN','56211096500034',52,'Entreprise privée','200 à 999','30.11z',NULL,126)
,('CEMOI CHOCOLATIERS','56420216600083',82,'Entreprise privée','200 à 999','10.82z',NULL,162)
,('CITADIS','60262030400041',57,'Entreprise publique / SEM','10 à 49','42.99Z',NULL,131)
,('COLAS RAIL','63204912800523',48,'Entreprise privée','Non renseigné','42.12Z',NULL,121)
,('BNP PARIBAS','66204244900014',20,'Etablissement public à caractère industriel et commercial','1000 et +','64.19Z',NULL,92)
,('CILAS','66980216700082',63,'Entreprise privée','200 à 999','26.70Z',NULL,137)
,('BURGEAP','68200822200056',34,'Entreprise privée','200 à 999','71.12B',NULL,106)
,('CGI NANTES','70204275500182',42,'Entreprise privée','200 à 999','62.02A',NULL,142)
,('CGI FRANCE','70204275500349',42,'Entreprise privée','50 à 199','62.02A',NULL,115)
,('CETIM','77562907400011',53,'Entreprise privée','200 à 999','72.19Z',NULL,127)
,('COMMISSARIAT A L ENERGIE ATOMIQUE C','77568501900314',1,'Etablissement public à caractère industriel et commercial','Non renseigné','72.19Z','http://www.cea.fr/le-cea/les-centres-cea/le-ripault',71)
,('CEA - SACLAY','77568501900488',1,'Non renseigné','Non renseigné','72.19Z',NULL,154)
,('DEDIENNE MULTIPLASTURGY','77572308300058',88,'Entreprise privée','50 à 199','22.29a',NULL,168)
,('FEDERATION DEPARTEMENTALE DE PECHE DE LA VIENNE','78156592400045',43,'Association','Non renseigné',NULL,NULL,116)
,('CAL DE MEURTHE-ET-MOSELLE','78334556400042',8,'Association','10 à 49','88.99b',NULL,79)
,('ATELIER D''URBANISME PERSPECTIVE','80423093600010',16,'Entreprise privée','1 à 9','71.11Z',NULL,87)
,('BICEPHALE SAS','81821125200015',56,'Entreprise privée','1 à 9','46.51z',NULL,130)
,('ENTECH SMART ENERGIES','81824631600025',13,'Entreprise privée','10 à 49','71.12b',NULL,84)
,('EQUENSWORLDLINE','81917378200064',23,'Etablissement étranger','0','64.99Z',NULL,95)
,('COLAS','82329962300012',62,'Entreprise privée','200 à 999','42.11Z',NULL,136)
,('BEIJING INSTITUTE OF TECHNONOGY',NULL,51,'Etablissement étranger','Non renseigné',NULL,NULL,125)
,('CALYOS SA',NULL,68,'Etablissement étranger','Non renseigné',NULL,NULL,145)
,('BRUUN & MOLLERS LANDSCHAFTSARCHITEKTEN',NULL,72,'Etablissement étranger','10 à 49',NULL,NULL,150);

