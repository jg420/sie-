<?php
 namespace SIE\DataManager;

ini_set('display_errors', 'On');
error_reporting(E_ALL);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//dependance
/*include_once 'class/AccessEquipement.php';
include_once 'class/AddresseMac.php';*/

global $mysqli;

function init(){
    connectBDD();
    
}

function connectBDD(){
    global $mysqli;
    //$mysqli = new mysqli("127.0.0.1", "root", "", "referenciel");
    $mysqli = new mysqli("127.0.0.1", "root", "bob123", "referentiel");

     $db=$mysqli;
    if($db->connect_errno > 0){
        die('Unable to connect to database [' . $db->connect_error . ']');
    }
     
}
function closeBDD(){
    global $mysqli;
    
    if(isset($mysqli)){
        $mysqli->close();
    }
    
}

function getDR(){
    connectBDD();
    //$mysqli = new mysqli("127.0.0.1", "root", "bob123", "GestionCommercial");
     global $mysqli;
     $db=$mysqli;
    if($db->connect_errno > 0){
        die('Unable to connect to database [' . $db->connect_error . ']');
    }
   $request="SELECT id_direction,lib_direction as libDR FROM DIRECTION_REGIONALES";
   $result = $mysqli->query($request);
   
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch_assoc()) {
            $return[$i]['libDR']=$row['libDR'];
            $return[$i]['id_direction']=$row['id_direction'];
            $i++;
        }

        /* Libération des résultats */
        $result->free();
       }
      closeBDD();
    return $return;
     
}

function getCentralDR($dr){
   //$mysqli = new mysqli("127.0.0.1", "root", "bob123", "GestionCommercial");
    connectBDD();
     //echo $dr;
     global $mysqli;
   $db=$mysqli;
    if($db->connect_errno > 0){
        die('Unable to connect to database [' . $db->connect_error . ']');
    }
   $request="SELECT c.id_central AS id_central, c.lib_central AS lib_central, tc.lib_type_central AS lib_type, cex.tri_cex as lib_cex,
       d.lib_direction as lib_direction 
 FROM CENTRAL AS c
INNER JOIN DIRECTION_REGIONALES AS d, TYPE_CENTRAL AS tc, CHARGE_EXPLOITATION as cex
WHERE 
 tc.id_type_central = c.id_type_central
AND c.id_direction = d.id_direction
AND cex.id_cex=c.id_cex
AND d.id_direction =".$dr;
    //echo $request."\n<br>";
   
   $result = $mysqli->query($request);
   
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch_assoc()) {
            
            if($row['lib_central']!="" & $row['lib_central']!="" ){
                $return[$i]['lib_central']=  utf8_encode($row['lib_central']);
                $return[$i]['id_central']=$row['id_central'];
                $return[$i]['lib_type']=utf8_encode($row['lib_type']);
                $return[$i]['lib_cex']=utf8_encode($row['lib_cex']);
                $return[$i]['lib_direction']=utf8_encode($row['lib_direction']);
                $i++;
            }
           
        
          
        }
         /* Libération des résultats */
 //D       $result->free();
       }
       closeBDD();
        //      echo "66   ".$return;
    return $return;
}

function getInfosCentral($id_central){
    //$mysqli = new mysqli("127.0.0.1", "root", "bob123", "GestionCommercial");
    connectBDD();
    global $mysqli;

   $request="SELECT DISTINCT e.id_equipement,
       c.id_central,
       e.lib_equipement,
       c.lib_central,
       tc.lib_type_central,
       cex.tri_cex,
       cons.lib_constructeur,
       cons.id_constructeur
FROM EQUIPEMENT_CENTRAL AS ce
INNER JOIN EQUIPEMENT AS e,
CENTRAL AS c,
TYPE_CENTRAL AS tc,
CHARGE_EXPLOITATION AS cex, 
CONSTRUCTEUR AS cons
WHERE
 ce.id_central_fk_ec = c.id_central
AND ce.id_equipement_fk_ec = e.id_equipement
AND c.id_type_central = tc.id_type_central
AND cex.id_cex = c.id_cex
AND cons.id_constructeur = e.id_constructeur
AND c.id_central =".$id_central;
     //echo $request;
   $return=null;
   $result = $mysqli->query($request);
   if($result){
       $i=0;    
        while ($row = $result->fetch_assoc()) {
                
                $return[$i]['id_central']=$row['id_central'];
                $return[$i]['lib_equipement']=  utf8_encode($row['lib_equipement']);
                $return[$i]['lib_constructeur']=  utf8_encode($row['lib_constructeur']);
                $return[$i]['id_constructeur']=  utf8_encode($row['id_constructeur']);
                $return[$i]['id_equipement']=$row['id_equipement'];
                 $return[$i]['lib_central']=utf8_encode($row['lib_central']);
                $return[$i]['lib_type_central']=utf8_encode($row['lib_type_central']);
                $return[$i]['tri_cex']=utf8_encode($row['tri_cex']);
                $i++;                      
        }
       $result->free();
       }
       closeBDD();
    return $return;
}

