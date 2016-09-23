
var listCentral=[];
listCentral[0]=[]; //contiendra les id 
listCentral[1]=[]; //contiendra les libelles
listCentral[2]=[]; //contiendra les type de centrales
listCentral[3]=[]; //contiendra les nom des cex
listCentral[4]=[]; //contiendra les nom des dr

  
  
$(document).ready(function () {
   
    loadAllCentralforAutocompletion();
   /*
    $('#check_allDr').click(function(){
        
        if(!$('#check_allDr').prop('checked')){
            
            //decochage
            $('.dr').prop('checked',false);
            
            undisplayCentralByDrInSelect(1);
            undisplayCentralByDrInSelect(2);
            undisplayCentralByDrInSelect(3);
          
        }else{
            
            //cochage
            $('.dr').prop('checked',true);
           
            
            displayCentralByDRinSelect(1);
            displayCentralByDRinSelect(2);
            displayCentralByDRinSelect(3);
            
        }
    });
  
    
    $('#bloc_select_critere').change(function(){
       
        
    });
    

    $('.dr').change(function(){
        if($(this).prop('checked')){
            
             displayCentralByDRinSelect($(this).val());
            
        }else{
           //on enleve les centrales de la dr conserne 
           undisplayCentralByDrInSelect($(this).val());
        }
    });
    
    $('#listCentral').change(function(){
      //  alert('val'+$('#listCentral option:selected').val());
      
      id_central=$('#listCentral option:selected').val();
      
      //alert('id central : '+id_central);
       
      displayCentralInfoByCentralNameInResult(id_central);
      
        
    });

    
    $('#input_lib_central').autocomplete({
         
        source : listCentral[1],
        autoFocus:true,
        messages: {
            noResults: '',

            results: function( ) {
                 //alert('ok')        ;

            }
    }
   
    });

    
    $('#input_lib_central').change(function(){
        
        alert("detect");
        lib_central=$('#input_lib_central').val(); 
            //je verifie que le nom tape est contenu dans la liste de l'autocompletion
            // sa me permet d economiser les appels serveurs 
            if(listCentral[1].indexOf(lib_central)!==-1  ){
                //alert('passe ici');
               index1=listCentral[1].indexOf(lib_central);    
               
               //Je recupere l'id et le type depuis la recherche precedente
               id_central=listCentral[0][index1];
               lib_type_central=listCentral[2][index1];
               lib_cex=listCentral[3][index1];
               lib_zone=listCentral[4][index1];

               //j affiche les valeur dans le bloc resultat
               $('#output_lib_central').val(lib_central);
               $('#output_select_type_central').val(lib_type_central );
               $('#output_id_central').val(id_central);
               $('#output_lib_cex').val(lib_cex);
               $('#output_lib_zone').val(lib_zone);
               
               displayResultPrincipal(id_central);
                
                //J'efface les autres champs de recherche pour mettre au propre
               $('#input_superficie_central').val('');
               $('#input_lib_cex').val('');
            }
            
            
    });
    
    $('#output_select_equipement').change(function(){
       valSel=$(this).val() ;
      //les index correspondent c est pour cela que c possible
       $('#output_constructeur').val(valSel);
       $('#resultat_detail_lien_equipement').html("<a href='../form/formEquipement.php?id="+valSel+"'>Equipement </a>");
       //$('#bloc_resultat_details').append("<a href='www.google.fr'>test</a>");
      
       
    });
    
    $('#valid_copier').click(function(){
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
   */
});
 
 


function loadAllCentralforAutocompletion(){
  
    $.ajax({
        url: 'central/getAll',
         // url: '../form/formCentral.php',
        //data: {'central':'all'},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i=0;          
          
            $.each(json, function (index, value) { // pour chaque noeud JSON         
                //alert("lib central :"+value.lib_central);
                listCentral[0] [i]=value.id_central;                                
                listCentral[1] [i]=value.lib_central;
                listCentral[2] [i]=value.lib_type;
                listCentral[3] [i]=value.lib_cex;
                listCentral[4] [i]=value.lib_direction;
                              
                i++;
            });
            
            
                   
        },
        error: function(xhr, ajaxOptions, thrownError) {
                  alert(xhr.status);
                 alert(thrownError); 
        }
    });
}


function displayCentralByDRinSelect(i,remplace){
    /*action : 1 remplace
    action : 2 ajoute*/
    
    $.ajax({
        url: '../form/formCentral.php',
        data: {'dr':i},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            
            if(remplace){
                var i=0;
                
            }else{
                var i=listCentral[0].length;
                //alert('ajout a :'+i);
            }
            //var i=0;
            $.each(json, function (index, value) { // pour chaque noeud JSON
             //   $('#listCentral').append("<option> ddd </option>");
                 
                $('#listCentral').append("<option value='"+value.id_central+"' id='central' >"+value.lib_central+""+"</option>");
            
                i++;
            });
        
        },
        error: function(xhr, ajaxOptions, thrownError) {
               /*   alert(xhr.status);
                 alert(thrownError); */
        }
    });
    
}

function displayAllCentralInCheckBox(){
    
}

