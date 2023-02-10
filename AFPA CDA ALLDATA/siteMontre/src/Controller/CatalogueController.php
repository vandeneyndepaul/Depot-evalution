<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    #[Route('/', name: 'app_categories')]
    public function categories(): Response
    {
        return $this->render('catalogue/categories.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }
}