function getNameCentral($id){
    connectBDD();
    global $mysqli;
     
    $request="SELECT lib_central from CENTRAL WHERE id_central=".$id;
    //echo $request;
    $result = $mysqli->query($request);
    $return=null;
    if($result){
       $row = $result->fetch_assoc();
       $return=$row['lib_central'];
             
    }

    closeBDD();
    
    return $return;    
}

function getInfosCentralForPdf($id_central){
    connectBDD();
    global $mysqli;
    
    $request="SELECT e.id_equipement as id_equipement, e.lib_equipement as lib_equipement,"
            . "e.version_actuel_equipement as version ,c.lib_constructeur as lib_constructeur, t.libelle_type_equipement as lib_type "
            . " FROM EQUIPEMENT as e, CONSTRUCTEUR as c, TYPE_EQUIPEMENT as t,"
            . " EQUIPEMENT_CENTRAL as ec "
            . " WHERE e.id_constructeur=c.id_constructeur AND "
            . " e.id_type_equipement=t.id_type_equipement AND"
            . " e.id_equipement=ec.id_equipement AND"
            . " ec.id_central= ".$id_central;
   //echo $request;
    $result = $mysqli->query($request);
    $return=null;
   if($result){
       $i=0;    
        while ($row = $result->fetch_assoc()) {
            
            $id_equipement=$row['id_equipement'];
            $lib_equipement=$row['lib_equipement'];
            $lib_constructeur=$row['lib_constructeur'];
            $version=$row['version'];
            $lib_type=$row['lib_type'];
            
            $list_access=getAllAccessEquipement($id_equipement);
            $list_mac=getMacAdressEquipement($id_equipement);
           // $list_access=null;
            //$list_mac=null;
            
            $return[$i] = new Equipement($lib_equipement, $lib_constructeur,$list_access,$list_mac, $version, $lib_type);
                
                
            $i++;                      
        }
       $result->free();
        closeBDD();
       }
   
    return $return;
}

function getAllAccessEquipement($id_equipement){
    connectBDD();
       global $mysqli;

   $request="SELECT a.lib_access, a.login, a.password, a.n_port, cae.id_access_fk, aip.adresse_ip_equipement, p.lib_protocol
FROM ACCESS AS a, CORRESPONDANCE_ACCESS_EQUIPEMENT AS cae, ADRESSE_IP_EQUIPEMENT AS aip, PROTOCOL AS p
WHERE a.id_access = cae.id_access_fk
AND p.id_protocol = a.id_protocol
AND aip.id_adresse_ip_equipement = a.id_adresse_ip_equipement
AND id_equipement_fk_ae =".$id_equipement;

    //echo "------------------".$request;
   $result = $mysqli->query($request);
   
   $return=null;
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch_assoc()) {
            $nport=$row['n_port'];
            $login=$row['login'];
            $mdp=$row['password'];
            $host=$row['adresse_ip_equipement'];
            $id_access=$row['id_access_fk'];
            $lib_protocol=$row['lib_protocol'];
            $lib_access=$row['lib_access'];
           
             
            $return[$i]['id_access']= $id_access;
            $return[$i]['login']=$login;
            $return[$i]['password']=$mdp;
            $return[$i]['adresse_ip_equipement']=  $host;    
            $return[$i]['n_port']=$nport;
            $return[$i]['lib_protocol']=$lib_protocol;
             $return[$i]['lib_access']=$lib_access;
                    
            $i++;
        }

        /* Libération des résultats */
        $result->free();
        //closeBDD();
       }
    
       closeBDD();
    return $return; 
}

