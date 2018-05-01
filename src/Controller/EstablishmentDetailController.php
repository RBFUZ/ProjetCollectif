<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints\DateTime;
use App\Entity\Etablissement;
use App\Entity\ConventionStage;
use App\Entity\Apprentissage;
use App\Entity\Conference;
use App\Entity\TypeForum;
use App\Entity\Forum;
use App\Entity\VerseTaxeApprentissage;
use Symfony\Component\HttpFoundation\Session\Session;

class EstablishmentDetailController extends Controller
{
    /**
     * @Route("/establishment/detail/{idEstablishment}", name="establishment_detail")
     */
    public function index($idEstablishment)
    {
        $session = new Session();

        $session->set('etabid', $idEstablishment);

        $repository = $this->getDoctrine()->getRepository(Etablissement::class);
        $establishment = $repository->find($idEstablishment);

        $repository_stage = $this->getDoctrine()->getRepository(ConventionStage::class);
        $trainee = $repository_stage->findTraineeByEstablishment($idEstablishment);

        $repository_apprentissage = $this->getDoctrine()->getRepository(Apprentissage::class);
        $apprenticeship = $repository_apprentissage->findAprenticeshipByEstablishment($idEstablishment);

        $repository_convention = $this->getDoctrine()->getRepository(Conference::class);
        $convention = $repository_convention->findConventionByEstablishment($idEstablishment);

        $repository_type_forum = $this->getDoctrine()->getRepository(TypeForum::class);
        $type_forum = $repository_type_forum->findAll();

        $type_forum = $this->checkIfForumCreateOrNot($type_forum); // // Supprime les types de forum du tableau quand aucun forum de ce type n'a été ajouté
        $years_forum = $this->fillYearForumUntilToday($type_forum); // Remplir les années de la plus ancienne jusqu'a aujourd'hui
        $logo = $this->fillPathLogo($type_forum, $years_forum); // Remplir le tableau avec le chemin du logo V vert ou croix rouge on fonction de l'année

        return $this->render('establishment_detail/index.html.twig', [
            'establishment' => $establishment,
            'trainee' => $trainee,
            'apprenticeship' => $apprenticeship,
            'convention' => $convention,
            'type_forum' => $type_forum,
            'forum' => $years_forum,
            'logo' => $logo
        ]);
    }

    public function extractYear($year)
    {
        if ($year[0]["date"] == null) {
            $year = "2010";
        } else {
            $year = strtok($year[0]["date"], '-');
        }

        return $year;
    }

    /**
     * @Route("/establishment/minStageYear", name="min_stage_year")
     */
    public function getOldestStageYear()
    {
        $session = new Session();
        $idEstablishment = $session->get('etabid');
        $repository_stage = $this->getDoctrine()->getRepository(ConventionStage::class);
        $cov = $repository_stage->findOldestYear($idEstablishment);
        $year = $this->extractYear($cov);
        return $this->json(array("data"=>$year));
    }

    /**
     * @Route("/establishment/countStageEachYear", name="count_stage_each_year")
     */
    public function getCountStageEachYear()
    {
        $session = new Session();
        $idEstablishment = $session->get('etabid');
        $repository_stage = $this->getDoctrine()->getRepository(ConventionStage::class);
        $year = $repository_stage->findOldestYear($idEstablishment);
        $year = $this->extractYear($year);
        $current_year = date("Y"); // Année courante
        $count_stage_each_year_array = array();

        for ($i = $year; $i <= $current_year; $i++) {
            $count_stage_one_year = $repository_stage->countStageForOneYear($idEstablishment, $i);
            array_push($count_stage_each_year_array, $count_stage_one_year[0]['nbStage']);
        }

        return $this->json(array("data"=>$count_stage_each_year_array));
    }

    /**
     * @Route("/establishment/countStageMoneyEachYear", name="count_stage_money_each_year")
     */
    public function getCountStageMoneyEachYear()
    {
        $session = new Session();
        $idEstablishment = $session->get('etabid');
        $repository_stage = $this->getDoctrine()->getRepository(ConventionStage::class);
        $year = $repository_stage->findOldestYear($idEstablishment);
        $year = $this->extractYear($year);
        $current_year = date("Y"); // Année courante
        $count_stage_each_year_array = array();

        for ($i = $year; $i <= $current_year; $i++) {
            $count_stage_one_year = $repository_stage->countStageMoneyForOneYear($idEstablishment, $i);
            array_push($count_stage_each_year_array, $count_stage_one_year[0]['nbStage']);
        }

        return $this->json(array("data"=>$count_stage_each_year_array));
    }

    /**
     * @Route("/establishment/minApprentissageYear", name="min_apprentissage_year")
     */
    public function getOldestApprentissageYear()
    {
        $session = new Session();
        $idEstablishment = $session->get('etabid');
        $repository_apprenticeship = $this->getDoctrine()->getRepository(Apprentissage::class);
        $app = $repository_apprenticeship->findOldestYear($idEstablishment);
        $year = $this->extractYear($app);
        return $this->json(array("data"=>$year));
    }

    /**
     * @Route("/establishment/countApprenticeshipEachYear", name="count_apprenticeship_each_year")
     */
    public function getCountApprenticeshipEachYear()
    {
        $session = new Session();
        $idEstablishment = $session->get('etabid');
        $repository_apprenticeship = $this->getDoctrine()->getRepository(Apprentissage::class);
        $year = $repository_apprenticeship->findOldestYear($idEstablishment);
        $year = $this->extractYear($year);
        $current_year = date("Y"); // Année courante
        $count_apprenticeship_each_year_array = array();

        // Over each years
        for ($i = $year; $i <= $current_year; $i++) {
            $count_apprenticeship_one_year = $repository_apprenticeship->countApprenticeshipForOneYear($idEstablishment, $i);
            array_push($count_apprenticeship_each_year_array, $count_apprenticeship_one_year[0]['nbApprenticeship']);
        }

        return $this->json(array("data"=>$count_apprenticeship_each_year_array));
    }

