<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorrespondanceEquipementConfig
 *
 * @ORM\Table(name="CORRESPONDANCE_EQUIPEMENT_CONFIG", uniqueConstraints={@ORM\UniqueConstraint(name="id_equipement_fk_cecf", columns={"id_equipement_fk_cecf", "id_config_fk_cecf"})}, indexes={@ORM\Index(name="FK_corresp_equip_config", columns={"id_config_fk_cecf"}), @ORM\Index(name="IDX_2F56924BA85B5471", columns={"id_equipement_fk_cecf"})})
 * @ORM\Entity
 */
class CorrespondanceEquipementConfig
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
     * @ORM\Column(name="id_equipement_config", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipementConfig;

    /**
     * @var \SIE\CoreBundle\Entity\Config
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\Config")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_config_fk_cecf", referencedColumnName="id_config")
     * })
     */
    private $idConfigFkCecf;

    /**
     * @var \SIE\CoreBundle\Entity\Equipement
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\Equipement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipement_fk_cecf", referencedColumnName="id_equipement")
     * })
     */
    private $idEquipementFkCecf;



    /**
     * Set infoComp
     *
     * @param string $infoComp
     *
     * @return CorrespondanceEquipementConfig
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
     * Get idEquipementConfig
     *
     * @return integer
     */
    public function getIdEquipementConfig()
    {
        return $this->idEquipementConfig;
    }

    /**
     * Set idConfigFkCecf
     *
     * @param \SIE\CoreBundle\Entity\Config $idConfigFkCecf
     *
     * @return CorrespondanceEquipementConfig
     */
    public function setIdConfigFkCecf(\SIE\CoreBundle\Entity\Config $idConfigFkCecf = null)
    {
        $this->idConfigFkCecf = $idConfigFkCecf;

        return $this;
    }

    /**
     * Get idConfigFkCecf
     *
     * @return \SIE\CoreBundle\Entity\Config
     */
    public function getIdConfigFkCecf()
    {
        return $this->idConfigFkCecf;
    }

    /**
     * Set idEquipementFkCecf
     *
     * @param \SIE\CoreBundle\Entity\Equipement $idEquipementFkCecf
     *
     * @return CorrespondanceEquipementConfig
     */
    public function setIdEquipementFkCecf(\SIE\CoreBundle\Entity\Equipement $idEquipementFkCecf = null)
    {
        $this->idEquipementFkCecf = $idEquipementFkCecf;

        return $this;
    }

    /**
     * Get idEquipementFkCecf
     *
     * @return \SIE\CoreBundle\Entity\Equipement
     */
    public function getIdEquipementFkCecf()
    {
        return $this->idEquipementFkCecf;
    }
}
