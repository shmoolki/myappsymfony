<?php

namespace FrxIntranet\PrimeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Primeponct
 *
 * @ORM\Table("frxb_primeponct")
 * @ORM\Entity(repositoryClass="FrxIntranet\PrimeBundle\Repository\PrimeponctRepository")
 */
class Primeponct
{
    /**
     * @var integer
     *
     * @ORM\Column(name="primeponct_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="primeponct_montant", type="float")
     */
    private $primeponctMontant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="primeponct_datedebut", type="datetime")
     */
    private $primeponctDatedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="primeponct_datefin", type="datetime")
     */
    private $primeponctDatefin;
    
     /**
     * @var string
     *
     * @ORM\Column(name="primeponct_titre", type="string", length=255)
     */
    private $primeponctTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="primeponct_descriptif", type="text")
     */
    private $primeponctDescriptif;

    /**
     * @var boolean
     *
     * @ORM\Column(name="primeponct_active", type="boolean")
     */
    private $primeponctActive;
    
    /**
     * @ORM\ManyToOne(targetEntity="FrxIntranet\ComptabiliteBundle\Entity\Devise", inversedBy="primeponcts")
     * @ORM\JoinColumn(name="primeponct_devise", referencedColumnName="devise_id")
     */
    protected $primeponctDevise;   
    
    /**
     * @ORM\ManyToOne(targetEntity="FrxIntranet\FrxintranetBundle\Entity\Util", inversedBy="primeponcts")
     * @ORM\JoinColumn(name="primeponct_util", referencedColumnName="util_id")
     */
    protected $primeponctUtil;

    /**
     * @ORM\ManyToOne(targetEntity="FrxIntranet\FrxintranetBundle\Entity\Paye", inversedBy="primes")
     * @ORM\JoinColumn(name="primeponct_paye", referencedColumnName="paye_id")
     */
    protected $primeponctPaye;


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
     * Set primeponctMontant
     *
     * @param float $primeponctMontant
     * @return Primeponct
     */
    public function setPrimeponctMontant($primeponctMontant)
    {
        $this->primeponctMontant = $primeponctMontant;

        return $this;
    }

    /**
     * Get primeponctMontant
     *
     * @return float 
     */
    public function getPrimeponctMontant()
    {
        return $this->primeponctMontant;
    }

    /**
     * Set primeponctDatedebut
     *
     * @param \DateTime $primeponctDatedebut
     * @return Primeponct
     */
    public function setPrimeponctDatedebut($primeponctDatedebut)
    {
        $this->primeponctDatedebut = $primeponctDatedebut;

        return $this;
    }

    /**
     * Get primeponctDatedebut
     *
     * @return \DateTime 
     */
    public function getPrimeponctDatedebut()
    {
        return $this->primeponctDatedebut;
    }

    /**
     * Set primeponctDatefin
     *
     * @param \DateTime $primeponctDatefin
     * @return Primeponct
     */
    public function setPrimeponctDatefin($primeponctDatefin)
    {
        $this->primeponctDatefin = $primeponctDatefin;

        return $this;
    }

    /**
     * Get primeponctDatefin
     *
     * @return \DateTime 
     */
    public function getPrimeponctDatefin()
    {
        return $this->primeponctDatefin;
    }

    /**
     * Set primeponctActive
     *
     * @param boolean $primeponctActive
     * @return Primeponct
     */
    public function setPrimeponctActive($primeponctActive)
    {
        $this->primeponctActive = $primeponctActive;

        return $this;
    }

    /**
     * Get primeponctActive
     *
     * @return boolean 
     */
    public function getPrimeponctActive()
    {
        return $this->primeponctActive;
    }

    /**
     * Set primeponctDevise
     *
     * @param \FrxIntranet\ComptabiliteBundle\Entity\Devise $primeponctDevise
     * @return Primeponct
     */
    public function setPrimeponctDevise(\FrxIntranet\ComptabiliteBundle\Entity\Devise $primeponctDevise = null)
    {
        $this->primeponctDevise = $primeponctDevise;

        return $this;
    }

    /**
     * Get primeponctDevise
     *
     * @return \FrxIntranet\ComptabiliteBundle\Entity\Devise 
     */
    public function getPrimeponctDevise()
    {
        return $this->primeponctDevise;
    }

    /**
     * Set primeponctUtil
     *
     * @param \FrxIntranet\ComptabiliteBundle\Entity\Util $primeponctUtil
     * @return Primeponct
     */
    public function setPrimeponctUtil(\FrxIntranet\FrxintranetBundle\Entity\Util $primeponctUtil = null)
    {
        $this->primeponctUtil = $primeponctUtil;

        return $this;
    }

    /**
     * Get primeponctUtil
     *
     * @return \FrxIntranet\FrxintranetBundle\Entity\Util 
     */
    public function getPrimeponctUtil()
    {
        return $this->primeponctUtil;
    }

    /**
     * Set primeponctTitre
     *
     * @param string $primeponctTitre
     * @return Primeponct
     */
    public function setPrimeponctTitre($primeponctTitre)
    {
        $this->primeponctTitre = $primeponctTitre;

        return $this;
    }

    /**
     * Get primeponctTitre
     *
     * @return string 
     */
    public function getPrimeponctTitre()
    {
        return $this->primeponctTitre;
    }

    /**
     * Set primeponctDescriptif
     *
     * @param string $primeponctDescriptif
     * @return Primeponct
     */
    public function setPrimeponctDescriptif($primeponctDescriptif)
    {
        $this->primeponctDescriptif = $primeponctDescriptif;

        return $this;
    }

    /**
     * Get primeponctDescriptif
     *
     * @return string 
     */
    public function getPrimeponctDescriptif()
    {
        return $this->primeponctDescriptif;
    }

    /**
     * Set primeponctPaye
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Paye $primeponctPaye
     * @return Primeponct
     */
    public function setPrimeponctPaye(\FrxIntranet\FrxintranetBundle\Entity\Paye $primeponctPaye = null)
    {
        $this->primeponctPaye = $primeponctPaye;

        return $this;
    }

    /**
     * Get primeponctPaye
     *
     * @return \FrxIntranet\FrxintranetBundle\Entity\Paye 
     */
    public function getPrimeponctPaye()
    {
        return $this->primeponctPaye;
    }
}
