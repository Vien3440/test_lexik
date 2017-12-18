<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_be8e52c22eb9018bfb0ac7aea3ea1f9b43e7b53d5e829f64a4de2c98a9629318 extends Twig_Template
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
        $__internal_817bf4301f38015fab80f227deb6bc81a8edaedfd01f10c0b101ac06e6798e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817bf4301f38015fab80f227deb6bc81a8edaedfd01f10c0b101ac06e6798e67->enter($__internal_817bf4301f38015fab80f227deb6bc81a8edaedfd01f10c0b101ac06e6798e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_817bf4301f38015fab80f227deb6bc81a8edaedfd01f10c0b101ac06e6798e67->leave($__internal_817bf4301f38015fab80f227deb6bc81a8edaedfd01f10c0b101ac06e6798e67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/container_attributes.html.php");
    }
}
