<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_70ebc71431ac0b8fedcaa20979f8ada2100999f5f0234bab8f41db1a6581e35b extends Twig_Template
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
        $__internal_fb2ebd883255da3f73ff4f17f479b97b4fec78f40e80469d60a2218e8b20dcfb = $this->env->getExtension("native_profiler");
        $__internal_fb2ebd883255da3f73ff4f17f479b97b4fec78f40e80469d60a2218e8b20dcfb->enter($__internal_fb2ebd883255da3f73ff4f17f479b97b4fec78f40e80469d60a2218e8b20dcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_fb2ebd883255da3f73ff4f17f479b97b4fec78f40e80469d60a2218e8b20dcfb->leave($__internal_fb2ebd883255da3f73ff4f17f479b97b4fec78f40e80469d60a2218e8b20dcfb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
