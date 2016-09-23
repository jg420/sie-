<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_e121d6bfa745861cbf0a7c934d869dc37dca73b80ce7c32acc07c6739b99e872 extends Twig_Template
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
        $__internal_95351b06c1a7f15bb0cfffc19b8f35063170a589753d1a6cd1e3445141582a5a = $this->env->getExtension("native_profiler");
        $__internal_95351b06c1a7f15bb0cfffc19b8f35063170a589753d1a6cd1e3445141582a5a->enter($__internal_95351b06c1a7f15bb0cfffc19b8f35063170a589753d1a6cd1e3445141582a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_95351b06c1a7f15bb0cfffc19b8f35063170a589753d1a6cd1e3445141582a5a->leave($__internal_95351b06c1a7f15bb0cfffc19b8f35063170a589753d1a6cd1e3445141582a5a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
