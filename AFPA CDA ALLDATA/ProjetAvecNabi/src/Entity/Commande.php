<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_commande = null;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\OneToMany(mappedBy: 'commande', targetEntity: SeCompose::class)]
    private Collection $seComposes;

    public function __construct()
    {
        $this->seComposes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->date_commande;
    }

    public function setDateCommande(\DateTimeInterface $date_commande): self
    {
        $this->date_commande = $date_commande;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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
            $seCompose->setCommande($this);
        }

        return $this;
    }

    public function removeSeCompose(SeCompose $seCompose): self
    {
        if ($this->seComposes->removeElement($seCompose)) {
            // set the owning side to null (unless already changed)
            if ($seCompose->getCommande() === $this) {
                $seCompose->setCommande(null);
            }
        }

        return $this;
    }
}
