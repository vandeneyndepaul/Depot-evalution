<?php

namespace App\Controller;
use App\Repository\ProduitsRepository;
use App\Repository\CategoriesRepository;
use App\Repository\SouscategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagePrincipaleController extends AbstractController
{

    
    
    #[Route('/', name: 'app_page_principale')]
    public function index(CategoriesRepository $repo): Response
    {
        $categories = $repo->findAll();

        return $this->render('page_principale/index.html.twig', [
            'categories' => $categories
        ]);
    }


    #[Route('/categories/{id}', name: 'app_page_categories')]
    public function categorie($id, CategoriesRepository $repo): Response
    {
        $categories = $repo->find($id);



        return $this->render('page_principale/categories.html.twig', [
            'categories' => $categories,
        ]);
    }


    #[Route('/produits/{id}', name: 'app_page_produits')]
    public function produits($id, ProduitsRepository $pro, SousCategoriesRepository $sou): Response
    {
        $produits = $pro->findAll();
        $souscat = $sou->find($id);



        return $this->render('page_principale/produits.html.twig', [
            'produits' => $produits,
            'souscat' => $souscat,


        ]);
    }

    #[Route('/detail/{id}', name: 'app_detail')]
    public function detailProduit($id, ProduitsRepository $repo): Response
    {
        $detail = $repo->find($id);

        return $this->render('page_principale/detail.html.twig', [
            'detail' => $detail

        ]);
    }
    

    #[Route('/test', name: 'app_test')]
    public function connexion(): Response
    {


        return $this->render('page_principale/test.html.twig', [           

        ]);
    }
}
