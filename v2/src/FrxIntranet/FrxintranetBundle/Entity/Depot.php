<?php

namespace FrxIntranet\FrxintranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depot
 *
 * @ORM\Table("frxb_depot")
 * @ORM\Entity(repositoryClass="FrxIntranet\FrxintranetBundle\Repository\DepotRepository")
 */
class Depot
{
    /**
     * @var integer
     *
     * @ORM\Column(name="depot_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="depot_date", type="date")
     */
    private $depotDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="depot_num_month", type="integer", nullable=true)
     */
    private $depotNumMonth;

    /**
     * @var float
     *
     * @ORM\Column(name="depot_montant", type="float")
     */
    private $depotMontant;
    
    /**
     * @var float
     *
     * @ORM\Column(name="depot_prime", type="float")
     */
    private $depotPrime;
    

    /**
     * @var boolean
     *
     * @ORM\Column(name="depot_firstdeposit", type="boolean")
     */
    private $depotFirstdeposit;

    /**
     * @var integer
     *
     * @ORM\Column(name="depot_pourcent", type="integer", nullable=true)
     */
    private $depotPoucent;
    
    /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="depots")
     * @ORM\JoinColumn(name="depot_client", referencedColumnName="client_id")
     */
    protected $depotClient;
    
    /**
     * @ORM\ManyToOne(targetEntity="Paye", inversedBy="depots")
     * @ORM\JoinColumn(name="depot_paye", referencedColumnName="paye_id")
     */
    protected $depotPaye;
    
    /**
     * @ORM\ManyToOne(targetEntity="Util", inversedBy="depots")
     * @ORM\JoinColumn(name="depot_util", referencedColumnName="util_id")
     */
    protected $depotUtil;
    



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
     * Set depotDate
     *
     * @param \DateTime $depotDate
     * @return Depot
     */
    public function setDepotDate($depotDate)
    {
        $this->depotDate = $depotDate;

        return $this;
    }

    /**
     * Get depotDate
     *
     * @return \DateTime 
     */
    public function getDepotDate()
    {
        return $this->depotDate;
    }

    /**
     * Set depotNumMonth
     *
     * @param integer $depotNumMonth
     * @return Depot
     */
    public function setDepotNumMonth($depotNumMonth)
    {
        $this->depotNumMonth = $depotNumMonth;

        return $this;
    }

    /**
     * Get depotNumMonth
     *
     * @return integer 
     */
    public function getDepotNumMonth()
    {
        return $this->depotNumMonth;
    }

    /**
     * Set depotMontant
     *
     * @param float $depotMontant
     * @return Depot
     */
    public function setDepotMontant($depotMontant)
    {
        $this->depotMontant = $depotMontant;

        return $this;
    }

    /**
     * Get depotMontant
     *
     * @return float 
     */
    public function getDepotMontant()
    {
        return $this->depotMontant;
    }

    /**
     * Set depotFirstdeposit
     *
     * @param boolean $depotFirstdeposit
     * @return Depot
     */
    public function setDepotFirstdeposit($depotFirstdeposit)
    {
        $this->depotFirstdeposit = $depotFirstdeposit;

        return $this;
    }

    /**
     * Get depotFirstdeposit
     *
     * @return boolean 
     */
    public function getDepotFirstdeposit()
    {
        return $this->depotFirstdeposit;
    }

    /**
     * Set depotPourcent
     *
     * @param integer $depotPourcent
     * @return Depot
     */
    public function setDepotPourcent($depotPourcent)
    {
        $this->depotPourcent = $depotPourcent;

        return $this;
    }

    /**
     * Get depotPourcent
     *
     * @return integer 
     */
    public function getDepotPourcent()
    {
        return $this->depotPourcent;
    }

    /**
     * Set depotClient
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Client $depotClient
     * @return Depot
     */
    public function setDepotClient(\FrxIntranet\FrxintranetBundle\Entity\Client $depotClient = null)
    {
        $this->depotClient = $depotClient;

        return $this;
    }

    /**
     * Get depotClient
     *
     * @return \FrxIntranet\FrxintranetBundle\Entity\Client 
     */
    public function getDepotClient()
    {
        return $this->depotClient;
    }

    /**
     * Set depotPaye
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Paye $depotPaye
     * @return Depot
     */
    public function setDepotPaye(\FrxIntranet\FrxintranetBundle\Entity\Paye $depotPaye = null)
    {
        $this->depotPaye = $depotPaye;

        return $this;
    }

    /**
     * Get depotPaye
     *
     * @return \FrxIntranet\FrxintranetBundle\Entity\Paye 
     */
    public function getDepotPaye()
    {
        return $this->depotPaye;
    }

    /**
     * Set depotUtil
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Util $depotUtil
     * @return Depot
     */
    public function setDepotUtil(\FrxIntranet\FrxintranetBundle\Entity\Util $depotUtil = null)
    {
        $this->depotUtil = $depotUtil;

        return $this;
    }

    /**
     * Get depotUtil
     *
     * @return \FrxIntranet\FrxintranetBundle\Entity\Util 
     */
    public function getDepotUtil()
    {
        return $this->depotUtil;
    }

  

    /**
     * Set depotPrime
     *
     * @param float $depotPrime
     * @return Depot
     */
    public function setDepotPrime($depotPrime)
    {
        $this->depotPrime = $depotPrime;

        return $this;
    }

    /**
     * Get depotPrime
     *
     * @return float 
     */
    public function getDepotPrime()
    {
        return $this->depotPrime;
    }

    /**
     * Set depotPoucent
     *
     * @param integer $depotPoucent
     * @return Depot
     */
    public function setDepotPoucent($depotPoucent)
    {
        $this->depotPoucent = $depotPoucent;

        return $this;
    }

    /**
     * Get depotPoucent
     *
     * @return integer 
     */
    public function getDepotPoucent()
    {
        return $this->depotPoucent;
    }
}
