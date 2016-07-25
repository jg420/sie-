<?php

/* :central:index.html.twig */
class __TwigTemplate_736adc3e48e205a87ce62fde1687611b115aab7d9d52289ae76ed5c9f0c9e299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":central:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44035de8f90a336ad0e5d965fb8522e78a9d33bfd58c2f3f674d2bd1bf77dc8b = $this->env->getExtension("native_profiler");
        $__internal_44035de8f90a336ad0e5d965fb8522e78a9d33bfd58c2f3f674d2bd1bf77dc8b->enter($__internal_44035de8f90a336ad0e5d965fb8522e78a9d33bfd58c2f3f674d2bd1bf77dc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":central:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44035de8f90a336ad0e5d965fb8522e78a9d33bfd58c2f3f674d2bd1bf77dc8b->leave($__internal_44035de8f90a336ad0e5d965fb8522e78a9d33bfd58c2f3f674d2bd1bf77dc8b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c18338b8f7939e37dc19275991ff14523a3c3bef42befe3032619b047c6bc795 = $this->env->getExtension("native_profiler");
        $__internal_c18338b8f7939e37dc19275991ff14523a3c3bef42befe3032619b047c6bc795->enter($__internal_c18338b8f7939e37dc19275991ff14523a3c3bef42befe3032619b047c6bc795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Central list</h1>

    <table>
        <thead>
            <tr>
                <th>Libcentral</th>
                <th>Etenduecentral</th>
                <th>Codeanalytique</th>
                <th>Idcentral</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["centrals"]) ? $context["centrals"] : $this->getContext($context, "centrals")));
        foreach ($context['_seq'] as $context["_key"] => $context["central"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("central_show", array("id" => $this->getAttribute($context["central"], "idCentral", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["central"], "libCentral", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["central"], "etendueCentral", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["central"], "codeAnalytique", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["central"], "idCentral", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("central_show", array("id" => $this->getAttribute($context["central"], "idCentral", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("central_edit", array("id" => $this->getAttribute($context["central"], "idCentral", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['central'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("central_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_c18338b8f7939e37dc19275991ff14523a3c3bef42befe3032619b047c6bc795->leave($__internal_c18338b8f7939e37dc19275991ff14523a3c3bef42befe3032619b047c6bc795_prof);

    }

    public function getTemplateName()
    {
        return ":central:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Central list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Libcentral</th>*/
/*                 <th>Etenduecentral</th>*/
/*                 <th>Codeanalytique</th>*/
/*                 <th>Idcentral</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for central in centrals %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('central_show', { 'id': central.idCentral }) }}">{{ central.libCentral }}</a></td>*/
/*                 <td>{{ central.etendueCentral }}</td>*/
/*                 <td>{{ central.codeAnalytique }}</td>*/
/*                 <td>{{ central.idCentral }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('central_show', { 'id': central.idCentral }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('central_edit', { 'id': central.idCentral }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('central_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
