<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3be663726511a9d6ed34621ef2de826b34775617c890133ffde08201c1bb0291 extends Twig_Template
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
        $__internal_392c9e9488637819818e5a1225a6f384b1c36f2022965e725bd822509c8fc6d5 = $this->env->getExtension("native_profiler");
        $__internal_392c9e9488637819818e5a1225a6f384b1c36f2022965e725bd822509c8fc6d5->enter($__internal_392c9e9488637819818e5a1225a6f384b1c36f2022965e725bd822509c8fc6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_392c9e9488637819818e5a1225a6f384b1c36f2022965e725bd822509c8fc6d5->leave($__internal_392c9e9488637819818e5a1225a6f384b1c36f2022965e725bd822509c8fc6d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
