<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_2b6c36b5345269409087398573a1d479f299e01c3ae1fbd0b25ae9103ddc1d86 extends Twig_Template
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
        $__internal_0b34e7a3a47459193f88fbcc4d5c20d1b2ab010a09dc7da897c7633ec6414414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b34e7a3a47459193f88fbcc4d5c20d1b2ab010a09dc7da897c7633ec6414414->enter($__internal_0b34e7a3a47459193f88fbcc4d5c20d1b2ab010a09dc7da897c7633ec6414414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0b34e7a3a47459193f88fbcc4d5c20d1b2ab010a09dc7da897c7633ec6414414->leave($__internal_0b34e7a3a47459193f88fbcc4d5c20d1b2ab010a09dc7da897c7633ec6414414_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
