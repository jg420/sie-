<?php
//  src/SIE/AccessBundle/UserController.php
namespace SIE\AccessBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    var $dataManager;
    public function indexAction()
    {
        return $this->render('SIEEquipementBundle:Default:index.html.twig');
    }
    public function addAccessAction(){
        $this->setUpDataManager();
       
        $request = Request::createFromGlobals();
        
        //$id_access=$request->request->get('id_access');
        $lib_access=  filter_var($request->request->get('lib_access'),FILTER_SANITIZE_STRING);
        $user=filter_var($request->request->get('user'),FILTER_SANITIZE_STRING);
        $mdp=filter_var($request->request->get('mdp'),FILTER_SANITIZE_STRING);
        $port=filter_var($request->request->get('port'),FILTER_SANITIZE_STRING);
        $protocol=filter_var($request->request->get('protocol'),FILTER_SANITIZE_STRING);
        $adresse=filter_var($request->request->get('adresse'),FILTER_SANITIZE_STRING);
        $id_equipement=filter_var($request->request->get('id_equipement'),FILTER_SANITIZE_STRING);
        
         return new JsonResponse($this->dataManager->addAccess(
                 $lib_access,
                  $port, 
                 $user,
                 $mdp,
                $adresse,
                 $protocol,
                 $id_equipement
                 ));
        
        
    }
    
    public function getAccessByIdEquipementAction($id_equipement){
        $this->setUpDataManager();        
        return new JsonResponse($this->dataManager->getAccessByIdEquipement($id_equipement));
    }
    public function getAllAction(){
        $this->setUpDataManager();        
         return(new JsonResponse($this->dataManager->getAll()));
    }
    
   public function getAccessAction($id_access){
        $this->setUpDataManager();        
        return new JsonResponse($this->dataManager->getAccess($id_access));
    }
    
    public function getProtocolsAction(){
        $this->setUpDataManager();        
        return new JsonResponse($this->dataManager->getProtocols());
    }
    public function delAccessAction( $id_access){
        $this->setUpDataManager();        
        return new JsonResponse($this->dataManager->delAccess($id_access));
    }
    
    public function updateAccessAction(  ){
        $this->setUpDataManager();
       
        $request = Request::createFromGlobals();
        
        $id_access=$request->request->get('id_access');
        $lib_access=$request->request->get('lib_access');
        $user=$request->request->get('user');
        $mdp=$request->request->get('mdp');
        $port=$request->request->get('port');
        $protocol=$request->request->get('protocol');
        $adresse=$request->request->get('adresse');
        
         return new JsonResponse($this->dataManager->updateAccess($id_access, 
                 $lib_access,
                 $user,
                 $mdp,
                 $port, 
                 $protocol,
                 $adresse));
        
               
    }
   private function setUpDataManager(){
        // On récupère le service
          $this->dataManager = $this->container->get('sie_access.dataManager');       
    }
    
    public function testAccessAction($adresse,$port){
        $url = 'http://'.$adresse.':'.$port.'';
    $timeout = 10;

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);


    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_NOBODY, true);

    // Inclure les headers HTTP de retour dans le corps de la réponse
    curl_setopt($ch, CURLOPT_HEADER, true);

    $headers = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
    curl_close($ch);    
    
     
   
    
    return new Response($httpCode);
    }
}
