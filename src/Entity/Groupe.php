<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GroupeRepository")
 */
class Groupe
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
    private $id_groupe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lettre;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $but;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdGroupe(): ?int
    {
        return $this->id_groupe;
    }

    public function setIdGroupe(int $id_groupe): self
    {
        $this->id_groupe = $id_groupe;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLettre(): ?string
    {
        return $this->lettre;
    }

    public function setLettre(?string $lettre): self
    {
        $this->lettre = $lettre;

        return $this;
    }

    public function getBut(): ?int
    {
        return $this->but;
    }

    public function setBut(?int $but): self
    {
        $this->but = $but;

        return $this;
    }
}
