<?php

/* SIECoreBundle:Default:view.html.twig */
class __TwigTemplate_c99345a12d75d830f7fc1b3f979e74ff4f1fd33b807353188d78c16278edd22a extends Twig_Template
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
        $__internal_0dc2f508bb01717d4e908fde6ecfb09d8f47c3d2d733209522bba0083cd1b172 = $this->env->getExtension("native_profiler");
        $__internal_0dc2f508bb01717d4e908fde6ecfb09d8f47c3d2d733209522bba0083cd1b172->enter($__internal_0dc2f508bb01717d4e908fde6ecfb09d8f47c3d2d733209522bba0083cd1b172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECoreBundle:Default:view.html.twig"));

        // line 1
        echo " 
";
        // line 3
        echo "


    <div class=\"well\">
      ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </div>
";
        
        $__internal_0dc2f508bb01717d4e908fde6ecfb09d8f47c3d2d733209522bba0083cd1b172->leave($__internal_0dc2f508bb01717d4e908fde6ecfb09d8f47c3d2d733209522bba0083cd1b172_prof);

    }

    public function getTemplateName()
    {
        return "SIECoreBundle:Default:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  25 => 3,  22 => 1,);
    }
}
/*  */
/* {# src/SIE/CoreBundle/Resources/views/Default/form.html.twig #}*/
/* */
/* */
/* */
/*     <div class="well">*/
/*       {{ form(form) }}*/
/*     </div>*/
/* */
