<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2518febc64b3242470a7782bc0d532453d3b0962dc589d40541cd9063f3a1634 extends Twig_Template
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
        $__internal_0476c583379f9e2c49164ed9e65dadb1ce8a19cabb4756798221577ca24e02da = $this->env->getExtension("native_profiler");
        $__internal_0476c583379f9e2c49164ed9e65dadb1ce8a19cabb4756798221577ca24e02da->enter($__internal_0476c583379f9e2c49164ed9e65dadb1ce8a19cabb4756798221577ca24e02da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0476c583379f9e2c49164ed9e65dadb1ce8a19cabb4756798221577ca24e02da->leave($__internal_0476c583379f9e2c49164ed9e65dadb1ce8a19cabb4756798221577ca24e02da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
