<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8eba36bf82fea31bfb46c25d2dbfb336be3b084aed8d727beb6d826181931f2f extends Twig_Template
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
        $__internal_0ffa8b7aded125ad278679fd84cdd5c87a362daa6300978e900ca5b048c4743f = $this->env->getExtension("native_profiler");
        $__internal_0ffa8b7aded125ad278679fd84cdd5c87a362daa6300978e900ca5b048c4743f->enter($__internal_0ffa8b7aded125ad278679fd84cdd5c87a362daa6300978e900ca5b048c4743f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0ffa8b7aded125ad278679fd84cdd5c87a362daa6300978e900ca5b048c4743f->leave($__internal_0ffa8b7aded125ad278679fd84cdd5c87a362daa6300978e900ca5b048c4743f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'reset')) ?>*/
/* */
