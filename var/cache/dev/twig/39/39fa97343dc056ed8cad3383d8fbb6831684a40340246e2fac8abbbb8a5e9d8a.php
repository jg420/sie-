<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_547a1ead785f5d545d63029aa9004dceaa0e0e4ccf5cf9639ecc2e6cd6f8f508 extends Twig_Template
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
        $__internal_ba90644832c8eeb2ce0df9cc08936c0988a3ecea338bfe1c7e389021e59c9b0e = $this->env->getExtension("native_profiler");
        $__internal_ba90644832c8eeb2ce0df9cc08936c0988a3ecea338bfe1c7e389021e59c9b0e->enter($__internal_ba90644832c8eeb2ce0df9cc08936c0988a3ecea338bfe1c7e389021e59c9b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ba90644832c8eeb2ce0df9cc08936c0988a3ecea338bfe1c7e389021e59c9b0e->leave($__internal_ba90644832c8eeb2ce0df9cc08936c0988a3ecea338bfe1c7e389021e59c9b0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
