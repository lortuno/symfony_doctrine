<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0fd180db9593f78a98ddd7de04a183c458b3d6afea416afcea783ca06e0494ba extends Twig_Template
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
        $__internal_f078abb6502b3d38fac29956556d94384686818521f429fba094ee1e544394d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f078abb6502b3d38fac29956556d94384686818521f429fba094ee1e544394d0->enter($__internal_f078abb6502b3d38fac29956556d94384686818521f429fba094ee1e544394d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d31f87071672d6904f4e235cde57de03e8369d6737c95cd037231fffe04c7919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31f87071672d6904f4e235cde57de03e8369d6737c95cd037231fffe04c7919->enter($__internal_d31f87071672d6904f4e235cde57de03e8369d6737c95cd037231fffe04c7919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f078abb6502b3d38fac29956556d94384686818521f429fba094ee1e544394d0->leave($__internal_f078abb6502b3d38fac29956556d94384686818521f429fba094ee1e544394d0_prof);

        
        $__internal_d31f87071672d6904f4e235cde57de03e8369d6737c95cd037231fffe04c7919->leave($__internal_d31f87071672d6904f4e235cde57de03e8369d6737c95cd037231fffe04c7919_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
