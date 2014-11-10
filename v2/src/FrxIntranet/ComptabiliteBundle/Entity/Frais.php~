<?php

namespace FrxIntranet\ComptabiliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frais
 *
 * @ORM\Table("frxb_frais")
 * @ORM\Entity(repositoryClass="FrxIntranet\ComptabiliteBundle\Repository\FraisRepository")
 */
class Frais
{
    /**
     * @var integer
     *
     * @ORM\Column(name="frais_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="frais_date", type="date")
     */
    private $fraisDate;

    /**
     * @var string
     *
     * @ORM\Column(name="frais_titre", type="string", length=255)
     */
    private $fraisTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="frais_descriptif", type="text")
     */
    private $fraisDescriptif;

    /**
     * @var float
     *
     * @ORM\Column(name="frais_montant", type="float")
     */
    private $fraisMontant;

    /**
     * @var boolean
     *
     * @ORM\Column(name="frais_fixe", type="boolean")
     */
    private $fraisFixe;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Devise", inversedBy="frais")
     * @ORM\JoinColumn(name="frais_devise", referencedColumnName="devise_id")
     */
    protected $fraisDevise;    
    
    /**
     * @ORM\ManyToOne(targetEntity="Exercice", inversedBy="frais")
     * @ORM\JoinColumn(name="frais_exercice", referencedColumnName="exercice_id")
     */
    protected $fraisExercice;    


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
     * Set fraisDate
     *
     * @param \DateTime $fraisDate
     * @return Frais
     */
    public function setFraisDate($fraisDate)
    {
        $this->fraisDate = $fraisDate;

        return $this;
    }

    /**
     * Get fraisDate
     *
     * @return \DateTime 
     */
    public function getFraisDate()
    {
        return $this->fraisDate;
    }

    /**
     * Set fraisTitre
     *
     * @param string $fraisTitre
     * @return Frais
     */
    public function setFraisTitre($fraisTitre)
    {
        $this->fraisTitre = $fraisTitre;

        return $this;
    }

    /**
     * Get fraisTitre
     *
     * @return string 
     */
    public function getFraisTitre()
    {
        return $this->fraisTitre;
    }

    /**
     * Set fraisDescriptif
     *
     * @param string $fraisDescriptif
     * @return Frais
     */
    public function setFraisDescriptif($fraisDescriptif)
    {
        $this->fraisDescriptif = $fraisDescriptif;

        return $this;
    }

    /**
     * Get fraisDescriptif
     *
     * @return string 
     */
    public function getFraisDescriptif()
    {
        return $this->fraisDescriptif;
    }

    /**
     * Set fraisMontant
     *
     * @param float $fraisMontant
     * @return Frais
     */
    public function setFraisMontant($fraisMontant)
    {
        $this->fraisMontant = $fraisMontant;

        return $this;
    }

    /**
     * Get fraisMontant
     *
     * @return float 
     */
    public function getFraisMontant()
    {
        return $this->fraisMontant;
    }

    /**
     * Set fraisFixe
     *
     * @param boolean $fraisFixe
     * @return Frais
     */
    public function setFraisFixe($fraisFixe)
    {
        $this->fraisFixe = $fraisFixe;

        return $this;
    }

    /**
     * Get fraisFixe
     *
     * @return boolean 
     */
    public function getFraisFixe()
    {
        return $this->fraisFixe;
    }

    /**
     * Set fraisDevise
     *
     * @param \FrxIntranet\ComptabiliteBundle\Entity\Devise $fraisDevise
     * @return Frais
     */
    public function setFraisDevise(\FrxIntranet\ComptabiliteBundle\Entity\Devise $fraisDevise = null)
    {
        $this->fraisDevise = $fraisDevise;

        return $this;
    }

    /**
     * Get fraisDevise
     *
     * @return \FrxIntranet\ComptabiliteBundle\Entity\Devise 
     */
    public function getFraisDevise()
    {
        return $this->fraisDevise;
    }

    /**
     * Set fraisExercice
     *
     * @param \FrxIntranet\ComptabiliteBundle\Entity\Exercice $fraisExercice
     * @return Frais
     */
    public function setFraisExercice(\FrxIntranet\ComptabiliteBundle\Entity\Exercice $fraisExercice = null)
    {
        $this->fraisExercice = $fraisExercice;

        return $this;
    }

    /**
     * Get fraisExercice
     *
     * @return \FrxIntranet\ComptabiliteBundle\Entity\Exercice 
     */
    public function getFraisExercice()
    {
        return $this->fraisExercice;
    }
}
