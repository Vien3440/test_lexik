<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_91716542f4b56f438a666d845dbf6f95344bd8026fb7abcf14491e39149e8be9 extends Twig_Template
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
        $__internal_fed8111c1cf7f9581bc2bb6b3c7e3a731cfe98fc6f52648c7f4c141e84e08f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed8111c1cf7f9581bc2bb6b3c7e3a731cfe98fc6f52648c7f4c141e84e08f86->enter($__internal_fed8111c1cf7f9581bc2bb6b3c7e3a731cfe98fc6f52648c7f4c141e84e08f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fed8111c1cf7f9581bc2bb6b3c7e3a731cfe98fc6f52648c7f4c141e84e08f86->leave($__internal_fed8111c1cf7f9581bc2bb6b3c7e3a731cfe98fc6f52648c7f4c141e84e08f86_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "/var/www/html/test_lexik/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
