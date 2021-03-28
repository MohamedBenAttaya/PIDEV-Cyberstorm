<?php

namespace App\Entity;

use App\Repository\ParticipationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ParticipationRepository::class)
 */
class Participation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idInternaute;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity=Voy::class, inversedBy="participations",cascade={"all"})
     */
    private $Voy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdInternaute(): ?int
    {
        return $this->idInternaute;
    }

    public function setIdInternaute(int $idInternaute): self
    {
        $this->idInternaute = $idInternaute;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getVoy(): ?voy
    {
        return $this->Voy;
    }

    public function setVoy(?voy $voy): self
    {
        $this->Voy = $voy;

        return $this;
    }
}
