<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_005726519b6f6fc73dd98968167ab5d8ec9126f76bb24ba718d1359fe71c4efc extends Twig_Template
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
        $__internal_90387ef3c87b4e0188bb7e0e86e5e87f8fba71b66fcd625b97ac6f50bf57b0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90387ef3c87b4e0188bb7e0e86e5e87f8fba71b66fcd625b97ac6f50bf57b0ca->enter($__internal_90387ef3c87b4e0188bb7e0e86e5e87f8fba71b66fcd625b97ac6f50bf57b0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_90387ef3c87b4e0188bb7e0e86e5e87f8fba71b66fcd625b97ac6f50bf57b0ca->leave($__internal_90387ef3c87b4e0188bb7e0e86e5e87f8fba71b66fcd625b97ac6f50bf57b0ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
