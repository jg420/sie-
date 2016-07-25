<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5b7eb70076db4eff9322c351eaaabecbc292a5fdb8aa2ba2bac6ece12b90f5e0 extends Twig_Template
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
        $__internal_c83dacb6e049b3f939c43791a6ad155eb1e9d128a510bb4e6542b283e3449674 = $this->env->getExtension("native_profiler");
        $__internal_c83dacb6e049b3f939c43791a6ad155eb1e9d128a510bb4e6542b283e3449674->enter($__internal_c83dacb6e049b3f939c43791a6ad155eb1e9d128a510bb4e6542b283e3449674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c83dacb6e049b3f939c43791a6ad155eb1e9d128a510bb4e6542b283e3449674->leave($__internal_c83dacb6e049b3f939c43791a6ad155eb1e9d128a510bb4e6542b283e3449674_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
