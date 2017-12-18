<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_708424b74d3fb8a2d995165dc673152764e981619c7aea692ec7ac63c549b634 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3d3ff5d82955c607ed7bd2121151ff52ffc6864024a62c5af03289ff7ce74d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d3ff5d82955c607ed7bd2121151ff52ffc6864024a62c5af03289ff7ce74d8->enter($__internal_c3d3ff5d82955c607ed7bd2121151ff52ffc6864024a62c5af03289ff7ce74d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_c3d3ff5d82955c607ed7bd2121151ff52ffc6864024a62c5af03289ff7ce74d8->leave($__internal_c3d3ff5d82955c607ed7bd2121151ff52ffc6864024a62c5af03289ff7ce74d8_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_5212c33306a098ea02dc9dbc3c43f378f7952f478a7ba76835449fc6d34b7259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5212c33306a098ea02dc9dbc3c43f378f7952f478a7ba76835449fc6d34b7259->enter($__internal_5212c33306a098ea02dc9dbc3c43f378f7952f478a7ba76835449fc6d34b7259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_5212c33306a098ea02dc9dbc3c43f378f7952f478a7ba76835449fc6d34b7259->leave($__internal_5212c33306a098ea02dc9dbc3c43f378f7952f478a7ba76835449fc6d34b7259_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_67c1af4b2da12fd61e22e96c958a088ec01c2f4a029ba41e9e0d826a430fe910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c1af4b2da12fd61e22e96c958a088ec01c2f4a029ba41e9e0d826a430fe910->enter($__internal_67c1af4b2da12fd61e22e96c958a088ec01c2f4a029ba41e9e0d826a430fe910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_67c1af4b2da12fd61e22e96c958a088ec01c2f4a029ba41e9e0d826a430fe910->leave($__internal_67c1af4b2da12fd61e22e96c958a088ec01c2f4a029ba41e9e0d826a430fe910_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_fce7778e31ac7d1dbf42989a498f69a16977f14ae12695f43420aeebd13f0b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce7778e31ac7d1dbf42989a498f69a16977f14ae12695f43420aeebd13f0b86->enter($__internal_fce7778e31ac7d1dbf42989a498f69a16977f14ae12695f43420aeebd13f0b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_fce7778e31ac7d1dbf42989a498f69a16977f14ae12695f43420aeebd13f0b86->leave($__internal_fce7778e31ac7d1dbf42989a498f69a16977f14ae12695f43420aeebd13f0b86_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_424a5ff0dfee718b6a23d279dfb76c39064012d024909c85bc297efb0d5e1bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424a5ff0dfee718b6a23d279dfb76c39064012d024909c85bc297efb0d5e1bd0->enter($__internal_424a5ff0dfee718b6a23d279dfb76c39064012d024909c85bc297efb0d5e1bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_424a5ff0dfee718b6a23d279dfb76c39064012d024909c85bc297efb0d5e1bd0->leave($__internal_424a5ff0dfee718b6a23d279dfb76c39064012d024909c85bc297efb0d5e1bd0_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_a510139c352ab0160af24e81e607dfb2b9098ddcb1d353bf1ab65dac2ed0e8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a510139c352ab0160af24e81e607dfb2b9098ddcb1d353bf1ab65dac2ed0e8be->enter($__internal_a510139c352ab0160af24e81e607dfb2b9098ddcb1d353bf1ab65dac2ed0e8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_a510139c352ab0160af24e81e607dfb2b9098ddcb1d353bf1ab65dac2ed0e8be->leave($__internal_a510139c352ab0160af24e81e607dfb2b9098ddcb1d353bf1ab65dac2ed0e8be_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_901664f7e142f50d8963ff6bbad2619705727ad2337fc4c79bea3f44876f457a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901664f7e142f50d8963ff6bbad2619705727ad2337fc4c79bea3f44876f457a->enter($__internal_901664f7e142f50d8963ff6bbad2619705727ad2337fc4c79bea3f44876f457a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_901664f7e142f50d8963ff6bbad2619705727ad2337fc4c79bea3f44876f457a->leave($__internal_901664f7e142f50d8963ff6bbad2619705727ad2337fc4c79bea3f44876f457a_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_81cc36e762bf7d43d5b51ecf1ea4a9e5f146da0026c542bbab8b687c696a9848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cc36e762bf7d43d5b51ecf1ea4a9e5f146da0026c542bbab8b687c696a9848->enter($__internal_81cc36e762bf7d43d5b51ecf1ea4a9e5f146da0026c542bbab8b687c696a9848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_81cc36e762bf7d43d5b51ecf1ea4a9e5f146da0026c542bbab8b687c696a9848->leave($__internal_81cc36e762bf7d43d5b51ecf1ea4a9e5f146da0026c542bbab8b687c696a9848_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_1a079e2389a293c985299fbf4f509551b8707ea2a34807086a61bb807d3a0172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a079e2389a293c985299fbf4f509551b8707ea2a34807086a61bb807d3a0172->enter($__internal_1a079e2389a293c985299fbf4f509551b8707ea2a34807086a61bb807d3a0172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_1a079e2389a293c985299fbf4f509551b8707ea2a34807086a61bb807d3a0172->leave($__internal_1a079e2389a293c985299fbf4f509551b8707ea2a34807086a61bb807d3a0172_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  269 => 64,  267 => 63,  265 => 62,  263 => 61,  259 => 60,  255 => 59,  249 => 58,  243 => 57,  236 => 54,  230 => 53,  223 => 50,  221 => 49,  219 => 48,  215 => 47,  211 => 46,  209 => 45,  203 => 44,  196 => 41,  194 => 40,  192 => 39,  188 => 38,  184 => 37,  182 => 36,  176 => 35,  169 => 32,  166 => 31,  164 => 30,  162 => 29,  158 => 28,  156 => 27,  150 => 26,  144 => 25,  137 => 20,  131 => 19,  123 => 15,  121 => 14,  116 => 12,  114 => 11,  108 => 10,  101 => 5,  99 => 4,  93 => 3,  86 => 57,  83 => 56,  81 => 53,  78 => 52,  76 => 44,  73 => 43,  71 => 35,  68 => 34,  66 => 25,  63 => 24,  60 => 22,  58 => 19,  55 => 18,  53 => 10,  50 => 9,  47 => 7,  45 => 3,  42 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/test_lexik/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
