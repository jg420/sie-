<?php

/* :central:edit.html.twig */
class __TwigTemplate_79620f8a321b17e0ac8b52cd7f7b2489a4f9b7c334b0fc01d1114fa9cefe77a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":central:edit.html.twig", 1);
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
        $__internal_8ffad582b12f3e13dd2af511f476e15b5f3c7f9f9f044750d4e97cdea0e1d301 = $this->env->getExtension("native_profiler");
        $__internal_8ffad582b12f3e13dd2af511f476e15b5f3c7f9f9f044750d4e97cdea0e1d301->enter($__internal_8ffad582b12f3e13dd2af511f476e15b5f3c7f9f9f044750d4e97cdea0e1d301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":central:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ffad582b12f3e13dd2af511f476e15b5f3c7f9f9f044750d4e97cdea0e1d301->leave($__internal_8ffad582b12f3e13dd2af511f476e15b5f3c7f9f9f044750d4e97cdea0e1d301_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_116e05cf73940ee3fade7abcab7e09db81b06e04d20ec9b9d76f9b0c2ecb0a1a = $this->env->getExtension("native_profiler");
        $__internal_116e05cf73940ee3fade7abcab7e09db81b06e04d20ec9b9d76f9b0c2ecb0a1a->enter($__internal_116e05cf73940ee3fade7abcab7e09db81b06e04d20ec9b9d76f9b0c2ecb0a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Central edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("central_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_116e05cf73940ee3fade7abcab7e09db81b06e04d20ec9b9d76f9b0c2ecb0a1a->leave($__internal_116e05cf73940ee3fade7abcab7e09db81b06e04d20ec9b9d76f9b0c2ecb0a1a_prof);

    }

    public function getTemplateName()
    {
        return ":central:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Central edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('central_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
