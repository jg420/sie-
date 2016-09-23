<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bd64755001a76fb72dfd98cf9760cd0f7aae617cc955c646447ad7b998cabab8 extends Twig_Template
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
        $__internal_7c9d9ec59e55f488bba1b2ed34a3ac011023c4451fa09108051e8cf39d00a4aa = $this->env->getExtension("native_profiler");
        $__internal_7c9d9ec59e55f488bba1b2ed34a3ac011023c4451fa09108051e8cf39d00a4aa->enter($__internal_7c9d9ec59e55f488bba1b2ed34a3ac011023c4451fa09108051e8cf39d00a4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7c9d9ec59e55f488bba1b2ed34a3ac011023c4451fa09108051e8cf39d00a4aa->leave($__internal_7c9d9ec59e55f488bba1b2ed34a3ac011023c4451fa09108051e8cf39d00a4aa_prof);

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
