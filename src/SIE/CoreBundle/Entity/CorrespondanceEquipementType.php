<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorrespondanceEquipementType
 *
 * @ORM\Table(name="CORRESPONDANCE_EQUIPEMENT_TYPE", uniqueConstraints={@ORM\UniqueConstraint(name="id_equipement_fk_cet", columns={"id_equipement_fk_cet", "id_type_equipement_fk_cet"})}, indexes={@ORM\Index(name="FK_corresp_equipe_type1", columns={"id_type_equipement_fk_cet"}), @ORM\Index(name="IDX_10B10544B032D12A", columns={"id_equipement_fk_cet"})})
 * @ORM\Entity
 */
class CorrespondanceEquipementType
{
    /**
     * @var string
     *
     * @ORM\Column(name="info_comp", type="string", length=25, nullable=true)
     */
    private $infoComp;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_equipement_type", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipementType;

    /**
     * @var \SIE\CoreBundle\Entity\Equipement
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\Equipement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipement_fk_cet", referencedColumnName="id_equipement")
     * })
     */
    private $idEquipementFkCet;

    /**
     * @var \SIE\CoreBundle\Entity\TypeEquipement
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\TypeEquipement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_equipement_fk_cet", referencedColumnName="id_type_equipement")
     * })
     */
    private $idTypeEquipementFkCet;



    /**
     * Set infoComp
     *
     * @param string $infoComp
     *
     * @return CorrespondanceEquipementType
     */
    public function setInfoComp($infoComp)
    {
        $this->infoComp = $infoComp;

        return $this;
    }

    /**
     * Get infoComp
     *
     * @return string
     */
    public function getInfoComp()
    {
        return $this->infoComp;
    }

    /**
     * Get idEquipementType
     *
     * @return integer
     */
    public function getIdEquipementType()
    {
        return $this->idEquipementType;
    }

    /**
     * Set idEquipementFkCet
     *
     * @param \SIE\CoreBundle\Entity\Equipement $idEquipementFkCet
     *
     * @return CorrespondanceEquipementType
     */
    public function setIdEquipementFkCet(\SIE\CoreBundle\Entity\Equipement $idEquipementFkCet = null)
    {
        $this->idEquipementFkCet = $idEquipementFkCet;

        return $this;
    }

    /**
     * Get idEquipementFkCet
     *
     * @return \SIE\CoreBundle\Entity\Equipement
     */
    public function getIdEquipementFkCet()
    {
        return $this->idEquipementFkCet;
    }

    /**
     * Set idTypeEquipementFkCet
     *
     * @param \SIE\CoreBundle\Entity\TypeEquipement $idTypeEquipementFkCet
     *
     * @return CorrespondanceEquipementType
     */
    public function setIdTypeEquipementFkCet(\SIE\CoreBundle\Entity\TypeEquipement $idTypeEquipementFkCet = null)
    {
        $this->idTypeEquipementFkCet = $idTypeEquipementFkCet;

        return $this;
    }

    /**
     * Get idTypeEquipementFkCet
     *
     * @return \SIE\CoreBundle\Entity\TypeEquipement
     */
    public function getIdTypeEquipementFkCet()
    {
        return $this->idTypeEquipementFkCet;
    }
}
