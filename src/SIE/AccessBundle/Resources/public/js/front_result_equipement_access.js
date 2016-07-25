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

var pathAccess = "http://127.0.0.1/ref/web/app_dev.php/access/"



var access = [];

access[0] = [];   //id_access
access[1] = [];   //lib_access
access[2] = [];   //login
access[3] = [];   //password
access[4] = [];   //lien
access[5] = [];   //id_protocol
access[6] = [];   //lib_protocol
access[7] = [];    //port

var protocols=[];        //tout les lib protocol pour l autocompletion
protocols[0]=[];     //id
protocols[1]=[];     //lib


var id_access;  //id_access en cours
var indexAccess;      // index de l access dans la liste pre charge

var newAccess = false; //0 pour modification 1 pour ajout

var msgNoEq = "Pas de d'équipement selectioné !";

$(document).ready(function () {
    
    frea_loadLibProtocol();
    
    $('#btn_ajout_access').click(function () {
        if (id_equipement !== "") {
            frea_prepareUiToAdd();
            //alert(id_equipement+"--");
            newAccess=true;
        } else {
            
            alert(msgNoEq);
        }

    });

    $('#btn_sup_access').click(function () {

    });
    $('#btn_last_access').click(function () {
        frea_afficheAccessPrecedent();
    });
    $('#btn_modif_access').click(function () {
         if (id_equipement !== "") {
          
            frea_prepareUiToUpdate();
            newAccess=false;
         }else{
             alert(msgNoEq);
        }
       
    });
    $('#btn_next_access').click(function () {
        frea_afficheAccessSuivant();
    });
    $('#btn_valid_modif_access').click(function () {

        //Si il y a des equipement
        //
            //Si c'est un nouvel access
            //  ajout nouvel access
            //Sinon modification access 
        //    
        //Sinon Msg        
        
        if (id_equipement !== "") {
            
            if (newAccess) {
                  frea_addAccess();
                   frea_desactive_input();
        frea_cacheBtnValidAnnulle();

            } else {

                frea_modifAccess();
                 frea_desactive_input();
        frea_cacheBtnValidAnnulle();
            }
            //alert(id_equipement+"--");
        } else {
            
            alert(msgNoEq);

        }

    });
    $('#btn_annuler_modif_access').click(function () {
        displayAccessByIdAcess(id_access);

        frea_cacheBtnValidAnnulle();
        frea_desactive_input();

    });
});
function frea_prepareUiToAdd() {
    //je stocke pour le click sur annuler 
    id_access = $('#id_access').val();
    lib_equipement = $('#lib_equipement_access').val();

    frea_razUI();

    frea_active_input();

    frea_affiche_btn_annuller_valider();
    
    frea_display_libProtocol();

}

function frea_prepareUiToUpdate(){
      frea_active_input();
            frea_affiche_btn_annuller_valider();
    $('#select_protocol_access').append("<option>--------</option>");
    frea_display_libProtocol();
}

function frea_razUI() {

    $('#adresse_access').val("");
    $('#lib_access').val("");
    $('#lib_user_access').val("");
    $('#mdp_access').val("");
    $('#port_access').val("");
    $('#select_protocol_access').html("");
    $('#lien_access').text('');
    $('#select_protocol_access').html("");


}
function frea_displayAccessByIdEquipement(id_equipement) {
    //chargement de tout les access de l equipement
    loadAccessByIdEquipement(id_equipement);

    frea_razUI();
    //affiche le 1er access
    displayAccessByIdAcess(access[0][0]);


}

