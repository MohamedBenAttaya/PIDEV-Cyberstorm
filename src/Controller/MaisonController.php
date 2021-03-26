<?php

namespace App\Controller;

use App\Entity\Maison;
use App\Form\MaisonType;
use App\Repository\MaisonRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/maison")
 */
class MaisonController extends AbstractController
{
    /**
     * @Route("/", name="maison_all")
     */
    public function index(Request $request,PaginatorInterface $paginator): Response
    {
        // Retrieve the entity manager of Doctrine
        $data=$request->get('data');
        $em = $this->getDoctrine()->getManager();

        // Get some repository of data, in our case we have an Maisons entity
        $MaisonRepository = $em->getRepository(Maison::class);

        // Find all the data on the Maisons table, filter your query as you need
        $allMaisonQuery = $MaisonRepository->createQueryBuilder('Maison')
            ->orWhere('Maison.Nom Like :Nom ')
            ->orWhere('Maison.adresse Like :Nom ')
            ->setParameter('Nom', '%'.$data.'%')
            ->getQuery();

        // Paginate the results of the query
        $maisons = $paginator->paginate(
        // Doctrine Query, not results
            $allMaisonQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            3
        );

        // Render the twig view
        return $this->render('Maison/allMaison.html.twig', [
            'maisons' => $maisons
        ]);
    }

    /**
     * @Route("/new", name="maison_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $maison = new Maison();
        $form = $this->createForm(MaisonType::class, $maison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $maison->getImage();
            if ($file != null) {
                $filename = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_directory'),$filename);
                $maison->setImage($filename);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($maison);
            $entityManager->flush();

            return $this->redirectToRoute('profil');
        }

        return $this->render('maison/new.html.twig', [
            'maison' => $maison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="maison_show", methods={"GET"})
     */
    public function show(Maison $maison): Response
    {
        return $this->render('maison/show.html.twig', [
            'maison' => $maison,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="maison_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Maison $maison): Response
    {
        $form = $this->createForm(MaisonType::class, $maison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $maison->getImage();
            if ($file != null) {
                $filename = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_directory'),$filename);
                $maison->setImage($filename);
            }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('profil');
        }

        return $this->render('maison/edit.html.twig', [
            'maison' => $maison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="maison_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Maison $maison): Response
    {
        if ($this->isCsrfTokenValid('delete'.$maison->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($maison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('profil');
    }
    /**
     * @Route("/triH", name="triM")
     */
    public function Tri(Request $request,MaisonRepository $repository): Response
    {
        // Retrieve the entity manager of Doctrine
        $order=$request->get('type');
        $min=$request->get('min');
        $max=$request->get('max');
        if($order== "Croissant"){
            $maisons = $repository->tri_asc($min,$max);
        }
        else {
            $maisons = $repository->tri_desc($min,$max);
        }

        // Render the twig view
        return $this->render('maison/allmaison_tri.html.twig', [
            'maisons' => $maisons
        ]);
    }

}
