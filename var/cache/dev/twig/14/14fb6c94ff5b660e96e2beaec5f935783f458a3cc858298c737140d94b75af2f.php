<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_c40f42bb123f6885dd247de6d584d3083252e93670ba0fd42c19b893e6e32001 extends Twig_Template
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
        $__internal_f82f1707af7d39857d6436008eb383e89c9b575e0e43200a4f18b7bf36277811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82f1707af7d39857d6436008eb383e89c9b575e0e43200a4f18b7bf36277811->enter($__internal_f82f1707af7d39857d6436008eb383e89c9b575e0e43200a4f18b7bf36277811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_f82f1707af7d39857d6436008eb383e89c9b575e0e43200a4f18b7bf36277811->leave($__internal_f82f1707af7d39857d6436008eb383e89c9b575e0e43200a4f18b7bf36277811_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}
