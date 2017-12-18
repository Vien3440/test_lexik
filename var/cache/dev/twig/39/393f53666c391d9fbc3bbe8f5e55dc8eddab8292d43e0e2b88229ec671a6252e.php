<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_fb0e61965bb63eae388d5d3ec8f032519e9aa36cfe89cf6a2e3a43ca40f76228 extends Twig_Template
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
        $__internal_c7b794e4c6b5fa4e09d1355e2f870a87e1d132c950575f196399d279b6a03817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b794e4c6b5fa4e09d1355e2f870a87e1d132c950575f196399d279b6a03817->enter($__internal_c7b794e4c6b5fa4e09d1355e2f870a87e1d132c950575f196399d279b6a03817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c7b794e4c6b5fa4e09d1355e2f870a87e1d132c950575f196399d279b6a03817->leave($__internal_c7b794e4c6b5fa4e09d1355e2f870a87e1d132c950575f196399d279b6a03817_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
