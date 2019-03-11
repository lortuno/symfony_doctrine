<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e503e4bd4d8571d1a2830f6d8b81851e7c184385232092fee981cf99fe37811e extends Twig_Template
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
        $__internal_a3342efc3278d0353c86c877a0f5c60433d180725ae2bc2387c453bc25c7b225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3342efc3278d0353c86c877a0f5c60433d180725ae2bc2387c453bc25c7b225->enter($__internal_a3342efc3278d0353c86c877a0f5c60433d180725ae2bc2387c453bc25c7b225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_eff20bb79b65ff3721705dbee68ad7a8b291e242b39348d2621b02a79b54ad2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff20bb79b65ff3721705dbee68ad7a8b291e242b39348d2621b02a79b54ad2f->enter($__internal_eff20bb79b65ff3721705dbee68ad7a8b291e242b39348d2621b02a79b54ad2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a3342efc3278d0353c86c877a0f5c60433d180725ae2bc2387c453bc25c7b225->leave($__internal_a3342efc3278d0353c86c877a0f5c60433d180725ae2bc2387c453bc25c7b225_prof);

        
        $__internal_eff20bb79b65ff3721705dbee68ad7a8b291e242b39348d2621b02a79b54ad2f->leave($__internal_eff20bb79b65ff3721705dbee68ad7a8b291e242b39348d2621b02a79b54ad2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
