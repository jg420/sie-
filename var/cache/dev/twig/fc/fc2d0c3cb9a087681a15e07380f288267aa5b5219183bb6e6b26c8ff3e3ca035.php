<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_770382797b3d3eaf575689131208d112d1648fac88a7003ac817a9bc36b957c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_447fe58d5b91d0acd5052b5c8b00893db0524d911f91867c7176eed2413b4e39 = $this->env->getExtension("native_profiler");
        $__internal_447fe58d5b91d0acd5052b5c8b00893db0524d911f91867c7176eed2413b4e39->enter($__internal_447fe58d5b91d0acd5052b5c8b00893db0524d911f91867c7176eed2413b4e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_447fe58d5b91d0acd5052b5c8b00893db0524d911f91867c7176eed2413b4e39->leave($__internal_447fe58d5b91d0acd5052b5c8b00893db0524d911f91867c7176eed2413b4e39_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
