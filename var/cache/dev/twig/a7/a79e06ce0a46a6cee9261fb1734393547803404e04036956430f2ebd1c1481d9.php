<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2f9badb8a5016815255249eb501228d122d581ece9fe11a0ae981b2fd2ccc6b6 extends Twig_Template
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
        $__internal_f91311ad1c0b0a44d57f01a90756d493b53fd3699dc0b186bd758a1c6a93abfd = $this->env->getExtension("native_profiler");
        $__internal_f91311ad1c0b0a44d57f01a90756d493b53fd3699dc0b186bd758a1c6a93abfd->enter($__internal_f91311ad1c0b0a44d57f01a90756d493b53fd3699dc0b186bd758a1c6a93abfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f91311ad1c0b0a44d57f01a90756d493b53fd3699dc0b186bd758a1c6a93abfd->leave($__internal_f91311ad1c0b0a44d57f01a90756d493b53fd3699dc0b186bd758a1c6a93abfd_prof);

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
