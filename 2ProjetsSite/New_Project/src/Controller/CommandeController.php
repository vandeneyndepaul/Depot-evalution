<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Commande;
use App\Entity\Commandes;
use App\Entity\Produits;
use App\Entity\SeCompose;
use App\Repository\ProduitsRepository;
use App\Repository\SeComposeRepository;
use App\Repository\CommandesRepository;
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
    public function valid(ProduitsRepository $repo, SessionInterface $session, EntityManagerInterface $manager, SeComposeRepository $comp, CommandesRepository $c): Response
    {
        $panier = $session->get("panier", []);

        $com = new Commandes();
        $com->setUser($this->getUser());
        $com->setDate(new DateTime());
        $manager->persist($com);

        foreach ($panier as $produit) {
            $p = $repo->find($produit->getId());

            $sc = new SeCompose();
            $sc->setCommande($com);
            $sc->setProduit($p);
            $sc->setQuantite($produit->quantite);
            $manager->persist($sc);
            $manager->flush();
        }


        $session->set("panier", []);


        $compose= $comp->findAll();


        $c->findBy(["user" => $this->getUser()]);
        
        return $this->render('valid/index.html.twig', [
            'commande' => $compose,
            'c' => $c
        ]);
    }

    #[IsGranted("ROLE_USER")]
    #[Route('/commandes', name: 'app_commandes')]
    public function commandes(CommandesRepository $c): Response
    {
        $liste = $c->findBy(["user" => $this->getUser()]);
        
        return $this->render('valid/commandes.html.twig', [
            'commande' => $liste,

        ]);
    }

    #[IsGranted("ROLE_USER")]
    #[Route('/sendcommandes', name: 'app_sendcommandes')]
    public function sendcommandes(CommandesRepository $c): Response
    {
        $liste = $c->findBy(["user" => $this->getUser()]);
        
        return $this->render('valid/sendcommandes.html.twig', [
            'commande' => $liste,

        ]);
    }

    #[IsGranted("ROLE_USER")]
    #[Route('/commandes_detail/{id}', name: 'app_details_commandes')]
    public function commandes_detail(Commandes $id): Response
    {
        // $liste = $c->findBy(["user" => $this->getUser()]);
        // $pc = $sc->findBy($id);
        
        return $this->render('valid/details_commande.html.twig', [
            'com' => $id

        ]);
    }
}
