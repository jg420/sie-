<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeEquipement
 *
 * @ORM\Table(name="TYPE_EQUIPEMENT")
 * @ORM\Entity
 */
class TypeEquipement
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle_type_equipement", type="string", length=25, nullable=true)
     */
    private $libelleTypeEquipement;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_equipement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeEquipement;



    /**
     * Set libelleTypeEquipement
     *
     * @param string $libelleTypeEquipement
     *
     * @return TypeEquipement
     */
    public function setLibelleTypeEquipement($libelleTypeEquipement)
    {
        $this->libelleTypeEquipement = $libelleTypeEquipement;

        return $this;
    }

    /**
     * Get libelleTypeEquipement
     *
     * @return string
     */
    public function getLibelleTypeEquipement()
    {
        return $this->libelleTypeEquipement;
    }

    /**
     * Get idTypeEquipement
     *
     * @return integer
     */
    public function getIdTypeEquipement()
    {
        return $this->idTypeEquipement;
    }
}
