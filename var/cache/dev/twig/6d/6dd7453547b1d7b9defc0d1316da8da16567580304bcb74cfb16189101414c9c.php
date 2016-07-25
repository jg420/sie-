<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_bdb509881108646cf91d5c457358f4703d6a74f3699390d44cebfb81e7a6c40b extends Twig_Template
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
        $__internal_3060ef53d1b31d563cb434c78883d38c7702cf45e4065e9031fc915ef3ddc478 = $this->env->getExtension("native_profiler");
        $__internal_3060ef53d1b31d563cb434c78883d38c7702cf45e4065e9031fc915ef3ddc478->enter($__internal_3060ef53d1b31d563cb434c78883d38c7702cf45e4065e9031fc915ef3ddc478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3060ef53d1b31d563cb434c78883d38c7702cf45e4065e9031fc915ef3ddc478->leave($__internal_3060ef53d1b31d563cb434c78883d38c7702cf45e4065e9031fc915ef3ddc478_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
