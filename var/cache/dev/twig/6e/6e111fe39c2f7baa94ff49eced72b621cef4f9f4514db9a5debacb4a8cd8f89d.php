<?php

/* SIECoreBundle:Default:index.html.twig */
class __TwigTemplate_89d01dcd5a4aa6bfe49f6f36213a4418d10f7b573c6137a5e35ff93081a1b165 extends Twig_Template
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
        $__internal_0d9fdb9d6501fd593f26958891b665851f83251bc1617ec37f2c4c85aeb43130 = $this->env->getExtension("native_profiler");
        $__internal_0d9fdb9d6501fd593f26958891b665851f83251bc1617ec37f2c4c85aeb43130->enter($__internal_0d9fdb9d6501fd593f26958891b665851f83251bc1617ec37f2c4c85aeb43130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECoreBundle:Default:index.html.twig"));

        // line 2
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"../script/quadranStyle.css\"/>
        <script src=\"../script/jquery.js\" />
        <script src=\"../script/jquery--ui.js\" />
        <script src=\"../script/formCentral.js\"/> -->
        ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3649b80_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3649b80_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3649b80_quadranStyle_1.css");
            // line 12
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "3649b80"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3649b80") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3649b80.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "
        ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2db1e5c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2db1e5c_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2db1e5c_jquery-ui_1.css");
            // line 16
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
        // line 18
        echo "
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "




        <title id=\"titre\">DIRECTION REGIONALES</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    </head>
    <body>
        <header>
            <nav>
                <ul>

                    <li><a href=\"page_direction_regionales.xhtml\">Directions Regionales</a></li>
                    <li><a href=\"page_central.xhtml\">Centrales </a></li>
                    <li><a href=\"page_equipement.xhtml\">Equipements</a></li>

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
                    <div id=\"bloc_recherche\">
                        <b class=\"titreSection\">Recherche</b>
                        <br/>  
                        <br/> 
                        <b>Nom de la central : </b>
                        <br/>
                        <input  class='ui-autocomplete-input' id=\"input_lib_central\" type=\"text\"/>
                        <br/>


                        <br/>
                        <b>Superficie de la centrale :</b>
                        <br/>
                        <input id=\"input_superficie_central\" type='text'/>

                        <br/>
                        <br/>
                        <b>Chargé d'exploitation :</b>
                        <br/>
                        <input id=\"input_lib_cex\" type=\"text\"/>
                        <br/>
                        <br/>

                    </div>
                </td>
                <td>
                    <div id=\"bloc_resultat_principal\">
                        <b class=\"titreSection\">Resultats</b>
                        <br/> 
                        <br/>
                        <b>Zone : </b>
                        <input size='8' disabled='disabled' id=\"output_lib_zone\" type=\"text\"/>
                        <br/>
                        <br/>
                        <input id=\"output_id_central\" type='hidden' value='0'/>
                        <b>Nom de la central : </b>
                        <br/>
                        <input disabled='disabled' id=\"output_lib_central\" type=\"text\"/>
                        <br/><b>Type de central :</b>
                        <br/>
                        <input id=\"output_select_type_central\" disabled='disabled' type=\"text\"/>
                        <br/>  
                        <br/>  
                        <b>Chargé d'exploitation :</b>
                        <br/>
                        <input disabled='disabled' id=\"output_lib_cex\" type=\"text\"/>
                        <br/>
                        <br/>
                        <br/>

                        <font  color='brown'>
                            <b>Nom de l'équipement :</b>
                            <br/>                     
                            <select id=\"output_select_equipement\" >
                            </select>
                            <br/>
                            <br/>

                            <b>Constructeur :</b>
                            <br/>
                            <select disabled='disabled' id=\"output_constructeur\" >
                            </select>
                        </font>
                        <div id='output_resumeResultat'>

                        </div>

                        <br/>
                        <br/>

                        <br/>
                    </div>
                </td>
                <td>
                    <div id=\"bloc_resultat_details\">
                        <b class=\"titreSection\">Adminstration</b>
                        <br/>
                        <div id=\"bloc_resultat_details_js\">
                            <b>Lien equipement :</b>
                            <br/>
                            <div id=\"resultat_detail_lien_equipement\">
                            </div>
                            <b>Lien schema :</b> 
                            <br/>
                            <div id=\"resultat_detail_lien_schema\">


                            </div>
                            <b>Lien contrat :</b>
                            <br/>
                            <div id=\"resultat_detail_lien_contrat\">


                            </div>
                        </div>
                        <br/>
                        <br/>

                    </div>
                    <a id=\"lienPDF\" href=\"../form/formCentral.php?pdf=1\">Referenciel PDF</a>
                </td>
            </tr>
        </table>       
    </body>
</html>
";
        
        $__internal_0d9fdb9d6501fd593f26958891b665851f83251bc1617ec37f2c4c85aeb43130->leave($__internal_0d9fdb9d6501fd593f26958891b665851f83251bc1617ec37f2c4c85aeb43130_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97495d51e3e7371295cbc19dbc855422e11d68700fc25f1e2347656ec9fdb8ce = $this->env->getExtension("native_profiler");
        $__internal_97495d51e3e7371295cbc19dbc855422e11d68700fc25f1e2347656ec9fdb8ce->enter($__internal_97495d51e3e7371295cbc19dbc855422e11d68700fc25f1e2347656ec9fdb8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "    
            ";
        // line 20
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a750637_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a750637_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a750637_jquery_1.js");
            // line 21
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "a750637"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a750637") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a750637.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 23
        echo "
            ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2994d72_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2994d72_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2994d72_jquery-ui_1.js");
            // line 25
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "2994d72"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2994d72") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2994d72.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "
            ";
        // line 28
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3eb98b1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3eb98b1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/3eb98b1_formCentral_1.js");
            // line 29
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "3eb98b1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3eb98b1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/3eb98b1.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 31
        echo "        ";
        
        $__internal_97495d51e3e7371295cbc19dbc855422e11d68700fc25f1e2347656ec9fdb8ce->leave($__internal_97495d51e3e7371295cbc19dbc855422e11d68700fc25f1e2347656ec9fdb8ce_prof);

    }

    public function getTemplateName()
    {
        return "SIECoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 31,  308 => 29,  304 => 28,  301 => 27,  287 => 25,  283 => 24,  280 => 23,  266 => 21,  262 => 20,  254 => 19,  78 => 32,  76 => 19,  73 => 18,  59 => 16,  55 => 15,  52 => 14,  38 => 12,  34 => 11,  23 => 2,);
    }
}
/* {# SIEcoreBundle/Resources/views/index.html.twig #}*/
/* <?xml version="1.0" encoding="UTF-8"?>*/
/* */
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/*     <head>*/
/*         <!-- <link rel="stylesheet" type="text/css" href="../script/quadranStyle.css"/>*/
/*         <script src="../script/jquery.js" />*/
/*         <script src="../script/jquery--ui.js" />*/
/*         <script src="../script/formCentral.js"/> -->*/
/*         {% stylesheets '@SIECoreBundle/Resources/public/css/quadranStyle.css' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*         {% endstylesheets %}*/
/* */
/*         {% stylesheets '@SIECoreBundle/Resources/public/css/jquery-ui.css' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*         {% endstylesheets %}*/
/* */
/*         {% block javascripts %}    */
/*             {% javascripts '@SIECoreBundle/Resources/public/js/jquery.js' %}*/
/*             <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/* */
/*             {% javascripts '@SIECoreBundle/Resources/public/js/jquery-ui.js' %}*/
/*             <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/* */
/*             {% javascripts '@SIECentralBundle/Resources/public/js/formCentral.js' %}*/
/*             <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/*         <title id="titre">DIRECTION REGIONALES</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/*     </head>*/
/*     <body>*/
/*         <header>*/
/*             <nav>*/
/*                 <ul>*/
/* */
/*                     <li><a href="page_direction_regionales.xhtml">Directions Regionales</a></li>*/
/*                     <li><a href="page_central.xhtml">Centrales </a></li>*/
/*                     <li><a href="page_equipement.xhtml">Equipements</a></li>*/
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
/*                     <div id="bloc_recherche">*/
/*                         <b class="titreSection">Recherche</b>*/
/*                         <br/>  */
/*                         <br/> */
/*                         <b>Nom de la central : </b>*/
/*                         <br/>*/
/*                         <input  class='ui-autocomplete-input' id="input_lib_central" type="text"/>*/
/*                         <br/>*/
/* */
/* */
/*                         <br/>*/
/*                         <b>Superficie de la centrale :</b>*/
/*                         <br/>*/
/*                         <input id="input_superficie_central" type='text'/>*/
/* */
/*                         <br/>*/
/*                         <br/>*/
/*                         <b>Chargé d'exploitation :</b>*/
/*                         <br/>*/
/*                         <input id="input_lib_cex" type="text"/>*/
/*                         <br/>*/
/*                         <br/>*/
/* */
/*                     </div>*/
/*                 </td>*/
/*                 <td>*/
/*                     <div id="bloc_resultat_principal">*/
/*                         <b class="titreSection">Resultats</b>*/
/*                         <br/> */
/*                         <br/>*/
/*                         <b>Zone : </b>*/
/*                         <input size='8' disabled='disabled' id="output_lib_zone" type="text"/>*/
/*                         <br/>*/
/*                         <br/>*/
/*                         <input id="output_id_central" type='hidden' value='0'/>*/
/*                         <b>Nom de la central : </b>*/
/*                         <br/>*/
/*                         <input disabled='disabled' id="output_lib_central" type="text"/>*/
/*                         <br/><b>Type de central :</b>*/
/*                         <br/>*/
/*                         <input id="output_select_type_central" disabled='disabled' type="text"/>*/
/*                         <br/>  */
/*                         <br/>  */
/*                         <b>Chargé d'exploitation :</b>*/
/*                         <br/>*/
/*                         <input disabled='disabled' id="output_lib_cex" type="text"/>*/
/*                         <br/>*/
/*                         <br/>*/
/*                         <br/>*/
/* */
/*                         <font  color='brown'>*/
/*                             <b>Nom de l'équipement :</b>*/
/*                             <br/>                     */
/*                             <select id="output_select_equipement" >*/
/*                             </select>*/
/*                             <br/>*/
/*                             <br/>*/
/* */
/*                             <b>Constructeur :</b>*/
/*                             <br/>*/
/*                             <select disabled='disabled' id="output_constructeur" >*/
/*                             </select>*/
/*                         </font>*/
/*                         <div id='output_resumeResultat'>*/
/* */
/*                         </div>*/
/* */
/*                         <br/>*/
/*                         <br/>*/
/* */
/*                         <br/>*/
/*                     </div>*/
/*                 </td>*/
/*                 <td>*/
/*                     <div id="bloc_resultat_details">*/
/*                         <b class="titreSection">Adminstration</b>*/
/*                         <br/>*/
/*                         <div id="bloc_resultat_details_js">*/
/*                             <b>Lien equipement :</b>*/
/*                             <br/>*/
/*                             <div id="resultat_detail_lien_equipement">*/
/*                             </div>*/
/*                             <b>Lien schema :</b> */
/*                             <br/>*/
/*                             <div id="resultat_detail_lien_schema">*/
/* */
/* */
/*                             </div>*/
/*                             <b>Lien contrat :</b>*/
/*                             <br/>*/
/*                             <div id="resultat_detail_lien_contrat">*/
/* */
/* */
/*                             </div>*/
/*                         </div>*/
/*                         <br/>*/
/*                         <br/>*/
/* */
/*                     </div>*/
/*                     <a id="lienPDF" href="../form/formCentral.php?pdf=1">Referenciel PDF</a>*/
/*                 </td>*/
/*             </tr>*/
/*         </table>       */
/*     </body>*/
/* </html>*/
/* */
