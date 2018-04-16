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
<<<<<<< HEAD:src/Controller/AccueilController.php
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


        /************ ENTREPRISE ************/




        return $this->render('accueil/index.html.twig', array(
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

=======
        	$user = "User / Admin";
            return $this->render('index/index.html.twig', array(
		'user' => $user,
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131:src/Controller/MainPageController.php
		));
    }
}
