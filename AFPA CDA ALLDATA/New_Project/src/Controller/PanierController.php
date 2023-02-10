<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Repository\ProduitsRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    
    #[Route('/add/{id}', name: 'app_add')]
    public function add(SessionInterface $session, ProduitsRepository $repo,$id): Response
    {
        $tab=$session->get("panier",[]);

         //$tab[] = $id;
        
        $p = null;
        foreach ($tab as $produit) {
            if ($produit->getId()==$id) {
                $p = $produit;
            }
        }


        if ($p==null) {
            $p = $repo->find($id);
            $p->quantite = 1;
            $tab[] = $p;
            
        }  
        else {
            $p->quantite++;
        }



        $session->set("panier", $tab);

        // dd($tab);
        return $this->redirect("/panier");
    }
    
    
    #[Route('/panier', name: 'app_panier')]
    public function index(SessionInterface $session): Response
    {


        $panier=$session->get("panier",[]);

        $nb = 0;
        foreach ($panier as $v) {
            $prixproduitpanier = $v->getPrice();
            $nb += $prixproduitpanier*$v->quantite;
        
        }


        return $this->render('panier/panier.html.twig', [
            'panier' => $panier,
            'calcul' => $nb
        ]);
    }



    #[Route('/sub/{id}', name: 'app_sub')]
    public function sub(SessionInterface $session,ProduitsRepository $repo, $id): Response
    {

        $tab=$session->get("panier",[]);
        
        $p = null;
        foreach ($tab as $produit) {
            if ($produit->getId()==$id) {
                $p = $produit;
            }
        }

        if ($p==null) {
            $p = $repo->find($id);
            $p->quantite = 1;
            $tab[] = $p;
        }
        else {
            $p->quantite--;
            if($p->quantite <= 0){
                array_pop($tab);
            }
        }



        $session->set("panier", $tab);

//         dd($tab);

        return $this->redirect("/panier");

    }



    #[Route('/clear', name: 'app_clear')]
    public function clear(SessionInterface $session): Response
    {


        $panier=$session->set("panier",[]);




        return $this->redirect("/panier");
    }


    
}
