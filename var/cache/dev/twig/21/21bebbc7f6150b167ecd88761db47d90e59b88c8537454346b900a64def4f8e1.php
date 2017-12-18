<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_03d1813ed85ecf1daa4b377f5f2e384f11c2a9833aaf44bdc6d333d9a23acef7 extends Twig_Template
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
        $__internal_6a13807e46bb7ffa7423386ef774250621c56a24d723097e8e58c44cd0e89f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a13807e46bb7ffa7423386ef774250621c56a24d723097e8e58c44cd0e89f64->enter($__internal_6a13807e46bb7ffa7423386ef774250621c56a24d723097e8e58c44cd0e89f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6a13807e46bb7ffa7423386ef774250621c56a24d723097e8e58c44cd0e89f64->leave($__internal_6a13807e46bb7ffa7423386ef774250621c56a24d723097e8e58c44cd0e89f64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