/**
*
 * Retourne la liste des access d'une central
 *   */
function getAllAccessCentral($id_central){
    connectBDD();
    global $mysqli;

   $request="SELECT ae.n_port as port ,
       ae.login as login ,
       ae.password as mdp
       ,ae.lib_access,
       ade.adresse_ip_equipement as adress,
       e.lib_equipement,ac.id_central
FROM ACCESS_EQUIPEMENT as ae
INNER JOIN EQUIPEMENT as e ON ae.id_equipement=e.id_equipement
INNER JOIN ADRESSE_IP_EQUIPEMENT as ade ON ade.id_adresse_ip_equipement=ae.id_adresse_ip_equipement
INNER JOIN EQUIPEMENT_CENTRAL as ac ON ac.id_equipement=ae.id_equipement
WHERE ac.id_central=".$id_central;

   //echo "------------------".$request;
   $result = $mysqli->query($request);
   
   $return=null;
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch_assoc()) {
            $nport=$row['port'];
            $login=$row['login'];
            $mdp=$row['mdp'];
            $host=$row['adress'];
            
            $access=new AccessEquipement($nport,$host,$login,$mdp);
            $return[$i]= $access;
           
            $i++;
        }

        /* Libération des résultats */
        $result->free();
        closeBDD();
       }
    

    return $return;
}

function getMacAdressEquipement($id_equipement){
   connectBDD();
    global $mysqli;
    $id=$id_equipement;
    
    //$id=91;
   $request="SELECT a.adresse_mac_equipement as adresse FROM ADRESSE_MAC_EQUIPEMENT as a "
           . "INNER JOIN CORRESPONDACE_EQUIPEMENT_ADRESSE_MAC as cea "
           . " WHERE cea.id_adresse_mac=a.id_adresse_mac_equipement AND "
           . " cea.id_equipement=".$id;

   //echo $request;
   $result = $mysqli->query($request);
    $return=null;
   if($result){
       
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch_assoc()) {
          
            $adress=$row['adresse'];
            $adresseMac=new AddresseMac($adress);
            $return[$i]= $adresseMac;
           
            $i++;
           // echo "passe la";
        }
            /*$adress="AA:AA:AA:AA:ED:15";
            $adresseMac=new AddresseMac($adress);
            $return[0]= $adresseMac;
            $return[1]= $adresseMac;*/
        
        
         
        /* Libération des résultats */
        $result->free();
       }/*else{
           //echo "test0";
       
            $adress="AA:AA:AA:AA:ED:15";
            $adresseMac=new AddresseMac($adress);
            $return[0]= $adresseMac;
            $return[1]= $adresseMac;
       }*/
       closeBDD();

    return $return; 
}

function getAllCentral(){
       connectBDD();
       global $mysqli;
    //$mysqli = new mysqli("127.0.0.1", "root", "bob123", "GestionCommercial");
   
   $request="SELECT c.id_central AS id_central,
       c.lib_central AS lib_central,
       tc.lib_type_central AS lib_type,
       cex.tri_cex as lib_cex,
       d.lib_direction as lib_direction,
       d.id_direction as id_direction,
       c.code_analytique as code_ana,
       c.societe as societe       
       
 FROM CENTRAL AS c
INNER JOIN DIRECTION_REGIONALES AS d,
            TYPE_CENTRAL AS tc,
            CHARGE_EXPLOITATION as cex          
 
WHERE 
 tc.id_type_central = c.id_type_central
AND c.id_direction = d.id_direction
AND cex.id_cex=c.id_cex";
    //echo $request;
   $result = $mysqli->query($request);
   $return=null;
   if($result){
       $i=0;    
        while ($row = $result->fetch_assoc()) {
                
                $return[$i]['lib_central']=  utf8_encode($row['lib_central']);
                $return[$i]['id_central']=$row['id_central'];
                $return[$i]['lib_type']=utf8_encode($row['lib_type']);
                $return[$i]['lib_cex']=utf8_encode($row['lib_cex']);
                $return[$i]['lib_direction']=utf8_encode($row['lib_direction']);
                $return[$i]['id_direction']=$row['id_direction'];
                $return[$i]['code_ana']=utf8_encode($row['code_ana']);
                $return[$i]['societe']=  utf8_encode($row['societe']);
                $i++;                      
        }
       $result->free();
       }
       closeBDD();
    return $return;
    
}

