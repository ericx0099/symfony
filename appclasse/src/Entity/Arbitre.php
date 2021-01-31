<?php

namespace App\Entity;

use App\Repository\ArbitreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArbitreRepository::class)
 */
class Arbitre implements \Symfony\Component\Security\Core\User\UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dni;

    /**
     * @ORM\OneToMany(targetEntity=Torneig::class, mappedBy="arbitre")
     */
    private $torneigs;

    public function __construct()
    {
        $this->torneigs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getDni(): ?string
    {
        return $this->dni;
    }

    public function setDni(?string $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * @return Collection|Torneig[]
     */
    public function getTorneigs(): Collection
    {
        return $this->torneigs;
    }

    public function addTorneig(Torneig $torneig): self
    {
        if (!$this->torneigs->contains($torneig)) {
            $this->torneigs[] = $torneig;
            $torneig->setArbitre($this);
        }

        return $this;
    }

    public function removeTorneig(Torneig $torneig): self
    {
        if ($this->torneigs->removeElement($torneig)) {
            // set the owning side to null (unless already changed)
            if ($torneig->getArbitre() === $this) {
                $torneig->setArbitre(null);
            }
        }

        return $this;
    }

    public function getRoles()
    {
        // TODO: Implement getRoles() method.
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}
