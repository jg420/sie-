<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_08575ef5f92205053d7e870b92a55d65e75926eea24f39cfc716f29ead22f9e2 extends Twig_Template
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
        $__internal_2eab32a02ec21b045fecade65dd4721afb43207ee78f97e5ab30032dcff0bca5 = $this->env->getExtension("native_profiler");
        $__internal_2eab32a02ec21b045fecade65dd4721afb43207ee78f97e5ab30032dcff0bca5->enter($__internal_2eab32a02ec21b045fecade65dd4721afb43207ee78f97e5ab30032dcff0bca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2eab32a02ec21b045fecade65dd4721afb43207ee78f97e5ab30032dcff0bca5->leave($__internal_2eab32a02ec21b045fecade65dd4721afb43207ee78f97e5ab30032dcff0bca5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_829d32d2b5e853d038963e2b2e329c9fc5526762eaccae624bfa6a22ff4dd822 = $this->env->getExtension("native_profiler");
        $__internal_829d32d2b5e853d038963e2b2e329c9fc5526762eaccae624bfa6a22ff4dd822->enter($__internal_829d32d2b5e853d038963e2b2e329c9fc5526762eaccae624bfa6a22ff4dd822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_829d32d2b5e853d038963e2b2e329c9fc5526762eaccae624bfa6a22ff4dd822->leave($__internal_829d32d2b5e853d038963e2b2e329c9fc5526762eaccae624bfa6a22ff4dd822_prof);

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
