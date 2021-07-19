<?php

namespace App\Controller;

use App\Entity\Famille;
use App\Repository\FamilleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FamilleController extends AbstractController
{
    /**
     * @Route("/familles", name="familles")
     */
    public function familles(FamilleRepository $familleRepository): Response
    {
        $familles = $familleRepository->findAll();

        return $this->render('famille/familles.html.twig', [
            'familles' => $familles
        ]);
    }

    /**
     * @Route("/famille/{id}", name="famille")
     */
    public function famille(Famille $famille): Response
    {
        return $this->render('famille/famille.html.twig', [
            'famille' => $famille
        ]);
    }
}
