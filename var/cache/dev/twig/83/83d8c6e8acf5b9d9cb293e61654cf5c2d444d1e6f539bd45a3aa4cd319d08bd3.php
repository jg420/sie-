<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0d0522744efc1540ec0fc80145e4e0c86e840abe8791763ec0b02a10d1e0eedc extends Twig_Template
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
        $__internal_ea5fc5d1065ff9371c90aa81f51123b644709ae28c0b2f235acd65d9da9ca311 = $this->env->getExtension("native_profiler");
        $__internal_ea5fc5d1065ff9371c90aa81f51123b644709ae28c0b2f235acd65d9da9ca311->enter($__internal_ea5fc5d1065ff9371c90aa81f51123b644709ae28c0b2f235acd65d9da9ca311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ea5fc5d1065ff9371c90aa81f51123b644709ae28c0b2f235acd65d9da9ca311->leave($__internal_ea5fc5d1065ff9371c90aa81f51123b644709ae28c0b2f235acd65d9da9ca311_prof);

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
