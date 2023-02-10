<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HeaderController extends AbstractController
{
    #[Route('/header', name: 'app_header')]
    public function index(CategoriesRepository $repo,  SessionInterface $session,): Response
    {

    


        return $this->render('header/index.html.twig', [
            'panier' => $session->get("panier",[]),
            'categories' => $repo->findAll()
        ]);
    }
}