function getConfigCentral($id_central){
     connectBDD();
    global $mysqli;

   
   $request="SELECT c.lib_config as lib_config ,c.lien_config as lien_config from CORRESPONDANCE_CENTRAL_CONFIG as co 
       INNER JOIN CONFIG as c where co.id_central=".$id_central;
       


   $return=null;
   $result = $mysqli->query($request);
   mysqli_set_charset($db, "utf8");
   //echo $request;
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch_assoc()) {
            $return[$i]['lien']= urldecode($row['lien_config']);
            $return[$i]['lib']=utf8_encode($row['lib_config']);
            $i++;
        }

        /* Libération des résultats */
        $result->free();
       }
       closeBDD();

    return $return; 
}

function getEquipement($id_equipement){
    connectBDD();
    global $mysqli;
    
    $request="SELECT e.id_equipement AS id_equipement, e.lib_equipement AS lib_equipement, c.lib_central AS lib_central, te.libelle_type_equipement as lib_type
FROM EQUIPEMENT AS e
INNER JOIN EQUIPEMENT_CENTRAL AS ec ON ec.id_equipement = e.id_equipement
INNER JOIN CENTRAL AS c ON c.id_central = ec.id_central
INNER JOIN TYPE_EQUIPEMENT AS te ON te.id_type_equipement = e.id_type_equipement
WHERE e.id_equipement=".$id_equipement;
    
    //echo $request;
    $result = $mysqli->query($request);
   $return=null;
   if($result){
       $i=0;    
        while($row = $result->fetch_assoc()) 
                {

                $return[$i]['id_equipement']=$row['id_equipement'];
                $return[$i]['lib_equipement']=  utf8_encode($row['lib_equipement']);
                $return[$i]['type_equipement']=utf8_encode($row['lib_type']);
                $return[$i]['lib_central']=utf8_encode($row['lib_central']);
                /*$return[$i]['lib_access']=utf8_encode($row['lib_access']);
               // $return[$i]['adresse_ip']=utf8_encode($row['adresse_ip']);
                $return[$i]['login']=utf8_encode($row['login']);
                $return[$i]['mdp']=utf8_encode($row['mdp']);
                $return[$i]['n_port']=utf8_encode($row['n_port']);
                $return[$i]['adresse_ip']=utf8_encode($row['adresse_ip']);
                $return[$i]['adresse_mac']=utf8_encode($row['adresse_mac']);*/
               //echo $return[$i]['id_equipement']."---";
                $i++;                      
       }
       $result->free();
       }
    
    
    closeBDD();
    return $return;
}

function getItemCentral($central){
   connectBDD();
    global $mysqli;

    $request="";
   $result = $mysqli->query($request);
   $return=null;
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch_assoc()) {
            $return[$i]=$row['libDR'];
            $i++;
        }

        /* Libération des résultats */
        $result->free();
       }
       closeBDD();
    return $return;
}

function getScadaEquipement($equipement){
    connectBDD();
    global $mysqli;

 
     $request="";
   $result = $mysqli->query($request);
   $return=null;
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch_assoc()) {
            $return[$i]=$row['libDR'];
            $i++;
        }

        /* Libération des résultats */
        $result->free();
       }
       closeBDD();
    return $return;
}

function getTypeEquipement(){
    connectBDD();
    global $mysqli;

   $request="SELECT * FROM TYPE_EQUIPEMENT";
   $result = $mysqli->query($request);
   $return=null;
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch_assoc()) {
            $return[$i]['id_type']=$row['id_type_equipement'];
            $return[$i]['lib_type']=  utf8_encode($row['libelle_type_equipement']);
            
            $i++;
        }

        /* Libération des résultats */
        $result->free();
       }
       closeBDD();
    return $return;
}

