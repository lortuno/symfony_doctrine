<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_23ed961fe9a85e94e1b449e5a98504db32ab620a5e9cb18d5f9e84a024003c6d extends Twig_Template
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
        $__internal_77dee336bf43ee99ec486eddbd22dfd6978fb515ac096d21f49da349ccb5bcc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77dee336bf43ee99ec486eddbd22dfd6978fb515ac096d21f49da349ccb5bcc6->enter($__internal_77dee336bf43ee99ec486eddbd22dfd6978fb515ac096d21f49da349ccb5bcc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_9ef94a0dfb1d9812e060304dd0c6140d3fdbdf82ae791c76febf1cd8bcf1bd08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef94a0dfb1d9812e060304dd0c6140d3fdbdf82ae791c76febf1cd8bcf1bd08->enter($__internal_9ef94a0dfb1d9812e060304dd0c6140d3fdbdf82ae791c76febf1cd8bcf1bd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_77dee336bf43ee99ec486eddbd22dfd6978fb515ac096d21f49da349ccb5bcc6->leave($__internal_77dee336bf43ee99ec486eddbd22dfd6978fb515ac096d21f49da349ccb5bcc6_prof);

        
        $__internal_9ef94a0dfb1d9812e060304dd0c6140d3fdbdf82ae791c76febf1cd8bcf1bd08->leave($__internal_9ef94a0dfb1d9812e060304dd0c6140d3fdbdf82ae791c76febf1cd8bcf1bd08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
