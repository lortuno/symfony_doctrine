<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c93a1c50fcf95c7af5df95e5ed2cd311c8939571e99933051c1e0fdc2dafceb3 extends Twig_Template
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
        $__internal_f182d82151b00b9220b5a5d29e547cc8372e3793a3cd04254df92e193dae64b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f182d82151b00b9220b5a5d29e547cc8372e3793a3cd04254df92e193dae64b1->enter($__internal_f182d82151b00b9220b5a5d29e547cc8372e3793a3cd04254df92e193dae64b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c749cfe378ea37eb86bfcfc8f24ed2ee522c79c1a1a5a36b47f8ad2de941056f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c749cfe378ea37eb86bfcfc8f24ed2ee522c79c1a1a5a36b47f8ad2de941056f->enter($__internal_c749cfe378ea37eb86bfcfc8f24ed2ee522c79c1a1a5a36b47f8ad2de941056f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->formEncodeCurrency(\$money_pattern, \$view['form']->block(\$form, 'form_widget_simple')) ?>
";
        
        $__internal_f182d82151b00b9220b5a5d29e547cc8372e3793a3cd04254df92e193dae64b1->leave($__internal_f182d82151b00b9220b5a5d29e547cc8372e3793a3cd04254df92e193dae64b1_prof);

        
        $__internal_c749cfe378ea37eb86bfcfc8f24ed2ee522c79c1a1a5a36b47f8ad2de941056f->leave($__internal_c749cfe378ea37eb86bfcfc8f24ed2ee522c79c1a1a5a36b47f8ad2de941056f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->formEncodeCurrency(\$money_pattern, \$view['form']->block(\$form, 'form_widget_simple')) ?>
", "@Framework/Form/money_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
