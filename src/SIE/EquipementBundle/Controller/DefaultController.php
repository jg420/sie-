<?php

namespace SIE\EquipementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
      var $dataManager;
    private function setUpDataManager(){
        // On récupère le service
          $this->dataManager = $this->container->get('sie_equipement.dataManager');       
    }
    public function indexAction()
    {
        return $this->render('SIEEquipementBundle:Default:index.html.twig');
    }
    
    public function getConstructeursAction(){
        $this->setUpDataManager();
        return new JsonResponse($this->dataManager->getConstructeur());
    }
}
