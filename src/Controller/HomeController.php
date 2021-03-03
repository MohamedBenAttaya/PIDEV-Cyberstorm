<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\Reclamation;
use App\Form\EvenementType;
use App\Form\ReclamationType;
use App\Repository\EvenementRepository;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


   /**
    * @Route("/addevent", name="addevents")
    */
    public function new(Request $request): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($evenement);
            $entityManager->flush();

            return $this->redirectToRoute('showEvent');
        }

        return $this->render('evenement/addEvent.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/afficheEvent", name="showEvent", methods={"GET"})
     */
    public function indexEvent(EvenementRepository $evenementRepository): Response
    {
        return $this->render('evenement/indexEvent.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}/modifi", name="eventModif", methods={"GET","POST"})
     */
    public function edit(Request $request, Evenement $evenement): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('showEvent');
        }

        return $this->render('evenement/EventEdit.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}/modifia", name="eventModifAdmin", methods={"GET","POST"})
     */
    public function editEventAdmin(Request $request, Evenement $evenement): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('showEventA');
        }

        return $this->render('home_admin/EventEditAdmin.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/addrecla", name="newRecla", methods={"GET","POST"})
     */
    public function newReclamation(Request $request): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('showRecla');
        }

        return $this->render('reclamation/addRecla.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/afficheRecla", name="showRecla", methods={"GET"})
     */
    public function indexReclamation(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/indexRecla.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="editRecla", methods={"GET","POST"})
     */
    public function editReclamation(Request $request, Reclamation $reclamation): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('showRecla');
        }

        return $this->render('reclamation/editReecla.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}/edits", name="editReclaAdmin", methods={"GET","POST"})
     */
    public function editReclamationAdmin(Request $request, Reclamation $reclamation): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('showReclaA');
        }

        return $this->render('home_admin/editReeclaA.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/HAdmin", name="home_admin")
     */
    public function indexHomeAdmin(): Response
    {
        return $this->render('home_admin/index.html.twig', [
            'controller_name' => 'HomeAdminController',
        ]);
    }

    /**
     * @Route("/afficheReclaA", name="showReclaA", methods={"GET"})
     */
    public function indexReclamationAdm(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('home_admin/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }
    /**
     * @Route("/afficheEventA", name="showEventA", methods={"GET"})
     */
    public function indexEventAdm(EvenementRepository $evenementRepository): Response
    {
        return $this->render('home_admin/eventAdmin.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclamation_delete_Admin", methods={"DELETE"})
     */
    public function deleteReclamationAdmin(Request $request, Reclamation $reclamation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('showReclaA');
    }

    /**
     * @Route("/{id}", name="evenement_delete_adm", methods={"DELETE"})
     */
    public function deleteEveAdm(Request $request, Evenement $evenement, EvenementRepository $evenementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->render('home_admin/eventAdmin.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }
}
