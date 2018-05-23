<?php

namespace App\Controller;

use App\Entity\Apprentissage;
use App\Entity\Specialite;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Personne;
use App\Entity\Etudiant;
use App\Entity\Pays;
use App\Entity\Ville;
use App\Entity\Adresse;
use App\Entity\Etablissement;
use App\Entity\Departement;
use App\Entity\Entreprise;
use Symfony\Component\HttpFoundation\Response;

class ImportAlternanceController extends Controller
{
    /**
     * @Route("/import/alternance", name="import_alternance")
     */
    public function index(Request $request)
    {


        // on récupère les données
        $data = $request->request->get("data");
        // get type
        //$type = $request->request->get("type");
        $json_data = json_decode($data,true);

        $this->addAll($data);
        return $this->json(array('status' => 200 ));
    }


    /**
     * Ajoute toutes les données à la base de données
     * @param $data
     */
    private function addAll($data){
        $json_data = json_decode($data,true);

        $entityManager = $this->getDoctrine()->getManager();

        //return new Response($json_data);
        //parcourir les données
        foreach($json_data as $contrat){
            $nom = $contrat['NOM'];
            $prenom = $contrat['PRENOM'];
            $libelle_specialite = $contrat['spe'];
            $nom_entreprise = $contrat['entreprise'];
            $ville = " ";
            if (isset( $contrat['où'] )){
                $ville = $contrat['où'];
            }

            $specialite = $this->addSpecialite($libelle_specialite, $entityManager);
            $personne = $this->addPerson($nom, $prenom, $entityManager);
            $etudiant = $this->addEtudiant($personne, $specialite, $entityManager);
            $adresse = $this->addAdresse($ville, $entityManager);
            $entreprise = $this->addEntreprise($nom_entreprise, $entityManager);
            $etablissement = $this->addEtablissement($entreprise, $adresse, $entityManager);
            $this->addApprentissage($personne, $etudiant, $specialite, $etablissement, $entityManager);

        }


    }


    private function addApprentissage($personne, $etudiant, $specialite, $etablissement, $entityManager){
        $apprentissage_repository = $this->getDoctrine()->getRepository(Apprentissage::class);
        $apprentissage = $apprentissage_repository->findByStudent($personne->getId());
        //$apprentissage = false;
        if (!$apprentissage) {
            $apprentissage = new Apprentissage();

            $apprentissage->setEtranger(false);
            $apprentissage->setDureeApprentissageAnnees(1);
            $date = new \DateTime();
            $apprentissage->setDateDebutApprentissage($date);
            $apprentissage->setDateFinApprentissage($date);
            $apprentissage->setIdPersonneEtudiant($etudiant);
            $apprentissage->setIdEtablissement($etablissement);
            $apprentissage->setIdSpecialite($specialite);
            $entityManager->persist($apprentissage);
            $entityManager->flush();
        }

        return $apprentissage;
    }

    private function addAdresse($nomVille, $entityManager){
        $adresse_repository = $this->getDoctrine()->getRepository(Adresse::class);

        $ville_repository = $this->getDoctrine()->getRepository(Ville::class);
        $ville = $ville_repository->findOneBy(['nomVille' => $nomVille]);
        if (!$ville) {
            $pays_repository = $this->getDoctrine()->getRepository(Pays::class);
            $pays = $pays_repository->findCountryByName("france");
            if(!$pays){
                $id = $pays_repository->findMaxId();
                $pays = new Pays();
                $pays->setNomFrFr("France");
                $pays->setCode(((int)$id[1])+1);
                $pays->setAlpha2('');
                $pays->setAlpha3('');
                $pays->setNomEnGb('');
                $entityManager->persist($pays);
                $entityManager->flush();
            }
            $ville = new Ville();
            $ville->setNomVille($nomVille);
            $ville->setIdPays($pays);
            $entityManager->persist($ville);
            $entityManager->flush();
        }
        $adresse = $adresse_repository->findOneBy(['adresse' => "", 'idVille' => $ville->getId(), 'codePostal' => ""]);
        if(!$adresse){
            $adresse = new Adresse();
            $adresse->setAdresse('');
            $adresse->setCodePostal('');
            $adresse->setIdVille($ville);
            $entityManager->persist($adresse);
            $entityManager->flush();
        }
        return $adresse;
    }


