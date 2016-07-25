<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1ea75a44369e57a0e2c79a8f9179491f34dab1019384460b783ce97430f9bf92 extends Twig_Template
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
        $__internal_7725e8363d7798ed68323beb682e3df277cff4c13c50e46b096167f9f5037bc5 = $this->env->getExtension("native_profiler");
        $__internal_7725e8363d7798ed68323beb682e3df277cff4c13c50e46b096167f9f5037bc5->enter($__internal_7725e8363d7798ed68323beb682e3df277cff4c13c50e46b096167f9f5037bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7725e8363d7798ed68323beb682e3df277cff4c13c50e46b096167f9f5037bc5->leave($__internal_7725e8363d7798ed68323beb682e3df277cff4c13c50e46b096167f9f5037bc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
