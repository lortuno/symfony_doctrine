<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7bd51e398137f0fab52d305f9d95c490df813e03e445982cbf1a39d5597fb6c1 extends Twig_Template
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
        $__internal_a3d5b08451939eea38d63534297b8a584077a8348006927c8eb2d42d2c461450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d5b08451939eea38d63534297b8a584077a8348006927c8eb2d42d2c461450->enter($__internal_a3d5b08451939eea38d63534297b8a584077a8348006927c8eb2d42d2c461450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_aceb8fa4a1b62f669155ec4722acc886a121502bf0eda370b71bf6afd9bdf1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aceb8fa4a1b62f669155ec4722acc886a121502bf0eda370b71bf6afd9bdf1db->enter($__internal_aceb8fa4a1b62f669155ec4722acc886a121502bf0eda370b71bf6afd9bdf1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a3d5b08451939eea38d63534297b8a584077a8348006927c8eb2d42d2c461450->leave($__internal_a3d5b08451939eea38d63534297b8a584077a8348006927c8eb2d42d2c461450_prof);

        
        $__internal_aceb8fa4a1b62f669155ec4722acc886a121502bf0eda370b71bf6afd9bdf1db->leave($__internal_aceb8fa4a1b62f669155ec4722acc886a121502bf0eda370b71bf6afd9bdf1db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
