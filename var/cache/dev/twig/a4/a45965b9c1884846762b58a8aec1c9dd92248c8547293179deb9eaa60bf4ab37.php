<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_55f783f69681b75eb439af9edffeb6b9390652b56adf31e1d835cc10c6ada512 extends Twig_Template
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
        $__internal_d16646e4a5ba76d891d6276c0fd5550201b1da75f8fa0c4d505e64751ace774b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16646e4a5ba76d891d6276c0fd5550201b1da75f8fa0c4d505e64751ace774b->enter($__internal_d16646e4a5ba76d891d6276c0fd5550201b1da75f8fa0c4d505e64751ace774b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_d16646e4a5ba76d891d6276c0fd5550201b1da75f8fa0c4d505e64751ace774b->leave($__internal_d16646e4a5ba76d891d6276c0fd5550201b1da75f8fa0c4d505e64751ace774b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/var/www/html/test_lexik/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
