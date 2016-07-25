<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdresseMacEquipement
 *
 * @ORM\Table(name="ADRESSE_MAC_EQUIPEMENT")
 * @ORM\Entity
 */
class AdresseMacEquipement
{
    /**
     * @var string
     *
     * @ORM\Column(name="adresse_mac_equipement", type="string", length=50, nullable=true)
     */
    private $adresseMacEquipement;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_adresse_mac_equipement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdresseMacEquipement;



    /**
     * Set adresseMacEquipement
     *
     * @param string $adresseMacEquipement
     *
     * @return AdresseMacEquipement
     */
    public function setAdresseMacEquipement($adresseMacEquipement)
    {
        $this->adresseMacEquipement = $adresseMacEquipement;

        return $this;
    }

    /**
     * Get adresseMacEquipement
     *
     * @return string
     */
    public function getAdresseMacEquipement()
    {
        return $this->adresseMacEquipement;
    }

    /**
     * Get idAdresseMacEquipement
     *
     * @return integer
     */
    public function getIdAdresseMacEquipement()
    {
        return $this->idAdresseMacEquipement;
    }
}
