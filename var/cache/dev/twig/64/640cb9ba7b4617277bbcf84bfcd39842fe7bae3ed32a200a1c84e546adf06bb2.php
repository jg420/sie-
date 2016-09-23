<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3020bebeaecea6c5a1d581fe8c60661a86514e4a085b5711147f8cd278b18f92 extends Twig_Template
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
        $__internal_079a2c0810d7a22aeb93e138b710bb1f8df7f66139bea3c991a5c6c3e2a3bf99 = $this->env->getExtension("native_profiler");
        $__internal_079a2c0810d7a22aeb93e138b710bb1f8df7f66139bea3c991a5c6c3e2a3bf99->enter($__internal_079a2c0810d7a22aeb93e138b710bb1f8df7f66139bea3c991a5c6c3e2a3bf99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_079a2c0810d7a22aeb93e138b710bb1f8df7f66139bea3c991a5c6c3e2a3bf99->leave($__internal_079a2c0810d7a22aeb93e138b710bb1f8df7f66139bea3c991a5c6c3e2a3bf99_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ae1da20964671f3d82e017bb5ec08b0d08993006d6cd32c404a25efb1c5d5ba = $this->env->getExtension("native_profiler");
        $__internal_2ae1da20964671f3d82e017bb5ec08b0d08993006d6cd32c404a25efb1c5d5ba->enter($__internal_2ae1da20964671f3d82e017bb5ec08b0d08993006d6cd32c404a25efb1c5d5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2ae1da20964671f3d82e017bb5ec08b0d08993006d6cd32c404a25efb1c5d5ba->leave($__internal_2ae1da20964671f3d82e017bb5ec08b0d08993006d6cd32c404a25efb1c5d5ba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_92ccdfc816f7671b09b10fe23ffd55b6e2e8b5ad4aa1682127f9d7b537960c16 = $this->env->getExtension("native_profiler");
        $__internal_92ccdfc816f7671b09b10fe23ffd55b6e2e8b5ad4aa1682127f9d7b537960c16->enter($__internal_92ccdfc816f7671b09b10fe23ffd55b6e2e8b5ad4aa1682127f9d7b537960c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_92ccdfc816f7671b09b10fe23ffd55b6e2e8b5ad4aa1682127f9d7b537960c16->leave($__internal_92ccdfc816f7671b09b10fe23ffd55b6e2e8b5ad4aa1682127f9d7b537960c16_prof);

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
