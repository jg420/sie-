<?php

/* ::base.html.twig */
class __TwigTemplate_1812e951c766c311a3f87abde60affcf91e7643e81794780ffa59e4f1d937c70 extends Twig_Template
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
        $__internal_b10ce9e0597eaf376c2dddb9f12930f2011a8ef312e0264f3ec030d0b328115f = $this->env->getExtension("native_profiler");
        $__internal_b10ce9e0597eaf376c2dddb9f12930f2011a8ef312e0264f3ec030d0b328115f->enter($__internal_b10ce9e0597eaf376c2dddb9f12930f2011a8ef312e0264f3ec030d0b328115f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b10ce9e0597eaf376c2dddb9f12930f2011a8ef312e0264f3ec030d0b328115f->leave($__internal_b10ce9e0597eaf376c2dddb9f12930f2011a8ef312e0264f3ec030d0b328115f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ddad3a48995ba357b7841f0b5d136703b24c743881818762306977bbfcb715c = $this->env->getExtension("native_profiler");
        $__internal_0ddad3a48995ba357b7841f0b5d136703b24c743881818762306977bbfcb715c->enter($__internal_0ddad3a48995ba357b7841f0b5d136703b24c743881818762306977bbfcb715c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0ddad3a48995ba357b7841f0b5d136703b24c743881818762306977bbfcb715c->leave($__internal_0ddad3a48995ba357b7841f0b5d136703b24c743881818762306977bbfcb715c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f5fc3baad8f8113cefa56933d318bed9509d753ce3b1be8b1be38bcdf34ce302 = $this->env->getExtension("native_profiler");
        $__internal_f5fc3baad8f8113cefa56933d318bed9509d753ce3b1be8b1be38bcdf34ce302->enter($__internal_f5fc3baad8f8113cefa56933d318bed9509d753ce3b1be8b1be38bcdf34ce302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f5fc3baad8f8113cefa56933d318bed9509d753ce3b1be8b1be38bcdf34ce302->leave($__internal_f5fc3baad8f8113cefa56933d318bed9509d753ce3b1be8b1be38bcdf34ce302_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e56cf75a82e1ae7dbe8f4e457ff06d23bdd96ae7d17df8d737bb58c4a593fe8 = $this->env->getExtension("native_profiler");
        $__internal_1e56cf75a82e1ae7dbe8f4e457ff06d23bdd96ae7d17df8d737bb58c4a593fe8->enter($__internal_1e56cf75a82e1ae7dbe8f4e457ff06d23bdd96ae7d17df8d737bb58c4a593fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e56cf75a82e1ae7dbe8f4e457ff06d23bdd96ae7d17df8d737bb58c4a593fe8->leave($__internal_1e56cf75a82e1ae7dbe8f4e457ff06d23bdd96ae7d17df8d737bb58c4a593fe8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a583055213c2c60f11b8a478552a0510d404a3d7033edea7d5222cf693593ba = $this->env->getExtension("native_profiler");
        $__internal_7a583055213c2c60f11b8a478552a0510d404a3d7033edea7d5222cf693593ba->enter($__internal_7a583055213c2c60f11b8a478552a0510d404a3d7033edea7d5222cf693593ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7a583055213c2c60f11b8a478552a0510d404a3d7033edea7d5222cf693593ba->leave($__internal_7a583055213c2c60f11b8a478552a0510d404a3d7033edea7d5222cf693593ba_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
