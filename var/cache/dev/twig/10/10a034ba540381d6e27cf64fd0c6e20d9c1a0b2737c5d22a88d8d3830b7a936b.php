<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f412401acbb46bba2aab45c857e25caf4f4a11a68388d5dbea8784fdf1174a8c extends Twig_Template
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
        $__internal_c4fb1d6f0df05a554c722ce13dc129eaa007c01c977324fb505f275dd639404e = $this->env->getExtension("native_profiler");
        $__internal_c4fb1d6f0df05a554c722ce13dc129eaa007c01c977324fb505f275dd639404e->enter($__internal_c4fb1d6f0df05a554c722ce13dc129eaa007c01c977324fb505f275dd639404e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_c4fb1d6f0df05a554c722ce13dc129eaa007c01c977324fb505f275dd639404e->leave($__internal_c4fb1d6f0df05a554c722ce13dc129eaa007c01c977324fb505f275dd639404e_prof);

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
