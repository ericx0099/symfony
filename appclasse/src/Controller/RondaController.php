<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RondaController extends AbstractController
{
    /**
     * @Route("/ronda", name="ronda")
     */
    public function index(): Response
    {
        return $this->render('ronda/index.html.twig', [
            'controller_name' => 'RondaController',
        ]);
    }
}
