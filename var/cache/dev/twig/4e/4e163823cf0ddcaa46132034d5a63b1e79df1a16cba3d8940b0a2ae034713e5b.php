<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9fa2c5a5b09a61574cde138205bd4005faf22b272da0737e39015fefca8f4b37 extends Twig_Template
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
        $__internal_087f86f9a6768bcd81d53859a0fac3297e7c74f78a253a67da976e24fb8f6696 = $this->env->getExtension("native_profiler");
        $__internal_087f86f9a6768bcd81d53859a0fac3297e7c74f78a253a67da976e24fb8f6696->enter($__internal_087f86f9a6768bcd81d53859a0fac3297e7c74f78a253a67da976e24fb8f6696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_087f86f9a6768bcd81d53859a0fac3297e7c74f78a253a67da976e24fb8f6696->leave($__internal_087f86f9a6768bcd81d53859a0fac3297e7c74f78a253a67da976e24fb8f6696_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
