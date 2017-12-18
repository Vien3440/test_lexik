<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_31689cec04b7af3ce09c3458689b0d0ba250813596594f911a807ab501a9bcc6 extends Twig_Template
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
        $__internal_9b96ec735e41f27caa6ca7fef62f538dcd5bf799aaca7a10cc29aa32ea805829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b96ec735e41f27caa6ca7fef62f538dcd5bf799aaca7a10cc29aa32ea805829->enter($__internal_9b96ec735e41f27caa6ca7fef62f538dcd5bf799aaca7a10cc29aa32ea805829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9b96ec735e41f27caa6ca7fef62f538dcd5bf799aaca7a10cc29aa32ea805829->leave($__internal_9b96ec735e41f27caa6ca7fef62f538dcd5bf799aaca7a10cc29aa32ea805829_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
