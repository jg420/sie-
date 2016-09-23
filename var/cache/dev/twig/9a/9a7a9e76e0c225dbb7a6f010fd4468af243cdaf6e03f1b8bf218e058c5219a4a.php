<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_aa459569b3ac2b92f0548b99842cc8ab69d4aa50570dfc9bd6685a453c626dac extends Twig_Template
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
        $__internal_8ee2718a03392e56dd9fdb9ce94d04bc3dde0c6f58485d70a7e5801b97a771b4 = $this->env->getExtension("native_profiler");
        $__internal_8ee2718a03392e56dd9fdb9ce94d04bc3dde0c6f58485d70a7e5801b97a771b4->enter($__internal_8ee2718a03392e56dd9fdb9ce94d04bc3dde0c6f58485d70a7e5801b97a771b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_8ee2718a03392e56dd9fdb9ce94d04bc3dde0c6f58485d70a7e5801b97a771b4->leave($__internal_8ee2718a03392e56dd9fdb9ce94d04bc3dde0c6f58485d70a7e5801b97a771b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
