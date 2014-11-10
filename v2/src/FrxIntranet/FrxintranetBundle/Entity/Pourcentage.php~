<?php

namespace FrxIntranet\FrxintranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pourcentage
 *
 * @ORM\Table("frxb_pourcent")
 * @ORM\Entity(repositoryClass="FrxIntranet\FrxintranetBundle\Repository\PourcentageRepository")
 */
class Pourcentage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pourcent_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="pourcent_borne1", type="float")
     */
    private $pourcentBorne1;

    /**
     * @var float
     *
     * @ORM\Column(name="pourcent_borne2", type="float")
     */
    private $pourcentBorne2;

    /**
     * @var float
     *
     * @ORM\Column(name="pourcent_pourcent", type="float")
     */
    private $pourcentPourcent;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pourcentBorne1
     *
     * @param float $pourcentBorne1
     * @return Pourcentage
     */
    public function setPourcentBorne1($pourcentBorne1)
    {
        $this->pourcentBorne1 = $pourcentBorne1;

        return $this;
    }

    /**
     * Get pourcentBorne1
     *
     * @return float 
     */
    public function getPourcentBorne1()
    {
        return $this->pourcentBorne1;
    }

    /**
     * Set pourcentBorne2
     *
     * @param float $pourcentBorne2
     * @return Pourcentage
     */
    public function setPourcentBorne2($pourcentBorne2)
    {
        $this->pourcentBorne2 = $pourcentBorne2;

        return $this;
    }

    /**
     * Get pourcentBorne2
     *
     * @return float 
     */
    public function getPourcentBorne2()
    {
        return $this->pourcentBorne2;
    }

    /**
     * Set pourcentPourcent
     *
     * @param float $pourcentPourcent
     * @return Pourcentage
     */
    public function setPourcentPourcent($pourcentPourcent)
    {
        $this->pourcentPourcent = $pourcentPourcent;

        return $this;
    }

    /**
     * Get pourcentPourcent
     *
     * @return float 
     */
    public function getPourcentPourcent()
    {
        return $this->pourcentPourcent;
    }
}
