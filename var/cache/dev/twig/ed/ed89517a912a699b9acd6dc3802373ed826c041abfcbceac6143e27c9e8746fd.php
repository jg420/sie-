<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_6df54846748845d3110319e91b29e5619185c9c9a67f2854f252e319f6a7ee13 extends Twig_Template
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
        $__internal_1b6fdff0e9fef21438c0aea47655234bba0e98653b1faeee0a564dac21a57127 = $this->env->getExtension("native_profiler");
        $__internal_1b6fdff0e9fef21438c0aea47655234bba0e98653b1faeee0a564dac21a57127->enter($__internal_1b6fdff0e9fef21438c0aea47655234bba0e98653b1faeee0a564dac21a57127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1b6fdff0e9fef21438c0aea47655234bba0e98653b1faeee0a564dac21a57127->leave($__internal_1b6fdff0e9fef21438c0aea47655234bba0e98653b1faeee0a564dac21a57127_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
