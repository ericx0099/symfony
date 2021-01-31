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
    public $theParticipants = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numRondes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="torneigs")
     */
    private $propietari;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $jugadorPFinal = [];

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
        $this->theParticipants[] = $participant;

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
        if($numRondes >= intval(log(count($this->theParticipants, 2)) &&
                $numRondes < (count($this->theParticipants)-1))) {
            $this->numRondes = $numRondes;
        }


        return $this;
    }
    public function removeFromTourn(?Jugador $jugador): bool
    {
        $key = array_search($jugador,$this->theParticipants);
        if($key !== false){
            unset($this->theParticipants[$key]);
            return true;
        }
        return false;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPropietari(): ?User
    {
        return $this->propietari;
    }

    public function setPropietari(?User $propietari): self
    {
        $this->propietari = $propietari;

        return $this;
    }

    public function getJugadorPFinal(): ?array
    {
        return $this->jugadorPFinal;
    }

    public function setJugadorPFinal(?array $jugadorPFinal): self
    {
        $this->jugadorPFinal = $jugadorPFinal;

        return $this;
    }

    public function addRonda(){
        $rondat = new Ronda();
        $rondat->matching($this->theParticipants, $this->rondes);
    }
}
