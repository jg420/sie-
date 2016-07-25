<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e431d4b64105ab530039fd4d3718c6d1dd90601f0e613c071949e288fa7f4204 extends Twig_Template
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
        $__internal_11a1fe6f06f4706889518feff37b9fbf6b8fc4746e25b42ad5d7b7e1d321d0d1 = $this->env->getExtension("native_profiler");
        $__internal_11a1fe6f06f4706889518feff37b9fbf6b8fc4746e25b42ad5d7b7e1d321d0d1->enter($__internal_11a1fe6f06f4706889518feff37b9fbf6b8fc4746e25b42ad5d7b7e1d321d0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_11a1fe6f06f4706889518feff37b9fbf6b8fc4746e25b42ad5d7b7e1d321d0d1->leave($__internal_11a1fe6f06f4706889518feff37b9fbf6b8fc4746e25b42ad5d7b7e1d321d0d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
