<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_1b511a7ea7e42eae57eb9baad51957f10d5bd13d820b84a8f12838214f0e4d7a extends Twig_Template
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
        $__internal_b78496767cbc52bcb09bf5def3ddf7179075dc6fc0f9432576c603e9c26c77ce = $this->env->getExtension("native_profiler");
        $__internal_b78496767cbc52bcb09bf5def3ddf7179075dc6fc0f9432576c603e9c26c77ce->enter($__internal_b78496767cbc52bcb09bf5def3ddf7179075dc6fc0f9432576c603e9c26c77ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b78496767cbc52bcb09bf5def3ddf7179075dc6fc0f9432576c603e9c26c77ce->leave($__internal_b78496767cbc52bcb09bf5def3ddf7179075dc6fc0f9432576c603e9c26c77ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
