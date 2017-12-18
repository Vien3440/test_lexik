<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_16d0328792eab88256143ead9acff5ad5c38cf4ff6952ffafb9a94fa0cdb2689 extends Twig_Template
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
        $__internal_63f21019139bc251203b5812d911e7a77a8b2e573e0da3ab35f8ca6a85dbf06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f21019139bc251203b5812d911e7a77a8b2e573e0da3ab35f8ca6a85dbf06d->enter($__internal_63f21019139bc251203b5812d911e7a77a8b2e573e0da3ab35f8ca6a85dbf06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_63f21019139bc251203b5812d911e7a77a8b2e573e0da3ab35f8ca6a85dbf06d->leave($__internal_63f21019139bc251203b5812d911e7a77a8b2e573e0da3ab35f8ca6a85dbf06d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
