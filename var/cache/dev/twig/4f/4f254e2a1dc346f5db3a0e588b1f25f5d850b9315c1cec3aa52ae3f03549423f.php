<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_aa166bad24fc8f2f7c6b69beb1324ed87e934a92adfb4599f1dbdd1b4ffcb50e extends Twig_Template
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
        $__internal_5db04c1094f0c1ff814dd084dbde36a906307ef41900a4d20291746e2f5bceb5 = $this->env->getExtension("native_profiler");
        $__internal_5db04c1094f0c1ff814dd084dbde36a906307ef41900a4d20291746e2f5bceb5->enter($__internal_5db04c1094f0c1ff814dd084dbde36a906307ef41900a4d20291746e2f5bceb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5db04c1094f0c1ff814dd084dbde36a906307ef41900a4d20291746e2f5bceb5->leave($__internal_5db04c1094f0c1ff814dd084dbde36a906307ef41900a4d20291746e2f5bceb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
