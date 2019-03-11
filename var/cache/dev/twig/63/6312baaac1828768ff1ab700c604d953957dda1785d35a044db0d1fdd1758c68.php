<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_5395d9f084588d13bde25ce18c6681a9171871ec15a7a4550097d0d82f44e77d extends Twig_Template
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
        $__internal_5147c0882db4520cafca6b95dc442af0aeb1b99614fa05e21a4556578cecdb65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5147c0882db4520cafca6b95dc442af0aeb1b99614fa05e21a4556578cecdb65->enter($__internal_5147c0882db4520cafca6b95dc442af0aeb1b99614fa05e21a4556578cecdb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3d3b4a9349800717476b63cd447242d4e21d1e229435ab10798568aa89843e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3b4a9349800717476b63cd447242d4e21d1e229435ab10798568aa89843e50->enter($__internal_3d3b4a9349800717476b63cd447242d4e21d1e229435ab10798568aa89843e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5147c0882db4520cafca6b95dc442af0aeb1b99614fa05e21a4556578cecdb65->leave($__internal_5147c0882db4520cafca6b95dc442af0aeb1b99614fa05e21a4556578cecdb65_prof);

        
        $__internal_3d3b4a9349800717476b63cd447242d4e21d1e229435ab10798568aa89843e50->leave($__internal_3d3b4a9349800717476b63cd447242d4e21d1e229435ab10798568aa89843e50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
