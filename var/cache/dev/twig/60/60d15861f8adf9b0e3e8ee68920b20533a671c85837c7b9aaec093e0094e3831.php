<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_df60d378c00f3ef476db1934518c446491cea4bd0fb75e903bde8c5b90398f30 extends Twig_Template
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
        $__internal_65e793a627614e5c1ac4d1be3fcd3c199d8ca2352c46a26e2a662800ad7cbdcf = $this->env->getExtension("native_profiler");
        $__internal_65e793a627614e5c1ac4d1be3fcd3c199d8ca2352c46a26e2a662800ad7cbdcf->enter($__internal_65e793a627614e5c1ac4d1be3fcd3c199d8ca2352c46a26e2a662800ad7cbdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65e793a627614e5c1ac4d1be3fcd3c199d8ca2352c46a26e2a662800ad7cbdcf->leave($__internal_65e793a627614e5c1ac4d1be3fcd3c199d8ca2352c46a26e2a662800ad7cbdcf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9000a7880a02b046a468df0aec41506d40a76e4c2a1bc458bf65444cd1295d42 = $this->env->getExtension("native_profiler");
        $__internal_9000a7880a02b046a468df0aec41506d40a76e4c2a1bc458bf65444cd1295d42->enter($__internal_9000a7880a02b046a468df0aec41506d40a76e4c2a1bc458bf65444cd1295d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9000a7880a02b046a468df0aec41506d40a76e4c2a1bc458bf65444cd1295d42->leave($__internal_9000a7880a02b046a468df0aec41506d40a76e4c2a1bc458bf65444cd1295d42_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_37679774064cf86803598fd7b96219319affe14a0abd77913974bbef81ab71b2 = $this->env->getExtension("native_profiler");
        $__internal_37679774064cf86803598fd7b96219319affe14a0abd77913974bbef81ab71b2->enter($__internal_37679774064cf86803598fd7b96219319affe14a0abd77913974bbef81ab71b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_37679774064cf86803598fd7b96219319affe14a0abd77913974bbef81ab71b2->leave($__internal_37679774064cf86803598fd7b96219319affe14a0abd77913974bbef81ab71b2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dbb0c2684ba4390ac254794e84b9f1987b97883a97efe4ca87bb6092ef35c2c = $this->env->getExtension("native_profiler");
        $__internal_2dbb0c2684ba4390ac254794e84b9f1987b97883a97efe4ca87bb6092ef35c2c->enter($__internal_2dbb0c2684ba4390ac254794e84b9f1987b97883a97efe4ca87bb6092ef35c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2dbb0c2684ba4390ac254794e84b9f1987b97883a97efe4ca87bb6092ef35c2c->leave($__internal_2dbb0c2684ba4390ac254794e84b9f1987b97883a97efe4ca87bb6092ef35c2c_prof);

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
