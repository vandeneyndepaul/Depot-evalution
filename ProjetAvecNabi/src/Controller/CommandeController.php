<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class CommandeController extends AbstractController
{
    #[IsGranted("ROLE_USER")]
    #[Route('/valid', name: 'app_valid')]
    public function index(): Response
    {
        return $this->render('commande/index.html.twig', [
            'controller_name' => 'commandeController',
        ]);
    }
}
