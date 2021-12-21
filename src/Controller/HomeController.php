<?php

namespace App\Controller;

//use App\Entity\Home;

use App\Entity\Personnes;
use App\Form\CategorieType;
use App\Repository\HomeRepository;


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

    #[Route('inscription',name:'inscription')]
    public function inscription(Request $request)
    {
        $personne=new Personnes();

        $form=$this->createForm(CategorieType::class,$personne);

        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em=$this->getDoctrine()->getManager();

            $em->persist($personne);
            $em->flush();
            return $this->redirectToRoute("home");
        }

        return $this->render("index.html.twig",[
            "inscription"=>$form->createView()
        ]);
    }
    
    #[Route('login', name: 'login')]
    public function Login(): Response
    {
        $personne=new Personnes();

        $form=$this->createForm(CategorieType::class,$personne);

        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em=$this->getDoctrine()->getManager();

            $em->persist($personne);
            $em->flush();
            return $this->redirectToRoute("creerunnouveauprojet");
        }

        return $this->render("login.html.twig",[
            "connection"=>$form->createView()
        ]);
    }

   
}
