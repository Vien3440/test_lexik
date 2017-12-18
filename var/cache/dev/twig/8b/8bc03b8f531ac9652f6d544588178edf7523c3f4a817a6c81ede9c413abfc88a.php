<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_bd71c1b3d7071f825a31e6bce6324800c4410dacbba91254969aa00ddb9dd928 extends Twig_Template
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
        $__internal_e9f0723cc503f2763ec4af55375ca12fad24df4d1aab8c12c8529d6ca2d33ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f0723cc503f2763ec4af55375ca12fad24df4d1aab8c12c8529d6ca2d33ce7->enter($__internal_e9f0723cc503f2763ec4af55375ca12fad24df4d1aab8c12c8529d6ca2d33ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_e9f0723cc503f2763ec4af55375ca12fad24df4d1aab8c12c8529d6ca2d33ce7->leave($__internal_e9f0723cc503f2763ec4af55375ca12fad24df4d1aab8c12c8529d6ca2d33ce7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "/var/www/html/test_lexik/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
