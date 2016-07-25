<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeConnectionEquipement
 *
 * @ORM\Table(name="TYPE_CONNECTION_EQUIPEMENT")
 * @ORM\Entity
 */
class TypeConnectionEquipement
{
    /**
     * @var string
     *
     * @ORM\Column(name="lib_type_connection", type="string", length=25, nullable=true)
     */
    private $libTypeConnection;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_connection", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeConnection;



    /**
     * Set libTypeConnection
     *
     * @param string $libTypeConnection
     *
     * @return TypeConnectionEquipement
     */
    public function setLibTypeConnection($libTypeConnection)
    {
        $this->libTypeConnection = $libTypeConnection;

        return $this;
    }

    /**
     * Get libTypeConnection
     *
     * @return string
     */
    public function getLibTypeConnection()
    {
        return $this->libTypeConnection;
    }

    /**
     * Get idTypeConnection
     *
     * @return integer
     */
    public function getIdTypeConnection()
    {
        return $this->idTypeConnection;
    }
}
