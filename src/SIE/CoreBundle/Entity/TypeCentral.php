<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeCentral
 *
 * @ORM\Table(name="TYPE_CENTRAL")
 * @ORM\Entity
 */
class TypeCentral
{
    /**
     * @var string
     *
     * @ORM\Column(name="lib_type_central", type="string", length=25, nullable=true)
     */
    private $libTypeCentral;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_central", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeCentral;



    /**
     * Set libTypeCentral
     *
     * @param string $libTypeCentral
     *
     * @return TypeCentral
     */
    public function setLibTypeCentral($libTypeCentral)
    {
        $this->libTypeCentral = $libTypeCentral;

        return $this;
    }

    /**
     * Get libTypeCentral
     *
     * @return string
     */
    public function getLibTypeCentral()
    {
        return $this->libTypeCentral;
    }

    /**
     * Get idTypeCentral
     *
     * @return integer
     */
    public function getIdTypeCentral()
    {
        return $this->idTypeCentral;
    }
}
