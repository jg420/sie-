<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Access
 *
 * @ORM\Table(name="ACCESS", indexes={@ORM\Index(name="FK_protocol_access0", columns={"id_protocol"}), @ORM\Index(name="FK_access_equiepemnt", columns={"id_adresse_ip_equipement"})})
 * @ORM\Entity
 */
class Access
{
    /**
     * @var integer
     *
     * @ORM\Column(name="n_port", type="integer", nullable=false)
     */
    private $nPort;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_access", type="string", length=50, nullable=true)
     */
    private $libAccess;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_access", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAccess;

    /**
     * @var \SIE\CoreBundle\Entity\Protocol
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\Protocol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_protocol", referencedColumnName="id_protocol")
     * })
     */
    private $idProtocol;

    /**
     * @var \SIE\CoreBundle\Entity\AdresseIpEquipement
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\AdresseIpEquipement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adresse_ip_equipement", referencedColumnName="id_adresse_ip_equipement")
     * })
     */
    private $idAdresseIpEquipement;



    /**
     * Set nPort
     *
     * @param integer $nPort
     *
     * @return Access
     */
    public function setNPort($nPort)
    {
        $this->nPort = $nPort;

        return $this;
    }

    /**
     * Get nPort
     *
     * @return integer
     */
    public function getNPort()
    {
        return $this->nPort;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Access
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Access
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set libAccess
     *
     * @param string $libAccess
     *
     * @return Access
     */
    public function setLibAccess($libAccess)
    {
        $this->libAccess = $libAccess;

        return $this;
    }

    /**
     * Get libAccess
     *
     * @return string
     */
    public function getLibAccess()
    {
        return $this->libAccess;
    }

    /**
     * Get idAccess
     *
     * @return integer
     */
    public function getIdAccess()
    {
        return $this->idAccess;
    }

    /**
     * Set idProtocol
     *
     * @param \SIE\CoreBundle\Entity\Protocol $idProtocol
     *
     * @return Access
     */
    public function setIdProtocol(\SIE\CoreBundle\Entity\Protocol $idProtocol = null)
    {
        $this->idProtocol = $idProtocol;

        return $this;
    }

    /**
     * Get idProtocol
     *
     * @return \SIE\CoreBundle\Entity\Protocol
     */
    public function getIdProtocol()
    {
        return $this->idProtocol;
    }

    /**
     * Set idAdresseIpEquipement
     *
     * @param \SIE\CoreBundle\Entity\AdresseIpEquipement $idAdresseIpEquipement
     *
     * @return Access
     */
    public function setIdAdresseIpEquipement(\SIE\CoreBundle\Entity\AdresseIpEquipement $idAdresseIpEquipement = null)
    {
        $this->idAdresseIpEquipement = $idAdresseIpEquipement;

        return $this;
    }

    /**
     * Get idAdresseIpEquipement
     *
     * @return \SIE\CoreBundle\Entity\AdresseIpEquipement
     */
    public function getIdAdresseIpEquipement()
    {
        return $this->idAdresseIpEquipement;
    }
}
