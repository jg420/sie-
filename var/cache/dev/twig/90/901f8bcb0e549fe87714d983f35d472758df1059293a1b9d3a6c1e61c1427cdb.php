<?php

/* :central:new.html.twig */
class __TwigTemplate_a407678664040d7ea144b6d781a3495be19e6c955100f2d62212f10937fe7aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":central:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d78e9ddeeb54dae69497a242e228e812eb52f6ca840f9b3b31f759a18d25f79 = $this->env->getExtension("native_profiler");
        $__internal_1d78e9ddeeb54dae69497a242e228e812eb52f6ca840f9b3b31f759a18d25f79->enter($__internal_1d78e9ddeeb54dae69497a242e228e812eb52f6ca840f9b3b31f759a18d25f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":central:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d78e9ddeeb54dae69497a242e228e812eb52f6ca840f9b3b31f759a18d25f79->leave($__internal_1d78e9ddeeb54dae69497a242e228e812eb52f6ca840f9b3b31f759a18d25f79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d975676685d93e5b0aeb4868fd738f75f12dbc8ece365e8fcdff9319a67138f = $this->env->getExtension("native_profiler");
        $__internal_3d975676685d93e5b0aeb4868fd738f75f12dbc8ece365e8fcdff9319a67138f->enter($__internal_3d975676685d93e5b0aeb4868fd738f75f12dbc8ece365e8fcdff9319a67138f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Central creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("central_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3d975676685d93e5b0aeb4868fd738f75f12dbc8ece365e8fcdff9319a67138f->leave($__internal_3d975676685d93e5b0aeb4868fd738f75f12dbc8ece365e8fcdff9319a67138f_prof);

    }

    public function getTemplateName()
    {
        return ":central:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Central creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('central_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
