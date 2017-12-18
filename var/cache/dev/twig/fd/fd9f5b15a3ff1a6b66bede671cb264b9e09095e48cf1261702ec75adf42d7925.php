<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_81280900b474d134e30427dca11e4efd89221d3d63693f7f049f70801c897b9e extends Twig_Template
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
        $__internal_d2b18fcb0e0163a4aeb02ab04dace2b211cb4f43b4fde286a9fdcb443a0d00ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b18fcb0e0163a4aeb02ab04dace2b211cb4f43b4fde286a9fdcb443a0d00ae->enter($__internal_d2b18fcb0e0163a4aeb02ab04dace2b211cb4f43b4fde286a9fdcb443a0d00ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d2b18fcb0e0163a4aeb02ab04dace2b211cb4f43b4fde286a9fdcb443a0d00ae->leave($__internal_d2b18fcb0e0163a4aeb02ab04dace2b211cb4f43b4fde286a9fdcb443a0d00ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
