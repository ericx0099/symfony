<?php

namespace App\Entity;

use App\Repository\PartidaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PartidaRepository::class)
 */
class Partida
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idJugador;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $colorPeces;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idVsJugador;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $punts;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdJugador(): ?int
    {
        return $this->idJugador;
    }

    public function setIdJugador(?int $idJugador): self
    {
        $this->idJugador = $idJugador;

        return $this;
    }

    public function getColorPeces(): ?string
    {
        return $this->colorPeces;
    }

    public function setColorPeces(?string $colorPeces): self
    {
        $this->colorPeces = $colorPeces;

        return $this;
    }

    public function getIdVsJugador(): ?int
    {
        return $this->idVsJugador;
    }

    public function setIdVsJugador(?int $idVsJugador): self
    {
        $this->idVsJugador = $idVsJugador;

        return $this;
    }

    public function getPunts(): ?float
    {
        return $this->punts;
    }

    public function setPunts(?float $punts): self
    {
        $this->punts = $punts;

        return $this;
    }
}
