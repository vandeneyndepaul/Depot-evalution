<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitsRepository::class)]
class Produits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(nullable: true)]
    private ?int $price = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Photo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $LibelleCourt = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $LibelleLong = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?Souscategories $souscategorie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): self
    {
        $this->price = $price;

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
        return $this->LibelleCourt;
    }

    public function setLibelleCourt(?string $LibelleCourt): self
    {
        $this->LibelleCourt = $LibelleCourt;

        return $this;
    }

    public function getLibelleLong(): ?string
    {
        return $this->LibelleLong;
    }

    public function setLibelleLong(?string $LibelleLong): self
    {
        $this->LibelleLong = $LibelleLong;

        return $this;
    }

    public function getSouscategorie(): ?Souscategories
    {
        return $this->souscategorie;
    }

    public function setSouscategorie(?Souscategories $souscategorie): self
    {
        $this->souscategorie = $souscategorie;

        return $this;
    }
}
