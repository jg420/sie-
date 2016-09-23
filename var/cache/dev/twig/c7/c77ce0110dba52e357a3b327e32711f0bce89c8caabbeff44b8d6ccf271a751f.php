<?php

/* central/edit.html.twig */
class __TwigTemplate_7d165218a9788024f981eabf11d8a08da53d2606875f7bb9f2a1908b5037619e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "central/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe051bc65c4e741ebf1a6db94b2a2d2140a5d8f6d17da349b5c06a8831e5deab = $this->env->getExtension("native_profiler");
        $__internal_fe051bc65c4e741ebf1a6db94b2a2d2140a5d8f6d17da349b5c06a8831e5deab->enter($__internal_fe051bc65c4e741ebf1a6db94b2a2d2140a5d8f6d17da349b5c06a8831e5deab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "central/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe051bc65c4e741ebf1a6db94b2a2d2140a5d8f6d17da349b5c06a8831e5deab->leave($__internal_fe051bc65c4e741ebf1a6db94b2a2d2140a5d8f6d17da349b5c06a8831e5deab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_114d078171c152634e19c6847e9253c7953d040b326056c2e2afc45a302e4310 = $this->env->getExtension("native_profiler");
        $__internal_114d078171c152634e19c6847e9253c7953d040b326056c2e2afc45a302e4310->enter($__internal_114d078171c152634e19c6847e9253c7953d040b326056c2e2afc45a302e4310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Central edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("central_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_114d078171c152634e19c6847e9253c7953d040b326056c2e2afc45a302e4310->leave($__internal_114d078171c152634e19c6847e9253c7953d040b326056c2e2afc45a302e4310_prof);

    }

    public function getTemplateName()
    {
        return "central/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Central edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('central_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
