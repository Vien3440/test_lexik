<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_e0c3373c6be4dad4f4df5ca71ec83e96d1b3eb8c4e8f7f4f026bfbc33774b0f7 extends Twig_Template
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
        $__internal_c5178431f22bf16d01511af5227eb431787c478115a758f6d655327b4814b6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5178431f22bf16d01511af5227eb431787c478115a758f6d655327b4814b6fa->enter($__internal_c5178431f22bf16d01511af5227eb431787c478115a758f6d655327b4814b6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c5178431f22bf16d01511af5227eb431787c478115a758f6d655327b4814b6fa->leave($__internal_c5178431f22bf16d01511af5227eb431787c478115a758f6d655327b4814b6fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/choice_options.html.php");
    }
}
