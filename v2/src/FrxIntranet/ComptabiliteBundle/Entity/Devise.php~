<?php

namespace FrxIntranet\ComptabiliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devise
 *
 * @ORM\Table("frxb_devise")
 * @ORM\Entity(repositoryClass="FrxIntranet\ComptabiliteBundle\Repository\DeviseRepository")
 */
class Devise
{
    /**
     * @var integer
     *
     * @ORM\Column(name="devise_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="devise_code", type="string", length=50)
     */
    private $deviseCode;

    /**
     * @var string
     *
     * @ORM\Column(name="devise_titre", type="string", length=50)
     */
    private $deviseTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="devise_html", type="string", length=10)
     */
    private $deviseHtml;
    
    /**
     * @ORM\OneToMany(targetEntity="Frais", mappedBy="fraisDevise")
     */
    protected $frais;
    
    /**
     * @ORM\OneToMany(targetEntity="FraisFixe", mappedBy="fraisfixeDevise")
     */
    protected $fraisfixes;
    
    /**
     * @ORM\OneToMany(targetEntity="FrxIntranet\PrimeBundle\Entity\Primeponct", mappedBy="primeponctDevise")
     */
    protected $primeponcts;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Exercice", mappedBy="exerciceDevise")
     */
    protected $exercices;


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
     * Set deviseCode
     *
     * @param string $deviseCode
     * @return Devise
     */
    public function setDeviseCode($deviseCode)
    {
        $this->deviseCode = $deviseCode;

        return $this;
    }

    /**
     * Get deviseCode
     *
     * @return string 
     */
    public function getDeviseCode()
    {
        return $this->deviseCode;
    }

    /**
     * Set deviseTitre
     *
     * @param string $deviseTitre
     * @return Devise
     */
    public function setDeviseTitre($deviseTitre)
    {
        $this->deviseTitre = $deviseTitre;

        return $this;
    }

    /**
     * Get deviseTitre
     *
     * @return string 
     */
    public function getDeviseTitre()
    {
        return $this->deviseTitre;
    }

    /**
     * Set deviseHtml
     *
     * @param string $deviseHtml
     * @return Devise
     */
    public function setDeviseHtml($deviseHtml)
    {
        $this->deviseHtml = $deviseHtml;

        return $this;
    }

    /**
     * Get deviseHtml
     *
     * @return string 
     */
    public function getDeviseHtml()
    {
        return $this->deviseHtml;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->frais = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fraisfixes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->exercices = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add frais
     *
     * @param \FrxIntranet\ComptabiliteBundle\Entity\Frais $frais
     * @return Devise
     */
    public function addFrai(\FrxIntranet\ComptabiliteBundle\Entity\Frais $frais)
    {
        $this->frais[] = $frais;

        return $this;
    }

    /**
     * Remove frais
     *
     * @param \FrxIntranet\ComptabiliteBundle\Entity\Frais $frais
     */
    public function removeFrai(\FrxIntranet\ComptabiliteBundle\Entity\Frais $frais)
    {
        $this->frais->removeElement($frais);
    }

    /**
     * Get frais
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFrais()
    {
        return $this->frais;
    }

    /**
     * Add fraisfixes
     *
     * @param \FrxIntranet\ComptabiliteBundle\Entity\FraisFixe $fraisfixes
     * @return Devise
     */
    public function addFraisfix(\FrxIntranet\ComptabiliteBundle\Entity\FraisFixe $fraisfixes)
    {
        $this->fraisfixes[] = $fraisfixes;

        return $this;
    }

    /**
     * Remove fraisfixes
     *
     * @param \FrxIntranet\ComptabiliteBundle\Entity\FraisFixe $fraisfixes
     */
    public function removeFraisfix(\FrxIntranet\ComptabiliteBundle\Entity\FraisFixe $fraisfixes)
    {
        $this->fraisfixes->removeElement($fraisfixes);
    }

    /**
     * Get fraisfixes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFraisfixes()
    {
        return $this->fraisfixes;
    }

    /**
     * Add exercices
     *
     * @param \FrxIntranet\ComptabiliteBundle\Entity\Exercice $exercices
     * @return Devise
     */
    public function addExercice(\FrxIntranet\ComptabiliteBundle\Entity\Exercice $exercices)
    {
        $this->exercices[] = $exercices;

        return $this;
    }

    /**
     * Remove exercices
     *
     * @param \FrxIntranet\ComptabiliteBundle\Entity\Exercice $exercices
     */
    public function removeExercice(\FrxIntranet\ComptabiliteBundle\Entity\Exercice $exercices)
    {
        $this->exercices->removeElement($exercices);
    }

    /**
     * Get exercices
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExercices()
    {
        return $this->exercices;
    }

    /**
     * Add primeponcts
     *
     * @param \FrxIntranet\PrimeBundle\Entity\Primeponct $primeponcts
     * @return Devise
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
