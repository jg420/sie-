<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_07b16cd73b0c76090d46d4a2c9235f6260d9ef6660750dcd8bc33b18929d2249 extends Twig_Template
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
        $__internal_78d0edf74e01abd447e9b209627a1d9d137e140edb674fa0da039abea8f0e446 = $this->env->getExtension("native_profiler");
        $__internal_78d0edf74e01abd447e9b209627a1d9d137e140edb674fa0da039abea8f0e446->enter($__internal_78d0edf74e01abd447e9b209627a1d9d137e140edb674fa0da039abea8f0e446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_78d0edf74e01abd447e9b209627a1d9d137e140edb674fa0da039abea8f0e446->leave($__internal_78d0edf74e01abd447e9b209627a1d9d137e140edb674fa0da039abea8f0e446_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
