<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9fb1e89cc793766fa6603ae0dd331c70c8a87b1c62a23e9b03fe66db107487d2 extends Twig_Template
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
        $__internal_ba90dd8c43a9bc73b2d65121944fb7100a186d952e4b887229b4e77074d505a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba90dd8c43a9bc73b2d65121944fb7100a186d952e4b887229b4e77074d505a2->enter($__internal_ba90dd8c43a9bc73b2d65121944fb7100a186d952e4b887229b4e77074d505a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_731d2530b56b20b2cbf3116427cf75c41c99c0dc892b2542fe8eb2af81451d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731d2530b56b20b2cbf3116427cf75c41c99c0dc892b2542fe8eb2af81451d88->enter($__internal_731d2530b56b20b2cbf3116427cf75c41c99c0dc892b2542fe8eb2af81451d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ba90dd8c43a9bc73b2d65121944fb7100a186d952e4b887229b4e77074d505a2->leave($__internal_ba90dd8c43a9bc73b2d65121944fb7100a186d952e4b887229b4e77074d505a2_prof);

        
        $__internal_731d2530b56b20b2cbf3116427cf75c41c99c0dc892b2542fe8eb2af81451d88->leave($__internal_731d2530b56b20b2cbf3116427cf75c41c99c0dc892b2542fe8eb2af81451d88_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
