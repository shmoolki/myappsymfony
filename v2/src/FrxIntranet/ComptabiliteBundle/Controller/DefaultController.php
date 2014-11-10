<?php

namespace FrxIntranet\ComptabiliteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ComptabiliteBundle:Default:index.html.twig', array('name' => $name));
    }
}