    public function checkIfForumCreateOrNot($type_forum): array
    {
        $repository_forum = $this->getDoctrine()->getRepository(Forum::class);

        foreach ($type_forum as $key=>$type) {
            $forum = $repository_forum->checkIfForumExist($type->getId());

            if (count($forum) == 0) {
                unset($type_forum[$key]); // Supprime les types de forum du tableau quand aucun forum de ce type n'a été ajouté.
            }
        }
        return $type_forum;
    }

    public function fillYearForumUntilToday($type_forum): array
    {
        $years_array_all_forum = array(); // Contiendra l'ensemble des années pour chacun des types de forum (tableau deux dimensions)
        $repository_forum = $this->getDoctrine()->getRepository(Forum::class);

        foreach ($type_forum as $key=>$type) {
            $forum = $repository_forum->getOldestForum($type->getLibelleTypeForum()); // Récupération de l'année la plus ancienne (forum)

            $oldest_year = strtok($forum[0]["date"], '-'); // Extraire l'année de la date reçu
            $current_year = date("Y"); // Année courante

            $year_array_one_forum = array();

            for ($i = $oldest_year; $i <= $current_year; $i++) {
                array_push($year_array_one_forum, $i);
            }

            array_push($years_array_all_forum, $year_array_one_forum);
        }
        return $years_array_all_forum;
    }

    public function fillPathLogo($type_forum, $years_forum): array
    {
        $logo_array_all_forum = array(); // Contiendra les chemins des logos pour l'ensemble des année pour chaque forum
        $repository_forum = $this->getDoctrine()->getRepository(Forum::class);

        foreach ($type_forum as $key=>$type) {
            $logo_array_one_forum = array();
            foreach ($years_forum[$key] as $year) {
                $one_path = $repository_forum->checkIfForumByYear($type, $year);
                array_push($logo_array_one_forum, $one_path);
            }
            array_push($logo_array_all_forum, $logo_array_one_forum);
        }

        return $logo_array_all_forum;
    }

    public function getIdEnterpriseForOneEtablishment($idEstablishment)
    {
        $repository_establishment = $this->getDoctrine()->getRepository(Etablissement::class);
        $idEnterprise = $repository_establishment->getEnterpriseByEtablishment($idEstablishment);
        return $idEnterprise[0]['id'];
    }

    /**
     * @Route("/establishment/minTaxeYear", name="min_taxe_year")
     */
    public function getOldestTaxeYear()
    {
        $session = new Session();
        $idEstablishment = $session->get('etabid');
        $idEnterprise = $this->getIdEnterpriseForOneEtablishment($idEstablishment);
        $repository_taxe = $this->getDoctrine()->getRepository(VerseTaxeApprentissage::class);
        $cov = $repository_taxe->findOldestYear($idEnterprise);
        $year = $this->extractYear($cov);
        return $this->json(array("data"=>$year));
    }

    /**
     * @Route("/establishment/countTaxeEachYear", name="count_taxe_each_year")
     */
    public function countTaxeEachYear()
    {
        $session = new Session();
        $idEstablishment = $session->get('etabid');
        $idEnterprise = $this->getIdEnterpriseForOneEtablishment($idEstablishment);
        $repository_taxe = $this->getDoctrine()->getRepository(VerseTaxeApprentissage::class);
        $year = $repository_taxe->findOldestYear($idEnterprise);
        $year = $this->extractYear($year);
        $current_year = date("Y"); // Année courante
        $count_taxe_each_year_array = array();

        // Over each years
        for ($i = $year; $i <= $current_year; $i++) {
            $count_taxe_one_year = $repository_taxe->countTaxeEachYear($idEnterprise, $i);
            if ($count_taxe_one_year[0]['amount'] == null) {
                $count_taxe_one_year[0]['amount'] = 0;
            }
            array_push($count_taxe_each_year_array, $count_taxe_one_year[0]['amount']);
        }

        return $this->json(array("data"=>$count_taxe_each_year_array));
    }

    /**
     * @Route("/establishment/countTaxeEachYear/{libelleDepartment}", name="count_taxe_each_year_per_department")
     */
    public function countTaxeEachYearByDepartment($libelleDepartment)
    {
        $session = new Session();
        $idEstablishment = $session->get('etabid');
        $idEnterprise = $this->getIdEnterpriseForOneEtablishment($idEstablishment);
        $repository_taxe = $this->getDoctrine()->getRepository(VerseTaxeApprentissage::class);
        $year = $repository_taxe->findOldestYear($idEnterprise);
        $year = $this->extractYear($year);
        $current_year = date("Y"); // Année courante
        $count_taxe_each_year_array = array();

        // Over each years
        for ($i = $year; $i <= $current_year; $i++) {
            $count_taxe_one_year = $repository_taxe->countTaxeEachYearForOneDepartment($idEnterprise, $i, $libelleDepartment);
            if ($count_taxe_one_year[0]['amount'] == null) {
                $count_taxe_one_year[0]['amount'] = 0;
            }
            array_push($count_taxe_each_year_array, $count_taxe_one_year[0]['amount']);
        }

        return $this->json(array("data"=>$count_taxe_each_year_array));
    }
}
