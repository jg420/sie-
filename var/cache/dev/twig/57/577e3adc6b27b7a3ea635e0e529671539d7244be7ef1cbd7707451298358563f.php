<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5c081f20cd1f9e73e567a3aa1e42df0c59cb770dbe3d0830d8f23fb7dc591dcc extends Twig_Template
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
        $__internal_d94af58e58917a1bd3ec9deeba4a4794a4370e0bdd91b1b5db846e6a36076897 = $this->env->getExtension("native_profiler");
        $__internal_d94af58e58917a1bd3ec9deeba4a4794a4370e0bdd91b1b5db846e6a36076897->enter($__internal_d94af58e58917a1bd3ec9deeba4a4794a4370e0bdd91b1b5db846e6a36076897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d94af58e58917a1bd3ec9deeba4a4794a4370e0bdd91b1b5db846e6a36076897->leave($__internal_d94af58e58917a1bd3ec9deeba4a4794a4370e0bdd91b1b5db846e6a36076897_prof);

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
