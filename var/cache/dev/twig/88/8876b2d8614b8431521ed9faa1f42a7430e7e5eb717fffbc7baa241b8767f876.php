<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2bf4ef41197f1adfef033245a6dbb2fc1d8f8ac930748e472bd353ac7b34f7e2 extends Twig_Template
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
        $__internal_a4aa253a8dec0b4cadac270f0f3152faba8359e48fab32adebf33aa178c47ec3 = $this->env->getExtension("native_profiler");
        $__internal_a4aa253a8dec0b4cadac270f0f3152faba8359e48fab32adebf33aa178c47ec3->enter($__internal_a4aa253a8dec0b4cadac270f0f3152faba8359e48fab32adebf33aa178c47ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_a4aa253a8dec0b4cadac270f0f3152faba8359e48fab32adebf33aa178c47ec3->leave($__internal_a4aa253a8dec0b4cadac270f0f3152faba8359e48fab32adebf33aa178c47ec3_prof);

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
