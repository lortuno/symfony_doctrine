<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e99a65dd7b5ee899304a1a795c70d37e479ef704c8c117864e8c7c3d5150f58e extends Twig_Template
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
        $__internal_6f3ca16ead3fd7f8f0ec09eb373733b73e17d7f5b702054e254b9cd816c90f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3ca16ead3fd7f8f0ec09eb373733b73e17d7f5b702054e254b9cd816c90f0c->enter($__internal_6f3ca16ead3fd7f8f0ec09eb373733b73e17d7f5b702054e254b9cd816c90f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_f9b433a0797a5bd2057d71337b9f26d4cd6da1d4f414ecd7161c4e3303f14545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b433a0797a5bd2057d71337b9f26d4cd6da1d4f414ecd7161c4e3303f14545->enter($__internal_f9b433a0797a5bd2057d71337b9f26d4cd6da1d4f414ecd7161c4e3303f14545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6f3ca16ead3fd7f8f0ec09eb373733b73e17d7f5b702054e254b9cd816c90f0c->leave($__internal_6f3ca16ead3fd7f8f0ec09eb373733b73e17d7f5b702054e254b9cd816c90f0c_prof);

        
        $__internal_f9b433a0797a5bd2057d71337b9f26d4cd6da1d4f414ecd7161c4e3303f14545->leave($__internal_f9b433a0797a5bd2057d71337b9f26d4cd6da1d4f414ecd7161c4e3303f14545_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
