<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PlatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlatRepository::class)]
#[ApiResource]
class Plat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\ManyToOne(targetEntity: Restaurant::class, inversedBy: 'plats')]
    #[ORM\JoinColumn(nullable: false)]
    private $categorieRelation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCategorieRelation(): ?Restaurant
    {
        return $this->categorieRelation;
    }

    public function setCategorieRelation(?Restaurant $categorieRelation): self
    {
        $this->categorieRelation = $categorieRelation;

        return $this;
    }
}
