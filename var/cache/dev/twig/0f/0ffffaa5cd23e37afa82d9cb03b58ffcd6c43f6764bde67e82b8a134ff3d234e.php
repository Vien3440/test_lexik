<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_670d6f9e29b2a80c72f3d5af1f5337ba1135dd1b49254c8340399648b2a23a81 extends Twig_Template
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
        $__internal_d36f5f59709a2572615df9382ab27fe031b7cf1c34f5866fa663589a349473d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36f5f59709a2572615df9382ab27fe031b7cf1c34f5866fa663589a349473d0->enter($__internal_d36f5f59709a2572615df9382ab27fe031b7cf1c34f5866fa663589a349473d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d36f5f59709a2572615df9382ab27fe031b7cf1c34f5866fa663589a349473d0->leave($__internal_d36f5f59709a2572615df9382ab27fe031b7cf1c34f5866fa663589a349473d0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/var/www/html/test_lexik/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
