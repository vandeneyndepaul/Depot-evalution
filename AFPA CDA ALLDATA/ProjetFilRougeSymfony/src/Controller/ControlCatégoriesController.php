<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControlCatégoriesController extends AbstractController
{
    #[Route('/', name: 'Accueil')]
    public function Accueil(): Response
    {
        return $this->render('control_catégories/Accueil.html.twig', [
            'controller_name' => 'ControlCatégoriesController',
        ]);
    }
}
