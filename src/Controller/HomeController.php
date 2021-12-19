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
    
    

    #[Route("/projet/nouveau", name: "creerunnouveauprojet")]
    public function direBonjour($prenom){
        $modele=["prenom"=>$prenom];

        return $this->render('home/bonjour.html.twig', $modele);
    }

    #[Route('/projet/gerer/{nom_projet}',name:'gererprojet')]
    public  function gererProjet($id, $id_projet){
        
        return $this->render('categories/gestionprojet.html.twig');
    }

    #[Route("/remboursement/gerer",name:"gererremboursements")]
    public function gererRemboursements(){
        
        return $this->render('categories/gestionremboursement.html.twig');
    }
}
