<?php

/* SIECoreBundle:Default:view.html.twig */
class __TwigTemplate_6a6f189f2ce864d62a3a8a9c6f7ed588d0dbc7efa2917385f694ed145cc3daa6 extends Twig_Template
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
        $__internal_52d9f0213cd71d994a18538cfede251bdf3bcac2492318943808b69670eec22d = $this->env->getExtension("native_profiler");
        $__internal_52d9f0213cd71d994a18538cfede251bdf3bcac2492318943808b69670eec22d->enter($__internal_52d9f0213cd71d994a18538cfede251bdf3bcac2492318943808b69670eec22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECoreBundle:Default:view.html.twig"));

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
        
        $__internal_52d9f0213cd71d994a18538cfede251bdf3bcac2492318943808b69670eec22d->leave($__internal_52d9f0213cd71d994a18538cfede251bdf3bcac2492318943808b69670eec22d_prof);

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
