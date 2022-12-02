<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 6, scale: 2, nullable: true)]
    private ?string $prix = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?SousCategorie $sousCategorie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Photo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Libelle_Court = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $Libelle_Long = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(?string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getSousCategorie(): ?SousCategorie
    {
        return $this->sousCategorie;
    }

    public function setSousCategorie(?SousCategorie $sousCategorie): self
    {
        $this->sousCategorie = $sousCategorie;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->Photo;
    }

    public function setPhoto(?string $Photo): self
    {
        $this->Photo = $Photo;

        return $this;
    }

    public function getLibelleCourt(): ?string
    {
        return $this->Libelle_Court;
    }

    public function setLibelleCourt(?string $Libelle_Court): self
    {
        $this->Libelle_Court = $Libelle_Court;

        return $this;
    }

    public function getLibelleLong(): ?string
    {
        return $this->Libelle_Long;
    }

    public function setLibelleLong(?string $Libelle_Long): self
    {
        $this->Libelle_Long = $Libelle_Long;

        return $this;
    }
}
