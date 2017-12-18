<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e3d0ebee8062a5f989386d6cd6bf8ac7de185350cee101f99d6c4485ed704a21 extends Twig_Template
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
        $__internal_e94531dda9c2649b6c61b019c062657a60e0f5769816bde4079c4a7441aece78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94531dda9c2649b6c61b019c062657a60e0f5769816bde4079c4a7441aece78->enter($__internal_e94531dda9c2649b6c61b019c062657a60e0f5769816bde4079c4a7441aece78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e94531dda9c2649b6c61b019c062657a60e0f5769816bde4079c4a7441aece78->leave($__internal_e94531dda9c2649b6c61b019c062657a60e0f5769816bde4079c4a7441aece78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
