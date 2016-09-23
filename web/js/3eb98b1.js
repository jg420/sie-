
var listCentral = [];
listCentral[0] = []; //contiendra les id 
listCentral[1] = []; //contiendra les libelles
listCentral[2] = []; //contiendra les type de centrales
listCentral[3] = []; //contiendra les nom des cex
listCentral[4] = []; //contiendra les nom des dr
listCentral[5] = [];  // code analytique
listCentral[6] = []; // id direction
listCentral[7] = [];  // societe


//sert en cas d'annulation de modification 
var id_central_avant_modif;

//index de la central en cours
var index_listCentral;

//partie de la page qui a été cliqué en dernier
var lastClick;



$(document).ready(function () {

    gereNavigation();

    loadAllCentralforAutocompletion();
  

    $('#bloc_resultat_principal').click(function(){
         lastClick= 0;     
         afficheSelecteur(0);
         $('#bloc_resultat_principal').css({
             border:' 3px  blue solid'              
         });
         //alert('test');
     });
    
    $('#bloc_resultat_contrat').click(function(){
         lastClick= 2;  
         afficheSelecteur(2);
         $('#bloc_resultat_contrat').css({
             border:' 3px blue solid',
                 
         });
     });
    
    $('#bloc_resultat_access').click(function(){
         lastClick= 1;  
         afficheSelecteur(1);
     });
     $('#bloc_resultat_equipement').click(function(){
         lastClick= 3;     
         afficheSelecteur(3);
     });
     
     

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
            list_code_ana = listCentral[5];
            list_code_ana.sort();
            $('#chk_tri_lib_central').attr('checked', false);
        } else {
            listCentral[1].sort();
            $('#chk_tri_lib_central').attr('checked', true);
        }
        $('#chk_tri_code_ana').attr('checked', false);

    });

    $('#input_lib_central').autocomplete({
        source: listCentral[1],
        autoFocus: true,
        select: function (event, ui) {
            //alert(source);
            loadAndDisplayResultByLibCentral();
        }
        /*messages: {
         noResults: '',
         
         results: function( ) {
         //alert('ok')        ;
         
         }
         }*/

    });

    $('#input_code_analytique').autocomplete({
        source: listCentral[5],
        autoFocus: true,
        select: function (event, ui) {
            //alert(source);
            loadAndDisplayResultByCodeAna();
        }
    });

    $('#input_societe').autocomplete({
        source: listCentral[7],
        autoFocus: true,
        select: function (event, ui) {
            //alert(source);
            //loadAndDisplayResultByCodeAna();
        }
    });

    $("#btn_last_central").click(function () {
       display_CentralPrecedent();
    });

    $("#btn_next_central").click(function () {
        display_CentralSuivant();


    });

    $('#input_lib_central').change(function () {

        loadAndDisplayResultByLibCentral();

    });

    $('#input_code_analytique').change(function () {
        //alert('declenchement');
        loadAndDisplayResultByCodeAna();

    });
    
    $('#output_lib_central').change(function () {
        //displayResultatDetail($('#output_id_direction').val());
    });

    $('#output_select_equipement').change(function () {
        valSel = $(this).val();
        
        $('#lib_equipement').val($('#output_select_equipement option:checked').text());
        
        //les index correspondent c est pour cela que c possible
        $('#output_constructeur').val(valSel);
        
       // $('#resultat_detail_lien_equipement').html("<a href='../form/formEquipement.php?id=" + valSel + "'>Equipement </a>");
        //$('#bloc_resultat_details').append("<a href='www.google.fr'>test</a>");


    });

    $('#btn_modif_central').click(function () {
        if ($('#output_id_central').val() !== "") {
            id_central_avant_modif = $('#output_id_central').val();
            $('#btn_valid_modif_central').attr('disabled', false);
            $('#btn_annuler_modif_central').attr('disabled', false);
            $('#output_code_analytique').attr('disabled', false);
            $('#output_lib_central').attr('disabled', false);
            $('#output_societe').attr('disabled', false);
            $('#output_lib_zone').attr('disabled', false);
            $('#output_lib_cex').attr('disabled', false);
            $('#btn_modif_central').attr('disabled', true);
            $('#select_output_societe').attr('disabled', true);

            loadSocieteInSelect();

        }

    });

    $('#btn_annuler_modif_central').click(function () {
        $('#output_id_central').val(id_central_avant_modif);
        loadAndDisplayResultById();
        $('#btn_modif_central').attr('disabled', false);
        $('#btn_valid_modif_central').attr('disabled', true);
        $('#btn_annuler_modif_central').attr('disabled', true);
        $('#output_code_analytique').attr('disabled', true);
        $('#output_lib_central').attr('disabled', true);
        $('#output_societe').attr('disabled', true);
        $('#output_lib_zone').attr('disabled', true);
        $('#output_lib_cex').attr('disabled', true);
        $('#select_output_societe').attr('disabled', true);
        //$('#btn_modif_central').attr('disabled', true);

    });

    $('#btn_valid_modif_central').click(function () {
        modifCentral();
        loadAllCentralforAutocompletion();
        //loadAndDisplayResultById();
        $('#btn_modif_central').attr('disabled', false);
        $('#btn_valid_modif_central').attr('disabled', true);
        $('#btn_annuler_modif_central').attr('disabled', true);
        $('#output_code_analytique').attr('disabled', true);
        $('#output_lib_central').attr('disabled', true);
        $('#output_societe').attr('disabled', true);
        $('#output_lib_zone').attr('disabled', true);
        $('#output_lib_cex').attr('disabled', true);
        $('#select_output_societe').attr('disabled', true);
    });


    //old
    $('#valid_copier').click(function () {
        $('#new_lib_equipement').val($('#motif_lib_equipement').val());
        $('#new_select_choix_type_equipement').val($('#modif_select_choix_type_equipement').val());
        $('#new_select_centrale').val($('#modif_select_centrale').val());
        $('#new_select_choix_moyen_access').val($('#select_modif_choix_moyen_access').val());
        $('#new_adresseIP_moyen_access').val($('#modif_adresseIP_moyen_access').val());
        $('#new_login_choix_moyen_access').val($('#modif_login_choix_moyen_access').val());
        $('#new_mdp_choix_moyen_access').val($('#modif_mdp_choix_moyen_access').val());
        $('#new_port_choix_moyen_access').val($('#modif_port_choix_moyen_access').val());
        $('#new_select_adresse_mac').val($('#modif_select_adresse_mac').val());
    });

});



