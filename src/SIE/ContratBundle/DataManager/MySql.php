<?php

//SIE/ContratBundle/DataManager/MySql.php

namespace SIE\ContratBundle\DataManager;

class MySql {

    var $mysqli;
    var $login;
    var $mdp;
    var $bdd;

    function __construct($host, $login, $mdp, $bdd) {
        $this->host = $host;
        $this->login = $login;
        $this->mdp = $mdp;
        $this->bdd = $bdd;
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
        $request = "SELECT * FROM CONTRAT";
        $result = $this->mysqli->query($request);
        if ($result) {
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                $return[$i]['lib_contrat'] = $row['lib_contrat'];
                $return[$i]['id_contrat'] = $row['id_contrat'];
                $return[$i]['id_societe'] = $row['id_societe'];
                $return[$i]['id_central'] = $row['id_central'];
                $return[$i]['lib_lien'] = $row['lib_lien'];
                
                $i++;
            }
        }

        $this->closeBDD();
        return $return;
    }

    function getContratsByIdCentral($id_central) {
        $this->connectBDD();
        $request = "SELECT * FROM CONTRAT WHERE id_contrat=".$id_central;
        $result = $this->mysqli->query($request);
        if ($result) {
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                  $return[$i]['lib_contrat'] = $row['lib_contrat'];
                $return[$i]['id_contrat'] = $row['id_contrat'];
                $return[$i]['id_societe'] = $row['id_societe'];
                $return[$i]['id_central'] = $row['id_central'];
                $return[$i]['lib_lien'] = $row['lib_lien'];
                
                $i++;
            }
        }

        $this->closeBDD();
        return $return;
    }

    function getContratsByIdSociete() {
        $this->connectBDD();
        $request = "";
        $this->mysqli->query($request);


        $this->closeBDD();
    }

    function addContrat($contrat) {
        $this->connectBDD();
        $request = "";
        $this->mysqli->query($request);


        $this->closeBDD();
    }

    function delContrat($id_contrat) {
        $this->connectBDD();
        $request = "DELETE * FROM CONTRAT WHERE id_contrat=" . $id_contrat;
        $this->mysqli->query($request);

        $requestVerif = "SELECT * FROM ACCESS WHERE id_access=" . $id_contrat;
        $result = $this->mysqli->query($requestVerif);
        $this->closeBDD();

        if ($result) {
            $ret = false;
        } else {
            $ret = true;
        }

        return $ret;
    }

    function updateContrat($contrat) {

        $id_contrat = $contrat['id_contrat'];
        $id_societe = $contrat['n_port'];
        $id_central = $contrat['login'];
        $lien = $contrat['lib_lien'];
        $lib_contrat = $contrat['lib_contrat'];


        $request = "UPDATE CONTRAT
SET id_societe = '" . $id_societe . "',
    id_centrak='" . $id_central . "',
     lien=" . $lien . " " . ", 
lib_contrat=" . $lib_contrat . " " .
                // "id_cex=".$cex." 
                " WHERE id_contrat=" . $id_contrat;

        $this->connectBDD();
        $return = $request;
        $result = $$this->mysqli->query($request);

        if ($result) {
            $return = "Modif OK";
        }
        $this->closeBDD();
        return $return;
    }

}
