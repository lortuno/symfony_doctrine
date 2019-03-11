<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_0c1247c3bae114598fab9f91ac09fd99a3a725b5b69e3c2f34da5897249f74a7 extends Twig_Template
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
        $__internal_b089246df8d94cf36a60fe4d833ac8898da90f10798545583b0473ce61d254ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b089246df8d94cf36a60fe4d833ac8898da90f10798545583b0473ce61d254ce->enter($__internal_b089246df8d94cf36a60fe4d833ac8898da90f10798545583b0473ce61d254ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_934f39561f495751e3acff1eb0ae492461990bf014cf0ffff5a1c4924c9bf318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934f39561f495751e3acff1eb0ae492461990bf014cf0ffff5a1c4924c9bf318->enter($__internal_934f39561f495751e3acff1eb0ae492461990bf014cf0ffff5a1c4924c9bf318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_b089246df8d94cf36a60fe4d833ac8898da90f10798545583b0473ce61d254ce->leave($__internal_b089246df8d94cf36a60fe4d833ac8898da90f10798545583b0473ce61d254ce_prof);

        
        $__internal_934f39561f495751e3acff1eb0ae492461990bf014cf0ffff5a1c4924c9bf318->leave($__internal_934f39561f495751e3acff1eb0ae492461990bf014cf0ffff5a1c4924c9bf318_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
