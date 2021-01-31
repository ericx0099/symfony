<?php

namespace App\Controller;

use App\Entity\Jugador;
use App\Entity\Torneig;
use App\Entity\User;
use App\Form\TorneigType2;
use App\Form\TournAddJug;
use App\Repository\JugadorRepository;
use App\Repository\TorneigRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/torneigadmin")
 */
class TorneigController extends AbstractController
{
    /**
     * @Route("/", name="torneig_index", methods={"GET"})
     */
    public function index(TorneigRepository $torneigRepository): Response
    {
        return $this->render('torneig/index.html.twig', [
            'torneigs' => $torneigRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="torneig_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $torneig = new Torneig();
        $form = $this->createForm(TorneigType2::class, $torneig);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($torneig);
            $entityManager->flush();

            return $this->redirectToRoute('torneig_index');
        }

        return $this->render('torneig/new.html.twig', [
            'torneig' => $torneig,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/blank", name="torneig_blank", methods={"GET","POST"})
     */
    public function createBlank(Request $request,TorneigRepository $torneigRepository, SecurityController $securityController) : Response{
        $torneig = new Torneig();
        $torneig->setStatus("Blank");
        $em = $this->getDoctrine()->getManager();
        $torneig->setPropietari($securityController->getUserLogged());
        $em->persist($torneig);
        $em->flush();

        $torneigs = $torneigRepository->findAll();
        foreach ($torneigs as $pos) {
            if($pos->getStatus() == "Blank"){
                $torneig = $pos;
                $torneig->setStatus("");
                $em->persist($torneig);
                $em->flush();
            }
        }

        /*return $this->render('torneig/index.html.twig',[
            'torneig' => $torneig,
            'torneigs' => $torneigRepository->findAll(),

        ]);*/

        return $this->redirectToRoute("torneig_addJugadors",['id'=>$torneig->getId()]);
    }

    /**
     * @Route("/{id}", name="torneig_show", methods={"GET"})
     */
    public function show(Torneig $torneig): Response
    {
        return $this->render('torneig/show.html.twig', [
            'torneig' => $torneig,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="torneig_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Torneig $torneig): Response
    {
        $form = $this->createForm(TorneigType2::class, $torneig);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('torneig_index');
        }

        return $this->render('torneig/edit.html.twig', [
            'torneig' => $torneig,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}/addJugadors", name="torneig_addJugadors", methods={"GET","POST"})
     */
    public function addJugadors(Request $request, Torneig $torneig,JugadorRepository $jugadorRepository,TorneigRepository $torneigRepository): Response
    {
        $a = null;
        $action = null;
        if (isset($_POST["idJug"]) && isset($_POST["action"])) {
            $a = $_POST["idJug"];
            $action = $_POST["action"];
        }
       $newTourn = $torneigRepository->findOneBy(
            array('id' =>$torneig->getId())
        );
        if ($a && $action) {
            if ($action == 'delete') {


                $x = 0;
                foreach ($newTourn->getTheParticipants() as $p) {
                    if ($p->getID() == $a) {
                        /*if (array_key_exists($x, $newTourn->getTheParticipants())) {*/
                            /*     echo 'sdf'.$torneig->getTheParticipants()[$x]->toString();*/
                        $newTourn->removeFromTourn($p);
                        break;
                        /*}*/

                    }

                }


                $em = $this->getDoctrine()->getManager();
                $em->persist($newTourn);
                $em->flush();
                $tor = $em->find(Torneig::class, $newTourn->getId());
                return $this->render('torneig/addJug.html.twig', [
                    'jugadors' => $jugadorRepository->findAll(),
                    'torneig' => $newTourn,
                    'jugadorsInTournament' => $newTourn->getTheParticipants(),
                    'bool' => "cert1"
                ]);
            }
            if ($action == 'add') {
                foreach ($torneig->getTheParticipants() as $participant) {
                    if ($participant->getId() == $_POST["idJug"]) {
                        return $this->redirectToRoute('torneig_addJugadors', ['id' => $torneig->getId()]);
                    }
                }
                $rep = $this->getDoctrine()->getRepository(Jugador::class);

                $array = $torneig->getTheParticipants();
                $array[] = $rep->findOneBy(
                    array('id' => $_POST["idJug"])
                );
                $torneig->setTheParticipants($array);
                $em = $this->getDoctrine()->getManager();
                $em->persist($torneig);
                $em->flush();
                return $this->render('torneig/addJug.html.twig', [
                    'jugadors' => $jugadorRepository->findAll(),
                    'torneig' => $torneig,
                    'jugadorsInTournament' => $torneig->getTheParticipants(),
                    'bool' => 'kek91'

                ]);
            }


        }
        return $this->render('torneig/addJug.html.twig', [
            'jugadors' => $jugadorRepository->findAll(),
            'torneig' => $torneig,
            'jugadorsInTournament' => $torneig->getTheParticipants(),
            'bool' => 'f'
        ]);


    }

        /**
     * @Route("/{id}", name="torneig_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Torneig $torneig): Response
    {
        if ($this->isCsrfTokenValid('delete'.$torneig->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($torneig);
            $entityManager->flush();
        }
        return $this->redirectToRoute('user_torneigos');
    }


    /**
     * @Route("{id}/{idJ}/deleteJugador", name="torneig_deleteJugador", methods={"GET","POST"})
     */
    public function deleteJugador(Torneig $torneig, Jugador $jugador,JugadorRepository $jugadorRepository)
    {

        $action = null;
        if (isset($_POST["action"])) {
            $action = $_POST["action"];

        }
        if ($action == 'delete') {
            $torneig->removeFromTourn($jugador);

            $em = $this->getDoctrine()->getManager();
            $em->persist($torneig);
            $em->flush();
            $tor = $em->find(Torneig::class, $torneig->getId());
            return $this->render('torneig/addJug.html.twig', [
                'jugadors' => $jugadorRepository->findAll(),
                'torneig' => $tor,
                'jugadorsInTournament' => $torneig->getTheParticipants(),
                'bool' => "cert"

            ]);
        }

        if ($action == 'add') {
            foreach($torneig->getTheParticipants() as $participant){
                if($participant->getId()== $_POST["idJug"]){
                    return $this->redirectToRoute('torneig_addJugadors',['id'=>$torneig->getId()]);
                }
            }
            $rep = $this->getDoctrine()->getRepository(Jugador::class);

            $array = $torneig->getTheParticipants();
            $array[] = $rep->findOneBy(
                array('id'=>$jugador->getId())
            );
            $torneig->setTheParticipants($array );
            $em = $this->getDoctrine()->getManager();
            $em->persist($torneig);
            $em->flush();
            return $this->render('torneig/addJug.html.twig', [
                'jugadors' => $jugadorRepository->findAll(),
                'torneig' => $torneig,
                'jugadorsInTournament'=>$torneig->getTheParticipants(),
                'bool' =>'kek91'

            ]);
        }


    }


    /**
     * @Route("{id}/rondes", name="torneig_gestiorondes", methods={"GET","POST"})
     */
    public function gestioRondes(Request $request, Torneig $torneig) : Response
    {
        return $this->render('torneig/rondes.html.twig',[
            'torneig' => $torneig

        ]);
    }
    /**
     * @Route("/{id}/start", name="torneig_start", methods={"GET","POST"})
     */
    public function startTourn(Request $request,Torneig $torneig){
        return $this->render('torneig/go.html.twig',[
            'torneig' => $torneig,
            /*     'dataa' =>$torneig->getData()->format('Y-m-d')*/
        ]);
    }
}
