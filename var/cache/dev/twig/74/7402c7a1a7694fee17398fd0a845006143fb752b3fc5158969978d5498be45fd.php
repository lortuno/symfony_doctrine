<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_9ac7f14d628ebf9adc1c02ecf070cf1c0a43c1eef0c21322247b384498b47cf4 extends Twig_Template
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
        $__internal_41d48e579046a4178c7262e838d34aebf568b25f769b8c417f40075f4d15f93d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41d48e579046a4178c7262e838d34aebf568b25f769b8c417f40075f4d15f93d->enter($__internal_41d48e579046a4178c7262e838d34aebf568b25f769b8c417f40075f4d15f93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_1433eadbeb59209793c114f85debdaf34765335a2867c4cb5133d09e3470736b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1433eadbeb59209793c114f85debdaf34765335a2867c4cb5133d09e3470736b->enter($__internal_1433eadbeb59209793c114f85debdaf34765335a2867c4cb5133d09e3470736b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_41d48e579046a4178c7262e838d34aebf568b25f769b8c417f40075f4d15f93d->leave($__internal_41d48e579046a4178c7262e838d34aebf568b25f769b8c417f40075f4d15f93d_prof);

        
        $__internal_1433eadbeb59209793c114f85debdaf34765335a2867c4cb5133d09e3470736b->leave($__internal_1433eadbeb59209793c114f85debdaf34765335a2867c4cb5133d09e3470736b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/hidden_row.html.php");
    }
}
