<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a14a75413871cad0ee7a027a833b175f9b0e91a6feff8c004cc95bb986add829 extends Twig_Template
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
        $__internal_b2c25b4beb9e28d93015ff9c348aa247aacbf0d3e7e954e1d931057a4d9f3c9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c25b4beb9e28d93015ff9c348aa247aacbf0d3e7e954e1d931057a4d9f3c9e->enter($__internal_b2c25b4beb9e28d93015ff9c348aa247aacbf0d3e7e954e1d931057a4d9f3c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_075d003a3fcd592c9595431a101c819e8e758a0eafe1b0437c8a3703cec48c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075d003a3fcd592c9595431a101c819e8e758a0eafe1b0437c8a3703cec48c33->enter($__internal_075d003a3fcd592c9595431a101c819e8e758a0eafe1b0437c8a3703cec48c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b2c25b4beb9e28d93015ff9c348aa247aacbf0d3e7e954e1d931057a4d9f3c9e->leave($__internal_b2c25b4beb9e28d93015ff9c348aa247aacbf0d3e7e954e1d931057a4d9f3c9e_prof);

        
        $__internal_075d003a3fcd592c9595431a101c819e8e758a0eafe1b0437c8a3703cec48c33->leave($__internal_075d003a3fcd592c9595431a101c819e8e758a0eafe1b0437c8a3703cec48c33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
