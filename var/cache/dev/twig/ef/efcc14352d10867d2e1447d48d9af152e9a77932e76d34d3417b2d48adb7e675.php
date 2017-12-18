<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d4fc5aaf1f816e8853da451edad9136f6403d88f5aba291b741432cdb5608a23 extends Twig_Template
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
        $__internal_b869476a05b2a1620332ac9af9b55143fc59f56d3650601cf0c974a74300f7f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b869476a05b2a1620332ac9af9b55143fc59f56d3650601cf0c974a74300f7f3->enter($__internal_b869476a05b2a1620332ac9af9b55143fc59f56d3650601cf0c974a74300f7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b869476a05b2a1620332ac9af9b55143fc59f56d3650601cf0c974a74300f7f3->leave($__internal_b869476a05b2a1620332ac9af9b55143fc59f56d3650601cf0c974a74300f7f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
