<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_b931a2c55048ca9b5dbce4be16db33e30ca7917d9b3c2ff9c178c7d7c5d1f8a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_2188684cd19f55b860bed836f9e79d2c4e8f7c83c57da4312c83bca49b0f48f2 = $this->env->getExtension("native_profiler");
        $__internal_2188684cd19f55b860bed836f9e79d2c4e8f7c83c57da4312c83bca49b0f48f2->enter($__internal_2188684cd19f55b860bed836f9e79d2c4e8f7c83c57da4312c83bca49b0f48f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2188684cd19f55b860bed836f9e79d2c4e8f7c83c57da4312c83bca49b0f48f2->leave($__internal_2188684cd19f55b860bed836f9e79d2c4e8f7c83c57da4312c83bca49b0f48f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fd9acd498e7b7f9be31d648abd2a1679c48d372bc13229719dc3ac54e7dcfe3 = $this->env->getExtension("native_profiler");
        $__internal_6fd9acd498e7b7f9be31d648abd2a1679c48d372bc13229719dc3ac54e7dcfe3->enter($__internal_6fd9acd498e7b7f9be31d648abd2a1679c48d372bc13229719dc3ac54e7dcfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6fd9acd498e7b7f9be31d648abd2a1679c48d372bc13229719dc3ac54e7dcfe3->leave($__internal_6fd9acd498e7b7f9be31d648abd2a1679c48d372bc13229719dc3ac54e7dcfe3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a478a7219e2a06af4345398f3b33abad6841e867f30dca24c342e8f7d803ee1 = $this->env->getExtension("native_profiler");
        $__internal_5a478a7219e2a06af4345398f3b33abad6841e867f30dca24c342e8f7d803ee1->enter($__internal_5a478a7219e2a06af4345398f3b33abad6841e867f30dca24c342e8f7d803ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5a478a7219e2a06af4345398f3b33abad6841e867f30dca24c342e8f7d803ee1->leave($__internal_5a478a7219e2a06af4345398f3b33abad6841e867f30dca24c342e8f7d803ee1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
