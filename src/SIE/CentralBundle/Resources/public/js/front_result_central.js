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
//alert(index_listCentral);

var id_central = ""; //central en cours
$(document).ready(function () {
    //public index_listCentral;
    // AFFICHAGE TRI PAR DEFAULT
    $('#chk_tri_lib_central').attr('checked', true);

    $('#chk_tri_lib_central').click(function () {

        if ($('#chk_tri_lib_central').is(':checked')) {
            list_code_ana = listCentral[5];
            list_code_ana.sort();
        } else {
            listCentral[1].sort();
        }
        $('#chk_tri_code_ana').attr('checked', false);
        $('#chk_tri_societe').attr('checked', false);

    });

    $('#chk_tri_code_ana').click(function () {
        if ($('#chk_tri_code_ana').is(':checked')) {
            list_code_ana = listCentral[5];
            list_code_ana.sort();
            $('#chk_tri_lib_central').attr('checked', false);
        } else {
            listCentral[1].sort();
            $('#chk_tri_lib_central').attr('checked', true);
        }
        $('#chk_tri_societe').attr('checked', false);

    });

    $('#chk_tri_societe').click(function () {
        if ($('#chk_tri_societe').is(':checked')) {
            //list_lib_societe = listCentral[7];
            listCentral[7].sort();
            $('#chk_tri_lib_central').attr('checked', false);
            
        } else {
            listCentral[1].sort();
            $('#chk_tri_lib_central').attr('checked', true);
             
        }
        $('#chk_tri_code_ana').attr('checked', false);

    });

    $('#btn_valid_central').click(function () {
        modifCentral();
        loadAllCentralforAutocompletion();
        //loadAndDisplayResultById();
        ///$('#btn_modif_central').attr('style', 'visibility:hidden');
               frc_desactive_input();
        frc_cacheBtnValidAnnulle();
       
    });

    $('#btn_modif_central').click(function () {
        if ($('#output_id_central').val() !== "") {
            id_central_avant_modif = $('#output_id_central').val();
            $('#btn_valid_central').attr('style', 'visibility:visible');
            $('#btn_annuler_central').attr('style', 'visibility:visible');
            $('#output_code_analytique').attr('disabled', false);
            $('#output_lib_central').attr('disabled', false);
            $('#output_societe').attr('disabled', false);
            $('#output_lib_zone').attr('disabled', false);
            $('#output_lib_cex').attr('disabled', false);
            $('#btn_modif_central').attr('disabled', true);
            $('#select_output_societe').attr('disabled', true);

            //loadSocieteInSelect();
            frc_affiche_societe_dans_selection();
        }

    });

    $('#btn_annuler_central').click(function () {

        frc_desactive_input();
        frc_cacheBtnValidAnnulle();

        if (id_central_avant_modif !== '') {
            $('#output_id_central').val(id_central_avant_modif);

            loadAndDisplayResultById();

        }


    });

    $('#btn_ajout_central').click(function () {

        frc_prepareUiToAdd();

    });
    
    $('#btn_last_central').click(function () {
        frc_display_CentralPrecedent()
    });
    
    $('#btn_next_central').click(function () {
        frc_display_CentralSuivant()
    });
    
});


