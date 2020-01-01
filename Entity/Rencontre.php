<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RencontreRepository")
 */
class Rencontre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Num;

    /**
     * @ORM\Column(type="integer")
     */
    private $resultat_dom;

    /**
     * @ORM\Column(type="integer")
     */
    private $resultat_ext;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_dom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_ext;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lettre_groupe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNum(): ?int
    {
        return $this->Num;
    }

    public function setNum(?int $Num): self
    {
        $this->Num = $Num;

        return $this;
    }

    public function getResultatDom(): ?int
    {
        return $this->resultat_dom;
    }

    public function setResultatDom(int $resultat_dom): self
    {
        $this->resultat_dom = $resultat_dom;

        return $this;
    }

    public function getResultatExt(): ?int
    {
        return $this->resultat_ext;
    }

    public function setResultatExt(int $resultat_ext): self
    {
        $this->resultat_ext = $resultat_ext;

        return $this;
    }

    public function getNomDom(): ?string
    {
        return $this->nom_dom;
    }

    public function setNomDom(string $nom_dom): self
    {
        $this->nom_dom = $nom_dom;

        return $this;
    }

    public function getNomExt(): ?string
    {
        return $this->nom_ext;
    }

    public function setNomExt(string $nom_ext): self
    {
        $this->nom_ext = $nom_ext;

        return $this;
    }

    public function getLettreGroupe(): ?string
    {
        return $this->lettre_groupe;
    }

    public function setLettreGroupe(?string $lettre_groupe): self
    {
        $this->lettre_groupe = $lettre_groupe;

        return $this;
    }
}
