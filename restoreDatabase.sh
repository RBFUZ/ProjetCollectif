if [ $# -eq 2 ]
  then
    # Suppresion de la base de données actuelle
    mysql -u root -p$1 -f -D db_rel_ent_pol_tours -e "DROP DATABASE db_rel_ent_pol_tours"

    # Création de la nouvelle base
    bin/console doctrine:database:create

    # Importation des tables et des données
    bin/console doctrine:database:import $2

    # Importation des procédures stockées
    mysql -u root -p$1 db_rel_ent_pol_tours < Backup/0bis_CREATE_Procedures_stockees.sql

    echo "Terminé !"
   else
      echo "Argument 1 : Mot de passe de la base de données de l'utilisateur root"
      echo "Arguement 2 : Chemin du fichier sql à restaurer (chemin depuis ce script). Pas de chemin depuis la racine /"
fi
