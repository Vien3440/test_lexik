<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_4273893caf9d77b4892406934a41541fe4050d2e87377b3f7603fd70baee4159 extends Twig_Template
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
        $__internal_69eb7dfcf9fb902c874bc42e45c4ccc72d6cc125a8a25604a5c670efc834e937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69eb7dfcf9fb902c874bc42e45c4ccc72d6cc125a8a25604a5c670efc834e937->enter($__internal_69eb7dfcf9fb902c874bc42e45c4ccc72d6cc125a8a25604a5c670efc834e937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_69eb7dfcf9fb902c874bc42e45c4ccc72d6cc125a8a25604a5c670efc834e937->leave($__internal_69eb7dfcf9fb902c874bc42e45c4ccc72d6cc125a8a25604a5c670efc834e937_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "/var/www/html/test_lexik/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
