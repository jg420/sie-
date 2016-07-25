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

var listCentral = [];
listCentral[0] = []; //contiendra les id 
listCentral[1] = []; //contiendra les libelles
listCentral[2] = []; //contiendra les type de centrales
listCentral[3] = []; //contiendra les nom des cex
listCentral[4] = []; //contiendra les nom des dr
listCentral[5] = [];  // code analytique
listCentral[6] = []; // id direction
listCentral[7] = [];  // societe

var listCex = [];

//sert en cas d'annulation de modification 
var id_central_avant_modif;



//index de la central en cours
var index_listCentral;

//partie de la page qui a été cliqué en dernier
var lastClick = 0;

$(document).ready(function () {

    loadAllCentralforAutocompletion();
    $('#input_lib_central').autocomplete({
        source: listCentral[1],
        autoFocus: true,
        select: function (event, ui) {

            //je demande a form_result_central d'afficher les resultat
            //TODO Object CentralForm
             lastClick = 0;
            afficheSelecteur(0);
           /* $('#bloc_resultat_principal').css({
                border: ' 3px  blue solid'
            });*/
            frc_loadAndDisplayResultByLibCentral();
             
           
           
        }

    });

    $('#input_code_analytique').autocomplete({
        source: listCentral[5],
        autoFocus: true,
        select: function (event, ui) {
            //alert(source);
            frc_loadAndDisplayResultByCodeAna();
            
            afficheSelecteur(0);
            
            
        }
    });

    $('#input_societe').autocomplete({
        source: listCentral[7],
        autoFocus: true,
        select: function (event, ui) {
            alert("a implementer ....");
            //loadAndDisplayResultByCodeAna();
        }
    });


});

function loadAllCentralforAutocompletion() {

    $.ajax({
        url: 'getAll',
        // url: '../form/formCentral.php',
        //data: {'central':'all'},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;

            $.each(json, function (index, value) { // pour chaque noeud JSON         
                // alert("lib central :"+value.libCentral);
                listCentral[0] [i] = value.id_central;
                listCentral[1] [i] = value.lib_central;
                listCentral[2] [i] = value.lib_type;
                listCentral[3] [i] = value.lib_cex;
                listCentral[4] [i] = value.lib_direction;
                listCentral[5] [i] = value.code_ana;
                listCentral[6] [i] = value.id_direction;


                listCentral[7] [i] = value.societe;

                i++;
            });



        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
}
