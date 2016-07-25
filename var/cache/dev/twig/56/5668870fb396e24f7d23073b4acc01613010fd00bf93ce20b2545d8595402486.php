<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_86dd8d9077dd669932bf5ffac93f918ffe8e4bf98c02d64d460f8982ff0cdb1f extends Twig_Template
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
        $__internal_5853e6e4e2d75e88a13bdc35c89c7e52c75cd4692c037ce1d3e1da245a2ffb14 = $this->env->getExtension("native_profiler");
        $__internal_5853e6e4e2d75e88a13bdc35c89c7e52c75cd4692c037ce1d3e1da245a2ffb14->enter($__internal_5853e6e4e2d75e88a13bdc35c89c7e52c75cd4692c037ce1d3e1da245a2ffb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5853e6e4e2d75e88a13bdc35c89c7e52c75cd4692c037ce1d3e1da245a2ffb14->leave($__internal_5853e6e4e2d75e88a13bdc35c89c7e52c75cd4692c037ce1d3e1da245a2ffb14_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
