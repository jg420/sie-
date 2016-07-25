<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Central
 *
 * @ORM\Table(name="CENTRAL", indexes={@ORM\Index(name="FK_central_dr", columns={"id_direction"}), @ORM\Index(name="FK_type_central", columns={"id_type_central"}), @ORM\Index(name="FK_central_cex", columns={"id_cex"})})
 * @ORM\Entity
 * 
 * @ExclusionPolicy("all") 
 */
class Central
{
    /**
     * @var string
     *
     * @ORM\Column(name="lib_central", type="string", length=35, nullable=true)
     */
    private $libCentral;

    /**
     * @var integer
     *
     * @ORM\Column(name="etendue_central", type="integer", nullable=true)
     */
    private $etendueCentral;

    /**
     * @var string
     *
     * @ORM\Column(name="code_analytique", type="string", length=35, nullable=true)
     */
    private $codeAnalytique;

    /**
     * @var string
     *
     * @ORM\Column(name="societe", type="string", length=30, nullable=true)
     */
    private $societe;

    /**
     * @var integer
     * 
     *  @Expose
     *
     * @ORM\Column(name="id_central", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCentral;

    /**
     * @var \SIE\CoreBundle\Entity\TypeCentral
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\TypeCentral")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_central", referencedColumnName="id_type_central")
     * })
     */
    private $idTypeCentral;

    /**
     * @var \SIE\CoreBundle\Entity\DirectionRegionales
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\DirectionRegionales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_direction", referencedColumnName="id_direction")
     * })
     */
    private $idDirection;

    /**
     * @var \SIE\CoreBundle\Entity\ChargeExploitation
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\ChargeExploitation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cex", referencedColumnName="id_cex")
     * })
     */
    private $idCex;



    /**
     * Set libCentral
     *
     * @param string $libCentral
     *
     * @return Central
     */
    public function setLibCentral($libCentral)
    {
        $this->libCentral = $libCentral;

        return $this;
    }

    /**
     * Get libCentral
     *
     * @return string
     */
    public function getLibCentral()
    {
        return $this->libCentral;
    }

    /**
     * Set etendueCentral
     *
     * @param integer $etendueCentral
     *
     * @return Central
     */
    public function setEtendueCentral($etendueCentral)
    {
        $this->etendueCentral = $etendueCentral;

        return $this;
    }

    /**
     * Get etendueCentral
     *
     * @return integer
     */
    public function getEtendueCentral()
    {
        return $this->etendueCentral;
    }

    /**
     * Set codeAnalytique
     *
     * @param string $codeAnalytique
     *
     * @return Central
     */
    public function setCodeAnalytique($codeAnalytique)
    {
        $this->codeAnalytique = $codeAnalytique;

        return $this;
    }

    /**
     * Get codeAnalytique
     *
     * @return string
     */
    public function getCodeAnalytique()
    {
        return $this->codeAnalytique;
    }

    /**
     * Set societe
     *
     * @param string $societe
     *
     * @return Central
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Get idCentral
     *  @Expose
     * @return integer
     */
    public function getIdCentral()
    {
        return $this->idCentral;
    }

    /**
     * Set idTypeCentral
     *
     * @param \SIE\CoreBundle\Entity\TypeCentral $idTypeCentral
     *
     * @return Central
     */
    public function setIdTypeCentral(\SIE\CoreBundle\Entity\TypeCentral $idTypeCentral = null)
    {
        $this->idTypeCentral = $idTypeCentral;

        return $this;
    }

    /**
     * Get idTypeCentral
     *
     * @return \SIE\CoreBundle\Entity\TypeCentral
     */
    public function getIdTypeCentral()
    {
        return $this->idTypeCentral;
    }

    /**
     * Set idDirection
     *
     * @param \SIE\CoreBundle\Entity\DirectionRegionales $idDirection
     *
     * @return Central
     */
    public function setIdDirection(\SIE\CoreBundle\Entity\DirectionRegionales $idDirection = null)
    {
        $this->idDirection = $idDirection;

        return $this;
    }

    /**
     * Get idDirection
     *
     * @return \SIE\CoreBundle\Entity\DirectionRegionales
     */
    public function getIdDirection()
    {
        return $this->idDirection;
    }

    /**
     * Set idCex
     *
     * @param \SIE\CoreBundle\Entity\ChargeExploitation $idCex
     *
     * @return Central
     */
    public function setIdCex(\SIE\CoreBundle\Entity\ChargeExploitation $idCex = null)
    {
        $this->idCex = $idCex;

        return $this;
    }

    /**
     * Get idCex
     *
     * @return \SIE\CoreBundle\Entity\ChargeExploitation
     */
    public function getIdCex()
    {
        return $this->idCex;
    }
}
