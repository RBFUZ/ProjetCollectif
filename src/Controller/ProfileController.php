<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ProfileType;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ProfileController extends Controller
{
    /**
     * @Route("/profile", name="profile")
     */
    public function showProfile(Request $request, UserPasswordEncoderInterface $passwordEncoder){
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getDoctrine()->getRepository(User::class)->find($this->getUser()->getId());
        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            $entityManager->flush();
            return $this->redirectToRoute('index');
        }
        return $this->render(
            'profile/index.html.twig',
            array('form' => $form->createView())
        );
    }
}
