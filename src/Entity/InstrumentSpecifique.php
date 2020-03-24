<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InstrumentSpecifiqueRepository")
 */
class InstrumentSpecifique
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Poste", inversedBy="instruments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $poste;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Marque", inversedBy="instruments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $marque;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPoste(): ?Poste
    {
        return $this->poste;
    }

    public function setPoste(?Poste $poste): self
    {
        $this->poste = $poste;

        return $this;
    }

    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): self
    {
        $this->marque = $marque;

        return $this;
    }
}
