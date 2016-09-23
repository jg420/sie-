<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_eda9a36e851668302c9f9dd58b472ec6eceba0a89ecd5ddf39d1a45bf77f785c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e79db5b139d3857555133a2ec00e6be80b9efb72ac86cfb2086dcbbf15edffa = $this->env->getExtension("native_profiler");
        $__internal_3e79db5b139d3857555133a2ec00e6be80b9efb72ac86cfb2086dcbbf15edffa->enter($__internal_3e79db5b139d3857555133a2ec00e6be80b9efb72ac86cfb2086dcbbf15edffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e79db5b139d3857555133a2ec00e6be80b9efb72ac86cfb2086dcbbf15edffa->leave($__internal_3e79db5b139d3857555133a2ec00e6be80b9efb72ac86cfb2086dcbbf15edffa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c14ff4a880e87a041f1fb17f973c30616d74ec52a95ba579e733fa6a439a900 = $this->env->getExtension("native_profiler");
        $__internal_3c14ff4a880e87a041f1fb17f973c30616d74ec52a95ba579e733fa6a439a900->enter($__internal_3c14ff4a880e87a041f1fb17f973c30616d74ec52a95ba579e733fa6a439a900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3c14ff4a880e87a041f1fb17f973c30616d74ec52a95ba579e733fa6a439a900->leave($__internal_3c14ff4a880e87a041f1fb17f973c30616d74ec52a95ba579e733fa6a439a900_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b601afaaad559ca1c77dd8c0e0c5516a87fdc805c49cb32601f6e21e7bad779 = $this->env->getExtension("native_profiler");
        $__internal_0b601afaaad559ca1c77dd8c0e0c5516a87fdc805c49cb32601f6e21e7bad779->enter($__internal_0b601afaaad559ca1c77dd8c0e0c5516a87fdc805c49cb32601f6e21e7bad779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0b601afaaad559ca1c77dd8c0e0c5516a87fdc805c49cb32601f6e21e7bad779->leave($__internal_0b601afaaad559ca1c77dd8c0e0c5516a87fdc805c49cb32601f6e21e7bad779_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_73fd72fb131f3820591eb2de7690f31426e7fb44b374c3dffefd233a55780a55 = $this->env->getExtension("native_profiler");
        $__internal_73fd72fb131f3820591eb2de7690f31426e7fb44b374c3dffefd233a55780a55->enter($__internal_73fd72fb131f3820591eb2de7690f31426e7fb44b374c3dffefd233a55780a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_73fd72fb131f3820591eb2de7690f31426e7fb44b374c3dffefd233a55780a55->leave($__internal_73fd72fb131f3820591eb2de7690f31426e7fb44b374c3dffefd233a55780a55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
