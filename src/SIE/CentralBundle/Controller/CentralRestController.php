<?php

/* 
 * Copyright (C) 2016 root
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

namespace SIE\CentralBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class CentralRestController extends Controller
{
  public function getCentralAction($id){
    $centrals=$this->getDoctrine()->getRepository('SIECoreBundle:Central');
    
    if($id=="all")  {
        return $centrals->findAll()->getLibCentral();
    }else{
        
        $central = $centrals->find($id);
    if(!is_object($central)){
      throw $this->createNotFoundException();
    }
        return $central;
    }
  }
}
