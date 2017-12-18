<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_cd94d5200d5cb4437f1ad15d2830ea9c5589f204fbfc1122e345379eea855a45 extends Twig_Template
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
        $__internal_19e4ed5f0059f31fcb85086eabad495c090aea1057f8b41208a0f1709f43184c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e4ed5f0059f31fcb85086eabad495c090aea1057f8b41208a0f1709f43184c->enter($__internal_19e4ed5f0059f31fcb85086eabad495c090aea1057f8b41208a0f1709f43184c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_19e4ed5f0059f31fcb85086eabad495c090aea1057f8b41208a0f1709f43184c->leave($__internal_19e4ed5f0059f31fcb85086eabad495c090aea1057f8b41208a0f1709f43184c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
