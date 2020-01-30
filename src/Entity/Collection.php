<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CollectionRepository")
 */
class Collection
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rose;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $socle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $decoration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $led;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resultat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRose(): ?string
    {
        return $this->rose;
    }

    public function setRose(string $rose): self
    {
        $this->rose = $rose;

        return $this;
    }

    public function getSocle(): ?string
    {
        return $this->socle;
    }

    public function setSocle(string $socle): self
    {
        $this->socle = $socle;

        return $this;
    }

    public function getdecoration(): ?string
    {
        return $this->decoration;
    }

    public function setdecoration(string $decoration): self
    {
        $this->decoration = $decoration;

        return $this;
    }

    public function getLed(): ?string
    {
        return $this->led;
    }

    public function setLed(string $led): self
    {
        $this->led = $led;

        return $this;
    }


    public function getResultat(): ?string
    {
        return $this->resultat;
    }

    public function setResultat(string $resultat): self
    {
        $this->resultat = $resultat;

        return $this;
    }
}
