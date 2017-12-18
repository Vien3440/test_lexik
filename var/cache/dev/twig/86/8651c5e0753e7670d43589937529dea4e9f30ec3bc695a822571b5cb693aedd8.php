<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_8d19101ace894941a4e981c57fc2086c9455fd0a2644fd75f83aad14a558b8b9 extends Twig_Template
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
        $__internal_ebfaf9d84b3f41e138600ebb088c7404f10c8cb605e9a3da8411f672b4b24c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebfaf9d84b3f41e138600ebb088c7404f10c8cb605e9a3da8411f672b4b24c8b->enter($__internal_ebfaf9d84b3f41e138600ebb088c7404f10c8cb605e9a3da8411f672b4b24c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ebfaf9d84b3f41e138600ebb088c7404f10c8cb605e9a3da8411f672b4b24c8b->leave($__internal_ebfaf9d84b3f41e138600ebb088c7404f10c8cb605e9a3da8411f672b4b24c8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
