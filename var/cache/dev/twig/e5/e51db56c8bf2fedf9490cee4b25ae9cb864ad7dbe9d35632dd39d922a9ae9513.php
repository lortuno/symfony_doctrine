<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_2872886981aa3c6108e425647e5bd4242cf31383b710690ffc4ea3a52d46d5e3 extends Twig_Template
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
        $__internal_e2e1ccd38484cbf975acf8b14c528d467e4e95907337225f95e6f9988b451c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e1ccd38484cbf975acf8b14c528d467e4e95907337225f95e6f9988b451c37->enter($__internal_e2e1ccd38484cbf975acf8b14c528d467e4e95907337225f95e6f9988b451c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_31face3ae0f2c25d508582e217e2682937afb320794879f08c4b0d8733545c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31face3ae0f2c25d508582e217e2682937afb320794879f08c4b0d8733545c02->enter($__internal_31face3ae0f2c25d508582e217e2682937afb320794879f08c4b0d8733545c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_e2e1ccd38484cbf975acf8b14c528d467e4e95907337225f95e6f9988b451c37->leave($__internal_e2e1ccd38484cbf975acf8b14c528d467e4e95907337225f95e6f9988b451c37_prof);

        
        $__internal_31face3ae0f2c25d508582e217e2682937afb320794879f08c4b0d8733545c02->leave($__internal_31face3ae0f2c25d508582e217e2682937afb320794879f08c4b0d8733545c02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "/home/master/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
