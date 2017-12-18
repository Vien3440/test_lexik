<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2c21a1fe2c207f68a312c04bcd84693fddf0da814b9c1d497d5dd376db461e19 extends Twig_Template
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
        $__internal_8b3396531534b6248921743da38713f0067d142d37ba2a1301aa6ddcbd0da8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3396531534b6248921743da38713f0067d142d37ba2a1301aa6ddcbd0da8a4->enter($__internal_8b3396531534b6248921743da38713f0067d142d37ba2a1301aa6ddcbd0da8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8b3396531534b6248921743da38713f0067d142d37ba2a1301aa6ddcbd0da8a4->leave($__internal_8b3396531534b6248921743da38713f0067d142d37ba2a1301aa6ddcbd0da8a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
