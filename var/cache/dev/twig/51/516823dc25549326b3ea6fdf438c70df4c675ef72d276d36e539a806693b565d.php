<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_717483b0eb984ceebd280d5cedc00e659deeb91313a860a85e624ba2f935c810 extends Twig_Template
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
        $__internal_14407d291552c6e73b48d89ba025c65a453dfe4b582046c5904c4eec570aa085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14407d291552c6e73b48d89ba025c65a453dfe4b582046c5904c4eec570aa085->enter($__internal_14407d291552c6e73b48d89ba025c65a453dfe4b582046c5904c4eec570aa085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_14407d291552c6e73b48d89ba025c65a453dfe4b582046c5904c4eec570aa085->leave($__internal_14407d291552c6e73b48d89ba025c65a453dfe4b582046c5904c4eec570aa085_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
