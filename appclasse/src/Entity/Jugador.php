<?php

namespace App\Entity;

use App\Repository\JugadorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JugadorRepository::class)
 */
class Jugador
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
    private $elo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pais;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equip;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dataNaixament;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $codiFide;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fideID;

    /**
     * @ORM\OneToMany(targetEntity=Torneig::class, mappedBy="jugadors")
     */
    private $torneigosParticipat;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $actPunts;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $enTorneig;

    public function __construct()
    {
        $this->torneigosParticipat = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getElo(): ?int
    {
        return $this->elo;
    }

    public function setElo(?int $elo): self
    {
        $this->elo = $elo;

        return $this;
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

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(?string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getEquip(): ?string
    {
        return $this->equip;
    }

    public function setEquip(?string $equip): self
    {
        $this->equip = $equip;

        return $this;
    }

    public function getDataNaixament(): ?\DateTimeInterface
    {
        return $this->dataNaixament;
    }

    public function setDataNaixament(?\DateTimeInterface $dataNaixament): self
    {
        $this->dataNaixament = $dataNaixament;

        return $this;
    }

    public function getCodiFide(): ?int
    {
        return $this->codiFide;
    }

    public function setCodiFide(?int $codiFide): self
    {
        $this->codiFide = $codiFide;

        return $this;
    }

    public function getFideID(): ?int
    {
        return $this->fideID;
    }

    public function setFideID(?int $fideID): self
    {
        $this->fideID = $fideID;

        return $this;
    }

    /**
     * @return Collection|Torneig[]
     */
    public function getTorneigosParticipat(): Collection
    {
        return $this->torneigosParticipat;
    }

    public function addTorneigosParticipat(Torneig $torneigosParticipat): self
    {
        if (!$this->torneigosParticipat->contains($torneigosParticipat)) {
            $this->torneigosParticipat[] = $torneigosParticipat;
            $torneigosParticipat->setJugadors($this);
        }

        return $this;
    }

    public function removeTorneigosParticipat(Torneig $torneigosParticipat): self
    {
        if ($this->torneigosParticipat->removeElement($torneigosParticipat)) {
            // set the owning side to null (unless already changed)
            if ($torneigosParticipat->getJugadors() === $this) {
                $torneigosParticipat->setJugadors(null);
            }
        }

        return $this;
    }
    public function __toString(){
        return $this->getNom();
    }

    public function getActPunts(): ?float
    {
        return $this->actPunts;
    }

    public function setActPunts(?float $actPunts): self
    {
        $this->actPunts = $actPunts;

        return $this;
    }

    public function getEnTorneig(): ?bool
    {
        return $this->enTorneig;
    }

    public function setEnTorneig(?bool $enTorneig): self
    {
        $this->enTorneig = $enTorneig;

        return $this;
    }
}
