<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_8086bd8a15f244c438327e6ad9a3effb7c78cd920034e4d6b2d993c75066f6b8 extends Twig_Template
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
        $__internal_9e270347a7721d4544de3b63f35247adad55f6001764b947fa2eefbc99b30a70 = $this->env->getExtension("native_profiler");
        $__internal_9e270347a7721d4544de3b63f35247adad55f6001764b947fa2eefbc99b30a70->enter($__internal_9e270347a7721d4544de3b63f35247adad55f6001764b947fa2eefbc99b30a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9e270347a7721d4544de3b63f35247adad55f6001764b947fa2eefbc99b30a70->leave($__internal_9e270347a7721d4544de3b63f35247adad55f6001764b947fa2eefbc99b30a70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
