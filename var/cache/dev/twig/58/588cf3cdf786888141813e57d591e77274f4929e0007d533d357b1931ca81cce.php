<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b2981712ee66b4eedd311797bead72def83d0c53ab086df297c841a07e1957ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af2b0435ab0ceddf78f9b535d2f2f89e8f3ab302cf833a55f618097fc7d9f42f = $this->env->getExtension("native_profiler");
        $__internal_af2b0435ab0ceddf78f9b535d2f2f89e8f3ab302cf833a55f618097fc7d9f42f->enter($__internal_af2b0435ab0ceddf78f9b535d2f2f89e8f3ab302cf833a55f618097fc7d9f42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af2b0435ab0ceddf78f9b535d2f2f89e8f3ab302cf833a55f618097fc7d9f42f->leave($__internal_af2b0435ab0ceddf78f9b535d2f2f89e8f3ab302cf833a55f618097fc7d9f42f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6970f775c295d6d6b8c1d320e770164add19d52ba481d68f89294606ea492fd2 = $this->env->getExtension("native_profiler");
        $__internal_6970f775c295d6d6b8c1d320e770164add19d52ba481d68f89294606ea492fd2->enter($__internal_6970f775c295d6d6b8c1d320e770164add19d52ba481d68f89294606ea492fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6970f775c295d6d6b8c1d320e770164add19d52ba481d68f89294606ea492fd2->leave($__internal_6970f775c295d6d6b8c1d320e770164add19d52ba481d68f89294606ea492fd2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0f3db1fe5a05b1564c527bba2dc4df0a63cf59349a381e07bd6d7f46a1c5d81 = $this->env->getExtension("native_profiler");
        $__internal_e0f3db1fe5a05b1564c527bba2dc4df0a63cf59349a381e07bd6d7f46a1c5d81->enter($__internal_e0f3db1fe5a05b1564c527bba2dc4df0a63cf59349a381e07bd6d7f46a1c5d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e0f3db1fe5a05b1564c527bba2dc4df0a63cf59349a381e07bd6d7f46a1c5d81->leave($__internal_e0f3db1fe5a05b1564c527bba2dc4df0a63cf59349a381e07bd6d7f46a1c5d81_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6745eac7f3077a1fb6951abb0323e057dd2d313dfa32facf4951d6a2488f5e45 = $this->env->getExtension("native_profiler");
        $__internal_6745eac7f3077a1fb6951abb0323e057dd2d313dfa32facf4951d6a2488f5e45->enter($__internal_6745eac7f3077a1fb6951abb0323e057dd2d313dfa32facf4951d6a2488f5e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6745eac7f3077a1fb6951abb0323e057dd2d313dfa32facf4951d6a2488f5e45->leave($__internal_6745eac7f3077a1fb6951abb0323e057dd2d313dfa32facf4951d6a2488f5e45_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
