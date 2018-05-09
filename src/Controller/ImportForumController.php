<?php

namespace App\Controller;

use App\Entity\Adresse;
use App\Entity\ContactEtablissement;
use App\Entity\Entreprise;
use App\Entity\Etablissement;
use App\Entity\Forum;
use App\Entity\ParticipationForum;
use App\Entity\Pays;
use App\Entity\Telephone;
use App\Entity\TypeForum;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Personne;
use App\Entity\Ville;

class ImportForumController extends Controller
{
    /**
     * @Route("/import/forum", name="import_forum")
     */
    public function importForum(Request $request)
    {
        //get data
        $data = $request->request->get("data");
        // get type
        $type = $request->request->get("type");

        $date_forum = $request->request->get("date_forum");

        if($date_forum == "")
        {
            $date_forum = date("d-m-Y");
        }

        // convert to json
        $json_data = json_decode($data,true);

        if($type=="Forum")
        {
            $this->parserForumData($json_data,$date_forum);
        }

        // use like this
        //$json_data[0]; //get the first object
        //var_dump($json_data[9]["Fonction \"carte de visite\""]);//get the name of the first object
        /**
         * structure of data
         * [
        {
        ["NOM"]=> "ALIX"
        ["PRENOM"]=> "Claire"
        ["spe"]=> "DAE"
        ["entreprise"]=> "BATIGERE NORD-EST"
        ["où"]=> "Metz"
        },
        ["NOM"]=> "BLIX"
        ["PRENOM"]=> "TOTO"
        ["spe"]=> "DI"
        ["entreprise"]=> "BALAALA"
        ["où"]=> "TOURS"
        },
        ...
        ]
         */
        // return excute status, if succeed, return 200, else return 500
        return $this->json(array('status' => 200));
    }

    private function parserForumData($forums,$date_forum)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $name_temp = "";
        $address_temp = "";
        $cp_temp = "";
        $city_temp ="";
        $nom = "";
        $nom_temp = "";
        $prenom = "";
        $prenom_temp = "";
        $tel = "";
        $tel_temp = "";
        $mail_pro = "";
        $mail_pro_temp = "";
        $sector = "";

        // create forum
        $year = date_create_from_format("d-m-Y",$date_forum);
        $name_forum = "Forum des entreprises ".$year->format('Y');

        $rep_forum = $this->getDoctrine()->getRepository(Forum::class);
        $forum = $rep_forum->findForumByName($name_forum);
        if($forum==NULL) {
            // create forum
            $forum = new Forum();
            $rep_address = $this->getDoctrine()->getRepository(Adresse::class);
            $rep_type_forum = $this->getDoctrine()->getRepository(TypeForum::class);
            $forum->setIdAdresse($rep_address->find(169));

            $forum->setDateDebutForum($year);
            $forum->setDateFinForum($year);
            $forum->setIdTypeForum($rep_type_forum->find(1));
            $forum->setNomForum($name_forum);

            $entityManager->persist($forum);
            $entityManager->flush();
        }
        ///

