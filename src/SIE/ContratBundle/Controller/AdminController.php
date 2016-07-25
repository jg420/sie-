<?php
//  src/SIE/ContratBundle/UserController.php
namespace SIE\ContratBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdminController extends Controller
{
    var $dataManager;
    public function indexAction()
    {
        return $this->render('SIEEquipementBundle:Default:index.html.twig');
    }
    public function addContratAction(){}
    
    public function getAllAction(){
        $this->setUpDataManager();        
        return new JsonResponse($this->dataManager->getAll());
    }
    public function getContratByIdCentralAction($id_central){
        
    }
    
   public function getContratAction($id_contrat){
        $this->setUpDataManager();        
        return new JsonResponse(getInfosCentral($id));
    }
    
    public function delContratAction(){}
    
    public function updateContratAction(){
        $this->setUpDataManager();
       
        $request = Request::createFromGlobals();
        
        $id_central=$request->request->get('id_central');
        $code_ana=$request->request->get('code_ana');
        $lib_central=$request->request->get('lib_central');
        $societe=$request->request->get('societe');
        $zone=$request->request->get('zone');
        $cex=$request->request->get('cex');
        
        return new Response(modifCentral($id_central, $code_ana, $lib_central, $societe, $zone, $cex));
        
        
        
    }
    
    private function setUpDataManager(){
        // On récupère le service
          $this->dataManager = $this->container->get('sie_contrat.dataManager');       
    }
    
}
