<?php

namespace FrxIntranet\PrimeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrxIntranet\PrimeBundle\Entity;

class DefaultController extends Controller {

    public function indexAction($id) {
        return $this->render('PrimeBundle:Default:index.html.twig', array('util' => $id));
    }

    public function affectationAction($myprime, $myutil) {
        $em = $this->getDoctrine()->getManager();
        $prime = $em->getRepository('PrimeBundle:Primeponct')->find($myprime);
        $util = $em->getRepository('FrxintranetBundle:Util')->find($myutil);
        $prime->setPrimeponctUtil($util);
        $em->flush();
        return $this->redirect($this->generateUrl('prime_visualisation'));
    }

    public function supprAction($id) {
        $em = $this->getDoctrine()->getManager();
        $prime = $em->getRepository('PrimeBundle:Primeponct')->find($id);
        $em->remove($prime);
        $em->flush();
        return $this->redirect($this->generateUrl('prime_visualisation'));
    }

    public function creationAction() {
        $prime = new Entity\Primeponct();
        $em = $this->getDoctrine()->getManager();
        $devises = $em->getRepository('ComptabiliteBundle:Devise')->findAll();
        $utilisateurs = $em->getRepository('FrxintranetBundle:Util')->findAll();
        return $this->render('PrimeBundle:Default:fichePrime.html.twig', array('prime' => $prime, 'new' => 'OK', 'devises' => $devises, 'utilisateurs' => $utilisateurs));
    }

