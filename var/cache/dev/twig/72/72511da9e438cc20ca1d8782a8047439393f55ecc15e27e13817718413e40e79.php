<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3dba99cf133f34ef0b89dd611df9caa0d5ef4dbb7af8ef6ad6d5d3f941410746 extends Twig_Template
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
        $__internal_77207ee1feddc916d1ad60f347b194fe0f0606e6fefdc3351282c21c8808b25c = $this->env->getExtension("native_profiler");
        $__internal_77207ee1feddc916d1ad60f347b194fe0f0606e6fefdc3351282c21c8808b25c->enter($__internal_77207ee1feddc916d1ad60f347b194fe0f0606e6fefdc3351282c21c8808b25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_77207ee1feddc916d1ad60f347b194fe0f0606e6fefdc3351282c21c8808b25c->leave($__internal_77207ee1feddc916d1ad60f347b194fe0f0606e6fefdc3351282c21c8808b25c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
