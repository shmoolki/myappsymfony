<?php

namespace FrxIntranet\PayeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('PayeBundle:Default:index.html.twig', array('name' => $name));
    }

    public function generateAction($name) {
        return $this->render('PayeBundle:Default:index.html.twig', array('name' => $name));
    }

    public function recupDepotAction($datedebut, $datefin, $util) {

        // Nouvelle Version
        
        $em = $this->getDoctrine()->getManager();
        $depots = $em->getRepository('FrxintranetBundle:Depot')->recupDepot($datedebut, $datefin, $util);

        //return new Response($depots);
        return $this->render('PayeBundle:Default:index.html.twig', array('depots' => $depots));
    }
    
    public function recupRetraitAction($datedebut, $datefin, $util) {

        // Nouvelle Version
        
        $em = $this->getDoctrine()->getManager();
        $retraits = $em->getRepository('FrxintranetBundle:Retrait')->recupRetrait($datedebut, $datefin, $util);

        //return new Response($retraits);
        return $this->render('PayeBundle:Default:test.html.twig', array('retraits' => $retraits));
    }
    
    public function recupHoraireAction($datedebut, $datefin, $util) {

        $em = $this->getDoctrine()->getManager();
        $horaires = $em->getRepository('FrxintranetBundle:Pointeuse')->recupHoraire($datedebut, $datefin, $util);
        $cumul =$em->getRepository('FrxintranetBundle:Pointeuse')->additionHoraire($horaires);
        
        return $this->render('PayeBundle:Default:test.html.twig', array('horaires' => $horaires, 'cumul' => $cumul));
    }
    
    public function recupInformationAction($datedebut, $datefin, $util) {
        
        $em = $this->getDoctrine()->getManager();
        $horaires = $em->getRepository('FrxintranetBundle:Pointeuse')->recupHoraire($datedebut, $datefin, $util);
        $cumul =$em->getRepository('FrxintranetBundle:Pointeuse')->additionHoraire($horaires);
        $retraits = $em->getRepository('FrxintranetBundle:Retrait')->recupRetrait($datedebut, $datefin, $util);
        $depots = $em->getRepository('FrxintranetBundle:Depot')->recupDepot($datedebut, $datefin, $util);
        $primes = $em->getRepository('PrimeBundle:Primeponct')->recupPrime($datedebut, $datefin, $util);
        
        $somme = array();
        for ($i = 0; $i <= count($primes) - 1; $i++){
            $index  = $primes[$i]->getPrimeponctDevise()->getDeviseHtml();
            $somme[$index] = !isset($somme[$index]) ? $primes[$i]->getPrimeponctMontant() : $somme[$index]+$primes[$i]->getPrimeponctMontant();
        }
        
        $sommeDep = 0; $nbrDep = count($depots);
        for ($j = 0; $j <= count($depots) - 1; $j++){
           $sommeDep += $depots[$j]->getDepotMontant();
           
        }
        
        $sommeRet = 0; $nbrRet = count($retraits);
        for ($j = 0; $j <= count($retraits) - 1; $j++){
           $sommeRet += $retraits[$j]->getRetraitMontant();
           
        }
        
        $paramHoraire = $em->getRepository('FrxintranetBundle:ParamPaye')->createQueryBuilder('a')
                ->where(':nbrDepots BETWEEN a.parampayeBornebas AND a.parampayeBornehaut')
                ->setParameter('nbrDepots', $nbrDep)
                ->getQuery()
                ->getResult();
        
        //die($paramHoraire[0]->getParampayePourcentage());
        
        return $this->render('PayeBundle:Default:test.html.twig', 
                            array('primes' => $primes,
                                  'somme'=>$somme, 
                                  'depots' => $depots,
                                  'sommedep'=> $sommeDep,
                                  'nbrDep' => $nbrDep,
                                  'retraits' => $retraits,
                                  'sommeRet'=> $sommeRet,
                                  'nbrRet' => $nbrRet,
                                  'horaires' => $horaires,
                                  'cumul' => $cumul,
                                  'paramHoraire'=>$paramHoraire[0]));
         
     }
    

}
