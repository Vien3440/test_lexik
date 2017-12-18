<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d3cfbaa2172a5cc8e33f9fe1eba64c8e2df843bcb05c01cb2b439afa4e6376c4 extends Twig_Template
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
        $__internal_467e4c20fc1660be99a16850085bd75bba0ec521247db6f756bf9244d7a10b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467e4c20fc1660be99a16850085bd75bba0ec521247db6f756bf9244d7a10b1d->enter($__internal_467e4c20fc1660be99a16850085bd75bba0ec521247db6f756bf9244d7a10b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_467e4c20fc1660be99a16850085bd75bba0ec521247db6f756bf9244d7a10b1d->leave($__internal_467e4c20fc1660be99a16850085bd75bba0ec521247db6f756bf9244d7a10b1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
