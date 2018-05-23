<?php

namespace App\Controller;

use App\Entity\EstContactRh;
use App\Entity\EstContactTechnique;
use App\Entity\ContactEtablissement;
use App\Entity\Personne;
use App\Entity\RencontreContact;
use App\Entity\Telephone;
use App\Entity\Ville;
use App\Entity\Pays;
use App\Entity\Adresse;
use App\Entity\Etablissement;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Entreprise;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

set_time_limit(0);
class ImportRelationshipContactController extends Controller
{
    /**
     * @Route("/import/relationship", name="import_relationship_contact")
     */
    public function importRelationship(Request $request)
    {
        //get data
        $data = $request->request->get("data");
        // get type
        $type = $request->request->get("type");

        // convert to json
        $json_data = json_decode($data,true);

        if($type=="Relation")
        {
            $this->parserRelationshipData($json_data);
        }
        return $this->json(array('status' => 200));
    }

    private function parserRelationshipData($relationships)
    {
        foreach ($relationships as $data) {
            // check enterprise
            $nom_etablissement = $this->getValue($data, "Nom Etablissement Entreprise");
            $enterprise = $this->checkEnterprise($nom_etablissement);

            if ($enterprise == NULL) {
                // create enterprise
                $statut_juri = $this->getValue($data, "Statut juridique");
                $enterprise = $this->makeEnterprise($nom_etablissement, $statut_juri);
            }

            //check etablissement
            $etablissement = $this->checkEtablissement($nom_etablissement);

            if ($etablissement == NULL) {
                //create etablissement
                $etablissement = $this->makeEtablissement($nom_etablissement,$enterprise);
            }

            //get address
            $address_string = $this->getValue($data,"Rencontre-Adresse");
            $city = $this->getValue($data,"Rencontre-Ville");
            $cp = $this->getValue($data,"Rencontre-Code postal");
            $country = $this->getValue($data,"Rencontre-Pays");

            $address_rdv = $this->makeAddress($address_string,$city,$cp,$country);

            // check person professional
            $nom_professional = $this->getValue($data,"Contact-Nom");
            $prenom_professional = $this->getValue($data,"Contact-Prénom");
            $tel_professional = $this->getValue($data,"Contact-NumTel");
            $person_professional = $this->checkPerson($nom_professional,$prenom_professional);
            if($person_professional==NULL)
            {
                $person_professional = $this->makePerson($nom_professional,$prenom_professional,$tel_professional);
            }

            // make contact etablissement
            $contact_etab = $this->checkContactEtablissement($person_professional);
            if($contact_etab==NULL)
            {
                $mail_professional = $this->getValue($data,"Contact-Email");
                $contact_etab = $this->makeContactEtablissement($person_professional,$mail_professional);
            }

            // make route to "rh" or "technique"
            if($this->getValue($data,"Contact-Type (RH/Tech)") == "RH" ) {
                $est_contact = $this->makeEstContactRh($etablissement, $contact_etab);
            }
            else {
                $est_contact = $this->makeEstContactTechnique($etablissement, $contact_etab);
            }

            $appointment_date = $this->getValue($data,"Date Rencontre");
            if($appointment_date!="") {
                $appointment_date = strtotime($appointment_date);
                $appointment_date = date_create_from_format("Y-m-d", date('Y-m-d', $appointment_date));
            }

            $rdv_phone_date = $this->getValue($data,"Date Rv téléphonique");
            if($appointment_date!="") {
                $appointment_date = strtotime($appointment_date);
                $appointment_date = date_create_from_format("Y-m-d", date('Y-m-d', $appointment_date));
            }

            $subject_string = $this->getValue($data,"Sujet");

            $suite_string = $this->getValue($data,"Suite");

            $this->makeRelationship($appointment_date, $rdv_phone_date, $address_rdv->getId(), $contact_etab->getId(), $subject_string, $suite_string);
        }
    }

    private function getValue($data, $string)
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


