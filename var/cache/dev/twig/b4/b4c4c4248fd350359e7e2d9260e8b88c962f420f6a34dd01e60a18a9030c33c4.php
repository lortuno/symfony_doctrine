<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_a906fe78ed79e9aa913f47071bbc5ebbd3c728e7999131905189e5bc4f2652d7 extends Twig_Template
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
        $__internal_dbf9a52074308a59b0994742f9558e69734db927edc03fe9fa8746dd8a43f34a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf9a52074308a59b0994742f9558e69734db927edc03fe9fa8746dd8a43f34a->enter($__internal_dbf9a52074308a59b0994742f9558e69734db927edc03fe9fa8746dd8a43f34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_e5555f8a585e987c3272ea98d865e4c446208678abd5287e3d21856464e1d9d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5555f8a585e987c3272ea98d865e4c446208678abd5287e3d21856464e1d9d8->enter($__internal_e5555f8a585e987c3272ea98d865e4c446208678abd5287e3d21856464e1d9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_dbf9a52074308a59b0994742f9558e69734db927edc03fe9fa8746dd8a43f34a->leave($__internal_dbf9a52074308a59b0994742f9558e69734db927edc03fe9fa8746dd8a43f34a_prof);

        
        $__internal_e5555f8a585e987c3272ea98d865e4c446208678abd5287e3d21856464e1d9d8->leave($__internal_e5555f8a585e987c3272ea98d865e4c446208678abd5287e3d21856464e1d9d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/repeated_row.html.php");
    }
}
