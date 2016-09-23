<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d8769fc84907e8cb58dff1007fd995e06c68bed9a4f288b1132d9d34ce35b74f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_3c22c7ceedba5cbb05e9626d1a1acd6e57d0a5f789cfe54049eed61489122b8b = $this->env->getExtension("native_profiler");
        $__internal_3c22c7ceedba5cbb05e9626d1a1acd6e57d0a5f789cfe54049eed61489122b8b->enter($__internal_3c22c7ceedba5cbb05e9626d1a1acd6e57d0a5f789cfe54049eed61489122b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c22c7ceedba5cbb05e9626d1a1acd6e57d0a5f789cfe54049eed61489122b8b->leave($__internal_3c22c7ceedba5cbb05e9626d1a1acd6e57d0a5f789cfe54049eed61489122b8b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b8c6893c0a34862ea946388c819f572915c3d0cdb211e62231db9e090c5dcfcf = $this->env->getExtension("native_profiler");
        $__internal_b8c6893c0a34862ea946388c819f572915c3d0cdb211e62231db9e090c5dcfcf->enter($__internal_b8c6893c0a34862ea946388c819f572915c3d0cdb211e62231db9e090c5dcfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b8c6893c0a34862ea946388c819f572915c3d0cdb211e62231db9e090c5dcfcf->leave($__internal_b8c6893c0a34862ea946388c819f572915c3d0cdb211e62231db9e090c5dcfcf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b62ef9fccfc0fb5f22fd91a31d221bb47db61c540dd383d1e6b1e4fc95c068b = $this->env->getExtension("native_profiler");
        $__internal_1b62ef9fccfc0fb5f22fd91a31d221bb47db61c540dd383d1e6b1e4fc95c068b->enter($__internal_1b62ef9fccfc0fb5f22fd91a31d221bb47db61c540dd383d1e6b1e4fc95c068b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1b62ef9fccfc0fb5f22fd91a31d221bb47db61c540dd383d1e6b1e4fc95c068b->leave($__internal_1b62ef9fccfc0fb5f22fd91a31d221bb47db61c540dd383d1e6b1e4fc95c068b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_385267ce366a5d8be226f59881fba891dcb62c4b33dd3a9458b50bd32c18606d = $this->env->getExtension("native_profiler");
        $__internal_385267ce366a5d8be226f59881fba891dcb62c4b33dd3a9458b50bd32c18606d->enter($__internal_385267ce366a5d8be226f59881fba891dcb62c4b33dd3a9458b50bd32c18606d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_385267ce366a5d8be226f59881fba891dcb62c4b33dd3a9458b50bd32c18606d->leave($__internal_385267ce366a5d8be226f59881fba891dcb62c4b33dd3a9458b50bd32c18606d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
