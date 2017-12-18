<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8a7c6528b8ba246a7a0bf2d8c68a572639543eab96f6055c73799dd321254764 extends Twig_Template
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
        $__internal_faecdce882b3e57d8bcd101f40aae48c367a8b7de9b33f7e26efd1fe071e1923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faecdce882b3e57d8bcd101f40aae48c367a8b7de9b33f7e26efd1fe071e1923->enter($__internal_faecdce882b3e57d8bcd101f40aae48c367a8b7de9b33f7e26efd1fe071e1923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_faecdce882b3e57d8bcd101f40aae48c367a8b7de9b33f7e26efd1fe071e1923->leave($__internal_faecdce882b3e57d8bcd101f40aae48c367a8b7de9b33f7e26efd1fe071e1923_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/number_widget.html.php");
    }
}
