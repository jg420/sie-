<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorrespondanceEquipementAdresseMac
 *
 * @ORM\Table(name="CORRESPONDANCE_EQUIPEMENT_ADRESSE_MAC", uniqueConstraints={@ORM\UniqueConstraint(name="id_equipement_fk_ceam", columns={"id_equipement_fk_ceam", "id_adresse_mac_fk_ceam"})}, indexes={@ORM\Index(name="FK_corresp_equip_adress_mac2", columns={"id_adresse_mac_fk_ceam"}), @ORM\Index(name="IDX_C6F31288DBFEF7B", columns={"id_equipement_fk_ceam"})})
 * @ORM\Entity
 */
class CorrespondanceEquipementAdresseMac
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
     * @ORM\Column(name="id_equipement_adresse_mac", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipementAdresseMac;

    /**
     * @var \SIE\CoreBundle\Entity\Equipement
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\Equipement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipement_fk_ceam", referencedColumnName="id_equipement")
     * })
     */
    private $idEquipementFkCeam;

    /**
     * @var \SIE\CoreBundle\Entity\AdresseMacEquipement
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\AdresseMacEquipement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adresse_mac_fk_ceam", referencedColumnName="id_adresse_mac_equipement")
     * })
     */
    private $idAdresseMacFkCeam;



    /**
     * Set infoComp
     *
     * @param string $infoComp
     *
     * @return CorrespondanceEquipementAdresseMac
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
     * Get idEquipementAdresseMac
     *
     * @return integer
     */
    public function getIdEquipementAdresseMac()
    {
        return $this->idEquipementAdresseMac;
    }

    /**
     * Set idEquipementFkCeam
     *
     * @param \SIE\CoreBundle\Entity\Equipement $idEquipementFkCeam
     *
     * @return CorrespondanceEquipementAdresseMac
     */
    public function setIdEquipementFkCeam(\SIE\CoreBundle\Entity\Equipement $idEquipementFkCeam = null)
    {
        $this->idEquipementFkCeam = $idEquipementFkCeam;

        return $this;
    }

    /**
     * Get idEquipementFkCeam
     *
     * @return \SIE\CoreBundle\Entity\Equipement
     */
    public function getIdEquipementFkCeam()
    {
        return $this->idEquipementFkCeam;
    }

    /**
     * Set idAdresseMacFkCeam
     *
     * @param \SIE\CoreBundle\Entity\AdresseMacEquipement $idAdresseMacFkCeam
     *
     * @return CorrespondanceEquipementAdresseMac
     */
    public function setIdAdresseMacFkCeam(\SIE\CoreBundle\Entity\AdresseMacEquipement $idAdresseMacFkCeam = null)
    {
        $this->idAdresseMacFkCeam = $idAdresseMacFkCeam;

        return $this;
    }

    /**
     * Get idAdresseMacFkCeam
     *
     * @return \SIE\CoreBundle\Entity\AdresseMacEquipement
     */
    public function getIdAdresseMacFkCeam()
    {
        return $this->idAdresseMacFkCeam;
    }
}
