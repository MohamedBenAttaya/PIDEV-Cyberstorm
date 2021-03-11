<?php

namespace App\Controller;

use App\Entity\Hotel;
use App\Form\HotelType;
use App\Repository\HotelRepository;
use App\Repository\PromotionRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/hotel")
 */
class HotelController extends AbstractController
{
    /**
     * @Route("/", name="hotel_all")
     */
    public function index(Request $request,PaginatorInterface $paginator): Response
    {
        // Retrieve the entity manager of Doctrine
        $data=$request->get('data');
        $em = $this->getDoctrine()->getManager();

        // Get some repository of data, in our case we have an Hotels entity
        $HotelRepository = $em->getRepository(Hotel::class);

        // Find all the data on the Hotels table, filter your query as you need
        $allHotelQuery = $HotelRepository->createQueryBuilder('Hotel')
            ->orWhere('Hotel.Nom Like :Nom ')
            ->orWhere('Hotel.adresse Like :Nom ')
            ->setParameter('Nom', '%'.$data.'%')
            ->getQuery();

        // Paginate the results of the query
        $hotels = $paginator->paginate(
        // Doctrine Query, not results
            $allHotelQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            3
        );

        // Render the twig view
        return $this->render('hotel/allhotel.html.twig', [
            'hotels' => $hotels
        ]);
    }

    /**
     * @Route("/new", name="hotel_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $hotel = new Hotel();
        $form = $this->createForm(HotelType::class, $hotel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $hotel->getImage();
            if ($file != null) {
                $filename = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_directory'),$filename);
                $hotel->setImage($filename);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($hotel);
            $entityManager->flush();

            return $this->redirectToRoute('profil');
        }

        return $this->render('hotel/new.html.twig', [
            'hotel' => $hotel,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="hotel_show", methods={"GET"})
     */
    public function show(Hotel $hotel,PromotionRepository $promotionRepository): Response
    {
        return $this->render('hotel/show.html.twig', [
            'hotel' => $hotel,
            'promotions' => $promotionRepository->findBy(array('hotel'=>$hotel)),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="hotel_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Hotel $hotel): Response
    {
        $form = $this->createForm(HotelType::class, $hotel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $hotel->getImage();
            if ($file != null) {
                $filename = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_directory'),$filename);
                $hotel->setImage($filename);
            }

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('profil');
        }

        return $this->render('hotel/edit.html.twig', [
            'hotel' => $hotel,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="hotel_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Hotel $hotel): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hotel->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($hotel);
            $entityManager->flush();
        }
        return $this->redirectToRoute('profil');
    }

    /**
     * @Route("/triH", name="triH")
     */
    public function Tri(Request $request,HotelRepository $repository): Response
    {
        // Retrieve the entity manager of Doctrine
        $order=$request->get('type');
        $min=$request->get('min');
        $max=$request->get('max');
        if($order== "Croissant"){
            $hotels = $repository->tri_asc($min,$max);
        }
        else {
            $hotels = $repository->tri_desc($min,$max);
        }

        // Render the twig view
        return $this->render('hotel/allhotel_tri.html.twig', [
            'hotels' => $hotels
        ]);
    }

}