function getAdresseIP($id_equipement){
    connectBDD();
    global $mysqli;

   $request="SELECT * FROM TYPE_EQUIPEMENT";
   $result = $mysqli->query($request);
   $return=null;
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch_assoc()) {
            $return[$i]['id_addresse_ip']=$row['id_addresse'];
            $return[$i]['lib_addresse_ip']=  utf8_encode($row['lib_addresse']);
            
            $i++;
        }

        /* Libération des résultats */
        $result->free();
       }
       closeBDD();
    return $return;    
}

function getAdresseMAC($id_equipement){
    connectBDD();
    global $mysqli;

   $request=
    "SELECT ame.adresse_mac_equipement,
            ame.id_adresse_mac_equipement
    FROM ADRESSE_MAC_EQUIPEMENT AS ame
    INNER JOIN CORRESPONDACE_EQUIPEMENT_ADRESSE_MAC AS cea ON cea.id_adresse_mac = ame.id_adresse_mac_equipement
    AND cea.id_equipement =".$id_equipement;
   
   $result = $mysqli->query($request);
   $return=null;
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch_assoc()) {
            $return[$i]['adresse_mac_equipement']=$row['adresse_mac_equipement'];
            $return[$i]['id_adresse_mac_equipement']=  $row['id_adresse_mac_equipement'];
            
            $i++;
        }

        /* Libération des résultats */
        $result->free();
       }
       closeBDD();
    return $return;  
    
}

function getAccess_Eq($id_equipement){
    connectBDD();
    global $mysqli;

   $request="SELECT ae.id_access, ae.id_equipement, ae.lib_access, ae.login, ae.n_port, ae.password, a.adresse_ip_equipement
FROM ACCESS_EQUIPEMENT AS ae INNER JOIN ADRESSE_IP_EQUIPEMENT AS a ON a.id_adresse_ip_equipement = ae.id_adresse_ip_equipement
WHERE id_equipement=".$id_equipement;
   $result = $mysqli->query($request);
   $return=null;
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch_assoc()) {
            $return[$i]['id_access']=$row['id_access'];
            $return[$i]['n_port']=  $row['n_port'];
            $return[$i]['login']=  utf8_encode($row['login']);
            $return[$i]['password']=utf8_encode($row['password']);
            $return[$i]['adresse_ip_equipement']=$row['adresse_ip_equipement'];
            $return[$i]['id_equipement']=$row['id_equipement'];
            $return[$i]['lib_access']=utf8_encode($row['lib_access']);
                        
            $i++;
        }

        /* Libération des résultats */
        $result->free();
       }
       closeBDD();
    return $return;  
}

function get_Access_Eq($id_eq,$lib_access){
    connectBDD();
    global $mysqli;

   $request="SELECT ae.id_access, ae.id_equipement, ae.lib_access, ae.login, ae.n_port, ae.password, a.adresse_ip_equipement
FROM ACCESS_EQUIPEMENT AS ae INNER JOIN ADRESSE_IP_EQUIPEMENT AS a ON a.id_adresse_ip_equipement = ae.id_adresse_ip_equipement
WHERE id_equipement=".$id_eq." AND lib_access like '".$lib_access."'";
   $result = $mysqli->query($request);
   $return=null;
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch_assoc()) {
            $return[$i]['id_access']=$row['id_access'];
            $return[$i]['n_port']=  $row['n_port'];
            $return[$i]['login']=  utf8_encode($row['login']);
            $return[$i]['password']=utf8_encode($row['password']);
            $return[$i]['adresse_ip_equipement']=$row['adresse_ip_equipement'];
            $return[$i]['id_equipement']=$row['id_equipement'];
            $return[$i]['lib_access']=utf8_encode($row['lib_access']);
                        
            $i++;
        }

        /* Libération des résultats */
        $result->free();
       }
       closeBDD();
    return $return; 
}

