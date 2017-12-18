<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_758d85894c7e2b7183c13e8f5680e540ea1c737fc696b3e46e8082e8fc4fc70d extends Twig_Template
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
        $__internal_8a47a982717297b263b5ee6ca5a9db507fcbab8b6a66bab22ac720689f8d808e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a47a982717297b263b5ee6ca5a9db507fcbab8b6a66bab22ac720689f8d808e->enter($__internal_8a47a982717297b263b5ee6ca5a9db507fcbab8b6a66bab22ac720689f8d808e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8a47a982717297b263b5ee6ca5a9db507fcbab8b6a66bab22ac720689f8d808e->leave($__internal_8a47a982717297b263b5ee6ca5a9db507fcbab8b6a66bab22ac720689f8d808e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
