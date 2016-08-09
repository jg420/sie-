<?php

//SIE/EquipementBundle/DataManager/MySql.php

namespace SIE\EquipementBundle\DataManager;

class MySql {

    var $mysqli;
    var $login;
    var $mdp;
    var $bdd;

    function __construct($host, $login, $mdp, $bdd) {
         $this->host=$host;
        $this->login=$login;
        $this->mdp=$mdp;
        $this->bdd=$bdd;
        ;
    }

    function init() {
        $this->connectBDD();
    }

    function connectBDD() {

        //$mysqli = new mysqli("127.0.0.1", "root", "", "referenciel");
        $this->mysqli = new \mysqli($this->host, $this->login, $this->mdp, $this->bdd);

        $db = $this->mysqli;
        if ($db->connect_errno > 0) {
            die('Unable to connect to database [' . $db->connect_error . ']');
        }
    }

    function closeBDD() {


        if (isset($this->mysqli)) {
            $this->mysqli->close();
        }
    }

    
    function getAll() {
        $this->connectBDD();
        $request = "SELECT * FROM EQUIPEMENT";
        $result=$this->mysqli->query($request);
        if ($result) {
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                $return[$i]['id_equipement'] = $row['id_equipement'];
                $return[$i]['lib_equipement'] = $row['lib_equipement'];
                $return[$i]['id_type_equipement'] = $row['id_type_equipement'];
                $return[$i]['id_constructeur'] = $row['id_constructeur'];
                $return[$i]['n_serie_equipement'] = $row['n_serie_equipement'];
                $return[$i]['version_actuel_equipement'] = $row['version_actuel_equipement'];

                $i++;
            }
        }

