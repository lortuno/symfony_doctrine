<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_add795c5f3c52eb8b162b604bd4fb062d73d1dffab15f34aaa9d2c07973b972b extends Twig_Template
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
        $__internal_ab275cde64915ee489bf41175109a540b1a337a73fd1862eda63745c260dab14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab275cde64915ee489bf41175109a540b1a337a73fd1862eda63745c260dab14->enter($__internal_ab275cde64915ee489bf41175109a540b1a337a73fd1862eda63745c260dab14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6860e8522069c13d4c2bb19a44fe2458704b9b16c6233679d11f924178648b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6860e8522069c13d4c2bb19a44fe2458704b9b16c6233679d11f924178648b60->enter($__internal_6860e8522069c13d4c2bb19a44fe2458704b9b16c6233679d11f924178648b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ab275cde64915ee489bf41175109a540b1a337a73fd1862eda63745c260dab14->leave($__internal_ab275cde64915ee489bf41175109a540b1a337a73fd1862eda63745c260dab14_prof);

        
        $__internal_6860e8522069c13d4c2bb19a44fe2458704b9b16c6233679d11f924178648b60->leave($__internal_6860e8522069c13d4c2bb19a44fe2458704b9b16c6233679d11f924178648b60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
