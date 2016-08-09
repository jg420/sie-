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


$(document).ready(function () {

    $('#bloc_resultat_principal').click(function () {
        lastClick = 0;
        afficheSelecteur(0);
        $('#bloc_resultat_principal').css({
            border: ' 3px  blue solid'
        });
        //alert('test');
    });

    $('#bloc_resultat_contrat').click(function () {
        lastClick = 2;
        afficheSelecteur(2);
        $('#bloc_resultat_contrat').css({
            border: ' 3px blue solid',
        });
    });

    $('#bloc_resultat_access').click(function () {
        lastClick = 1;
        afficheSelecteur(1);
    });
    $('#bloc_resultat_equipement').click(function () {
        lastClick = 3;
        afficheSelecteur(3);
    });
    $('#bloc_recherche').click(function () {
        lastClick = 4;
        afficheSelecteur(4);
    });
    $('#bloc_resultat_document').click(function () {
        lastClick = 5;
        afficheSelecteur(5);
    });

    gereNavigation();
 

});

function afficheSelecteur(i) {
    switch (i) {
        case 0 :
            $('#bloc_resultat_principal').css({
                border: ' 3px blue solid',
            });
            $('#bloc_resultat_access').css({
                border: ''
            });
            $('#bloc_resultat_contrat').css({
                border: ''
            });
            $('#bloc_resultat_equipement').css({
                border: ''
            });
            $('#bloc_recherche').css({
                border: ''
            });
              $('#bloc_resultat_document').css({
                border: ''
            });
            break;
        case 1 :
            $('#bloc_resultat_principal').css({
                border: ''
            });
            $('#bloc_resultat_access').css({
                border: ' 3px blue solid',
            });
            $('#bloc_resultat_contrat').css({
                border: ''
            });
            $('#bloc_resultat_equipement').css({
                border: ''
            });
            $('#bloc_recherche').css({
                border: ''
            });
              $('#bloc_resultat_document').css({
                border: ''
            });
            break;
        case 2 :
            $('#bloc_resultat_principal').css({
                border: ''
            });
            $('#bloc_resultat_access').css({
                border: ''
            });
            $('#bloc_resultat_contrat').css({
                border: ' 3px blue solid',
            });
            $('#bloc_resultat_equipement').css({
                border: ''
            });
            $('#bloc_recherche').css({
                border: ''
            });
              $('#bloc_resultat_document').css({
                border: ''
            });
            break;

        case 3 :
            $('#bloc_resultat_principal').css({
                border: ''
            });
            $('#bloc_resultat_access').css({
                border: ''
            });
            $('#bloc_resultat_contrat').css({
                border: ''
            });
            $('#bloc_resultat_equipement').css({
                border: ' 3px blue solid',
            });
            $('#bloc_recherche').css({
                border: ''
            });
              $('#bloc_resultat_document').css({
                border: ''
            });
            break;
        case 4:
            $('#bloc_resultat_principal').css({
                border: ''
            });
            $('#bloc_resultat_access').css({
                border: ''
            });
            $('#bloc_resultat_contrat').css({
                border: ''
            });
            $('#bloc_resultat_equipement').css({
                border: '',
            });
            $('#bloc_recherche').css({
                border: '3px blue solid'
            });
              $('#bloc_resultat_document').css({
                border: ''
            });
            break;
        case 5:
            $('#bloc_resultat_principal').css({
                border: ''
            });
            $('#bloc_resultat_access').css({
                border: ''
            });
            $('#bloc_resultat_contrat').css({
                border: ''
            });
            $('#bloc_resultat_equipement').css({
                border: '',
            });
            $('#bloc_recherche').css({
                border: ''
            });
            $('#bloc_resultat_document').css({
                border: '3px blue solid'
            });
            break;

    }

}


function key_left_pressed() {

    switch (lastClick) {
        case 1:
            frea_afficheAccessPrecedent();
            break;
        case 0:
            frc_display_CentralPrecedent();
            break;
        case 2:
            frco_afficheContratPrecedent();
            break;
        case 3:
            fre_afficheEquipementPrecedent();
            break;
        case 4:
            frea_afficheAccessPrecedent();
            break;
        case 5:
            frd_affiche_doc_precedent();
            break;


    }
}

function key_right_pressed() {

    switch (lastClick) {
        case 1:
            frea_afficheAccessSuivant();
            break;
            
        case 0:
            frc_display_CentralSuivant();
            break;
        case 2:
            frco_afficheContratSuivant();
            break;
        case 3:
            fre_afficheEquipementSuivant();
            break;
        case 4:
            frea_afficheAccessPrecedent();
            break;
        case 5:
            frd_affiche_doc_suivant();
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