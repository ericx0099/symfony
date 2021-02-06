<?php

namespace App\Controller;

use App\Entity\Ronda;
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
     * @Route("/ronda/{id}", name="ronda_profile")
     */
    public function round_profile(Request $request, Ronda $ronda): Response
    {
        return $this->render('ronda/profile.html.twig', [
            'ronda' => $ronda,
        ]);
    }

    /**
     * @Route("/ronda/{id}", name="ronda_profile")
     */


}
