<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1e0ab1ba3ec851fd592367d5fcf7df5e0574aa79be3a2349c464beea9caba5af extends Twig_Template
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
        $__internal_67d68cbd91c0d76244221f977f400ce5c0cbeb7098b62d10843cb390f8d7224e = $this->env->getExtension("native_profiler");
        $__internal_67d68cbd91c0d76244221f977f400ce5c0cbeb7098b62d10843cb390f8d7224e->enter($__internal_67d68cbd91c0d76244221f977f400ce5c0cbeb7098b62d10843cb390f8d7224e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_67d68cbd91c0d76244221f977f400ce5c0cbeb7098b62d10843cb390f8d7224e->leave($__internal_67d68cbd91c0d76244221f977f400ce5c0cbeb7098b62d10843cb390f8d7224e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
