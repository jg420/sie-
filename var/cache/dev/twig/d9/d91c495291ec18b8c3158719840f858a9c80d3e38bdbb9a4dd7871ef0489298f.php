<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_c3de110cd232f44b5111c1bf84ee04fcd1a481a2d7317a88341e1ff618585116 extends Twig_Template
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
        $__internal_02f68309dcd2478bd5fbd3aa2a843b1386445738a77e4c8f1a05f6996462049b = $this->env->getExtension("native_profiler");
        $__internal_02f68309dcd2478bd5fbd3aa2a843b1386445738a77e4c8f1a05f6996462049b->enter($__internal_02f68309dcd2478bd5fbd3aa2a843b1386445738a77e4c8f1a05f6996462049b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_02f68309dcd2478bd5fbd3aa2a843b1386445738a77e4c8f1a05f6996462049b->leave($__internal_02f68309dcd2478bd5fbd3aa2a843b1386445738a77e4c8f1a05f6996462049b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
