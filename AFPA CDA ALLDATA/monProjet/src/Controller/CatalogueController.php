<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    #[Route('/', name: 'Accueil')]
    public function Accueil(): Response
    {
        return $this->render('catalogue/Accueil.html.twig', [
            'bouton' => '/Produit',
        ]);
    }

    #[Route('/Playstation', name: 'Playstation')]
    public function Playstation(): Response
    {
        return $this->render('catalogue/Playstation.html.twig', [
           
        ]);
    }


    #[Route('/Xbox', name: 'Xbox')]
    public function Xbox(): Response
    {
        return $this->render('catalogue/Xbox.html.twig', [
          
        ]);
    }


}
