<?php

namespace App\Entity;

use App\Repository\VoyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=VoyRepository::class)
 */
class Voy
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $point_depart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $point_arrive;

    /**
     * @ORM\Column(type="string", length=255)
     * @assert\Email(message="invalid email")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @assert\Length(min="8",max="8")
     */
    private $num_tel;

    /**
     * @ORM\OneToMany(targetEntity=Participation::class, mappedBy="voy")
     */
    private $participations;

    public function __construct()
    {
        $this->participations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPointDepart(): ?string
    {
        return $this->point_depart;
    }

    public function setPointDepart(string $point_depart): self
    {
        $this->point_depart = $point_depart;

        return $this;
    }

    public function getPointArrive(): ?string
    {
        return $this->point_arrive;
    }

    public function setPointArrive(string $point_arrive): self
    {
        $this->point_arrive = $point_arrive;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNumTel(): ?string
    {
        return $this->num_tel;
    }

    public function setNumTel(string $num_tel): self
    {
        $this->num_tel = $num_tel;

        return $this;
    }

    /**
     * @return Collection|Participation[]
     */
    public function getParticipations(): Collection
    {
        return $this->participations;
    }

    public function addParticipation(Participation $participation): self
    {
        if (!$this->participations->contains($participation)) {
            $this->participations[] = $participation;
            $participation->setVoy($this);
        }

        return $this;
    }

    public function removeParticipation(Participation $participation): self
    {
        if ($this->participations->removeElement($participation)) {
            // set the owning side to null (unless already changed)
            if ($participation->getVoy() === $this) {
                $participation->setVoy(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return strval($this->id);
    }

}
