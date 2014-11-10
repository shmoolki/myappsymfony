<?php

namespace FrxIntranet\FrxintranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FrxintranetBundle:Default:index.html.twig', array('name' => $name));
    }
    
    
    public function testAction($testname)
    {
       
        return $this->render('FrxintranetBundle:Default:comptabilite.html.twig', array('testname' => $testname));
    }
}
