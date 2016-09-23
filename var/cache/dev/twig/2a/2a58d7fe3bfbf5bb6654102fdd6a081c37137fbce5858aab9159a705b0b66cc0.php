<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_58e1d9e42c2ae871f4097ceda82d498c946281ef952b5e030001b10f20993e96 extends Twig_Template
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
        $__internal_c6925a67993378a71434f63c07ac032134f60c58f95933355707c9706b059523 = $this->env->getExtension("native_profiler");
        $__internal_c6925a67993378a71434f63c07ac032134f60c58f95933355707c9706b059523->enter($__internal_c6925a67993378a71434f63c07ac032134f60c58f95933355707c9706b059523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c6925a67993378a71434f63c07ac032134f60c58f95933355707c9706b059523->leave($__internal_c6925a67993378a71434f63c07ac032134f60c58f95933355707c9706b059523_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
