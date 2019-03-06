<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f31eff407e6cf56cd477a841f0c6ffdd28f897c744a2a73ab653098d81d2b69b extends Twig_Template
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
        $__internal_ab677565f90c1c75052d19018ef6d8b06626d3dd0fde99a80938e480363761d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab677565f90c1c75052d19018ef6d8b06626d3dd0fde99a80938e480363761d8->enter($__internal_ab677565f90c1c75052d19018ef6d8b06626d3dd0fde99a80938e480363761d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_56ed33fd8a16122f61d9a43b2727cc2b02e51990755e8e0f1d1136d2a6cd6457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ed33fd8a16122f61d9a43b2727cc2b02e51990755e8e0f1d1136d2a6cd6457->enter($__internal_56ed33fd8a16122f61d9a43b2727cc2b02e51990755e8e0f1d1136d2a6cd6457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ab677565f90c1c75052d19018ef6d8b06626d3dd0fde99a80938e480363761d8->leave($__internal_ab677565f90c1c75052d19018ef6d8b06626d3dd0fde99a80938e480363761d8_prof);

        
        $__internal_56ed33fd8a16122f61d9a43b2727cc2b02e51990755e8e0f1d1136d2a6cd6457->leave($__internal_56ed33fd8a16122f61d9a43b2727cc2b02e51990755e8e0f1d1136d2a6cd6457_prof);

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
", "@Framework/Form/form.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
