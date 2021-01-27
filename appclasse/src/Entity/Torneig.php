<?php

namespace App\Entity;

use App\Repository\TorneigRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TorneigRepository::class)
 */
class Torneig
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
    private $rondes = [];

    /**
     * @ORM\ManyToOne(targetEntity=Arbitre::class, inversedBy="torneigs")
     */
    private $arbitre;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $data;

    /**
     * @ORM\ManyToOne(targetEntity=Jugador::class, inversedBy="torneigosParticipat")
     */
    private $jugadors;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $theParticipants = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numRondes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRondes(): ?array
    {
        return $this->rondes;
    }

    public function setRondes(?array $rondes): self
    {
        $this->rondes = $rondes;

        return $this;
    }

    public function getArbitre(): ?Arbitre
    {
        return $this->arbitre;
    }

    public function setArbitre(?Arbitre $arbitre): self
    {
        $this->arbitre = $arbitre;

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

    public function getJugadors(): ?Jugador
    {
        return $this->jugadors;
    }

    public function setJugadors(?Jugador $jugadors): self
    {
        $this->jugadors = $jugadors;

        return $this;
    }

    public function getTheParticipants(): ?array
    {
        return $this->theParticipants;
    }

    public function setTheParticipants(?array $theParticipants): self
    {
        $this->theParticipants = $theParticipants;

        return $this;
    }
    public function addTheParticipants($participant): void
    {
        $this->getTheParticipants()[] = $participant;
    }
    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

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
    public function removeFromTourn(?Jugador $jugador){
        $key = array_search($jugador,$this->theParticipants,true);
        if($key !== false){
            unset($this->theParticipants[$key]);
            return true;
        }
        return false;
    }

}
