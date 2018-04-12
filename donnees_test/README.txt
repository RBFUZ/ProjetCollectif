====================================================================================
	EXECUTION DES SCRIPTS SQL D'INSERT D'ENREGISTREMENTS
====================================================================================
Les tables doivent déjà exister dans la BD

Sous phpMyAdmin, se positionner sur la DB, sélectionner l'onglet "Importer",
sélectionner le script .sql, encodage "utf-8",

/!\ DESACTIVER LA VERIFICATION DES CLES ETRANGERES /!\
	(décocher "Activer la vérification des clés étrangères"),

exécuter le script.

nb :
	Il est à noter que "1_INSERT_pays_villes_test_V1.sql" est long
	à l'import en raison de la grande quantité d'enregistrement
	insérés dans la table.

====================================================================================
	ACTIONS DES SCRIPTS SQL D'INSERT D'ENREGISTREMENTS
====================================================================================
Les scripts de création effectuent les actions suivante :
	- Effacement des données existantes des tables impactées par le script
	- Réinitialisation de l'auto-increment à 1
	- Insertion des enregistrements

La liste des tables impactées est donnée en commentaire en en-tête des scripts. 

====================================================================================
	ORDRE D'EXECUTION DES SCRIPTS SQL D'INSERT 
	D'ENREGISTREMENTS POUR LA PREMIERE ITERATION
====================================================================================
Exécuter les scripts dans l'ordre indiqué par l'entier en début du nom de fichier.

Exemple :
	"2_INSERT_adresse_test_V1.sql"
doit être exécuté avant :
	"3_INSERT_personne_etudiant_personnelpolytech_contactetablissement_test_V1.sql"

Les scripts ayant le même entier en début de fichier
peuvent être exécutés dans l'ordre souhaité.

Les scripts n nécessitent l'exécution des scripts n-1.

====================================================================================