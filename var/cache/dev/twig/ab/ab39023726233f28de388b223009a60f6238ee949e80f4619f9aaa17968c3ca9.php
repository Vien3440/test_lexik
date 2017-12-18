<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_74db7f589c34ff536d99dc9e6f8b14499850a62e11cf39dc1e492d2573544859 extends Twig_Template
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
        $__internal_6c9449dd7b5a7ee304e4d989bf50f54402284d369f589e1cec0c1ae9d45e0788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9449dd7b5a7ee304e4d989bf50f54402284d369f589e1cec0c1ae9d45e0788->enter($__internal_6c9449dd7b5a7ee304e4d989bf50f54402284d369f589e1cec0c1ae9d45e0788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6c9449dd7b5a7ee304e4d989bf50f54402284d369f589e1cec0c1ae9d45e0788->leave($__internal_6c9449dd7b5a7ee304e4d989bf50f54402284d369f589e1cec0c1ae9d45e0788_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
