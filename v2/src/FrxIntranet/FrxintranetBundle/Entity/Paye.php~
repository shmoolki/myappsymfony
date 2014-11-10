<?php

namespace FrxIntranet\FrxintranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paye
 *
 * @ORM\Table("frxb_paye")
 * @ORM\Entity(repositoryClass="FrxIntranet\FrxintranetBundle\Repository\PayeRepository")
 */
class Paye
{
    /**
     * @var integer
     *
     * @ORM\Column(name="paye_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="paye_datedebut", type="date")
     */
    private $payeDatedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="paye_datefin", type="date")
     */
    private $payeDatefin;

    /**
     * @var integer
     *
     * @ORM\Column(name="paye_nb_depot", type="integer")
     */
    private $payeNbDepot;

    /**
     * @var integer
     *
     * @ORM\Column(name="paye_nb_retrait", type="integer")
     */
    private $payeNbRetrait;

    /**
     * @var float
     *
     * @ORM\Column(name="paye_montant_depot", type="float")
     */
    private $payeMontantDepot;

    /**
     * @var float
     *
     * @ORM\Column(name="paye_montant_retrait", type="float")
     */
    private $payeMontantRetrait;

    /**
     * @var float
     *
     * @ORM\Column(name="paye_somme_deduite", type="float")
     */
    private $payeSommeDeduite;

    /**
     * @var float
     *
     * @ORM\Column(name="paye_pourcentage", type="float")
     */
    private $payePourcentage;

    /**
     * @var float
     *
     * @ORM\Column(name="paye_prime", type="float")
     */
    private $payePrime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="paye_nb_horaire", type="time")
     */
    private $payeNbHoraire;

    /**
     * @var float
     *
     * @ORM\Column(name="paye_taux_horaire", type="float")
     */
    private $payeTauxHoraire;

    /**
     * @var float
     *
     * @ORM\Column(name="paye_taux_euro", type="float")
     */
    private $payeTauxEuro;

    /**
     * @var string
     *
     * @ORM\Column(name="paye_montant", type="float")
     */
    private $payeMontant;
    
    /**
     * @ORM\OneToMany(targetEntity="Depot", mappedBy="depotPaye")
     */
    protected $depots;    
    
    /**
     * @ORM\OneToMany(targetEntity="Retrait", mappedBy="retraitPaye")
     */
    protected $retraits;
    
    /**
     * @ORM\OneToMany(targetEntity="FrxIntranet\PrimeBundle\Entity\Primeponct", mappedBy="primeponctPaye")
     */
    protected $primes;  
    
     /**
     * @ORM\ManyToOne(targetEntity="Util", inversedBy="payes")
     * @ORM\JoinColumn(name="paye_util", referencedColumnName="util_id")
     */
    protected $payeUtil;


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
     * Set payeDatedebut
     *
     * @param \DateTime $payeDatedebut
     * @return Paye
     */
    public function setPayeDatedebut($payeDatedebut)
    {
        $this->payeDatedebut = $payeDatedebut;

        return $this;
    }

    /**
     * Get payeDatedebut
     *
     * @return \DateTime 
     */
    public function getPayeDatedebut()
    {
        return $this->payeDatedebut;
    }

    /**
     * Set payeDatefin
     *
     * @param \DateTime $payeDatefin
     * @return Paye
     */
    public function setPayeDatefin($payeDatefin)
    {
        $this->payeDatefin = $payeDatefin;

        return $this;
    }

    /**
     * Get payeDatefin
     *
     * @return \DateTime 
     */
    public function getPayeDatefin()
    {
        return $this->payeDatefin;
    }

    /**
     * Set payeNbDepot
     *
     * @param integer $payeNbDepot
     * @return Paye
     */
    public function setPayeNbDepot($payeNbDepot)
    {
        $this->payeNbDepot = $payeNbDepot;

        return $this;
    }

    /**
     * Get payeNbDepot
     *
     * @return integer 
     */
    public function getPayeNbDepot()
    {
        return $this->payeNbDepot;
    }

    /**
     * Set payeNbRetrait
     *
     * @param integer $payeNbRetrait
     * @return Paye
     */
    public function setPayeNbRetrait($payeNbRetrait)
    {
        $this->payeNbRetrait = $payeNbRetrait;

        return $this;
    }

    /**
     * Get payeNbRetrait
     *
     * @return integer 
     */
    public function getPayeNbRetrait()
    {
        return $this->payeNbRetrait;
    }

    /**
     * Set payeMontantDepot
     *
     * @param float $payeMontantDepot
     * @return Paye
     */
    public function setPayeMontantDepot($payeMontantDepot)
    {
        $this->payeMontantDepot = $payeMontantDepot;

        return $this;
    }

    /**
     * Get payeMontantDepot
     *
     * @return float 
     */
    public function getPayeMontantDepot()
    {
        return $this->payeMontantDepot;
    }

    /**
     * Set payeMontantRetrait
     *
     * @param float $payeMontantRetrait
     * @return Paye
     */
    public function setPayeMontantRetrait($payeMontantRetrait)
    {
        $this->payeMontantRetrait = $payeMontantRetrait;

        return $this;
    }

    /**
     * Get payeMontantRetrait
     *
     * @return float 
     */
    public function getPayeMontantRetrait()
    {
        return $this->payeMontantRetrait;
    }

    /**
     * Set payeSommeDeduite
     *
     * @param float $payeSommeDeduite
     * @return Paye
     */
    public function setPayeSommeDeduite($payeSommeDeduite)
    {
        $this->payeSommeDeduite = $payeSommeDeduite;

        return $this;
    }

    /**
     * Get payeSommeDeduite
     *
     * @return float 
     */
    public function getPayeSommeDeduite()
    {
        return $this->payeSommeDeduite;
    }

    /**
     * Set payePourcentage
     *
     * @param float $payePourcentage
     * @return Paye
     */
    public function setPayePourcentage($payePourcentage)
    {
        $this->payePourcentage = $payePourcentage;

        return $this;
    }

    /**
     * Get payePourcentage
     *
     * @return float 
     */
    public function getPayePourcentage()
    {
        return $this->payePourcentage;
    }

    /**
     * Set payePrime
     *
     * @param float $payePrime
     * @return Paye
     */
    public function setPayePrime($payePrime)
    {
        $this->payePrime = $payePrime;

        return $this;
    }

    /**
     * Get payePrime
     *
     * @return float 
     */
    public function getPayePrime()
    {
        return $this->payePrime;
    }

    /**
     * Set payeNbHoraire
     *
     * @param \DateTime $payeNbHoraire
     * @return Paye
     */
    public function setPayeNbHoraire($payeNbHoraire)
    {
        $this->payeNbHoraire = $payeNbHoraire;

        return $this;
    }

    /**
     * Get payeNbHoraire
     *
     * @return \DateTime 
     */
    public function getPayeNbHoraire()
    {
        return $this->payeNbHoraire;
    }

    /**
     * Set payeTauxHoraire
     *
     * @param float $payeTauxHoraire
     * @return Paye
     */
    public function setPayeTauxHoraire($payeTauxHoraire)
    {
        $this->payeTauxHoraire = $payeTauxHoraire;

        return $this;
    }

    /**
     * Get payeTauxHoraire
     *
     * @return float 
     */
    public function getPayeTauxHoraire()
    {
        return $this->payeTauxHoraire;
    }

    /**
     * Set payeTauxEuro
     *
     * @param float $payeTauxEuro
     * @return Paye
     */
    public function setPayeTauxEuro($payeTauxEuro)
    {
        $this->payeTauxEuro = $payeTauxEuro;

        return $this;
    }

    /**
     * Get payeTauxEuro
     *
     * @return float 
     */
    public function getPayeTauxEuro()
    {
        return $this->payeTauxEuro;
    }

    /**
     * Set payeMontant
     *
     * @param float $payeMontant
     * @return Paye
     */
    public function setPayeMontant($payeMontant)
    {
        $this->payeMontant = $payeMontant;

        return $this;
    }

    /**
     * Get payeMontant
     *
     * @return float 
     */
    public function getPayeMontant()
    {
        return $this->payeMontant;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->depots = new \Doctrine\Common\Collections\ArrayCollection();
        $this->retraits = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add depots
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Depot $depots
     * @return Paye
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

    /**
     * Add retraits
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Retrait $retraits
     * @return Paye
     */
    public function addRetrait(\FrxIntranet\FrxintranetBundle\Entity\Retrait $retraits)
    {
        $this->retraits[] = $retraits;

        return $this;
    }

    /**
     * Remove retraits
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Retrait $retraits
     */
    public function removeRetrait(\FrxIntranet\FrxintranetBundle\Entity\Retrait $retraits)
    {
        $this->retraits->removeElement($retraits);
    }

    /**
     * Get retraits
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRetraits()
    {
        return $this->retraits;
    }

    /**
     * Set payeUtil
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Util $payeUtil
     * @return Paye
     */
    public function setPayeUtil(\FrxIntranet\FrxintranetBundle\Entity\Util $payeUtil = null)
    {
        $this->payeUtil = $payeUtil;

        return $this;
    }

    /**
     * Get payeUtil
     *
     * @return \FrxIntranet\FrxintranetBundle\Entity\Util 
     */
    public function getPayeUtil()
    {
        return $this->payeUtil;
    }

    /**
     * Add primes
     *
     * @param \FrxIntranet\PrimeBundle\Entity\Primeponct $primes
     * @return Paye
     */
    public function addPrime(\FrxIntranet\PrimeBundle\Entity\Primeponct $primes)
    {
        $this->primes[] = $primes;

        return $this;
    }

    /**
     * Remove primes
     *
     * @param \FrxIntranet\PrimeBundle\Entity\Primeponct $primes
     */
    public function removePrime(\FrxIntranet\PrimeBundle\Entity\Primeponct $primes)
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
