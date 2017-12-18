<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_97042743f874dd7526b400912ded193e83b6d730a03043acd37e6786d74eac46 extends Twig_Template
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
        $__internal_534a943f7a71a1fd62b7fa7d45efc81fd374b1b64101154b1b1a260377a43079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534a943f7a71a1fd62b7fa7d45efc81fd374b1b64101154b1b1a260377a43079->enter($__internal_534a943f7a71a1fd62b7fa7d45efc81fd374b1b64101154b1b1a260377a43079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_534a943f7a71a1fd62b7fa7d45efc81fd374b1b64101154b1b1a260377a43079->leave($__internal_534a943f7a71a1fd62b7fa7d45efc81fd374b1b64101154b1b1a260377a43079_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/var/www/html/test_lexik/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
