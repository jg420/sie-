<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_57482f8c1bcd5cef49f6982452108ef3aa8fded51bf23b4eb271fd9266fc69b8 extends Twig_Template
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
        $__internal_baf3d68ebacd52aa6fd2ef11b247cbe1363cddf2379b9a1b72ae35037130e3ea = $this->env->getExtension("native_profiler");
        $__internal_baf3d68ebacd52aa6fd2ef11b247cbe1363cddf2379b9a1b72ae35037130e3ea->enter($__internal_baf3d68ebacd52aa6fd2ef11b247cbe1363cddf2379b9a1b72ae35037130e3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_baf3d68ebacd52aa6fd2ef11b247cbe1363cddf2379b9a1b72ae35037130e3ea->leave($__internal_baf3d68ebacd52aa6fd2ef11b247cbe1363cddf2379b9a1b72ae35037130e3ea_prof);

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
