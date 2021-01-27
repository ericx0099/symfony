<?php

namespace App\Controller;

use App\Entity\Arbitre;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    private $passwordEncoder;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder){
        $this->passwordEncoder = $passwordEncoder;

    }
    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="user_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

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
                    return $this->render('user/new.html.twig', [
                        'user' => $user,
                        'form' => $form->createView(),
                    ]);
                }
                if(!(new GenericController)->checkNameFormat($nom) ){
                    $this->addFlash("error", "El format del Nom es incorrecte. ");
                    return $this->render('user/new.html.twig', [
                        'user' => $user,
                        'form' => $form->createView(),
                    ]);
                }
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $this->addFlash("error", "El format del Email es incorrecte.");
                    return $this->render('user/new.html.twig', [
                        'user' => $user,
                        'form' => $form->createView(),
                    ]);
                }
                if($this->checkIfEmailAvailable($email)!=null){
                    $this->addFlash("error", "L'email ja está en ús");
                    return $this->render('user/new.html.twig', [
                        'user' => $user,
                        'form' => $form->createView(),
                    ]);
                }
                if( strlen($password)>20 || strlen($password)<8 ){
                    $this->addFlash("error", "Les contrasenyes han de estar entre 8 i 20 caracters.");
                    return $this->render('user/new.html.twig', [
                        'user' => $user,
                        'form' => $form->createView(),
                    ]);
                }
                if(!(new GenericController)->validateDni($dni)){
                    $this->addFlash("error", "Format del DNI incorrecte.");
                    return $this->render('user/new.html.twig', [
                        'user' => $user,
                        'form' => $form->createView(),
                    ]);
                }

                if($this->checkIfDniAvailable($dni)!=null){
                    $this->addFlash("error", "El DNI ja está en ús.");
                    return $this->render('user/new.html.twig', [
                        'user' => $user,
                        'form' => $form->createView(),
                    ]);
                }

                $entityManager = $this->getDoctrine()->getManager();
                $user->setPassword($this->passwordEncoder->encodePassword($user,$password));
                $entityManager->persist($user);
                $entityManager->flush();

                return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"DELETE"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index');
    }
        function checkIfEmailAvailable($email){
            $rep = $this->getDoctrine()->getRepository(User::class);
            return $rep->findOneBy(
                array('email'=>$email)
            );
        }
        function checkIfDniAvailable($dni){
            $rep = $this->getDoctrine()->getRepository(User::class);
            return $rep->findOneBy(
                array('email'=>$dni)
            );
        }
}
