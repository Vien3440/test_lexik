<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_bb463412264cbb551fb9f228cfaabc18b5b1c5746e5ccdb488ece8883e47f687 extends Twig_Template
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
        $__internal_75e0d46a11044e8443765d0aa0728bd3bc4987046ed9c50a0b2d8000da2e264d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e0d46a11044e8443765d0aa0728bd3bc4987046ed9c50a0b2d8000da2e264d->enter($__internal_75e0d46a11044e8443765d0aa0728bd3bc4987046ed9c50a0b2d8000da2e264d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_75e0d46a11044e8443765d0aa0728bd3bc4987046ed9c50a0b2d8000da2e264d->leave($__internal_75e0d46a11044e8443765d0aa0728bd3bc4987046ed9c50a0b2d8000da2e264d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/var/www/html/test_lexik/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
