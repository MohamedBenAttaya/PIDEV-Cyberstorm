<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
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
 * @Route("/experience" , name="experience")
 */
    public function experienceAction(){
        return $this->render("home/experience.html.twig");
    }
    /**
     * @Route("/homead", name="home_admin")
     */
    public function indexadmin(): Response
    {
        return $this->render('home_admin/index.html.twig', [
            'controller_name' => 'HomeAdminController',
        ]);
    }
}
