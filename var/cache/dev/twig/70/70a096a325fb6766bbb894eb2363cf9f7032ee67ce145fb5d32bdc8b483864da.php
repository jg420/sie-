<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e3eae282adbb4c7e1e8c49a188a2c37f7aa4c415462d367885bbd1a5f28b9b7b extends Twig_Template
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
        $__internal_238ef2634bd929b5182aa23c32291ff40cd628e56ccdd2bc05884cc1ac21f2d3 = $this->env->getExtension("native_profiler");
        $__internal_238ef2634bd929b5182aa23c32291ff40cd628e56ccdd2bc05884cc1ac21f2d3->enter($__internal_238ef2634bd929b5182aa23c32291ff40cd628e56ccdd2bc05884cc1ac21f2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_238ef2634bd929b5182aa23c32291ff40cd628e56ccdd2bc05884cc1ac21f2d3->leave($__internal_238ef2634bd929b5182aa23c32291ff40cd628e56ccdd2bc05884cc1ac21f2d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
