<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4cc578937d897010b11a25cc113bb7cf8fa5a2c74863317feeeb324154404a46 extends Twig_Template
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
        $__internal_ee7d75897374c867dd31214d36fc012e78d57d5064847d2e758816a142fd05ef = $this->env->getExtension("native_profiler");
        $__internal_ee7d75897374c867dd31214d36fc012e78d57d5064847d2e758816a142fd05ef->enter($__internal_ee7d75897374c867dd31214d36fc012e78d57d5064847d2e758816a142fd05ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ee7d75897374c867dd31214d36fc012e78d57d5064847d2e758816a142fd05ef->leave($__internal_ee7d75897374c867dd31214d36fc012e78d57d5064847d2e758816a142fd05ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
