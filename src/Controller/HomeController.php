<?php

namespace App\Controller;

//use App\Entity\Home;

use App\Entity\Personnes;
use App\Repository\HomeRepository;


use App\Form\HomeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $repository=$this->getDoctrine()->getRepository(Personnes::class);
        $home=$repository->findAll();

        return $this->render('home/index.html.twig', [
            'home'=>$home
        ]);
    }
    
    #[Route('/login', name: 'login')]
    public function Login(): Response
    {
        return $this->render('home/login.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

   
}
