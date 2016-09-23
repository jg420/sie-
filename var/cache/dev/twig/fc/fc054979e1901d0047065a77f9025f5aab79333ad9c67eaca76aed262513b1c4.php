<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_29d13922c6e72b7d92276c5874024099467446ab6face5762ad074bfe75cc298 extends Twig_Template
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
        $__internal_06d7bb53bcf7830420174bb1bc37d7d7ee41801cb08ce22837366a3d05edd079 = $this->env->getExtension("native_profiler");
        $__internal_06d7bb53bcf7830420174bb1bc37d7d7ee41801cb08ce22837366a3d05edd079->enter($__internal_06d7bb53bcf7830420174bb1bc37d7d7ee41801cb08ce22837366a3d05edd079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_06d7bb53bcf7830420174bb1bc37d7d7ee41801cb08ce22837366a3d05edd079->leave($__internal_06d7bb53bcf7830420174bb1bc37d7d7ee41801cb08ce22837366a3d05edd079_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
