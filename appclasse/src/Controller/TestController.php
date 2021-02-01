<?php

namespace App\Controller;

use App\Entity\Jugador;
use App\Entity\Torneig;
use App\Entity\User;
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
        return $this->render('jugador/profile.html.twig', [
            'jugador' => $jugador,
            'torneigosParticipat' => $torneigosParticipat
        ]);
    }
    /**
     * @Route("/arbitre/{id}",  name="arbitre_perfil")
     */
    public function arbitreProfile(Request $request, User $user){
        return $this->render('user/profile.html.twig', [
            'user' => $user
        ]);
    }
    /**
     * @Route("/torneig/{id}",  name="torneig_perfil")
     */
    public function torneigPerfil(Request $request, Torneig $tornieg){
        return $this->render('torneig/profile.html.twig', [
            'torneig' => $tornieg
        ]);
    }
    /**
     * @Route("/torneig",  name="torneig_all_public")
     */
    public function torneigs(TorneigRepository $torneigRepository) : Response{
        return $this->render('torneig/all.html.twig', [
            'torneigos' => $torneigRepository->findAll()
        ]);
    }
}
