<?php

namespace App\Controller;

use App\Entity\PartageExperience;
use App\Form\PartageExperienceType;
use App\Repository\PartageExperienceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/partage/experience")
 */
class PartageExperienceController extends AbstractController
{
    /**
     * @Route("/", name="partage_experience_index", methods={"GET"})
     */
    public function index(PartageExperienceRepository $partageExperienceRepository): Response
    {
        return $this->render('partage_experience/index.html.twig', [
            'partage_experiences' => $partageExperienceRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="partage_experience_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $partageExperience = new PartageExperience();
        $form = $this->createForm(PartageExperienceType::class, $partageExperience);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($partageExperience);
            $entityManager->flush();

            return $this->redirectToRoute('partage_experience_index');
        }

        return $this->render('partage_experience/new.html.twig', [
            'partage_experience' => $partageExperience,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="partage_experience_show", methods={"GET"})
     */
    public function show(PartageExperience $partageExperience): Response
    {
        return $this->render('partage_experience/show.html.twig', [
            'partage_experience' => $partageExperience,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="partage_experience_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PartageExperience $partageExperience): Response
    {
        $form = $this->createForm(PartageExperienceType::class, $partageExperience);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('partage_experience_index');
        }

        return $this->render('partage_experience/edit.html.twig', [
            'partage_experience' => $partageExperience,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="partage_experience_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PartageExperience $partageExperience): Response
    {
        if ($this->isCsrfTokenValid('delete'.$partageExperience->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($partageExperience);
            $entityManager->flush();
        }

        return $this->redirectToRoute('partage_experience_index');
    }
}
