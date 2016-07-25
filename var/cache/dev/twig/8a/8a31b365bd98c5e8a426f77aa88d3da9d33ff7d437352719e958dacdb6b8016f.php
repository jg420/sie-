<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_569c9debefd4b9657be89ffbe7901e5a8ebd584668675d0f66afbe1c27cefa93 extends Twig_Template
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
        $__internal_896329ab7eb168dad96a5730526f3a6067841fabbf05fb08618a1681e80c5203 = $this->env->getExtension("native_profiler");
        $__internal_896329ab7eb168dad96a5730526f3a6067841fabbf05fb08618a1681e80c5203->enter($__internal_896329ab7eb168dad96a5730526f3a6067841fabbf05fb08618a1681e80c5203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_896329ab7eb168dad96a5730526f3a6067841fabbf05fb08618a1681e80c5203->leave($__internal_896329ab7eb168dad96a5730526f3a6067841fabbf05fb08618a1681e80c5203_prof);

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
