<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\SousCategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class NavController extends AbstractController
{
    public function index(CategorieRepository $repo, SessionInterface $session): Response
    {


        return $this->render('nav/navbar.html.twig', [
            'panier' => $session->get("panier",[]),
            'categories' => $repo->findAll()
        ]);
    }
}
