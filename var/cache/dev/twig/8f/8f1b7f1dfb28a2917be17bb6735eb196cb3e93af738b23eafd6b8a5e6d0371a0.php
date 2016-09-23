<?php

/* SIEDocumentBundle:Default:result_document.html.twig */
class __TwigTemplate_6f83f3634c06f472bf7cd6d7eb6bab202968ec44146fa35bc6c8e51239dedf4f extends Twig_Template
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
        $__internal_6271776cbdc4b1c6e809048c81e6578a34214ef8f0157d6d1d7a7546bc4ab3b2 = $this->env->getExtension("native_profiler");
        $__internal_6271776cbdc4b1c6e809048c81e6578a34214ef8f0157d6d1d7a7546bc4ab3b2->enter($__internal_6271776cbdc4b1c6e809048c81e6578a34214ef8f0157d6d1d7a7546bc4ab3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIEDocumentBundle:Default:result_document.html.twig"));

        // line 2
        echo "
<div  id=\"bloc_resultat_document\" ng-controller=\"result_document_controller\">
    <b class=\"titreSection\" id='titreDocument'>Documents</b>
    <p id=\"lib_central_document\" class=\"lib_central\"></p>
    

    <br/>
    <br/>
    <br/>
<button ng-model=\"btn_ajout_document\" id=\"btn_ajout_document\" class=\"btn_ajout\"  >
     ";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a935514_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a935514_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/a935514_btn_ajout_1.jpeg");
            // line 14
            echo "       <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
    ";
        } else {
            // asset "a935514"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a935514") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/a935514.jpeg");
            echo "       <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "    </button>
    
    ";
        // line 25
        echo "    
    <br/>
    <button ng-model=\"btn_last_document\" id=\"btn_last_document\" class=\"btn_precedent\" >
        ";
        // line 28
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "67d988a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_67d988a_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/67d988a_btn_gauche_1.jpeg");
            // line 30
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
        // line 31
        echo "       
    </button>
    
   
    
    <button ng-model=\"btn_modif_document\" id=\"btn_modif_document\" class=\"btn_modifier\"  >
     ";
        // line 37
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cae2646_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cae2646_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/cae2646_btn_modif_1.jpeg");
            // line 39
            echo "       <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
    ";
        } else {
            // asset "cae2646"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cae2646") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/cae2646.jpeg");
            echo "       <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 41
        echo "    </button>
    
    <button ng-model=\"btn_next_document\" id=\"btn_next_document\"  class=\"btn_suivant\"  value=\"suivant\" >
        ";
        // line 44
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "34537ea_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_34537ea_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/34537ea_droite_1.jpeg");
            // line 46
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
        // line 48
        echo "    </button>
    <br/>
    
    
    <button ng-model=\"btn_valid_modif_document\" id=\"btn_valid_modif_document\"  class=\"btn_suivant\"  style=\"visibility: hidden\">
        ";
        // line 53
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aef7376_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aef7376_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/aef7376_btn_valider_1.jpeg");
            // line 55
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
        // line 57
        echo "    </button>
    
    
    <button ng-model=\"btn_annuler_modif_document\" id=\"btn_annuler_document\" class=\"btn_annuler\" style=\"visibility: hidden\">
     ";
        // line 61
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02f85ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02f85ee_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/02f85ee_btn_annuler_1.jpeg");
            // line 63
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
        // line 64
        echo "    
    </button>
    <form id=\"form_doc\" method='POST'>
    <br/>
    <br/>
    <b>Nom :</b>
    <br/><input id=\"lib_document\" type=\"text\" disabled=\"disabled\">
    <br/>
    <br/>
    <b>Lien :</b>
    <br/>
    <a id=\"lien_document\" href=\"..\"></a>
    <br/>
    <br/>
     <br/>
    <br/>
     
    <input  name=\"file_document\"   id=\"file_document\" type=\"file\" disabled=\"disabled\"> 
    <br/>
    <br/>
    <br/>
     
    <input id='id_document' type='hidden'>
    </form>
