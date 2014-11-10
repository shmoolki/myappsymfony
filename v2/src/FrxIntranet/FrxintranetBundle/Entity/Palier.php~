<?php

namespace FrxIntranet\FrxintranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Palier
 *
 * @ORM\Table("frxb_palier")
 * @ORM\Entity(repositoryClass="FrxIntranet\FrxintranetBundle\Repository\PalierRepository")
 */
class Palier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="palier_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="palier_borne1", type="float")
     */
    private $palierBorne1;

    /**
     * @var float
     *
     * @ORM\Column(name="palier_borne2", type="float")
     */
    private $palierBorne2;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Prime", mappedBy="primePalier")
     */
    protected $primes;      


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
     * Set palierBorne1
     *
     * @param float $palierBorne1
     * @return Palier
     */
    public function setPalierBorne1($palierBorne1)
    {
        $this->palierBorne1 = $palierBorne1;

        return $this;
    }

    /**
     * Get palierBorne1
     *
     * @return float 
     */
    public function getPalierBorne1()
    {
        return $this->palierBorne1;
    }

    /**
     * Set palierBorne2
     *
     * @param float $palierBorne2
     * @return Palier
     */
    public function setPalierBorne2($palierBorne2)
    {
        $this->palierBorne2 = $palierBorne2;

        return $this;
    }

    /**
     * Get palierBorne2
     *
     * @return float 
     */
    public function getPalierBorne2()
    {
        return $this->palierBorne2;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->primes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add primes
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Prime $primes
     * @return Palier
     */
    public function addPrime(\FrxIntranet\FrxintranetBundle\Entity\Prime $primes)
    {
        $this->primes[] = $primes;

        return $this;
    }

    /**
     * Remove primes
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Prime $primes
     */
    public function removePrime(\FrxIntranet\FrxintranetBundle\Entity\Prime $primes)
    {
        $this->primes->removeElement($primes);
    }

    /**
     * Get primes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrimes()
    {
        return $this->primes;
    }
}
