<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_3bedc088cb1a0162b33eb3f408a5fde65c45b34a75eb346d3792981c4c1d30ac extends Twig_Template
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
        $__internal_51ee013d0c86dc10a936a4329516eb095e3bb31f1fe79b50fe3790d56b2b11b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ee013d0c86dc10a936a4329516eb095e3bb31f1fe79b50fe3790d56b2b11b4->enter($__internal_51ee013d0c86dc10a936a4329516eb095e3bb31f1fe79b50fe3790d56b2b11b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_51ee013d0c86dc10a936a4329516eb095e3bb31f1fe79b50fe3790d56b2b11b4->leave($__internal_51ee013d0c86dc10a936a4329516eb095e3bb31f1fe79b50fe3790d56b2b11b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/var/www/html/test_lexik/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