</div>    ";
        
        $__internal_6271776cbdc4b1c6e809048c81e6578a34214ef8f0157d6d1d7a7546bc4ab3b2->leave($__internal_6271776cbdc4b1c6e809048c81e6578a34214ef8f0157d6d1d7a7546bc4ab3b2_prof);

    }

    public function getTemplateName()
    {
        return "SIEDocumentBundle:Default:result_document.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 64,  163 => 63,  159 => 61,  153 => 57,  139 => 55,  135 => 53,  128 => 48,  114 => 46,  110 => 44,  105 => 41,  91 => 39,  87 => 37,  79 => 31,  65 => 30,  61 => 28,  56 => 25,  52 => 16,  38 => 14,  34 => 12,  22 => 2,);
    }
}
/* {# SIE/DocumentBundle/Resources/views/form/result_document.html.twig #}*/
/* */
/* <div  id="bloc_resultat_document" ng-controller="result_document_controller">*/
/*     <b class="titreSection" id='titreDocument'>Documents</b>*/
/*     <p id="lib_central_document" class="lib_central"></p>*/
/*     */
/* */
/*     <br/>*/
/*     <br/>*/
/*     <br/>*/
/* <button ng-model="btn_ajout_document" id="btn_ajout_document" class="btn_ajout"  >*/
/*      {% image '@SIECoreBundle/Resources/public/images/btn_ajout.jpeg'*/
/*        %}*/
/*        <img  class="img-background-button"    src="{{ asset_url }}"  alt="AJout"/>*/
/*     {% endimage %}*/
/*     </button>*/
/*     */
/*     {#*/
/*     <button ng-model="btn_sup_document" id="btn_sup_document" class="btn_sup"  >*/
/*      {% image '@SIECoreBundle/Resources/public/images/btn_supr.png'*/
/*        %}*/
/*        <img  class="img-background-button"    src="{{ asset_url }}"  alt="Supr"/>*/
/*     {% endimage %}*/
/*     </button>#}*/
/*     */
/*     <br/>*/
/*     <button ng-model="btn_last_document" id="btn_last_document" class="btn_precedent" >*/
/*         {% image '@SIECoreBundle/Resources/public/images/btn_gauche.jpeg'*/
/*        %}*/
/*         <img  class="img-background-button"    src="{{ asset_url }}"  alt="Precedent"/>*/
/*         {% endimage %}       */
/*     </button>*/
/*     */
/*    */
/*     */
/*     <button ng-model="btn_modif_document" id="btn_modif_document" class="btn_modifier"  >*/
/*      {% image '@SIECoreBundle/Resources/public/images/btn_modif.jpeg'*/
/*        %}*/
/*        <img  class="img-background-button"    src="{{ asset_url }}"  alt="Modif"/>*/
/*     {% endimage %}*/
/*     </button>*/
/*     */
/*     <button ng-model="btn_next_document" id="btn_next_document"  class="btn_suivant"  value="suivant" >*/
/*         {% image '@SIECoreBundle/Resources/public/images/droite.jpeg'*/
/*        %}*/
/*         <img class="img-background-button"    src="{{ asset_url }}"  alt="Suivant"/>*/
/*         {% endimage %}*/
/*     </button>*/
/*     <br/>*/
/*     */
/*     */
/*     <button ng-model="btn_valid_modif_document" id="btn_valid_modif_document"  class="btn_suivant"  style="visibility: hidden">*/
/*         {% image '@SIECoreBundle/Resources/public/images/btn_valider.jpeg'*/
/*        %}*/
/*         <img class="img-background-button"   src="{{ asset_url }}"  alt="valider"/>*/
/*         {% endimage %}*/
/*     </button>*/
/*     */
/*     */
/*     <button ng-model="btn_annuler_modif_document" id="btn_annuler_document" class="btn_annuler" style="visibility: hidden">*/
/*      {% image '@SIECoreBundle/Resources/public/images/btn_annuler.jpeg'*/
/*        %}*/
/*         <img class="img-background-button"   src="{{ asset_url }}"  alt="annuler"/>*/
/*         {% endimage %}    */
/*     </button>*/
/*     <form id="form_doc" method='POST'>*/
/*     <br/>*/
/*     <br/>*/
/*     <b>Nom :</b>*/
/*     <br/><input id="lib_document" type="text" disabled="disabled">*/
/*     <br/>*/
/*     <br/>*/
/*     <b>Lien :</b>*/
/*     <br/>*/
/*     <a id="lien_document" href=".."></a>*/
/*     <br/>*/
/*     <br/>*/
/*      <br/>*/
/*     <br/>*/
/*      */
/*     <input  name="file_document"   id="file_document" type="file" disabled="disabled"> */
/*     <br/>*/
/*     <br/>*/
/*     <br/>*/
/*      */
/*     <input id='id_document' type='hidden'>*/
/*     </form>*/
/* </div>    */
