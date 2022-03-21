<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tailler
 *
 * @ORM\Table(name="tailler", uniqueConstraints={@ORM\UniqueConstraint(name="num_haie", columns={"num_haie", "num_devis"})}, indexes={@ORM\Index(name="numdevis", columns={"num_devis"})})
 * @ORM\Entity
 */
class Tailler
{
    /**
     * @var int
     *
     * @ORM\Column(name="longueur", type="integer", nullable=false)
     */
    private $longueur;

    /**
     * @var int
     *
     * @ORM\Column(name="hauteur", type="integer", nullable=false)
     */
    private $hauteur;

    /**
     * @var \Devis
     *
     * @ORM\ManyToOne(targetEntity="Devis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="num_devis", referencedColumnName="id")
     * })
     */
    private $numDevis;

    /**
     * @var \Haie
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Haie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="num_haie", referencedColumnName="id")
     * })
     */
    private $numHaie;

    public function getLongueur(): ?int
    {
        return $this->longueur;
    }

    public function setLongueur(int $longueur): self
    {
        $this->longueur = $longueur;

        return $this;
    }

    public function getHauteur(): ?int
    {
        return $this->hauteur;
    }

    public function setHauteur(int $hauteur): self
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    public function getNumDevis(): ?Devis
    {
        return $this->numDevis;
    }

    public function setNumDevis(?Devis $numDevis): self
    {
        $this->numDevis = $numDevis;

        return $this;
    }

    public function getNumHaie(): ?Haie
    {
        return $this->numHaie;
    }

    public function setNumHaie(?Haie $numHaie): self
    {
        $this->numHaie = $numHaie;

        return $this;
    }


}
