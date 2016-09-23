<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vue
 *
 * @ORM\Table(name="VUE", indexes={@ORM\Index(name="FK_vue_central", columns={"id_central"})})
 * @ORM\Entity
 */
class Vue
{
    /**
     * @var string
     *
     * @ORM\Column(name="lien_vue", type="string", length=50, nullable=true)
     */
    private $lienVue;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_vue", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVue;

    /**
     * @var \SIE\CoreBundle\Entity\Central
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\Central")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_central", referencedColumnName="id_central")
     * })
     */
    private $idCentral;



    /**
     * Set lienVue
     *
     * @param string $lienVue
     *
     * @return Vue
     */
    public function setLienVue($lienVue)
    {
        $this->lienVue = $lienVue;

        return $this;
    }

    /**
     * Get lienVue
     *
     * @return string
     */
    public function getLienVue()
    {
        return $this->lienVue;
    }

    /**
     * Get idVue
     *
     * @return integer
     */
    public function getIdVue()
    {
        return $this->idVue;
    }

    /**
     * Set idCentral
     *
     * @param \SIE\CoreBundle\Entity\Central $idCentral
     *
     * @return Vue
     */
    public function setIdCentral(\SIE\CoreBundle\Entity\Central $idCentral = null)
    {
        $this->idCentral = $idCentral;

        return $this;
    }

    /**
     * Get idCentral
     *
     * @return \SIE\CoreBundle\Entity\Central
     */
    public function getIdCentral()
    {
        return $this->idCentral;
    }
}
