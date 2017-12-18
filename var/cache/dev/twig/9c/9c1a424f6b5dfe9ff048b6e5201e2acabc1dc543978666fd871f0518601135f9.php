<?php

/* index.html.twig */
class __TwigTemplate_02891e6ec51c6d315e2cfc2975c566e71e1e80267e22975bfe39a95781b09c51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a79408f2cfd3881c70a40c220b677c176bb7028d4cf7037cc82f80d75c15778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a79408f2cfd3881c70a40c220b677c176bb7028d4cf7037cc82f80d75c15778->enter($__internal_4a79408f2cfd3881c70a40c220b677c176bb7028d4cf7037cc82f80d75c15778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Vue genérale Groupes</title>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/main.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "
    </body>
</html>
";
        
        $__internal_4a79408f2cfd3881c70a40c220b677c176bb7028d4cf7037cc82f80d75c15778->leave($__internal_4a79408f2cfd3881c70a40c220b677c176bb7028d4cf7037cc82f80d75c15778_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a5553b2835d8ecda11cf18cfbea96218bf6ee98f047fe9708bc44be469b9e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5553b2835d8ecda11cf18cfbea96218bf6ee98f047fe9708bc44be469b9e05->enter($__internal_1a5553b2835d8ecda11cf18cfbea96218bf6ee98f047fe9708bc44be469b9e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "            <div id=\"dashboard\">
                
";
        // line 14
        echo "                <div id=\"formAddUser\">
                    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 15, $this->getSourceContext()); })()), 'form_start');
        echo "
                    <h3>Ajout utilisateur</h3>
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 17, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("placeholder" => "Email")));
        echo "
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 18, $this->getSourceContext()); })()), "user_firstname", array()), 'widget', array("attr" => array("placeholder" => "Prénom")));
        echo "
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 19, $this->getSourceContext()); })()), "user_lastname", array()), 'widget', array("attr" => array("placeholder" => "Nom")));
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 20, $this->getSourceContext()); })()), "fk_group", array()), 'widget', array("label" => "foo"));
        echo "

                    <button class=\"btn-valide\"> validation </button>
                    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 23, $this->getSourceContext()); })()), 'form_end');
        echo "
                </div>
                    
";
        // line 26
        echo "            
                <div id=\"formAddUser\">
                    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new Twig_Error_Runtime('Variable "formGroup" does not exist.', 28, $this->getSourceContext()); })()), 'form_start');
        echo "
                    <h3>Ajout Groupe</h3>
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new Twig_Error_Runtime('Variable "formGroup" does not exist.', 30, $this->getSourceContext()); })()), "name", array()), 'widget', array("attr" => array("placeholder" => "Nom du nouveaux groupe")));
        echo "
                    <button class=\"btn-valide\"> validation </button>
                    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new Twig_Error_Runtime('Variable "formGroup" does not exist.', 32, $this->getSourceContext()); })()), 'form_end');
        echo "
                </div>
                    
";
        // line 36
        echo "                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("research");
        echo "\" method=\"GET\">
                    <h3>Recherche</h3>
                    <input type=\"text\" name=\"name\" placeholder=\"Recherche\">
                    <input class=\"btn-valide\" type=\"submit\">
                    <button class=\"btn-valide\"> <a href=";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo ">Réinitialiser</a></button>
                </form>
            </div>
                    
";
        // line 45
        echo "            <div id=\"tableContent\">
                <table id=\"tableHome\">
                    <tr>
                        <th> Groupe</th>
                        <th> Prenom</th>
                        <th> Nom</th>
                        <th> Email</th>
                        <th> </th>
                    </tr>
                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 54, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 55
            echo "                        <tr id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "\">
                            <td class=\"userNameGroup\" > ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "</td>
                            <td> ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user_firstname", array()), "html", null, true);
            echo "</td>
                            <td> ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user_lastname", array()), "html", null, true);
            echo "</td>
                            <td> ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
                            <td> <button class=\"btn-supr\"> <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userRemove", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo " \"> Suprr</a> </button> </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </table>
            </div>
        ";
        
        $__internal_1a5553b2835d8ecda11cf18cfbea96218bf6ee98f047fe9708bc44be469b9e05->leave($__internal_1a5553b2835d8ecda11cf18cfbea96218bf6ee98f047fe9708bc44be469b9e05_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 63,  162 => 60,  158 => 59,  154 => 58,  150 => 57,  146 => 56,  141 => 55,  137 => 54,  126 => 45,  119 => 40,  111 => 36,  105 => 32,  100 => 30,  95 => 28,  91 => 26,  85 => 23,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  62 => 15,  59 => 14,  55 => 11,  49 => 10,  39 => 66,  37 => 10,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Vue genérale Groupes</title>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('build/css/main.css')}}\">
    </head>
    <body>
        {% block body %}
            <div id=\"dashboard\">
                
{#            ///////////////// Form New User  ////////////////////////// #}
                <div id=\"formAddUser\">
                    {{ form_start(formUser) }}
                    <h3>Ajout utilisateur</h3>
                    {{ form_widget(formUser.email,{ 'attr': {'placeholder': 'Email'} }) }}
                    {{ form_widget(formUser.user_firstname,{ 'attr': {'placeholder': 'Prénom'} }) }}
                    {{ form_widget(formUser.user_lastname,{ 'attr': {'placeholder': 'Nom'} }) }}
                    {{ form_widget(formUser.fk_group,{'label': 'foo'})}}

                    <button class=\"btn-valide\"> validation </button>
                    {{ form_end(formUser) }}
                </div>
                    
{#            ////////////////// Form New Group  ///////////////////////// #}            
                <div id=\"formAddUser\">
                    {{ form_start(formGroup) }}
                    <h3>Ajout Groupe</h3>
                    {{ form_widget(formGroup.name,{ 'attr': {'placeholder': 'Nom du nouveaux groupe'} }) }}
                    <button class=\"btn-valide\"> validation </button>
                    {{ form_end(formGroup) }}
                </div>
                    
{#            //////////////////// Form Research  /////////////////////// #}
                <form action=\"{{ path('research')}}\" method=\"GET\">
                    <h3>Recherche</h3>
                    <input type=\"text\" name=\"name\" placeholder=\"Recherche\">
                    <input class=\"btn-valide\" type=\"submit\">
                    <button class=\"btn-valide\"> <a href={{path('homepage')}}>Réinitialiser</a></button>
                </form>
            </div>
                    
{#            ///////////// Result table///////////////////////// #}
            <div id=\"tableContent\">
                <table id=\"tableHome\">
                    <tr>
                        <th> Groupe</th>
                        <th> Prenom</th>
                        <th> Nom</th>
                        <th> Email</th>
                        <th> </th>
                    </tr>
                    {% for user in users  %}
                        <tr id=\"{{user.id}}\">
                            <td class=\"userNameGroup\" > {{user.name}}</td>
                            <td> {{user.user_firstname}}</td>
                            <td> {{user.user_lastname}}</td>
                            <td> {{user.email}}</td>
                            <td> <button class=\"btn-supr\"> <a href=\"{{ path('userRemove',{'id': user.id})}} \"> Suprr</a> </button> </td>
                        </tr>
                    {% endfor %}
                </table>
            </div>
        {% endblock %}

    </body>
</html>
", "index.html.twig", "/var/www/html/test_lexik/templates/index.html.twig");
    }
}
