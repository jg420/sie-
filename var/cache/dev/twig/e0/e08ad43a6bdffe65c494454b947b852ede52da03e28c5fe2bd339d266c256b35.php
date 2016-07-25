<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_63ccedb47e735b3380c52cf91c12f97398122474ef488a7277d4ce337bb11ddd extends Twig_Template
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
        $__internal_d108a893eefa054daea59c45b0cb3fab868bf25557e84d8bccd1fff60d283ceb = $this->env->getExtension("native_profiler");
        $__internal_d108a893eefa054daea59c45b0cb3fab868bf25557e84d8bccd1fff60d283ceb->enter($__internal_d108a893eefa054daea59c45b0cb3fab868bf25557e84d8bccd1fff60d283ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d108a893eefa054daea59c45b0cb3fab868bf25557e84d8bccd1fff60d283ceb->leave($__internal_d108a893eefa054daea59c45b0cb3fab868bf25557e84d8bccd1fff60d283ceb_prof);

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
