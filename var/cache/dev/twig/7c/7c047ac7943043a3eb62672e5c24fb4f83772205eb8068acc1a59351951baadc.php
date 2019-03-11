<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_2c113b9fe85a665c2c68459f7c1a6d28156d830ec0c7c287c164712ba90cd19c extends Twig_Template
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
        $__internal_5338fb2d59805b18f3c15feb9dd0ff0172fc7070ffcd10841232f92512d2cda0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5338fb2d59805b18f3c15feb9dd0ff0172fc7070ffcd10841232f92512d2cda0->enter($__internal_5338fb2d59805b18f3c15feb9dd0ff0172fc7070ffcd10841232f92512d2cda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_13833cfd3a6943fa42691230dd1aa6dfd30595504a9a995ecbf2a138a234cb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13833cfd3a6943fa42691230dd1aa6dfd30595504a9a995ecbf2a138a234cb6f->enter($__internal_13833cfd3a6943fa42691230dd1aa6dfd30595504a9a995ecbf2a138a234cb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_5338fb2d59805b18f3c15feb9dd0ff0172fc7070ffcd10841232f92512d2cda0->leave($__internal_5338fb2d59805b18f3c15feb9dd0ff0172fc7070ffcd10841232f92512d2cda0_prof);

        
        $__internal_13833cfd3a6943fa42691230dd1aa6dfd30595504a9a995ecbf2a138a234cb6f->leave($__internal_13833cfd3a6943fa42691230dd1aa6dfd30595504a9a995ecbf2a138a234cb6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}
