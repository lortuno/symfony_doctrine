<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_684770e4471c27d8ec77f3efd50cbaacf6e59f0672aac099145c879b00cf421c extends Twig_Template
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
        $__internal_2f7353e5551898fa0dbbee1ace5f32ea2ea39226a8273012bbf604ef8e2120a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f7353e5551898fa0dbbee1ace5f32ea2ea39226a8273012bbf604ef8e2120a0->enter($__internal_2f7353e5551898fa0dbbee1ace5f32ea2ea39226a8273012bbf604ef8e2120a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_acf866413b0cdfbcdb377cdb0a716f7425d3e0103b9bbb7058d5846abd6ecaa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf866413b0cdfbcdb377cdb0a716f7425d3e0103b9bbb7058d5846abd6ecaa8->enter($__internal_acf866413b0cdfbcdb377cdb0a716f7425d3e0103b9bbb7058d5846abd6ecaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_2f7353e5551898fa0dbbee1ace5f32ea2ea39226a8273012bbf604ef8e2120a0->leave($__internal_2f7353e5551898fa0dbbee1ace5f32ea2ea39226a8273012bbf604ef8e2120a0_prof);

        
        $__internal_acf866413b0cdfbcdb377cdb0a716f7425d3e0103b9bbb7058d5846abd6ecaa8->leave($__internal_acf866413b0cdfbcdb377cdb0a716f7425d3e0103b9bbb7058d5846abd6ecaa8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
