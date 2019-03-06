<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2f6af3bf094e3dd3c41368443c9a367c4166cbc8afb258a7d1ee38118abe5217 extends Twig_Template
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
        $__internal_4d73010696ab568775f1af85e28993bf61205e035cc123efe90478f098457b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d73010696ab568775f1af85e28993bf61205e035cc123efe90478f098457b9c->enter($__internal_4d73010696ab568775f1af85e28993bf61205e035cc123efe90478f098457b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_2b0a9f917d7b440b2a81352494f54e0b15a4e5d5ecd928e424f6a128ec0e2dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0a9f917d7b440b2a81352494f54e0b15a4e5d5ecd928e424f6a128ec0e2dd4->enter($__internal_2b0a9f917d7b440b2a81352494f54e0b15a4e5d5ecd928e424f6a128ec0e2dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4d73010696ab568775f1af85e28993bf61205e035cc123efe90478f098457b9c->leave($__internal_4d73010696ab568775f1af85e28993bf61205e035cc123efe90478f098457b9c_prof);

        
        $__internal_2b0a9f917d7b440b2a81352494f54e0b15a4e5d5ecd928e424f6a128ec0e2dd4->leave($__internal_2b0a9f917d7b440b2a81352494f54e0b15a4e5d5ecd928e424f6a128ec0e2dd4_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
