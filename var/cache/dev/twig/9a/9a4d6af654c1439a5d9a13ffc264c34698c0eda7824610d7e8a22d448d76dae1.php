<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3e2123a376fcd1a986765b896ea8029c82cb3236cb7fcb939a36ecd9cb82cfd9 extends Twig_Template
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
        $__internal_144059442687e649bf62e8f61553c82ea0167d6b592c0f623181e984b76461ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144059442687e649bf62e8f61553c82ea0167d6b592c0f623181e984b76461ca->enter($__internal_144059442687e649bf62e8f61553c82ea0167d6b592c0f623181e984b76461ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_144059442687e649bf62e8f61553c82ea0167d6b592c0f623181e984b76461ca->leave($__internal_144059442687e649bf62e8f61553c82ea0167d6b592c0f623181e984b76461ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
