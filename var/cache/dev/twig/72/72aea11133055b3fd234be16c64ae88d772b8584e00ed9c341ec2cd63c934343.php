<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_94acb5a43a090158bea496e5f2947b6702525d762cb25bdc4f18a204d5637a81 extends Twig_Template
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
        $__internal_3ad0318ac22a718965c599770cfaa6f06484fbb5460271bd6963776fb0fa4b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad0318ac22a718965c599770cfaa6f06484fbb5460271bd6963776fb0fa4b66->enter($__internal_3ad0318ac22a718965c599770cfaa6f06484fbb5460271bd6963776fb0fa4b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_3ad0318ac22a718965c599770cfaa6f06484fbb5460271bd6963776fb0fa4b66->leave($__internal_3ad0318ac22a718965c599770cfaa6f06484fbb5460271bd6963776fb0fa4b66_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/var/www/html/test_lexik/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
