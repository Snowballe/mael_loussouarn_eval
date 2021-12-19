<?php

namespace App\Controller;

use App\Entity\Personnes;
use App\Repository\HomeRepository;
use App\Form\PersonnesType;
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
