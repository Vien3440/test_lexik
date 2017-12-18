<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7ea758f352ab401144ce87e75c07763c75f31a0f2d75987676628cf96fa788b6 extends Twig_Template
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
        $__internal_dbfa79c9f21b511160dba179058d99d25dcd452620b9fe9124555a07696d4677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfa79c9f21b511160dba179058d99d25dcd452620b9fe9124555a07696d4677->enter($__internal_dbfa79c9f21b511160dba179058d99d25dcd452620b9fe9124555a07696d4677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dbfa79c9f21b511160dba179058d99d25dcd452620b9fe9124555a07696d4677->leave($__internal_dbfa79c9f21b511160dba179058d99d25dcd452620b9fe9124555a07696d4677_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
