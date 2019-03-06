<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_ef0d989dae03f6ab10c613208eeba2200e2e39685200d0a6947277ca2d55b7ef extends Twig_Template
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
        $__internal_1ccf786a6cc3f7b96321db382043877b71b9e4da5069c1100e4f6f3bb735d922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ccf786a6cc3f7b96321db382043877b71b9e4da5069c1100e4f6f3bb735d922->enter($__internal_1ccf786a6cc3f7b96321db382043877b71b9e4da5069c1100e4f6f3bb735d922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_c1a2fda23e0348a80781e3cbc403e20c9115db537c74d67e6493f27eba3f9dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a2fda23e0348a80781e3cbc403e20c9115db537c74d67e6493f27eba3f9dd9->enter($__internal_c1a2fda23e0348a80781e3cbc403e20c9115db537c74d67e6493f27eba3f9dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1ccf786a6cc3f7b96321db382043877b71b9e4da5069c1100e4f6f3bb735d922->leave($__internal_1ccf786a6cc3f7b96321db382043877b71b9e4da5069c1100e4f6f3bb735d922_prof);

        
        $__internal_c1a2fda23e0348a80781e3cbc403e20c9115db537c74d67e6493f27eba3f9dd9->leave($__internal_c1a2fda23e0348a80781e3cbc403e20c9115db537c74d67e6493f27eba3f9dd9_prof);

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
", "@Framework/Form/widget_attributes.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
