<?php

namespace FrxIntranet\ComptabiliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recurrence
 *
 * @ORM\Table("frxb_recurrence")
 * @ORM\Entity(repositoryClass="FrxIntranet\ComptabiliteBundle\Repository\RecurrenceRepository")
 */
class Recurrence
{
    /**
     * @var integer
     *
     * @ORM\Column(name="recurrence_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="recurrence_titre", type="string", length=100)
     */
    private $recurrenceTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="recurrence_typesaisie", type="string", length=100)
     */
    private $recurrenceTypesaisie;

    /**
     * @var string
     *
     * @ORM\Column(name="recurrence_descriptif", type="text")
     */
    private $recurrenceDescriptif;

    /**
     * @ORM\OneToMany(targetEntity="FraisFixe", mappedBy="fraisfixeRecurrence")
     */
    protected $fraisfixes;


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
     * Set recurrenceTitre
     *
     * @param string $recurrenceTitre
     * @return Recurrence
     */
    public function setRecurrenceTitre($recurrenceTitre)
    {
        $this->recurrenceTitre = $recurrenceTitre;

        return $this;
    }

    /**
     * Get recurrenceTitre
     *
     * @return string 
     */
    public function getRecurrenceTitre()
    {
        return $this->recurrenceTitre;
    }

    /**
     * Set recurrenceTypesaisie
     *
     * @param string $recurrenceTypesaisie
     * @return Recurrence
     */
    public function setRecurrenceTypesaisie($recurrenceTypesaisie)
    {
        $this->recurrenceTypesaisie = $recurrenceTypesaisie;

        return $this;
    }

    /**
     * Get recurrenceTypesaisie
     *
     * @return string 
     */
    public function getRecurrenceTypesaisie()
    {
        return $this->recurrenceTypesaisie;
    }

    /**
     * Set recurrenceDescriptif
     *
     * @param string $recurrenceDescriptif
     * @return Recurrence
     */
    public function setRecurrenceDescriptif($recurrenceDescriptif)
    {
        $this->recurrenceDescriptif = $recurrenceDescriptif;

        return $this;
    }

    /**
     * Get recurrenceDescriptif
     *
     * @return string 
     */
    public function getRecurrenceDescriptif()
    {
        return $this->recurrenceDescriptif;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fraisfixes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fraisfixes
     *
     * @param \FrxIntranet\ComptabiliteBundle\Entity\FraisFixe $fraisfixes
     * @return Recurrence
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
}