function frc_loadAndDisplayResultByCodeAna() {
    code_ana = $('#input_code_analytique').val();
    //je verifie que le nom tape est contenu dans la liste de l'autocompletion
    // sa me permet d economiser les appels serveurs 
    if (listCentral[5].indexOf(code_ana) !== -1) {
        //alert('passe ici');
        index1 = listCentral[5].indexOf(code_ana);
        index_listCentral = index1;
        
        //Je recupere l'id et le type depuis la recherche precedente
        lib_central = listCentral[1][index1];
        lib_type_central = listCentral[2][index1];
        lib_cex = listCentral[3][index1];
        lib_zone = listCentral[4][index1];
        id_central = listCentral[0][index1];
        lib_code_ana = listCentral[5][index1];
        id_direction = listCentral[6][index1];
        societe = listCentral[7][index1];

        //j affiche les valeur dans le bloc resultat
        frc_setLibCentral(lib_central);
        $('#output_lib_central').val(lib_central);
        $('#output_select_type_central').val(lib_type_central);
        $('#output_id_central').val(id_central);
        $('#output_lib_cex').val(lib_cex);
        $('#output_lib_zone').val(lib_zone);
        $('#select_output_societe').append("<option>" + societe + "</option>")
        $('#output_id_direction').val(id_direction);
        $('#output_code_analytique').val(lib_code_ana);
        // alert('code ana '+lib_code_ana);

        lib_societe = listCentral[7][index1];
        $('#select_output_societe').html('');
        $('#select_output_societe').append("<option>\n\
                                    " + lib_societe
                +
                "</option>");

        fre_displayEquipementByIdCentral(id_central);
        frd_charge_et_affiche_doc_par_id_central(id_central);

        //J'efface les autres champs de recherche pour mettre au propre
        $('#input_superficie_central').val('');
        $('#input_lib_cex').val('');
        $('#titreSection_result').html("Centrale " + (index1 + 1) + " / " + listCentral[1].length);

    } else {
        // alert('code ana '+lib_code_ana);
    }

    videZoneRecherche();
}

function frc_loadAndDisplayResultByLibCentral() {
    lib_central = $('#input_lib_central').val();
    //je verifie que le nom tape est contenu dans la liste de l'autocompletion
    // sa me permet d economiser les appels serveurs 
    if (listCentral[1].indexOf(lib_central) !== -1) {
        //alert('passe ici');
        index1 = listCentral[1].indexOf(lib_central);
        index_listCentral = index1;
        //Je recupere l'id et le type depuis la recherche precedente
        id_central = listCentral[0][index1];
        lib_type_central = listCentral[2][index1];
        lib_cex = listCentral[3][index1];
        lib_zone = listCentral[4][index1];
        lib_code = listCentral[5][index1];
        id_direction = listCentral[6][index1];
        societe = listCentral[7][index1];

        //j affiche les valeur dans le bloc resultat

        //$('#lbl_contrat_fiche_contrat').html(lib_central);
        frc_setLibCentral(lib_central);
        $('#output_lib_central').val(lib_central);
        $('#output_select_type_central').val(lib_type_central);
        $('#output_id_central').val(id_central);
        $('#output_lib_cex').val(lib_cex);
        $('#output_lib_zone').val(lib_zone);
        $('#output_code_analytique').val(lib_code);
        //alert('code '+lib_code);
        $('#output_id_direction').val(id_direction);
        $('#select_output_societe').append("<option>" + societe + "</option>")


        fre_displayEquipementByIdCentral(id_central);
                frd_charge_et_affiche_doc_par_id_central(id_central);

        //J'efface les autres champs de recherche pour mettre au propre
        $('#input_superficie_central').val('');
        $('#input_lib_cex').val('');
        $('#titreSection_result').html("Centrale " + (index1 + 1) + " / " + listCentral[1].length);
    }

    videZoneRecherche();

}