function getID_mac($adresse_mac){
    connectBDD();
    global $mysqli;
    
    $request="SELECT id_adresse_mac_equipement FROM ADRESSE_MAC_EQUIPEMENT WHERE "
            . " adresse_mac_equipement LIKE '".$adresse_mac."' ";
    
       $result = $mysqli->query($request);
   $return=null;
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        if ($row = $result->fetch_assoc()) {
          $return=$row['id_adresse_mac_equipement'] ;
        }else {
            $return=null;
            
        }

        /* Libération des résultats */
        $result->free();
       }
       closeBDD();
    return $return; 
    
    
}

function getID_ip($lib_adress,$n_port){
    
    
}

function addAdresseMac_Eq($id_equipement,$adresse_mac){
    //connectBDD();
    global $mysqli;
  //mac_exist($adresse_mac);
    if(mac_exist($adresse_mac)){
         //echo 'mac connu';
        $id_mac=  getID_mac($adresse_mac);
        connectBDD();
        $request="INSERT INTO CORRESPONDACE_EQUIPEMENT_ADRESSE_MAC (id_adresse_mac,id_equipement)"
                . "VALUES (".$id_mac.",".$id_equipement.")";
        $mysqli->query($request);
    //    echo $request;
        closeBDD();
    }else {
        echo 'mac inconnu';
        //connectBDD();
        addAdresseMac($adresse_mac);
        $id_mac=  getID_mac($adresse_mac);
        connectBDD();
        $request="INSERT INTO CORRESPONDACE_EQUIPEMENT_ADRESSE_MAC (id_adresse_mac,id_equipement)"
                . "VALUES (".$id_mac.",".$id_equipement.")";
        $mysqli->query($request);
    //    echo $request;
        closeBDD();  
       echo 'ajout terminé';
       }
    
    
}

function addMoyenAcces_eq($id_equipement,$adresse_ip){
     //connectBDD();
    global $mysqli;
  //mac_exist($adresse_mac);
    if(adresse_ip_exist($adresse_ip)){
         //echo 'mac connu';
        $id_ip=  getID_ip($adresse_ip);
        
        addMoyenAccess($id_ip, $id_equipement);
    }else {
        echo 'adresse inconnu';
        //connectBDD();
        addAdressIp($adresse_mac);
        $id_ip=  getID_ip($adresse_mac);
        connectBDD();
        $request="INSERT INTO ACCESS_EQUIPEMENT (id_adresse_ip_equipement,id_equipement)"
                . "VALUES (".$id_ip.",".$id_equipement.")";
        $mysqli->query($request);
    //    echo $request;
        closeBDD();  
       echo 'ajout terminé';
       }
    
    
}

function addAdressIp($adressIP){
    
    
}

function addAdresseMac($adresseMac){
    connectBDD();
    global $mysqli;

    $request="INSERT INTO ADRESSE_MAC_EQUIPEMENT (adresse_mac_equipement)"
           . "VALUES ('".$adresseMac."');";
    $result=$mysqli->query($request);
    
    /*$request="SELECT id_adresse_mac_equipement FROM ADRESSE_MAC_EQUIPEMENT "
            . "WHERE adresse_mac_equipement LIKE '".$adresseMac."' LIMIT 1";
    //echo $request;
    $result=$mysqli->query($request);*/
    
    if($result){
        //echo 'c bon';
      //  $row = $result->fetch_assoc();
      //  $return=$row['id_adresse_mac_equipement'];
        $return=1;
        
    }else {
        $return=0;
    }
    
    closeBDD();
    return $return; 
}

function mac_exist($adresseMac){
    //
    connectBDD();
    global $mysqli;
    
    $request="SELECT id_adresse_mac_equipement FROM ADRESSE_MAC_EQUIPEMENT "
            . "WHERE adresse_mac_equipement LIKE '".$adresseMac."' LIMIT 1";
    //echo $request;
    $result=$mysqli->query($request);
    
   
        //echo 'ici';
        $i=0;
        while($row = $result->fetch_assoc()){
            $i++;
        };
        if($i>1){
            $return=1;
        }else $return=0;
      
    
    closeBDD();
    return $return; 
    
    
    //return $ret;
}

