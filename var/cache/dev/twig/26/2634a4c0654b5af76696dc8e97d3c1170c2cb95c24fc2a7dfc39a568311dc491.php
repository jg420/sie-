<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_57364b40550e615ec60244b9342fc0ead36add3604d5e71b1c291e28cf68881d extends Twig_Template
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
        $__internal_bf5fd8bc703b6fd7d7fc010da2ef3e6b96ac43bc2f39c78324597a4a559f62b5 = $this->env->getExtension("native_profiler");
        $__internal_bf5fd8bc703b6fd7d7fc010da2ef3e6b96ac43bc2f39c78324597a4a559f62b5->enter($__internal_bf5fd8bc703b6fd7d7fc010da2ef3e6b96ac43bc2f39c78324597a4a559f62b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_bf5fd8bc703b6fd7d7fc010da2ef3e6b96ac43bc2f39c78324597a4a559f62b5->leave($__internal_bf5fd8bc703b6fd7d7fc010da2ef3e6b96ac43bc2f39c78324597a4a559f62b5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
