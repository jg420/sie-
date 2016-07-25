<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_1ec7bc7185e9592b4669eb277a983fa92878ebc31a1f59c4ccb2df6b8c7e7f63 extends Twig_Template
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
        $__internal_0acec598866ade0a00e764cbad407428af5ccf4fdfe8bfb0e421599ce7b41155 = $this->env->getExtension("native_profiler");
        $__internal_0acec598866ade0a00e764cbad407428af5ccf4fdfe8bfb0e421599ce7b41155->enter($__internal_0acec598866ade0a00e764cbad407428af5ccf4fdfe8bfb0e421599ce7b41155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0acec598866ade0a00e764cbad407428af5ccf4fdfe8bfb0e421599ce7b41155->leave($__internal_0acec598866ade0a00e764cbad407428af5ccf4fdfe8bfb0e421599ce7b41155_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
