<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9ceec5547413014d5abd7d9f8313f1b58d8fbce7e8b0d6cbd6c48413b2c689ee extends Twig_Template
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
        $__internal_92279121ad481b992e1e9cd99d18fdb8937405fc1de24f28a6567288af417e81 = $this->env->getExtension("native_profiler");
        $__internal_92279121ad481b992e1e9cd99d18fdb8937405fc1de24f28a6567288af417e81->enter($__internal_92279121ad481b992e1e9cd99d18fdb8937405fc1de24f28a6567288af417e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_92279121ad481b992e1e9cd99d18fdb8937405fc1de24f28a6567288af417e81->leave($__internal_92279121ad481b992e1e9cd99d18fdb8937405fc1de24f28a6567288af417e81_prof);

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
