<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_02c522eb74bd8183c3736a425017a8dd71be6acfc11a816e02490033e7b53f22 extends Twig_Template
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
        $__internal_bc9a9a0e74f22f55cd7b6994ffa7281008198b8b4e81cb9e41651e760b7f9a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9a9a0e74f22f55cd7b6994ffa7281008198b8b4e81cb9e41651e760b7f9a27->enter($__internal_bc9a9a0e74f22f55cd7b6994ffa7281008198b8b4e81cb9e41651e760b7f9a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_bc9a9a0e74f22f55cd7b6994ffa7281008198b8b4e81cb9e41651e760b7f9a27->leave($__internal_bc9a9a0e74f22f55cd7b6994ffa7281008198b8b4e81cb9e41651e760b7f9a27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