//DEBUT PRINCIPAUX FONCTION
function afficheSelecteur(i){
    switch (i){
        case 0 : 
            $('#bloc_resultat_principal').css({
                 border:' 3px blue solid',
            });
            $('#bloc_resultat_access').css({
                border:''
            });
            $('#bloc_resultat_contrat').css({
                 border:''
            });
            $('#bloc_resultat_equipement').css({
                 border:''
            });
            break;
        case 1 : 
            $('#bloc_resultat_principal').css({
                 border:''
            });
            $('#bloc_resultat_access').css({
                 border:' 3px blue solid',
            });
            $('#bloc_resultat_contrat').css({
                 border:''
            });
            $('#bloc_resultat_equipement').css({
                 border:''
            });
            break;
        case 2 :
            $('#bloc_resultat_principal').css({
                 border:''
            });
            $('#bloc_resultat_access').css({
                 border:''
            });
            $('#bloc_resultat_contrat').css({
                 border:' 3px blue solid',
            });
            $('#bloc_resultat_equipement').css({
                 border:''
            });
            break;
        case 3 :
            $('#bloc_resultat_principal').css({
                 border:''
            });
            $('#bloc_resultat_access').css({
                 border:''
            });
            $('#bloc_resultat_contrat').css({
                 border:''
            });
            $('#bloc_resultat_equipement').css({
                 border:' 3px blue solid',
            });
            break;
        case 4:
            break;
                    
    }
   
}

