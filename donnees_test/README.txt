====================================================================================
	EXECUTION DES SCRIPTS SQL D'INSERT D'ENREGISTREMENTS
====================================================================================
Les tables doivent d�j� exister dans la BD

Sous phpMyAdmin, se positionner sur la DB, s�lectionner l'onglet "Importer",
s�lectionner le script .sql, encodage "utf-8",

/!\ DESACTIVER LA VERIFICATION DES CLES ETRANGERES /!\
	(d�cocher "Activer la v�rification des cl�s �trang�res"),

ex�cuter le script.

nb :
	Il est � noter que "1_INSERT_pays_villes_test_V1.sql" est long
	� l'import en raison de la grande quantit� d'enregistrement
	ins�r�s dans la table.

====================================================================================
	ACTIONS DES SCRIPTS SQL D'INSERT D'ENREGISTREMENTS
====================================================================================
Les scripts de cr�ation effectuent les actions suivante :
	- Effacement des donn�es existantes des tables impact�es par le script
	- R�initialisation de l'auto-increment � 1
	- Insertion des enregistrements

La liste des tables impact�es est donn�e en commentaire en en-t�te des scripts. 

====================================================================================
	ORDRE D'EXECUTION DES SCRIPTS SQL D'INSERT 
	D'ENREGISTREMENTS POUR LA PREMIERE ITERATION
====================================================================================
Ex�cuter les scripts dans l'ordre indiqu� par l'entier en d�but du nom de fichier.

Exemple :
	"2_INSERT_adresse_test_V1.sql"
doit �tre ex�cut� avant :
	"3_INSERT_personne_etudiant_personnelpolytech_contactetablissement_test_V1.sql"

Les scripts ayant le m�me entier en d�but de fichier
peuvent �tre ex�cut�s dans l'ordre souhait�.

Les scripts n n�cessitent l'ex�cution des scripts n-1.

====================================================================================