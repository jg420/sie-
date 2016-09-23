<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6c58ee59c3eb5d51e65f1af3b93934c8e119bccedf0298fc7a75d9864acc7e47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1bb9978d312b29bec4356aedddbfb61468e94acee27eadf34ea8c6d00e5ddfb6 = $this->env->getExtension("native_profiler");
        $__internal_1bb9978d312b29bec4356aedddbfb61468e94acee27eadf34ea8c6d00e5ddfb6->enter($__internal_1bb9978d312b29bec4356aedddbfb61468e94acee27eadf34ea8c6d00e5ddfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bb9978d312b29bec4356aedddbfb61468e94acee27eadf34ea8c6d00e5ddfb6->leave($__internal_1bb9978d312b29bec4356aedddbfb61468e94acee27eadf34ea8c6d00e5ddfb6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bbe794348e93c34556df5b09b7255952bda2e70bb69104d51b426ffc8d40daf4 = $this->env->getExtension("native_profiler");
        $__internal_bbe794348e93c34556df5b09b7255952bda2e70bb69104d51b426ffc8d40daf4->enter($__internal_bbe794348e93c34556df5b09b7255952bda2e70bb69104d51b426ffc8d40daf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bbe794348e93c34556df5b09b7255952bda2e70bb69104d51b426ffc8d40daf4->leave($__internal_bbe794348e93c34556df5b09b7255952bda2e70bb69104d51b426ffc8d40daf4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a267e9ff992aa7059778ab867990516e8f1b3aa8308116d57937c33779f8628 = $this->env->getExtension("native_profiler");
        $__internal_4a267e9ff992aa7059778ab867990516e8f1b3aa8308116d57937c33779f8628->enter($__internal_4a267e9ff992aa7059778ab867990516e8f1b3aa8308116d57937c33779f8628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4a267e9ff992aa7059778ab867990516e8f1b3aa8308116d57937c33779f8628->leave($__internal_4a267e9ff992aa7059778ab867990516e8f1b3aa8308116d57937c33779f8628_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4b9014dea417f0a6d52abe075946f915de9ec42088b27f6c8e7da16aa4df78b = $this->env->getExtension("native_profiler");
        $__internal_a4b9014dea417f0a6d52abe075946f915de9ec42088b27f6c8e7da16aa4df78b->enter($__internal_a4b9014dea417f0a6d52abe075946f915de9ec42088b27f6c8e7da16aa4df78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a4b9014dea417f0a6d52abe075946f915de9ec42088b27f6c8e7da16aa4df78b->leave($__internal_a4b9014dea417f0a6d52abe075946f915de9ec42088b27f6c8e7da16aa4df78b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
