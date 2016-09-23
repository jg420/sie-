<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8c13cc539184eb90fb6350c9bb8ab01bd2559a39d2e27e6a55acfa893ee710df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_07424883c45044bb1fc37b0d341f5468f4e8d48f2301cb584fe904b595475783 = $this->env->getExtension("native_profiler");
        $__internal_07424883c45044bb1fc37b0d341f5468f4e8d48f2301cb584fe904b595475783->enter($__internal_07424883c45044bb1fc37b0d341f5468f4e8d48f2301cb584fe904b595475783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07424883c45044bb1fc37b0d341f5468f4e8d48f2301cb584fe904b595475783->leave($__internal_07424883c45044bb1fc37b0d341f5468f4e8d48f2301cb584fe904b595475783_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_35aa9650a3cbef0b3761086912cab3bc15e5b9725534d92415df5602ba036c37 = $this->env->getExtension("native_profiler");
        $__internal_35aa9650a3cbef0b3761086912cab3bc15e5b9725534d92415df5602ba036c37->enter($__internal_35aa9650a3cbef0b3761086912cab3bc15e5b9725534d92415df5602ba036c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_35aa9650a3cbef0b3761086912cab3bc15e5b9725534d92415df5602ba036c37->leave($__internal_35aa9650a3cbef0b3761086912cab3bc15e5b9725534d92415df5602ba036c37_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f32009402b76553a97fc4ba0aa999edd88ff3f2685bd66fb56cd3915e710b9a0 = $this->env->getExtension("native_profiler");
        $__internal_f32009402b76553a97fc4ba0aa999edd88ff3f2685bd66fb56cd3915e710b9a0->enter($__internal_f32009402b76553a97fc4ba0aa999edd88ff3f2685bd66fb56cd3915e710b9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f32009402b76553a97fc4ba0aa999edd88ff3f2685bd66fb56cd3915e710b9a0->leave($__internal_f32009402b76553a97fc4ba0aa999edd88ff3f2685bd66fb56cd3915e710b9a0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e560fd3502f72f32c87ed9f81da2318bdd9dadf878429075717cc8c81f08a8aa = $this->env->getExtension("native_profiler");
        $__internal_e560fd3502f72f32c87ed9f81da2318bdd9dadf878429075717cc8c81f08a8aa->enter($__internal_e560fd3502f72f32c87ed9f81da2318bdd9dadf878429075717cc8c81f08a8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e560fd3502f72f32c87ed9f81da2318bdd9dadf878429075717cc8c81f08a8aa->leave($__internal_e560fd3502f72f32c87ed9f81da2318bdd9dadf878429075717cc8c81f08a8aa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