    public function visualisationAction() {
        $request = $this->getRequest();
        $datedeb = $request->request->get('datedeb');

        $datefin = $request->request->get('datefin');
        $em = $this->getDoctrine()->getManager();

        //Verifie si des parametres sont fournis
        if (!(is_null($datedeb)) || !(is_null($datefin))) {
            $datedeb = $request->request->get('datedeb') . " 00:00:00";

            $datefin = $request->request->get('datefin') . " 23:59:59";

            //$primes->getResults();
            // die($primes);
        } else {
            $m = date("m");
            $y = date("Y");
            $datedeb = $y . "-" . $m . "-01" . " 00:00:00";
            $mois = mktime(0, 0, 0, $m, 1, $y);
            //setlocale('LC_ALL', 'fr_FR');
            $j = date("t", $mois);
            $datefin = $y . "-" . $m . "-" . $j . " 23:59:59";
            // $primes = $em->getRepository('PrimeBundle:Primeponct')->findAll();
        }
        $query = $em->getRepository('PrimeBundle:Primeponct');
        $primes = $query->createQueryBuilder('a')
                ->where('(a.primeponctDatedebut BETWEEN :datedeb AND :datefin) OR (a.primeponctDatefin BETWEEN :datedeb AND :datefin)')
                ->setParameter('datedeb', $datedeb)
                ->setParameter('datefin', $datefin)
                ->getQuery()
                ->getResult();
        // die("ici5");

        return $this->render('PrimeBundle:Default:liste.html.twig', array('primes' => $primes));
    }

    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();
        $prime = $em->getRepository('PrimeBundle:Primeponct')->find($id);
        $utilisateurs = $em->getRepository('FrxintranetBundle:Util')->findAll();
        $devises = $em->getRepository('ComptabiliteBundle:Devise')->findAll();
        return $this->render('PrimeBundle:Default:fichePrime.html.twig', array('prime' => $prime, 'utilisateurs' => $utilisateurs, 'devises' => $devises));
    }

    public function validationAction($id) {
        $message = "Modification effectuées";
        $em = $this->getDoctrine()->getManager();

        $prime = $em->getRepository('PrimeBundle:Primeponct')->find($id);
        // On récupère la requête
        $request = $this->getRequest();


        // On récupère nos parametres
        $dateDeb = $request->request->get('datedebut') . " " . $request->request->get('heuredebut');
        $dateFin = $request->request->get('datefin') . " " . $request->request->get('heurefin');

        $prime->setPrimeponctDatedebut(new \DateTime($dateDeb));
        $prime->setPrimeponctDatefin(new \DateTime($dateFin));
        $prime->setPrimeponctDescriptif($request->request->get('descriptif'));
        $devise = $em->getRepository('ComptabiliteBundle:Devise')->find($request->request->get('devise'));
        $prime->setPrimeponctDevise($devise);
        // die($devise->getDeviseCode());
        $prime->setPrimeponctMontant($request->request->get('montant'));
        $prime->setPrimeponctTitre($request->request->get('titre'));
        $actif = $request->request->get('actif');
        if ($actif) {
            $prime->setPrimeponctActive(1);
        } else {
            $prime->setPrimeponctActive(0);
        }

        $em->flush();

        $prime = $em->getRepository('PrimeBundle:Primeponct')->find($id);
        $utilisateurs = $em->getRepository('FrxintranetBundle:Util')->findAll();
        $devises = $em->getRepository('ComptabiliteBundle:Devise')->findAll();
        return $this->render('PrimeBundle:Default:fichePrime.html.twig', array('prime' => $prime, 'message' => $message, 'utilisateurs' => $utilisateurs, 'devises' => $devises));
    }

    public function insertAction() {

        $em = $this->getDoctrine()->getManager();

        $prime = new Entity\Primeponct();
        // On récupère la requête
        $request = $this->getRequest();


        // On récupère nos parametres
        $dateDeb = $request->request->get('datedebut') . " " . $request->request->get('heuredebut');
        $dateFin = $request->request->get('datefin') . " " . $request->request->get('heurefin');

        $prime->setPrimeponctDatedebut(new \DateTime($dateDeb));
        $prime->setPrimeponctDatefin(new \DateTime($dateFin));
        $prime->setPrimeponctDescriptif($request->request->get('descriptif'));
        $devise = $em->getRepository('ComptabiliteBundle:Devise')->find($request->request->get('devise'));
        $prime->setPrimeponctDevise($devise);
        $prime->setPrimeponctMontant($request->request->get('montant'));
        $prime->setPrimeponctTitre($request->request->get('titre'));
        $actif = $request->request->get('actif');
        if ($actif) {
            $prime->setPrimeponctActive(1);
        } else {
            $prime->setPrimeponctActive(0);
        }



        $em->persist($prime);
        $em->flush();


        return $this->redirect($this->generateUrl('prime_visualisation'));
    }

    //Recup des Primes non affectées en cours
    public function encoursAction() {
        $date = new \DateTime();
        $em = $this->getDoctrine()->getManager();
        $query = $em->getRepository('PrimeBundle:Primeponct');
        $primes = $query->createQueryBuilder('a')
                ->where('(a.primeponctActive = true) AND (a.primeponctUtil is null) AND (:date BETWEEN a.primeponctDatedebut AND a.primeponctDatefin)')
                ->setParameter('date', $date)
                ->getQuery()
                ->getResult();
        return $this->render('PrimeBundle:Default:liste.html.twig', array('primes' => $primes));
    }

    //Recup toutes les primes pour un User entre 2 dates
    public function recupPrimeAction($datedebut, $datefin, $util) {

        $em = $this->getDoctrine()->getManager();
        $primes = $em->getRepository('PrimeBundle:Primeponct')->recupPrime($datedebut, $datefin, $util);
        
        $somme = array();
        for ($i = 0; $i <= count($primes) - 1; $i++){
            $index  = $primes[$i]->getPrimeponctDevise()->getDeviseCode();
            $somme[$index] = !isset($somme[$index]) ? $primes[$i]->getPrimeponctMontant() : $somme[$index]+$primes[$i]->getPrimeponctMontant();
        }
        
        //die(var_dump($somme));
        $tabSomme = array();
        for ($i = 0; $i <= count($somme) - 1; $i++){

        }
        
            

        

        // Les affecter a une paye.
        return array('primes' => $primes, 'somme'=>$somme);
        //return $this->render('PrimeBundle:Default:test.html.twig', array('primes' => $primes, 'somme'=>$somme));
    }

}
