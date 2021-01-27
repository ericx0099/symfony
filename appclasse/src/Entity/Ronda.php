<?php

namespace App\Entity;

use App\Repository\RondaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RondaRepository::class)
 */
class Ronda
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $partides = [];

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $data;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numRondes;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $participants = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPartides(): ?array
    {
        return $this->partides;
    }

    public function setPartides(?array $partides): self
    {
        $this->partides = $partides;

        return $this;
    }

    public function getData(): ?\DateTimeInterface
    {
        return $this->data;
    }

    public function setData(?\DateTimeInterface $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getNumRondes(): ?int
    {
        return $this->numRondes;
    }

    public function setNumRondes(?int $numRondes): self
    {
        $this->numRondes = $numRondes;

        return $this;
    }

    public function getParticipants(): ?array
    {
        return $this->participants;
    }

    public function setParticipants(?array $participants): self
    {
        $this->participants = $participants;

        return $this;
    }
}
