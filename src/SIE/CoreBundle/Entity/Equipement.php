<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipement
 *
 * @ORM\Table(name="EQUIPEMENT", indexes={@ORM\Index(name="FK_type_equiepemnt", columns={"id_type_equipement"}), @ORM\Index(name="FK_constructeur_equipement", columns={"id_constructeur"})})
 * @ORM\Entity
 */
class Equipement
{
    /**
     * @var string
     *
     * @ORM\Column(name="lib_equipement", type="string", length=30, nullable=true)
     */
    private $libEquipement;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_equipement", type="integer", nullable=true)
     */
    private $prixEquipement;

    /**
     * @var integer
     *
     * @ORM\Column(name="n_serie_equipement", type="integer", nullable=false)
     */
    private $nSerieEquipement;

    /**
     * @var integer
     *
     * @ORM\Column(name="version_actuel_equipement", type="integer", nullable=true)
     */
    private $versionActuelEquipement;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_equipement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipement;

    /**
     * @var \SIE\CoreBundle\Entity\TypeEquipement
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\TypeEquipement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_equipement", referencedColumnName="id_type_equipement")
     * })
     */
    private $idTypeEquipement;

    /**
     * @var \SIE\CoreBundle\Entity\Constructeur
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\Constructeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_constructeur", referencedColumnName="id_constructeur")
     * })
     */
    private $idConstructeur;



    /**
     * Set libEquipement
     *
     * @param string $libEquipement
     *
     * @return Equipement
     */
    public function setLibEquipement($libEquipement)
    {
        $this->libEquipement = $libEquipement;

        return $this;
    }

    /**
     * Get libEquipement
     *
     * @return string
     */
    public function getLibEquipement()
    {
        return $this->libEquipement;
    }

    /**
     * Set prixEquipement
     *
     * @param integer $prixEquipement
     *
     * @return Equipement
     */
    public function setPrixEquipement($prixEquipement)
    {
        $this->prixEquipement = $prixEquipement;

        return $this;
    }

    /**
     * Get prixEquipement
     *
     * @return integer
     */
    public function getPrixEquipement()
    {
        return $this->prixEquipement;
    }

    /**
     * Set nSerieEquipement
     *
     * @param integer $nSerieEquipement
     *
     * @return Equipement
     */
    public function setNSerieEquipement($nSerieEquipement)
    {
        $this->nSerieEquipement = $nSerieEquipement;

        return $this;
    }

    /**
     * Get nSerieEquipement
     *
     * @return integer
     */
    public function getNSerieEquipement()
    {
        return $this->nSerieEquipement;
    }

    /**
     * Set versionActuelEquipement
     *
     * @param integer $versionActuelEquipement
     *
     * @return Equipement
     */
    public function setVersionActuelEquipement($versionActuelEquipement)
    {
        $this->versionActuelEquipement = $versionActuelEquipement;

        return $this;
    }

    /**
     * Get versionActuelEquipement
     *
     * @return integer
     */
    public function getVersionActuelEquipement()
    {
        return $this->versionActuelEquipement;
    }

    /**
     * Get idEquipement
     *
     * @return integer
     */
    public function getIdEquipement()
    {
        return $this->idEquipement;
    }

    /**
     * Set idTypeEquipement
     *
     * @param \SIE\CoreBundle\Entity\TypeEquipement $idTypeEquipement
     *
     * @return Equipement
     */
    public function setIdTypeEquipement(\SIE\CoreBundle\Entity\TypeEquipement $idTypeEquipement = null)
    {
        $this->idTypeEquipement = $idTypeEquipement;

        return $this;
    }

    /**
     * Get idTypeEquipement
     *
     * @return \SIE\CoreBundle\Entity\TypeEquipement
     */
    public function getIdTypeEquipement()
    {
        return $this->idTypeEquipement;
    }

    /**
     * Set idConstructeur
     *
     * @param \SIE\CoreBundle\Entity\Constructeur $idConstructeur
     *
     * @return Equipement
     */
    public function setIdConstructeur(\SIE\CoreBundle\Entity\Constructeur $idConstructeur = null)
    {
        $this->idConstructeur = $idConstructeur;

        return $this;
    }

    /**
     * Get idConstructeur
     *
     * @return \SIE\CoreBundle\Entity\Constructeur
     */
    public function getIdConstructeur()
    {
        return $this->idConstructeur;
    }
}