function adresse_ip_exist($lib_adress){
    connectBDD();
    global $mysqli;
    
    $request="SELECT id_adresse_ip_equipement FROM ADRESSE_IP_EQUIPEMENT "
            . "WHERE adresse_ip_equipement LIKE '".$lib_adress."' LIMIT 1";
    //echo $request;
    $result=$mysqli->query($request);
    
   
        //echo 'ici';
        $i=0;
        while($row = $result->fetch_assoc()){
            $i++;
        };
        if($i>1){
            $return=1;
        }else $return=0;
      
    
    closeBDD();
    return $return; 
}

function addMoyenAccess($access,$id_equipement){
    connectBDD();
    global $mysqli;

   $request="INSERT INTO ACCESS_EQUIPEMENT(n_port,login,password,id_adresse_ip_equipement,id_equipement,lib_access)"
           . " VALUES (0," 
                ." '', " 
                ." '', "
                ." 1, "
           . $id_equipement.",'"
           . $access['lib_access']."');";
   echo $request;
   $result = $mysqli->query($request);
   $return=null;
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        /*while ($row = $result->fetch_assoc()) {
            
                        
            $i++;
        }*/

        /* Libération des résultats */
       // $result->free();
       }
       closeBDD();
    return $return;  
}

function old_addMoyenAccess($access,$id_equipement){
    connectBDD();
    global $mysqli;

   $request="INSERT INTO ACCESS_EQUIPEMENT(lib_access)"
           . " VALUES ('"
           . $access['lib_access']."');";
   
   echo $request;
   $result = $mysqli->query($request);
   $return=null;
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch_assoc()) {
            
                        
            $i++;
        }

        /* Libération des résultats */
        $result->free();
       }
       closeBDD();
    return $return;  
}

function modifyEquipement($id_eq,
                        $id_central,
                        $lib_access,
                        $adresseIP,
                        $login,
                        $mdp,
                        $port,
                        $adresseMac,
                        $id_type_equipement,
                        $lib_equipement
                        )
{
 connectBDD();
    global $mysqli;

   $request="UPDATE ("
           . "lib_access,"
           . ""
           . ")"
           . " VALUES ('"
           . $lib_access."');";
   
   echo $request;
   $result = $mysqli->query($request);
   $return=null;
   if($result){
       //$i=0;
       /* Récupère un tableau associatif */
      /*  while ($row = $result->fetch_assoc()) {
            
                        
            $i++;
        }*/

        /* Libération des résultats */
        //$result->free();
       }
       closeBDD();
    return $return;     
                        
    
}

function modifCentral($id_central,$code_ana,$lib_central,
                        $societe,$zone,$cex){
      connectBDD();
    global $mysqli;
    
   $request="UPDATE CENTRAL
SET code_analytique = '".$code_ana."',
    lib_central='".$lib_central."',
     id_direction=".$zone." ".","
           . "societe='".$societe."'".
    // "id_cex=".$cex." 
" WHERE id_central=".$id_central;
   $return=$request;
   $result = $mysqli->query($request);
  // $return=null;
   if($result){
       $return="Modif OK";
    //    $result->free();
    } 
       closeBDD();
    return $return;  
}
function getSociete(){
    connectBDD();
    global $mysqli;

   $request="SELECT * FROM SOCIETE";
   $result = $mysqli->query($request);
   $return=null;
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch_assoc()) {
            
            $return[$i]['id_societe']            = utf8_encode($row['id_societe']);
            $return[$i]['lib_societe']            =utf8_encode( $row['lib_societe']);
            
            
            
            $i++;
        }

        /* Libération des résultats */
        $result->free();
       }
       closeBDD();
    return $return;  
}
function modeleFunction(){
    connectBDD();
    global $mysqli;

   $request="INSERT INTO ACCESS_EQUIPEMENT(n_port,login,passwordnid_adresse_ip_equipement,id_equipement,lib_access)"
           . " VALUES (";
   $result = $mysqli->query($request);
   $return=null;
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch_assoc()) {
            
                        
            $i++;
        }

        /* Libération des résultats */
        $result->free();
       }
       closeBDD();
    return $return;  
}