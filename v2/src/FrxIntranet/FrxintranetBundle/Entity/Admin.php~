<?php

namespace FrxIntranet\FrxintranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table("frxb_admin")
 * @ORM\Entity(repositoryClass="FrxIntranet\FrxintranetBundle\Repository\AdminRepository")
 */
class Admin
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="admin_nbheurechange", type="float")
     */
    private $adminNbheurechange;

    /**
     * @var float
     *
     * @ORM\Column(name="admin_tauxhorairemin", type="float")
     */
    private $adminTauxhorairemin;

    /**
     * @var float
     *
     * @ORM\Column(name="admin_tauxhorairemax", type="float")
     */
    private $adminTauxhorairemax;

    /**
     * @var float
     *
     * @ORM\Column(name="admin_tauxdevise", type="float")
     */
    private $adminTauxdevise;

    /**
     * @var integer
     *
     * @ORM\Column(name="admin_sonnerie", type="integer")
     */
    private $adminSonnerie;


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
     * Set adminNbheurechange
     *
     * @param float $adminNbheurechange
     * @return Admin
     */
    public function setAdminNbheurechange($adminNbheurechange)
    {
        $this->adminNbheurechange = $adminNbheurechange;

        return $this;
    }

    /**
     * Get adminNbheurechange
     *
     * @return float 
     */
    public function getAdminNbheurechange()
    {
        return $this->adminNbheurechange;
    }

    /**
     * Set adminTauxhorairemin
     *
     * @param float $adminTauxhorairemin
     * @return Admin
     */
    public function setAdminTauxhorairemin($adminTauxhorairemin)
    {
        $this->adminTauxhorairemin = $adminTauxhorairemin;

        return $this;
    }

    /**
     * Get adminTauxhorairemin
     *
     * @return float 
     */
    public function getAdminTauxhorairemin()
    {
        return $this->adminTauxhorairemin;
    }

    /**
     * Set adminTauxhorairemax
     *
     * @param float $adminTauxhorairemax
     * @return Admin
     */
    public function setAdminTauxhorairemax($adminTauxhorairemax)
    {
        $this->adminTauxhorairemax = $adminTauxhorairemax;

        return $this;
    }

    /**
     * Get adminTauxhorairemax
     *
     * @return float 
     */
    public function getAdminTauxhorairemax()
    {
        return $this->adminTauxhorairemax;
    }

    /**
     * Set adminTauxdevise
     *
     * @param float $adminTauxdevise
     * @return Admin
     */
    public function setAdminTauxdevise($adminTauxdevise)
    {
        $this->adminTauxdevise = $adminTauxdevise;

        return $this;
    }

    /**
     * Get adminTauxdevise
     *
     * @return float 
     */
    public function getAdminTauxdevise()
    {
        return $this->adminTauxdevise;
    }

    /**
     * Set adminSonnerie
     *
     * @param integer $adminSonnerie
     * @return Admin
     */
    public function setAdminSonnerie($adminSonnerie)
    {
        $this->adminSonnerie = $adminSonnerie;

        return $this;
    }

    /**
     * Get adminSonnerie
     *
     * @return integer 
     */
    public function getAdminSonnerie()
    {
        return $this->adminSonnerie;
    }
}
