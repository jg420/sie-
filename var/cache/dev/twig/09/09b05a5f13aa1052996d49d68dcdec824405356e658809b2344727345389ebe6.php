<?php

/* SIECentralBundle:Default:index.html.twig */
class __TwigTemplate_25e9d62dfa8143497d1ca148aa23a06a15b015efee5beefc09d94111ca523411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2b543a1784fc134271793dd8d861ac559e9f124d51f9e438bad1b6def1a958b = $this->env->getExtension("native_profiler");
        $__internal_e2b543a1784fc134271793dd8d861ac559e9f124d51f9e438bad1b6def1a958b->enter($__internal_e2b543a1784fc134271793dd8d861ac559e9f124d51f9e438bad1b6def1a958b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECentralBundle:Default:index.html.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" ng-app=\"app_ref_sie\">
    <head>
        <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"../script/quadranStyle.css\"/>
        <script src=\"../script/jquery.js\" />
        <script src=\"../script/jquery--ui.js\" />
        <script src=\"../script/formCentral.js\"/> -->
        ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "81f969e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81f969e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/81f969e_quadranStyle_1.css");
            // line 11
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "81f969e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81f969e") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/81f969e.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2db1e5c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2db1e5c_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2db1e5c_jquery-ui_1.css");
            // line 14
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "2db1e5c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2db1e5c") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2db1e5c.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "        
        <link href=\"http://127.0.0.1/ref_com_sie/web/logo.ico\" rel=\"icon\" type=\"image/x-icon\" />
        
        
        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo " 
       <title id=\"titre\">REFERENTIEL</title>
        ";
        // line 62
        echo "    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <!-- A CHARGER DEPUIS LA VUE PERE-
                    <li><a href=\"page_direction_regionales.xhtml\">Directions Regionales</a></li>
                    <li><a href=\"page_central.xhtml\">Centrales </a></li>
                    <li><a href=\"page_equipement.xhtml\">Equipements</a></li>-->

                </ul>
            </nav>
        </header>

        <!--<div id='bloc_select_critere'>
              <b class=\"titreSection\">Selection</b>
            <table class='tableSelection' border='1'>
              
            
              <tr>
                <th>1) Direction Regionales</th>
                <th>2) Nom de la centrale</th>
                <th>3) Type de centrale</th>
                  
                  
              </tr>
              <tr><td>
                    <br/>   
                    
                    <br/><input id=\"check_allDr\" type=\"checkbox\"/>Toutes Directions
                    <br/>
                    <br/><input class=\"dr\" value='1' type=\"checkbox\"/>DR NORD
                    <br/><input class=\"dr\" value='2' type=\"checkbox\"/>DR SUD
                    <br/><input class=\"dr\" value='3' type=\"checkbox\"/>DR COOM
                </td>
                <td>
                    <br/>   
                        <br/>
                    <select id=\"listCentral\">                        
                         <option>Choisissez une centrale</option>
                    </select>
                </td>
                <td>
                    <br/>   
                    <br/>
                    <select id=\"input_type_central\">
                        <option>Choisissez un type</option>
                    </select>           
                    <br/>
                </td>
             </tr>
            </table>
        </div>
        -->
        <table >
            <tr>
                <td>
                    ";
        // line 119
        $this->loadTemplate("SIECoreBundle:Default:search.html.twig", "SIECentralBundle:Default:index.html.twig", 119)->display($context);
        // line 120
        echo "                </td>
                <td>
                    ";
        // line 122
        $this->loadTemplate("SIECentralBundle:form:result.html.twig", "SIECentralBundle:Default:index.html.twig", 122)->display($context);
        echo " 
                </td>
                <td>
                    ";
        // line 125
        $this->loadTemplate("SIEDocumentBundle:Default:result_document.html.twig", "SIECentralBundle:Default:index.html.twig", 125)->display($context);
        echo " 
                </td>
                <td>
                    ";
        // line 128
        $this->loadTemplate("SIEEquipementBundle:Default:result_equipement.html.twig", "SIECentralBundle:Default:index.html.twig", 128)->display($context);
        echo " 
                </td>
                <td>
                    ";
        // line 131
        $this->loadTemplate("SIEAccessBundle:Default:result_access.html.twig", "SIECentralBundle:Default:index.html.twig", 131)->display($context);
        echo " 
                </td>
                ";
        // line 134
        echo "            </tr>
        </table>      
                      
    </body>
