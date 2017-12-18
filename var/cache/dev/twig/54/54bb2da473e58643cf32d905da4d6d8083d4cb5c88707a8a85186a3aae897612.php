<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9a6c791a445ba0265aaa4143b0410b5e6f989440f2e8054f6fae1dc16be1ccec extends Twig_Template
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
        $__internal_729878674d5ba7b44aece5bbc1af2d03ae5db37acb303ab57cb6d7678f37dcd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729878674d5ba7b44aece5bbc1af2d03ae5db37acb303ab57cb6d7678f37dcd5->enter($__internal_729878674d5ba7b44aece5bbc1af2d03ae5db37acb303ab57cb6d7678f37dcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_729878674d5ba7b44aece5bbc1af2d03ae5db37acb303ab57cb6d7678f37dcd5->leave($__internal_729878674d5ba7b44aece5bbc1af2d03ae5db37acb303ab57cb6d7678f37dcd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
