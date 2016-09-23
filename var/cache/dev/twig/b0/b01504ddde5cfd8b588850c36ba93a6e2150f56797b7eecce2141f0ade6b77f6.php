<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_2d3df34518e55a930369b255a5b9847db39543f882e85bbe9f6a5005d5d09132 extends Twig_Template
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
        $__internal_c2817312aa10fc9816601426b67c4b382fb3bf609b71da0250fadb8c5d28395e = $this->env->getExtension("native_profiler");
        $__internal_c2817312aa10fc9816601426b67c4b382fb3bf609b71da0250fadb8c5d28395e->enter($__internal_c2817312aa10fc9816601426b67c4b382fb3bf609b71da0250fadb8c5d28395e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c2817312aa10fc9816601426b67c4b382fb3bf609b71da0250fadb8c5d28395e->leave($__internal_c2817312aa10fc9816601426b67c4b382fb3bf609b71da0250fadb8c5d28395e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
