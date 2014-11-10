<?php

namespace FrxIntranet\ComptabiliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exercice
 *
 * @ORM\Table("frxb_exercice")
 * @ORM\Entity(repositoryClass="FrxIntranet\ComptabiliteBundle\Repository\ExerciceRepository")
 */
class Exercice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="exercice_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="exercice_datedebut", type="date")
     */
    private $exerciceDatedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="exercice_datefin", type="date")
     */
    private $exerciceDatefin;

    /**
     * @var float
     *
     * @ORM\Column(name="exercice_credit", type="float")
     */
    private $exerciceCredit;

    /**
     * @var float
     *
     * @ORM\Column(name="exercice_debit", type="float")
     */
    private $exerciceDebit;

    /**
     * @var float
     *
     * @ORM\Column(name="exercice_resultat", type="float")
     */
    private $exerciceResultat;

    /**
     * @ORM\ManyToOne(targetEntity="Devise", inversedBy="exercices")
     * @ORM\JoinColumn(name="exercice_devise", referencedColumnName="devise_id")
     */
    protected $exerciceDevise;    
    
    /**
     * @ORM\OneToMany(targetEntity="Frais", mappedBy="fraisExercice")
     */
    protected $frais;    
    
    
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
     * Set exerciceDatedebut
     *
     * @param \DateTime $exerciceDatedebut
     * @return Exercice
     */
    public function setExerciceDatedebut($exerciceDatedebut)
    {
        $this->exerciceDatedebut = $exerciceDatedebut;

        return $this;
    }

    /**
     * Get exerciceDatedebut
     *
     * @return \DateTime 
     */
    public function getExerciceDatedebut()
    {
        return $this->exerciceDatedebut;
    }

    /**
     * Set exerciceDatefin
     *
     * @param \DateTime $exerciceDatefin
     * @return Exercice
     */
    public function setExerciceDatefin($exerciceDatefin)
    {
        $this->exerciceDatefin = $exerciceDatefin;

        return $this;
    }

    /**
     * Get exerciceDatefin
     *
     * @return \DateTime 
     */
    public function getExerciceDatefin()
    {
        return $this->exerciceDatefin;
    }

    /**
     * Set exerciceCredit
     *
     * @param float $exerciceCredit
     * @return Exercice
     */
    public function setExerciceCredit($exerciceCredit)
    {
        $this->exerciceCredit = $exerciceCredit;

        return $this;
    }

    /**
     * Get exerciceCredit
     *
     * @return float 
     */
    public function getExerciceCredit()
    {
        return $this->exerciceCredit;
    }

    /**
     * Set exerciceDebit
     *
     * @param float $exerciceDebit
     * @return Exercice
     */
    public function setExerciceDebit($exerciceDebit)
    {
        $this->exerciceDebit = $exerciceDebit;

        return $this;
    }

    /**
     * Get exerciceDebit
     *
     * @return float 
     */
    public function getExerciceDebit()
    {
        return $this->exerciceDebit;
    }

    /**
     * Set exerciceResultat
     *
     * @param float $exerciceResultat
     * @return Exercice
     */
    public function setExerciceResultat($exerciceResultat)
    {
        $this->exerciceResultat = $exerciceResultat;

        return $this;
    }

    /**
     * Get exerciceResultat
     *
     * @return float 
     */
    public function getExerciceResultat()
    {
        return $this->exerciceResultat;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->frais = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set exerciceDevise
     *
     * @param \FrxIntranet\ComptabiliteBundle\Entity\Devise $exerciceDevise
     * @return Exercice
     */
    public function setExerciceDevise(\FrxIntranet\ComptabiliteBundle\Entity\Devise $exerciceDevise = null)
    {
        $this->exerciceDevise = $exerciceDevise;

        return $this;
    }

    /**
     * Get exerciceDevise
     *
     * @return \FrxIntranet\ComptabiliteBundle\Entity\Devise 
     */
    public function getExerciceDevise()
    {
        return $this->exerciceDevise;
    }

    /**
     * Add frais
     *
     * @param \FrxIntranet\ComptabiliteBundle\Entity\Frais $frais
     * @return Exercice
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
}
