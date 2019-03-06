<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ba5b07faeca78464370fd508caee7532e051bac127793ac1051e4d1487af4c71 extends Twig_Template
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
        $__internal_5e735a31e2b9ebf5c042b0970da848adbbda7b508a0231fa0fd943da4eb4383c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e735a31e2b9ebf5c042b0970da848adbbda7b508a0231fa0fd943da4eb4383c->enter($__internal_5e735a31e2b9ebf5c042b0970da848adbbda7b508a0231fa0fd943da4eb4383c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_8d4b2f2a09471e54204ea8971187ba8f7ba0d1685ff365f84dd5d38c03dfaead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4b2f2a09471e54204ea8971187ba8f7ba0d1685ff365f84dd5d38c03dfaead->enter($__internal_8d4b2f2a09471e54204ea8971187ba8f7ba0d1685ff365f84dd5d38c03dfaead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5e735a31e2b9ebf5c042b0970da848adbbda7b508a0231fa0fd943da4eb4383c->leave($__internal_5e735a31e2b9ebf5c042b0970da848adbbda7b508a0231fa0fd943da4eb4383c_prof);

        
        $__internal_8d4b2f2a09471e54204ea8971187ba8f7ba0d1685ff365f84dd5d38c03dfaead->leave($__internal_8d4b2f2a09471e54204ea8971187ba8f7ba0d1685ff365f84dd5d38c03dfaead_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
