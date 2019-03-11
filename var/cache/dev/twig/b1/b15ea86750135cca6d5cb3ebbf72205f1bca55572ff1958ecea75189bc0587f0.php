<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_39d3b29b62804cd503dec0d86ad9a0ccbac5bdc2b11ca87f7680f97df05d80b5 extends Twig_Template
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
        $__internal_72b30d1bff314076b8e33af91a87720cdaa5363e2520423561784bafaa89afac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b30d1bff314076b8e33af91a87720cdaa5363e2520423561784bafaa89afac->enter($__internal_72b30d1bff314076b8e33af91a87720cdaa5363e2520423561784bafaa89afac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_43a5e19146bf66ab138596ce6fb74ada0960b83a8c9da92361f7aea09d7295b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a5e19146bf66ab138596ce6fb74ada0960b83a8c9da92361f7aea09d7295b1->enter($__internal_43a5e19146bf66ab138596ce6fb74ada0960b83a8c9da92361f7aea09d7295b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_72b30d1bff314076b8e33af91a87720cdaa5363e2520423561784bafaa89afac->leave($__internal_72b30d1bff314076b8e33af91a87720cdaa5363e2520423561784bafaa89afac_prof);

        
        $__internal_43a5e19146bf66ab138596ce6fb74ada0960b83a8c9da92361f7aea09d7295b1->leave($__internal_43a5e19146bf66ab138596ce6fb74ada0960b83a8c9da92361f7aea09d7295b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
