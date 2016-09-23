<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2354bc645452179ba7ffa0c7772704f4cbfc24f835d41080d517c2dd2b39c19a extends Twig_Template
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
        $__internal_4b046c454737850eac481e882ec5cbafc289c01be353fe42dfeff97f931c6b01 = $this->env->getExtension("native_profiler");
        $__internal_4b046c454737850eac481e882ec5cbafc289c01be353fe42dfeff97f931c6b01->enter($__internal_4b046c454737850eac481e882ec5cbafc289c01be353fe42dfeff97f931c6b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4b046c454737850eac481e882ec5cbafc289c01be353fe42dfeff97f931c6b01->leave($__internal_4b046c454737850eac481e882ec5cbafc289c01be353fe42dfeff97f931c6b01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
