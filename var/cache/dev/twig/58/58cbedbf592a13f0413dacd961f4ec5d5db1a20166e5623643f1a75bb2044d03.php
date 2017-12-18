<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a713a53560d3a50f0501f5fc410544977bc32ba729cd951fa50fc8277633eef9 extends Twig_Template
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
        $__internal_45281816b6a1bf2b585473281f47b6b8b3532bd3551ade24716801c3a4cbae3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45281816b6a1bf2b585473281f47b6b8b3532bd3551ade24716801c3a4cbae3e->enter($__internal_45281816b6a1bf2b585473281f47b6b8b3532bd3551ade24716801c3a4cbae3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_45281816b6a1bf2b585473281f47b6b8b3532bd3551ade24716801c3a4cbae3e->leave($__internal_45281816b6a1bf2b585473281f47b6b8b3532bd3551ade24716801c3a4cbae3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
