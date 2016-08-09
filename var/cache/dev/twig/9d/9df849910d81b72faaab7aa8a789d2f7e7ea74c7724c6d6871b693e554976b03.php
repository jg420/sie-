<?php

/* SIEAccessBundle:Default:result_access.html.twig */
class __TwigTemplate_d3672379ad85121ff3942d0cb228c4c96bacb48d700c95ae32b4e0cd61b5a994 extends Twig_Template
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
        $__internal_af16b339ce52547f0581c8eaa9a72e72cd85d9eb426df26f8935041c846a8fc3 = $this->env->getExtension("native_profiler");
        $__internal_af16b339ce52547f0581c8eaa9a72e72cd85d9eb426df26f8935041c846a8fc3->enter($__internal_af16b339ce52547f0581c8eaa9a72e72cd85d9eb426df26f8935041c846a8fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIEAccessBundle:Default:result_access.html.twig"));

        // line 2
        echo "
<div id=\"bloc_resultat_access\" class=\"bloc_resultat_details\" ng-controller=\"access_equipement_controller\">
    <b class=\"titreSection\" id='titreAccess'>Access</b>
    <p id=\"lib_central_access\" class=\"lib_central\"></p>
    
    <br/>
    <p id=\"lib_equipement_access\" class=\"lib_equipement\"></p>
    <p id=\"info_access\" ></p>
    <!--Affichage
    <input id=\"chck_auto_refresh_access\" type=\"checkbox\"/>-->
    <br/>
    <br/>
    <br/>
    <button ng-model=\"btn_ajout_access\" id=\"btn_ajout_access\" class=\"btn_ajout\"  >
        ";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a935514_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a935514_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/a935514_btn_ajout_1.jpeg");
            // line 18
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
        ";
        } else {
            // asset "a935514"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a935514") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/a935514.jpeg");
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "    </button>

    <button ng-model=\"btn_sup_access\" id=\"btn_sup_access\" class=\"btn_sup\"  >
        ";
        // line 23
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "516a1e4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_516a1e4_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/516a1e4_btn_supr_1.png");
            // line 25
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Supr\"/>
        ";
        } else {
            // asset "516a1e4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_516a1e4") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/516a1e4.png");
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Supr\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "    </button>

    <br/>
    <button ng-model=\"btn_last_access\" id=\"btn_last_access\" class=\"btn_precedent\" >
        ";
        // line 31
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "67d988a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_67d988a_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/67d988a_btn_gauche_1.jpeg");
            // line 33
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Precedent\"/>
        ";
        } else {
            // asset "67d988a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_67d988a") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/67d988a.jpeg");
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Precedent\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 34
        echo "       
    </button>



    <button ng-model=\"btn_modif_access\" id=\"btn_modif_access\" class=\"btn_modifier\"  >
        ";
        // line 40
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cae2646_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cae2646_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/cae2646_btn_modif_1.jpeg");
            // line 42
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
        ";
        } else {
            // asset "cae2646"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cae2646") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/cae2646.jpeg");
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 44
        echo "    </button>

    <button ng-model=\"btn_next_access\" id=\"btn_next_access\"  class=\"btn_suivant\"  value=\"suivant\" >
        ";
        // line 47
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "34537ea_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_34537ea_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/34537ea_droite_1.jpeg");
            // line 49
            echo "        <img class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Suivant\"/>
        ";
        } else {
            // asset "34537ea"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_34537ea") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/34537ea.jpeg");
            echo "        <img class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Suivant\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 51
        echo "    </button>
    <br/>


    <button ng-model=\"btn_valid_modif_access\" id=\"btn_valid_modif_access\"  class=\"btn_suivant\"  value=\"valider\" style=\"visibility: hidden\">
        ";
        // line 56
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aef7376_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aef7376_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/aef7376_btn_valider_1.jpeg");
            // line 58
            echo "        <img class=\"img-background-button\"   src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"valider\"/>
        ";
        } else {
            // asset "aef7376"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aef7376") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/aef7376.jpeg");
            echo "        <img class=\"img-background-button\"   src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"valider\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 60
        echo "    </button>


    <button ng-model=\"btn_annuler_modif_access\" id=\"btn_annuler_modif_access\" class=\"btn_annuler\" style=\"visibility: hidden\">
        ";
        // line 64
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02f85ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02f85ee_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/02f85ee_btn_annuler_1.jpeg");
            // line 66
            echo "        <img class=\"img-background-button\"   src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"annuler\"/>
        ";
        } else {
            // asset "02f85ee"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02f85ee") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/02f85ee.jpeg");
            echo "        <img class=\"img-background-button\"   src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"annuler\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 68
        echo "    </button>

    <div   id=\"bloc_resultat_equipement_access\">

        <br/>
        <br/>
        <br/>
        <a id=\"lien_access\">Lien par defaut </a>
        <br/>
        <br/>
        <b>Nom :</b><br/>
        <input ng-model=\"lib_access\" id=\"lib_access\" disabled=\"disabled\" type=\"text\"/>
        <br/>
        <br/>
        <br/>
        <br/>

        <b>Adresse :</b><br/>
        <input ng-model=\"adresse_access\" id=\"adresse_access\" disabled=\"disabled\" type=\"text\"/>
        <br/>
        <br/>

        <b>User :</b><br/>
        <input ng-model=\"lib_user_access\" id=\"lib_user_access\" disabled=\"disabled\"  type=\"text\"/>

        <br/>
        <b>Mot de passe :</b><br/>
        <input ng-model=\"mdp_access\" id=\"mdp_access\" disabled=\"disabled\"  type=\"text\"/>

        <br/>
        <b>port :</b><br/>
        <input ng-model=\"port_access\" id=\"port_access\"  disabled=\"disabled\" type=\"text\"/>

        <br/>
        <b>protocol :</b><br/>
        <select ng-model=\"protocol_access\" id=\"select_protocol_access\"  disabled=\"disabled\" type=\"text\">
        </select>

        <input type=\"hidden\" id=\"id_access\">
    </div>



</div>  ";
        
        $__internal_af16b339ce52547f0581c8eaa9a72e72cd85d9eb426df26f8935041c846a8fc3->leave($__internal_af16b339ce52547f0581c8eaa9a72e72cd85d9eb426df26f8935041c846a8fc3_prof);

    }

    public function getTemplateName()
    {
        return "SIEAccessBundle:Default:result_access.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 68,  187 => 66,  183 => 64,  177 => 60,  163 => 58,  159 => 56,  152 => 51,  138 => 49,  134 => 47,  129 => 44,  115 => 42,  111 => 40,  103 => 34,  89 => 33,  85 => 31,  79 => 27,  65 => 25,  61 => 23,  56 => 20,  42 => 18,  38 => 16,  22 => 2,);
    }
}
/* {# SIE/CentralBundle/Resources/views/form/result_detail.html.twig #}*/
/* */
/* <div id="bloc_resultat_access" class="bloc_resultat_details" ng-controller="access_equipement_controller">*/
/*     <b class="titreSection" id='titreAccess'>Access</b>*/
/*     <p id="lib_central_access" class="lib_central"></p>*/
/*     */
/*     <br/>*/
/*     <p id="lib_equipement_access" class="lib_equipement"></p>*/
/*     <p id="info_access" ></p>*/
/*     <!--Affichage*/
/*     <input id="chck_auto_refresh_access" type="checkbox"/>-->*/
/*     <br/>*/
/*     <br/>*/
/*     <br/>*/
/*     <button ng-model="btn_ajout_access" id="btn_ajout_access" class="btn_ajout"  >*/
/*         {% image '@SIECoreBundle/Resources/public/images/btn_ajout.jpeg'*/
/*         %}*/
/*         <img  class="img-background-button"    src="{{ asset_url }}"  alt="AJout"/>*/
/*         {% endimage %}*/
/*     </button>*/
/* */
/*     <button ng-model="btn_sup_access" id="btn_sup_access" class="btn_sup"  >*/
/*         {% image '@SIECoreBundle/Resources/public/images/btn_supr.png'*/
/*         %}*/
/*         <img  class="img-background-button"    src="{{ asset_url }}"  alt="Supr"/>*/
/*         {% endimage %}*/
/*     </button>*/
/* */
/*     <br/>*/
/*     <button ng-model="btn_last_access" id="btn_last_access" class="btn_precedent" >*/
/*         {% image '@SIECoreBundle/Resources/public/images/btn_gauche.jpeg'*/
/*         %}*/
/*         <img  class="img-background-button"    src="{{ asset_url }}"  alt="Precedent"/>*/
/*         {% endimage %}       */
/*     </button>*/
/* */
/* */
/* */
/*     <button ng-model="btn_modif_access" id="btn_modif_access" class="btn_modifier"  >*/
/*         {% image '@SIECoreBundle/Resources/public/images/btn_modif.jpeg'*/
/*         %}*/
/*         <img  class="img-background-button"    src="{{ asset_url }}"  alt="Modif"/>*/
/*         {% endimage %}*/
/*     </button>*/
/* */
/*     <button ng-model="btn_next_access" id="btn_next_access"  class="btn_suivant"  value="suivant" >*/
/*         {% image '@SIECoreBundle/Resources/public/images/droite.jpeg'*/
/*         %}*/
/*         <img class="img-background-button"    src="{{ asset_url }}"  alt="Suivant"/>*/
/*         {% endimage %}*/
/*     </button>*/
/*     <br/>*/
/* */
/* */
/*     <button ng-model="btn_valid_modif_access" id="btn_valid_modif_access"  class="btn_suivant"  value="valider" style="visibility: hidden">*/
/*         {% image '@SIECoreBundle/Resources/public/images/btn_valider.jpeg'*/
/*         %}*/
/*         <img class="img-background-button"   src="{{ asset_url }}"  alt="valider"/>*/
/*         {% endimage %}*/
/*     </button>*/
/* */
/* */
/*     <button ng-model="btn_annuler_modif_access" id="btn_annuler_modif_access" class="btn_annuler" style="visibility: hidden">*/
/*         {% image '@SIECoreBundle/Resources/public/images/btn_annuler.jpeg'*/
/*         %}*/
/*         <img class="img-background-button"   src="{{ asset_url }}"  alt="annuler"/>*/
/*         {% endimage%}*/
/*     </button>*/
/* */
/*     <div   id="bloc_resultat_equipement_access">*/
/* */
/*         <br/>*/
/*         <br/>*/
/*         <br/>*/
/*         <a id="lien_access">Lien par defaut </a>*/
/*         <br/>*/
/*         <br/>*/
/*         <b>Nom :</b><br/>*/
/*         <input ng-model="lib_access" id="lib_access" disabled="disabled" type="text"/>*/
/*         <br/>*/
/*         <br/>*/
/*         <br/>*/
/*         <br/>*/
/* */
/*         <b>Adresse :</b><br/>*/
/*         <input ng-model="adresse_access" id="adresse_access" disabled="disabled" type="text"/>*/
/*         <br/>*/
/*         <br/>*/
/* */
/*         <b>User :</b><br/>*/
/*         <input ng-model="lib_user_access" id="lib_user_access" disabled="disabled"  type="text"/>*/
/* */
/*         <br/>*/
/*         <b>Mot de passe :</b><br/>*/
/*         <input ng-model="mdp_access" id="mdp_access" disabled="disabled"  type="text"/>*/
/* */
/*         <br/>*/
/*         <b>port :</b><br/>*/
/*         <input ng-model="port_access" id="port_access"  disabled="disabled" type="text"/>*/
/* */
/*         <br/>*/
/*         <b>protocol :</b><br/>*/
/*         <select ng-model="protocol_access" id="select_protocol_access"  disabled="disabled" type="text">*/
/*         </select>*/
/* */
/*         <input type="hidden" id="id_access">*/
/*     </div>*/
/* */
/* */
/* */
/* </div>  */
