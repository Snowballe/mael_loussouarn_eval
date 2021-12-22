<?php

namespace App\Controller;

use App\Entity\Personnes;

use App\Form\NewPersonne;
use App\Repository\PersonnesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        //récupérer le repository de catégories
        $repository=$this->getDoctrine()->getRepository(PersonnesRepository::class);

        //lire la BDD
        $categories=$repository->findAll(); //un select *

        return $this->render('home/index.html.twig', [
            'categories'=>$categories
        ]);
    }

    #[Route('/', name:'ajouter_personne')]
    public function ajouter_personne(Request $request){
        //créer uen catégorie vide
        $categorie=new Categorie();

        //créer le formulaire pour cette catégorie
        $form = $this->createForm(CategorieType::class, $categorie);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            //entity manager
            $em=$this->getDoctrine()->getManager();

            //dis a l'entity manager que je veux enregister ma catégorie
            $em->persist($categorie);

            //je déclenche la requête
            $em->flush();

            //je retourne à l'accueil
            return $this->redirectToRoute("home");
        }

        return $this->render("categories/ajouter.html.twig", [
            "formulaire"=>$form->createView()
        ]);
    }

    #[Route('categorie/modifier/{id}', name:'categorie_modifier')]
    public function categorie_modifier($id, Request $request){
        //aller chercher la catégorie
        $repo=$this->getDoctrine()->getRepository(Categorie::class);
        $categorie=$repo->find($id);

        //créer le formulaire pour cette catégorie
        $form = $this->createForm(CategorieType::class, $categorie);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            //entity manager
            $em=$this->getDoctrine()->getManager();

            //dis a l'entity manager que je veux enregister ma catégorie
            $em->persist($categorie);

            //je déclenche la requête
            $em->flush();

            //je retourne à l'accueil
            return $this->redirectToRoute("home");
        }

        return $this->render("categories/modifier.html.twig", [
            "formulaire"=>$form->createView()
        ]);
    }
}
