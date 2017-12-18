<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f52bdef24cfe3cb4355327e387d4d9bd156a0e855df1e6ecbb3650aa96c7b66c extends Twig_Template
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
        $__internal_b132eb3cfcf4828193fa2d7f723779e47dd344af893ac8ff64666a6bc7d3b610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b132eb3cfcf4828193fa2d7f723779e47dd344af893ac8ff64666a6bc7d3b610->enter($__internal_b132eb3cfcf4828193fa2d7f723779e47dd344af893ac8ff64666a6bc7d3b610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b132eb3cfcf4828193fa2d7f723779e47dd344af893ac8ff64666a6bc7d3b610->leave($__internal_b132eb3cfcf4828193fa2d7f723779e47dd344af893ac8ff64666a6bc7d3b610_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
