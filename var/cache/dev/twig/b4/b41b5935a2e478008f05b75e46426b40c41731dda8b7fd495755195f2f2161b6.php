<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_bdf97b47305326061af311492355a1ad18f9d1d121cd05c3866180f319752423 extends Twig_Template
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
        $__internal_e6e49223ffcc67965a88eddd9271b86392dab17c92930c24d88c8a25efe70dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e49223ffcc67965a88eddd9271b86392dab17c92930c24d88c8a25efe70dbf->enter($__internal_e6e49223ffcc67965a88eddd9271b86392dab17c92930c24d88c8a25efe70dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e6e49223ffcc67965a88eddd9271b86392dab17c92930c24d88c8a25efe70dbf->leave($__internal_e6e49223ffcc67965a88eddd9271b86392dab17c92930c24d88c8a25efe70dbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
