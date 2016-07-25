<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_11d4db8d1f3c5b757a3b8ff0157d05e65a2fc03fea62e532a0ae15fa447b83d1 extends Twig_Template
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
        $__internal_2c20b1e3484f3eaddef83216947ad411bd5bc58de4d7857585b4384c8759d2a3 = $this->env->getExtension("native_profiler");
        $__internal_2c20b1e3484f3eaddef83216947ad411bd5bc58de4d7857585b4384c8759d2a3->enter($__internal_2c20b1e3484f3eaddef83216947ad411bd5bc58de4d7857585b4384c8759d2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2c20b1e3484f3eaddef83216947ad411bd5bc58de4d7857585b4384c8759d2a3->leave($__internal_2c20b1e3484f3eaddef83216947ad411bd5bc58de4d7857585b4384c8759d2a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
