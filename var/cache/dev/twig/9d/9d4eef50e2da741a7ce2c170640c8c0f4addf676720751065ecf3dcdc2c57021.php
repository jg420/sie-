<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c15644430e3165a91173606f01ffb5ef6fe31b7b8b4000de873c246486800386 extends Twig_Template
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
        $__internal_2566a29cc6b07ec2073f159036141d9dc61be24efbd72e689048311ac6adec57 = $this->env->getExtension("native_profiler");
        $__internal_2566a29cc6b07ec2073f159036141d9dc61be24efbd72e689048311ac6adec57->enter($__internal_2566a29cc6b07ec2073f159036141d9dc61be24efbd72e689048311ac6adec57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_2566a29cc6b07ec2073f159036141d9dc61be24efbd72e689048311ac6adec57->leave($__internal_2566a29cc6b07ec2073f159036141d9dc61be24efbd72e689048311ac6adec57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
