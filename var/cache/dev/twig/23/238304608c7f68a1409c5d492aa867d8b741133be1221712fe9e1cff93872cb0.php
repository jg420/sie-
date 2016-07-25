<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_29a7bfbf48b4d55387daf8c36831a11a6b1dfced05981a101949166586d2ea91 extends Twig_Template
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
        $__internal_1aa761330e029218daba8546d7c0e7f52afc14b5a507ad9a9e21ea4e5f18ff70 = $this->env->getExtension("native_profiler");
        $__internal_1aa761330e029218daba8546d7c0e7f52afc14b5a507ad9a9e21ea4e5f18ff70->enter($__internal_1aa761330e029218daba8546d7c0e7f52afc14b5a507ad9a9e21ea4e5f18ff70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1aa761330e029218daba8546d7c0e7f52afc14b5a507ad9a9e21ea4e5f18ff70->leave($__internal_1aa761330e029218daba8546d7c0e7f52afc14b5a507ad9a9e21ea4e5f18ff70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
