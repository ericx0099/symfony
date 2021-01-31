<?php

namespace App\Controller;

use App\Entity\Jugador;
use App\Repository\TorneigRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{


    /**
     * @Route("/", name="inici")
     */
    public function index() : Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/miPerfil",  name="test")
     */
    public function miPerfil(SecurityController $securityController){
        $user = $securityController->getUserLogged();
        if($user !=null){
          /**dd*/
            return $this->redirectToRoute('torneig_index');
        }
        return $this->redirectToRoute('inici');
    }

    /**
     * @Route("/misTorneos",  name="user_torneigos")
     */
    public function misTorneos(SecurityController $securityController){
        $user = $securityController->getUserLogged();
        if($user !=null){
            return $this->render('user/torneigos.html.twig', [
                'user' => $user,
            ]);
        }
        return $this->redirectToRoute('inici');

    }
    /**
     * @Route("/perfil/{id}",  name="jugador_perfil")
     */
    public function userProfile(Request $request,Jugador $jugador,TorneigRepository $torneigRepository){
        $torneigos = $torneigRepository->findAll();
        $torneigosParticipat = [];
        foreach($torneigos as $torneig){
            foreach($torneig->getTheParticipants() as $participant){
                if($participant->getId() == $jugador->getId()){
                    $torneigosParticipat[] = $torneig;
                }
            }
        }

        /*torneigosParticipat*/
        return $this->render('jugador/profile.html.twig', [
            'jugador' => $jugador,
            'torneigosParticipat' => $torneigosParticipat
        ]);
    }
}
