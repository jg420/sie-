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

/**
 * 0    consultation
 * 1    demande ajout contrat
 * 2    demande ajout suppression contrat
 * 3    valide ajout contrat
 * 4    valide suppr contrat
 * 5    annule suppr contrat
 * 6    annulle ajout contrat
 * 7    demande modif contrat
 * 8    valide modif contrat
 * 9    annul modif contrat
 * 
 * */

var list_contrat = []; // 
list_contrat[1] = [];
list_contrat[2] = [];

var id_contrat; //id_contrat en cours

var context;

$(document).ready(function () {
    
     
    
    $('#btn_ajout_contrat').click(function () {
        if (id_central!== "") {
            context = 1;
            frco_prepareUiToAdd();
            alert(id_central);
        }else{
            msg="Pas de central selectioné !";
            alert(msg);
        }


    });

    $('#btn_sup_contrat').click(function () {
        context = '2';
    });
    $('#btn_last_contrat').click(function () {
        context = '0';
    });
    $('#btn_modif_contrat').click(function () {
        context = '7';
    });
    $('#btn_next_contrat').click(function () {
        context = '0';
    });
    $('#btn_valid_modif_contrat').click(function () {
        //if infoIsValid() TODO 

        ajoutContrat(id_equipement, contrat);
        context = '8';

    });
    $('#btn_annuler_modif_contrat').click(function () {
        context = '9';

        frco_displayContratByIdContrat(id_contrat);

        desactive_input();
        
        cacheBtnValidAnnulle();
        
        
    });


     
});

function setUI() {


    switch (context) {
        case 0:

            break;
        case 1:

            $('#btn_valid_modif_contrat').prop('style', "visibility:'visible'");
            $('#btn_annuler_modif_contrat').prop('style', "visibility:'visible'");
            alert('ok');
            break;
        case 2:
            break;
        case 3:
            break;
        case 4:
            break;
        case 5:
            break;
        case 6:
            break;
        case 7:
            break;
        case 8:
            break;
        case 9:
            break;
    }
}

function frco_setLibCentral(libCentral) {
    $('.lib_central').html(libCentral);
    alert(libCentral);
    //$('#lib_central').val(libCentral);
}
function frco_setLibEquipement(libEquipement) {
     $('#lib_equipement_access').html(libEquipement);   

}
function frco_displayContratsByIdCentral(id_contrat) {

}
function frco_displayContratByIdContrat(id_contrat) {

}
function frco_afficheContratSuivant(){}

function frco_afficheContratPrecedent(){}


function frco_prepareUiToAdd() {
    id_contrat = $('#id_contrat').val();
    frco_razUI();


}

function frco_razUI() {
    $('#lib_contrat').val("");
    $('#lien_contrat').val("");
}
function active_input() {
    $('#lib_contrat').attr('disabled', false);
    $('#lien_contrat').attr('disabled', false);
}
function desactive_input() {
    $('#lib_contrat').attr('disabled', 'disabled');
    $('#lien_contrat').attr('disabled', 'disabled');
}
function afficheBtnValidAnnulle() {
    $('#btn_valid_modif_ontrat').attr('style', 'visibility:visible');
    $('#btn_annuler_modif_contrat').attr('style', 'visibility:visible');
}
function cacheBtnValidAnnulle() {
    $('#btn_valid_modif_ontrat').attr('style', 'visibility:hidden');
    $('#btn_annuler_modif_contrat').attr('style', 'visibility:hidden');
}