<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ae0f50bfc048f6b81cb4743e25a28537212794f7497fa4ecc3098ed2ca793edb extends Twig_Template
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
        $__internal_1442e0955ba6d3caa247baf8d283fc3be2f4a0b622d625db260e51674e5844f0 = $this->env->getExtension("native_profiler");
        $__internal_1442e0955ba6d3caa247baf8d283fc3be2f4a0b622d625db260e51674e5844f0->enter($__internal_1442e0955ba6d3caa247baf8d283fc3be2f4a0b622d625db260e51674e5844f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1442e0955ba6d3caa247baf8d283fc3be2f4a0b622d625db260e51674e5844f0->leave($__internal_1442e0955ba6d3caa247baf8d283fc3be2f4a0b622d625db260e51674e5844f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
