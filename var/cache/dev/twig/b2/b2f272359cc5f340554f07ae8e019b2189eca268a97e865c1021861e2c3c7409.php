<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_76f7d21edd62055bb36e635b0e266a7a49f19e5722b2a2a7440c62ee2a867476 extends Twig_Template
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
        $__internal_fa776a5c58bb175cba8d0dcc2c5486b7e7e68f85fed737492b502d00e42feca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa776a5c58bb175cba8d0dcc2c5486b7e7e68f85fed737492b502d00e42feca9->enter($__internal_fa776a5c58bb175cba8d0dcc2c5486b7e7e68f85fed737492b502d00e42feca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_fa776a5c58bb175cba8d0dcc2c5486b7e7e68f85fed737492b502d00e42feca9->leave($__internal_fa776a5c58bb175cba8d0dcc2c5486b7e7e68f85fed737492b502d00e42feca9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
