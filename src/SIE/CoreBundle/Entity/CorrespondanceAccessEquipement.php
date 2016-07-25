<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorrespondanceAccessEquipement
 *
 * @ORM\Table(name="CORRESPONDANCE_ACCESS_EQUIPEMENT", uniqueConstraints={@ORM\UniqueConstraint(name="id_access_fk", columns={"id_access_fk", "id_equipement_fk_ae"})}, indexes={@ORM\Index(name="FK_equipement_access", columns={"id_equipement_fk_ae"}), @ORM\Index(name="IDX_76E2A7C1D8F8DAB6", columns={"id_access_fk"})})
 * @ORM\Entity
 */
class CorrespondanceAccessEquipement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_access_equipement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAccessEquipement;

    /**
     * @var \SIE\CoreBundle\Entity\Access
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\Access")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_access_fk", referencedColumnName="id_access")
     * })
     */
    private $idAccessFk;

    /**
     * @var \SIE\CoreBundle\Entity\Equipement
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\Equipement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipement_fk_ae", referencedColumnName="id_equipement")
     * })
     */
    private $idEquipementFkAe;



    /**
     * Get idAccessEquipement
     *
     * @return integer
     */
    public function getIdAccessEquipement()
    {
        return $this->idAccessEquipement;
    }

    /**
     * Set idAccessFk
     *
     * @param \SIE\CoreBundle\Entity\Access $idAccessFk
     *
     * @return CorrespondanceAccessEquipement
     */
    public function setIdAccessFk(\SIE\CoreBundle\Entity\Access $idAccessFk = null)
    {
        $this->idAccessFk = $idAccessFk;

        return $this;
    }

    /**
     * Get idAccessFk
     *
     * @return \SIE\CoreBundle\Entity\Access
     */
    public function getIdAccessFk()
    {
        return $this->idAccessFk;
    }

    /**
     * Set idEquipementFkAe
     *
     * @param \SIE\CoreBundle\Entity\Equipement $idEquipementFkAe
     *
     * @return CorrespondanceAccessEquipement
     */
    public function setIdEquipementFkAe(\SIE\CoreBundle\Entity\Equipement $idEquipementFkAe = null)
    {
        $this->idEquipementFkAe = $idEquipementFkAe;

        return $this;
    }

    /**
     * Get idEquipementFkAe
     *
     * @return \SIE\CoreBundle\Entity\Equipement
     */
    public function getIdEquipementFkAe()
    {
        return $this->idEquipementFkAe;
    }
}
