<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_1dff9bfc6eb8d639f2c5e764164ff5f8d88d9ef429d22d2d126c8a7edb294ee5 extends Twig_Template
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
        $__internal_144044214369752e0d0cfa3973816030557da4c6ea502ada1b3471964280195a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144044214369752e0d0cfa3973816030557da4c6ea502ada1b3471964280195a->enter($__internal_144044214369752e0d0cfa3973816030557da4c6ea502ada1b3471964280195a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_144044214369752e0d0cfa3973816030557da4c6ea502ada1b3471964280195a->leave($__internal_144044214369752e0d0cfa3973816030557da4c6ea502ada1b3471964280195a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "/var/www/html/test_lexik/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
