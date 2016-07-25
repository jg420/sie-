<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a9031af9fbda22b94b1eeb23e91e967a2a39540120345f813b8b719efdd658f4 extends Twig_Template
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
        $__internal_ed92e95bd657b53adb2f0fbb5916315ffd3497eb99360e9a61a930478394c6f2 = $this->env->getExtension("native_profiler");
        $__internal_ed92e95bd657b53adb2f0fbb5916315ffd3497eb99360e9a61a930478394c6f2->enter($__internal_ed92e95bd657b53adb2f0fbb5916315ffd3497eb99360e9a61a930478394c6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ed92e95bd657b53adb2f0fbb5916315ffd3497eb99360e9a61a930478394c6f2->leave($__internal_ed92e95bd657b53adb2f0fbb5916315ffd3497eb99360e9a61a930478394c6f2_prof);

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