function testCom(adresse,port){
    /*retour=null;    
    $.ajax({
        method: 'GET',
         async: false,
        url: pathAccess + 'testAccess/'+adresse+"/"+port ,
        dataType: 'json', // on veut un retour JSON
        success: function (html) {
            
           retour= html;
        } 
    });*/
    //return retour;
}
function displayAccessByIdAcess(id_access) {
    //alert(id_access);
    index = access[0].indexOf(id_access);
    if (index !== -1) {
        indexAccess = index;


        
        
        $('#id_access').val(access[0][index]);
        $('#adresse_access').val(access[4][index]);
        $('#lib_user_access').val(access[2][index]);
        $('#mdp_access').val(access[3][index]);
        $('#port_access').val(access[7][index]);
        $('#lib_access').val(access[1][index]);
        $('#adresse_access').val(access[4][index]);
        
        $('#select_protocol_access').html('');
        $('#select_protocol_access').append("<option value='" + access[5][index] + "'>" + access[6][index] + "</option>");
        $('#info_access').text((index + 1) + "/" + access[0].length+"    "+testCom(access[4][index],access[7][index]));
        lien = "<a  href='" + access[6][index] + "://" + access[4][index] + ":" + access[7][index] + "'>Access</a>";

        indexAccess = index;
        //$('#lien_access').val('  ');
        $('#lien_access').html(lien

                );

    }else {
         $('#info_access').text('');
    }
}
function frea_afficheAccessPrecedent() {
    index = indexAccess - 1;
           $('#info_access').text((index + 1) + "/" + access[0].length+"   -> "+testCom(access[4][index],access[7][index]));

    $('#id_access').val(access[0][index]);
    $('#adresse_access').val(access[4][index]);
    $('#lib_user_access').val(access[2][index]);
    $('#mdp_access').val(access[3][index]);
    $('#port_access').val(access[7][index]);
    $('#lib_access').val(access[1][index]);
    $('#adresse_access').val(access[4][index]);

    $('#select_protocol_access').html('');
    $('#select_protocol_access').append("<option value='" + access[5][index] + "'>" + access[6][index] + "</option>");


    lien = "<a  href='" + access[6][index] + "://" + access[4][index] + ":" + access[7][index] + "'>Access</a>";

    indexAccess = index;
    //$('#lien_access').val('  ');
    $('#lien_access').html(lien

            );

}

function frea_afficheAccessSuivant() {
    index = indexAccess + 1;
            $('#info_access').text((index + 1) + "/" + access[0].length+"   -> "+testCom(access[4][index],access[7][index]));

    $('#id_access').val(access[0][index]);
    $('#adresse_access').val(access[4][index]);
    $('#lib_user_access').val(access[2][index]);
    $('#mdp_access').val(access[3][index]);
    $('#port_access').val(access[7][index]);
    $('#lib_access').val(access[1][index]);
    $('#adresse_access').val(access[4][index]);

    $('#select_protocol_access').html('');
    $('#select_protocol_access').append("<option value='" + access[5][index] + "'>" + access[6][index] + "</option>");

    lien = "<a  href='" + access[6][index] + "://" + access[4][index] + ":" + access[7][index] + "'>Access</a>";

    indexAccess = index;
    //$('#lien_access').val('  ');
    $('#lien_access').html(lien

            );
}

function loadAccessByIdEquipement(id_equipement) {
    //alert("id equipement : "+id_equipement);
    $.ajax({
        method: 'GET',
        async: false,
        url: pathAccess + 'getAccesss/' + id_equipement,
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            //alert('ok back end');
            var i = 0;
            var val;
            access[0] = [];
            access[1] = [];
            access[2] = [];
            access[3] = [];
            access[4] = [];
            access[6] = [];
            access[7] = [];
            //videZoneResultatPrincipal();   
            $.each(json, function (index, value) { // pour chaque noeud JSON
                //$('#bloc_resultat_access').append(value.id_access);
                access[0][i] = value.id_access;
                access[1][i] = value.lib_access;   //lib_access
                access[2][i] = value.login;   //login
                access[3][i] = value.password;   //password
                access[4][i] = value.adresse;   //lien
                access[5][i] = value.id_protocol;   //id_protocol
                access[6][i] = value.lib_protocol;   //lib_protocol
                access[7][i] = value.n_port;    //port


                i++;
            });
        }
    });
}

