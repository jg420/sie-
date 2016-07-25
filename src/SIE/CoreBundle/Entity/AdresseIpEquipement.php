<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdresseIpEquipement
 *
 * @ORM\Table(name="ADRESSE_IP_EQUIPEMENT")
 * @ORM\Entity
 */
class AdresseIpEquipement
{
    /**
     * @var string
     *
     * @ORM\Column(name="adresse_ip_equipement", type="string", length=50, nullable=true)
     */
    private $adresseIpEquipement;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_adresse_ip_equipement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdresseIpEquipement;



    /**
     * Set adresseIpEquipement
     *
     * @param string $adresseIpEquipement
     *
     * @return AdresseIpEquipement
     */
    public function setAdresseIpEquipement($adresseIpEquipement)
    {
        $this->adresseIpEquipement = $adresseIpEquipement;

        return $this;
    }

    /**
     * Get adresseIpEquipement
     *
     * @return string
     */
    public function getAdresseIpEquipement()
    {
        return $this->adresseIpEquipement;
    }

    /**
     * Get idAdresseIpEquipement
     *
     * @return integer
     */
    public function getIdAdresseIpEquipement()
    {
        return $this->idAdresseIpEquipement;
    }
}
