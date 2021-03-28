<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Voy;
use App\Form\VoyType;
use App\Repository\VoyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/voy")
 */
class VoyController extends AbstractController
{
    /**
     * @Route("/", name="voy_index", methods={"GET"})
     */
    public function index(VoyRepository $voyRepository): Response
    {
        return $this->render('voy/index.html.twig', [
            'voys' => $voyRepository->findAll(),
        ]);
    }
    /**
     * @Route("/afficheVoyPdf", name="pdf")
     */
    public function afficheVoyPdf()
    {


        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $voy = $this->getDoctrine()->getRepository(Voy::class)->findAll();


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('voy/mypdf.html.twig', [
            'voys' =>$voy
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

    /**
     * @Route("/triVoy", name="triVoy")
     */
    public function Tri(Request $request,VoyRepository $repository): Response
    {
        // Retrieve the entity manager of Doctrine
        $order=$request->get('type');
        if($order== "Croissant"){
            $voy = $repository->tri_asc();
        }
        else {
            $voy = $repository->tri_desc();
        }
        // Render the twig view
        return $this->render('voy/index.html.twig', [
            'voys' => $voy,
        ]);
    }

    /**
     * @Route("/new", name="voy_new", methods={"GET","POST"})
     */
    public function new(Request $request,\Swift_Mailer $mailer): Response
    {
        $voy = new Voy();
        $form = $this->createForm(VoyType::class, $voy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $voy = $form->getData();
            $message = (new \Swift_Message('Nouvel évènement'))
                ->setFrom('noreplay.reservi@gmail.com')
                ->setTo($voy->getEmail())
                ->setBody(
                    $this->renderView(
                        'emails/contactEmail.html.twig',compact('voy')
                    ),
                    'text/html'
                );
            $mailer->send($message);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($voy);
            $entityManager->flush();

            return $this->redirectToRoute('voy_index');
        }


        return $this->render('voy/new.html.twig', [
            'voy' => $voy,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="voy_show", methods={"GET"})
     */
    public function show(Voy $voy): Response
    {
        return $this->render('voy/show.html.twig', [
            'voy' => $voy,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="voy_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Voy $voy): Response
    {
        $form = $this->createForm(VoyType::class, $voy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('voy_index');
        }

        return $this->render('voy/edit.html.twig', [
            'voy' => $voy,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="voy_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Voy $voy): Response
    {
        if ($this->isCsrfTokenValid('delete'.$voy->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($voy);
            $entityManager->flush();
        }

        return $this->redirectToRoute('voy_index');
    }

    /**
     * @Route("/search", name="search_voy", methods={"POST"})
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $name= $request->get('dat');
        $voy = $em->getRepository(Voy::class)->findvoybyattributs($name);

        return $this->render('voy/search.html.twig', array(
            'voys' => $voy,
        ));
    }



}
