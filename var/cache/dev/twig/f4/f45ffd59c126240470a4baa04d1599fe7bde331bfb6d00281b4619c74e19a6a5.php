<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f84ef78c9b597fb1f7edadbab5ecaf63f6a844bd49c5dfdf95fc69ea42566839 extends Twig_Template
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
        $__internal_852bc32181cf5febb85b884bd5c4fb1cebe1c90923b4976741de989d542bbf19 = $this->env->getExtension("native_profiler");
        $__internal_852bc32181cf5febb85b884bd5c4fb1cebe1c90923b4976741de989d542bbf19->enter($__internal_852bc32181cf5febb85b884bd5c4fb1cebe1c90923b4976741de989d542bbf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_852bc32181cf5febb85b884bd5c4fb1cebe1c90923b4976741de989d542bbf19->leave($__internal_852bc32181cf5febb85b884bd5c4fb1cebe1c90923b4976741de989d542bbf19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
