<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorrespondanceEquipementAdresseIp
 *
 * @ORM\Table(name="CORRESPONDANCE_EQUIPEMENT_ADRESSE_IP", uniqueConstraints={@ORM\UniqueConstraint(name="id_equipement_fk_ceap", columns={"id_equipement_fk_ceap", "id_adresse_ip_fk_ceap"})}, indexes={@ORM\Index(name="FK_corresp_equip_adress_ip1", columns={"id_adresse_ip_fk_ceap"}), @ORM\Index(name="IDX_FE7DAFA96EB983A2", columns={"id_equipement_fk_ceap"})})
 * @ORM\Entity
 */
class CorrespondanceEquipementAdresseIp
{
    /**
     * @var string
     *
     * @ORM\Column(name="info_com", type="string", length=25, nullable=true)
     */
    private $infoCom;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_equipement_adresse_ip", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipementAdresseIp;

    /**
     * @var \SIE\CoreBundle\Entity\Equipement
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\Equipement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipement_fk_ceap", referencedColumnName="id_equipement")
     * })
     */
    private $idEquipementFkCeap;

    /**
     * @var \SIE\CoreBundle\Entity\AdresseIpEquipement
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\AdresseIpEquipement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adresse_ip_fk_ceap", referencedColumnName="id_adresse_ip_equipement")
     * })
     */
    private $idAdresseIpFkCeap;



    /**
     * Set infoCom
     *
     * @param string $infoCom
     *
     * @return CorrespondanceEquipementAdresseIp
     */
    public function setInfoCom($infoCom)
    {
        $this->infoCom = $infoCom;

        return $this;
    }

    /**
     * Get infoCom
     *
     * @return string
     */
    public function getInfoCom()
    {
        return $this->infoCom;
    }

    /**
     * Get idEquipementAdresseIp
     *
     * @return integer
     */
    public function getIdEquipementAdresseIp()
    {
        return $this->idEquipementAdresseIp;
    }

    /**
     * Set idEquipementFkCeap
     *
     * @param \SIE\CoreBundle\Entity\Equipement $idEquipementFkCeap
     *
     * @return CorrespondanceEquipementAdresseIp
     */
    public function setIdEquipementFkCeap(\SIE\CoreBundle\Entity\Equipement $idEquipementFkCeap = null)
    {
        $this->idEquipementFkCeap = $idEquipementFkCeap;

        return $this;
    }

    /**
     * Get idEquipementFkCeap
     *
     * @return \SIE\CoreBundle\Entity\Equipement
     */
    public function getIdEquipementFkCeap()
    {
        return $this->idEquipementFkCeap;
    }

    /**
     * Set idAdresseIpFkCeap
     *
     * @param \SIE\CoreBundle\Entity\AdresseIpEquipement $idAdresseIpFkCeap
     *
     * @return CorrespondanceEquipementAdresseIp
     */
    public function setIdAdresseIpFkCeap(\SIE\CoreBundle\Entity\AdresseIpEquipement $idAdresseIpFkCeap = null)
    {
        $this->idAdresseIpFkCeap = $idAdresseIpFkCeap;

        return $this;
    }

    /**
     * Get idAdresseIpFkCeap
     *
     * @return \SIE\CoreBundle\Entity\AdresseIpEquipement
     */
    public function getIdAdresseIpFkCeap()
    {
        return $this->idAdresseIpFkCeap;
    }
}
