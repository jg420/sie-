<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_405319c5c18672c33e790de5a45712f3183be83466f15a2978b4ffe0599b04df extends Twig_Template
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
        $__internal_c560f8993ac3400b3f314ff05d23847e75887e40e6b78fe3220520ac6a2f260e = $this->env->getExtension("native_profiler");
        $__internal_c560f8993ac3400b3f314ff05d23847e75887e40e6b78fe3220520ac6a2f260e->enter($__internal_c560f8993ac3400b3f314ff05d23847e75887e40e6b78fe3220520ac6a2f260e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c560f8993ac3400b3f314ff05d23847e75887e40e6b78fe3220520ac6a2f260e->leave($__internal_c560f8993ac3400b3f314ff05d23847e75887e40e6b78fe3220520ac6a2f260e_prof);

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
