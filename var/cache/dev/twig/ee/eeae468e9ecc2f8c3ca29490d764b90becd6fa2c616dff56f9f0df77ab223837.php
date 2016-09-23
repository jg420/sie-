<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_74b218702caf3c2576ad439757eead6e07a38658112af6d9f531b50ec453a91a extends Twig_Template
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
        $__internal_dadb90ae16136aa2967dd283d0ec3baefe497607115c382507bbb75fbe577270 = $this->env->getExtension("native_profiler");
        $__internal_dadb90ae16136aa2967dd283d0ec3baefe497607115c382507bbb75fbe577270->enter($__internal_dadb90ae16136aa2967dd283d0ec3baefe497607115c382507bbb75fbe577270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dadb90ae16136aa2967dd283d0ec3baefe497607115c382507bbb75fbe577270->leave($__internal_dadb90ae16136aa2967dd283d0ec3baefe497607115c382507bbb75fbe577270_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
