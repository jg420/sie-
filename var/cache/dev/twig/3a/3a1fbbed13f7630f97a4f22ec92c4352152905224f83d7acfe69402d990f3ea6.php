<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ed8333431272eac14fe4173c597041b58e99067091cfb0c286e9fc329e6d9080 extends Twig_Template
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
        $__internal_2269954a3a0d6f3e7b5336c65d503aa8267bc2dc09c2c3157ddaa378e00f1c11 = $this->env->getExtension("native_profiler");
        $__internal_2269954a3a0d6f3e7b5336c65d503aa8267bc2dc09c2c3157ddaa378e00f1c11->enter($__internal_2269954a3a0d6f3e7b5336c65d503aa8267bc2dc09c2c3157ddaa378e00f1c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2269954a3a0d6f3e7b5336c65d503aa8267bc2dc09c2c3157ddaa378e00f1c11->leave($__internal_2269954a3a0d6f3e7b5336c65d503aa8267bc2dc09c2c3157ddaa378e00f1c11_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
