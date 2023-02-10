<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Commande;
use App\Entity\Produit;
use App\Entity\SeCompose;
use App\Repository\ProduitRepository;
use App\Repository\SeComposeRepository;
use App\Repository\CommandeRepository;
use App\Repository\UserRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommandeController extends AbstractController
{
    #[IsGranted("ROLE_USER")]
    #[Route('/valid', name: 'app_valid')]
    public function valid(ProduitRepository $repo, SessionInterface $session, EntityManagerInterface $manager, SeComposeRepository $comp, CommandeRepository $c): Response
    {
        $panier = $session->get("panier", []);

        $com = new Commande();
        $com->setUser($this->getUser());
        $com->setDateCommande(new DateTime());
        $manager->persist($com);

        foreach ($panier as $produit) {
            $p = $repo->find($produit->getId());

            $sc = new SeCompose();
            $sc->setCommande($com);
            $sc->setProduit($p);
            $sc->setQuantite(3);
            $manager->persist($sc);
            $manager->flush();
        }


        $session->set("panier", []);


        $compose= $comp->findAll();


        $c->findAll();
        
        return $this->render('valid/index.html.twig', [
            'commande' => $compose,
            'c' => $c
        ]);
    }
}
