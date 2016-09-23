<?php

namespace SIE\ContratBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SIEContratBundle:Default:index.html.twig');
    }
}
