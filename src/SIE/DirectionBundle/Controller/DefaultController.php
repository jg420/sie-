<?php

namespace SIE\DirectionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SIEDirectionBundle:form:supervision_equipement.html.twig');
    }
}
