<?php

namespace SIE\DocumentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/")
     */
    public function getDocumentsAction($id_central)
    {
        $this->setUpDataManager();        
        return new JsonResponse($this->dataManager->getDocumentByIdCentral($id_central));
    }
    
    private function setUpDataManager(){
        // On récupère le service
          $this->dataManager = $this->container->get('sie_access.dataManager');       
    }
}
