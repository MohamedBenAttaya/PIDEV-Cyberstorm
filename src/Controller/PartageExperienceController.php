<?php

namespace App\Controller;

use App\Entity\PartageExperience;
use App\Form\PartageExperienceType;
use App\Repository\CommentaireRepository;
use App\Repository\PartageExperienceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/partage/experience")
 */
class PartageExperienceController extends AbstractController
{
    /**
     * @Route("/", name="partage_experience_index", methods={"GET"})
     */
    public function index(PartageExperienceRepository $partageExperienceRepository,Request $request, PaginatorInterface $paginator): Response
    {
        // Retrieve the entity manager of Doctrine
        $em = $this->getDoctrine()->getManager();

        // Get some repository of data, in our case we have an Appointments entity
        $PartageExperienceRepository = $em->getRepository(PartageExperience::class);

        // Find all the data on the Appointments table, filter your query as you need
        $allPartageExperience = $PartageExperienceRepository->createQueryBuilder('p')
            ->getQuery();

        // Paginate the results of the query
        $partage_experiences = $paginator->paginate(
        // Doctrine Query, not results
            $allPartageExperience,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5);

        return $this->render('partage_experience/index.html.twig', [
            'partage_experiences' => $partage_experiences
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
            $file = $partageExperience->getImage();
            if ($file != null) {
                $filename = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_directory'),$filename);
                $partageExperience->setImage($filename);
            }
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
    public function show(PartageExperience $partageExperience,CommentaireRepository $commentaire): Response
    {
        return $this->render('partage_experience/show.html.twig', [
            'partage_experience' => $partageExperience,
            'commentaires' => $commentaire->findBy(array('partageexperience'=>$partageExperience))
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
            $file = $partageExperience->getImage();
            if ($file != null) {
                $filename = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_directory'),$filename);
                $partageExperience->setImage($filename);
            }
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

    /**
     * @Route("/recherche",name="recherche")
     */
    function  Recherche(PartageExperienceRepository $repository,Request $request,PaginatorInterface $paginator){
        $data=$request->get('search');
        $partageExperience=$repository->findBy(['destination'=>$data]);

        // Retrieve the entity manager of Doctrine
        $em = $this->getDoctrine()->getManager();

        // Get some repository of data, in our case we have an Appointments entity
        $PartageExperienceRepository = $em->getRepository(PartageExperience::class);



        // Paginate the results of the query
        $partage_experiences = $paginator->paginate(
        // Doctrine Query, not results
            $partageExperience,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5);

        return $this->render("partage_experience/index.html.twig", [
            'partage_experiences' => $partage_experiences]);
    }

    /**
     * @param PartageExperienceRepository $repository
     * @return Response
     * @Route("/DQL")
     */
    function OrderByNameDQL(PartageExperienceRepository $repository){
        $partageExperience=$repository->OrderByNameQB();
        return $this->render('partage_experience/index.html.twig',
        ['partage_experience'=>$partageExperience]);
    }

    /**
     * @Route("/triH", name="triH")
     */
    public function Tri(Request $request,PartageExperienceRepository $repository): Response
    {
        // Retrieve the entity manager of Doctrine
        $order=$request->get('type');
        $destination=$request->get('destination');
        if($order== "Croissant"){
            $partageExperience = $repository->tri_asc($destination);
        }
        else {
            $partageExperience = $repository->tri_desc($destination);
        }
        // Render the twig view
        return $this->render('partage_experience/indexTRI.html.twig', [
            'partage_experiences' => $partageExperience
        ]);
    }

    /**
     * @Route("/triD", name="triD")
     */
    public function TriDate(Request $request,PartageExperienceRepository $repository): Response
    {
        // Retrieve the entity manager of Doctrine
        $order=$request->get('type');
        $destination=$request->get('date_pub');
        if($order== "Croissant"){
            $partageExperience = $repository->date_asc($destination);
        }
        else {
            $partageExperience = $repository->date_desc($destination);
        }
        // Render the twig view
        return $this->render('partage_experience/indexTRI.html.twig', [
            'partage_experiences' => $partageExperience
        ]);
    }

}
