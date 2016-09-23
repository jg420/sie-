<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d07bc10118d8013877628edc0e8375d055a04d21f8b02a5b2deaf58522e888f4 extends Twig_Template
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
        $__internal_ad5e9122e135fcdd20be914d764a52f796a40e9f2327a0a3ae9046bb9d86b15b = $this->env->getExtension("native_profiler");
        $__internal_ad5e9122e135fcdd20be914d764a52f796a40e9f2327a0a3ae9046bb9d86b15b->enter($__internal_ad5e9122e135fcdd20be914d764a52f796a40e9f2327a0a3ae9046bb9d86b15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ad5e9122e135fcdd20be914d764a52f796a40e9f2327a0a3ae9046bb9d86b15b->leave($__internal_ad5e9122e135fcdd20be914d764a52f796a40e9f2327a0a3ae9046bb9d86b15b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
