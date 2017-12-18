<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_99b97b23262e4471f30422808ffea689db72510bfd7b47c1bf4d40dc510d6ec9 extends Twig_Template
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
        $__internal_ecab3c775e42a5b43ee807a78608b33ffd27e716bd772e5267f88cdb76fdce55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecab3c775e42a5b43ee807a78608b33ffd27e716bd772e5267f88cdb76fdce55->enter($__internal_ecab3c775e42a5b43ee807a78608b33ffd27e716bd772e5267f88cdb76fdce55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ecab3c775e42a5b43ee807a78608b33ffd27e716bd772e5267f88cdb76fdce55->leave($__internal_ecab3c775e42a5b43ee807a78608b33ffd27e716bd772e5267f88cdb76fdce55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
