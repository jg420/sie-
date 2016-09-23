<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7f905242e7d6e65c4cc8f2e877fd7b9f5c26c8abe95be48132e2d0fcf1c909c6 extends Twig_Template
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
        $__internal_9092430aaab5180097a0a332221cc8e5df811f1f36b7115db813044a856e779f = $this->env->getExtension("native_profiler");
        $__internal_9092430aaab5180097a0a332221cc8e5df811f1f36b7115db813044a856e779f->enter($__internal_9092430aaab5180097a0a332221cc8e5df811f1f36b7115db813044a856e779f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_9092430aaab5180097a0a332221cc8e5df811f1f36b7115db813044a856e779f->leave($__internal_9092430aaab5180097a0a332221cc8e5df811f1f36b7115db813044a856e779f_prof);

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
