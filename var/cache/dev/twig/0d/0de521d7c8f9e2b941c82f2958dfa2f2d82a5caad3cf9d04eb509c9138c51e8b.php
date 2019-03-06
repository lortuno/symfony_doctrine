<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0dabf7f14ff114e3abdc3f790aa61ed3e1ef2d5dbdbd89053cb8600d168ae6ef extends Twig_Template
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
        $__internal_3e44d42d2e111c6da78720fa08f01eae00928923c99877d9118f32b0ed5ead54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e44d42d2e111c6da78720fa08f01eae00928923c99877d9118f32b0ed5ead54->enter($__internal_3e44d42d2e111c6da78720fa08f01eae00928923c99877d9118f32b0ed5ead54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e73b472090da9f1511a8d600d99c8a05b25d71aecf122d5ed21cbf2095a2f899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73b472090da9f1511a8d600d99c8a05b25d71aecf122d5ed21cbf2095a2f899->enter($__internal_e73b472090da9f1511a8d600d99c8a05b25d71aecf122d5ed21cbf2095a2f899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3e44d42d2e111c6da78720fa08f01eae00928923c99877d9118f32b0ed5ead54->leave($__internal_3e44d42d2e111c6da78720fa08f01eae00928923c99877d9118f32b0ed5ead54_prof);

        
        $__internal_e73b472090da9f1511a8d600d99c8a05b25d71aecf122d5ed21cbf2095a2f899->leave($__internal_e73b472090da9f1511a8d600d99c8a05b25d71aecf122d5ed21cbf2095a2f899_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
