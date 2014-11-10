<?php

namespace FrxIntranet\ComptabiliteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use FrxIntranet\ComptabiliteBundle\Entity;

class ExerciceController extends Controller {

    public function indexAction($name) {
        return $this->render('ComptabiliteBundle:Default:index.html.twig', array('name' => $name));
    }

    public function listeFraisAction() {
        $em = $this->getDoctrine()->getManager();
        $frais = $em->getRepository('ComptabiliteBundle:Frais')->findAll();
        return $this->render('ComptabiliteBundle:Default:frais.html.twig', array('frais' => $frais));
    }

    public function editFraisAction() {
        
        $em = $this->getDoctrine()->getManager();
        $frais = new Entity\Frais();
        // On récupère la requête
        $request = $this->getRequest();
        

        // On récupère nos parametres
        $frais->setFraisDate(new \DateTime($request->request->get('date')));
        $frais->setFraisDescriptif($request->request->get('descriptif'));
        $devise = $em->getRepository('ComptabiliteBundle:Devise')->find(1);
        $frais->setFraisDevise($devise);
        $frais->setFraisMontant($request->request->get('montant'));
        $frais->setFraisTitre($request->request->get('titre'));
        $fixe = $request->request->get('fixe');
        if ($fixe) {
         $frais->setFraisFixe(1);
        }else {
        $frais->setFraisFixe(0);
    
        }
        

       
        $em->persist($frais);
        $em->flush();
        

           return $this->redirect($this->generateUrl('comptabilite_frais'));
    }

    public function modifFraisAction($id) {
        $em = $this->getDoctrine()->getManager();
        $frais = $em->getRepository('ComptabiliteBundle:Frais')->find($id);
        return $this->render('ComptabiliteBundle:Default:Editfrais.html.twig', array('frais' => $frais));
    }
    
    public function validModifFraisAction($id) {
        $em = $this->getDoctrine()->getManager();
        $frais = $em->getRepository('ComptabiliteBundle:Frais')->find($id);
        $request = $this->getRequest();
        

        // On récupère nos parametres
        $frais->setFraisDate(new \DateTime($request->request->get('date')));
        $frais->setFraisDescriptif($request->request->get('descriptif'));
        $devise = $em->getRepository('ComptabiliteBundle:Devise')->find(1);
        $frais->setFraisDevise($devise);
        $frais->setFraisMontant($request->request->get('montant'));
        $frais->setFraisTitre($request->request->get('titre'));
        $fixe = $request->request->get('fixe');
        if ($fixe) {
         $frais->setFraisFixe(1);
        }else {
        $frais->setFraisFixe(0);
    
        }
        $em->flush();
        return $this->render('ComptabiliteBundle:Default:Editfrais.html.twig', array('frais' => $frais));
    }

    public function newFraisAction() {
        $frais = new Entity\Frais();
        return $this->render('ComptabiliteBundle:Default:Editfrais.html.twig', array('frais' => $frais, 'new' => 'OK'));
    }

    public function supprFraisAction($id) {
        $em = $this->getDoctrine()->getManager();
        $frais = $em->getRepository('ComptabiliteBundle:Frais')->find($id);
        $em->remove($frais);
        $em->flush();
        return $this->redirect($this->generateUrl('comptabilite_frais'));
        //return $this->redirect('ComptabiliteBundle:Default:frais.html.twig', array('frais' => $frais));
    }

    public function genererAction($name) {

        // Toutes les confirmations seront passees en param et cheker lors des etapes et l'action sera a chaque fois relancer depuis ici
        // 1.   On récupère la requête
        $request = $this->getRequest();

        $dateDebut = $request->request->get('datedebut');
        $dateFin = $request->request->get('datefin');


        // 2.   Verifie qu'aucun exercice n'a deja ete genere pour cette periode
        // 3.   On recupere le total des paye genere.
        // 3.1. On verifie qu'aucune paye ne manque (Non generee)
        // 3.2. On marque les paye comme faisant partie de cet exercice
        // 4.   On verifie tous les frais.
        // 4.1. Petit ecran de log pour prevenir des frais fixes qui vont etre generees si il n'omnt pas ete generes 
        // 4.2. On demande confirmation de la generation des frais fixes
        // 5. On verifie tous les contrats 
        // 6. Apres toutes les verif on fait les modif en base : 
        //       1. Affectation paye a l'exercice 2.affectation des frais a l'exercice 3.Generer les frais fixes  
        //On renvoi un log de tous ce qui a ete effectues
        //return new Response('<h1>Hello World</h1>') ;

        return $this->render('ComptabiliteBundle:Default:frais.html.twig', array('name' => $name));
    }

}