function gereNavigation() {
    $(document).keydown(function (event) {
        var key = event.which;
        
        switch (key) {
            case 37:
                // Key left.
                 
                key_left_pressed();
                break;
            case 38:
                // Key up.
                break;
            case 39:
                // Key right.
               key_right_pressed();
                break;
            case 40:
                // Key down.
                break;
        }
    });
}

function key_left_pressed(){
    
    switch (lastClick){
        case 1:
            break;
        case 0:
            display_CentralPrecedent();
            break;
        case 2:
            break;
        case 3:
            break;
        
        
    }
}
function key_right_pressed(){
    
    switch (lastClick){
        case 1:
            break;
        case 0:
            display_CentralSuivant();
            break;
        case 2:
            break;
        case 3:
            break;
        
        
    }
}
function display_CentralPrecedent() {
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

function display_CentralSuivant() {


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


function loadAndDisplayResultByCodeAna() {
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

        displayInfoPrincipalEquipement(id_central);

        //J'efface les autres champs de recherche pour mettre au propre
        $('#input_superficie_central').val('');
        $('#input_lib_cex').val('');
                $('#titreSection_result').html(  "Centrale "+(index1+1)+  " / "+listCentral[1].length);

    } else {
        // alert('code ana '+lib_code_ana);
    }
    
    videZoneRecherche();
}

function loadAndDisplayResultByLibCentral() {
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
        $('.lbl_central').html(lib_central);
        $('#output_lib_central').val(lib_central);
        $('#output_select_type_central').val(lib_type_central);
        $('#output_id_central').val(id_central);
        $('#output_lib_cex').val(lib_cex);
        $('#output_lib_zone').val(lib_zone);
        $('#output_code_analytique').val(lib_code);
        //alert('code '+lib_code);
        $('#output_id_direction').val(id_direction);
        $('#select_output_societe').append("<option>" + societe + "</option>")

        lib_societe = listCentral[7][index1];
        $('#select_output_societe').html('');
        $('#select_output_societe').append("<option>\n\
                                    " + lib_societe
                +
                "</option>");

        displayInfoPrincipalEquipement(id_central);
        //J'efface les autres champs de recherche pour mettre au propre
        $('#input_superficie_central').val('');
        $('#input_lib_cex').val('');
        $('#titreSection_result').html(  "Centrale "+(index1+1)+  " / "+listCentral[1].length);
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
        $('#output_lib_central').val(lib_central);
        $('#output_select_type_central').val(lib_type_central);
        $('#output_id_central').val(id_central);
        $('#output_lib_cex').val(lib_cex);
        $('#output_lib_zone').val(lib_zone);
        $('#output_code_analytique').val(lib_code_ana);

        lib_societe = listCentral[7][index1];
        $('#select_output_societe').html('');
        $('#select_output_societe').append("<option>\n\
                                    " + lib_societe
                +
                "</option>");

         displayInfoPrincipalEquipement(id_central);


        //J'efface les autres champs de recherche pour mettre au propre
        $('#input_superficie_central').val('');
        $('#input_lib_cex').val('');
                $('#titreSection_result').html(  "Centrale "+(index1+1)+  " / "+listCentral[1].length);

    }
    if (parseInt(index_listCentral) - 1 === 0) {
        $('#btn_last_central').attr('disabled', true);
    } else {
        $('#btn_last_central').attr('disabled', false);
    }
    if (parseInt(index_listCentral) + 1 === listCentral[0].length) {
        $('#btn_next_central').attr('disabled', true);
    } else {
        $('#btn_next_central').attr('disabled', false);
    }
    
    videZoneRecherche();
}

