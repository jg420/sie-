<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_69597f2926fd31bab90f902f6a8b60eff75028ab482e93a5990fa3c947f5e00e extends Twig_Template
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
        $__internal_07643ffbfd4d18e8d392d747620b5e8f336d9aa2eb8b4be2a68083dbc113addc = $this->env->getExtension("native_profiler");
        $__internal_07643ffbfd4d18e8d392d747620b5e8f336d9aa2eb8b4be2a68083dbc113addc->enter($__internal_07643ffbfd4d18e8d392d747620b5e8f336d9aa2eb8b4be2a68083dbc113addc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_07643ffbfd4d18e8d392d747620b5e8f336d9aa2eb8b4be2a68083dbc113addc->leave($__internal_07643ffbfd4d18e8d392d747620b5e8f336d9aa2eb8b4be2a68083dbc113addc_prof);

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
