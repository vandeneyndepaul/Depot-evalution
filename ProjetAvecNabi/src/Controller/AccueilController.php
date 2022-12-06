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

    #[Route('/categorie/{id}', name: 'app_categorie')]
    public function categorie($id, CategorieRepository $repo): Response
    {
        $categorie = $repo->find($id);

        return $this->render('accueil/categorie.html.twig', [
            'categorie' => $categorie

        ]);
    }

    
    #[Route('/produits/{id}', name: 'app_produit')]
    public function produit($id, ProduitRepository $pro, SousCategorieRepository $sou): Response
    {
        $produits = $pro->findAll();
        $souscat = $sou->find($id);
        // dd($souscat);

        return $this->render('accueil/produit.html.twig', [
            "tableau" => $produits,
            "soucat"  => $souscat
        ]);
    }


    #[Route('/detailProduit/{id}', name: 'app_detailProduit')]
    public function detailProduit($id, ProduitRepository $repo): Response
    {
        $detail = $repo->find($id);

        return $this->render('accueil/detailProduit.html.twig', [
            'detail' => $detail

        ]);
    }

    #[Route('/panier', name: 'app_Panier')]
    public function panier(): Response
    {
      

        return $this->render('accueil/panier.html.twig', [
           

        ]);
    }

    #[Route('/connexion', name: 'app_connexion')]
    public function connexion(): Response
    {
      

        return $this->render('accueil/connexion.html.twig', [
           

        ]);
    }

}
