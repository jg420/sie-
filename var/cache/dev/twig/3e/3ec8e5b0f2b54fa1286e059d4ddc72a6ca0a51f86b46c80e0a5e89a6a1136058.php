<?php

/* :central:edit.html.twig */
class __TwigTemplate_51453e9a83fb207134a1957640e0aa5e8329bcf0cede7a7fc27a4a847568e5a7 extends Twig_Template
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
        $__internal_1007fb780b6b1194f1191705150b32395f12f1968ced2f35f87f3748a691a1ab = $this->env->getExtension("native_profiler");
        $__internal_1007fb780b6b1194f1191705150b32395f12f1968ced2f35f87f3748a691a1ab->enter($__internal_1007fb780b6b1194f1191705150b32395f12f1968ced2f35f87f3748a691a1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":central:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1007fb780b6b1194f1191705150b32395f12f1968ced2f35f87f3748a691a1ab->leave($__internal_1007fb780b6b1194f1191705150b32395f12f1968ced2f35f87f3748a691a1ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e82da0bc159cd4c00d9300a1004003e7ad50de3b7d7568ad11040d8272d46c42 = $this->env->getExtension("native_profiler");
        $__internal_e82da0bc159cd4c00d9300a1004003e7ad50de3b7d7568ad11040d8272d46c42->enter($__internal_e82da0bc159cd4c00d9300a1004003e7ad50de3b7d7568ad11040d8272d46c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e82da0bc159cd4c00d9300a1004003e7ad50de3b7d7568ad11040d8272d46c42->leave($__internal_e82da0bc159cd4c00d9300a1004003e7ad50de3b7d7568ad11040d8272d46c42_prof);

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
