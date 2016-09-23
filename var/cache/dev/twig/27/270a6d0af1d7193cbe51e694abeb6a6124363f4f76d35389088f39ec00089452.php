<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_365169d45f1ed2f7d2367bf2fde66e05aca4d9ed69f8d5531c20ef731a77766f extends Twig_Template
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
        $__internal_5f144d6565a51cb8a475ae143dd622b8e411642a784f8358c2b819ff3d594578 = $this->env->getExtension("native_profiler");
        $__internal_5f144d6565a51cb8a475ae143dd622b8e411642a784f8358c2b819ff3d594578->enter($__internal_5f144d6565a51cb8a475ae143dd622b8e411642a784f8358c2b819ff3d594578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5f144d6565a51cb8a475ae143dd622b8e411642a784f8358c2b819ff3d594578->leave($__internal_5f144d6565a51cb8a475ae143dd622b8e411642a784f8358c2b819ff3d594578_prof);

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
