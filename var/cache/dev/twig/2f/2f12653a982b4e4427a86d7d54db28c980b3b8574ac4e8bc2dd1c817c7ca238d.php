<?php

/* @SIECentral/form/result_admin_detail.html.twig */
class __TwigTemplate_876cf2f13e9d9768b77a25f4acdf5990d737ee4ad8649f2650ec293762216858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1033110dc1528cf3ef4890d9490fd04ffa5a985aee9bdd7227d6279d04a61251 = $this->env->getExtension("native_profiler");
        $__internal_1033110dc1528cf3ef4890d9490fd04ffa5a985aee9bdd7227d6279d04a61251->enter($__internal_1033110dc1528cf3ef4890d9490fd04ffa5a985aee9bdd7227d6279d04a61251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SIECentral/form/result_admin_detail.html.twig"));

        // line 2
        echo "<div id=\"equipement_saisie_affichage_general\">
    <br/><b>Nom de l'équipement</b>
    <br/><input type=\"text\" id=\"motif_lib_equipement\"/>

    <br/><b>Type d'équipement</b>
    <br/><select id=\"modif_select_choix_type_equipement\">
        <!---<option></option> -->
    </select>

    <br/><b>Centrale</b>
    <br/><select id=\"modif_select_centrale\">
        <!--  <option></option> -->
    </select>            
</div>
<br/><b>Moyen d'access</b>
<!--<br/>IP : <input id=\"ip_new_moy_access\" type=\"text\" />-->
<br/>
<input id=\"btn_new_moyen_access\" type=\"button\" value=\"new\"/>
<input id=\"btn_ajout_moyen_access\" type=\"button\" value=\"Valider\" disabled=\"disabled\"/>
<input id=\"btn_annuler_moyen_access\" type=\"button\" value=\"Annuler\" disabled=\"disabled\"/>


<br/>
<br/><select id=\"select_modif_choix_moyen_access\">
    <!--<option></option>--->
</select>
<input id=\"sup_modif_moyen_access\" type=\"button\" value=\"X\"/>
<br/><input id=\"modif_lib_moyen_access\" type=\"text\"/>
<br/><b> Adresse IP</b>
<br/><input id=\"modif_adresseIP_moyen_access\" type=\"text\"/>

<br/><b>Login</b>
<br/><input id=\"modif_login_choix_moyen_access\" type=\"text\"/>

<br/><b>Mot de passe</b>
<br/><input id=\"modif_mdp_choix_moyen_access\" type=\"text\"/>

<br/><b>N° Port</b>
<br/><input id=\"modif_port_choix_moyen_access\" type=\"text\"/>

<br/>
<!--<br/><b>Adresse IP </b>
<br/><select id=\"select_choix_adresse_ip\">
    </select>
<input id=\"sup_choix_adresse_ip\" type=\"button\" value=\"X\"/>
<br/><input id=\"modif_choix_adresse_ip\" type=\"text\"/>
<input id=\"valid_modif_choix_adress_ip\" type=\"button\" value=\"OK\" disabled=\"disabled\"/>
-->                                                     
<br/><b>Adresse MAC</b>
<br/><select id=\"modif_select_adresse_mac\" >
</select>

<br/><input id=\"modif_choix_adresse_mac\" type=\"text\"/>
<input id=\"valid_modif_choix_adress_mac\" type=\"button\" value=\"OK\"/>
</form>";
        
        $__internal_1033110dc1528cf3ef4890d9490fd04ffa5a985aee9bdd7227d6279d04a61251->leave($__internal_1033110dc1528cf3ef4890d9490fd04ffa5a985aee9bdd7227d6279d04a61251_prof);

    }

    public function getTemplateName()
    {
        return "@SIECentral/form/result_admin_detail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# SIE/CentralBundle/Resources/views/form/result_admin_detail.html.twig #}*/
/* <div id="equipement_saisie_affichage_general">*/
/*     <br/><b>Nom de l'équipement</b>*/
/*     <br/><input type="text" id="motif_lib_equipement"/>*/
/* */
/*     <br/><b>Type d'équipement</b>*/
/*     <br/><select id="modif_select_choix_type_equipement">*/
/*         <!---<option></option> -->*/
/*     </select>*/
/* */
/*     <br/><b>Centrale</b>*/
/*     <br/><select id="modif_select_centrale">*/
/*         <!--  <option></option> -->*/
/*     </select>            */
/* </div>*/
/* <br/><b>Moyen d'access</b>*/
/* <!--<br/>IP : <input id="ip_new_moy_access" type="text" />-->*/
/* <br/>*/
/* <input id="btn_new_moyen_access" type="button" value="new"/>*/
/* <input id="btn_ajout_moyen_access" type="button" value="Valider" disabled="disabled"/>*/
/* <input id="btn_annuler_moyen_access" type="button" value="Annuler" disabled="disabled"/>*/
/* */
/* */
/* <br/>*/
/* <br/><select id="select_modif_choix_moyen_access">*/
/*     <!--<option></option>--->*/
/* </select>*/
/* <input id="sup_modif_moyen_access" type="button" value="X"/>*/
/* <br/><input id="modif_lib_moyen_access" type="text"/>*/
/* <br/><b> Adresse IP</b>*/
/* <br/><input id="modif_adresseIP_moyen_access" type="text"/>*/
/* */
/* <br/><b>Login</b>*/
/* <br/><input id="modif_login_choix_moyen_access" type="text"/>*/
/* */
/* <br/><b>Mot de passe</b>*/
/* <br/><input id="modif_mdp_choix_moyen_access" type="text"/>*/
/* */
/* <br/><b>N° Port</b>*/
/* <br/><input id="modif_port_choix_moyen_access" type="text"/>*/
/* */
/* <br/>*/
/* <!--<br/><b>Adresse IP </b>*/
/* <br/><select id="select_choix_adresse_ip">*/
/*     </select>*/
/* <input id="sup_choix_adresse_ip" type="button" value="X"/>*/
/* <br/><input id="modif_choix_adresse_ip" type="text"/>*/
/* <input id="valid_modif_choix_adress_ip" type="button" value="OK" disabled="disabled"/>*/
/* -->                                                     */
/* <br/><b>Adresse MAC</b>*/
/* <br/><select id="modif_select_adresse_mac" >*/
/* </select>*/
/* */
/* <br/><input id="modif_choix_adresse_mac" type="text"/>*/
/* <input id="valid_modif_choix_adress_mac" type="button" value="OK"/>*/
/* </form>*/
