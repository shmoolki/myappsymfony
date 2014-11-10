<?php

namespace FrxIntranet\FrxintranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Util
 *
 * @ORM\Table("frxb_util")
 * @ORM\Entity(repositoryClass="FrxIntranet\FrxintranetBundle\Repository\UtilRepository")
 */
class Util
{
    /**
     * @var integer
     *
     * @ORM\Column(name="util_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="util_login", type="string", length=50)
     */
    private $utilLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="util_nom", type="string", length=100)
     */
    private $utilNom;

    /**
     * @var string
     *
     * @ORM\Column(name="util_prenom", type="string", length=100)
     */
    private $utilPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="util_adresse", type="string", length=255)
     */
    private $utilAdresse;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="util_mail", type="string", length=255)
     */
    private $utilMail;

    /**
     * @var string
     *
     * @ORM\Column(name="util_tel1", type="string", length=100)
     */
    private $utilTel1;

    /**
     * @var string
     *
     * @ORM\Column(name="util_tel2", type="string", length=100)
     */
    private $utilTel2;

    /**
     * @var string
     *
     * @ORM\Column(name="util_password", type="string", length=255)
     */
    private $utilPassword;

    /**
     * @var boolean
     *
     * @ORM\Column(name="util_active", type="boolean")
     */
    private $utilActive;

    /**
     * @var boolean
     *
     * @ORM\Column(name="util_admin", type="boolean")
     */
    private $utilAdmin;
    
    /**
     * @ORM\OneToMany(targetEntity="Depot", mappedBy="depotUtil")
     */
    protected $depots;
    
    /**
     * @ORM\OneToMany(targetEntity="Retrait", mappedBy="retraitUtil")
     */
    protected $retraits;  

    /**
     * @ORM\OneToMany(targetEntity="Pointeuse", mappedBy="pointUtil")
     */
    protected $pointages;  
    
    /**
     * @ORM\OneToMany(targetEntity="Paye", mappedBy="payeUtil")
     */
    protected $payes;  
    
    /**
     * @ORM\OneToMany(targetEntity="FrxIntranet\PrimeBundle\Entity\Primeponct", mappedBy="primeponctUtil")
     */
    protected $primeponcts;


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
     * Set utilLogin
     *
     * @param string $utilLogin
     * @return Util
     */
    public function setUtilLogin($utilLogin)
    {
        $this->utilLogin = $utilLogin;

        return $this;
    }

    /**
     * Get utilLogin
     *
     * @return string 
     */
    public function getUtilLogin()
    {
        return $this->utilLogin;
    }

    /**
     * Set utilNom
     *
     * @param string $utilNom
     * @return Util
     */
    public function setUtilNom($utilNom)
    {
        $this->utilNom = $utilNom;

        return $this;
    }

    /**
     * Get utilNom
     *
     * @return string 
     */
    public function getUtilNom()
    {
        return $this->utilNom;
    }

    /**
     * Set utilPrenom
     *
     * @param string $utilPrenom
     * @return Util
     */
    public function setUtilPrenom($utilPrenom)
    {
        $this->utilPrenom = $utilPrenom;

        return $this;
    }

    /**
     * Get utilPrenom
     *
     * @return string 
     */
    public function getUtilPrenom()
    {
        return $this->utilPrenom;
    }

    /**
     * Set utilAdresse
     *
     * @param string $utilAdresse
     * @return Util
     */
    public function setUtilAdresse($utilAdresse)
    {
        $this->utilAdresse = $utilAdresse;

        return $this;
    }

    /**
     * Get utilAdresse
     *
     * @return string 
     */
    public function getUtilAdresse()
    {
        return $this->utilAdresse;
    }

    /**
     * Set utilTel1
     *
     * @param string $utilTel1
     * @return Util
     */
    public function setUtilTel1($utilTel1)
    {
        $this->utilTel1 = $utilTel1;

        return $this;
    }

    /**
     * Get utilTel1
     *
     * @return string 
     */
    public function getUtilTel1()
    {
        return $this->utilTel1;
    }

    /**
     * Set utilTel2
     *
     * @param string $utilTel2
     * @return Util
     */
    public function setUtilTel2($utilTel2)
    {
        $this->utilTel2 = $utilTel2;

        return $this;
    }

    /**
     * Get utilTel2
     *
     * @return string 
     */
    public function getUtilTel2()
    {
        return $this->utilTel2;
    }

    /**
     * Set utilPassword
     *
     * @param string $utilPassword
     * @return Util
     */
    public function setUtilPassword($utilPassword)
    {
        $this->utilPassword = $utilPassword;

        return $this;
    }

    /**
     * Get utilPassword
     *
     * @return string 
     */
    public function getUtilPassword()
    {
        return $this->utilPassword;
    }

    /**
     * Set utilActive
     *
     * @param boolean $utilActive
     * @return Util
     */
    public function setUtilActive($utilActive)
    {
        $this->utilActive = $utilActive;

        return $this;
    }

    /**
     * Get utilActive
     *
     * @return boolean 
     */
    public function getUtilActive()
    {
        return $this->utilActive;
    }

    /**
     * Set utilAdmin
     *
     * @param boolean $utilAdmin
     * @return Util
     */
    public function setUtilAdmin($utilAdmin)
    {
        $this->utilAdmin = $utilAdmin;

        return $this;
    }

    /**
     * Get utilAdmin
     *
     * @return boolean 
     */
    public function getUtilAdmin()
    {
        return $this->utilAdmin;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->depots = new \Doctrine\Common\Collections\ArrayCollection();
        $this->retraits = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pointages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add depots
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Depot $depots
     * @return Util
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
     * @return Util
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
     * Add pointages
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Pointeuse $pointages
     * @return Util
     */
    public function addPointage(\FrxIntranet\FrxintranetBundle\Entity\Pointeuse $pointages)
    {
        $this->pointages[] = $pointages;

        return $this;
    }

    /**
     * Remove pointages
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Pointeuse $pointages
     */
    public function removePointage(\FrxIntranet\FrxintranetBundle\Entity\Pointeuse $pointages)
    {
        $this->pointages->removeElement($pointages);
    }

    /**
     * Get pointages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPointages()
    {
        return $this->pointages;
    }

    /**
     * Set utilMail
     *
     * @param string $utilMail
     * @return Util
     */
    public function setUtilMail($utilMail)
    {
        $this->utilMail = $utilMail;

        return $this;
    }

    /**
     * Get utilMail
     *
     * @return string 
     */
    public function getUtilMail()
    {
        return $this->utilMail;
    }

    /**
     * Add payes
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Paye $payes
     * @return Util
     */
    public function addPaye(\FrxIntranet\FrxintranetBundle\Entity\Paye $payes)
    {
        $this->payes[] = $payes;

        return $this;
    }

    /**
     * Remove payes
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Paye $payes
     */
    public function removePaye(\FrxIntranet\FrxintranetBundle\Entity\Paye $payes)
    {
        $this->payes->removeElement($payes);
    }

    /**
     * Get payes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPayes()
    {
        return $this->payes;
    }

    /**
     * Add primeponcts
     *
     * @param \FrxIntranet\PrimeBundle\Entity\Primeponct $primeponcts
     * @return Util
     */
    public function addPrimeponct(\FrxIntranet\PrimeBundle\Entity\Primeponct $primeponcts)
    {
        $this->primeponcts[] = $primeponcts;

        return $this;
    }

    /**
     * Remove primeponcts
     *
     * @param \FrxIntranet\PrimeBundle\Entity\Primeponct $primeponcts
     */
    public function removePrimeponct(\FrxIntranet\PrimeBundle\Entity\Primeponct $primeponcts)
    {
        $this->primeponcts->removeElement($primeponcts);
    }

    /**
     * Get primeponcts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrimeponcts()
    {
        return $this->primeponcts;
    }
}
