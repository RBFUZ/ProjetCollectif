<?php

namespace App\Controller;

use App\Entity\Apprentissage;
use App\Entity\Etudiant;
use App\Entity\Gratification;
use App\Entity\Personne;
use App\Entity\PersonnelPolytech;
use App\Entity\Specialite;
use App\Entity\Stage;
use App\Entity\Telephone;
use App\Entity\Ville;
use App\Entity\Pays;
use App\Entity\Adresse;
use App\Entity\Etablissement;
use App\Entity\Entreprise;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\SaveService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ImportApprentissageController extends Controller
{
    /**
     * @Route("/import/apprentissage", name="import_apprentissage")
     */
    public function importApprentissage(Request $request,SaveService $saveService)
    {
        //get data
        $data = $request->request->get("data");
        // get type
        $type = $request->request->get("type");

        // convert to json
        $json_data = json_decode($data,true);

        $school_year = 0; // get school year

        if($type=="Apprentissage")
        {
            $this->parserApprentiData($json_data, $school_year);
        }
        $saveService->saveDatabase();
        return $this->json(array('status' => 200));

    }

    private function parserApprentiData($apprentissage, $school_year)
    {
        foreach($apprentissage as $data)
        {
            // check enterprise
            $nom_etablissement = $this->getValue($data, "Entreprise");
            $enterprise = $this->checkEnterprise($nom_etablissement);

            if ($enterprise == NULL) {
                // create enterprise
                $enterprise = $this->makeEnterprise($nom_etablissement);
            }

            //check etablissement
            $etablissement = $this->checkEtablissement($nom_etablissement);

            //get address
            $address_string = $this->getValue($data,"Adresse");
            $city = $this->getValue($data,"Ville / Pays");
            $cp = $this->getValue($data,"CP");
            $country = "France";
            $complement = "";
            $type_struc = "";
            $effectif = "";
            $code_naf = "";

            $address_etablissement = $this->makeAddress($address_string,$city,$cp,$country,$complement);
            if ($etablissement == NULL) {
                //create etablissement
                $etablissement = $this->makeEtablissement($address_etablissement,$nom_etablissement,$enterprise,$type_struc,$effectif,$code_naf);
            }

            // create student
            // check person
            $nom = $this->getValue($data,"NOM étudiant");
            $prenom = $this->getValue($data,"Prénom étudiant");
            $sex = $this->getValue($data,"Sexe");
            $tel_etu = NULL;
            $mail_etu_perso = NULL;
            $person = $this->checkPerson($nom,$prenom);
            if($person==NULL)
            {
                $address_etu = NULL;

                $person = $this->makePerson($nom,$prenom,$tel_etu,$mail_etu_perso,$sex,$address_etu);
            }

            // check student
            $student = $this->checkStudent($person);
            if($student==NULL)
            {
                $num_student = NULL;
                $year = $school_year;
                $mail_etu = NULL;
                //make student
                $student = $this->makeStudent($person,$year,$num_student,$mail_etu);
            }

            // make gratification
            $montant_grati = $this->getValue($data,"Gratification");
            $unity_grat = "Brut";
            $unity_duration_grat = "mois";

            $gratification = $this->makeGratification($montant_grati,$unity_grat,$unity_duration_grat);

            // make apprentissage

            $apprentissage = $this->checkApprentissage($student);
            if($apprentissage==NULL)
            {
                $foreign = $this->getValue($data,"A l'étranger");
                $duration = $this->getValue($data,"Durée");
                $start_date = $this->getValue($data,"Date départ");
                $end_date = $this->getValue($data,"Date Retour");

                if($start_date !="")
                {
                    $start_date = str_replace("/","-",trim($start_date));
                }

                $start_date = strtotime($start_date);
                $start_date = date_create_from_format("Y-m-d",date('Y-m-d',$start_date));

                if($end_date !="")
                {
                    $start_date = str_replace("/","-",trim($start_date));
                }

                $end_date = strtotime($end_date);
                $end_date = date_create_from_format("Y-m-d",date('Y-m-d',$end_date));


                $apprentissage = $this->makeApprentissage($etablissement,$student,$gratification,$foreign,$duration,$start_date,$end_date);
            }


        }
    }

    public function getValue($data,$string)
    {
        $value = "";
        try
        {
            $value = $data[$string];
        }
        catch (\Exception $exc)
        {
            $value = "";
        }
        return $value;
    }
    /**
     * @param $nom_etablissement
     * @return Entreprise
     */
    public function checkEnterprise($nom_etablissement):?Entreprise
    {
        $nom_etablissement = trim($nom_etablissement);
        // search for enterprise
        $rep_ent = $this->getDoctrine()->getRepository(Entreprise::class);
        $ent = $rep_ent->findEnterpriseByName($nom_etablissement);
        return $ent;
    }

    /**
     * @param $nom_etablissement
     * @param $num_siret
     */
    public function makeEnterprise($nom_etablissement):?Entreprise
    {
        $entityManager = $this->getDoctrine()->getManager();
        // create enterprise
        $ent = new Entreprise();
        $ent->setNomEntreprise($nom_etablissement);
        $entityManager->persist($ent);
        $entityManager->flush();
        return $ent;
    }

    /**
     * @param $nom_etablissement
     * @return Etablissement
     */
    public function checkEtablissement($nom_etablissement):?Etablissement
    {
        // check etablissement exist or not
        $rep_etab = $this->getDoctrine()->getRepository(Etablissement::class);
        $nom_etablissement = strtoupper(trim($nom_etablissement));
        $etab = $rep_etab->findOneBy(["nomEtablissement"=>$nom_etablissement]);
        return $etab;
    }

    /**
     * @param $address
     * @param $nom_etablissement
     * @param $enterprise
     * @param $type_struc
     * @param $effectif
     * @param $code_naf
     * @return Etablissement
     */
    public function makeEtablissement($address,$nom_etablissement,$enterprise,$type_struc,$effectif,$code_naf):?Etablissement
    {
        $entityManager = $this->getDoctrine()->getManager();
        $etab = new Etablissement();
        $etab->setNomEtablissement($nom_etablissement);
        $etab->setIdEntreprise($enterprise);
        $etab->setTypeStructure($type_struc);
        $etab->setEffectifs($effectif);
        $etab->setCodeNaf($code_naf);
        $etab->setIdAdresse($address);
        $entityManager->persist($etab);
        $entityManager->flush();
        return $etab;
    }

    /**
     * @param $address
     * @param $city_name
     * @param $cp
     * @param $country
     * @param null $comp
     * @return Adresse
     */
    public function makeAddress($address,$city_name,$cp,$country,$comp = NULL):?Adresse
    {
        $entityManager = $this->getDoctrine()->getManager();
        $add = new Adresse();
        $add->setAdresse($address);
        $add->setCodePostal($cp);

        $rep_city = $this->getDoctrine()->getRepository(Ville::class);
        //var_dump($city_name);
        $city = $rep_city->findCityByName($city_name,$cp);
        if($city==NULL)
        {
            // create city
            $city = new Ville();
            $city->setDepartement(NULL);
            $rep_country = $this->getDoctrine()->getRepository(Pays::class);
            $city->setIdPays($rep_country->findCountryByName($country)); // in France by default
            $city->setNomVille($city_name);

            $entityManager->persist($city);
            $entityManager->flush();
        }

        $add->setIdVille($city);
        $entityManager->persist($add);
        $entityManager->flush();
        return $add;
    }

    /**
     * @param $nom
     * @param $prenom
     * @return Personne
     */
    public function checkPerson($nom,$prenom):?Personne
    {
        $nom = trim(strtoupper($nom));
        $prenom = trim(strtoupper($prenom));
        $rep_person = $this->getDoctrine()->getRepository(Personne::class);
        $person = $rep_person->findPersonByName($nom,$prenom);
        return $person;
    }

    /**
     * @param $nom
     * @param $prenom
     * @param $tel
     * @param $mail
     * @param $sex
     * @param $address
     * @return Personne
     */
    public function makePerson($nom,$prenom,$tel,$mail,$sex,$address):?Personne
    {
        $entityManager = $this->getDoctrine()->getManager();
        $person = new Personne();
        $person->setNom(mb_convert_case($nom, MB_CASE_TITLE, "UTF-8"));
        $person->setPrenom(mb_convert_case($prenom, MB_CASE_TITLE, "UTF-8"));
        $person->setIdAdresse($address);
        $person->setAdresseMailPerso($mail);
        $person->setCodeSexe($sex);
        $entityManager->persist($person);
        $entityManager->flush();
        //make tel
        if($tel!=""&&$tel!=NULL)
        {
            $telephone = NULL;
            $tel = str_replace(" ","-",trim($tel));
            $tel = str_replace(".","-",trim($tel));
            $telephone = $this->checkTelphone($tel);
            if($telephone==NULL)
            {
                $telephone = $this->makeTelephone($tel,$person);
            }
            $person->addIdTelephone($telephone);
        }

        $entityManager->persist($person);
        $entityManager->flush();
        return $person;
    }

    /**
     * @param $num_tel
     * @return Telephone
     */
    public function checkTelphone($num_tel):?Telephone
    {
        $rep_tel = $this->getDoctrine()->getRepository(Telephone::class);
        $tel_objet = $rep_tel->findOneBy(["numTelephone"=>$num_tel]);
        return $tel_objet;
    }

    /**
     * @param $num_tel
     * @param $person
     * @return Telephone
     */
    public function makeTelephone($num_tel,$person):?Telephone
    {
        $entityManager = $this->getDoctrine()->getManager();
        $tel_objet = new Telephone();
        $tel_objet->setNumTelephone($num_tel);
        $tel_objet->addIdPersonne($person);
        $entityManager->persist($tel_objet);
        $entityManager->flush();
        return $tel_objet;
    }

    /**
     * @param $person
     * @return Etudiant
     */
    public function checkStudent($person):?Etudiant
    {
        $rep_etu = $this->getDoctrine()->getRepository(Etudiant::class);
        $student = $rep_etu->findOneBy(["idPersonne"=>$person]);
        return $student;
    }

    /**
     * @param $person
     * @param $major_string
     * @param $num_student
     * @param $mail_etu
     * @return Etudiant
     */
    public function makeStudent($person,$year,$num_student,$mail_etu):?Etudiant
    {
        $entityManager = $this->getDoctrine()->getManager();
        $rep_student = $this->getDoctrine()->getRepository(Etudiant::class);
        $rep_spec = $this->getDoctrine()->getRepository(Specialite::class);
        $id = $rep_student->findMaxId();
        $student = new Etudiant();
        $student->setId(((int)$id[1])+1);
        $student->setIdPersonne($person);
        $student->setNumeroEtudiant($num_student);
        $student->setMailEtudiant(trim($mail_etu));
        $student->setIdSpecialite($rep_spec->find(4));
        $student->setDiplome(0);
        $student->setAnneeEtude($year);
        $entityManager->persist($student);
        $entityManager->flush();
        return $student;
    }

    /**
     * @param $montant
     * @param $unity
     * @param $unitu_duration
     * @return Gratification
     */
    public function makeGratification($montant,$unity,$unitu_duration):?Gratification
    {
        $entityManager = $this->getDoctrine()->getManager();
        $gratification = new Gratification();
        $gratification->setMontantGratification((int)$montant);
        $gratification->setUniteDureeGratification($unitu_duration);
        $gratification->setUniteGratification($unity);
        $entityManager->persist($gratification);
        $entityManager->flush();
        return $gratification;

    }

    /**
     * @param $person
     * @return Apprentissage|null
     */
    private function checkApprentissage($student):?Apprentissage
    {
        $rep_app = $this->getDoctrine()->getRepository(Apprentissage::class);
        $apprentissage = $rep_app->findOneBy(["idPersonneEtudiant"=>$student]);
        return $apprentissage;

    }

    /**
     * @param $etablissement
     * @param $student
     * @param $gratification
     * @param $foreign
     * @param $duration
     * @param $start_date
     * @param $end_date
     * @return Apprentissage|null
     */
    private function makeApprentissage($etablissement,$student,$gratification,$foreign,$duration,$start_date,$end_date):?Apprentissage
    {
        $entityManager = $this->getDoctrine()->getManager();
        $apprentissage = new Apprentissage();
        $apprentissage->setIdEtablissement($etablissement);
        $apprentissage->setIdSpecialite($student->getIdSpecialite());
        $apprentissage->setIdPersonneEtudiant($student);
        $apprentissage->setIdGratification($gratification);
        $apprentissage->setEtranger($foreign);
        $apprentissage->setDureeApprentissageAnnees($duration);
        $apprentissage->setDateDebutApprentissage($start_date);
        $apprentissage->setDateFinApprentissage($end_date);
        $entityManager->persist($apprentissage);
        $entityManager->flush();
        return $apprentissage;

    }
}
