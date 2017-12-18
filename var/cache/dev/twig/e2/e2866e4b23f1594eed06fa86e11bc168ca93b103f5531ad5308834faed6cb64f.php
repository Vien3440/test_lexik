<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_ac383410a09eb8b33a85ba27da9db4f55418b0824673b930b4cead27a0a85e89 extends Twig_Template
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
        $__internal_fa6c78dcf27e60f321e43fe835dbad6a898ceb3cd54e8bde6e59ade3d5577dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6c78dcf27e60f321e43fe835dbad6a898ceb3cd54e8bde6e59ade3d5577dc2->enter($__internal_fa6c78dcf27e60f321e43fe835dbad6a898ceb3cd54e8bde6e59ade3d5577dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fa6c78dcf27e60f321e43fe835dbad6a898ceb3cd54e8bde6e59ade3d5577dc2->leave($__internal_fa6c78dcf27e60f321e43fe835dbad6a898ceb3cd54e8bde6e59ade3d5577dc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
