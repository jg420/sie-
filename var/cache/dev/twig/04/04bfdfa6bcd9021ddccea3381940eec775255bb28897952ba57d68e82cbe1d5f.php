<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_0cd2b3d526b02ec7445ceacaf534f7cebd88e9e408e45f2acac2443237bee1e5 extends Twig_Template
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
        $__internal_b38205d2d0345086468fc24d6d299bd682c3dc2e74c5fc7bf03ceb4a9dd419e4 = $this->env->getExtension("native_profiler");
        $__internal_b38205d2d0345086468fc24d6d299bd682c3dc2e74c5fc7bf03ceb4a9dd419e4->enter($__internal_b38205d2d0345086468fc24d6d299bd682c3dc2e74c5fc7bf03ceb4a9dd419e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b38205d2d0345086468fc24d6d299bd682c3dc2e74c5fc7bf03ceb4a9dd419e4->leave($__internal_b38205d2d0345086468fc24d6d299bd682c3dc2e74c5fc7bf03ceb4a9dd419e4_prof);

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
