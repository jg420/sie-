<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cccdcc0b4e3c7bd74fd66fcded805fb10d2a188b2a85f704d39279ee95e94c59 extends Twig_Template
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
        $__internal_e6442bba8da791f518aedf4cfcfa270640ffa4e9ebb76d0b2008a2278f2308ab = $this->env->getExtension("native_profiler");
        $__internal_e6442bba8da791f518aedf4cfcfa270640ffa4e9ebb76d0b2008a2278f2308ab->enter($__internal_e6442bba8da791f518aedf4cfcfa270640ffa4e9ebb76d0b2008a2278f2308ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e6442bba8da791f518aedf4cfcfa270640ffa4e9ebb76d0b2008a2278f2308ab->leave($__internal_e6442bba8da791f518aedf4cfcfa270640ffa4e9ebb76d0b2008a2278f2308ab_prof);

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
