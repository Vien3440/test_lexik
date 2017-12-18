<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4bf312453a194b774cb111a75cc11f7328a4b82e811be677ab1ab1b1daa2c24d extends Twig_Template
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
        $__internal_bde0530883a38ee357a8649a34dba9b56171704327155f2585b767554c26a3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde0530883a38ee357a8649a34dba9b56171704327155f2585b767554c26a3c4->enter($__internal_bde0530883a38ee357a8649a34dba9b56171704327155f2585b767554c26a3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_bde0530883a38ee357a8649a34dba9b56171704327155f2585b767554c26a3c4->leave($__internal_bde0530883a38ee357a8649a34dba9b56171704327155f2585b767554c26a3c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
