<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorrespondanceCentralConfig
 *
 * @ORM\Table(name="CORRESPONDANCE_CENTRAL_CONFIG", uniqueConstraints={@ORM\UniqueConstraint(name="id_central_fk_ccc", columns={"id_central_fk_ccc", "id_config_fk_ccc"})}, indexes={@ORM\Index(name="FK_central_config2", columns={"id_config_fk_ccc"}), @ORM\Index(name="IDX_33240E2D1883BDE1", columns={"id_central_fk_ccc"})})
 * @ORM\Entity
 */
class CorrespondanceCentralConfig
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_central_config", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCentralConfig;

    /**
     * @var \SIE\CoreBundle\Entity\Central
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\Central")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_central_fk_ccc", referencedColumnName="id_central")
     * })
     */
    private $idCentralFkCcc;

    /**
     * @var \SIE\CoreBundle\Entity\Config
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\Config")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_config_fk_ccc", referencedColumnName="id_config")
     * })
     */
    private $idConfigFkCcc;



    /**
     * Get idCentralConfig
     *
     * @return integer
     */
    public function getIdCentralConfig()
    {
        return $this->idCentralConfig;
    }

    /**
     * Set idCentralFkCcc
     *
     * @param \SIE\CoreBundle\Entity\Central $idCentralFkCcc
     *
     * @return CorrespondanceCentralConfig
     */
    public function setIdCentralFkCcc(\SIE\CoreBundle\Entity\Central $idCentralFkCcc = null)
    {
        $this->idCentralFkCcc = $idCentralFkCcc;

        return $this;
    }

    /**
     * Get idCentralFkCcc
     *
     * @return \SIE\CoreBundle\Entity\Central
     */
    public function getIdCentralFkCcc()
    {
        return $this->idCentralFkCcc;
    }

    /**
     * Set idConfigFkCcc
     *
     * @param \SIE\CoreBundle\Entity\Config $idConfigFkCcc
     *
     * @return CorrespondanceCentralConfig
     */
    public function setIdConfigFkCcc(\SIE\CoreBundle\Entity\Config $idConfigFkCcc = null)
    {
        $this->idConfigFkCcc = $idConfigFkCcc;

        return $this;
    }

    /**
     * Get idConfigFkCcc
     *
     * @return \SIE\CoreBundle\Entity\Config
     */
    public function getIdConfigFkCcc()
    {
        return $this->idConfigFkCcc;
    }
}
