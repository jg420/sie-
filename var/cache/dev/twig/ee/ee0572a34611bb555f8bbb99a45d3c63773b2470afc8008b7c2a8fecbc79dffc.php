<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_718b5949f32b68f701aa102e88547a8ab7f70ba020223ff85a65be3c2203a44d extends Twig_Template
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
        $__internal_2671d7c99eec11fad758985ee70b00e6b7424b40189be0c25bd5d2ed63728e17 = $this->env->getExtension("native_profiler");
        $__internal_2671d7c99eec11fad758985ee70b00e6b7424b40189be0c25bd5d2ed63728e17->enter($__internal_2671d7c99eec11fad758985ee70b00e6b7424b40189be0c25bd5d2ed63728e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_2671d7c99eec11fad758985ee70b00e6b7424b40189be0c25bd5d2ed63728e17->leave($__internal_2671d7c99eec11fad758985ee70b00e6b7424b40189be0c25bd5d2ed63728e17_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
