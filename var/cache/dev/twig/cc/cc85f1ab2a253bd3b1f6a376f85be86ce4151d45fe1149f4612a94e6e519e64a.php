<?php

/* :central:new.html.twig */
class __TwigTemplate_7d8d7cce25694bd46a151511bde4d8300990cacc8cd389f26737c0e277c79505 extends Twig_Template
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
        $__internal_65c16f88e29460ea724bb75e6fb9dc84e70fd91ce92da64d04d6d918ed7ff7fa = $this->env->getExtension("native_profiler");
        $__internal_65c16f88e29460ea724bb75e6fb9dc84e70fd91ce92da64d04d6d918ed7ff7fa->enter($__internal_65c16f88e29460ea724bb75e6fb9dc84e70fd91ce92da64d04d6d918ed7ff7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":central:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65c16f88e29460ea724bb75e6fb9dc84e70fd91ce92da64d04d6d918ed7ff7fa->leave($__internal_65c16f88e29460ea724bb75e6fb9dc84e70fd91ce92da64d04d6d918ed7ff7fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_664a727f12107a55cc85b902f6a708fe0d04a953caffe0b61ad483a24329c268 = $this->env->getExtension("native_profiler");
        $__internal_664a727f12107a55cc85b902f6a708fe0d04a953caffe0b61ad483a24329c268->enter($__internal_664a727f12107a55cc85b902f6a708fe0d04a953caffe0b61ad483a24329c268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_664a727f12107a55cc85b902f6a708fe0d04a953caffe0b61ad483a24329c268->leave($__internal_664a727f12107a55cc85b902f6a708fe0d04a953caffe0b61ad483a24329c268_prof);

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
