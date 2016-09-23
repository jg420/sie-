<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e77e3f329fc8bb920e9872f1cf095f71fb2ca597a0c63fb1c3988ebc6f5131ac extends Twig_Template
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
        $__internal_9b80dfb47abe035aff9e6e3fca6229f4d2af95b29f02af4bb17acc5d135f8aee = $this->env->getExtension("native_profiler");
        $__internal_9b80dfb47abe035aff9e6e3fca6229f4d2af95b29f02af4bb17acc5d135f8aee->enter($__internal_9b80dfb47abe035aff9e6e3fca6229f4d2af95b29f02af4bb17acc5d135f8aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9b80dfb47abe035aff9e6e3fca6229f4d2af95b29f02af4bb17acc5d135f8aee->leave($__internal_9b80dfb47abe035aff9e6e3fca6229f4d2af95b29f02af4bb17acc5d135f8aee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
