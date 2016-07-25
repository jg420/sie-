<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f818c40d633d3bf891fcf6c1140a2531c63e4bca8f0b4728a65a5fd21798f29d extends Twig_Template
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
        $__internal_3f3b40e67b12dceccf4da9689cc6fc92b3cb322a4dadb8a4ed40bdcb0cd1f522 = $this->env->getExtension("native_profiler");
        $__internal_3f3b40e67b12dceccf4da9689cc6fc92b3cb322a4dadb8a4ed40bdcb0cd1f522->enter($__internal_3f3b40e67b12dceccf4da9689cc6fc92b3cb322a4dadb8a4ed40bdcb0cd1f522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3f3b40e67b12dceccf4da9689cc6fc92b3cb322a4dadb8a4ed40bdcb0cd1f522->leave($__internal_3f3b40e67b12dceccf4da9689cc6fc92b3cb322a4dadb8a4ed40bdcb0cd1f522_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
