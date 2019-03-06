<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6e741e704a5bb48c5739531cd25828d8c2caaed9cba53df8832dad1d497a453e extends Twig_Template
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
        $__internal_5ac38d13e797d24d8e87d2a69718c7e5acaa136a4cb77215f69e366b71aa533f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac38d13e797d24d8e87d2a69718c7e5acaa136a4cb77215f69e366b71aa533f->enter($__internal_5ac38d13e797d24d8e87d2a69718c7e5acaa136a4cb77215f69e366b71aa533f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_fa241164d407da1ccd8a1517f79e7889aae58ca5d3b300f7fec40a7f2442e319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa241164d407da1ccd8a1517f79e7889aae58ca5d3b300f7fec40a7f2442e319->enter($__internal_fa241164d407da1ccd8a1517f79e7889aae58ca5d3b300f7fec40a7f2442e319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5ac38d13e797d24d8e87d2a69718c7e5acaa136a4cb77215f69e366b71aa533f->leave($__internal_5ac38d13e797d24d8e87d2a69718c7e5acaa136a4cb77215f69e366b71aa533f_prof);

        
        $__internal_fa241164d407da1ccd8a1517f79e7889aae58ca5d3b300f7fec40a7f2442e319->leave($__internal_fa241164d407da1ccd8a1517f79e7889aae58ca5d3b300f7fec40a7f2442e319_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