function loadAllCentralforAutocompletion() {

    $.ajax({
        url: 'getAll',
        // url: '../form/formCentral.php',
        //data: {'central':'all'},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;

            $.each(json, function (index, value) { // pour chaque noeud JSON         
                //alert("lib central :"+value.libCentral);
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



function displayResultatDetailDOUBLON(id_c) {
    //alert("passage");
    $.ajax({
        method: 'GET',
        url: 'getEquipement/' + id_c,
        //data: {'id_equipement':id_c},
        // dataType: 'json', // on veut un retour JSON
        success: function (json) {

            // pour chaque noeud JSON
            $.each(json, function (index, value) {
                $('#output_select_equipement').append("<option value='" + value.id_equipement + "'>" + value.lib_equipement + "</option>");

                $('#output_constructeur').append("<option  value='" + value.id_equipement + "'>" + value.lib_constructeur + "</option>");


                i++;
                val = value;
            });
          //  $('#output_resumeResultat').append("<br/><br/><b>" + i + " Equipement(s)</b>");
            //$('#bloc_resultat_details').append(value.lib_equipement);



        }, error: function () {
            // alert('test');
        }
    });

}

function displayInfoPrincipalEquipement(id_central) {
    //je suppose ici que l'id a ete checke en amont
   // alert('refresh :'+id_central);

    //alert('id central: '+id_central);
    videZoneResultatPrincipal();
    
    $.ajax({
        method: 'GET',
        //async: false,
        url: 'getEquipement/' + id_central,
        //  data: {'id_central':id_central},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;
            var val;
             videZoneResultatPrincipal();   
            $.each(json, function (index, value) { // pour chaque noeud JSON
                //alert(value);
                //$('#output_lib_central').val(value.id_central);
                //$('#output_lib_cex').append("<option value='"+value.id_equipement+"' id='central' >"+value.lib_constructeur+""+"</option>");
                /* $('#bloc_resultat_principal').append("<option value='"+value.id_equipement+"' id='central' >"+value.lib_constructeur+""+"</option>");
                 $('#bloc_resultat_principal').append("<option value='"+value.id_equipement+"' id='central' >"+value.lib_constructeur+""+"</option>");*/
                //alert('id central'+id_central);
                //equipement
                $('#output_select_equipement').append("<option value='" + value.id_equipement + "'>" + value.lib_equipement + "</option>");

                $('#output_constructeur').append("<option  value='" + value.id_equipement + "'>" + value.lib_constructeur + "</option>");

                $('#lib_equipement').val($('#output_select_equipement option:checked').text());
                i++;
                val = value;
            });

            
            //displayResultatDetail($('#output_select_equipement').val());

            //   displayResultatDetail(val.id_equipement);
            $('#output_resumeResultat').append("<br/><br/><b>" + i + " Equipement(s)</b>");


             $('#lienPDF').attr('href', "../form/formCentral.php?pdf=" + val.id_central);
        },
        error: function () {


        }
    });

}

//FIN PRINCIPAUX FONCTION




function undisplayCentralByDrInSelect(i) {


    //alert('passe ici');
    $.ajax({
        url: '../form/formCentral.php',
        data: {'dr': i},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            $.each(json, function (index, value) { // pour chaque noeud JSON
                //   $('#listCentral').append("<option> ddd </option>");
                //verifEtEnleveCentralInSelect(value.id_central);
                //alert('id_central :--'+value.id_central+'----');
                verifEtEnleveCentralInSelect(value.id_central);

            });
        }
    });

}

function verifEtEnleveCentralInSelect(id_central) {

    //lister tout les id_central des <option>    
    $('#listCentral').each(function () {
        //alert($("option [value='90'] ").text());

        $('option').each(function () {

            var id_central_ds_option = $(this).val();
            id_parsee = id_central_ds_option / 1;
            id_central_parsee = id_central / 1;

            if (id_parsee === id_central_parsee) {

                // alert('supp de '+$(this).html());
                $(this).remove();
            } else {
                /*alert('id_central_ds_option = '+id_parsee+"  id_central = "+
                 id_central);*/
            }
        });

        /* var option=$("option");
         var lib_central_dans_list=$("option").text();
         alert(lib_central_dans_list);
         if(lib_central_dans_list===lib_central){
         option.remove()      ;     
         alert('breuil enlevé');
         }*/
        //alert("test")
    });

}

function updateDisplayLibConstructeyr(index_equipement_selectionne) {
    $('#output_constructeur').val(index_equipement_selectionne)
}



function displayCentralByDRinSelect(i, remplace) {
    /*action : 1 remplace
     action : 2 ajoute*/

    $.ajax({
        url: '../form/formCentral.php',
        data: {'dr': i},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {

            if (remplace) {
                var i = 0;

            } else {
                var i = listCentral[0].length;
                //alert('ajout a :'+i);
            }
            //var i=0;
            $.each(json, function (index, value) { // pour chaque noeud JSON
                //   $('#listCentral').append("<option> ddd </option>");

                $('#listCentral').append("<option value='" + value.id_central + "' id='central' >" + value.lib_central + "" + "</option>");

                i++;
            });

        },
        error: function (xhr, ajaxOptions, thrownError) {
            /*   alert(xhr.status);
             alert(thrownError); */
        }
    });

}

function displayAllCentralInCheckBox() {

}



function displaySchemasForCentral() {}

function displayEquipementAccess(id_equipement) {

}

function loadEquipement(id_equipement) {
    // alert('test : '+id_equipement);
    $.ajax({
        url: 'getEquipement/' + id_equipement,
        //   data: {'id_equipement':id_equipement},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            // alert("success "+json);
            $.each(json, function (index, value) { // pour chaque noeud JSON
                $('#lib_equipement').val(value.lib_equipement);
                $('#select_choix_type_equipement').append("<option>" + value.type_equipement + "</option>")
                $('#select_centrale').append("<option>" + value.lib_central + "</option>")
                //alert(value.type_equipement);                            
            });
        },
        error: function (xhr, ajaxOptions, thrownError) {
            /*alert(xhr.status);
             alert(thrownError);*/
        }


    });

}

function completeAllInPageEquipement(id_equipement) {
    loadEquipement(id_equipement);

    loadTypeEquipementBDDInSelect();

    loadCentralBDDInSelect();

    loadAddresseIP();

    loadAddresseMAC();

    loadAccess(id_equipement);

}

function loadTypeEquipementBDDInSelect() {

    $.ajax({
        url: 'getEquipement',
        method: 'GET',
        data: {'getType': 1},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            //ajout d un separateur entre le type actuel et les type possible 
            $('#select_choix_type_equipement').append("<option >---------- </option>");

            $.each(json, function (index, value) { // pour chaque noeud JSON
                $('#select_choix_type_equipement').append("<option id='" + value.id_type + "'>" + value.lib_type + "</option>")
                //alert(value.lib_type);                            
            });
        }

    });
}

//OLD
function loadCentralBDDInSelect() {
    ///alert("arriv ici");
    $.ajax({
        url: 'getAll',
        //data: {'central':'all'},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            $('#select_centrale').append("<option>--------------</option>");
            $.each(json, function (index, value) { // pour chaque noeud JSON 
                $('#select_centrale').append("<option>" + value.lib_central + "</option>");
                //listCentral[1] [i]=value.lib_central;   
                alert("ok");
            });

        },
        error: function (xhr, ajaxOptions, thrownError) {
            /*alert(xhr.status);
             alert(thrownError); */
        }
    });
}


function loadAddresseIP(id_equipement) {

}

function loadAddresseMAC(id_equipement) {

}

function loadAccess(id_equipement) {
    $.ajax({
        url: 'getEquipement',
        method: 'POST',
        data: {'getAccess': id_equipement},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            //$('#select_centrale').append("<option>--------------</option>");
            $.each(json, function (index, value) { // pour chaque noeud JSON 
                $('#select_choix_moyen_access').append("<option>" + value.lib_access + "</option>");
                //listCentral[1] [i]=value.lib_central;                                                           
            });

        },
        error: function (xhr, ajaxOptions, thrownError) {
            /* alert(xhr.status);
             alert(thrownError); */
        }
    });
}


function loadSocieteInSelect() {
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

function videZoneRecherche(){
    $('#input_lib_central').empty();
    $('#input_code_analytique').empty();
    $('#input_societe').empty();
}
