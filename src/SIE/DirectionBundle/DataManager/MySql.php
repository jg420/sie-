<?php

//SIE/DirectionBundle/DataManager/MySql.php
namespace SIE\DirectionBundle\DataManager;

class MySql{
     var $mysqli;
     var $login;
     var $mdp;
     var $bdd;

    function __construct($host,$login,$mdp,$bdd) {
         $this->host=$host;
        $this->login=$login;
        $this->mdp=$mdp;
        $this->bdd=$bdd;
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
    
    function getDRs(){
         $this->connectBDD();
        $request="";
        $this->mysqli->query($request);
        
        
        $this->closeBDD();
    }
    
    function addDR($dr){ 
        $this->connectBDD();
        $request="";
        $this->mysqli->query($request);
        
        
        $this->closeBDD();}
    
    function updateDR($dr){
         $this->connectBDD();
        $request="";
        $this->mysqli->query($request);
        
        
        $this->closeBDD();
    }
    
    function delDR($id_dr){
        $this->connectBDD();
        $request="DELETE * FROM ACCESS WHERE id_dr=".$id_de;
        $this->mysqli->query($request);
        
        $requestVerif="SELECT * FROM ACCESS WHERE id_dr=".$id_dr;
        $result=$this->mysqli->query($requestVerif);
        $this->closeBDD(); 
        
        if($result){
            $ret=false;
        }else {
            $ret=true;
        }
        
       return $ret;
    }

}
