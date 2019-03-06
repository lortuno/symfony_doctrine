<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_93557e5575ea3246e397e54975516e7845eb6dbe48143262f2148c170540e382 extends Twig_Template
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
        $__internal_ba8e3d71c531d6dfa15bffcc6f5667ecad916d934deab0179b8c29126ceeb1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8e3d71c531d6dfa15bffcc6f5667ecad916d934deab0179b8c29126ceeb1ab->enter($__internal_ba8e3d71c531d6dfa15bffcc6f5667ecad916d934deab0179b8c29126ceeb1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_f5c65c7d35e72a7c436e598b9bd5c1c68eab974d9b3785e83d71944c044bd43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c65c7d35e72a7c436e598b9bd5c1c68eab974d9b3785e83d71944c044bd43e->enter($__internal_f5c65c7d35e72a7c436e598b9bd5c1c68eab974d9b3785e83d71944c044bd43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_ba8e3d71c531d6dfa15bffcc6f5667ecad916d934deab0179b8c29126ceeb1ab->leave($__internal_ba8e3d71c531d6dfa15bffcc6f5667ecad916d934deab0179b8c29126ceeb1ab_prof);

        
        $__internal_f5c65c7d35e72a7c436e598b9bd5c1c68eab974d9b3785e83d71944c044bd43e->leave($__internal_f5c65c7d35e72a7c436e598b9bd5c1c68eab974d9b3785e83d71944c044bd43e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
