<?php

namespace App\Controller;

use App\Entity\ContactEtablissement;
use App\Entity\ConventionStage;
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
use App\Entity\ServiceAccueil;
use App\Service\SaveService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

set_time_limit(0);
class ImportInternshipController extends Controller
{

    /**
     * @Route("/import/internship", name="import_internship")
     */
    public function importInternship(Request $request,SaveService $saveService)
    {
        //get data
        $data = $request->request->get("data");
        // get type
        $type = $request->request->get("type");

        // convert to json
        $json_data = json_decode($data,true);

        if($type=="Stage")
        {
            $this->parserInternshipData($json_data);
        }
        $saveService->saveDatabase();
        return $this->json(array('status' => 200));

    }

    private function parserInternshipData($internships)
    {
        foreach($internships as $data) {
            // check enterprise
            $nom_etablissement = $this->getValue($data, "Nom Etablissement d'accueil");
            $num_siret = $this->getValue($data, "Siret");
            $enterprise = $this->checkEnterprise($nom_etablissement);

            if ($enterprise == NULL) {
                // create enterprise
                $statut_juri = $this->getValue($data,"Statut Juridique");
                $enterprise = $this->makeEnterprise($nom_etablissement, $num_siret,$statut_juri);
            }

            //check etablissement
            $etablissement = $this->checkEtablissement($nom_etablissement);

            //get address
            $address_string = $this->getValue($data,"Service d'accueil - Voie");
            $city = $this->getValue($data,"Service d'accueil - Commune");
            $cp = $this->getValue($data,"Service d'accueil - Code postal");
            $country = $this->getValue($data,"Service d'accueil - Pays");
            $complement = $this->getValue($data,"Service d'accueil - Residence");
            $type_struc = $this->getValue($data,"Type de Structure");
            $effectif = $this->getValue($data,"Effectif");
            $code_naf = $this->getValue($data,"Code NAF");

            $address_etablissement = $this->makeAddress($address_string,$city,$cp,$country,$complement);
            if ($etablissement == NULL) {
                //create etablissement
                $etablissement = $this->makeEtablissement($address_etablissement,$nom_etablissement,$enterprise,$type_struc,$effectif,$code_naf);
            }

            // check service
            $service_acc = $this->checkService($etablissement);
            if($service_acc==NULL)
            {
                $service_nom = $this->getValue($data,"Service d'accueil - Nom");
                $service_acc = $this->makeService($etablissement,$service_nom);
            }

            // create student
            // check person
            $nom = $this->getValue($data,"Nom étudiant");
            $prenom = $this->getValue($data,"Prénom étudiant");
            $sex = $this->getValue($data,"Code sexe étudiant");
            $tel_etu = $this->getValue($data,"Télephone Portable étudiant");
            $mail_etu_perso = $this->getValue($data,"Mail Perso étudiant");
            $person = $this->checkPerson($nom,$prenom);
            if($person==NULL)
            {
                $address_string_etu = $this->getValue($data,"Adresse étudiant");
                $city_etu = $this->getValue($data,"Ville étudiant");
                $cp_etu = $this->getValue($data,"Code postal étudiant");
                $country_etu = $this->getValue($data,"Pays étudiant");
                $address_etu = $this->makeAddress($address_string_etu,$city_etu,$cp_etu,$country_etu);

                $person = $this->makePerson($nom,$prenom,$tel_etu,$mail_etu_perso,$sex,$address_etu);
            }

            // check student
            $student = $this->checkStudent($person);
            if($student==NULL)
            {
                $num_student = $this->getValue($data,"Numéro étudiant");
                $major_string = $this->getValue($data,"Libellé Etape");
                $mail_etu = $this->getValue($data,"Mail Universitaire étudiant");
                //make student
                $student = $this->makeStudent($person,$major_string,$num_student,$mail_etu);
            }

            // make internship
            $start_date = $this->getValue($data,"Date Début Stage");
            $end_date = $this->getValue($data,"Date Fin Stage");
            $start_date = str_replace("/","-",trim($start_date));
            $end_date = str_replace("/","-",trim($end_date));
            
            if($start_date!=""&&$end_date!=""){
                $start_date = strtotime($start_date);
                $start_date = date_create_from_format("Y-m-d",date('Y-m-d',$start_date));
                //$start_date = $start_date->format('Y-m-d');
                $end_date = strtotime($end_date);
                $end_date = date_create_from_format("Y-m-d",date('Y-m-d',$end_date));
            }


            $forein = $address_etablissement->getIdVille()->getIdPays()->getId()==75?0:1;
            $school_year = $student->getAnneeEtude();
            $thema_internship = $this->getValue($data,"Thématique");
            $subject_internship = $this->getValue($data,"Sujet");
            $function_internship = $this->getValue($data,"Fonctions et Tâches");
            $detail_project = $this->getValue($data,"Détail du Projet");
            $duration_hours = $this->getValue($data,"Durée du Stage (en Semaine)");
            $comment_duration = $this->getValue($data,"Commentaire Duree Travail");
            $duration_hours = $duration_hours[0][0];
            $num_days = $this->getValue($data,"Nb de jours de travail");
            $comment_internship = $this->getValue($data,"Commentaire Stage");
            $element_peda = $this->getValue($data,"Élément pédagogique");
            $adventage_nature = $this->getValue($data,"Avantages nature");

            $internship = $this->makeInternship($start_date,$end_date,$forein,$school_year,$thema_internship,$subject_internship,$function_internship,$detail_project
                ,$duration_hours,$num_days,$comment_internship,$element_peda,$adventage_nature,$comment_duration);

            // check person polytech
            $nom_tutor_ecole = $this->getValue($data,"Nom Enseignant référent");
            $prenom_tutor_ecole = $this->getValue($data,"Prénom Enseignant référent");
            $person_tutor_ecole = $this->checkPerson($nom_tutor_ecole,$prenom_tutor_ecole);

            if($person_tutor_ecole==NULL)
            {
                $person_tutor_ecole = $this->makePerson($nom_tutor_ecole,$prenom_tutor_ecole,NULL,NULL,NULL,NULL);
            }

            // check person polytech
            $person_polytech = $this->checkPersonPolytech($person);
            if($person_polytech==NULL)
            {
                // make person polytech
                $mail_person_polytech = $this->getValue($data,"Mail Enseignant référent");
                $person_polytech = $this->makePersonPolytech($person_tutor_ecole,$student->getIdSpecialite()->getIdDepartement(),$mail_person_polytech);

            }

            // check person professional
            $nom_professional = $this->getValue($data,"Nom Tuteur Professionnel");
            $prenom_professional = $this->getValue($data,"Prenom Tuteur Professionnel");
            $person_professional = $this->checkPerson($nom_professional,$prenom_professional);
            if($person_professional==NULL)
            {
                $person_professional = $this->makePerson($nom_professional,$prenom_professional,NULL,NULL,NULL,NULL);
            }

            // make contact etablissement
            $contact_etab = $this->checkContactEtablissement($person_professional);
            if($contact_etab==NULL)
            {
                $mail_professional = $this->getValue($data,"Mail Tuteur professionnel");
                $contact_etab = $this->makeContactEtablissement($person_professional,$mail_professional);
            }

            //check sign
            $nom_sign = $this->getValue($data,"Nom Signataire");
            $prenom_sign = $this->getValue($data,"Prénom Signataire");
            $person_sign= $this->checkPerson($nom_sign,$prenom_sign);
            if($person_sign==NULL)
            {
                $person_sign = $this->makePerson($nom_sign,$prenom_sign,NULL,NULL,NULL,NULL);
            }
            // make sign etablissement
            $sign_etab = $this->checkContactEtablissement($person_sign);
            if($sign_etab==NULL)
            {
                $mail_sign = $this->getValue($data,"Mail Signataire");
                $sign_etab = $this->makeContactEtablissement($person_sign,$mail_sign);
            }

            // make gratification
            $montant_grati = $this->getValue($data,"Gratification");
            $unity_grat = $this->getValue($data,"Unité Gratification");
            $unity_duration_grat = $this->getValue($data,"Unité Durée Gratification");

            $gratification = $this->makeGratification($montant_grati,$unity_grat,$unity_duration_grat);

            // check convention
            $date_create = $this->getValue($data,"Date de création de la convention");
            $date_modification = $this->getValue($data,"Date de modification de la convention");


            if($date_create!="")
            {
                $date_create = trim(substr($date_create,0,10));
            }

            $date_create = str_replace("/","-",trim($date_create));
            $date_modification = str_replace("/","-",trim($date_modification));
            $date_create = strtotime($date_create);
            //var_dump($date_create);
            $date_create = date_create_from_format("Y-m-d",date('Y-m-d',$date_create));
            if($date_modification!="")
            {
                $date_modification = strtotime($date_modification);
                $date_modification = date_create_from_format("Y-m-d",date('Y-m-d',$date_modification));
            }
            else{
                $date_modification = $date_create;
            }
            $valid = $this->getValue($data,"Convention Validée");
            $valid_peda =$this->getValue($data,"Convention Validée Pédagogiquement");
            $type = $this->getValue($data,"Type de Convention");
            $major = $student->getIdSpecialite();
            $convention = $this->checkConvention($student,$date_create);
            if($convention==NULL)
            {
                // make convention
             $convention = $this->makeConvention($internship,$etablissement,$major,$student,$person_polytech,$contact_etab,$sign_etab,
                     $gratification,$service_acc,$date_create,$date_modification,$valid,$valid_peda,$type);
            }

            //var_dump($convention);
            unset($convention);

        }
        return $this->json(array('status' => 200));
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

    public function makeInternship($start_date,$end_date,$forein,$school_year,$thema_internship,$subject_internship,$function_internship,$detail_project
        ,$duration_hours,$num_days,$comment_internship,$element_peda,$adventage_nature,$comment_duration):?Stage
    {

        $entityManager = $this->getDoctrine()->getManager();
        $internship = new Stage();

        $internship->setDateDebutStage($start_date);
        $internship->setDateFinStage($end_date);
        $internship->setEtranger($forein);
        $internship->setAnneeEtudeStage($school_year);
        $internship->setThematiqueStage($thema_internship);
        $internship->setSujetStage($subject_internship);
        $internship->setFonctionsTachesStage($function_internship);
        $internship->setDetailsProjetStage($detail_project);
        $internship->setDureeStageHeures($duration_hours);
        $internship->setNbJoursTravail($num_days);
        $internship->setCommentaireStage($comment_internship);
        $internship->setElementPedagogique($element_peda);
        $internship->setAvantagesNature($adventage_nature);
        $internship->setCommentaireDureeStage($comment_duration);
        $entityManager->persist($internship);
        $entityManager->flush();

        return $internship;
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
    public function makeEnterprise($nom_etablissement,$num_siret,$statut_juri):?Entreprise
    {
        $num_siren = "";
        $entityManager = $this->getDoctrine()->getManager();
        // create enterprise
        $ent = new Entreprise();
        $ent->setNomEntreprise($nom_etablissement);
        if($num_siret!="")
        {
            $num_siren = substr($num_siret,0,9);
        }
        $ent->setNumSiren($num_siren);
        $ent->setStatutJuridique($statut_juri);
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
    public function makeStudent($person,$major_string,$num_student,$mail_etu):?Etudiant
    {
        $entityManager = $this->getDoctrine()->getManager();
        $rep_student = $this->getDoctrine()->getRepository(Etudiant::class);
        $id = $rep_student->findMaxId();
        $student = new Etudiant();
        $student->setId(((int)$id[1])+1);
        $student->setIdPersonne($person);
        $student->setNumeroEtudiant(trim($num_student));
        $student->setMailEtudiant(trim($mail_etu));
       
        $student->setIdSpecialite($this->getMajor($major_string));
        $student->setDiplome(0);
        $student->setAnneeEtude($this->getStudyYear($major_string));
        $entityManager->persist($student);
        $entityManager->flush();
        return $student;
    }

    public function getNumverFromString($string)
    {
        $patterns = "/\d+/";
        preg_match_all($patterns,$string,$arr);
        return $arr;
    }

    /**
     * @param $major_string
     * @return int
     */
    public function getStudyYear($major_string):int
    {
        $arr = $this->getNumverFromString($major_string);
        //var_dump($arr);
        if(count($arr[0])==0){
            return 2;
        }
        else
            return $arr[0][0];
    }

    /**
     * @param $major_string
     * @return Specialite
     */
    public function getMajor($major_string):?Specialite
    {
        $rep_spec = $this->getDoctrine()->getRepository(Specialite::class);
        $major = NULL;
        if(stristr($major_string,"Informatique"))
        {
            $major = $rep_spec->findOneBy(["libelleSpecialite"=>"Informatique"]);
        }
        else if(stristr($major_string,"Electronique"))
        {
            $major = $rep_spec->findOneBy(["libelleSpecialite"=>"Électronique et génie électrique"]);
        }
        else if(stristr($major_string,"Mécanique"))
        {
            $major = $rep_spec->findOneBy(["libelleSpecialite"=>"Mécanique et conception des systèmes"]);
        }
        else if(stristr($major_string,"Aménagement"))
        {
            $major = $rep_spec->findOneBy(["libelleSpecialite"=>"Génie de l'aménagement et de l'environnement"]);
        }
        else if(stristr($major_string,"Maths-Info"))
        {
            $major = $rep_spec->findOneBy(["libelleSpecialite"=>"PeiP A Maths-Info"]);
        }
        else if(stristr($major_string,"A Sc. Matière"))
        {
            $major = $rep_spec->findOneBy(["libelleSpecialite"=>"PeiP A Sc. Matière"]);
        }
        else if(stristr($major_string,"biologie"))
        {
            $major = $rep_spec->findOneBy(["libelleSpecialite"=>"PeiP B Biologie"]);
        }
        else if(stristr($major_string,"Informatique industrielle"))
        {
            $major = $rep_spec->findOneBy(["libelleSpecialite"=>"Informatique industrielle"]);
        }
        return $major;
    }

    /**
     * @param $person
     * @return PersonnelPolytech
     */
    public function checkPersonPolytech($person):?PersonnelPolytech
    {
        $rep_per_polytech = $this->getDoctrine()->getRepository(PersonnelPolytech::class);
        $person_poly = $rep_per_polytech->findOneBy(["idPersonne"=>$person]);
        return $person_poly;
    }

    /**
     * @param $person
     * @param $depart
     * @param $mail
     * @return PersonnelPolytech
     */
    public function makePersonPolytech($person,$depart,$mail):?PersonnelPolytech
    {
        $entityManager = $this->getDoctrine()->getManager();
        $rep_person_polytech = $this->getDoctrine()->getRepository(PersonnelPolytech::class);
        $id = $rep_person_polytech->findMaxId();

        $person_polytech = new PersonnelPolytech();
        $person_polytech->setId(((int)$id[1])+1);
        $person_polytech->setIdPersonne($person);
        $person_polytech->setIdDepartement($depart);
        $person_polytech->setMailUniversitaire($mail);
        $entityManager->persist($person_polytech);
        $entityManager->flush();
        return $person_polytech;
    }

    /**
     * @param $etablissement
     * @return ServiceAccueil
     */
    public function checkService($etablissement):?ServiceAccueil
    {
        $rep_service = $this->getDoctrine()->getRepository(ServiceAccueil::class);
        $service = $rep_service->findOneBy(["idEtablissement"=>$etablissement]);
        return $service;
    }

    /**
     * @param $etablissement
     * @param $nom_service
     * @return ServiceAccueil
     */
    public function makeService($etablissement,$nom_service):?ServiceAccueil
    {
        $entityManager = $this->getDoctrine()->getManager();
        $service = new ServiceAccueil();
        $service->setIdEtablissement($etablissement);
        $service->setNomService($nom_service);
        $entityManager->persist($service);
        $entityManager->flush();
        return $service;

    }

    /**
     * @param $person
     * @return ContactEtablissement
     */
    public function checkContactEtablissement($person):?ContactEtablissement
    {
        $rep_contact_etab = $this->getDoctrine()->getRepository(ContactEtablissement::class);
        $contact_etab = $rep_contact_etab->findOneBy(["idPersonne"=>$person]);
        return $contact_etab;
    }

    /**
     * @param $person
     * @param $mail
     * @return ContactEtablissement
     */
    public function makeContactEtablissement($person,$mail):?ContactEtablissement
    {
        $entityManager = $this->getDoctrine()->getManager();
        $rep_contact_etab = $this->getDoctrine()->getRepository(ContactEtablissement::class);
        $id = $rep_contact_etab->findMaxId();
        $contact_etab = new ContactEtablissement();
        $contact_etab->setIdPersonne($person);
        $contact_etab->setId(((int)$id[1])+1);
        $contact_etab->setMailProfessionnel($mail);
        //save
        $entityManager->persist($contact_etab);
        $entityManager->flush();
        return $contact_etab;
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

    public function checkConvention($student,$date_create):?ConventionStage
    {
        $rep_convention = $this->getDoctrine()->getRepository(ConventionStage::class);
        $convention = $rep_convention->findOneBy(["dateCreation"=>$date_create,"idEtudiant"=>$student]);
        return $convention;
    }

    public function makeConvention($internship,$etablissement,$major,$student,$person_polytech,$tutor_professional,$person_sign,
                                   $gratification,$service_acc,$date_create,$date_modification,$valid,$valid_peda,$type):?ConventionStage
    {
        $entityManager = $this->getDoctrine()->getManager();
        $convention = new ConventionStage();
        $convention->setIdStage($internship);
        $convention->setIdEtablissement($etablissement);
        $convention->setIdSpecialite($major);
        $convention->setIdEtudiant($student);
        $convention->setIdPersonnelPolytechTuteur($person_polytech);
        $convention->setIdContactEtablissementTuteur($tutor_professional);
        $convention->setIdContactEtablissementSignataire($person_sign);
        $convention->setIdGratification($gratification);
        $convention->setIdServiceAccueil($service_acc);

        $convention->setValidee(strtoupper($valid)=="OUI"?1:0);
        $convention->setValideePedagogiquement(strtoupper($valid_peda)=="OUI"?1:0);
        $convention->setTypeConvention($type);

        $convention->setDateCreation($date_create);
        $convention->setDateDerniereModification($date_modification);

        $entityManager->persist($convention);
        $entityManager->flush();
        return $convention;

    }


}
