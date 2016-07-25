<?php

namespace SIE\DocumentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

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
          $this->dataManager = $this->container->get('sie_document.dataManager');       
    }
    
    public function add_documentAction(){
        $this->setUpDataManager();
       
        $request = Request::createFromGlobals();
        
         $lib_document=$request->request->get('lib_document');
        $lien_document=$request->request->get('lien_document');
        $id_central=$request->request->get('id_central');
        
        return new Response($this->dataManager
                ->ajoute_document($id_central,
                       $lib_document,
                        $lien_document)
                );
    }
}
