<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/animaux", name="animaux")
     */
    public function animaux(): Response
    {
        return $this->render('animal/animaux.html.twig');
    }
}
