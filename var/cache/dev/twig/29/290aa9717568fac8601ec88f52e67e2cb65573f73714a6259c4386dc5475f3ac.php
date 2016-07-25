<?php

/* base.html.twig */
class __TwigTemplate_09fa026b1a777b63579ec4e499efc8c588f20f7ea2b04673cbd624eaace36418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fa627fcf6787eec38e2dbe8eff03190f5153da85a1e5e201621def2674c8422 = $this->env->getExtension("native_profiler");
        $__internal_7fa627fcf6787eec38e2dbe8eff03190f5153da85a1e5e201621def2674c8422->enter($__internal_7fa627fcf6787eec38e2dbe8eff03190f5153da85a1e5e201621def2674c8422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7fa627fcf6787eec38e2dbe8eff03190f5153da85a1e5e201621def2674c8422->leave($__internal_7fa627fcf6787eec38e2dbe8eff03190f5153da85a1e5e201621def2674c8422_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_be54023225604bdc42715545712a73fe421602e40930cf984e7487a832fd43b5 = $this->env->getExtension("native_profiler");
        $__internal_be54023225604bdc42715545712a73fe421602e40930cf984e7487a832fd43b5->enter($__internal_be54023225604bdc42715545712a73fe421602e40930cf984e7487a832fd43b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_be54023225604bdc42715545712a73fe421602e40930cf984e7487a832fd43b5->leave($__internal_be54023225604bdc42715545712a73fe421602e40930cf984e7487a832fd43b5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ccf2b2d1826145ac8934be3d3b19682f63334ba3d59d54920db3b5d021a3c34 = $this->env->getExtension("native_profiler");
        $__internal_5ccf2b2d1826145ac8934be3d3b19682f63334ba3d59d54920db3b5d021a3c34->enter($__internal_5ccf2b2d1826145ac8934be3d3b19682f63334ba3d59d54920db3b5d021a3c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5ccf2b2d1826145ac8934be3d3b19682f63334ba3d59d54920db3b5d021a3c34->leave($__internal_5ccf2b2d1826145ac8934be3d3b19682f63334ba3d59d54920db3b5d021a3c34_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd56b2aceb3fdf46f2dea1e7fabbd4be2ae5dd713a83e24388066dfcc23761b9 = $this->env->getExtension("native_profiler");
        $__internal_bd56b2aceb3fdf46f2dea1e7fabbd4be2ae5dd713a83e24388066dfcc23761b9->enter($__internal_bd56b2aceb3fdf46f2dea1e7fabbd4be2ae5dd713a83e24388066dfcc23761b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd56b2aceb3fdf46f2dea1e7fabbd4be2ae5dd713a83e24388066dfcc23761b9->leave($__internal_bd56b2aceb3fdf46f2dea1e7fabbd4be2ae5dd713a83e24388066dfcc23761b9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f94ad34e28f4d7ffb06ed2c78ba66adf0b547f24a11887c3ff1b41849ec80e2a = $this->env->getExtension("native_profiler");
        $__internal_f94ad34e28f4d7ffb06ed2c78ba66adf0b547f24a11887c3ff1b41849ec80e2a->enter($__internal_f94ad34e28f4d7ffb06ed2c78ba66adf0b547f24a11887c3ff1b41849ec80e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f94ad34e28f4d7ffb06ed2c78ba66adf0b547f24a11887c3ff1b41849ec80e2a->leave($__internal_f94ad34e28f4d7ffb06ed2c78ba66adf0b547f24a11887c3ff1b41849ec80e2a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
