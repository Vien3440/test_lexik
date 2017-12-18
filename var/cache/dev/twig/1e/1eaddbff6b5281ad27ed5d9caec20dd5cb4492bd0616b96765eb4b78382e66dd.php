<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_8990a940ff29fd71a610efcc42b86dbc2ec141568265bdc8a239a7080de607fa extends Twig_Template
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
        $__internal_368e61e06d5dcbffc9d771b0c3cebd12fb890a0be75877a91a6a7c749aaaf875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368e61e06d5dcbffc9d771b0c3cebd12fb890a0be75877a91a6a7c749aaaf875->enter($__internal_368e61e06d5dcbffc9d771b0c3cebd12fb890a0be75877a91a6a7c749aaaf875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_368e61e06d5dcbffc9d771b0c3cebd12fb890a0be75877a91a6a7c749aaaf875->leave($__internal_368e61e06d5dcbffc9d771b0c3cebd12fb890a0be75877a91a6a7c749aaaf875_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/var/www/html/test_lexik/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
