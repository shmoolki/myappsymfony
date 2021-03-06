<?php

namespace FrxIntranet\FrxintranetBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * RetraitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RetraitRepository extends EntityRepository
{
    
    //Recup toutes les retraits pour un User entre 2 dates
    public function recupRetrait($datedebut, $datefin, $util) {
      $datedebut = new \DateTime($datedebut);
      $datefin   = new \DateTime($datefin);
      $retraits = $this->createQueryBuilder('a')
                ->where('(a.retraitUtil = :util) AND (a.retraitDate BETWEEN :datedebut AND :datefin )')
                ->setParameter('datedebut', $datedebut)
                ->setParameter('datefin', $datefin)
                ->setParameter('util', $util)
                ->getQuery()
                ->getResult();
        
        return $retraits;
    }
}
