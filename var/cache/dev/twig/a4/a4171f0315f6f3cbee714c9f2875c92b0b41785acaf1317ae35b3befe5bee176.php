<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b258848d0a48c80d64de4e8fe7c694f04f748b13e4c02591784df1df987f0fb8 extends Twig_Template
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
        $__internal_2abe5e14d65f2fdab20935a3c8d290a152f238e35eae68d8c7b52340c2d8d59b = $this->env->getExtension("native_profiler");
        $__internal_2abe5e14d65f2fdab20935a3c8d290a152f238e35eae68d8c7b52340c2d8d59b->enter($__internal_2abe5e14d65f2fdab20935a3c8d290a152f238e35eae68d8c7b52340c2d8d59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_2abe5e14d65f2fdab20935a3c8d290a152f238e35eae68d8c7b52340c2d8d59b->leave($__internal_2abe5e14d65f2fdab20935a3c8d290a152f238e35eae68d8c7b52340c2d8d59b_prof);

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
