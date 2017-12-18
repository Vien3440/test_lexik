<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_19fcbf35fee8018334c136443d65d925fb5f4d12c5ce10e007fedc6323abf85f extends Twig_Template
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
        $__internal_6f823ccdda00ad53339c00c5f9384d1899c751600eb72194275b7c08d766f915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f823ccdda00ad53339c00c5f9384d1899c751600eb72194275b7c08d766f915->enter($__internal_6f823ccdda00ad53339c00c5f9384d1899c751600eb72194275b7c08d766f915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6f823ccdda00ad53339c00c5f9384d1899c751600eb72194275b7c08d766f915->leave($__internal_6f823ccdda00ad53339c00c5f9384d1899c751600eb72194275b7c08d766f915_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