</html>
";
        
        $__internal_e2b543a1784fc134271793dd8d861ac559e9f124d51f9e438bad1b6def1a958b->leave($__internal_e2b543a1784fc134271793dd8d861ac559e9f124d51f9e438bad1b6def1a958b_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_45fee5dc32565a24876426e1b22e2944c1fdb8e103b88975a2b18f3c5661f6e0 = $this->env->getExtension("native_profiler");
        $__internal_45fee5dc32565a24876426e1b22e2944c1fdb8e103b88975a2b18f3c5661f6e0->enter($__internal_45fee5dc32565a24876426e1b22e2944c1fdb8e103b88975a2b18f3c5661f6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d4574a7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d4574a7_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d4574a7_angular_1.js");
            // line 22
            echo "                ";
            // line 23
            echo "            ";
        } else {
            // asset "d4574a7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d4574a7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d4574a7.js");
            // line 22
            echo "                ";
            // line 23
            echo "            ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "             ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a750637_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a750637_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a750637_jquery_1.js");
            // line 25
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "a750637"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a750637") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a750637.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2994d72_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2994d72_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2994d72_jquery-ui_1.js");
            // line 28
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "2994d72"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2994d72") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2994d72.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 30
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "584d851_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_584d851_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/584d851_app_1.js");
            // line 31
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "584d851"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_584d851") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/584d851.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 33
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1f81795_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1f81795_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1f81795_app_search_central_1.js");
            // line 34
            echo "                ";
            // line 35
            echo "            ";
        } else {
            // asset "1f81795"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1f81795") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1f81795.js");
            // line 34
            echo "                ";
            // line 35
            echo "            ";
        }
        unset($context["asset_url"]);
        // line 36
        echo "           
            
            ";
        // line 38
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dff4dbb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dff4dbb_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/dff4dbb_front_page_1.js");
            // line 39
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "dff4dbb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dff4dbb") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/dff4dbb.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 41
        echo "              
              ";
        // line 42
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc7accb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc7accb_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fc7accb_front_result_equipement_access_1.js");
            // line 43
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        } else {
            // asset "fc7accb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc7accb") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fc7accb.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        }
        unset($context["asset_url"]);
        // line 45
        echo "              ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "454a49e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_454a49e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/454a49e_front_result_doc_1.js");
            // line 46
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        } else {
            // asset "454a49e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_454a49e") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/454a49e.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        }
        unset($context["asset_url"]);
        // line 48
        echo "              ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "af4783f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af4783f_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/af4783f_front_result_equipement_1.js");
            // line 49
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        } else {
            // asset "af4783f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af4783f") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/af4783f.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        }
        unset($context["asset_url"]);
        // line 51
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a5be7e7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a5be7e7_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a5be7e7_front_result_central_1.js");
            // line 52
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        } else {
            // asset "a5be7e7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a5be7e7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a5be7e7.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        }
        unset($context["asset_url"]);
        // line 54
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "da82b2d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da82b2d_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/da82b2d_front_search_1.js");
            // line 55
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "da82b2d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da82b2d") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/da82b2d.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 57
        echo "          
     
        ";
        
        $__internal_45fee5dc32565a24876426e1b22e2944c1fdb8e103b88975a2b18f3c5661f6e0->leave($__internal_45fee5dc32565a24876426e1b22e2944c1fdb8e103b88975a2b18f3c5661f6e0_prof);

    }

    public function getTemplateName()
    {
        return "SIECentralBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 57,  387 => 55,  382 => 54,  368 => 52,  363 => 51,  349 => 49,  344 => 48,  330 => 46,  325 => 45,  311 => 43,  307 => 42,  304 => 41,  290 => 39,  286 => 38,  282 => 36,  278 => 35,  276 => 34,  271 => 35,  269 => 34,  264 => 33,  250 => 31,  245 => 30,  231 => 28,  226 => 27,  212 => 25,  207 => 24,  203 => 23,  201 => 22,  196 => 23,  194 => 22,  189 => 21,  183 => 20,  171 => 134,  166 => 131,  160 => 128,  154 => 125,  148 => 122,  144 => 120,  142 => 119,  83 => 62,  79 => 59,  77 => 20,  71 => 16,  57 => 14,  52 => 13,  38 => 11,  34 => 10,  23 => 1,);
    }
}
/* <?xml version="1.0" encoding="UTF-8"?>*/
/* */
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/xhtml" ng-app="app_ref_sie">*/
/*     <head>*/
/*         <!-- <link rel="stylesheet" type="text/css" href="../script/quadranStyle.css"/>*/
/*         <script src="../script/jquery.js" />*/
/*         <script src="../script/jquery--ui.js" />*/
/*         <script src="../script/formCentral.js"/> -->*/
/*         {% stylesheets '@SIECoreBundle/Resources/public/css/quadranStyle.css' filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*         {% endstylesheets %}*/
/*         {% stylesheets '@SIECoreBundle/Resources/public/css/jquery-ui.css' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*         {% endstylesheets %}*/
/*         */
/*         <link href="http://127.0.0.1/ref_com_sie/web/logo.ico" rel="icon" type="image/x-icon" />*/
/*         */
/*         */
/*         {% block javascripts %}*/
/*             {% javascripts '@SIECoreBundle/Resources/public/js/angular.js' %}*/
/*                 {#<script src="{{ asset_url }}"></script#}*/
/*             {% endjavascripts %}*/
/*              {% javascripts '@SIECoreBundle/Resources/public/js/jquery.js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*             {% javascripts '@SIECoreBundle/Resources/public/js/jquery-ui.js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*             {% javascripts '@SIECoreBundle/Resources/public/js/app.js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*             {% javascripts '@SIECentralBundle/Resources/public/js/app_search_central.js' %}*/
/*                 {#<script src="{{ asset_url }}"></script>#}*/
/*             {% endjavascripts %}*/
/*            */
/*             */
/*             {% javascripts '@SIECentralBundle/Resources/public/js/front_page.js' %}*/
/*               <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*               */
/*               {% javascripts '@SIEAccessBundle/Resources/public/js/front_result_equipement_access.js' %}*/
/*                 <script src="{{ asset_url }}"></script>          */
/*             {% endjavascripts %}*/
/*               {% javascripts '@SIEDocumentBundle/Resources/public/js/front_result_doc.js' %}*/
/*                 <script src="{{ asset_url }}"></script>          */
/*             {% endjavascripts %}*/
/*               {% javascripts '@SIEEquipementBundle/Resources/public/js/front_result_equipement.js' %}*/
/*                 <script src="{{ asset_url }}"></script>          */
/*             {% endjavascripts %}*/
/*             {% javascripts '@SIECentralBundle/Resources/public/js/front_result_central.js' %}*/
/*                 <script src="{{ asset_url }}"></script>          */
/*             {% endjavascripts %}*/
/*             {% javascripts '@SIECoreBundle/Resources/public/js/front_search.js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*           */
/*      */
/*         {% endblock %} */
/*        <title id="titre">REFERENTIEL</title>*/
/*         {# <meta name="viewport" content="width=device-width, initial-scale=1.0"/>#}*/
/*     </head>*/
/*     <body>*/
/*         <header>*/
/*             <nav>*/
/*                 <ul>*/
/*                     <!-- A CHARGER DEPUIS LA VUE PERE-*/
/*                     <li><a href="page_direction_regionales.xhtml">Directions Regionales</a></li>*/
/*                     <li><a href="page_central.xhtml">Centrales </a></li>*/
/*                     <li><a href="page_equipement.xhtml">Equipements</a></li>-->*/
/* */
/*                 </ul>*/
/*             </nav>*/
/*         </header>*/
/* */
/*         <!--<div id='bloc_select_critere'>*/
/*               <b class="titreSection">Selection</b>*/
/*             <table class='tableSelection' border='1'>*/
/*               */
/*             */
/*               <tr>*/
/*                 <th>1) Direction Regionales</th>*/
/*                 <th>2) Nom de la centrale</th>*/
/*                 <th>3) Type de centrale</th>*/
/*                   */
/*                   */
/*               </tr>*/
/*               <tr><td>*/
/*                     <br/>   */
/*                     */
/*                     <br/><input id="check_allDr" type="checkbox"/>Toutes Directions*/
/*                     <br/>*/
/*                     <br/><input class="dr" value='1' type="checkbox"/>DR NORD*/
/*                     <br/><input class="dr" value='2' type="checkbox"/>DR SUD*/
/*                     <br/><input class="dr" value='3' type="checkbox"/>DR COOM*/
/*                 </td>*/
/*                 <td>*/
/*                     <br/>   */
/*                         <br/>*/
/*                     <select id="listCentral">                        */
/*                          <option>Choisissez une centrale</option>*/
/*                     </select>*/
/*                 </td>*/
/*                 <td>*/
/*                     <br/>   */
/*                     <br/>*/
/*                     <select id="input_type_central">*/
/*                         <option>Choisissez un type</option>*/
/*                     </select>           */
/*                     <br/>*/
/*                 </td>*/
/*              </tr>*/
/*             </table>*/
/*         </div>*/
/*         -->*/
/*         <table >*/
/*             <tr>*/
/*                 <td>*/
/*                     {% include "SIECoreBundle:Default:search.html.twig" %}*/
/*                 </td>*/
/*                 <td>*/
/*                     {% include "SIECentralBundle:form:result.html.twig" %} */
/*                 </td>*/
/*                 <td>*/
/*                     {% include "SIEDocumentBundle:Default:result_document.html.twig" %} */
/*                 </td>*/
/*                 <td>*/
/*                     {% include "SIEEquipementBundle:Default:result_equipement.html.twig" %} */
/*                 </td>*/
/*                 <td>*/
/*                     {% include "SIEAccessBundle:Default:result_access.html.twig" %} */
/*                 </td>*/
/*                 {#<a id="lienPDF" href="../form/formCentral.php?pdf=1">Referenciel PDF</a>#}*/
/*             </tr>*/
/*         </table>      */
/*                       */
/*     </body>*/
/* </html>*/
/* */
