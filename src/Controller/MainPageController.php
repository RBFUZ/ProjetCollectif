<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Forum;
use App\Entity\Conference;
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

        /************ FORUM ************/
        $currentDateForum = new DateTime('1900-01-01');
        $currentForums = array();
        $currentPastForums = array();
        $currentFutureForums = array();

        //get all forums from database
        $repository = $this->getDoctrine()->getRepository(Forum::class);
        $forums = $repository->findAll();

        //get date of the most reccent forum
        foreach($forums as $forum){
            if($currentDateForum < $forum->getDatedebutforum()){
            $currentDateForum = $forum->getDatedebutforum();
          }
        }

        //get past and future forum from the current date
        foreach($forums as $forum){
          if(strcmp($currentDateForum->format('Y'),$forum->getDatedebutforum()->format('Y')) == 0){
            $currentForums[] = $forum;
            if($forum->getDatedebutforum() < $currentDate){
              $currentPastForums[] = $forum;
            }elseif($forum->getDatedebutforum() > $currentDate){
              $currentFutureForums[] = $forum;
            }
          }

        }

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




        // print_r($top3Enterprise);
        // echo($top3Enterprise);


        return $this->render('index/index.html.twig', array(
            'user' => $user,
          'yearForum' => $currentDateForum->format('Y'),
          'countForum' => count($forums),
          'currentForums' => count($currentForums),
          'countPastForums' => count($currentPastForums),
          'countFutureForums' => count($currentFutureForums),
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
        ));
    }
}
