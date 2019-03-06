<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2c7725e920656718f3220d8e411a5de22c612fe07478eea53f349e79770e1b9a extends Twig_Template
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
        $__internal_31f8308ffd9e42f9910251ca289d39e3c0e1a0b03c13dc83df2c7bd75905547e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f8308ffd9e42f9910251ca289d39e3c0e1a0b03c13dc83df2c7bd75905547e->enter($__internal_31f8308ffd9e42f9910251ca289d39e3c0e1a0b03c13dc83df2c7bd75905547e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_1e044db754a6715f4342f098ad11ab2746dc8e32f8ae1601a308425335791c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e044db754a6715f4342f098ad11ab2746dc8e32f8ae1601a308425335791c57->enter($__internal_1e044db754a6715f4342f098ad11ab2746dc8e32f8ae1601a308425335791c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_31f8308ffd9e42f9910251ca289d39e3c0e1a0b03c13dc83df2c7bd75905547e->leave($__internal_31f8308ffd9e42f9910251ca289d39e3c0e1a0b03c13dc83df2c7bd75905547e_prof);

        
        $__internal_1e044db754a6715f4342f098ad11ab2746dc8e32f8ae1601a308425335791c57->leave($__internal_1e044db754a6715f4342f098ad11ab2746dc8e32f8ae1601a308425335791c57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
