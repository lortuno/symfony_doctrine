<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_7d5345ad6011993a1dffe32db09c1387ab80c0ce490c5f74c92a98d582d044ab extends Twig_Template
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
        $__internal_00646a3a1de415231e50deb539847ed71c12d02684e01c07524532a2053ce56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00646a3a1de415231e50deb539847ed71c12d02684e01c07524532a2053ce56e->enter($__internal_00646a3a1de415231e50deb539847ed71c12d02684e01c07524532a2053ce56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e4babb23e486a60052b3ee408f4eefdd269e58d74906612d4832cc9ddc417b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4babb23e486a60052b3ee408f4eefdd269e58d74906612d4832cc9ddc417b39->enter($__internal_e4babb23e486a60052b3ee408f4eefdd269e58d74906612d4832cc9ddc417b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_00646a3a1de415231e50deb539847ed71c12d02684e01c07524532a2053ce56e->leave($__internal_00646a3a1de415231e50deb539847ed71c12d02684e01c07524532a2053ce56e_prof);

        
        $__internal_e4babb23e486a60052b3ee408f4eefdd269e58d74906612d4832cc9ddc417b39->leave($__internal_e4babb23e486a60052b3ee408f4eefdd269e58d74906612d4832cc9ddc417b39_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
