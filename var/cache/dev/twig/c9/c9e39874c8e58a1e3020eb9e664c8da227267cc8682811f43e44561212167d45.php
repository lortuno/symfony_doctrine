<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_0aa23cc962ea4f5d876fbcd72e47e1ad9f4a3e21892adbb40083e00867e714b9 extends Twig_Template
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
        $__internal_90a2529cb31d71167e06ca42f2efc3b0e4f9790de76783349b19895fbaef7964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a2529cb31d71167e06ca42f2efc3b0e4f9790de76783349b19895fbaef7964->enter($__internal_90a2529cb31d71167e06ca42f2efc3b0e4f9790de76783349b19895fbaef7964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_9b05c4454b72820461654a0ac5376b0fdc915849b30cf80c0a33a188a5885206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b05c4454b72820461654a0ac5376b0fdc915849b30cf80c0a33a188a5885206->enter($__internal_9b05c4454b72820461654a0ac5376b0fdc915849b30cf80c0a33a188a5885206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_90a2529cb31d71167e06ca42f2efc3b0e4f9790de76783349b19895fbaef7964->leave($__internal_90a2529cb31d71167e06ca42f2efc3b0e4f9790de76783349b19895fbaef7964_prof);

        
        $__internal_9b05c4454b72820461654a0ac5376b0fdc915849b30cf80c0a33a188a5885206->leave($__internal_9b05c4454b72820461654a0ac5376b0fdc915849b30cf80c0a33a188a5885206_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
