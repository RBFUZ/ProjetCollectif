<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Forum;
use App\Entity\Conference;
use App\Entity\Apprentissage;
use App\Entity\Stage;
use \DateTime;


class MainPageController extends Controller
{
	/**
     * @Route("/index", name="index")
     */
    public function index()
    {
        $currentDate = new DateTime();
        $user = "User / Admin";

        /************ CONFERENCE ************/
        $currentDateConf = new DateTime('1900-01-01');
        $currentConf = array();
        $currentPastConf = array();
        $currentFutureConf = array();

        //get all conf from database
        $repository = $this->getDoctrine()->getRepository(Conference::class);
        $conferences = $repository->findAll();

        //get date of the most reccent conf
        foreach($conferences as $conference){
            if($currentDateConf < $conference->getDateconference()){
            $currentDateConf = $conference->getDateconference();
          }
        }

        //get past and future conf from the current date
        foreach($conferences as $conference){
          if(strcmp($currentDateConf->format('Y'),$conference->getDateconference()->format('Y')) == 0){
            $currentConf[] = $conference;
            if($conference->getDateconference() < $currentDate){
              $currentPastConf[] = $conference;
            }elseif($conference->getDateconference() > $currentDate){
              $currentFutureConf[] = $conference;
            }
          }
        }


        /************ ENTERPRISE ************/

        // get all enterprises
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT count(*) as count FROM entreprise");
        $statement->execute();
        $enterprisesCount = $statement->fetchAll();

        // get last year stage
        $statement = $connection->prepare("SELECT MAX(YEAR(date_debut_stage)) as latestyear FROM stage");
        $statement->execute();
        $latestyearinternship = $statement->fetchAll();

        // get best enterprise by stage
        $statement = $connection->prepare("SELECT nom_entreprise, count(convention_stage.id) AS stage_count FROM convention_stage, stage, etablissement, entreprise WHERE convention_stage.id_stage = stage.id AND convention_stage.id_etablissement = etablissement.id AND etablissement.id_entreprise = entreprise.id GROUP BY id_entreprise ORDER BY count(id_entreprise ) DESC LIMIT 3");
        $statement->execute();
        $top3Enterprise = $statement->fetchAll();

        // get best enterprise by Apprentissage
        $statement = $connection->prepare("SELECT nom_entreprise, count(apprentissage.id) AS apprenticeship_count FROM apprentissage, etablissement, entreprise  WHERE apprentissage.id_etablissement = etablissement.id AND etablissement.id_entreprise = entreprise.id GROUP BY id_entreprise ORDER BY count(id_entreprise ) DESC LIMIT 3");
        $statement->execute();
        $top3Apprenticeship = $statement->fetchAll();

        // get best enterprise by forum
        $statement = $connection->prepare("SELECT nom_entreprise, count(participation_forum.id) AS forum_count FROM participation_forum, etablissement, entreprise  WHERE participation_forum.id_etablissement = etablissement.id AND etablissement.id_entreprise = entreprise.id GROUP BY id_entreprise ORDER BY count(id_entreprise ) DESC LIMIT 3");
        $statement->execute();
        $top3forum = $statement->fetchAll();

        //get best entreprise by conference
        $statement = $connection->prepare("SELECT nom_entreprise, count(conference.id) AS conference_count FROM conference, etablissement, entreprise  WHERE conference.id_etablissement = etablissement.id AND etablissement.id_entreprise = entreprise.id GROUP BY id_entreprise ORDER BY count(id_entreprise ) DESC LIMIT 3");
        $statement->execute();
        $top3conference = $statement->fetchAll();



        /************ APPRENTICESHIP ************/

        //last year
        $statement = $connection->prepare("SELECT MAX(YEAR(date_debut_apprentissage)) as latestyear FROM apprentissage");
        $statement->execute();
        $currentYearApp = $statement->fetchAll();



        //get count of all apprenticeship
        $statement = $connection->prepare("CALL `display_apprenticeship_stats_total`(@p0)");
        $statement->execute();
        $statement = $connection->prepare("SELECT @p0 AS `po_total`");
        $statement->execute();
        $po_total = $statement->fetchColumn();

        // get data from the current year
        $po_total_Current = 0;
        $po_ongoing = 0;
        $po_finished = 0;
        $po_tocome = 0;

        if($currentDateApp!=NULL){
            $statement = $connection->prepare("CALL `display_apprenticeship_stats_current_year`('$currentDateApp', @p1, @p2, @p3, @p4)");
            $statement->execute();
            $statement = $connection->prepare("SELECT @p1 AS `po_total`, @p2 AS `po_ongoing`, @p3 AS `po_finished`, @p4 AS `po_tocome`");
            $statement->execute();
            $res = $statement->fetchAll();
            $po_total_Current = $res[0]['po_total'];
            $po_ongoing = $res[0]['po_ongoing'];
            $po_finished = $res[0]['po_finished'];
            $po_tocome = $res[0]['po_tocome'];
        }


        /************ INTERNSHIP ************/
        // get last date internship
        $statement = $connection->prepare("SELECT MAX(date_debut_stage) as latestyear FROM stage");
        $statement->execute();
        $result = $statement->fetchAll();

        $currentDateInternship = $result[0]['latestyear'];

        //last year
        $statement = $connection->prepare("SELECT MAX(YEAR(date_debut_stage)) as latestyear FROM stage");
        $statement->execute();
        $currentYearInternship = $statement->fetchAll();

        //get count of all internship
        $statement = $connection->prepare("CALL `display_internship_stats_total`(@p0, @p1, @p2)");
        $statement->execute();
        $statement = $connection->prepare("SELECT @p0 AS `po_total`, @p1 AS `po_france`, @p2 AS `po_abroad`");
        $statement->execute();
        $res = $statement->fetchAll();

        $po_total_Int = $res[0]['po_total'];
        $po_france = $res[0]['po_france'];
        $po_abroad = $res[0]['po_abroad'];

        // get data from the current year
        $po_total_Current_Int = 0;
        $po_total_ongoing = 0;
        $po_france_ongoing = 0;
        $po_abroad_ongoing = 0;
        $po_total_finished = 0;
        $po_france_finished = 0;
        $po_abroad_finished = 0;
        $po_total_tocome = 0;
        $po_france_tocome = 0;
        $po_abroad_tocome = 0;
        if($currentDateInternship!=NULL){
            $statement = $connection->prepare("CALL `display_internship_stats_current_year`('$currentDateInternship', @p1, @p2, @p3, @p4, @p5, @p6, @p7, @p8, @p9, @p10)");
            $statement->execute();
            $statement = $connection->prepare("SELECT @p1 AS `po_total`, @p2 AS `po_total_ongoing`, @p3 AS `po_france_ongoing`, @p4 AS `po_abroad_ongoing`, @p5 AS `po_total_finished`,
          @p6 AS `po_france_finished`, @p7 AS `po_abroad_finished`, @p8 AS `po_total_tocome`, @p9 AS `po_france_tocome`, @p10 AS `po_abroad_tocome`");
            $statement->execute();
            $res = $statement->fetchAll();
            $po_total_Current_Int = $res[0]['po_total'];
            $po_total_ongoing = $res[0]['po_total_ongoing'];
            $po_france_ongoing = $res[0]['po_france_ongoing'];
            $po_abroad_ongoing = $res[0]['po_abroad_ongoing'];
            $po_total_finished = $res[0]['po_total_finished'];
            $po_france_finished = $res[0]['po_france_finished'];
            $po_abroad_finished = $res[0]['po_abroad_finished'];
            $po_total_tocome = $res[0]['po_total_tocome'];
            $po_france_tocome = $res[0]['po_france_tocome'];
            $po_abroad_tocome = $res[0]['po_abroad_tocome'];
        }


        // print_r($res);
        // echo($top3Enterprise);



        return $this->render('index/index.html.twig', array(
          'yearConference' => $currentDateConf->format('Y'),
          'countConf' => count($conferences),
          'currentConf' => count($currentConf),
          'countPastConf' => count($currentPastConf),
          'countFutureConf' => count($currentFutureConf),
          'enterpriseCount' => $enterprisesCount[0]['count'],
          'top3enterprise' => $top3Enterprise,
          'top3Apprenticeship'=> $top3Apprenticeship,
          'top3forum' => $top3forum,
          'top3conference' => $top3conference,
          'countApp' => $po_total,
          'currentYearApp' => $currentYearApp[0]['latestyear'],
          'totalCurrentApp' => $po_total_Current,
          'ongoingApp' => $po_ongoing,
          'finishedApp' => $po_finished,
          'tocomeApp' => $po_tocome,
          'countInt' => $po_total_Int,
          'countFranceInt' => $po_france,
          'countAbroadInt' => $po_abroad,
          'countCurrentInt' => $po_total_Current_Int,
          'totalOngoing' => $po_total_ongoing,
          'ongoingFr' => $po_france_ongoing,
          'ongoingAb' => $po_abroad_ongoing,
          'countFinished' => $po_total_finished,
          'finishedFr' => $po_france_finished,
          'finishedAb' => $po_abroad_finished,
          'countToCome' => $po_total_tocome,
          'tocomeFr' => $po_france_tocome,
          'tocomeAb' => $po_abroad_tocome,
          'currentYearInt' => $currentYearInternship[0]['latestyear'],
        ));
    }
}
