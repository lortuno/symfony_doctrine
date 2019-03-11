<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_206e48629eb9ecfa87eb7a96e7a31bbcd5fb977c493decfe9c8594c56cb1d3ce extends Twig_Template
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
        $__internal_a255a3bf33f65dc53a891082ae78fa4e67edaf3104744ccd17458c35dfdc1ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a255a3bf33f65dc53a891082ae78fa4e67edaf3104744ccd17458c35dfdc1ad5->enter($__internal_a255a3bf33f65dc53a891082ae78fa4e67edaf3104744ccd17458c35dfdc1ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_599cb6baba472862e65a9423c37a1a1c5288bbd77566943220c2779bb6f2d203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599cb6baba472862e65a9423c37a1a1c5288bbd77566943220c2779bb6f2d203->enter($__internal_599cb6baba472862e65a9423c37a1a1c5288bbd77566943220c2779bb6f2d203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a255a3bf33f65dc53a891082ae78fa4e67edaf3104744ccd17458c35dfdc1ad5->leave($__internal_a255a3bf33f65dc53a891082ae78fa4e67edaf3104744ccd17458c35dfdc1ad5_prof);

        
        $__internal_599cb6baba472862e65a9423c37a1a1c5288bbd77566943220c2779bb6f2d203->leave($__internal_599cb6baba472862e65a9423c37a1a1c5288bbd77566943220c2779bb6f2d203_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
