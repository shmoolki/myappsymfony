<?php

namespace FrxIntranet\FrxintranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParamPaye
 *
 * @ORM\Table("frxb_parampaye")
 * @ORM\Entity(repositoryClass="FrxIntranet\FrxintranetBundle\Repository\ParamPayeRepository")
 */
class ParamPaye
{
    /**
     * @var integer
     *
     * @ORM\Column(name="parampaye_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="parampaye_bornebas", type="integer")
     */
    private $parampayeBornebas;

    /**
     * @var integer
     *
     * @ORM\Column(name="parampaye_bornehaut", type="integer")
     */
    private $parampayeBornehaut;

    /**
     * @var float
     *
     * @ORM\Column(name="parampaye_tauxhoraire", type="float")
     */
    private $parampayeTauxhoraire;

    /**
     * @var float
     *
     * @ORM\Column(name="parampaye_pourcentage", type="float")
     */
    private $parampayePourcentage;

    /**
     * @var float
     *
     * @ORM\Column(name="parampaye_prime", type="float")
     */
    private $parampayePrime;    

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
     * Set parampayeBornebas
     *
     * @param integer $parampayeBornebas
     * @return ParamPaye
     */
    public function setParampayeBornebas($parampayeBornebas)
    {
        $this->parampayeBornebas = $parampayeBornebas;

        return $this;
    }

    /**
     * Get parampayeBornebas
     *
     * @return integer 
     */
    public function getParampayeBornebas()
    {
        return $this->parampayeBornebas;
    }

    /**
     * Set parampayeBornehaut
     *
     * @param integer $parampayeBornehaut
     * @return ParamPaye
     */
    public function setParampayeBornehaut($parampayeBornehaut)
    {
        $this->parampayeBornehaut = $parampayeBornehaut;

        return $this;
    }

    /**
     * Get parampayeBornehaut
     *
     * @return integer 
     */
    public function getParampayeBornehaut()
    {
        return $this->parampayeBornehaut;
    }

    /**
     * Set parampayeTauxhoraire
     *
     * @param float $parampayeTauxhoraire
     * @return ParamPaye
     */
    public function setParampayeTauxhoraire($parampayeTauxhoraire)
    {
        $this->parampayeTauxhoraire = $parampayeTauxhoraire;

        return $this;
    }

    /**
     * Get parampayeTauxhoraire
     *
     * @return float 
     */
    public function getParampayeTauxhoraire()
    {
        return $this->parampayeTauxhoraire;
    }

    /**
     * Set parampayePourcentage
     *
     * @param float $parampayePourcentage
     * @return ParamPaye
     */
    public function setParampayePourcentage($parampayePourcentage)
    {
        $this->parampayePourcentage = $parampayePourcentage;

        return $this;
    }

    /**
     * Get parampayePourcentage
     *
     * @return float 
     */
    public function getParampayePourcentage()
    {
        return $this->parampayePourcentage;
    }

    /**
     * Set parampayePrime
     *
     * @param float $parampayePrime
     * @return ParamPaye
     */
    public function setParampayePrime($parampayePrime)
    {
        $this->parampayePrime = $parampayePrime;

        return $this;
    }

    /**
     * Get parampayePrime
     *
     * @return float 
     */
    public function getParampayePrime()
    {
        return $this->parampayePrime;
    }
}
