<?php

namespace FrxIntranet\ComptabiliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FraisFixe
 *
 * @ORM\Table("frxb_fraisfixe")
 * @ORM\Entity(repositoryClass="FrxIntranet\ComptabiliteBundle\Repository\FraisFixeRepository")
 */
class FraisFixe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fraisfixe_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="fraisfixe_montant", type="float")
     */
    private $fraisfixeMontant;

    /**
     * @var string
     *
     * @ORM\Column(name="fraisfixe_descriptif", type="text")
     */
    private $fraisfixeDescriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="fraisfixe_titre", type="string", length=150)
     */
    private $fraisfixeTitre;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Devise", inversedBy="fraisfixes")
     * @ORM\JoinColumn(name="fraisfixe_devise", referencedColumnName="devise_id")
     */
    protected $fraisfixeDevise;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Recurrence", inversedBy="fraisfixes")
     * @ORM\JoinColumn(name="fraisfixe_recurrence", referencedColumnName="recurrence_id")
     */
    protected $fraisfixeRecurrence;    


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
     * Set fraisfixeMontant
     *
     * @param float $fraisfixeMontant
     * @return FraisFixe
     */
    public function setFraisfixeMontant($fraisfixeMontant)
    {
        $this->fraisfixeMontant = $fraisfixeMontant;

        return $this;
    }

    /**
     * Get fraisfixeMontant
     *
     * @return float 
     */
    public function getFraisfixeMontant()
    {
        return $this->fraisfixeMontant;
    }

    /**
     * Set fraisfixeDescriptif
     *
     * @param string $fraisfixeDescriptif
     * @return FraisFixe
     */
    public function setFraisfixeDescriptif($fraisfixeDescriptif)
    {
        $this->fraisfixeDescriptif = $fraisfixeDescriptif;

        return $this;
    }

    /**
     * Get fraisfixeDescriptif
     *
     * @return string 
     */
    public function getFraisfixeDescriptif()
    {
        return $this->fraisfixeDescriptif;
    }

    /**
     * Set fraisfixeTitre
     *
     * @param string $fraisfixeTitre
     * @return FraisFixe
     */
    public function setFraisfixeTitre($fraisfixeTitre)
    {
        $this->fraisfixeTitre = $fraisfixeTitre;

        return $this;
    }

    /**
     * Get fraisfixeTitre
     *
     * @return string 
     */
    public function getFraisfixeTitre()
    {
        return $this->fraisfixeTitre;
    }

    /**
     * Set fraisfixeDevise
     *
     * @param \FrxIntranet\ComptabiliteBundle\Entity\Devise $fraisfixeDevise
     * @return FraisFixe
     */
    public function setFraisfixeDevise(\FrxIntranet\ComptabiliteBundle\Entity\Devise $fraisfixeDevise = null)
    {
        $this->fraisfixeDevise = $fraisfixeDevise;

        return $this;
    }

    /**
     * Get fraisfixeDevise
     *
     * @return \FrxIntranet\ComptabiliteBundle\Entity\Devise 
     */
    public function getFraisfixeDevise()
    {
        return $this->fraisfixeDevise;
    }

    /**
     * Set fraisfixeRecurrence
     *
     * @param \FrxIntranet\ComptabiliteBundle\Entity\Recurrence $fraisfixeRecurrence
     * @return FraisFixe
     */
    public function setFraisfixeRecurrence(\FrxIntranet\ComptabiliteBundle\Entity\Recurrence $fraisfixeRecurrence = null)
    {
        $this->fraisfixeRecurrence = $fraisfixeRecurrence;

        return $this;
    }

    /**
     * Get fraisfixeRecurrence
     *
     * @return \FrxIntranet\ComptabiliteBundle\Entity\Recurrence 
     */
    public function getFraisfixeRecurrence()
    {
        return $this->fraisfixeRecurrence;
    }
}
