<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 *
 * @ORM\Table(name="CONFIG")
 * @ORM\Entity
 */
class Config
{
    /**
     * @var string
     *
     * @ORM\Column(name="lien_config", type="string", length=90, nullable=true)
     */
    private $lienConfig;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_config", type="string", length=75, nullable=true)
     */
    private $libConfig;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_config", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConfig;



    /**
     * Set lienConfig
     *
     * @param string $lienConfig
     *
     * @return Config
     */
    public function setLienConfig($lienConfig)
    {
        $this->lienConfig = $lienConfig;

        return $this;
    }

    /**
     * Get lienConfig
     *
     * @return string
     */
    public function getLienConfig()
    {
        return $this->lienConfig;
    }

    /**
     * Set libConfig
     *
     * @param string $libConfig
     *
     * @return Config
     */
    public function setLibConfig($libConfig)
    {
        $this->libConfig = $libConfig;

        return $this;
    }

    /**
     * Get libConfig
     *
     * @return string
     */
    public function getLibConfig()
    {
        return $this->libConfig;
    }

    /**
     * Get idConfig
     *
     * @return integer
     */
    public function getIdConfig()
    {
        return $this->idConfig;
    }
}
