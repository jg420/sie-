<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1b78e4b3dc674d65478b6805c3f418daca9f4056c0d7ddc3262d1b44b2994fbf extends Twig_Template
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
        $__internal_843e46d7184f0fd0436841324a7b5ffcabc65abfec98314eb8859d96387879e5 = $this->env->getExtension("native_profiler");
        $__internal_843e46d7184f0fd0436841324a7b5ffcabc65abfec98314eb8859d96387879e5->enter($__internal_843e46d7184f0fd0436841324a7b5ffcabc65abfec98314eb8859d96387879e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_843e46d7184f0fd0436841324a7b5ffcabc65abfec98314eb8859d96387879e5->leave($__internal_843e46d7184f0fd0436841324a7b5ffcabc65abfec98314eb8859d96387879e5_prof);

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
