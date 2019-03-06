<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_353c040f751d4929861b9fdad8c0a325f698595777f22b99c768dc0764ee088d extends Twig_Template
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
        $__internal_72ec0f17248dc85d42ea365bf80769d967a2fae3667b7efedb72adf3edd58b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ec0f17248dc85d42ea365bf80769d967a2fae3667b7efedb72adf3edd58b9f->enter($__internal_72ec0f17248dc85d42ea365bf80769d967a2fae3667b7efedb72adf3edd58b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_ffb5131d61a1070fab22c90994a0e2014e1e2cf5040ddc476300891a364e3ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb5131d61a1070fab22c90994a0e2014e1e2cf5040ddc476300891a364e3ce2->enter($__internal_ffb5131d61a1070fab22c90994a0e2014e1e2cf5040ddc476300891a364e3ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_72ec0f17248dc85d42ea365bf80769d967a2fae3667b7efedb72adf3edd58b9f->leave($__internal_72ec0f17248dc85d42ea365bf80769d967a2fae3667b7efedb72adf3edd58b9f_prof);

        
        $__internal_ffb5131d61a1070fab22c90994a0e2014e1e2cf5040ddc476300891a364e3ce2->leave($__internal_ffb5131d61a1070fab22c90994a0e2014e1e2cf5040ddc476300891a364e3ce2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/number_widget.html.php");
    }
}
