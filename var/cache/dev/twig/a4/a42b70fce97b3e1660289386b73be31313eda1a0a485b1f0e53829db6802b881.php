<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_52f156f2ed2f20986d07ea64eb60ec897fda98bc4ab7ea23a1a5a804a18ea0d6 extends Twig_Template
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
        $__internal_05e12549f4b52daf96ef686b6074e3a2ccd45396cb1d53cfd599d1448b8dc1c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e12549f4b52daf96ef686b6074e3a2ccd45396cb1d53cfd599d1448b8dc1c3->enter($__internal_05e12549f4b52daf96ef686b6074e3a2ccd45396cb1d53cfd599d1448b8dc1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_819e390d457916720ca2c8f81e4ea9d49414bf5b0b37cec6d9140f9f4c1f5b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819e390d457916720ca2c8f81e4ea9d49414bf5b0b37cec6d9140f9f4c1f5b09->enter($__internal_819e390d457916720ca2c8f81e4ea9d49414bf5b0b37cec6d9140f9f4c1f5b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_05e12549f4b52daf96ef686b6074e3a2ccd45396cb1d53cfd599d1448b8dc1c3->leave($__internal_05e12549f4b52daf96ef686b6074e3a2ccd45396cb1d53cfd599d1448b8dc1c3_prof);

        
        $__internal_819e390d457916720ca2c8f81e4ea9d49414bf5b0b37cec6d9140f9f4c1f5b09->leave($__internal_819e390d457916720ca2c8f81e4ea9d49414bf5b0b37cec6d9140f9f4c1f5b09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
