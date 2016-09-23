<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societe
 *
 * @ORM\Table(name="SOCIETE")
 * @ORM\Entity
 */
class Societe
{
    /**
     * @var string
     *
     * @ORM\Column(name="lib_societe", type="string", length=50, nullable=true)
     */
    private $libSociete;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_societe", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSociete;



    /**
     * Set libSociete
     *
     * @param string $libSociete
     *
     * @return Societe
     */
    public function setLibSociete($libSociete)
    {
        $this->libSociete = $libSociete;

        return $this;
    }

    /**
     * Get libSociete
     *
     * @return string
     */
    public function getLibSociete()
    {
        return $this->libSociete;
    }

    /**
     * Get idSociete
     *
     * @return integer
     */
    public function getIdSociete()
    {
        return $this->idSociete;
    }
}
