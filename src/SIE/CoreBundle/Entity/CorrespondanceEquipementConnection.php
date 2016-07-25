<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorrespondanceEquipementConnection
 *
 * @ORM\Table(name="CORRESPONDANCE_EQUIPEMENT_CONNECTION", uniqueConstraints={@ORM\UniqueConstraint(name="id_equipement_fk_cect", columns={"id_equipement_fk_cect", "id_type_connection_fk_cect"})}, indexes={@ORM\Index(name="FK_corresp_equip_connection2", columns={"id_type_connection_fk_cect"}), @ORM\Index(name="IDX_B8FA920E5BE22539", columns={"id_equipement_fk_cect"})})
 * @ORM\Entity
 */
class CorrespondanceEquipementConnection
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
     * @ORM\Column(name="id_equipement_connection", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipementConnection;

    /**
     * @var \SIE\CoreBundle\Entity\Equipement
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\Equipement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipement_fk_cect", referencedColumnName="id_equipement")
     * })
     */
    private $idEquipementFkCect;

    /**
     * @var \SIE\CoreBundle\Entity\TypeConnectionEquipement
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\TypeConnectionEquipement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_connection_fk_cect", referencedColumnName="id_type_connection")
     * })
     */
    private $idTypeConnectionFkCect;



    /**
     * Set infoComp
     *
     * @param string $infoComp
     *
     * @return CorrespondanceEquipementConnection
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
     * Get idEquipementConnection
     *
     * @return integer
     */
    public function getIdEquipementConnection()
    {
        return $this->idEquipementConnection;
    }

    /**
     * Set idEquipementFkCect
     *
     * @param \SIE\CoreBundle\Entity\Equipement $idEquipementFkCect
     *
     * @return CorrespondanceEquipementConnection
     */
    public function setIdEquipementFkCect(\SIE\CoreBundle\Entity\Equipement $idEquipementFkCect = null)
    {
        $this->idEquipementFkCect = $idEquipementFkCect;

        return $this;
    }

    /**
     * Get idEquipementFkCect
     *
     * @return \SIE\CoreBundle\Entity\Equipement
     */
    public function getIdEquipementFkCect()
    {
        return $this->idEquipementFkCect;
    }

    /**
     * Set idTypeConnectionFkCect
     *
     * @param \SIE\CoreBundle\Entity\TypeConnectionEquipement $idTypeConnectionFkCect
     *
     * @return CorrespondanceEquipementConnection
     */
    public function setIdTypeConnectionFkCect(\SIE\CoreBundle\Entity\TypeConnectionEquipement $idTypeConnectionFkCect = null)
    {
        $this->idTypeConnectionFkCect = $idTypeConnectionFkCect;

        return $this;
    }

    /**
     * Get idTypeConnectionFkCect
     *
     * @return \SIE\CoreBundle\Entity\TypeConnectionEquipement
     */
    public function getIdTypeConnectionFkCect()
    {
        return $this->idTypeConnectionFkCect;
    }
}