function displayResultPrincipal(id_central){
    //je suppose ici que l'id a ete checke en amont
    //alert('db exec display');
   
    //alert('id central: '+id_central);
    
     $.ajax({
            url: '../form/formCentral.php',
            data: {'central':id_central},
            dataType: 'json', // on veut un retour JSON
            success: function (json) {
                var i=0;
                var val;
                videZoneResultatPrincipal();
                 $.each(json, function (index, value) { // pour chaque noeud JSON
                    // alert(value);
                    //$('#output_lib_central').val(value.id_central);
                   //$('#output_lib_cex').append("<option value='"+value.id_equipement+"' id='central' >"+value.lib_constructeur+""+"</option>");
                  /* $('#bloc_resultat_principal').append("<option value='"+value.id_equipement+"' id='central' >"+value.lib_constructeur+""+"</option>");
                   $('#bloc_resultat_principal').append("<option value='"+value.id_equipement+"' id='central' >"+value.lib_constructeur+""+"</option>");*/
                    //alert('id central'+id_central);
                     //equipement
                     $('#output_select_equipement').append("<option value='"+value.id_equipement+"'>"+value.lib_equipement+"</option>");
                     
                     $('#output_constructeur').append("<option  value='"+value.id_equipement+"'>"+value.lib_constructeur+"</option>");
                     
                     
                  i++;
                  val=value;
                }),
                        
               //displayResultatDetail($('#output_select_equipement').val());
                displayResultatDetail(val.id_equipement);
                $('#output_resumeResultat').append("<br/><br/><b>"+i+" Equipement(s)</b>");
              
              
                $('#lienPDF').attr('href',"../form/formCentral.php?pdf="+val.id_central);
            },
            error: function() {
               
          
        }
    }); 
    
}

function undisplayCentralByDrInSelect(i){
    
    
    //alert('passe ici');
    $.ajax({
        url: '../form/formCentral.php',
        data: {'dr':i},
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

function verifEtEnleveCentralInSelect(id_central){
     
    //lister tout les id_central des <option>    
    $('#listCentral').each(function(){
        //alert($("option [value='90'] ").text());
        
        $('option').each(function(){
            
           var id_central_ds_option=$(this).val();
           id_parsee=id_central_ds_option/1;          
           id_central_parsee=id_central/1;
           
           if(id_parsee===id_central_parsee){
               
              // alert('supp de '+$(this).html());
               $(this).remove();
           }else{
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

function updateDisplayLibConstructeyr(index_equipement_selectionne){
    $('#output_constructeur').val(index_equipement_selectionne)
}

function videZoneResultatPrincipal(){
    $('#output_select_equipement').empty();
    $('#output_constructeur').empty();
    $('#output_select_type_central').empty();
    $('#output_lib_central').empty();
    $('#output_id_central').empty();
    $('#output_lib_zone').empty();
    $('#output_resumeResultat').empty();
    
}

function displayResultatDetail(id_equipement){
     
    $.ajax({
        url: '../form/formEquipement.php',
        data: {'id_equipement':id_equipement},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {  
           
            $.each(json, function (index, value) { // pour chaque noeud JSON
                $('#bloc_resultat_details').append(value.lib_equipement);
                                    
            });
        },error:function(){
           // alert('test');
        }
    });    
    
}

function displaySchemasForCentral(){}

function displayEquipementAccess(id_equipement){
    
}
function loadEquipement(id_equipement){
  // alert('test : '+id_equipement);
    $.ajax({
        url: '../form/formEquipement.php',
        data: {'id_equipement':id_equipement},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {   
            // alert("success "+json);
            $.each(json, function (index, value) { // pour chaque noeud JSON
                $('#lib_equipement').val(value.lib_equipement);
                $('#select_choix_type_equipement').append("<option>"+value.type_equipement+"</option>")
                $('#select_centrale').append("<option>"+value.lib_central+"</option>")
                //alert(value.type_equipement);                            
            });
        },
        error:function(xhr, ajaxOptions, thrownError){
            /*alert(xhr.status);
            alert(thrownError);*/
        }
       
         
    }); 
    
}

function completeAllInPageEquipement(id_equipement){
    loadEquipement(id_equipement) ;   
    
    loadTypeEquipementBDDInSelect();
    
    loadCentralBDDInSelect();
    
    loadAddresseIP();
    
    loadAddresseMAC();
    
    loadAccess(id_equipement);
        
}

function loadTypeEquipementBDDInSelect(){
 
        $.ajax({
        url: '../form/formEquipement.php',
        data: {'getType':1},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {   
            //ajout d un separateur entre le type actuel et les type possible 
           $('#select_choix_type_equipement').append("<option >---------- </option>");
           
            $.each(json, function (index, value) { // pour chaque noeud JSON
                $('#select_choix_type_equipement').append("<option id='"+value.id_type+"'>"+value.lib_type+"</option>")
                //alert(value.lib_type);                            
            });
        }
              
        });
}

function loadCentralBDDInSelect(){
    ///alert("arriv ici");
    $.ajax({
        url: '/central/all',
        //data: {'central':'all'},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            $('#select_centrale').append("<option>--------------</option>");
            $.each(json, function (index, value) { // pour chaque noeud JSON 
                $('#select_centrale').append("<option>"+value.lib_central+"</option>");
                //listCentral[1] [i]=value.lib_central;   
                alert("ok");
            });
                   
        },
        error: function(xhr, ajaxOptions, thrownError) {
                  /*alert(xhr.status);
                 alert(thrownError); */
        }
    });
}


function loadAddresseIP(id_equipement){
    
}

function loadAddresseMAC(id_equipement){
    
}

function loadAccess(id_equipement){
    $.ajax({
        url: '../form/formEquipement.php',
        data: {'getAccess':id_equipement},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            //$('#select_centrale').append("<option>--------------</option>");
            $.each(json, function (index, value) { // pour chaque noeud JSON 
                $('#select_choix_moyen_access').append("<option>"+value.lib_access+"</option>");
                //listCentral[1] [i]=value.lib_central;                                                           
            });
                   
        },
        error: function(xhr, ajaxOptions, thrownError) {
                 /* alert(xhr.status);
                 alert(thrownError); */
        }
    });
}
