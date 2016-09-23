<?php

/* base.html.twig */
class __TwigTemplate_0430e3596f4d630f45d517f11377fb0050a58ba8d3e7a96cd7fd10c89301a4d8 extends Twig_Template
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
        $__internal_9576422b72742eeba85e705b6a63d580bebff970e302e3ebca9d88a870018174 = $this->env->getExtension("native_profiler");
        $__internal_9576422b72742eeba85e705b6a63d580bebff970e302e3ebca9d88a870018174->enter($__internal_9576422b72742eeba85e705b6a63d580bebff970e302e3ebca9d88a870018174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9576422b72742eeba85e705b6a63d580bebff970e302e3ebca9d88a870018174->leave($__internal_9576422b72742eeba85e705b6a63d580bebff970e302e3ebca9d88a870018174_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4ccda6c9bb3c70e2957758ab352516360f8551c18f7d0a248611cbc5bc7468e = $this->env->getExtension("native_profiler");
        $__internal_a4ccda6c9bb3c70e2957758ab352516360f8551c18f7d0a248611cbc5bc7468e->enter($__internal_a4ccda6c9bb3c70e2957758ab352516360f8551c18f7d0a248611cbc5bc7468e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a4ccda6c9bb3c70e2957758ab352516360f8551c18f7d0a248611cbc5bc7468e->leave($__internal_a4ccda6c9bb3c70e2957758ab352516360f8551c18f7d0a248611cbc5bc7468e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e7cc3c3119d3876c606e594e759d61b86fdeeeeee95b5bb651603ba65c98c6e = $this->env->getExtension("native_profiler");
        $__internal_0e7cc3c3119d3876c606e594e759d61b86fdeeeeee95b5bb651603ba65c98c6e->enter($__internal_0e7cc3c3119d3876c606e594e759d61b86fdeeeeee95b5bb651603ba65c98c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0e7cc3c3119d3876c606e594e759d61b86fdeeeeee95b5bb651603ba65c98c6e->leave($__internal_0e7cc3c3119d3876c606e594e759d61b86fdeeeeee95b5bb651603ba65c98c6e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4022ebdddc2ea4c5f3cff4e5b1aa3eca9356ee72176b7fce5188767132ba4eb3 = $this->env->getExtension("native_profiler");
        $__internal_4022ebdddc2ea4c5f3cff4e5b1aa3eca9356ee72176b7fce5188767132ba4eb3->enter($__internal_4022ebdddc2ea4c5f3cff4e5b1aa3eca9356ee72176b7fce5188767132ba4eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4022ebdddc2ea4c5f3cff4e5b1aa3eca9356ee72176b7fce5188767132ba4eb3->leave($__internal_4022ebdddc2ea4c5f3cff4e5b1aa3eca9356ee72176b7fce5188767132ba4eb3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eecdcdca32d3db90f228ab132ba0db773bb5002344064a2fd9cfd71365211266 = $this->env->getExtension("native_profiler");
        $__internal_eecdcdca32d3db90f228ab132ba0db773bb5002344064a2fd9cfd71365211266->enter($__internal_eecdcdca32d3db90f228ab132ba0db773bb5002344064a2fd9cfd71365211266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eecdcdca32d3db90f228ab132ba0db773bb5002344064a2fd9cfd71365211266->leave($__internal_eecdcdca32d3db90f228ab132ba0db773bb5002344064a2fd9cfd71365211266_prof);

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
