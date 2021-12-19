<?php

namespace App\Controller;

use App\Entity\Depenses;
use App\Repository _
use App\Form\ProjetType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DepensesController extends AbstractController
{
    #[Route('/', name: 'Depenses')]
    public function index(): Response
    {
        $repository=$this->getDoctrine()->getRepository(Depenses::class);
        $projet=$repository->findAll();

        return $this->render('Depenses/index.html.twig', [
            'projet'=>$projet
        ]);
    }
}
