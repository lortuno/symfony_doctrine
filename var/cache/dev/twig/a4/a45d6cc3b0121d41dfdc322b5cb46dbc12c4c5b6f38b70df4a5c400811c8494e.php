<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8a5a6208aafd325f01c60d638aaaeac81d8235dd24e234169d64430d6dd8e3f5 extends Twig_Template
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
        $__internal_ca996338ad922a69eb08212ea1c431a28426c705dcd6428be50c9c9270a76f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca996338ad922a69eb08212ea1c431a28426c705dcd6428be50c9c9270a76f93->enter($__internal_ca996338ad922a69eb08212ea1c431a28426c705dcd6428be50c9c9270a76f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d7f446b3093cada729e4958fd09a21503a26f86af25be824bf6de97bb2b33cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f446b3093cada729e4958fd09a21503a26f86af25be824bf6de97bb2b33cab->enter($__internal_d7f446b3093cada729e4958fd09a21503a26f86af25be824bf6de97bb2b33cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ca996338ad922a69eb08212ea1c431a28426c705dcd6428be50c9c9270a76f93->leave($__internal_ca996338ad922a69eb08212ea1c431a28426c705dcd6428be50c9c9270a76f93_prof);

        
        $__internal_d7f446b3093cada729e4958fd09a21503a26f86af25be824bf6de97bb2b33cab->leave($__internal_d7f446b3093cada729e4958fd09a21503a26f86af25be824bf6de97bb2b33cab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
