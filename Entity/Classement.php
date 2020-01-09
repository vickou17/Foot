<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClassementRepository")
 */
class Classement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $rank;

    /**
     * @ORM\Column(type="integer")
     */
    private $points;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_eq;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $but_eq;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lettre_gr;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_match;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function getNomEq(): ?string
    {
        return $this->nom_eq;
    }

    public function setNomEq(string $nom_eq): self
    {
        $this->nom_eq = $nom_eq;

        return $this;
    }

    public function getButEq(): ?int
    {
        return $this->but_eq;
    }

    public function setButEq(?int $but_eq): self
    {
        $this->but_eq = $but_eq;

        return $this;
    }

    public function getLettreGr(): ?string
    {
        return $this->lettre_gr;
    }

    public function setLettreGr(?string $lettre_gr): self
    {
        $this->lettre_gr = $lettre_gr;

        return $this;
    }

    public function getNbMatch(): ?int
    {
        return $this->nb_match;
    }

    public function setNbMatch(int $nb_match): self
    {
        $this->nb_match = $nb_match;

        return $this;
    }

}
