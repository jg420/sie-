<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_208380e719f5b190b3ce20fed758281b4e4ce11fb7ddece1cddf6a546314e2e8 extends Twig_Template
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
        $__internal_ebd793e2180a65de0be196e88b3bab651ebb61b5393c13a8b30f735921d6d45f = $this->env->getExtension("native_profiler");
        $__internal_ebd793e2180a65de0be196e88b3bab651ebb61b5393c13a8b30f735921d6d45f->enter($__internal_ebd793e2180a65de0be196e88b3bab651ebb61b5393c13a8b30f735921d6d45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ebd793e2180a65de0be196e88b3bab651ebb61b5393c13a8b30f735921d6d45f->leave($__internal_ebd793e2180a65de0be196e88b3bab651ebb61b5393c13a8b30f735921d6d45f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
