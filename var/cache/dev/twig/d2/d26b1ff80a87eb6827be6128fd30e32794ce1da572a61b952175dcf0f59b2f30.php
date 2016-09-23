<?php

/* @SIECore/Default/view.html.twig */
class __TwigTemplate_6fed32aacd3d58a8ee368224e98bc44d8601045cbb0a8ee8724d5cce0f62efef extends Twig_Template
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
        $__internal_b698ecbf5a8a2ec1a27aa6a684701a8eb69717cd4b293f1132528c7704fcfa07 = $this->env->getExtension("native_profiler");
        $__internal_b698ecbf5a8a2ec1a27aa6a684701a8eb69717cd4b293f1132528c7704fcfa07->enter($__internal_b698ecbf5a8a2ec1a27aa6a684701a8eb69717cd4b293f1132528c7704fcfa07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SIECore/Default/view.html.twig"));

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
        
        $__internal_b698ecbf5a8a2ec1a27aa6a684701a8eb69717cd4b293f1132528c7704fcfa07->leave($__internal_b698ecbf5a8a2ec1a27aa6a684701a8eb69717cd4b293f1132528c7704fcfa07_prof);

    }

    public function getTemplateName()
    {
        return "@SIECore/Default/view.html.twig";
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