        $this->closeBDD();
        return $return;
    }

    function getEquipement($id_equipement) {
        $this->connectBDD();

        $request = "SELECT e.id_equipement AS id_equipement, e.lib_equipement AS lib_equipement, c.lib_central AS lib_central, te.libelle_type_equipement as lib_type
FROM EQUIPEMENT AS e
INNER JOIN EQUIPEMENT_CENTRAL AS ec ON ec.id_equipement_fk_ec = e.id_equipement
INNER JOIN CENTRAL AS c ON c.id_central = ec.id_central_fk_ec
INNER JOIN TYPE_EQUIPEMENT AS te ON te.id_type_equipement = e.id_type_equipement
WHERE e.id_equipement=" . $id_equipement;

        //echo $request;
        $result = $this->mysqli->query($request);
        $return = null;
        if ($result) {
            $i = 0;
            while ($row = $result->fetch_assoc()) {

                $return[$i]['id_equipement'] = $row['id_equipement'];
                $return[$i]['lib_equipement'] = utf8_encode($row['lib_equipement']);
                $return[$i]['type_equipement'] = utf8_encode($row['lib_type']);
                $return[$i]['lib_central'] = utf8_encode($row['lib_central']);

                $i++;
            }
            $result->free();
        }


        $this->closeBDD();
        return $return;
    }
    
    function getEquipementsByIdCentral($id_central){
        $this->connectBDD();

        $request = "SELECT co.lib_constructeur, te.libelle_type_equipement as lib_type,
            e.id_type_equipement,
            e.id_constructeur,
            e.id_equipement , 
            e.lib_equipement ,
            e.n_serie_equipement,
            e.version_actuel_equipement,
            c.lib_central,
            
            te.libelle_type_equipement 
FROM EQUIPEMENT AS e
INNER JOIN CORRESPONDANCE_EQUIPEMENT_CENTRAL AS ec ON ec.id_equipement_fk_ec = e.id_equipement
INNER JOIN CENTRAL AS c ON c.id_central = ec.id_central_fk_ec
INNER JOIN TYPE_EQUIPEMENT AS te ON te.id_type_equipement = e.id_type_equipement
INNER JOIN CONSTRUCTEUR AS co ON co.id_constructeur = e.id_constructeur
WHERE ec.id_central_fk_ec=" . $id_central;

         //echo $request;
        $result = $this->mysqli->query($request);
        $return = null;
        if ($result) {
            $i = 0;
            while ($row = $result->fetch_assoc()) {

                $return[$i]['id_equipement'] = $row['id_equipement'];
                $return[$i]['lib_equipement'] = utf8_encode($row['lib_equipement']);
                $return[$i]['type_equipement'] = utf8_encode($row['libelle_type_equipement']);
                $return[$i]['lib_central'] = utf8_encode($row['lib_central']);
                $return[$i]['id_type']=$row['id_type_equipement'];
                $return[$i]['lib_type']=  utf8_encode($row['lib_type']);
                $return[$i]['id_constructeur']=$row['id_constructeur'];
                $return[$i]['lib_constructeur']=  utf8_encode($row['lib_constructeur']);
                $return[$i]['id_version']=$row['version_actuel_equipement'];
                $return[$i]['num_serie']=$row['n_serie_equipement'];
                
                

                $i++;
            }
            $result->free();
        }


        $this->closeBDD();
        return $return;
    }
    
    function getEquipementsExtendedByIdCentral($id_central){
                $this->connectBDD();

        $request = "SELECT e.id_equipement AS id_equipement, e.lib_equipement AS lib_equipement, c.lib_central AS lib_central, te.libelle_type_equipement as lib_type
FROM EQUIPEMENT AS e
INNER JOIN EQUIPEMENT_CENTRAL AS ec ON ec.id_equipement_fk_ec = e.id_equipement
INNER JOIN CENTRAL AS c ON c.id_central = ec.id_central_fk_ec
INNER JOIN TYPE_EQUIPEMENT AS te ON te.id_type_equipement = e.id_type_equipement
WHERE ec.id_central_fk_ec=" . $id_central;

         //echo $request;
        $result = $this->mysqli->query($request);
        $return = null;
        if ($result) {
            $i = 0;
            while ($row = $result->fetch_assoc()) {

                $return[$i]['id_equipement'] = $row['id_equipement'];
                $return[$i]['lib_equipement'] = utf8_encode($row['lib_equipement']);
                $return[$i]['type_equipement'] = utf8_encode($row['lib_type']);
                $return[$i]['lib_central'] = utf8_encode($row['lib_central']);

                $i++;
            }
            $result->free();
        }


        $this->closeBDD();
        return $return;
    }
    
    function addEquipement(
            $lib_equipement,            
            $id_constructeur,
            $num_serie,
            $version_actuel,
            $id_type_equipement) {
        $this->connectBDD();
        $request = "INSERT INTO EQUIPEMENT (id_constructeur,"
                . "id_type_equipe,"
                . "lib_equipement,"
                . "n_serie_equipement,"
                . "version_actuel_equipement)"
                . "VALUES("
                . $id_constructeur.",".$id_type_equipement.",".$lib_equipement.",".$num_serie.",".$version_actuel.")";
        $this->mysqli->query($request);
        

        $this->closeBDD();
        
        return $request;
    }

    function updateEquipement(
            $id_equipement,
            $lib_equipement,
             
            $id_constructeur,
            $num_serie,
            $version_actuel,
            $id_type_equipement
            
            ) {
        /*$id_equipement = $equipement['id_equipement'];
        $lib_equipement = $equipement['lib_equipement'];
        $id_type_equipement = $equipement['id_type'];
        $id_constructeur = $equipement['id_constructeur'];
        $num_serie = $equipement['n_serie'];
        $version_actuel = $equipement['version'];*/

        
        $request = "UPDATE EQUIPEMENT SET n_serie_equipement = '" . $num_serie . "',lib_equipement='" . $lib_equipement . "',
     id_constructeur=".$id_constructeur  . ","
                . " version_actuel_equipement='" . $version_actuel . "',id_type_equipement='".$id_type_equipement
                . "' WHERE id_equipement=" . $id_equipement;
        $this->connectBDD();
        $return = $request;
        $result = $this->mysqli->query($request);
        // $return=null;
        if ($result) {
           
            $return = "Modif OK";
            //    $result->free();
        }
         //echo $request;
        $this->closeBDD();
        return $return;
    }

    function delEquipement($id_equipement) {
        $this->connectBDD();
        $request = "DELETE * FROM ACCESS WHERE id_equipement=" . $id_equipement;
        $this->mysqli->query($request);

        $requestVerif = "SELECT * FROM ACCESS WHERE id_equipement=" . $id_equipement;
        $result = $this->mysqli->query($requestVerif);
        $this->closeBDD();

        if ($result) {
            $ret = false;
        } else {
            $ret = true;
        }

        return $ret;
    }
    
    function getConstructeur(){
         $this->connectBDD();
         $request="SELECT * FROM CONSTRUCTEUR";
         $result=$this->mysqli->query($request);
         $return=null;
         
         if($result){
            $i=0;
             while ($row = $result->fetch_assoc()) {
                 $return[$i]['lib_constructeur']=$row['lib_constructeur'];
                 $return[$i]['id_constructeur']=$row['id_constructeur'];
                 //echo 'ici';
                 $i++;
             }
         }
         
         $this->closeBDD();
         return $return;
         
    }

    function getType(){
        $this->connectBDD();
         $request="SELECT * FROM TYPE_EQUIPEMENT";
         $result=$this->mysqli->query($request);
         $return=null;
         
         if($result){
            $i=0;
             while ($row = $result->fetch_assoc()) {
                 $return[$i]['lib_type']=  utf8_encode($row['libelle_type_equipement']);
                 $return[$i]['id_type']=$row['id_type_equipement'];
                 //echo 'ici';
                 $i++;
             }
         }
         
         $this->closeBDD();
         return $return;
    }
}
