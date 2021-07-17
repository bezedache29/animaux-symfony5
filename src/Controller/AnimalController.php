<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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

    /**
     * @Route("/animal/{id}", name="animal")
     */
    public function animal(Animal $animal): Response
    {
        // L'id passé dans l'url permet de récupérer l'animal passé dans les paramètres de la fonction
        // Symfony le fait tout seul
        
        return $this->render('animal/animal.html.twig', [
            'animal' => $animal
        ]);
    }
}