function frc_loadAndDisplayResultByLibSociete(){
    lib_societe=$('#input_societe').val();
    //alert(lib_societe);
    index1 =listCentral[7].indexOf(lib_societe);
     if ( index1!== -1) {
       
        //alert('passe ici');
       // = listCentral[7].indexOf(lib_central);
        index_listCentral = index1;
        //Je recupere l'id et le type depuis la recherche precedente
        id_central = listCentral[0][index1];
        lib_type_central = listCentral[2][index1];
        lib_cex = listCentral[3][index1];
        lib_zone = listCentral[4][index1];
        lib_code = listCentral[5][index1];
        id_direction = listCentral[6][index1];
        societe = listCentral[7][index1];
         lib_central= listCentral[1][index1];
        //j affiche les valeur dans le bloc resultat

        //$('#lbl_contrat_fiche_contrat').html(lib_central);
        
        frc_setLibCentral(lib_central);
         $('#output_lib_central').val(lib_central);
        $('#output_select_type_central').val(lib_type_central);
        
      

        
        $('#output_id_central').val(id_central);
        $('#output_lib_cex').val(lib_cex);
        $('#output_lib_zone').val(lib_zone);
        $('#output_code_analytique').val(lib_code);
        //alert('code '+lib_code);
        $('#output_id_direction').val(id_direction);
        $('#select_output_societe').append("<option>" + societe + "</option>")
        //aler('societe : '+societe);
        
        fre_displayEquipementByIdCentral(id_central);
                frd_charge_et_affiche_doc_par_id_central(id_central);
         //J'efface les autres champs de recherche pour mettre au propre
        $('#input_superficie_central').val('');
        $('#input_lib_cex').val('');
        $('#titreSection_result').html("Centrale " + (index1 + 1) + " / " + listCentral[1].length);
     }else{
     }

    videZoneRecherche();
    
}

function loadAndDisplayResultById() {

    id_central = $('#output_id_central').val();
    //je verifie que le nom tape est contenu dans la liste de l'autocompletion
    // sa me permet d economiser les appels serveurs 
    if (listCentral[0].indexOf(id_central) !== -1) {
        //alert('passe ici');
        index1 = listCentral[0].indexOf(id_central);
        index_listCentral = index1;
        //Je recupere l'id et le type depuis la recherche precedente
        lib_central = listCentral[1][index1];
        lib_type_central = listCentral[2][index1];
        lib_cex = listCentral[3][index1];
        lib_zone = listCentral[4][index1];
        lib_code_ana = listCentral[5][index1];
        lib_societe = listCentral[7][index1];

        //j affiche les valeur dans le bloc resultat
//        $('#lbl_central').html(lib_central);
        frc_setLibCentral(lib_central);
        $('#output_lib_central').val(lib_central);
        $('#output_select_type_central').val(lib_type_central);
        $('#output_id_central').val(id_central);
        $('#output_lib_cex').val(lib_cex);
        $('#output_lib_zone').val(lib_zone);
        $('#output_code_analytique').val(lib_code_ana);

        lib_societe = listCentral[7][index1];
        $('#select_output_societe').html('');
        $('#select_output_societe').append("<option>"
                                     + lib_societe
                +
                "</option>");

        fre_displayEquipementByIdCentral(id_central);
        frd_charge_et_affiche_doc_par_id_central(id_central);

        //alert('fin');


        //J'efface les autres champs de recherche pour mettre au propre
        $('#input_superficie_central').val('');
        $('#input_lib_cex').val('');
        $('#titreSection_result').html("Centrale " + (index1 + 1) + " / " + listCentral[1].length);

    }
    if (parseInt(index_listCentral) - 1 === 0) {
        $('#btn_last_central').attr('style', "visibility:'visible'");
    } else {
        $('#btn_last_central').attr('style', "visibility:'hidden'");
    }
    if (parseInt(index_listCentral) + 1 === listCentral[0].length) {
        $('#btn_next_central').attr('style', "visibility:'visible'");
    } else {
        $('#btn_next_central').attr('style', "visibility:'hidden'");
    }

    videZoneRecherche();
}

function frc_display_CentralPrecedent() {
    i = $("#output_id_central").val();
    val = parseInt(i);
    // alert("id 1:"+val);


    $("#output_id_central").val(val - 1);
    loadAndDisplayResultById();

    i = $("#output_id_central").val();
    //  alert("id 2:"+i);

    type_tri = 'nom';
    if (type_tri === 'nom') {


        libCentrals = listCentral[1];

        libCentrals.sort();


    }
}

function frc_display_CentralSuivant() {


    i = $("#output_id_central").val();
    val = parseInt(i);
    //alert("id 1:"+val);


    $("#output_id_central").val(val + 1);
    loadAndDisplayResultById();

    i = $("#output_id_central").val();
    //alert("id 2:"+i);
}

