<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_5e0771a4cdd16396f2334667b3f29d1a8a3073a3d2c1639768ede997aa26a577 extends Twig_Template
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
        $__internal_4a16c4b486bc9bd8b4d01b496c6d1cf711224f81d29f4b67307ca28916274e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a16c4b486bc9bd8b4d01b496c6d1cf711224f81d29f4b67307ca28916274e05->enter($__internal_4a16c4b486bc9bd8b4d01b496c6d1cf711224f81d29f4b67307ca28916274e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_36d949f542bdfb8686b542873a1142b3db9cc9966eddc0bd7dddf5d2d23ab4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d949f542bdfb8686b542873a1142b3db9cc9966eddc0bd7dddf5d2d23ab4e7->enter($__internal_36d949f542bdfb8686b542873a1142b3db9cc9966eddc0bd7dddf5d2d23ab4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->formEncodeCurrency(\$money_pattern, \$view['form']->block(\$form, 'form_widget_simple')) ?>
";
        
        $__internal_4a16c4b486bc9bd8b4d01b496c6d1cf711224f81d29f4b67307ca28916274e05->leave($__internal_4a16c4b486bc9bd8b4d01b496c6d1cf711224f81d29f4b67307ca28916274e05_prof);

        
        $__internal_36d949f542bdfb8686b542873a1142b3db9cc9966eddc0bd7dddf5d2d23ab4e7->leave($__internal_36d949f542bdfb8686b542873a1142b3db9cc9966eddc0bd7dddf5d2d23ab4e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->formEncodeCurrency(\$money_pattern, \$view['form']->block(\$form, 'form_widget_simple')) ?>
", "@Framework/Form/money_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
