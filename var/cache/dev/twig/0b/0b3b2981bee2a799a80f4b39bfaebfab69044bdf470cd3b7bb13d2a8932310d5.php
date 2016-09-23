<?php

/* central/new.html.twig */
class __TwigTemplate_7536d76e027bf4e1704d32a1bcfb0f6fbd86822c58247150af0db45b8b6d619c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "central/new.html.twig", 1);
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
        $__internal_3780488b9f67301a4ee6aa4eabcb8d50fef5ff8b584667171a08550e4b1dcb73 = $this->env->getExtension("native_profiler");
        $__internal_3780488b9f67301a4ee6aa4eabcb8d50fef5ff8b584667171a08550e4b1dcb73->enter($__internal_3780488b9f67301a4ee6aa4eabcb8d50fef5ff8b584667171a08550e4b1dcb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "central/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3780488b9f67301a4ee6aa4eabcb8d50fef5ff8b584667171a08550e4b1dcb73->leave($__internal_3780488b9f67301a4ee6aa4eabcb8d50fef5ff8b584667171a08550e4b1dcb73_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_51334134e4907b5d280f1f7e6aa1e9556a770ece72f44530860265aa1d428340 = $this->env->getExtension("native_profiler");
        $__internal_51334134e4907b5d280f1f7e6aa1e9556a770ece72f44530860265aa1d428340->enter($__internal_51334134e4907b5d280f1f7e6aa1e9556a770ece72f44530860265aa1d428340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Central creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("central_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_51334134e4907b5d280f1f7e6aa1e9556a770ece72f44530860265aa1d428340->leave($__internal_51334134e4907b5d280f1f7e6aa1e9556a770ece72f44530860265aa1d428340_prof);

    }

    public function getTemplateName()
    {
        return "central/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Central creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('central_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
