<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Protocol
 *
 * @ORM\Table(name="PROTOCOL")
 * @ORM\Entity
 */
class Protocol
{
    /**
     * @var string
     *
     * @ORM\Column(name="lib_protocol", type="string", length=15, nullable=true)
     */
    private $libProtocol;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_protocol", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProtocol;



    /**
     * Set libProtocol
     *
     * @param string $libProtocol
     *
     * @return Protocol
     */
    public function setLibProtocol($libProtocol)
    {
        $this->libProtocol = $libProtocol;

        return $this;
    }

    /**
     * Get libProtocol
     *
     * @return string
     */
    public function getLibProtocol()
    {
        return $this->libProtocol;
    }

    /**
     * Get idProtocol
     *
     * @return integer
     */
    public function getIdProtocol()
    {
        return $this->idProtocol;
    }
}
