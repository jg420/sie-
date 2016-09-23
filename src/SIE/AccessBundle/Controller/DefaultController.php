<?php

namespace SIE\AccessBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SIEAccessBundle:Default:index.html.twig');
    }
}
