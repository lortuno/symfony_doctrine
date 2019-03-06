<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4ca52bbccaf1b06bb71c55e62d8956f5027a15ebd066209331583c7581af9582 extends Twig_Template
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
        $__internal_3f08222f9b16ef7cc269d78fd58fcce3e64be0c0e1f9a61bd80e161030b6fa5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f08222f9b16ef7cc269d78fd58fcce3e64be0c0e1f9a61bd80e161030b6fa5d->enter($__internal_3f08222f9b16ef7cc269d78fd58fcce3e64be0c0e1f9a61bd80e161030b6fa5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_162685f8f02bacdc0484522e1c60d16b58bfa66bc66329b719d4dd2e0bf6e9fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162685f8f02bacdc0484522e1c60d16b58bfa66bc66329b719d4dd2e0bf6e9fc->enter($__internal_162685f8f02bacdc0484522e1c60d16b58bfa66bc66329b719d4dd2e0bf6e9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3f08222f9b16ef7cc269d78fd58fcce3e64be0c0e1f9a61bd80e161030b6fa5d->leave($__internal_3f08222f9b16ef7cc269d78fd58fcce3e64be0c0e1f9a61bd80e161030b6fa5d_prof);

        
        $__internal_162685f8f02bacdc0484522e1c60d16b58bfa66bc66329b719d4dd2e0bf6e9fc->leave($__internal_162685f8f02bacdc0484522e1c60d16b58bfa66bc66329b719d4dd2e0bf6e9fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
