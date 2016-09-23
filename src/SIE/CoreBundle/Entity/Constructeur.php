<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Constructeur
 *
 * @ORM\Table(name="CONSTRUCTEUR")
 * @ORM\Entity
 */
class Constructeur
{
    /**
     * @var string
     *
     * @ORM\Column(name="lib_constructeur", type="string", length=25, nullable=true)
     */
    private $libConstructeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_constructeur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConstructeur;



    /**
     * Set libConstructeur
     *
     * @param string $libConstructeur
     *
     * @return Constructeur
     */
    public function setLibConstructeur($libConstructeur)
    {
        $this->libConstructeur = $libConstructeur;

        return $this;
    }

    /**
     * Get libConstructeur
     *
     * @return string
     */
    public function getLibConstructeur()
    {
        return $this->libConstructeur;
    }

    /**
     * Get idConstructeur
     *
     * @return integer
     */
    public function getIdConstructeur()
    {
        return $this->idConstructeur;
    }
}