function frea_loadLibProtocol(){
    $.ajax({
        method: 'GET',
        //async: false,
        url: pathAccess + 'getProtocols' ,
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            //alert('ok back end');
            var i = 0;
             
            lib_protocol = [];
            //videZoneResultatPrincipal();   
            $.each(json, function (index, value) { // pour chaque noeud JSON
                //$('#bloc_resultat_access').append(value.id_access);
                //alert('ici '+value.lib_protocol);
                 protocols[0][i]=value.id_protocol;
                 protocols[1][i]=value.lib_protocol;


                i++;
            });
        }
    });
}

function frea_display_libProtocol(){
   
    for(i=0;i<protocols[0].length;i++){
       
        $('#select_protocol_access').append("<option value="+protocols[0][i]+">"+protocols[1][i]+"</option>");
    }
}

function frea_setLibEquipement(libEquipement) {
    $('#lib_equipement_access').html(libEquipement);
}
function frea_setLibCentral(libCentral) {
    $('#lib_central').text(libCentral);
}

function frea_refresh_navbar() {

}
function frea_active_input() {
    $('#select_protocol_access').attr('disabled', false);
    $('#port_access').attr('disabled', false);
    $('#mdp_access').attr('disabled', false);
    $('#lib_user_access').attr('disabled', false);
    $('#adresse_access').attr('disabled', false);
    $('#lib_access').attr('disabled', false);
}
function frea_desactive_input() {
    $('#select_protocol_access').attr('disabled', 'disabled');
    $('#port_access').attr('disabled', 'disabled');
    $('#mdp_access').attr('disabled', 'disabled');
    $('#lib_user_access').attr('disabled', 'disabled');
    $('#adresse_access').attr('disabled', 'disabled');
    $('#lib_access').attr('disabled', 'disabled');
}
function frd_affiche_btn_annuller_valider() {
    $('#btn_valid_modif_access').attr('style', 'visibility:visible');
    $('#btn_annuler_modif_access').attr('style', 'visibility:visible');
}
function frea_cacheBtnValidAnnulle() {
    $('#btn_valid_modif_access').attr('style', 'visibility:hidden');
    $('#btn_annuler_modif_access').attr('style', 'visibility:hidden');
}

function frea_modifAccess() {
    id_access = $('#id_access').val();
    lib_access = $('#lib_access').val();
    user = $('#lib_user_access').val();
    mdp = $('#mdp_access').val();
    port = $('#port_access').val();
    protocol = $('#select_protocol_access').val();
    //alert(protocol);
    adresse=$('#adresse_access').val();
    
    $.ajax({
        method: 'POST',
        url: pathAccess + 'modifAccess',
        data: {'id_access': id_access,
            'lib_access': lib_access,
            'user': user,
            'mdp': mdp,
            'port': port,
            'adresse':adresse,
            'protocol': protocol},
        dataType: 'html', // on veut un retour JSON
        success: function (msg) {
            alert(msg);
            // displayInfoPrincipalEquipement(id_central);
            frea_displayAccessByIdEquipement(id_equipement);

        }, error: function () {
            // alert('test');
        }


    });


}

function frea_addAccess(){
    //id_access = $('#id_access').val();
    lib_access = $('#lib_access').val();
    user = $('#lib_user_access').val();
    mdp = $('#mdp_access').val();
    port = $('#port_access').val();
    protocol = $('#select_protocol_access').val();
    adresse=$('#adresse_access').val();
    
    
    $.ajax({
        method: 'POST',
        url: pathAccess + 'addAccess',
        data: {
            
            'lib_access': lib_access,
            'user': user,
            'mdp': mdp,
            'port': port,
            'adresse':adresse,
            'protocol': protocol,
             'id_equipement':id_equipement},
        dataType: 'html', // on veut un retour JSON
        success: function (msg) {
            alert(msg);
            // displayInfoPrincipalEquipement(id_central);
            frea_displayAccessByIdEquipement(id_equipement);

        }, error: function () {
            // alert('test');
        }


    });


}