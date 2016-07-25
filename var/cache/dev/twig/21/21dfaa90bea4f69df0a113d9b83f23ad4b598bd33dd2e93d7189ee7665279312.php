<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bb35d46e277282dfe8f3e52a51a0d9cdeb5835a9fb0f94ae2d24e02e09dc1caa extends Twig_Template
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
        $__internal_39362adfbb5bd8dcf8d8709b30fb6f670fbf7c716ef0b02ff5008cf3ad95bd1a = $this->env->getExtension("native_profiler");
        $__internal_39362adfbb5bd8dcf8d8709b30fb6f670fbf7c716ef0b02ff5008cf3ad95bd1a->enter($__internal_39362adfbb5bd8dcf8d8709b30fb6f670fbf7c716ef0b02ff5008cf3ad95bd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_39362adfbb5bd8dcf8d8709b30fb6f670fbf7c716ef0b02ff5008cf3ad95bd1a->leave($__internal_39362adfbb5bd8dcf8d8709b30fb6f670fbf7c716ef0b02ff5008cf3ad95bd1a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
