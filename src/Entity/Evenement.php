<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 *
 */
class Evenement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("evenements:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champ doit etre rempli")
     * @Groups("evenements:read")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champ doit etre rempli")
     * @Groups("evenements:read")
     */
    private $lieu;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="Ce champ doit etre rempli")
     * @Groups("evenements:read")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=8)
     * @Groups("evenements:read")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Length(min=8,max=8)
     * @Groups("evenements:read")
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message="cette adresse email n' est pas correcte")
     * @Groups("evenements:read")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("evenements:read")
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity=Participation::class, mappedBy="evenement",cascade={"all"},orphanRemoval=true)
     * @Groups("evenements:read")
     */
    private $participations;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups("evenements:read")
     */
    private $nbparticipant;

    /**
     * @ORM\Column(type="integer")
     */
    private $maxp;

    public function __construct()
    {
        $this->participations = new ArrayCollection();
    }

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

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): self
    {
        $this->tel = $tel;

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

    public function getImage()
    {
        return $this->image;
    }

    public function setImage( $image)
    {
        $this->image = $image;

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
            $participation->setEvenement($this);
        }

        return $this;
    }

    public function removeParticipation(Participation $participation): self
    {
        if ($this->participations->removeElement($participation)) {
            // set the owning side to null (unless already changed)
            if ($participation->getEvenement() === $this) {
                $participation->setEvenement(null);
            }
        }

        return $this;
    }

    public function getNbparticipant(): ?int
    {
        return $this->nbparticipant;
    }

    public function setNbparticipant(?int $nbparticipant): self
    {
        $this->nbparticipant = $nbparticipant;

        return $this;
    }

    public function getMaxp(): ?int
    {
        return $this->maxp;
    }

    public function setMaxp(int $maxp): self
    {
        $this->maxp = $maxp;

        return $this;
    }


}