        foreach($forums as $data)
        {
            try
            {
                $nom_etablissement = $data["Dénomination"];
                $name_temp = $data["Dénomination"];
                $sector = $data["Secteur d'activité"];
            }
            catch (\Exception $exc)
            {
                $nom_etablissement = $name_temp;
            }
            $nom_etablissement = trim($nom_etablissement);
            // search for enterprise
            $rep_ent = $this->getDoctrine()->getRepository(Entreprise::class);
            $ent = $rep_ent->findEnterpriseByName($nom_etablissement);
            // if not exist
            if($ent==NULL)
            {
                // create enterprise
                $ent = new Entreprise();
                $ent->setNomEntreprise($nom_etablissement);
                $entityManager->persist($ent);
                $entityManager->flush();
            }

            // check etablissement exist or not
            $rep_etab = $this->getDoctrine()->getRepository(Etablissement::class);
            $nom_etablissement = strtoupper(trim($nom_etablissement));
            $etab = $rep_etab->findOneBy(["nomEtablissement"=>$nom_etablissement]);
            if($etab ==NULL)
            {
                // create etablissement
                $etab = new Etablissement();
                $etab->setNomEtablissement($nom_etablissement);
                $etab->setIdEntreprise($ent);

                // get address
                $address = "";
                $cp = "";
                $city="";

                try
                {
                    $address = $data["Adresse"];
                    $address_temp = $data["Adresse"];
                    $cp = $data["Code Postal"];
                    $cp_temp = $data["Code Postal"];
                    $city = $data["Ville"];
                    $city_temp = $data["Ville"];


                }
                catch (\Exception $exc)
                {
                    $address = $address_temp;
                    $cp = $cp_temp;
                    $city=$city_temp;
                }
                $address = trim($address);
                $cp = trim($cp);
                $city = trim($city);
                $add = $this->makeAddress($address,$city,$cp);
                /////
                //save etablissement
                $etab->setIdAdresse($add);
                $etab->setSecteursActivites($sector);
                $entityManager->persist($etab);
                $entityManager->flush();
                ////
            }


            //create  person

            try{
                $nom = $data["Nom"];
                $nom_temp = $data["Nom"];
                $prenom = $data["Prénom"];
                $prenom_temp = $data["Prénom"];
                $tel = $data["Téléphone"];
                $tel_temp = $data["Téléphone"];
            }
            catch (\Exception $exc)
            {
                $nom = $nom_temp;
                $prenom = $prenom_temp;
                $tel = $tel_temp;
            }
            $nom = trim(strtoupper($nom));
            $prenom = trim(strtoupper($prenom));
            $tel = str_replace(" ","-",trim($tel));
            $tel = str_replace(".","-",trim($tel));
            $rep_person = $this->getDoctrine()->getRepository(Personne::class);
            $person = $rep_person->findPersonByName($nom,$prenom);
            if($person==NULL)
            {
                $person = new Personne();
                $person->setNom(mb_convert_case($nom, MB_CASE_TITLE, "UTF-8"));
                $person->setPrenom(mb_convert_case($prenom, MB_CASE_TITLE, "UTF-8"));
                $entityManager->persist($person);
                $entityManager->flush();

                $rep_tel = $this->getDoctrine()->getRepository(Telephone::class);

                $tel_objet = $rep_tel->findOneBy(["numTelephone"=>$tel]);

                if($tel_objet==NULL)
                {
                    $tel_objet = new Telephone();
                    $tel_objet->setNumTelephone($tel);
                    $tel_objet->addIdPersonne($person);
                    $entityManager->persist($tel_objet);
                    $entityManager->flush();

                }

                $person->addIdTelephone($tel_objet);
                $entityManager->persist($person);
                $entityManager->flush();
            }
            ///

            //create contact etablissement
            $rep_contact_etab = $this->getDoctrine()->getRepository(ContactEtablissement::class);
            $contact_etab = $rep_contact_etab->findOneBy(["idPersonne"=>$person]);
            if($contact_etab==NULL)
            {
                $id = $rep_contact_etab->findMaxId();
                $contact_etab = new ContactEtablissement();
                $contact_etab->setIdPersonne($person);
                $contact_etab->setId(((int)$id[1])+1);
                try{
                    $mail_pro = $data["E-mail direct"];
                    $mail_pro_temp = $data["E-mail direct"];
                }
                catch (\Exception $exc)
                {
                    $mail_pro = $mail_pro_temp;
                }

                $contact_etab->setMailProfessionnel($mail_pro);

                //save
                $entityManager->persist($contact_etab);
                $entityManager->flush();
            }
            ///
            // create effectue vacation

            // create participation
            $rep_participe = $this->getDoctrine()->getRepository(ParticipationForum::class);
            $participe_forum = $rep_participe->findOneBy(["idForum"=>$forum,"idEtablissement"=>$etab]);
            if($participe_forum==NULL)
            {
                // add to participation
                $participe_forum = new ParticipationForum();
                $participe_forum->setIdForum($forum);
                $participe_forum->setIdEtablissement($etab);
                $participe_forum->setIdContactEtablissement($contact_etab);

                $rec_stagaire = "";
                $rec_diplome = "";
                $rec_apprenti = "";
                $rec_fillere = "";
                $commentaire = "";
                $niveau = "";
                try{
                    $rec_stagaire = $data["Recruter stagiaires"];
                    $rec_diplome = $data["Recruter diplômés"];
                    $rec_apprenti = $data["Recruter apprentis"];
                    $rec_fillere = $data["Filières recherchées"];
                    $niveau = $data["Niveau d'études recherché"];
                    $commentaire = $data["Remarques / Besoins"];
                }catch (\Exception $e)
                {
                    $rec_stagaire = "";
                    $rec_diplome = "";
                    $rec_apprenti = "";
                    $rec_fillere = "";
                    $commentaire = "";
                    $niveau = "";
                }
                $participe_forum->setRecruteStagiaire($rec_stagaire);
                $participe_forum->setRecruteApprentis($rec_apprenti);
                $participe_forum->setRecruteDiplome($rec_diplome);
                $participe_forum->setFilieresRecherchees($rec_fillere);
                $participe_forum->setNiveauxEtudesRecherches($niveau);
                $participe_forum->setCommentaireParticipation($commentaire);

                //save
                $entityManager->persist($participe_forum);
                $entityManager->flush();
            }


        }
    }

    private function makeAddress($address,$city_name,$cp,$comp = NULL)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $add = new Adresse();
        $add->setAdresse($address);
        $add->setCodePostal($cp);

        $rep_city = $this->getDoctrine()->getRepository(Ville::class);
        $city = $rep_city->findCityByName($city_name,$cp);
        if($city==NULL)
        {
            // create city
            $city = new Ville();
            $city->setDepartement(NULL);
            $rep_country = $this->getDoctrine()->getRepository(Pays::class);
            $city->setIdPays($rep_country->find(75)); // in France by default
            $city->setNomVille($city_name);

            $entityManager->persist($city);
            $entityManager->flush();
        }

        $add->setIdVille($city);
        $entityManager->persist($add);
        $entityManager->flush();
        return $add;
    }
}

