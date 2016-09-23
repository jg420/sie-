<?php
// src/SIE/CoreBundle/Controller/ModelController.php
namespace SIE\CoreBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SIE\CoreBundle\Entity\Societe;
 
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TestController extends Controller
{
    public function indexAction()
    {   
        return $this->render('SIECoreBundle:Default:index.html.twig');
           
    }
}
