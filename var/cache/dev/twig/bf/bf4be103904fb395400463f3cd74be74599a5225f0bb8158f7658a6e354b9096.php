<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f46c38b2d33cd4764686880fe854a68ffdc858f04bf0eb741dc7b29c47d1f819 extends Twig_Template
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
        $__internal_7b334fa188f634b421e7527c9cba895d4530a1078fd0e46f8917ed258c8017be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b334fa188f634b421e7527c9cba895d4530a1078fd0e46f8917ed258c8017be->enter($__internal_7b334fa188f634b421e7527c9cba895d4530a1078fd0e46f8917ed258c8017be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c19e9033957079cc0c0840df1764e061de9297bc7e1794aa9c615e318718094e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19e9033957079cc0c0840df1764e061de9297bc7e1794aa9c615e318718094e->enter($__internal_c19e9033957079cc0c0840df1764e061de9297bc7e1794aa9c615e318718094e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7b334fa188f634b421e7527c9cba895d4530a1078fd0e46f8917ed258c8017be->leave($__internal_7b334fa188f634b421e7527c9cba895d4530a1078fd0e46f8917ed258c8017be_prof);

        
        $__internal_c19e9033957079cc0c0840df1764e061de9297bc7e1794aa9c615e318718094e->leave($__internal_c19e9033957079cc0c0840df1764e061de9297bc7e1794aa9c615e318718094e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
