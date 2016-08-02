<?php

//SIE/DoculentBundle/DataManager/MySql.php

namespace SIE\DocumentBundle\DataManager;

class MySql {

    var $mysqli;
    var $login;
    var $mdp;
    var $bdd;

    function __construct($host, $login, $mdp, $bdd) {
        $this->host = $host;
        $this->login = $login;
        $this->mdp = $mdp;
        $this->bdd = $bdd
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
        $request = "";
        $this->mysqli->query($request);


        $this->closeBDD();
    }

    function getDocumentByIdCentral($id_central) {
        $this->connectBDD();
        $request = "SELECT * FROM CORRESPONDACE_DOCUMENTS_CENTRAL AS cdc "
                . " INNER JOIN DOCUMENT as d ON cdc.id_document=d.id_document "
                . " WHERE cdc.id_central=" . $id_central;
        $result = $this->mysqli->query($request);
        //echo $request;
        $return = null;
        if ($result) {
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                $return[$i]['id_document'] = $row['id_document'];
                $return[$i]['lib_document'] = $row['lib_document'];
                $return[$i]['lien_document'] = $row['lien_document'];
                $i++;
            }
        }

        $this->closeBDD();
        return $return;
    }

    function ajoute_document($lib_doc) {
        $this->connectBDD();
        $path_upload_file="/var/www/html/uploads/";
        $request = "INSERT INTO DOCUMENT (lib_document,lien_document) "
                . "VALUES ('" . $lib_doc . "','".$path_upload_file.$lib_doc."')";
        
        $this->mysqli->query($request);

        $request = "SELECT id_document FROM DOCUMENT  "
                . "WHERE lib_document LIKE '" . $lib_doc . "'";

        $result = $this->mysqli->query($request);
        if ($result) {
            $i = 0;
            if ($row = $result->fetch_assoc()) {
                $result = $row['id_document'];
            }

            $this->closeBDD();
            return $result;
        }
    }

    function add_document_central($lib_doc, $id_doc, $id_central) {
        $this->connectBDD();
        $id_document=$id_doc+0;
        $path_uploaded_file="/var/www/html/uploads/";
        $request = "UPDATE DOCUEMENT SET lib_document='".$lib_doc           
                . " WHERE id_document=".$id_document;
                ;
        $this->mysqli->query($request);
        
        $request = "INSERT INTO CORRESPONDACE_DOCUMENTS_CENTRAL (id_central,id_document) "
                . "VALUES (" . $id_central. ",".$id_doc.")";
        $this->mysqli->query($request);
        
         $this->closeBDD();
         return $request;
    }

}
