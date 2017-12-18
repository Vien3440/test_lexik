<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b460b3cfd1ddeae0b8c61efa49aefb9b89860f74b72b2d620be7814279393847 extends Twig_Template
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
        $__internal_eeab38e7056901e729aa3e90f3aeb7232728d4bc5a22190480f7d1ff7c6bb581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeab38e7056901e729aa3e90f3aeb7232728d4bc5a22190480f7d1ff7c6bb581->enter($__internal_eeab38e7056901e729aa3e90f3aeb7232728d4bc5a22190480f7d1ff7c6bb581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_eeab38e7056901e729aa3e90f3aeb7232728d4bc5a22190480f7d1ff7c6bb581->leave($__internal_eeab38e7056901e729aa3e90f3aeb7232728d4bc5a22190480f7d1ff7c6bb581_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/test_lexik/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
