<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_21c19bfb37084f6c0328d60e223ebafe2ae36dc8dc5718c55731d3060aa60e65 extends Twig_Template
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
        $__internal_889753fc08f7fa336e05d6218d6bb4602c36fb1f8a8b5bf5519952e279dd6e9b = $this->env->getExtension("native_profiler");
        $__internal_889753fc08f7fa336e05d6218d6bb4602c36fb1f8a8b5bf5519952e279dd6e9b->enter($__internal_889753fc08f7fa336e05d6218d6bb4602c36fb1f8a8b5bf5519952e279dd6e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_889753fc08f7fa336e05d6218d6bb4602c36fb1f8a8b5bf5519952e279dd6e9b->leave($__internal_889753fc08f7fa336e05d6218d6bb4602c36fb1f8a8b5bf5519952e279dd6e9b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
