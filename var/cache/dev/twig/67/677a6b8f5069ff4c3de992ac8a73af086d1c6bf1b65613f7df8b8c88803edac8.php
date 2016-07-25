<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2256222290349eeb17cc183b8bea553cd76a09be53e8015e438e43446cb2db32 extends Twig_Template
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
        $__internal_bafc97a88546c285ff4ecbd2a098889dfb5b64f460f33be2a617d82ccc9c50ec = $this->env->getExtension("native_profiler");
        $__internal_bafc97a88546c285ff4ecbd2a098889dfb5b64f460f33be2a617d82ccc9c50ec->enter($__internal_bafc97a88546c285ff4ecbd2a098889dfb5b64f460f33be2a617d82ccc9c50ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bafc97a88546c285ff4ecbd2a098889dfb5b64f460f33be2a617d82ccc9c50ec->leave($__internal_bafc97a88546c285ff4ecbd2a098889dfb5b64f460f33be2a617d82ccc9c50ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
