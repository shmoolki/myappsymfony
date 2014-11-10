<?php

namespace FrxIntranet\FrxintranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table("frxb_client")
 * @ORM\Entity(repositoryClass="FrxIntranet\FrxintranetBundle\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="client_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="client_num", type="string", length=100, nullable=true)
     */
    private $clientNum;

    /**
     * @var string
     *
     * @ORM\Column(name="client_nom", type="string", length=255)
     */
    private $clientNom;

    /**
     * @var string
     *
     * @ORM\Column(name="client_tel", type="string", length=100, nullable=true)
     */
    private $clientTel;

    /**
     * @var string
     *
     * @ORM\Column(name="client_mail", type="string", length=255, nullable=true)
     */
    private $clientMail;

    /**
     * @var float
     *
     * @ORM\Column(name="client_solde", type="float")
     */
    private $clientSolde;

    /**
     * @var string
     *
     * @ORM\Column(name="client_adresse", type="string", length=255, nullable=true)
     */
    private $clientAdresse;
    
     /**
     * @var string
     *
     * @ORM\Column(name="client_ville", type="string", length=255, nullable=true)
     */
    private $clientVille;

    /**
     * @var string
     *
     * @ORM\Column(name="client_comment", type="text", nullable=true)
     */
    private $clientComment;
    
    /**
     * @ORM\OneToMany(targetEntity="Depot", mappedBy="depotClient")
     */
    protected $depots;
    
     /**
     * @ORM\OneToMany(targetEntity="Retrait", mappedBy="retraitClient")
     */
    protected $retraits;


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
     * Set clientNum
     *
     * @param string $clientNum
     * @return Client
     */
    public function setClientNum($clientNum)
    {
        $this->clientNum = $clientNum;

        return $this;
    }

    /**
     * Get clientNum
     *
     * @return string 
     */
    public function getClientNum()
    {
        return $this->clientNum;
    }

    /**
     * Set clientNom
     *
     * @param string $clientNom
     * @return Client
     */
    public function setClientNom($clientNom)
    {
        $this->clientNom = $clientNom;

        return $this;
    }

    /**
     * Get clientNom
     *
     * @return string 
     */
    public function getClientNom()
    {
        return $this->clientNom;
    }

    /**
     * Set clientTel
     *
     * @param string $clientTel
     * @return Client
     */
    public function setClientTel($clientTel)
    {
        $this->clientTel = $clientTel;

        return $this;
    }

    /**
     * Get clientTel
     *
     * @return string 
     */
    public function getClientTel()
    {
        return $this->clientTel;
    }

    /**
     * Set clientMail
     *
     * @param string $clientMail
     * @return Client
     */
    public function setClientMail($clientMail)
    {
        $this->clientMail = $clientMail;

        return $this;
    }

    /**
     * Get clientMail
     *
     * @return string 
     */
    public function getClientMail()
    {
        return $this->clientMail;
    }

    /**
     * Set clientSolde
     *
     * @param float $clientSolde
     * @return Client
     */
    public function setClientSolde($clientSolde)
    {
        $this->clientSolde = $clientSolde;

        return $this;
    }

    /**
     * Get clientSolde
     *
     * @return float 
     */
    public function getClientSolde()
    {
        return $this->clientSolde;
    }

    /**
     * Set clientAdresse
     *
     * @param string $clientAdresse
     * @return Client
     */
    public function setClientAdresse($clientAdresse)
    {
        $this->clientAdresse = $clientAdresse;

        return $this;
    }

    /**
     * Get clientAdresse
     *
     * @return string 
     */
    public function getClientAdresse()
    {
        return $this->clientAdresse;
    }

    /**
     * Set clientComment
     *
     * @param string $clientComment
     * @return Client
     */
    public function setClientComment($clientComment)
    {
        $this->clientComment = $clientComment;

        return $this;
    }

    /**
     * Get clientComment
     *
     * @return string 
     */
    public function getClientComment()
    {
        return $this->clientComment;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->depots = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add depots
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Depot $depots
     * @return Client
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
     * Set clientVille
     *
     * @param string $clientVille
     * @return Client
     */
    public function setClientVille($clientVille)
    {
        $this->clientVille = $clientVille;

        return $this;
    }

    /**
     * Get clientVille
     *
     * @return string 
     */
    public function getClientVille()
    {
        return $this->clientVille;
    }

    /**
     * Add retraits
     *
     * @param \FrxIntranet\FrxintranetBundle\Entity\Retrait $retraits
     * @return Client
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
}
