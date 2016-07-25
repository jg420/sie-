<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_41c4de8a6922540b07f0240cacf7c49deae85b5ecd04855630de8ac011223d42 extends Twig_Template
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
        $__internal_dcaa0bf49df04dd95cad0c6553480ee2531b02c7e7bb8fd916dfe955355b69e1 = $this->env->getExtension("native_profiler");
        $__internal_dcaa0bf49df04dd95cad0c6553480ee2531b02c7e7bb8fd916dfe955355b69e1->enter($__internal_dcaa0bf49df04dd95cad0c6553480ee2531b02c7e7bb8fd916dfe955355b69e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_dcaa0bf49df04dd95cad0c6553480ee2531b02c7e7bb8fd916dfe955355b69e1->leave($__internal_dcaa0bf49df04dd95cad0c6553480ee2531b02c7e7bb8fd916dfe955355b69e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
