<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_10a543587181c298877fff6a60cd96d36496062b1fa49b456b32866278b44a3f extends Twig_Template
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
        $__internal_43185bdcbde1762dd762b245edf7a24aef6751d4a7eccd4055909b879f938403 = $this->env->getExtension("native_profiler");
        $__internal_43185bdcbde1762dd762b245edf7a24aef6751d4a7eccd4055909b879f938403->enter($__internal_43185bdcbde1762dd762b245edf7a24aef6751d4a7eccd4055909b879f938403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_43185bdcbde1762dd762b245edf7a24aef6751d4a7eccd4055909b879f938403->leave($__internal_43185bdcbde1762dd762b245edf7a24aef6751d4a7eccd4055909b879f938403_prof);

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
