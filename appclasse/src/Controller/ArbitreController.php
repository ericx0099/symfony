<?php

namespace App\Controller;

use App\Form\PostType;

use App\Entity\Arbitre;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\GenericController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;







class ArbitreController extends AbstractController
{
    /**
     * @Route("/arbitre", name="arbitre")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ArbitreController.php',
        ]);
    }

    /**
     * @Route("/register", name="register")
     */

    public function register(Request $request): Response
    {
        $post = new Arbitre();
        $form = $this->createForm(PostType::class,$post,
            [
                'action'=>$this->generateUrl("register"),
                'method'=>'POST'
            ]
        );
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $nom = htmlspecialchars(trim($form['Nom']->getData()));
            $email = htmlspecialchars(trim($form['Email']->getData()));
            $password = htmlspecialchars(trim($form['Password']->getData()));
            $dni = htmlspecialchars(trim($form['Dni']->getData()));
            if(empty($nom) ||
                    empty($email) ||
                        empty($password) ||
                            empty($dni) )
            {
                $this->addFlash("error", "** Omple tots els Camps. **");
                return $this->render('base.html.twig', [
                    'post_form' => $form->createView()
                ]);
            }
            if(!(new GenericController)->checkNameFormat($nom) ){
                $this->addFlash("error", "El format del Nom es incorrecte. ");
                return $this->render('base.html.twig', [
                    'post_form' => $form->createView()
                ]);
            }
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $this->addFlash("error", "El format del Email es incorrecte.");
                return $this->render('base.html.twig', [
                    'post_form' => $form->createView()
                ]);
            }
            if($this->checkIfEmailAvailable($email)!=null){
                $this->addFlash("error", "L'email ja está en ús");
                return $this->render('base.html.twig', [
                    'post_form' => $form->createView()
                ]);
            }
            if( strlen($password)>20 || strlen($password)<8 ){
                $this->addFlash("error", "Les contrasenyes han de estar entre 8 i 20 caracters.");
                return $this->render('base.html.twig', [
                    'post_form' => $form->createView()
                ]);
            }
            if(!(new GenericController)->validateDni($dni)){
                $this->addFlash("error", "Format del DNI incorrecte.");
                return $this->render('base.html.twig', [
                    'post_form' => $form->createView()
                ]);
            }

            if($this->checkIfDniAvailable($dni)!=null){
                $this->addFlash("error", "El DNI ja está en ús.");
                return $this->render('base.html.twig', [
                    'post_form' => $form->createView()
                ]);
            }


            $arbitre = new Arbitre();

            $arbitre->setNom($nom)->setEmail($email)->setPassword(password_hash($password,PASSWORD_DEFAULT))->setDni($dni);
            $em = $this->getDoctrine()->getManager();
            $em->persist($arbitre);
            $em->flush();
            $this->addFlash("success","Usuari registrat correctament");




        }

        return $this->render('base.html.twig', [
            'post_form' => $form->createView()
        ]);

    }

    function checkIfEmailAvailable($email){
        $rep = $this->getDoctrine()->getRepository(Arbitre::class);
        return $rep->findOneBy(
            array('email'=>$email)
        );
    }
    function checkIfDniAvailable($dni){
        $rep = $this->getDoctrine()->getRepository(Arbitre::class);
        return $rep->findOneBy(
            array('email'=>$dni)
        );
    }


}






















