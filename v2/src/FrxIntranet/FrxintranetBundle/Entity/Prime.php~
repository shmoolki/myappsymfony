<?php

namespace FrxIntranet\FrxintranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prime
 *
 * @ORM\Table("frxb_prime")
 * @ORM\Entity(repositoryClass="FrxIntranet\FrxintranetBundle\Repository\PrimeRepository")
 */
class Prime
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prime_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="prime_nbcontrat_min", type="integer")
     */
    private $primeNbcontratMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="prime_nbcontrat_max", type="integer")
     */
    private $primeNbcontratMax;

    /**
     * @var float
     *
     * @ORM\Column(name="prime_montant", type="float")
     */
    private $primeMontant;
    
    /**
     * @ORM\ManyToOne(targetEntity="Palier", inversedBy="primes")
     * @ORM\JoinColumn(name="prime_palier", referencedColumnName="palier_id")
     */
    protected $primePalier;
    


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
     * Set primeNbcontratMin
     *
     * @param integer $primeNbcontratMin
     * @return Prime
     */
    public function setPrimeNbcontratMin($primeNbcontratMin)
    {
        $this->primeNbcontratMin = $primeNbcontratMin;

        return $this;
    }

    /**
     * Get primeNbcontratMin
     *
     * @return integer 
     */
    public function getPrimeNbcontratMin()
    {
        return $this->primeNbcontratMin;
    }

    /**
     * Set primeNbcontratMax
     *
     * @param integer $primeNbcontratMax
     * @return Prime
     */
    public function setPrimeNbcontratMax($primeNbcontratMax)
    {
        $this->primeNbcontratMax = $primeNbcontratMax;

        return $this;
    }

    /**
     * Get primeNbcontratMax
     *
     * @return integer 
     */
    public function getPrimeNbcontratMax()
    {
        return $this->primeNbcontratMax;
    }

    /**
     * Set primeMontant
     *
     * @param float $primeMontant
     * @return Prime
     */
    public function setPrimeMontant($primeMontant)
    {
        $this->primeMontant = $primeMontant;

        return $this;
    }

    /**
     * Get primeMontant
     *
     * @return float 
     */
    public function getPrimeMontant()
    {
        return $this->primeMontant;
    }

    /**
     * Set primePalier
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Palier $primePalier
     * @return Prime
     */
    public function setPrimePalier(\FrxIntranet\FrxintranetBundle\Entity\Palier $primePalier = null)
    {
        $this->primePalier = $primePalier;

        return $this;
    }

    /**
     * Get primePalier
     *
     * @return \FrxIntranet\FrxintranetBundle\Entity\Palier 
     */
    public function getPrimePalier()
    {
        return $this->primePalier;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->depots = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add depots
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Depot $depots
     * @return Prime
     */
    public function addDepot(\FrxIntranet\FrxintranetBundle\Entity\Depot $depots)
    {
        $this->depots[] = $depots;

        return $this;
    }

    /**
     * Remove depots
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Depot $depots
     */
    public function removeDepot(\FrxIntranet\FrxintranetBundle\Entity\Depot $depots)
    {
        $this->depots->removeElement($depots);
    }

    /**
     * Get depots
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepots()
    {
        return $this->depots;
    }
}
