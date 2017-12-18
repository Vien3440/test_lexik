<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_0f5be3d2ab7f1c967cddb409b4d01007999a60c518066ee816242d4dbb890e20 extends Twig_Template
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
        $__internal_90997fe4a66bb4f23882b3c064019e4e9a2ed402a901e94545d799e7dc1f74eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90997fe4a66bb4f23882b3c064019e4e9a2ed402a901e94545d799e7dc1f74eb->enter($__internal_90997fe4a66bb4f23882b3c064019e4e9a2ed402a901e94545d799e7dc1f74eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_90997fe4a66bb4f23882b3c064019e4e9a2ed402a901e94545d799e7dc1f74eb->leave($__internal_90997fe4a66bb4f23882b3c064019e4e9a2ed402a901e94545d799e7dc1f74eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
