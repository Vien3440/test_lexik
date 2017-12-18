<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3510f22aa88e7890d05859fbf7dfdc5a737092e58cbe73bed5ab09598a558be0 extends Twig_Template
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
        $__internal_15c684fe2d16868f4bd4e9da361de788de5dee341e5bb711210dd7fc4ec54cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c684fe2d16868f4bd4e9da361de788de5dee341e5bb711210dd7fc4ec54cb6->enter($__internal_15c684fe2d16868f4bd4e9da361de788de5dee341e5bb711210dd7fc4ec54cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_15c684fe2d16868f4bd4e9da361de788de5dee341e5bb711210dd7fc4ec54cb6->leave($__internal_15c684fe2d16868f4bd4e9da361de788de5dee341e5bb711210dd7fc4ec54cb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
