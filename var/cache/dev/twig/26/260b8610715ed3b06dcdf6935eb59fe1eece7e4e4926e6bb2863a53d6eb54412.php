<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_1ac830ec43782e89e59f7dcc36ba14076f1af357364c266ea93ee9d773b38440 extends Twig_Template
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
        $__internal_54893d56cb10170c0451e9e51b984afc9415a2a0631d08f00ba1cfcc3ada1660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54893d56cb10170c0451e9e51b984afc9415a2a0631d08f00ba1cfcc3ada1660->enter($__internal_54893d56cb10170c0451e9e51b984afc9415a2a0631d08f00ba1cfcc3ada1660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_a7ddbbf42102c229a949a54c97d2279c7b008919476e045fb492672040e5e687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ddbbf42102c229a949a54c97d2279c7b008919476e045fb492672040e5e687->enter($__internal_a7ddbbf42102c229a949a54c97d2279c7b008919476e045fb492672040e5e687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_54893d56cb10170c0451e9e51b984afc9415a2a0631d08f00ba1cfcc3ada1660->leave($__internal_54893d56cb10170c0451e9e51b984afc9415a2a0631d08f00ba1cfcc3ada1660_prof);

        
        $__internal_a7ddbbf42102c229a949a54c97d2279c7b008919476e045fb492672040e5e687->leave($__internal_a7ddbbf42102c229a949a54c97d2279c7b008919476e045fb492672040e5e687_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
