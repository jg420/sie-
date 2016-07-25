<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_767cca5622df4554c7c4c73c95711ceae0f2601bd82720300e3c8297c2a32fc2 extends Twig_Template
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
        $__internal_9404dacfe2c38e65e12d8bdf8ce3e8f77774134f67fd1dcc2074498210c75ee7 = $this->env->getExtension("native_profiler");
        $__internal_9404dacfe2c38e65e12d8bdf8ce3e8f77774134f67fd1dcc2074498210c75ee7->enter($__internal_9404dacfe2c38e65e12d8bdf8ce3e8f77774134f67fd1dcc2074498210c75ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9404dacfe2c38e65e12d8bdf8ce3e8f77774134f67fd1dcc2074498210c75ee7->leave($__internal_9404dacfe2c38e65e12d8bdf8ce3e8f77774134f67fd1dcc2074498210c75ee7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
