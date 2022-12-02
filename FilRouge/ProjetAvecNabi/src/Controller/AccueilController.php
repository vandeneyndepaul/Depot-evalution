<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use App\Repository\SousCategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(categorieRepository $repo): Response
    {
        $categories = $repo->findAll();
        // $produits = $pro->findAll();

        return $this->render('accueil/index.html.twig', [
            'tableau' => $categories
            // 'tableau' => $produits
        ]);
    }

    #[Route('/sous_categories', name: 'sous_categorie')]
    public function sous_categorie(SousCategorieRepository $sousrepo): Response
    {
        $sous_categories = $sousrepo->findAll();

        return $this->render('accueil/sous_categorie.html.twig', [
            'tableau' => $sous_categories

        ]);
    }

    
    #[Route('/produits', name: 'produit')]
    public function produit(ProduitRepository $pro): Response
    {
        $produits = $pro->findAll();

        return $this->render('accueil/produit.html.twig', [
            'tableau' => $produits

        ]);
    }


}
