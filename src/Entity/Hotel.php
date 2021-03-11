<?php

namespace App\Entity;

use App\Repository\HotelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=HotelRepository::class)
 */
class Hotel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="le contenu ne doit pas être vide")
     * @Assert\Positive(message="le contenu doit être positive")
     */
    private $NbEtoile;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="le contenu ne doit pas être vide")
     * @Assert\Positive(message="le contenu doit être positive")
     */
    private $NbChambre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="le contenu ne doit pas être vide")
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="le contenu ne doit pas être vide")
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="le contenu ne doit pas être vide")
     * @Assert\Positive(message="le contenu doit être positive")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity=Promotion::class, mappedBy="hotel", orphanRemoval=true,cascade={"all"})
     */
    private $promotions;

    public function __construct()
    {
        $this->promotions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbEtoile(): ?int
    {
        return $this->NbEtoile;
    }

    public function setNbEtoile(int $NbEtoile): self
    {
        $this->NbEtoile = $NbEtoile;

        return $this;
    }

    public function getNbChambre(): ?int
    {
        return $this->NbChambre;
    }

    public function setNbChambre(int $NbChambre): self
    {
        $this->NbChambre = $NbChambre;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection|Promotion[]
     */
    public function getPromotions(): Collection
    {
        return $this->promotions;
    }

    public function addPromotion(Promotion $promotion): self
    {
        if (!$this->promotions->contains($promotion)) {
            $this->promotions[] = $promotion;
            $promotion->setHotel($this);
        }

        return $this;
    }

    public function removePromotion(Promotion $promotion): self
    {
        if ($this->promotions->removeElement($promotion)) {
            // set the owning side to null (unless already changed)
            if ($promotion->getHotel() === $this) {
                $promotion->setHotel(null);
            }
        }

        return $this;
    }
}
