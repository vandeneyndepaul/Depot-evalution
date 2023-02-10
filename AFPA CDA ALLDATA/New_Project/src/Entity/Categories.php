<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesRepository::class)]
class Categories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Type_montre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $img_source = null;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Souscategories::class)]
    private Collection $souscategories;

    public function __construct()
    {
        $this->souscategories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeMontre(): ?string
    {
        return $this->Type_montre;
    }

    public function setTypeMontre(string $Type_montre): self
    {
        $this->Type_montre = $Type_montre;

        return $this;
    }

    public function getImgSource(): ?string
    {
        return $this->img_source;
    }

    public function setImgSource(?string $img_source): self
    {
        $this->img_source = $img_source;

        return $this;
    }

    /**
     * @return Collection<int, Souscategories>
     */
    public function getSouscategories(): Collection
    {
        return $this->souscategories;
    }

    public function addSouscategory(Souscategories $souscategory): self
    {
        if (!$this->souscategories->contains($souscategory)) {
            $this->souscategories->add($souscategory);
            $souscategory->setCategorie($this);
        }

        return $this;
    }

    public function removeSouscategory(Souscategories $souscategory): self
    {
        if ($this->souscategories->removeElement($souscategory)) {
            // set the owning side to null (unless already changed)
            if ($souscategory->getCategorie() === $this) {
                $souscategory->setCategorie(null);
            }
        }

        return $this;
    }
}
