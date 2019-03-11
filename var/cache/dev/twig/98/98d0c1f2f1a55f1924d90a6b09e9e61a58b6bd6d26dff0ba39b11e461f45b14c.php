<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0681cd982c197aaeaf05118ac575e42b51c48738534b2ad357865a9dee925f9f extends Twig_Template
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
        $__internal_bdbf50969af43bcd58cc8abd5dae4eaadf687f36ff5d4341f994684c59fa3dd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdbf50969af43bcd58cc8abd5dae4eaadf687f36ff5d4341f994684c59fa3dd2->enter($__internal_bdbf50969af43bcd58cc8abd5dae4eaadf687f36ff5d4341f994684c59fa3dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4acf27e742bb0c3d9d3e8ed1ce5eddca69dd5d73cef01877596e706059d6edfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acf27e742bb0c3d9d3e8ed1ce5eddca69dd5d73cef01877596e706059d6edfa->enter($__internal_4acf27e742bb0c3d9d3e8ed1ce5eddca69dd5d73cef01877596e706059d6edfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bdbf50969af43bcd58cc8abd5dae4eaadf687f36ff5d4341f994684c59fa3dd2->leave($__internal_bdbf50969af43bcd58cc8abd5dae4eaadf687f36ff5d4341f994684c59fa3dd2_prof);

        
        $__internal_4acf27e742bb0c3d9d3e8ed1ce5eddca69dd5d73cef01877596e706059d6edfa->leave($__internal_4acf27e742bb0c3d9d3e8ed1ce5eddca69dd5d73cef01877596e706059d6edfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
