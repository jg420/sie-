<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6f6557cc096d38a065f88b4e69417f242f25c3265ebc0a5c0e938a5eb6483768 extends Twig_Template
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
        $__internal_1b654de3468a6227c7c86dc8792d24928db508b7056d52c300e846de8960bca4 = $this->env->getExtension("native_profiler");
        $__internal_1b654de3468a6227c7c86dc8792d24928db508b7056d52c300e846de8960bca4->enter($__internal_1b654de3468a6227c7c86dc8792d24928db508b7056d52c300e846de8960bca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1b654de3468a6227c7c86dc8792d24928db508b7056d52c300e846de8960bca4->leave($__internal_1b654de3468a6227c7c86dc8792d24928db508b7056d52c300e846de8960bca4_prof);

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
