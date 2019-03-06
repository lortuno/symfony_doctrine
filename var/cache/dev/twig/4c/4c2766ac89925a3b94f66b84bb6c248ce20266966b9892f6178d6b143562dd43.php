<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_9b61f183e3b307c90d6cf618fc1bb46187b6035238ad8d687a81a0d15167882d extends Twig_Template
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
        $__internal_08857443de48350a8cc0f6ea22e9c5f528e8519fad46232c93f6442b40dc8980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08857443de48350a8cc0f6ea22e9c5f528e8519fad46232c93f6442b40dc8980->enter($__internal_08857443de48350a8cc0f6ea22e9c5f528e8519fad46232c93f6442b40dc8980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_c94dd27f40b9a957ac267b0285e0480c858ab98117ea731f3744c50eb3bdeb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94dd27f40b9a957ac267b0285e0480c858ab98117ea731f3744c50eb3bdeb00->enter($__internal_c94dd27f40b9a957ac267b0285e0480c858ab98117ea731f3744c50eb3bdeb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_08857443de48350a8cc0f6ea22e9c5f528e8519fad46232c93f6442b40dc8980->leave($__internal_08857443de48350a8cc0f6ea22e9c5f528e8519fad46232c93f6442b40dc8980_prof);

        
        $__internal_c94dd27f40b9a957ac267b0285e0480c858ab98117ea731f3744c50eb3bdeb00->leave($__internal_c94dd27f40b9a957ac267b0285e0480c858ab98117ea731f3744c50eb3bdeb00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
