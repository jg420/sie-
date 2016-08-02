<?php

namespace SIE\DocumentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\FileUpload;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller {

    /**
     * @Route("/")
     */
    public function getDocumentsAction($id_central) {
        $this->setUpDataManager();
        return new JsonResponse($this->dataManager->getDocumentByIdCentral($id_central));
    }

    private function setUpDataManager() {
        // On récupère le service
        $this->dataManager = $this->container->get('sie_document.dataManager');
    }

    public function add_documentAction() {
        $this->setUpDataManager();
        $request = Request::createFromGlobals();
        $file=$request->files->get('file_document');
        $name=$file->getClientOriginalName();
         
        //TODO in service 
        $uploaddir = '/var/www/html/uploads/';
        $uploadfile = $uploaddir . $name;

        if (move_uploaded_file($file, $uploadfile)) {
            $return = "OK";
        } else {
            $return = var_dump($file);
        }

       // return new Response($return);

          return new Response($this->dataManager
          ->ajoute_document($name)
          );
          
    }
    function add_document_centralAction(){
         $this->setUpDataManager();
         $request = Request::createFromGlobals();
         
         $id_central=$request->request->get('id_central');
         $id_doc=$request->request->get('id_doc');
         $lib_doc=$request->request->get('lib_doc');
         
         return new Response($this->dataManager
          ->add_document_central($lib_doc,$id_doc,$id_central));
          
    }

}
