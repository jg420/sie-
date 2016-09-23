<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DirectionRegionales
 *
 * @ORM\Table(name="DIRECTION_REGIONALES")
 * @ORM\Entity
 */
class DirectionRegionales
{
    /**
     * @var string
     *
     * @ORM\Column(name="lib_direction", type="string", length=25, nullable=false)
     */
    private $libDirection;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_direction", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDirection;



    /**
     * Set libDirection
     *
     * @param string $libDirection
     *
     * @return DirectionRegionales
     */
    public function setLibDirection($libDirection)
    {
        $this->libDirection = $libDirection;

        return $this;
    }

    /**
     * Get libDirection
     *
     * @return string
     */
    public function getLibDirection()
    {
        return $this->libDirection;
    }

    /**
     * Get idDirection
     *
     * @return integer
     */
    public function getIdDirection()
    {
        return $this->idDirection;
    }
}
