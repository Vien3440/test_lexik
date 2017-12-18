<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_7471a8aac418a4c657549716f94cd6c5be1050441cceb741f1849c81716cc678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6cbb2f23041a722946b339cdc36b60cf8d807f096ad0b78ca2c2a6a069cc622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6cbb2f23041a722946b339cdc36b60cf8d807f096ad0b78ca2c2a6a069cc622->enter($__internal_e6cbb2f23041a722946b339cdc36b60cf8d807f096ad0b78ca2c2a6a069cc622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e6cbb2f23041a722946b339cdc36b60cf8d807f096ad0b78ca2c2a6a069cc622->leave($__internal_e6cbb2f23041a722946b339cdc36b60cf8d807f096ad0b78ca2c2a6a069cc622_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1cfbedb2b2f25b7b1a3d4cf40760de96e1d398d93d5d5c4571525ddcd41b4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1cfbedb2b2f25b7b1a3d4cf40760de96e1d398d93d5d5c4571525ddcd41b4c6->enter($__internal_c1cfbedb2b2f25b7b1a3d4cf40760de96e1d398d93d5d5c4571525ddcd41b4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c1cfbedb2b2f25b7b1a3d4cf40760de96e1d398d93d5d5c4571525ddcd41b4c6->leave($__internal_c1cfbedb2b2f25b7b1a3d4cf40760de96e1d398d93d5d5c4571525ddcd41b4c6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_208bb29ac299b43391146be5314249fd3c97ec9f9f0e3783f3dc5a2468533910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208bb29ac299b43391146be5314249fd3c97ec9f9f0e3783f3dc5a2468533910->enter($__internal_208bb29ac299b43391146be5314249fd3c97ec9f9f0e3783f3dc5a2468533910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_208bb29ac299b43391146be5314249fd3c97ec9f9f0e3783f3dc5a2468533910->leave($__internal_208bb29ac299b43391146be5314249fd3c97ec9f9f0e3783f3dc5a2468533910_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_272a7dd553a06afd4300d0744c77f8d550f6dc23366507f44f4064b0c1294904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272a7dd553a06afd4300d0744c77f8d550f6dc23366507f44f4064b0c1294904->enter($__internal_272a7dd553a06afd4300d0744c77f8d550f6dc23366507f44f4064b0c1294904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_272a7dd553a06afd4300d0744c77f8d550f6dc23366507f44f4064b0c1294904->leave($__internal_272a7dd553a06afd4300d0744c77f8d550f6dc23366507f44f4064b0c1294904_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/test_lexik/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
