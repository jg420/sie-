<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0b20ce7d65c5e3727689fa414443a38ee296702d24e2317b5e6332fbfced83f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ae9250b11e62908def257b6de9a8a2afd5a8cdf1b40c6016e09609f4c32edef0 = $this->env->getExtension("native_profiler");
        $__internal_ae9250b11e62908def257b6de9a8a2afd5a8cdf1b40c6016e09609f4c32edef0->enter($__internal_ae9250b11e62908def257b6de9a8a2afd5a8cdf1b40c6016e09609f4c32edef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae9250b11e62908def257b6de9a8a2afd5a8cdf1b40c6016e09609f4c32edef0->leave($__internal_ae9250b11e62908def257b6de9a8a2afd5a8cdf1b40c6016e09609f4c32edef0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_20c4bb7489fc007ad20faf798021063730e761a94a503f183ed4c25563d4fac2 = $this->env->getExtension("native_profiler");
        $__internal_20c4bb7489fc007ad20faf798021063730e761a94a503f183ed4c25563d4fac2->enter($__internal_20c4bb7489fc007ad20faf798021063730e761a94a503f183ed4c25563d4fac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_20c4bb7489fc007ad20faf798021063730e761a94a503f183ed4c25563d4fac2->leave($__internal_20c4bb7489fc007ad20faf798021063730e761a94a503f183ed4c25563d4fac2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_99b9de45eac46ddd4171ac799771156eeb15a9d487d1ccd07689497d7da9a247 = $this->env->getExtension("native_profiler");
        $__internal_99b9de45eac46ddd4171ac799771156eeb15a9d487d1ccd07689497d7da9a247->enter($__internal_99b9de45eac46ddd4171ac799771156eeb15a9d487d1ccd07689497d7da9a247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_99b9de45eac46ddd4171ac799771156eeb15a9d487d1ccd07689497d7da9a247->leave($__internal_99b9de45eac46ddd4171ac799771156eeb15a9d487d1ccd07689497d7da9a247_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
