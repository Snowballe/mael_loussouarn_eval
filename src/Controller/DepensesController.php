<?php

namespace App\Controller;

use App\Entity\Depenses;
use App\Form\DepensesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DepensesController extends AbstractController
{
    protected $em;
    public function __construct(EntityManagerInterface $entityManager) {
        $this->em = $entityManager;
      }
    #[Route('/depenses', name: 'Depenses')]
    public function index(): Response
    {
        $repository=$this->getDoctrine()->getRepository(Depenses::class);
        $depenses=$repository->findAll();

        return $this->render('Depenses/index.html.twig', [
            'depenses'=>$depenses
        ]);
    }
}
?>
