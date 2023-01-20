<?php

namespace App\Entity;

use App\Repository\SeComposeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeComposeRepository::class)]
class SeCompose
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'seComposes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Produits $produit = null;

    #[ORM\ManyToOne(inversedBy: 'seComposes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Commandes $commande = null;

    #[ORM\Column]
    private ?int $Quantite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    

    public function getProduit(): ?Produits
    {
        return $this->produit;
    }

    public function setProduit(?Produits $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    public function getCommande(): ?Commandes
    {
        return $this->commande;
    }

    public function setCommande(?Commandes $commande): self
    {
        $this->commande = $commande;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->Quantite;
    }

    public function setQuantite(int $Quantite): self
    {
        $this->Quantite = $Quantite;

        return $this;
    }
}
