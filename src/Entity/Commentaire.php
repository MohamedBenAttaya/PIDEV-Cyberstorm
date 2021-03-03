<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{


    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="cette information est necessaire")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PartageExperience",
     *          inversedBy="Commentaire")
     * @Assert\NotBlank(message="cette information est necessaire")
     */
    private $partageexperience;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPartageexperience(): ?PartageExperience
    {
        return $this->partageexperience;
    }

    public function setPartageexperience(?PartageExperience $partageexperience): self
    {
        $this->partageexperience = $partageexperience;

        return $this;
    }
}
