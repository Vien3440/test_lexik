<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_60413b7a71b97253b426d2c11b054da4a22a17fc8fc7e6235b819bfd1c943eaf extends Twig_Template
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
        $__internal_a0a9280154d33089de2e2c0d8260dfe67b4b6c4356096d61e5259c5ff7668ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a9280154d33089de2e2c0d8260dfe67b4b6c4356096d61e5259c5ff7668ab0->enter($__internal_a0a9280154d33089de2e2c0d8260dfe67b4b6c4356096d61e5259c5ff7668ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a0a9280154d33089de2e2c0d8260dfe67b4b6c4356096d61e5259c5ff7668ab0->leave($__internal_a0a9280154d33089de2e2c0d8260dfe67b4b6c4356096d61e5259c5ff7668ab0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
