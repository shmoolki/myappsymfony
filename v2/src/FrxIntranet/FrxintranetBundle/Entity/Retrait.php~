<?php

namespace FrxIntranet\FrxintranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Retrait
 *
 * @ORM\Table("frxb_retrait")
 * @ORM\Entity(repositoryClass="FrxIntranet\FrxintranetBundle\Repository\RetraitRepository")
 */
class Retrait
{
    /**
     * @var integer
     *
     * @ORM\Column(name="retrait_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="retrait_montant", type="float")
     */
    private $retraitMontant;

    /**
     * @var float
     *
     * @ORM\Column(name="retrait_pourcentage", type="float", nullable=true)
     */
    private $retraitPourcentage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="retrait_date", type="date", nullable=true)
     */
    private $retraitDate;
    
    /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="retraits")
     * @ORM\JoinColumn(name="retrait_client", referencedColumnName="client_id")
     */
    protected $retraitClient;
    
    /**
     * @ORM\ManyToOne(targetEntity="Paye", inversedBy="retraits")
     * @ORM\JoinColumn(name="retrait_paye", referencedColumnName="paye_id")
     */
    protected $retraitPaye;
    
    /**
     * @ORM\ManyToOne(targetEntity="Util", inversedBy="retraits")
     * @ORM\JoinColumn(name="retrait_util", referencedColumnName="util_id")
     */
    protected $retraitUtil;
    


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
     * Set retraitMontant
     *
     * @param float $retraitMontant
     * @return Retrait
     */
    public function setRetraitMontant($retraitMontant)
    {
        $this->retraitMontant = $retraitMontant;

        return $this;
    }

    /**
     * Get retraitMontant
     *
     * @return float 
     */
    public function getRetraitMontant()
    {
        return $this->retraitMontant;
    }

    /**
     * Set retraitPourcentage
     *
     * @param float $retraitPourcentage
     * @return Retrait
     */
    public function setRetraitPourcentage($retraitPourcentage)
    {
        $this->retraitPourcentage = $retraitPourcentage;

        return $this;
    }

    /**
     * Get retraitPourcentage
     *
     * @return float 
     */
    public function getRetraitPourcentage()
    {
        return $this->retraitPourcentage;
    }

    /**
     * Set retraitDate
     *
     * @param \DateTime $retraitDate
     * @return Retrait
     */
    public function setRetraitDate($retraitDate)
    {
        $this->retraitDate = $retraitDate;

        return $this;
    }

    /**
     * Get retraitDate
     *
     * @return \DateTime 
     */
    public function getRetraitDate()
    {
        return $this->retraitDate;
    }

    /**
     * Set retraitClient
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Client $retraitClient
     * @return Retrait
     */
    public function setRetraitClient(\FrxIntranet\FrxintranetBundle\Entity\Client $retraitClient = null)
    {
        $this->retraitClient = $retraitClient;

        return $this;
    }

    /**
     * Get retraitClient
     *
     * @return \FrxIntranet\FrxintranetBundle\Entity\Client 
     */
    public function getRetraitClient()
    {
        return $this->retraitClient;
    }

    /**
     * Set retraitPaye
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Paye $retraitPaye
     * @return Retrait
     */
    public function setRetraitPaye(\FrxIntranet\FrxintranetBundle\Entity\Paye $retraitPaye = null)
    {
        $this->retraitPaye = $retraitPaye;

        return $this;
    }

    /**
     * Get retraitPaye
     *
     * @return \FrxIntranet\FrxintranetBundle\Entity\Paye 
     */
    public function getRetraitPaye()
    {
        return $this->retraitPaye;
    }

    /**
     * Set retraitUtil
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Util $retraitUtil
     * @return Retrait
     */
    public function setRetraitUtil(\FrxIntranet\FrxintranetBundle\Entity\Util $retraitUtil = null)
    {
        $this->retraitUtil = $retraitUtil;

        return $this;
    }

    /**
     * Get retraitUtil
     *
     * @return \FrxIntranet\FrxintranetBundle\Entity\Util 
     */
    public function getRetraitUtil()
    {
        return $this->retraitUtil;
    }
}
