<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c96b43bbddb154a4192f2300bf89d00e4f7e31f17eb5cf0de7e7e71ad599ad8a extends Twig_Template
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
        $__internal_893d1e240cb074c4ddb6bba64ecf6d0311678146bbf7373e368ffb98177c4ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893d1e240cb074c4ddb6bba64ecf6d0311678146bbf7373e368ffb98177c4ada->enter($__internal_893d1e240cb074c4ddb6bba64ecf6d0311678146bbf7373e368ffb98177c4ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3c1ef0b4233e2dcfdd51a7913b70cd8f8c1c726d22a12584c000095db50debd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c1ef0b4233e2dcfdd51a7913b70cd8f8c1c726d22a12584c000095db50debd8->enter($__internal_3c1ef0b4233e2dcfdd51a7913b70cd8f8c1c726d22a12584c000095db50debd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_893d1e240cb074c4ddb6bba64ecf6d0311678146bbf7373e368ffb98177c4ada->leave($__internal_893d1e240cb074c4ddb6bba64ecf6d0311678146bbf7373e368ffb98177c4ada_prof);

        
        $__internal_3c1ef0b4233e2dcfdd51a7913b70cd8f8c1c726d22a12584c000095db50debd8->leave($__internal_3c1ef0b4233e2dcfdd51a7913b70cd8f8c1c726d22a12584c000095db50debd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
