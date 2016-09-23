<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c2aa9f3fc6adad5d19b77c276ac5ddf20878ed37f1cb336ee16edb2e5e196256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b7b8c86ff6e178054a8ec21764444343932bf1785806273f87113b66987c87b = $this->env->getExtension("native_profiler");
        $__internal_8b7b8c86ff6e178054a8ec21764444343932bf1785806273f87113b66987c87b->enter($__internal_8b7b8c86ff6e178054a8ec21764444343932bf1785806273f87113b66987c87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8b7b8c86ff6e178054a8ec21764444343932bf1785806273f87113b66987c87b->leave($__internal_8b7b8c86ff6e178054a8ec21764444343932bf1785806273f87113b66987c87b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_568eeee8752512d756ac77dd6efa22c4546795e30de3fbcbdf86ef0ca389061e = $this->env->getExtension("native_profiler");
        $__internal_568eeee8752512d756ac77dd6efa22c4546795e30de3fbcbdf86ef0ca389061e->enter($__internal_568eeee8752512d756ac77dd6efa22c4546795e30de3fbcbdf86ef0ca389061e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_568eeee8752512d756ac77dd6efa22c4546795e30de3fbcbdf86ef0ca389061e->leave($__internal_568eeee8752512d756ac77dd6efa22c4546795e30de3fbcbdf86ef0ca389061e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
