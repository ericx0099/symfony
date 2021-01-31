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

    public function addPartides($taula)
    {
        $this->partides[] = $taula;
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

    public function matching(?array $ptorneig, ?array $rondes)
    {
        //ordenar array
        usort($ptorneig, function ($a, $b) {
            return $a['actPunts'] > $b['actPunts'];
        });

        //mirar quantes parelles he de fer

        if (count($ptorneig) % 2 == 0) {
            $parelles = intval(count($ptorneig)) / 2;
        } else {
            $parelles = intval(count($ptorneig) / 2) + 1;
        }


        for ($i = 0; $i < $parelles; $i++) {
            $partida = new Taula();
            if (count($rondes) == 0) {
                $partida->setJugadorB($ptorneig[$i]);
                //falta revisar
                $partida->setJugadorN($ptorneig[$i + $parelles]);
            } else {

                //mirar si tinc el jugador emparellat
                $jugadoract = null;
                foreach ($ptorneig as $jugador) {
                    $enparellat = false;
                    $jugadoract = $jugador;

                    foreach ($this->participants as $jronda) {
                        if ($jugador == $jronda) {
                            $enparellat = true;
                            break;
                        }
                    }

                    if ($enparellat == false) {
                        //falta afagir a perticipants de ronda
                        break;
                    }
                }

                $partida->setJugadorB($jugadoract);

                $oponent = null;
                foreach ($ptorneig as $jugador) {
                    $enparellat = false;
                    $oponent = $jugador;

                    foreach ($this->participants as $jronda) {
                        if ($jugador == $jronda) {
                            $enparellat = true;
                            break;
                        }
                    }

                    if ($enparellat == false) {
                        //falta afagir a perticipants de ronda
                        break;
                    }
                }

                foreach ($rondes as $ronda) {
                    foreach ($ronda->getPartides() as $taula) {
                        if ($taula->getJugadorN() == $partida->getJugadorB()) {
                            if ($taula->getJugadorB()->getId() != $oponent->getId()) {
                                $partida->setJugadorN($jugadoract);
                            }
                        } elseif ($taula->getJugadorB() == $partida->getJugadorB()) {
                            if ($taula->getJugadorB()->getId() != $oponent->getId()) {
                                $partida->setJugadorB($jugadoract);
                            }
                        }
                    }
                }
            }
        }
        $this->addPartides($partida);
    }
}
