<?php

/*
 * Copyright (C) 2016 g.juillerot
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

// src/SIE/CentralBundle/Controller/ORMController

namespace SIE\CentralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
 

class AdminController extends Controller {
    var $dataManager;
    
    private function setUpDataManager(){
        // On récupère le service
          $this->dataManager = $this->container->get('sie_central.dataManager');       
    }
    public function indexAction() {
        
        return $this->render('SIECentralBundle:Default:index.html.twig');
    }

    public function json_getAll_centralAction() {
        $this->setUpDataManager();

        return new JsonResponse($this->dataManager->getAllCentral());

    }
      public function get_societeAction() {
        $this->setUpDataManager();

        return new JsonResponse($this->dataManager->getSociete());

    }

    public function showAllAction() {
        $central = new Central();
        $form = $this->createForm('SIE\CoreBundle\Form\CentralType', $central);
        //$form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($central);
            $em->flush();

            return $this->redirectToRoute('central_show', array('id' => $central->getId()));
        }

        return $this->render('central/new.html.twig', array(
                    'central' => $central,
                    'form' => $form->createView(),
        ));
    }

    public function modifCentralAction(){
        $this->setUpDataManager();
       
        $request = Request::createFromGlobals();
        
        $id_central=$request->request->get('id_central');
        $code_ana=$request->request->get('code_ana');
        $lib_central=$request->request->get('lib_central');
        $societe=$request->request->get('societe');
        $zone=$request->request->get('zone');
        $cex=$request->request->get('cex');
        
        $central['id_central']=$id_central;
        $central['lib_central']=$lib_central;
        $central['societe']=$societe;
        $central['code_ana']=$code_ana;
        
        return new Response($this->dataManager->updateCentral($central));
        
        
        
    }
   
    
   function get_all_societeAction(){
       $this->setUpDataManager();
       
       
       
       return new JsonResponse($this->dataManager->getSociete());
   }
}
