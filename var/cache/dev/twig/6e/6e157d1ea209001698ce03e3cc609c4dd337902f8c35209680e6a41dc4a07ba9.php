<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5a9fe11edf48817c000a7bcefe606b0501f6c01e1251d2aa4500920e0e5324dc extends Twig_Template
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
        $__internal_72c888cfa78fa7273f80f7ab0a8edb59bfd4d78dd8e12b2e9779033520ace564 = $this->env->getExtension("native_profiler");
        $__internal_72c888cfa78fa7273f80f7ab0a8edb59bfd4d78dd8e12b2e9779033520ace564->enter($__internal_72c888cfa78fa7273f80f7ab0a8edb59bfd4d78dd8e12b2e9779033520ace564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72c888cfa78fa7273f80f7ab0a8edb59bfd4d78dd8e12b2e9779033520ace564->leave($__internal_72c888cfa78fa7273f80f7ab0a8edb59bfd4d78dd8e12b2e9779033520ace564_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ef31a77dea20f011b563125397de757ddcc7f372b5035efd1bd494446d2b7e6d = $this->env->getExtension("native_profiler");
        $__internal_ef31a77dea20f011b563125397de757ddcc7f372b5035efd1bd494446d2b7e6d->enter($__internal_ef31a77dea20f011b563125397de757ddcc7f372b5035efd1bd494446d2b7e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ef31a77dea20f011b563125397de757ddcc7f372b5035efd1bd494446d2b7e6d->leave($__internal_ef31a77dea20f011b563125397de757ddcc7f372b5035efd1bd494446d2b7e6d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e11e3d9f502cd6746e2d304504717feafc3d78a5d8392ce3bc13e93218a97d24 = $this->env->getExtension("native_profiler");
        $__internal_e11e3d9f502cd6746e2d304504717feafc3d78a5d8392ce3bc13e93218a97d24->enter($__internal_e11e3d9f502cd6746e2d304504717feafc3d78a5d8392ce3bc13e93218a97d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e11e3d9f502cd6746e2d304504717feafc3d78a5d8392ce3bc13e93218a97d24->leave($__internal_e11e3d9f502cd6746e2d304504717feafc3d78a5d8392ce3bc13e93218a97d24_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f47050f772e8b96e5dd62bea660253e41b54cd1e4065b86f32b2bbe420a210e = $this->env->getExtension("native_profiler");
        $__internal_9f47050f772e8b96e5dd62bea660253e41b54cd1e4065b86f32b2bbe420a210e->enter($__internal_9f47050f772e8b96e5dd62bea660253e41b54cd1e4065b86f32b2bbe420a210e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9f47050f772e8b96e5dd62bea660253e41b54cd1e4065b86f32b2bbe420a210e->leave($__internal_9f47050f772e8b96e5dd62bea660253e41b54cd1e4065b86f32b2bbe420a210e_prof);

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
