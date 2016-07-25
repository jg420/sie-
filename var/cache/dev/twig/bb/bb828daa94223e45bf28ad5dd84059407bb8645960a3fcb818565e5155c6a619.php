<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_38c6be67be3070fe92edb599e758e6e56333ddac127fcf1545c05c31e8cca37a extends Twig_Template
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
        $__internal_ebc389e4de074bb3d2e39696f81547608bff5ec99c53c57b7b58fdcc1672ffd3 = $this->env->getExtension("native_profiler");
        $__internal_ebc389e4de074bb3d2e39696f81547608bff5ec99c53c57b7b58fdcc1672ffd3->enter($__internal_ebc389e4de074bb3d2e39696f81547608bff5ec99c53c57b7b58fdcc1672ffd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ebc389e4de074bb3d2e39696f81547608bff5ec99c53c57b7b58fdcc1672ffd3->leave($__internal_ebc389e4de074bb3d2e39696f81547608bff5ec99c53c57b7b58fdcc1672ffd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
