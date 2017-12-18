<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_bb7361f9edbb14d0c9426cf53986d2f2d47cd1c6af954461e845e4fddf504515 extends Twig_Template
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
        $__internal_bbc71e82c8ceb27fff174cb98c9d8ea88750f5e1e5a6dc713fd9016d02ddb345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc71e82c8ceb27fff174cb98c9d8ea88750f5e1e5a6dc713fd9016d02ddb345->enter($__internal_bbc71e82c8ceb27fff174cb98c9d8ea88750f5e1e5a6dc713fd9016d02ddb345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_bbc71e82c8ceb27fff174cb98c9d8ea88750f5e1e5a6dc713fd9016d02ddb345->leave($__internal_bbc71e82c8ceb27fff174cb98c9d8ea88750f5e1e5a6dc713fd9016d02ddb345_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
