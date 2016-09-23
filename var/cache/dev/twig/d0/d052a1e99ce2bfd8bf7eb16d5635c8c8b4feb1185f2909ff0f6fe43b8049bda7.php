<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_02d908e501342520e5e5a5e87437b7813b50fea11cf582470956ccf643f1d508 extends Twig_Template
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
        $__internal_604a69ed4622372f280906d6ffb19d28cec5531320654ec9f4a22ce88498b3d4 = $this->env->getExtension("native_profiler");
        $__internal_604a69ed4622372f280906d6ffb19d28cec5531320654ec9f4a22ce88498b3d4->enter($__internal_604a69ed4622372f280906d6ffb19d28cec5531320654ec9f4a22ce88498b3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_604a69ed4622372f280906d6ffb19d28cec5531320654ec9f4a22ce88498b3d4->leave($__internal_604a69ed4622372f280906d6ffb19d28cec5531320654ec9f4a22ce88498b3d4_prof);

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
