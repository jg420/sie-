<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c0ca37a73ffa0e04ebe14575b6479c46004c6e5fa80573662e3a0479b84c1bca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_46897edf0560ac5c087ca3b3e4c45df91045aaa5e6db7af12f6a4feff377aa09 = $this->env->getExtension("native_profiler");
        $__internal_46897edf0560ac5c087ca3b3e4c45df91045aaa5e6db7af12f6a4feff377aa09->enter($__internal_46897edf0560ac5c087ca3b3e4c45df91045aaa5e6db7af12f6a4feff377aa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46897edf0560ac5c087ca3b3e4c45df91045aaa5e6db7af12f6a4feff377aa09->leave($__internal_46897edf0560ac5c087ca3b3e4c45df91045aaa5e6db7af12f6a4feff377aa09_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56b4ba83443a8fd781a0136c90d40197f5dd7debd4bb170f6b11aae054bcc112 = $this->env->getExtension("native_profiler");
        $__internal_56b4ba83443a8fd781a0136c90d40197f5dd7debd4bb170f6b11aae054bcc112->enter($__internal_56b4ba83443a8fd781a0136c90d40197f5dd7debd4bb170f6b11aae054bcc112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_56b4ba83443a8fd781a0136c90d40197f5dd7debd4bb170f6b11aae054bcc112->leave($__internal_56b4ba83443a8fd781a0136c90d40197f5dd7debd4bb170f6b11aae054bcc112_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_50875807d64ee7cbaeeb50721389a8a96fde64f4eb79a2bc4901388910e134a8 = $this->env->getExtension("native_profiler");
        $__internal_50875807d64ee7cbaeeb50721389a8a96fde64f4eb79a2bc4901388910e134a8->enter($__internal_50875807d64ee7cbaeeb50721389a8a96fde64f4eb79a2bc4901388910e134a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_50875807d64ee7cbaeeb50721389a8a96fde64f4eb79a2bc4901388910e134a8->leave($__internal_50875807d64ee7cbaeeb50721389a8a96fde64f4eb79a2bc4901388910e134a8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0d6c67bfe299947fbd302087edf0ff585aaa1d4f5893154c4f7fa9a729277ab = $this->env->getExtension("native_profiler");
        $__internal_f0d6c67bfe299947fbd302087edf0ff585aaa1d4f5893154c4f7fa9a729277ab->enter($__internal_f0d6c67bfe299947fbd302087edf0ff585aaa1d4f5893154c4f7fa9a729277ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f0d6c67bfe299947fbd302087edf0ff585aaa1d4f5893154c4f7fa9a729277ab->leave($__internal_f0d6c67bfe299947fbd302087edf0ff585aaa1d4f5893154c4f7fa9a729277ab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
