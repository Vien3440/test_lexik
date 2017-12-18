<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_53620c09702c53152be42ae7784d31cbc20bf4799016beff293db93ade2895c3 extends Twig_Template
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
        $__internal_e71092e73a0965acf60e4bc8dac732f847fc32393923d6e9a68626792591fdcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71092e73a0965acf60e4bc8dac732f847fc32393923d6e9a68626792591fdcb->enter($__internal_e71092e73a0965acf60e4bc8dac732f847fc32393923d6e9a68626792591fdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e71092e73a0965acf60e4bc8dac732f847fc32393923d6e9a68626792591fdcb->leave($__internal_e71092e73a0965acf60e4bc8dac732f847fc32393923d6e9a68626792591fdcb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
