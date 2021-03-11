<?php

namespace App\Controller;

use App\Entity\Hotel;
use App\Entity\Maison;
use App\Form\HotelType;
use App\Repository\HotelRepository;
use App\Repository\MaisonRepository;
use App\Repository\PromotionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;


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
     * @Route("/profil", name="profil", methods={"GET"})
     */
    public function indexProfil(MaisonRepository $maisonRepository,HotelRepository $hotelRepository): Response
    {
        return $this->render('Profil.html.twig', [
            'maisons' => $maisonRepository->findAll(),
            'hotels' => $hotelRepository->findAll(),
        ]);
    }
    /**
     * @Route("/homeA", name="home_admin")
     */
    public function indexAdmin(): Response
    {
        return $this->render('home_admin/index.html.twig', [
            'controller_name' => 'HomeAdminController',
        ]);
    }
    /**
     * @Route("/homeA/hotel", name="AgestionHotel")
     */
    public function indexHotel(HotelRepository $hotelRepository): Response
    {
        return $this->render('home_admin/gestionHotel.html.twig', [
            'hotels' => $hotelRepository->findAll(),
        ]);
    }
    /**
     * @Route("/homeA/suppH/{id}", name="ADeleteHotel")
     */
    public function deleteAHotel(HotelRepository $repository, $id): Response
    {
        $hotel=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($hotel);
        $em->flush();
        return $this->redirectToRoute('AgestionHotel');
    }
    /**
     * @Route("/homeA/promotion", name="AgestionPromotion")
     */
    public function indexPromotion(PromotionRepository $promotionRepository): Response
    {
        return $this->render('home_admin/gestionPromotion.html.twig', [
            'promotions' => $promotionRepository->findAll(),
        ]);
    }
    /**
     * @Route("/homeA/suppP/{id}", name="ADeletePromotion")
     */
    public function deleteAPromotion(PromotionRepository $repository, $id): Response
    {
        $promotion=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($promotion);
        $em->flush();
        return $this->redirectToRoute('AgestionPromotion');
    }
    /**
     * @Route("/homeA/maison", name="AgestionMaison")
     */
    public function indexMaison(MaisonRepository $maisonRepository): Response
    {
        return $this->render('home_admin/gestionMaison.html.twig', [
            'maisons' => $maisonRepository->findAll(),
        ]);
    }
    /**
     * @Route("/homeA/suppM/{id}", name="ADeleteMaison")
     */
    public function deleteAMaison(MaisonRepository $repository, $id): Response
    {
        $maison=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($maison);
        $em->flush();
        return $this->redirectToRoute('AgestionMaison');
    }
    /**
     * @Route("/homeA/recherche", name="recherche")
     */
    public function recherche(Request $request): Response
    {
        $data=$request->get('data');
        $em = $this->getDoctrine()->getManager();
        $hotels = $em->getRepository(Hotel::class)->search($data);
        return $this->render('home_admin/gestionHotel.html.twig', [
            'hotels' => $hotels,
        ]);
    }
    /**
     * @Route("/homeA/search", name="search",methods={"POST"})
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $name= $request->get('dat');
        $maisons = $em->getRepository(Maison::class)->search($name);

        return $this->render('home_admin/gestionMaison.html.twig', array(
            'maisons' => $maisons,
        ));
    }
    /**
     * @Route("/pdfH", name="pdf")
     */
    public function afficheReclPdf()
    {
// Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $hotels = $this->getDoctrine()->getRepository(Hotel::class)->findAll();


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('home_admin/mypdf.html.twig', [
            'hotels' => $hotels
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }

}