    private function addPerson($nom, $prenom, $entityManager){
        //$etudiant_repository = $this->getDoctrine()->getRepository(Etudiant::class);
        $person_repository = $this->getDoctrine()->getRepository(Personne::class);

        $personne = $person_repository->findOneBy(['nom' => $nom, 'prenom' => $prenom]);

        if (!$personne) {
            $personne = new Personne();
            $personne->setNom($nom);
            $personne->setPrenom($prenom);
            $entityManager->persist($personne);
            $entityManager->flush();
        }
        return $personne;
    }

    private function addEtudiant($personne,$specialite, $entityManager){
        $etudiant_repository = $this->getDoctrine()->getRepository(Etudiant::class);

        $etudiant = $etudiant_repository->findOneBy(['numeroEtudiant' => $personne->getId(), 'idPersonne' => $personne->getId()]);
        if(!$etudiant){
            $id = $etudiant_repository->findMaxId();
            $etudiant = new Etudiant();
            $etudiant->setId(((int)$id[1])+1);
            $etudiant->setIdPersonne($personne);
            $etudiant->setNumeroEtudiant($personne->getId());
            $etudiant->setMailEtudiant("");
            $etudiant->setIdSpecialite($specialite);
            $etudiant->setAnneeEtude(2019);
            $entityManager->persist($etudiant);
            $entityManager->flush();
        }
        return $etudiant;
    }


    private function addEntreprise($nom_entreprise, $entityManager){

        $entreprise_repository = $this->getDoctrine()->getRepository(Entreprise::class);
        $entreprise = $entreprise_repository->findOneBy(['nomEntreprise' => $nom_entreprise]);
        if (!$entreprise) {
            //$etablissement = $this->addEtablissement($nom_entreprise, $ville, $entityManager);
            $entreprise = new Entreprise();
            $entreprise->setNomEntreprise($nom_entreprise);
            $entityManager->persist($entreprise);
            $entityManager->flush();
        }
        return $entreprise;
    }

    public function addEtablissement($entreprise, $addresse_etablissement, $entityManager){
        $etablissement_repository = $this->getDoctrine()->getRepository(Etablissement::class);
        $etablissement = $etablissement_repository->findOneBy(['nomEtablissement' => $entreprise->getNomEntreprise()]);
        if (!$etablissement) {
            $etablissement = new Etablissement();
            $etablissement->setNomEtablissement($entreprise->getNomEntreprise());
            $etablissement->setIdAdresse($addresse_etablissement);
            $etablissement->setIdEntreprise($entreprise);
            $entityManager->persist($etablissement);
            $entityManager->flush();
        }
        return $etablissement;
    }



    private function addSpecialite($libelle_specialite, $entityManager){
        $specialite_repository =  $this->getDoctrine()->getRepository(Specialite::class);
        $departement_repository =  $this->getDoctrine()->getRepository(Departement::class);


        $specialite = $specialite_repository->findOneBy(['libelleSpecialite' => $libelle_specialite]);
        if (!$specialite) {
            $departement = $departement_repository->findOneBy(['libelleDepartement' => $libelle_specialite]);
            if (!$departement) {
                $departement = new Departement();
                $departement->setLibelleDepartement($libelle_specialite);
                $entityManager->persist($departement);
                $entityManager->flush();
            }
            $specialite = new Specialite();
            $specialite->setLibelleSpecialite($libelle_specialite);
            $specialite->setIdDepartement($departement);
            $entityManager->persist($specialite);
            $entityManager->flush();
        }
        return $specialite;
    }



}