    private function makeRelationship($appointment_date, $rdv_phone_date, $address_rdv_id, $contact_etab_id, $subject, $suite):?RencontreContact
    {
        $entityManager = $this->getDoctrine()->getManager();
        $relationship = new RencontreContact();
        $relationship->setDateRencontre($appointment_date);
        $relationship->setDateRdvTelephonique($rdv_phone_date);
        $relationship->setIdAdresse($address_rdv_id);
        $relationship->setIdContactEtablissement($contact_etab_id);
        $relationship->setSujet($subject);
        $relationship->setSuite($suite);
        $entityManager->persist($relationship);
        $entityManager->flush();
        return $relationship;
    }

    /**
     * @param $nom_etablissement
     * @return Entreprise
     */
    private function checkEnterprise($nom_etablissement):?Entreprise
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
    private function makeEnterprise($nom_etablissement,$statut_juri):?Entreprise
    {
        $entityManager = $this->getDoctrine()->getManager();
        // create enterprise
        $ent = new Entreprise();
        $ent->setNomEntreprise($nom_etablissement);
        $ent->setStatutJuridique($statut_juri);
        $entityManager->persist($ent);
        $entityManager->flush();
        return $ent;
    }

    /**
     * @param $nom_etablissement
     * @return Etablissement
     */
    private function checkEtablissement($nom_etablissement):?Etablissement
    {
        // check etablissement exist or not
        $rep_etab = $this->getDoctrine()->getRepository(Etablissement::class);
        $nom_etablissement = strtoupper(trim($nom_etablissement));
        $etab = $rep_etab->findOneBy(["nomEtablissement"=>$nom_etablissement]);
        return $etab;
    }

    /**
     * @param $nom_etablissement
     * @param $enterprise
     * @return Etablissement
     */
    private function makeEtablissement($nom_etablissement,$enterprise):?Etablissement
    {
        $entityManager = $this->getDoctrine()->getManager();
        $etab = new Etablissement();
        $etab->setNomEtablissement($nom_etablissement);
        $etab->setIdEntreprise($enterprise);
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
    private function makeAddress($address,$city_name,$cp,$country,$comp = NULL):?Adresse
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
     * @return Personne
     */
    public function makePerson($nom,$prenom,$tel):?Personne
    {
        $entityManager = $this->getDoctrine()->getManager();
        $person = new Personne();
        $person->setNom(mb_convert_case($nom, MB_CASE_TITLE, "UTF-8"));
        $person->setPrenom(mb_convert_case($prenom, MB_CASE_TITLE, "UTF-8"));
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
    private function checkTelphone($num_tel):?Telephone
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
    private function makeTelephone($num_tel,$person):?Telephone
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
     * @return ContactEtablissement
     */
    private function checkContactEtablissement($person):?ContactEtablissement
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
    private function makeContactEtablissement($person,$mail):?ContactEtablissement
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
     * @param $etablissement
     * @param $contact_etablissement
     * @return EstContactRh
     */

    private function makeEstContactRh($etablissement, $contact_etablissement):?EstContactRh
    {
        $entityManager = $this->getDoctrine()->getManager();
        $est_contact_rh = new EstContactRh();
        $est_contact_rh->setIdContactEtablissement($contact_etablissement);
        $est_contact_rh->setIdEtablissement($etablissement);
        $est_contact_rh->setDateDebutContactRh(new \DateTime());
        //save
        $entityManager->persist($est_contact_rh);
        $entityManager->flush();
        return $est_contact_rh;
    }

    /**
     * @param $etablissement
     * @param $contact_etablissement
     * @return EstContactTechnique
     */

    private function makeEstContactTechnique($etablissement, $contact_etablissement):?EstContactTechnique
    {
        $entityManager = $this->getDoctrine()->getManager();
        $est_contact_technique = new EstContactTechnique();
        $est_contact_technique->setIdContactEtablissement($contact_etablissement);
        $est_contact_technique->setIdEtablissement($etablissement);
        $est_contact_technique->setDateDebutContactTechnique(new \DateTime());
        //save
        $entityManager->persist($est_contact_technique);
        $entityManager->flush();
        return $est_contact_technique;
    }

}
