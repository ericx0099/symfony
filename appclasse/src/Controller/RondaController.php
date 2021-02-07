<?php

namespace App\Controller;

use App\Entity\Ronda;
use App\Entity\Torneig;
use App\Repository\TorneigRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RondaController extends AbstractController
{

   /* public function index(): Response
    {
        return $this->render('ronda/index.html.twig', [
            'controller_name' => 'RondaController',
        ]);
    }*/

    /**
     * @Route("/ronda/{id}", name="ronda_profile",methods={"GET","POST"})
     */
    public function round_profile( Ronda $ronda, TorneigRepository $torneigRepository): Response
    {
        $torneigos = $torneigRepository->findAll();
        $torneigReturn = null;
        foreach($torneigos as $torneig){
            foreach($torneig->getRondes() as $rondaFor){
                if($rondaFor->getId() == $ronda->getId() ){
                    $torneigReturn = $torneig;
                    break;
                }
            }
        }
        return $this->render('ronda/profile.html.twig', [
            'ronda' => $ronda,
            'torneig' => $torneigReturn

        ]);
    }



}
