<?php

namespace SIE\EquipementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
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
    public function addEquipementAction(){
        
    }
    public function getAllAction(){
         $this->setUpDataManager(); 
         return(new JsonResponse($this->dataManager->getAll()));
         
    }
    public function getEquipementsByIdCentralAction($id_central){
       $this->setUpDataManager();        
        return new JsonResponse($this->dataManager->getEquipementsByIdCentral($id_central));
    }
    
   public function getEquipementAction($id_equipement){
        $this->setUpDataManager();        
        return new JsonResponse($this->dataManager->getEquipement($id_equipement));
    }
    
    public function delEquipementAction( ){}
    
    public function updateEquipementAction( ){
        $this->setUpDataManager();       
        $request = Request::createFromGlobals();
        
        $id_equipement=$request->request->get('id_equipement');
        $lib_equipement=$request->request->get('lib_equipement');
        $constructeur=$request->request->get('constructeur');
        $num_serie_equipement=$request->request->get('num_serie_equipement');
        $version_equipement=$request->request->get('version_equipement');
         
        
        return new JsonResponse(
               $this->dataManager->updateEquipement($id_equipement,
                       $lib_equipement,
                       $constructeur,
                       $num_serie_equipement, 
                       $version_equipement
                       ));
        
        
        
    }
    
}
