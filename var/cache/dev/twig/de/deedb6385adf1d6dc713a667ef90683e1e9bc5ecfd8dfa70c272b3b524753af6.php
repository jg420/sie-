<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f750946d312d5377560d2ad3399bfd0dc1adf5231866ce260f02215098a7554f extends Twig_Template
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
        $__internal_3a808f429fb00233e7716013794736c381406c6795fbaba69926c1be4e471dd1 = $this->env->getExtension("native_profiler");
        $__internal_3a808f429fb00233e7716013794736c381406c6795fbaba69926c1be4e471dd1->enter($__internal_3a808f429fb00233e7716013794736c381406c6795fbaba69926c1be4e471dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3a808f429fb00233e7716013794736c381406c6795fbaba69926c1be4e471dd1->leave($__internal_3a808f429fb00233e7716013794736c381406c6795fbaba69926c1be4e471dd1_prof);

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
