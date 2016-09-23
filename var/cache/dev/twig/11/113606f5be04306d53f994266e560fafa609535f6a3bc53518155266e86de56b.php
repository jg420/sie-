<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_74838df5c02accfd42c495ce8777c3e84818bc7e4bd9f34b4a4f3a9d64a1b6e3 extends Twig_Template
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
        $__internal_62c10373b4b73a11ff7e03ac6b29493619e407a6a80886b4649b6f8214c48759 = $this->env->getExtension("native_profiler");
        $__internal_62c10373b4b73a11ff7e03ac6b29493619e407a6a80886b4649b6f8214c48759->enter($__internal_62c10373b4b73a11ff7e03ac6b29493619e407a6a80886b4649b6f8214c48759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_62c10373b4b73a11ff7e03ac6b29493619e407a6a80886b4649b6f8214c48759->leave($__internal_62c10373b4b73a11ff7e03ac6b29493619e407a6a80886b4649b6f8214c48759_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
