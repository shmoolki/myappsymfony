<?php

namespace FrxIntranet\FrxintranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pointeuse
 *
 * @ORM\Table("frxb_pointeuse")
 * @ORM\Entity(repositoryClass="FrxIntranet\FrxintranetBundle\Repository\PointeuseRepository")
 */
class Pointeuse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="point_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="point_date", type="date")
     */
    private $pointDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="point_hdebut", type="time")
     */
    private $pointHdebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="point_hfin", type="time" , nullable=true)
     */
    private $pointHfin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="point_nbh", type="time", nullable=true)
     */
    private $pointNbh;
    
    /**
     * @ORM\ManyToOne(targetEntity="Util", inversedBy="pointages")
     * @ORM\JoinColumn(name="point_util", referencedColumnName="util_id")
     */
    protected $pointUtil;


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
     * Set pointDate
     *
     * @param \DateTime $pointDate
     * @return Pointeuse
     */
    public function setPointDate($pointDate)
    {
        $this->pointDate = $pointDate;

        return $this;
    }

    /**
     * Get pointDate
     *
     * @return \DateTime 
     */
    public function getPointDate()
    {
        return $this->pointDate;
    }

    /**
     * Set pointHdebut
     *
     * @param \DateTime $pointHdebut
     * @return Pointeuse
     */
    public function setPointHdebut($pointHdebut)
    {
        $this->pointHdebut = $pointHdebut;

        return $this;
    }

    /**
     * Get pointHdebut
     *
     * @return \DateTime 
     */
    public function getPointHdebut()
    {
        return $this->pointHdebut;
    }

    /**
     * Set pointHfin
     *
     * @param \DateTime $pointHfin
     * @return Pointeuse
     */
    public function setPointHfin($pointHfin)
    {
        $this->pointHfin = $pointHfin;

        return $this;
    }

    /**
     * Get pointHfin
     *
     * @return \DateTime 
     */
    public function getPointHfin()
    {
        return $this->pointHfin;
    }

    /**
     * Set pointNbh
     *
     * @param \DateTime $pointNbh
     * @return Pointeuse
     */
    public function setPointNbh($pointNbh)
    {
        $this->pointNbh = $pointNbh;

        return $this;
    }

    /**
     * Get pointNbh
     *
     * @return \DateTime 
     */
    public function getPointNbh()
    {
        return $this->pointNbh;
    }

    /**
     * Set pointUtil
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Util $pointUtil
     * @return Pointeuse
     */
    public function setPointUtil(\FrxIntranet\FrxintranetBundle\Entity\Util $pointUtil = null)
    {
        $this->pointUtil = $pointUtil;

        return $this;
    }

    /**
     * Get pointUtil
     *
     * @return \FrxIntranet\FrxintranetBundle\Entity\Util 
     */
    public function getPointUtil()
    {
        return $this->pointUtil;
    }
}
