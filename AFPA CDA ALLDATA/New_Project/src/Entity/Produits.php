<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProduitsRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ProduitsRepository::class)]
#[ApiResource(
    normalizationContext: [ "groups" => ["lire:produit"]]
)]
class Produits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(["lire:produit"])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(["lire:produit"])]
    private ?string $Name = null;

    #[ORM\Column(nullable: true)]
    #[Groups(["lire:produit"])]
    private ?int $price = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Photo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $LibelleCourt = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $LibelleLong = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?Souscategories $souscategorie = null;

    #[ORM\OneToMany(mappedBy: 'produit', targetEntity: SeCompose::class)]
    private Collection $seComposes;

    public function __construct()
    {
        $this->seComposes = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, SeCompose>
     */
    public function getSeComposes(): Collection
    {
        return $this->seComposes;
    }

    public function addSeCompose(SeCompose $seCompose): self
    {
        if (!$this->seComposes->contains($seCompose)) {
            $this->seComposes->add($seCompose);
            $seCompose->setProduit($this);
        }

        return $this;
    }

    public function removeSeCompose(SeCompose $seCompose): self
    {
        if ($this->seComposes->removeElement($seCompose)) {
            // set the owning side to null (unless already changed)
            if ($seCompose->getProduit() === $this) {
                $seCompose->setProduit(null);
            }
        }

        return $this;
    }
}
