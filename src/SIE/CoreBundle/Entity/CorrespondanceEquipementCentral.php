<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorrespondanceEquipementCentral
 *
 * @ORM\Table(name="CORRESPONDANCE_EQUIPEMENT_CENTRAL", uniqueConstraints={@ORM\UniqueConstraint(name="id_equipement_fk_ec", columns={"id_equipement_fk_ec", "id_central_fk_ec"})}, indexes={@ORM\Index(name="FK_equipement_central", columns={"id_central_fk_ec"}), @ORM\Index(name="IDX_51EB7BD9521A7A9B", columns={"id_equipement_fk_ec"})})
 * @ORM\Entity
 */
class CorrespondanceEquipementCentral
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_eq_central", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEqCentral;

    /**
     * @var \SIE\CoreBundle\Entity\Central
     *
     * @ORM\ManyToOne(targetEntity="\SIE\CoreBundle\Entity\Central")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_central_fk_ec", referencedColumnName="id_central")
     * })
     */
    private $idCentralFkEc;

    /**
     * @var \SIE\CoreBundle\Entity\Equipement
     *
     * @ORM\ManyToOne(targetEntity="\SIE\CoreBundle\Entity\Equipement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipement_fk_ec", referencedColumnName="id_equipement")
     * })
     */
    private $idEquipementFkEc;



    /**
     * Get idEqCentral
     *
     * @return integer
     */
    public function getIdEqCentral()
    {
        return $this->idEqCentral;
    }

    /**
     * Set idCentralFkEc
     *
     * @param \SIE\CoreBundle\Entity\Central $idCentralFkEc
     *
     * @return CorrespondanceEquipementCentral
     */
    public function setIdCentralFkEc(\SIE\CoreBundle\Entity\Central $idCentralFkEc = null)
    {
        $this->idCentralFkEc = $idCentralFkEc;

        return $this;
    }

    /**
     * Get idCentralFkEc
     *
     * @return \SIE\CoreBundle\Entity\Central
     */
    public function getIdCentralFkEc()
    {
        return $this->idCentralFkEc;
    }

    /**
     * Set idEquipementFkEc
     *
     * @param \SIE\CoreBundle\Entity\Equipement $idEquipementFkEc
     *
     * @return CorrespondanceEquipementCentral
     */
    public function setIdEquipementFkEc(\SIE\CoreBundle\Entity\Equipement $idEquipementFkEc = null)
    {
        $this->idEquipementFkEc = $idEquipementFkEc;

        return $this;
    }

    /**
     * Get idEquipementFkEc
     *
     * @return \SIE\CoreBundle\Entity\Equipement
     */
    public function getIdEquipementFkEc()
    {
        return $this->idEquipementFkEc;
    }
}
