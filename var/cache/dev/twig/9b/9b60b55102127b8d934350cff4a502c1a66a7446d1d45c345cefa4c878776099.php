<?php

/* :central:show.html.twig */
class __TwigTemplate_e889451395a086d807e94a581abf20981865de339c04cf6c4a52b1fb74f1914c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":central:show.html.twig", 1);
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
        $__internal_935a7c7847fb8b62e94639113fd30c5accd2b88245291941982ae4192347a1b0 = $this->env->getExtension("native_profiler");
        $__internal_935a7c7847fb8b62e94639113fd30c5accd2b88245291941982ae4192347a1b0->enter($__internal_935a7c7847fb8b62e94639113fd30c5accd2b88245291941982ae4192347a1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":central:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_935a7c7847fb8b62e94639113fd30c5accd2b88245291941982ae4192347a1b0->leave($__internal_935a7c7847fb8b62e94639113fd30c5accd2b88245291941982ae4192347a1b0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_881f513f119ae7b10122d53b09e4c7bff58a99df24f36d542073641e14c878f5 = $this->env->getExtension("native_profiler");
        $__internal_881f513f119ae7b10122d53b09e4c7bff58a99df24f36d542073641e14c878f5->enter($__internal_881f513f119ae7b10122d53b09e4c7bff58a99df24f36d542073641e14c878f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Central</h1>

    <table>
        <tbody>
            <tr>
                <th>Libcentral</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["central"]) ? $context["central"] : $this->getContext($context, "central")), "libCentral", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etenduecentral</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["central"]) ? $context["central"] : $this->getContext($context, "central")), "etendueCentral", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codeanalytique</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["central"]) ? $context["central"] : $this->getContext($context, "central")), "codeAnalytique", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idcentral</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["central"]) ? $context["central"] : $this->getContext($context, "central")), "idCentral", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("central_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("central_edit", array("id" => $this->getAttribute((isset($context["central"]) ? $context["central"] : $this->getContext($context, "central")), "idCentral", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_881f513f119ae7b10122d53b09e4c7bff58a99df24f36d542073641e14c878f5->leave($__internal_881f513f119ae7b10122d53b09e4c7bff58a99df24f36d542073641e14c878f5_prof);

    }

    public function getTemplateName()
    {
        return ":central:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Central</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Libcentral</th>*/
/*                 <td>{{ central.libCentral }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Etenduecentral</th>*/
/*                 <td>{{ central.etendueCentral }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Codeanalytique</th>*/
/*                 <td>{{ central.codeAnalytique }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Idcentral</th>*/
/*                 <td>{{ central.idCentral }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('central_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('central_edit', { 'id': central.idCentral }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
