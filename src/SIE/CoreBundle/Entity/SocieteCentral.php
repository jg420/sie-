<?php

namespace SIE\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocieteCentral
 *
 * @ORM\Table(name="SOCIETE_CENTRAL", uniqueConstraints={@ORM\UniqueConstraint(name="id_societe", columns={"id_societe", "id_central"})}, indexes={@ORM\Index(name="FK_central_societe1", columns={"id_central"}), @ORM\Index(name="IDX_8D9E89D5C7F894CD", columns={"id_societe"})})
 * @ORM\Entity
 */
class SocieteCentral
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_societe_central", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSocieteCentral;

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
     * @var \SIE\CoreBundle\Entity\Societe
     *
     * @ORM\ManyToOne(targetEntity="SIE\CoreBundle\Entity\Societe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_societe", referencedColumnName="id_societe")
     * })
     */
    private $idSociete;



    /**
     * Get idSocieteCentral
     *
     * @return integer
     */
    public function getIdSocieteCentral()
    {
        return $this->idSocieteCentral;
    }

    /**
     * Set idCentral
     *
     * @param \SIE\CoreBundle\Entity\Central $idCentral
     *
     * @return SocieteCentral
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

    /**
     * Set idSociete
     *
     * @param \SIE\CoreBundle\Entity\Societe $idSociete
     *
     * @return SocieteCentral
     */
    public function setIdSociete(\SIE\CoreBundle\Entity\Societe $idSociete = null)
    {
        $this->idSociete = $idSociete;

        return $this;
    }

    /**
     * Get idSociete
     *
     * @return \SIE\CoreBundle\Entity\Societe
     */
    public function getIdSociete()
    {
        return $this->idSociete;
    }
}
