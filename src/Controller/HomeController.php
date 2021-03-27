<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\Reclamation;
use App\Form\EvenementType;
use App\Form\ReclamationType;
use App\Repository\AdminRepository;
use App\Repository\EvenementRepository;
use App\Repository\ReclamationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Laminas\EventManager\Event;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;



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
    public function new(Request $request,\Swift_Mailer $mailer): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $evenement->getImage();
            if ($file != null) {
                $filename = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_directory'),$filename);
                $evenement->setImage($filename);
            }


            $evenement = $form->getData();
            $message = (new \Swift_Message('Nouvel évènement'))
                ->setFrom('noreplay.reservi@gmail.com')
                ->setTo($evenement->getEmail())
                ->setBody(
                    $this->renderView(
                        'emails/contactEmail.html.twig',compact('evenement')
                    ),
                    'text/html'
                );
            $mailer->send($message);


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
     * @Route("/afficheEventProfile", name="showEventProfile")
     */
    public function indexEventProfile(Request $request,EvenementRepository $evenementRepository,PaginatorInterface $paginator): Response
    {
        $nom=$request->get('sercho');
        $event=$evenementRepository->SearchByNom($nom);
        /*---------------------*/
       /* $event=$evenementRepository->OrderByDate();*/
      /*  return $this->render('evenement/indexEventProfile.html.twig', [
            'evenements' => $event
        ]);*/

      /*  return $this->render('evenement/indexEventProfile.html.twig',[
            'evenements'=>$event
        ]);*/

      /*  $allAppoinments = $evenementRepository->findAll();*/
        $appointments = $paginator->paginate(
         /*   $allAppoinments,*/
            $event,
            $request->query->getInt('page',1),
            5
        );
        return $this->render('evenement/indexEventProfile.html.twig', [
            'appointments' => $appointments
        ]);



     /*   return $this->render('evenement/indexEventProfile.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);*/
    }

    /**
     * @param EvenementRepository $repository
     * @param $id
     * @param Request $request
     * @Route("/patrticipeEvent/{id}", name="participeevent")
     */
    public function participeEvent(EvenementRepository $repository, $id, Request $request){
        $event=$repository->find($id);
        $newNbP=$event->getNbparticipant() + 1;
        $event->setNbparticipant($newNbP);
        $this->getDoctrine()->getManager()->flush();
        $request
            ->getSession()
            ->getFlashBag()
            ->add('participe', 'votre partocipation a ete ejoute avec succes');
        return $this->redirectToRoute('showEventProfile');

    }

    /**
     * @param EvenementRepository $repository
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/depatrticipeEvent/{id}", name="departicipeevent")
     */
    public function departicipeEvent(EvenementRepository $repository, $id, Request $request){
        $event=$repository->find($id);
        $newNbP=$event->getNbparticipant() - 1;
        $event->setNbparticipant($newNbP);
        $this->getDoctrine()->getManager()->flush();
        $request
            ->getSession()
            ->getFlashBag()
            ->add('participe', 'votre partocipation a ete ejoute avec succes');
        return $this->redirectToRoute('showEventProfile');
    }

    /**
     * @Route ("/rechercho" , name="rechercho")
     */
      function Recherche(EvenementRepository $repository , Request $request){
          $data=$request->get('sercho');
       $event=$repository->findBy(['nom'=>$data]);
       return $this->render('evenement/indexEventProfile.html.twig', [
            'evenements' => $event
        ]);
      }



    /**
     * @param EvenementRepository $repository
     * @param Request $request
     * @return Response
     * @Route ("/serchNom", name="ByNomSearch")
     */
    function SearchEventByNom(EvenementRepository $repository,Request $request){
        $nom=$request->get('sercho');
        $event=$repository->SearchByNom($nom);

        return $this->render('evenement/indexEventProfile.html.twig',[
            'evenements'=>$event
        ]);
    }

    /**
     * @param EvenementRepository $repository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     * * @Route ("/ListDQL", name="trieDate")
     */

      function OrderByDate(EvenementRepository $repository,PaginatorInterface $paginator, Request $request){
          /*$event=$repository->OrderByDate();*/
          $event = $repository->LastCreationX($request->get('tri'));

          $appointments = $paginator->paginate(
          /*   $allAppoinments,*/
              $event,
              $request->query->getInt('page',1),
              5
          );
          return $this->render('evenement/indexEventProfile.html.twig', [

              'appointments' => $appointments
          ]);


          /*-----------------------*/
       /*   return $this->render('evenement/indexEventProfile.html.twig', [
              'evenements' => $event
          ]);*/
      }

    /**
     * @param EvenementRepository $repository
     * @param Request $request
     * @return Response
         * @Route ("/orderByX", name="trieX")
     */
      function OrderByX(EvenementRepository $repository, Request $request){
        /*$event=$repository->OrderByDate();*/
     /*   $evenements = $repository->LastCreationX($request->get('tri'));*/


        return $this->render('evenement/indexEventProfileX.html.twig', [

            'evenements' => $repository->LastCreationX($request->get('tri')),
        ]);
      }
    /**
     * @param EvenementRepository $repository
     * @param Request $request
     * @return Response
     * @Route ("/orderByX2", name="trieXCroissant")
     */
    function OrderByX2(EvenementRepository $repository, Request $request){
        /*$event=$repository->OrderByDate();*/
        /*   $evenements = $repository->LastCreationX($request->get('tri'));*/


        return $this->render('evenement/indexEventProfileX.html.twig', [

            'evenements' => $repository->LastCreationX2($request->get('tri')),
        ]);
    }

    /**
     * @param Request $request
     * @param NormalizerInterface $Normalizer
     * @return Response
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     * @Route("/searchStudentx ", name="searchStudentx")
     */
    public function searchEventByX(Request $request, NormalizerInterface $Normalizer){
        $repository = $this->getDoctrine()->getRepository(Evenement::class);
        $requestString=$request->get('searchValue');
        $evenements = $repository->findEventByXx($requestString);
        $jsonContent = $Normalizer->normalize($evenements,'json',['groups'=>'evenements:read']);
        $retour=json_encode($jsonContent);
        return new Response($retour);
    }

    /**
     * @param Request $request
     * @param NormalizerInterface $Normalizer
     * @return Response
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     * @Route("/searchReclax ", name="searchReclax")
     */
    public function searchReclaByX(Request $request, NormalizerInterface $Normalizer){

        $repository = $this->getDoctrine()->getRepository(Reclamation::class);
        $requestString=$request->get('searchValue');
        $reclamations=$repository->findReclamByXx($requestString);
        $jsonContent=$Normalizer->normalize($reclamations,'json',['groups'=>'reclamations:read']);
        $retour=json_encode($jsonContent);
        return new Response($retour);
    }
    /**
     * @Route("/hopeMarche", name="reclamationTTT", methods={"GET"})
     */
    public function afficheEventDynamique(EvenementRepository $repository): Response
    {
        return $this->render('evenement/indexEventSearchDynamique.html.twig', [
            'evenements' => $repository->findAll(),
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
            $file = $evenement->getImage();
            if ($file != null) {
                $filename = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_directory'),$filename);
                $evenement->setImage($filename);
            }
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
    public function newReclamation(Request $request, \Swift_Mailer $mailer): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation = $form->getData();
            $message = (new \Swift_Message('Nouvelle Réclamation'))
                ->setFrom('noreplay.reservi@gmail.com')
                ->setTo($reclamation->getEmail())
                /*->setTo('skander.mufti1@esprit.tn')*/
                ->setBody(
                    $this->renderView(
                        'emails/contactEmailRecla.html.twig',compact('reclamation')
                    ),
                    'text/html'
                );
                /*Pour Admin*/
            $messageAdm = (new \Swift_Message('Nouvelle Réclamation'))
                ->setFrom('noreplay.reservi@gmail.com')
                ->setTo('skander.mufti1@esprit.tn')
                ->setBody(
                    $this->renderView(
                        'emails/contactEmailReclaForAdmin.html.twig',compact('reclamation')
                    ),
                    'text/html'
                );
            $mailer->send($message);
            $mailer->send($messageAdm);

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
     * @Route("/afficheReclaProfile", name="showReclaProfile", methods={"GET"})
     */
    public function indexReclamationProfile(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/indexReclaProfile.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }
    /**
     * @param AdminRepository $repAdmin
     * @param ReclamationRepository $repReclamamation
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("recByAdmin/{id}" , name="RecParAdmin")
     */
    function ListReclamationByAdmin(AdminRepository $repAdmin,ReclamationRepository $repReclamamation,$id){
        $admin=$repAdmin->find($id);
        $reclamations=$repReclamamation->listReclamationByAdmin($admin->getId());
        return $this->render('reclamation/indexReclaProfile.html.twig',[
            'a'=>$admin,'reclamations'=>$reclamations
        ]);
    }

    /**
     * @param Request $request
     * @param EvenementRepository $repository
     * @return Response
     * @Route ("/tri", name="event_tri")
     */

    public function tri(Request $request,EvenementRepository $repository){
        $evenements=$repository->SearchByNo($request->get('tri'))->getResult();

        return $this->render('evenement/index.html.twig',[
           /*'evenements'=>$this->getDoctrine()->getRepository(Evenement::class)->SearchByNo($request->get('trim'))->getResult()*/
            'evenements'=>$evenements
        ]);
    }

    /**
     * @param EvenementRepository $repository
     * @return Response
     * @Route ("/LastDate2", name="lastDate2")
     */
    function AfficheTopDate2(EvenementRepository $repository,Request $request)
    {
        $event = $repository->LastCreationX($request->get('tri'));
        return $this->render('evenement/tri.html.twig', [
            'evenements' => $event
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

    function addParticipation(){


    }

    /**
     * @Route("/afficheReclaPdf", name="pdf")
     */
    public function afficheReclPdf()
    {



// Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $reclamations = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('reclamation/mypdf.html.twig', [
            'reclamations' => $reclamations
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
     * @Route("/ShowKadha", name="admin_index_show", methods={"GET"})
     */
    public function indexAdminShow(AdminRepository $adminRepository): Response
    {
        return $this->render('home_admin/IndexAdmin.html.twig', [
            'admins' => $adminRepository->findAll(),
        ]);
    }
    /**
     * @Route("/search", name="search_voy", methods={"POST"})
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $name= $request->get('dat');
        $evenements = $em->getRepository(Evenement::class)->search($name);

        return $this->render('home_admin/eventAdmin.html.twig', array(
            'evenements' => $evenements,
        ));
    }

    /**
     * @Route ("/stat" , name="stat")
     */
    public function statistiques(AdminRepository $repository, ReclamationRepository $reclamationRepository){

        $admins = $repository->findAll();
        $adminNom = [];
        $count = [];

        foreach ($admins as $adm){
            $adminNom[]=$adm->getNom();
            $count[]=count($adm->getReclamations());

        }

        $reclamations=$reclamationRepository->countByDate();
        /*dd($reclamations);*/
        $dates = [];
        $reclamationsCount = [];

        foreach ($reclamations as $recla){
            $dates[]=$recla['dateRecla'];
            $reclamationsCount[]=$recla['counts'];
        }
        return $this->render('home_admin/stats.html.twig',[
            'adminNom'=>json_encode($adminNom),
            'count'=>json_encode($count),
            'dates'=>json_encode($dates),
            'reclamationsCount'=>json_encode($reclamationsCount),

        ]);
    }

    /**
     * @Route ("/statE" , name="statE")
     */
    public function statistiquesEvent(EvenementRepository $repository){
        $evenements=$repository->countByDate();
        /*dd($reclamations);*/
        $dates = [];
        $evenementsCount = [];

        foreach ($evenements as $event){
            $dates[]=$event['dateEvent'];
            $evenementsCount[]=$event['counts'];
        }

        $evenementsLieu=$repository->countByLieu();
        $lieu=[];
        $count=[];

        foreach ($evenementsLieu as $eventLieu){
            $lieu[]=$eventLieu['lieuEvent'];
            $count[]=$eventLieu['count'];
        }


        return $this->render('home_admin/statsE.html.twig',[

            'dates'=>json_encode($dates),
            'evenementsCount'=>json_encode($evenementsCount),
            'lieu'=>json_encode($lieu),
            'count'=>json_encode($count),

        ]);
    }
}