function modifCentral() {
    id_central = $('#output_id_central').val();
    code_ana = $('#output_code_analytique').val();
    lib_central = $('#output_lib_central').val();
    societe = $('#select_output_societe option:selected').text()
    zone = $('#output_id_direction').val();
    type_central = $('#type_central').val();
    cex = $('#output_id_cex').val();

    $.ajax({
        method: 'POST',
        url: 'modifCentral',
        data: {'id_central': id_central,
            'code_ana': code_ana,
            'lib_central': lib_central,
            'societe': societe,
            'zone': zone,
            'cex': cex},
        dataType: 'html', // on veut un retour JSON
        success: function (msg) {
            alert(msg);
            // displayInfoPrincipalEquipement(id_central);
            loadAllCentralforAutocompletion();

        }, error: function () {
            // alert('test');
        }


    });
    //je recharge


    //je remet l'id central  
    // $('#output_id_central').val(id_central_avant_modif);

    //je recharge l ui
    //loadAndDisplayResultById();
}

function frc_affiche_societe_dans_selection(){
    for(i=0;i<listSociete[0].length;i++){
         $('#select_output_societe').append("<option value=" + listSociete[0][i]+ " >" + listSociete[1][i] + "</option>");
    }
    $('#select_output_societe').attr('disabled',false);
}

function loadAndDisplaySocieteInSelect() {
    //pathSociete="http://127.0.0.1/ref/web/app_dev.php/equipement/";
    
   
    $.ajax({
        url: 'getSociete',
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            $('#select_output_societe').append("<option>--------------</option>");
            $.each(json, function (index, value) { // pour chaque noeud JSON 

                $('#select_output_societe').append("<option value=" + value.id_societe + " >" + value.lib_societe + "</option>");
                //listCentral[1] [i]=value.lib_central;                                                           
            });
            $('#select_output_societe').attr('disabled', false);



        },
        error: function (xhr, ajaxOptions, thrownError) {
            /* alert(xhr.status);
             alert(thrownError); */
        }
    });
}

function videZoneResultatPrincipal() {
    $('#output_select_equipement').empty();
    $('#output_constructeur').empty();
    $('#output_select_type_central').empty();
    $('#output_lib_central').empty();
    $('#output_id_central').empty();
    $('#output_lib_zone').empty();
    $('#output_resumeResultat').empty();
    $('#output_select_equipement').empty();
    $('#output_constructeur').empty();
    $('#lib_equipement').empty();
    $('#mac_equipement').empty();
    $('#version_equipement').empty();



}


function frc_setLibCentral(libCentral) {
    $('.lib_central').html(libCentral);
}

function frc_prepareUiToAdd() {
    id_central = $('#output_id_central').val();
    frc_razUI();


    frc_active_input()
    frc_afficheBtnValidAnnulle();

}

function frc_razUI() {

}
function frc_active_input() {
    $('#output_code_analytique').attr('disabled', false);
    $('#output_lib_central').attr('disabled', false);
    $('#select_output_societe').attr('disabled', false);
    $('#output_lib_zone').attr('disabled', false);
    $('#output_select_type_central').attr('disabled', false);
    $('#output_lib_cex').attr('disabled', false);
}
function frc_desactive_input() {
    $('#output_code_analytique').attr('disabled', 'disabled');
    $('#output_lib_central').attr('disabled', 'disabled');
    $('#select_output_societe').attr('disabled', 'disabled');
    $('#output_lib_zone').attr('disabled', 'disabled');
    $('#output_select_type_central').attr('disabled', 'disabled');
    $('#output_lib_cex').attr('disabled', 'disabled');
}
function frc_afficheBtnValidAnnulle() {
    $('#btn_valid_central').attr('style', 'visibilty:visible');
    $('#btn_annuler_central').attr('style', 'visibilty:visible');
}
function frc_cacheBtnValidAnnulle() {
    $('#btn_valid_central').attr('style', 'visibility:hidden');
    $('#btn_annuler_central').attr('style', 'visibility:hidden');
     $('#btn_modif_central').attr('disabled', false);
}