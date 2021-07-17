<?php

namespace App\Controller;

use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/animaux", name="animaux")
     */
    public function animaux(AnimalRepository $animalRepository): Response
    {
        $animaux = $animalRepository->findAll();

        return $this->render('animal/animaux.html.twig', [
            'animaux' => $animaux
        ]);
    }
}
