<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_868991f60f48b804901ad3899cd005e755801c5149ea693ac329051e9550e117 extends Twig_Template
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
        $__internal_7f15f67d836f5553c0bff635be890e2a4437c08d9d5a90a45ae8c63a5739b599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f15f67d836f5553c0bff635be890e2a4437c08d9d5a90a45ae8c63a5739b599->enter($__internal_7f15f67d836f5553c0bff635be890e2a4437c08d9d5a90a45ae8c63a5739b599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7f15f67d836f5553c0bff635be890e2a4437c08d9d5a90a45ae8c63a5739b599->leave($__internal_7f15f67d836f5553c0bff635be890e2a4437c08d9d5a90a45ae8c63a5739b599_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/hidden_row.html.php");
    }
}
