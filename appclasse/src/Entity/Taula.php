<?php

namespace App\Entity;

use App\Repository\TaulaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TaulaRepository::class)
 */
class Taula
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Jugador::class, cascade={"persist", "remove"})
     */
    private $jugadorN;

    /**
     * @ORM\OneToOne(targetEntity=Jugador::class, cascade={"persist", "remove"})
     */
    private $jugadorB;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $puntN;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $puntB;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJugadorN(): ?Jugador
    {
        return $this->jugadorN;
    }

    public function setJugadorN(?Jugador $jugadorN): self
    {
        $this->jugadorN = $jugadorN;

        return $this;
    }

    public function getJugadorB(): ?Jugador
    {
        return $this->jugadorB;
    }

    public function setJugadorB(?Jugador $jugadorB): self
    {
        $this->jugadorB = $jugadorB;

        return $this;
    }

    public function getPuntN(): ?float
    {
        return $this->puntN;
    }

    public function setPuntN(?float $puntN): self
    {
        $this->puntN = $puntN;

        return $this;
    }

    public function getPuntB(): ?float
    {
        return $this->puntB;
    }

    public function setPuntB(?float $puntB): self
    {
        $this->puntB = $puntB;

        return $this;
    }
}
