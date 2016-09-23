<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="CONTRAT", uniqueConstraints={@ORM\UniqueConstraint(name="id_societe_fk_c", columns={"id_societe_fk_c", "id_central_fk_c"})}, indexes={@ORM\Index(name="FK_central_societe1", columns={"id_central_fk_c"}), @ORM\Index(name="IDX_5F716789D3FD6B18", columns={"id_societe_fk_c"})})
 * @ORM\Entity
 */
class Contrat
{
    /**
     * @var string
     *
     * @ORM\Column(name="lib_lien", type="string", length=50, nullable=true)
     */
    private $libLien;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_contrat", type="string", length=25, nullable=true)
     */
    private $libContrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_contrat", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContrat;

    /**
     * @var \SIE\CoreBundle\Entity\Societe
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\Societe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_societe_fk_c", referencedColumnName="id_societe")
     * })
     */
    private $idSocieteFkC;

    /**
     * @var \SIE\CoreBundle\Entity\Central
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\Central")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_central_fk_c", referencedColumnName="id_central")
     * })
     */
    private $idCentralFkC;



    /**
     * Set libLien
     *
     * @param string $libLien
     *
     * @return Contrat
     */
    public function setLibLien($libLien)
    {
        $this->libLien = $libLien;

        return $this;
    }

    /**
     * Get libLien
     *
     * @return string
     */
    public function getLibLien()
    {
        return $this->libLien;
    }

    /**
     * Set libContrat
     *
     * @param string $libContrat
     *
     * @return Contrat
     */
    public function setLibContrat($libContrat)
    {
        $this->libContrat = $libContrat;

        return $this;
    }

    /**
     * Get libContrat
     *
     * @return string
     */
    public function getLibContrat()
    {
        return $this->libContrat;
    }

    /**
     * Get idContrat
     *
     * @return integer
     */
    public function getIdContrat()
    {
        return $this->idContrat;
    }

    /**
     * Set idSocieteFkC
     *
     * @param \SIE\CoreBundle\Entity\Societe $idSocieteFkC
     *
     * @return Contrat
     */
    public function setIdSocieteFkC(\SIE\CoreBundle\Entity\Societe $idSocieteFkC = null)
    {
        $this->idSocieteFkC = $idSocieteFkC;

        return $this;
    }

    /**
     * Get idSocieteFkC
     *
     * @return \SIE\CoreBundle\Entity\Societe
     */
    public function getIdSocieteFkC()
    {
        return $this->idSocieteFkC;
    }

    /**
     * Set idCentralFkC
     *
     * @param \SIE\CoreBundle\Entity\Central $idCentralFkC
     *
     * @return Contrat
     */
    public function setIdCentralFkC(\SIE\CoreBundle\Entity\Central $idCentralFkC = null)
    {
        $this->idCentralFkC = $idCentralFkC;

        return $this;
    }

    /**
     * Get idCentralFkC
     *
     * @return \SIE\CoreBundle\Entity\Central
     */
    public function getIdCentralFkC()
    {
        return $this->idCentralFkC;
    }
}
